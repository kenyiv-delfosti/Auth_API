<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;

    public function capabilityRole()
    {
    	return $this->belongsTo(CapabilityRole::class);
    }

    public function capabilityPermission()
    {
    	return $this->belongsTo(CapabilityPermission::class);
    }
}
