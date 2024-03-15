<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Contact;
use App\Models\Address;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Panggil seeder untuk model-model yang ingin Anda tambahkan data awalnya
        $this->call([
            UserSeeder::class,
            ContactSeeder::class,
            AddressSeeder::class,
        ]);
    }
}
