<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Secretaria; 
use App\Models\Doctor; 
use App\Models\Event; 


class User extends Authenticatable
{
    use HasRoles,HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function secretaria(){
        return $this->hasOne(Secretaria::class);
    }

    public function doctor(){
        return $this->hasOne(Doctor::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function paciente(){
        return $this->hasOne(Paciente::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }
}
