<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Scategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        "nomscategorie","imagescategorie","categorieID"
    ];

public function categorie() {
    return $this->BelongsTo(Categorie::class,"categorieID");
}
public function article() {
    return $this->hasMany(Article::class,"scategorieID");
}
}


