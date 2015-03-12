<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {
    protected $guarded = [];
    public function abouts()
    {
        return $this->hasMany('App\About');
    }

}
