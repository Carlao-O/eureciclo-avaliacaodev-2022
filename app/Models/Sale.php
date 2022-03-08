<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['buyer', 'description', 'price', 'quantity', 'address', 'supplier'];

    public function recipes()
    {
        return $this->belongsTo(File::class);
    }
}
