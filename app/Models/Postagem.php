<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Postagem extends Model
{
    use HasFactory;

    protected $table = 'postagens';  
    
    //relacionamento 1 pra 1 ------------
    public function autor(): HasOne
    {
        return $this->hasOne(User::class,  'id', 'user_id');
    }

    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class , 'id', 'categoria_id');
    }
}
