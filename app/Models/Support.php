<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type_of_support',
        'branch',
        'active',
        'project_title',
        'main_are',
        'description',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
