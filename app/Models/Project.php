<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =['title', 'slug', 'description', 'github_link', 'language', 'creation_date'];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
