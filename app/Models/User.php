<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['nama', 'email', 'password_hash', 'role'];
    protected $hidden = ['password_hash'];

    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    public function teamMembership() { return $this->hasOne(TeamMember::class); }
    public function captainOf() { return $this->hasOne(Team::class, 'captain_id'); }
    public function refreshTokens() { return $this->hasMany(RefreshToken::class); }
}