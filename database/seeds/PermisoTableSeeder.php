<?php

use Illuminate\Database\Seeder;
use App\Models\admin\Permiso;
class PermisoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class, 50)->create();
    }
}
