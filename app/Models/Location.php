<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function client()
    {
        return $this->belongsTo(Client::class, "client_id", "id");
    }

    public function statut()
    {
        return $this->belongsTo(StatutLocation::class, "statut_location_id", "id");
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, "article_location", "location_id", "article_id",);
    }
}
