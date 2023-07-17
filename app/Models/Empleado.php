<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    static $rules = [
		'user_id' => 'required',
		'estado' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigoempleado','apellidos','nombres','user_id','fechaingreso','estado','usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadocarreras()
    {
        return $this->hasMany('App\Models\EmpleadoCarrera', 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
