<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Project;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function projects() {
        //el segundo parametro es la llave foranea, por default es el nombre de la tabla _id
        //como yo le cambie de nombre se tiene que hacer referencia de como se llama
        return $this->hasMany(Project::class, 'id_user');
    }

    public function owns(Project $project) {
        return $this->id == $project->id;
    }
}
