<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['captain_id', 'nama', 'game', 'deskripsi', 'logo_path'];
    public function captain() { return $this->belongsTo(User::class, 'captain_id'); }
    public function members() { return $this->hasMany(TeamMember::class); }
    public function scrims() { return $this->hasMany(Scrim::class); }
}
