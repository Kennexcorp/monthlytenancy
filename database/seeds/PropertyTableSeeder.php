<?php

use App\Landlord;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $result = DB::transaction(function (){
            $landlord = Landlord::create([
                'name' => "Demo Estate",
                'contact' => "00000000000",
                'type' => "Estate",
                'state' => "Abuja",
                'lga' => "Everywhere",
                'address' => "Lube",
            ]);

            $property = $landlord->properties()->create([
                'type' => "Bungalow",
                'units' => "8",
                'toilets' => "2",
                'bathrooms' => "2",
                'rooms' => "2",
                'other_description' => "Test",
                'unit_price' => "800000",
            ]);

            $path = $file->storeAs('public/propertyImages', $name);
            // $data->push(["path" => $path]);
            $property->propertyImages()->createMany(
                [
                'image_path' => 'public/propertyImages/image1.jpg'
            ],
            [
                'image_path' => 'public/propertyImages/image2.jpg'
            ],

        );

        });
    }
}
