<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Instrumento
 *
 * @property $id
 * @property $nombre
 * @property $material
 * @property $tamano
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Instrumento extends Model
{
  use HasFactory;
    static $rules = [
		'nombre' => 'required|string',
		'material' => 'required|string',
		'tamano' => 'required|numeric|min:1',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','material','tamano'];



}
