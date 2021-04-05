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
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
