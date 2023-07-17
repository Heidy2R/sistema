<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
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
    protected $fillable = ['nombrecarrera','estado','facultad','usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadocarreras()
    {
        return $this->hasMany('App\Models\EmpleadoCarrera', 'carrera_id', 'id');
    }
}
