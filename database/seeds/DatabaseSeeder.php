<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(betseeder::class);
		$this->call(matchseeder::class);
		$this->call(userseeder::class);
    }
}
