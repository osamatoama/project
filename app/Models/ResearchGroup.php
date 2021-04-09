<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'admin_name',
        'admin_email',
        'description',
    ];

    public function members(){
        return $this->hasMany(JoinReserchGroup::class);
    }

}
