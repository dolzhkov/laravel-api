<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function model() {
        return $this->hasMany(Models::class);
    }
}
