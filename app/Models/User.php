<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'research_group_id',
    ];
    public function researchGroup(){
        return $this->belongsTo(ResearchGroup::class);
    }

    public function joinedResearchGroup(){
        return $this->belongsToMany(JoinReserchGroup::class,'join_reserch_groups'
            ,'user_id','research_group_id');
    }

    public function joinedResearchGroupMany(){
        return $this->hasMany(JoinReserchGroup::class);
    }

    public function supports(){
        return $this->hasMany(Support::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function setPasswordAttribute($value)
//    {
//        $this->attributes['password'] = bcrypt($value);
//    }
}
