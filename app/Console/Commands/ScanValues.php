<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Value;
use App\ValueHistoric;
use PHPHtmlParser\Dom;

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
     * @return mixed
     */
    public function handle()
    {

        //dd(preg_match_all("/Google/i", '<title>Google</title>' ));


        // get values
        $values = Value::all();

        foreach ($values as $value) {
            $dom = new Dom;
            // retrieve html
            $dom->loadFromUrl($value->url);
            $css_match = $dom->find($value->css_rule)[0];
            
            if(!empty($css_match)) {
                // record value
                $historic = new ValueHistoric;
                $historic->value_id = $value->id;
                $historic->value = $css_match;    
                $historic->save();
            }            
        }

        // if value is past threshold and email option is on, send email
        if( $value->alert ) {

            if( $value->type == 'text' ) {
                if( preg_match_all("/".$value->value."/i", $css_match ) > 0 ) {
                    //send email
                    echo('SEND EMAIL').PHP_EOL;
                }
            } else {
                if( floatval($css_match) < floatval($value->value) ) {
                    //send email
                    echo('SEND EMAIL').PHP_EOL;
                }
            }
        }
    }
}
