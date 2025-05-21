<?php

namespace Database\Seeders;

use App\Models\CustomerDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(50000)
            ->create()
            ->each(function ($user) {
                $user->assignRole('customer');

                CustomerDetail::factory()->create([
                    'user_id' => $user->id,
                ]);
            });
    }
}
