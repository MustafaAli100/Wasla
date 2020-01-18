<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = [
        'project_id', 'oprice','datetime',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
