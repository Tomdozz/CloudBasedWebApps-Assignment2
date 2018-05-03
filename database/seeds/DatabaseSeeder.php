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
      $this->call('ProductSeeder');
      $this->call('ReviewSeeder');
      $this->call('StoreSeeder');
      $this->call('ProductStoreSeeder');
    }
}
