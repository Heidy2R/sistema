<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    static $rules = [
		'estado' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fechainicio','fechafin','estado','usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadocarreras()
    {
        return $this->hasMany('App\Models\EmpleadoCarrera', 'periodo_id', 'id');
    }
}
