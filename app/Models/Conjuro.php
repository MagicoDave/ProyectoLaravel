<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conjuro
 *
 * @property $id
 * @property $nombre
 * @property $nivel
 * @property $escuela_id
 * @property $descripción
 * @property $created_at
 * @property $updated_at
 *
 * @property Escuela $escuela
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conjuro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'nivel' => 'required',
		'escuela_id' => 'required',
		'descripción' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','nivel','escuela_id','descripción'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function escuela()
    {
        return $this->hasOne('App\Models\Escuela', 'id', 'escuela_id');
    }
    

}
