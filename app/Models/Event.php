<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Consultorio;
use App\Models\Horario;


class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'start', 'end', 'color', 'estado', 'user_id', 'doctor_id', 'consultorio_id'
    ];
    
    public function paciente(){
        return $this->belongsTo(paciente::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function consultorio(){
        return $this->belongsTo(Consultorio::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
