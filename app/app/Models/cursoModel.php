<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursoModel extends Model
{
    use HasFactory;
    protected $table = 'curso';

    public function turmas()
    {
        return $this->hasMany(turmaModel::class, 'curso_id', 'id');
    }
}
