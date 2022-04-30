<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Event extends Model
{
    use HasFactory;
    use Uuids;

    protected $keyType = 'string';
    public $incrementing = false;
    

    protected $fillable = [
        'name', 'slug'
    ];

protected $primaryKey = 'id';

protected $casts = [
    'id' => 'string'
];

}
