<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CursoEstudiante extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'curso_estudiantes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'curso_id', 'estudiante_id'];
}
