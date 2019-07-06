<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     *
     * e.g: protected $table = 'examples';
     */

    /**
     * The primary key associated with the table.
     *
     * @var string
     *
     * e.g: protected $primaryKey = 'example_id';
     */


    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     *
     * e.g: public $incrementing = false;
     */


    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     *
     * e.g: protected $keyType = 'string';
     */


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     *
     * e.g: public $timestamps = false;
     */


    /**
     * The storage format of the model's date columns.
     *
     * @var string
     *
     * e.g: protected $dateFormat = 'U';
     */


    /**
     * The connection name for the model.
     *
     * @var string
     *
     * e.g: protected $connection = 'connection-name';
     */


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'delayed' => false,
    ];



}