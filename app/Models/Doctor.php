<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Consultorio;
use App\Models\Horario;
use App\Models\User;
use App\Models\Certificado;
use App\Models\Event;

class Doctor extends Model
{
    use HasFactory, HasRoles;
    protected $fillable = ['nombres','apellidos','celular','codigo_colegiado','especialidad','user_id'];
    protected $guard_name = 'web';

    public function consultorio(){
        return $this->belongsTo(Consultorio::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function historials()
    {
        return $this->hasMany(Historial::class);
    }

    public function pagos(){
        return $this->hasMany(Pago::class);
    }

    public function certificados() {
        return $this->hasMany(Certificado::class);
    }
    
}
