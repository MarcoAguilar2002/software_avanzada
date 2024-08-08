<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['dni','nombres','apellidos','celular','fecha_nacimiento','direccion','genero','foto',
    'estado_civil','region','provincia','distrito','pais','contacto_emergencia','relacion_contacto_emergencia','telefono_contacto_emergencia',
    'user_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
