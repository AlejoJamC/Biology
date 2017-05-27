<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespuestasEstudiantes extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'respuestas_estudiantes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'estudiante_id', 'questionario_id', 'pregunta_id', 'respuesta_id'];
}
