<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'vendor_id'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function generation() {
        $this->hasMany(Generation::class);
    }
}
