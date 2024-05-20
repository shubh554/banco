<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_Log extends Model
{
    use HasFactory;
    protected $table = 'message_log';
    protected $fillable=['mobile','communication_id','template_id','name','status'];

    public function template()
    {
        return $this->belongsTo(Template::class, 'template_id');
    }

    public function messageLogs()
    {
        return $this->hasMany(Message_Log::class, 'template_id');
    }
}
