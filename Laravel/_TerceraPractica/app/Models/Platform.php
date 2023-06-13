<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $table = 'platform';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'integer';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'owner',
    ];

    public function apartments()
    {
        return $this->belongsToMany(Apartment::class, 'platform_apartment')
                ->withPivot('register_date', 'premium');
    }
}
