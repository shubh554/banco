<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    public function communications()
    {
        return $this->hasMany(Communication::class);
    }

    public function messageLogs()
    {
        return $this->hasMany(Message_Log::class, 'template_id');
    }
}
