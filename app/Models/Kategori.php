<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
<<<<<<< HEAD
    
=======
    protected $table = 'kategoris';
>>>>>>> e75bd766dabb6c37ea2c906b44fabf25ab339978
        public function Film(){
        return $this->hasMany(Film::class, 'id_kategori');
    }
}
