<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Job;
use App\Models\Service;
use Database\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);

        Blog::factory(10)->create();

        Contact::factory(10)->create();

        Job::factory(5)->create();

        Service::factory(5)->create();
    }
}
