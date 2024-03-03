<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Merchandising
 *
 * @property $id
 * @property $tipo_producto
 * @property $talla
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Merchandising extends Model
{
    
    static $rules = [
		'tipo_producto' => 'required',
		'talla' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_producto','talla','precio'];



}