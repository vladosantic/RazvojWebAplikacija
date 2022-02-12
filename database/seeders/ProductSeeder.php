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
                'name' => 'Aspirin 500mg tablete',
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
                'price' => 53.50
            ],
            [
                'name' => 'Alpenkraft Sirup',
                'description' => 'Sirup za kašalj',
                'image' => 'assets/alpenkraft.png',
                'price' => 26.50
            ],
            [
                'name' => 'Omni Biotic Metabolic vrećice',
                'description' => 'Vrećice za metabolizam',
                'image' => 'assets/biotic.png',
                'price' => 88.00
            ],
            [
                'name' => 'Pileje Antemig tablete',
                'description' => 'Dodatak prehrani',
                'image' => 'assets/antemig.png',
                'price' => 59.90
            ],
            [
                'name' => 'Pip Farmakol Propolis',
                'description' => '150 sprej',
                'image' => 'assets/pip_farmakol.png',
                'price' => 14.40
            ],
            [
                'name' => 'Arkopharma tablete',
                'description' => 'Arkopharma Arkovital Pure Energy tablete',
                'image' => 'assets/arkovital.png',
                'price' => 37.20
            ],
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}