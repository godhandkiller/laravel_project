<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model{

    protected $fillable = [
        'completed',
        'body',
        'project_id'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = TRUE) {
        $this->update([
            'completed' => $completed
        ]);
    }

    public function incomplete() {
        $this->complete(false);
    }

}
