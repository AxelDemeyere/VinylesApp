<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinyle extends Model
{
    use HasFactory;

    protected $table = 'vinyles';
    protected $fillable = [
        'titre',
        'description',
        'artiste',
        'annee',
        'label',
        'image',
        'comment',
        "updated_at",
        "created_at"
    ];

    public function run()
    {
        Vinyle::factory(10)->create();
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function artiste() {
        return $this->belongsTo(Artiste::class);
    }

    public function label() {
        return $this->belongsTo(Label::class);
    }

}
