<?php


namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Database\QueryException;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\Book::factory(20)->create();
        $this->call(InventorySeeder::class);


        User::factory()->create([
            'name' => 'Testerss User',
            'email' => 'testerss@example.com',
        ]);
    }
}
