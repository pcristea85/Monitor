<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValueHistoric extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'values_history';

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
        'value', 'value_id'
    ];
}
