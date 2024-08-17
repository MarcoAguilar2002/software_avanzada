<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_id','nombre_certificado','institucion','fecha_obtencion','archivo_certificado'];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
