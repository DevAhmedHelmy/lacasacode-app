<?php
namespace Database\Seeders;

use App\Models\Center;
use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Center::factory(1)->create();
        Doctor::factory(10)->create();
        $doctors = Doctor::all();
        Center::all()->each(function ($user) use ($doctors) {
            $user->doctors()->attach(
                $doctors->pluck('id')->toArray()
            );
        });
    }
}
