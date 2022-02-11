<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Product;
  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Aspirin tablete',
                'description' => 'Aspirin 500 tablete',
                'image' => 'assets/aspirin.png',
                'price' => 20.70
            ],
            [
                'name' => 'Osteopan Plus tablete',
                'description' => '60 tableta',
                'image' => 'assets/osteopan.png',
                'price' => 25
            ],
            [
                'name' => 'Yasenka Imuno',
                'description' => '500 BC kapsule',
                'image' => 'assets/yasenka.png',
                'price' => 53.5
            ],
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}