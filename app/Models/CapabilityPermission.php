<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapabilityPermission extends Model
{
    use HasFactory;

    public function RolePermission()
    {
        return $this->hasMany(RolePermission::class);
    }
}
