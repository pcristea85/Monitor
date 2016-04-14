<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'values';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'css_rule', 'type', 'user_id', 'url', 'alert'
    ];

    protected $casts = [
        'alert' => 'boolean'
    ];

    /**
     * Get the history for this value.
     */
    public function history() {
        return $this->hasMany('App\ValueHistoric');
    }
}
