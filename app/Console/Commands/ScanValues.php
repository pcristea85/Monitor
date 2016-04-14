<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Value;
use App\ValueHistoric;
use App\User;
use Mail;
use anlutro\cURL\Laravel\cURL;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector\CssSelector;

class ScanValues extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'values:scan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // get values
        $values = Value::all();

        foreach ($values as $value) {

            echo "Scanning " . $value->url . PHP_EOL;
            
            $response = cURL::get($value->url);

            $crawler = new Crawler($response->body);

            $out = $crawler->filter($value->css_rule);
            $css_match = $out->text();

            if(!empty($css_match)) {
                // record value
                $historic = new ValueHistoric;
                $historic->value_id = $value->id;
                $historic->value = $css_match;    
                $historic->save();
            }

            // if value is past threshold and email option is on, send email
            if( $value->alert ) {
                if( $value->type == 'text' ) {
                    if( preg_match_all("/".$value->value."/i", $css_match ) > 0 ) {
                        //send email
                        //$this->mailAlert($value, $historic);
                        echo "Sending mail for" . $value->name . PHP_EOL;
                    }
                } else {
                    if( floatval($css_match) < floatval($value->value) ) {
                        //send email
                        //$this->mailAlert($value, $historic);
                        echo "Sending mail for" . $value->name . PHP_EOL;
                    }
                }
            }          
        }
    }

    /**
     * Send email alert
     *
     * @return void
     */
    private function mailAlert(Value $value, ValueHistoric $historic) {
        //get user for this value
        $user = User::find($value->user_id);

        Mail::send('mail.alert', ['user' => $user, 'value'=>$value, 'historic'=>$historic], function ($m) use ($user) {
            $m->from('hello@monitor.dev', 'Monitor');

            $m->to($user->email, $user->name)->subject('Value changed');
        });
    }
}
