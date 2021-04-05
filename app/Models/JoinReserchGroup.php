<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinReserchGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'research_group_id',
        'user_id',
        'active',
    ];

    public function research_group(){
        return $this->belongsTo(ResearchGroup::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
