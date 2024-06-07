<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $with = ['service'];

    public function service() {
        return $this->belongsTo(Service::class);
    }



// in your model file
public function next(){
    // get next user
    return Time::where('id', '>', $this->id)->first();

}
public  function previous(){
    // get previous  user
    return Time::where('id', '<', $this->id)->orderBy('id','desc')->first();

}
}
