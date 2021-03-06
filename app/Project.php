<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{

    protected $fillable = [
        'title',
        'description',
        'id_user'
    ];

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function addTask($body) {
        $this->tasks()->create($body);
    }

}
