<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CursoContenido extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'curso_contenido';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'curso_id', 'contenido_id'];
}
