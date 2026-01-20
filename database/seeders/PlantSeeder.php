<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plants = [
            [
                'name' => 'Lettuce',
                'growth_cycle' => '30-45 days',
                'category' => 'leafy',
                'location' => 'California, USA',
                'price' => 2.50,
                'volume' => 1000,
                'availability' => 'High',
                'deleted' => false,
                'description' => 'Crisp and fresh hydroponic lettuce perfect for salads and sandwiches.',
                'benefits' => ['High nutritional value', 'Fast growth', 'Disease resistant'],
                'emoji' => '🥬',
                'gradient' => 'from-green-400 to-emerald-500'
            ],
            [
                'name' => 'Tomato',
                'growth_cycle' => '60-80 days',
                'category' => 'fruits',
                'location' => 'Florida, USA',
                'price' => 4.75,
                'volume' => 800,
                'availability' => 'Medium',
                'deleted' => false,
                'description' => 'Juicy, vine-ripened tomatoes grown in optimal hydroponic conditions.',
                'benefits' => ['Rich in vitamins', 'Year-round availability', 'Superior taste'],
                'emoji' => '🍅',
                'gradient' => 'from-red-400 to-pink-500'
            ],
            [
                'name' => 'Basil',
                'growth_cycle' => '60-90 days',
                'category' => 'herbs',
                'location' => 'Texas, USA',
                'price' => 3.25,
                'volume' => 600,
                'availability' => 'High',
                'deleted' => false,
                'description' => 'Aromatic basil leaves ideal for culinary uses and medicinal purposes.',
                'benefits' => ['Natural antioxidant', 'Aromatic flavor', 'Easy to grow'],
                'emoji' => '🌿',
                'gradient' => 'from-green-500 to-teal-500'
            ],
            [
                'name' => 'Spinach',
                'growth_cycle' => '30-45 days',
                'category' => 'leafy',
                'location' => 'Arizona, USA',
                'price' => 2.75,
                'volume' => 900,
                'availability' => 'High',
                'deleted' => false,
                'description' => 'Nutrient-dense spinach leaves packed with iron and vitamins.',
                'benefits' => ['Iron-rich', 'Quick harvest', 'Versatile cooking'],
                'emoji' => '🥬',
                'gradient' => 'from-green-300 to-green-500'
            ],
            [
                'name' => 'Strawberry',
                'growth_cycle' => '60-90 days',
                'category' => 'fruits',
                'location' => 'Oregon, USA',
                'price' => 6.50,
                'volume' => 500,
                'availability' => 'Medium',
                'deleted' => false,
                'description' => 'Sweet, succulent strawberries grown hydroponically for maximum flavor.',
                'benefits' => ['Vitamin C boost', 'Antioxidant rich', 'Delicious taste'],
                'emoji' => '🍓',
                'gradient' => 'from-pink-400 to-red-500'
            ],
            [
                'name' => 'Cucumber',
                'growth_cycle' => '50-70 days',
                'category' => 'vegetables',
                'location' => 'Georgia, USA',
                'price' => 1.80,
                'volume' => 1200,
                'availability' => 'High',
                'deleted' => false,
                'description' => 'Crisp cucumbers perfect for fresh eating and pickling.',
                'benefits' => ['Hydrating', 'Low calories', 'Digestive health'],
                'emoji' => '🥒',
                'gradient' => 'from-green-400 to-lime-500'
            ],
            [
                'name' => 'Pepper',
                'growth_cycle' => '70-90 days',
                'category' => 'vegetables',
                'location' => 'New Mexico, USA',
                'price' => 3.90,
                'volume' => 700,
                'availability' => 'Medium',
                'deleted' => false,
                'description' => 'Colorful bell peppers with excellent nutritional profile.',
                'benefits' => ['Vitamin A & C', 'Antioxidants', 'Immune support'],
                'emoji' => '🫑',
                'gradient' => 'from-yellow-400 to-orange-500'
            ],
            [
                'name' => 'Mint',
                'growth_cycle' => '60-90 days',
                'category' => 'herbs',
                'location' => 'North Carolina, USA',
                'price' => 2.95,
                'volume' => 550,
                'availability' => 'High',
                'deleted' => false,
                'description' => 'Refreshing mint leaves for teas, cooking, and medicinal uses.',
                'benefits' => ['Digestive aid', 'Fresh breath', 'Calming effect'],
                'emoji' => '🌱',
                'gradient' => 'from-green-400 to-cyan-500'
            ],
            [
                'name' => 'Kale',
                'growth_cycle' => '45-60 days',
                'category' => 'leafy',
                'location' => 'Colorado, USA',
                'price' => 4.25,
                'volume' => 650,
                'availability' => 'Medium',
                'deleted' => false,
                'description' => 'Nutrient powerhouse kale with exceptional health benefits.',
                'benefits' => ['Superfood status', 'Vitamin packed', 'Long shelf life'],
                'emoji' => '🥬',
                'gradient' => 'from-green-600 to-emerald-600'
            ],
            [
                'name' => 'Radish',
                'growth_cycle' => '25-35 days',
                'category' => 'vegetables',
                'location' => 'Washington, USA',
                'price' => 1.50,
                'volume' => 1100,
                'availability' => 'High',
                'deleted' => false,
                'description' => 'Quick-growing radishes with peppery flavor.',
                'benefits' => ['Fast harvest', 'Spicy taste', 'Nutrient dense'],
                'emoji' => '🥕',
                'gradient' => 'from-red-400 to-pink-400'
            ],
            [
                'name' => 'Parsley',
                'growth_cycle' => '70-90 days',
                'category' => 'herbs',
                'location' => 'Michigan, USA',
                'price' => 2.20,
                'volume' => 450,
                'availability' => 'Low',
                'deleted' => false,
                'description' => 'Versatile herb used in cooking and as a garnish.',
                'benefits' => ['Vitamin K rich', 'Fresh flavor', 'Digestive support'],
                'emoji' => '🌿',
                'gradient' => 'from-green-500 to-green-600'
            ],
            [
                'name' => 'Arugula',
                'growth_cycle' => '30-40 days',
                'category' => 'leafy',
                'location' => 'California, USA',
                'price' => 3.75,
                'volume' => 580,
                'availability' => 'Medium',
                'deleted' => false,
                'description' => 'Peppery arugula leaves perfect for gourmet salads.',
                'benefits' => ['Bold flavor', 'Nutrient rich', 'Quick growing'],
                'emoji' => '🥗',
                'gradient' => 'from-green-400 to-green-500'
            ],
            [
                'name' => 'Chili Pepper',
                'growth_cycle' => '80-100 days',
                'category' => 'vegetables',
                'location' => 'Texas, USA',
                'price' => 5.50,
                'volume' => 300,
                'availability' => 'Low',
                'deleted' => true, // This plant is deleted - should be hidden
                'description' => 'Spicy chili peppers for culinary adventures.',
                'benefits' => ['Capsaicin boost', 'Metabolism support', 'Flavor enhancer'],
                'emoji' => '🌶️',
                'gradient' => 'from-red-500 to-orange-500'
            ],
            [
                'name' => 'Blueberry',
                'growth_cycle' => '90-120 days',
                'category' => 'fruits',
                'location' => 'Maine, USA',
                'price' => 8.90,
                'volume' => 250,
                'availability' => 'Low',
                'deleted' => false,
                'description' => 'Antioxidant-rich blueberries grown hydroponically.',
                'benefits' => ['Brain health', 'Antioxidants', 'Heart healthy'],
                'emoji' => '🫐',
                'gradient' => 'from-blue-400 to-purple-500'
            ],
            [
                'name' => 'Rosemary',
                'growth_cycle' => '90-120 days',
                'category' => 'herbs',
                'location' => 'Nevada, USA',
                'price' => 4.10,
                'volume' => 400,
                'availability' => 'Medium',
                'deleted' => false,
                'description' => 'Aromatic rosemary for cooking and medicinal uses.',
                'benefits' => ['Memory boost', 'Antioxidants', 'Digestive aid'],
                'emoji' => '🌿',
                'gradient' => 'from-green-600 to-gray-500'
            ],
            [
                'name' => 'Swiss Chard',
                'growth_cycle' => '50-65 days',
                'category' => 'leafy',
                'location' => 'Utah, USA',
                'price' => 3.15,
                'volume' => 720,
                'availability' => 'High',
                'deleted' => false,
                'description' => 'Colorful Swiss chard with vibrant stems and leaves.',
                'benefits' => ['Vitamin K', 'Minerals', 'Eye health'],
                'emoji' => '🥬',
                'gradient' => 'from-red-400 to-yellow-400'
            ],
            [
                'name' => 'Thyme',
                'growth_cycle' => '75-90 days',
                'category' => 'herbs',
                'location' => 'Idaho, USA',
                'price' => 3.85,
                'volume' => 380,
                'availability' => 'Medium',
                'deleted' => false,
                'description' => 'Versatile thyme herb with culinary and medicinal benefits.',
                'benefits' => ['Antibacterial', 'Respiratory health', 'Flavor enhancer'],
                'emoji' => '🌱',
                'gradient' => 'from-green-500 to-brown-400'
            ],
            [
                'name' => 'Zucchini',
                'growth_cycle' => '45-60 days',
                'category' => 'vegetables',
                'location' => 'Ohio, USA',
                'price' => 2.30,
                'volume' => 950,
                'availability' => 'High',
                'deleted' => false,
                'description' => 'Tender zucchini perfect for grilling and cooking.',
                'benefits' => ['Low calories', 'Hydrating', 'Digestive health'],
                'emoji' => '🥒',
                'gradient' => 'from-green-300 to-green-600'
            ]
        ];

        foreach ($plants as $plant) {
            Plant::create($plant);
        }
    }
}
