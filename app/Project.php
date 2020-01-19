<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Pname', 'time', 'price', 'skills','user_id','description',
    ];

    public function user()
    {
        return $this->blengsTo(User::class);
    }
    public function payment()
    {
        return $this->hasOne('project\payemnt');
    }
    public function chosenproject()
    {
        return $this->hasOne('project\chosenproject');
    } 
    public function contract()
    {
        return $this->hasOne('project\contract');
    }
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }


}
