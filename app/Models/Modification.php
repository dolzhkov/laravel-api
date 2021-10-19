<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'generation_id',
        'model_id'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function model() {
        $this->belongsTo(Model::class);
    }

    public function generation() {
        $this->belongsTo(Generation::class);
    }
}
