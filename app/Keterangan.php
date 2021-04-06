<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'keterangan';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_keterangan';

    /**
     * Fill the model with an array of attributes.
     *
     * @param  array  $attributes
     * @return $this
     *
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    protected $fillable = [
        'id_tes',
        'id_paket',
		'd',
		'i',
		's',
		'c',
	];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
