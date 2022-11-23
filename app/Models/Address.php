<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'street1',
        'street2',
        'zip',
        'state',
        'type',
    ];

    public function addressable()
    {
        return $this->morphTo();
    }
}
