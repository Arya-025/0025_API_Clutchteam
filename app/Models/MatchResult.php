<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchResult extends Model
{
    protected $fillable = ['scrim_id', 'skor_tim', 'skor_lawan', 'hasil', 'screenshot_path'];
    public function scrim() { return $this->belongsTo(Scrim::class); }
}
