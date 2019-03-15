<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'Standard',
            'slug' => 'standard',
            'braintree_plan' => 'Standard',
            'cost' => 49.00,
            'description' => 'Standard Healthyclub plan'
        ]);
    }
}
