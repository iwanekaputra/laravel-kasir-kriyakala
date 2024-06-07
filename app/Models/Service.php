<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];
    public $with = ['studio'];

    public function studio() {
        return $this->belongsTo(Studio::class);
    }

    public function servicePackages() {
        return $this->HasMany(ServicePackage::class);
    }

    public function serviceAdditionals() {
        return $this->hasMany(ServiceAdditional::class);
    }

    public function backgroundColors() {
        return $this->hasMany(BackgroundColor::class);
    }
}
