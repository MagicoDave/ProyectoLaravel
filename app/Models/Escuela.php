<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escuela
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Conjuro[] $conjuros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Escuela extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conjuros()
    {
        return $this->hasMany('App\Models\Conjuro', 'escuela_id', 'id');
    }
    

}
