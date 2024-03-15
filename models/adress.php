<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'city',
        'province',
        'country',
        'postal_code',
        'contact_id',
    ];

    // Jika diperlukan, definisikan relasi dengan model Contact
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
