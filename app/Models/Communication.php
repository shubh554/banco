<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;
    protected $fillable = ['communication_id','template_id','name','audience_id'];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function audience()
    {
        return $this->belongsTo(Audience::class);
    }
}
