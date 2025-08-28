<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'isbn',
        'category_id',
        'author_id',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    // Relasi ke Category
    public function category()
    {
        return $this->belongsTo(MasterCategory::class, 'category_id')
            ->where('status', true);
    }


    // Relasi ke Author
    public function author()
    {
        return $this->belongsTo(MasterAuthor::class);
    }
}
