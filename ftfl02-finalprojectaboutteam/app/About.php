<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model {
    protected $guarded = [];
    public function team()
    {
        return $this->belongsTo('App\Team');
    }

}
