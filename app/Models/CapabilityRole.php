<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapabilityRole extends Model
{
    use HasFactory;

    public function userRole()
    {
        return $this->hasMany(UserRole::class);
    }

    public function RolePermission()
    {
        return $this->hasMany(RolePermission::class);
    }
}
