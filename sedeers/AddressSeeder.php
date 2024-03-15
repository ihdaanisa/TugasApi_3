<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'street' => '123 Main Street',
            'city' => 'Cityville',
            'province' => 'Provinceville',
            'country' => 'Countryville',
            'postal_code' => '12345',
            'contact_id' => 1, // Ganti dengan ID kontak yang sesuai
        ]);

        // Tambahkan data alamat lainnya sesuai kebutuhan
    }
}
