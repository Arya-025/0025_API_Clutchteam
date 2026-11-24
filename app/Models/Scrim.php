<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scrim extends Model
{
    protected $fillable = ['team_id', 'tim_lawan', 'tanggal_waktu', 'format', 'status'];
    protected $casts = ['tanggal_waktu' => 'datetime'];
    public function team() { return $this->belongsTo(Team::class); }
    public function result() { return $this->hasOne(MatchResult::class); }
    public function notes() { return $this->hasMany(ScrimNote::class); }
}
