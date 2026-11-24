<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScrimNote extends Model
{
    protected $fillable = ['scrim_id', 'author_id', 'judul', 'isi'];
    public function scrim() { return $this->belongsTo(Scrim::class); }
    public function author() { return $this->belongsTo(User::class, 'author_id'); }
}
