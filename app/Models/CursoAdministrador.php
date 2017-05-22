<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CursoAdministrador extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'curso_administrador';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'profesor_id', 'curso_id'];
}
