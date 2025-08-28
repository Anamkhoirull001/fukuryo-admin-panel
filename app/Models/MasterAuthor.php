<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'age',
        'address',
    ];

    protected $casts = [
        'dob' => 'date',
    ];

    public function getAgeAttribute()
    {
        return $this->dob ? Carbon::parse($this->dob)->age : null;
    }

    public function books()
    {
        return $this->hasMany(MasterBook::class, 'author_id');
    }
}
