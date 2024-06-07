<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicePackage extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];
    public $with = ['service', 'galleries'];

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function galleries() {
        return $this->hasMany(Gallery::class);
    }
}
