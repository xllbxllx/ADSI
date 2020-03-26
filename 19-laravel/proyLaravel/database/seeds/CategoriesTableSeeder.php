<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
			'name'			 =>	'Technology',
			'description'	 =>	'Esta categoria',
		]);

		$categories = new App\Category;
		$categories->name 			= 'Sport';
		$categories->description 	= 'Esta Categoria';
		$categories->save();

		$categories = new App\Category;
		$categories->name 			= 'Home';
		$categories->description 	= 'Esta Categoria';
		$categories->save();


    }
}
