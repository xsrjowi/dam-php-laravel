<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $table = 'apartment';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'address',
        'city',
        'postal_code',
        'rented_price',
        'rented',
        'user_id'
    ];

    public function platforms()
    {
        return $this->belongsToMany(Platform::class, 'platform_apartment')
                    ->withPivot('register_date', 'premium');
    }
}
