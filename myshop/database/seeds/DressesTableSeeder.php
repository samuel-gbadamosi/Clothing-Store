<?php

use Illuminate\Database\Seeder;
use App\Dress;
//when we use seeder we must defintely connect the model use App\Dress
//then we use this method to add data automatically to the database
class DressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //we kept the array of the dresseses seeder in file config
        //dresses.php in config
        //and we call it here

         $dresses = config('dresses');

         foreach($dresses as $dress){

             $newDress = new Dress();

             $newDress->name = $dress['name'];
             $newDress->color = $dress['color'];
             $newDress->size = $dress['size'];
             $newDress->price = $dress['price'];
             $newDress->description = $dress['description'];

             $newDress->save();
         }
    }
}
