<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Paciente extends Model
{
    use  HasRoles,HasFactory;

    protected $guard_name = 'web';

    public function historials(){
        return $this->hasMany(Historial::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function pagos(){
        return $this->hasMany(Pago::class);
    }
}
