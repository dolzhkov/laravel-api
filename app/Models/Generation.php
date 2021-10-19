<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'model_id'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function model() {
        $this->belongsTo(Models::class);
    }

    public function modification() {
        $this->hasMany(Modification::class);
    }
}
