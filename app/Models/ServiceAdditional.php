<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceAdditional extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];
    public $with = ['servicePackage'];

    public function servicePackage() {
        return $this->belongsTo(ServicePackage::class);
    }
}
