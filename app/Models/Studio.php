<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Studio extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];


    // public $with = ['services'];

    public function services() {
        return $this->hasMany(Service::class);
    }
}
