<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function type()
    {
        //On peut le faire de cette manière pour préciser la clé étrangère
        return $this->belongsTo(TypeArticle::class, "type_article_id", "id");
    }

    public function tarifications()
    {
        return $this->hasMany(tarifications::class);
    }

    //Toutes les locations qui ont été effectuées pour un article donné
    public function locations()
    {
        return $this->belongsToMany(Location::class, "article_location", "article_id", "location_id");
    }

    public function proprietes()
    {
        return $this->belongsToMany(ProprieteArticle::class, "article_propriete", "article_id", "propriete_id");
    }
}
