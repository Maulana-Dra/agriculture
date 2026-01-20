<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PurchaseHistory;

class PurchaseHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $purchaseHistory = [
            [
                'date' => '2024-01-15',
                'product' => 'Lettuce',
                'quantity' => 5,
                'unit_price' => 2.50,
                'total' => 12.50,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-14',
                'product' => 'Tomato',
                'quantity' => 3,
                'unit_price' => 4.75,
                'total' => 14.25,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-13',
                'product' => 'Basil',
                'quantity' => 2,
                'unit_price' => 3.25,
                'total' => 6.50,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-12',
                'product' => 'Spinach',
                'quantity' => 4,
                'unit_price' => 2.75,
                'total' => 11.00,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-11',
                'product' => 'Strawberry',
                'quantity' => 1,
                'unit_price' => 6.50,
                'total' => 6.50,
                'status' => 'Processing'
            ],
            [
                'date' => '2024-01-10',
                'product' => 'Cucumber',
                'quantity' => 6,
                'unit_price' => 1.80,
                'total' => 10.80,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-09',
                'product' => 'Pepper',
                'quantity' => 2,
                'unit_price' => 3.90,
                'total' => 7.80,
                'status' => 'Shipped'
            ],
            [
                'date' => '2024-01-08',
                'product' => 'Mint',
                'quantity' => 3,
                'unit_price' => 2.95,
                'total' => 8.85,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-07',
                'product' => 'Kale',
                'quantity' => 2,
                'unit_price' => 4.25,
                'total' => 8.50,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-06',
                'product' => 'Radish',
                'quantity' => 8,
                'unit_price' => 1.50,
                'total' => 12.00,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-05',
                'product' => 'Parsley',
                'quantity' => 3,
                'unit_price' => 2.20,
                'total' => 6.60,
                'status' => 'Processing'
            ],
            [
                'date' => '2024-01-04',
                'product' => 'Arugula',
                'quantity' => 2,
                'unit_price' => 3.75,
                'total' => 7.50,
                'status' => 'Shipped'
            ],
            [
                'date' => '2024-01-03',
                'product' => 'Blueberry',
                'quantity' => 1,
                'unit_price' => 8.90,
                'total' => 8.90,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-02',
                'product' => 'Rosemary',
                'quantity' => 2,
                'unit_price' => 4.10,
                'total' => 8.20,
                'status' => 'Completed'
            ],
            [
                'date' => '2024-01-01',
                'product' => 'Swiss Chard',
                'quantity' => 3,
                'unit_price' => 3.15,
                'total' => 9.45,
                'status' => 'Completed'
            ],
            [
                'date' => '2023-12-30',
                'product' => 'Thyme',
                'quantity' => 2,
                'unit_price' => 3.85,
                'total' => 7.70,
                'status' => 'Completed'
            ],
            [
                'date' => '2023-12-29',
                'product' => 'Zucchini',
                'quantity' => 4,
                'unit_price' => 2.30,
                'total' => 9.20,
                'status' => 'Shipped'
            ],
            [
                'date' => '2023-12-28',
                'product' => 'Lettuce',
                'quantity' => 6,
                'unit_price' => 2.50,
                'total' => 15.00,
                'status' => 'Completed'
            ],
            [
                'date' => '2023-12-27',
                'product' => 'Tomato',
                'quantity' => 2,
                'unit_price' => 4.75,
                'total' => 9.50,
                'status' => 'Processing'
            ],
            [
                'date' => '2023-12-26',
                'product' => 'Basil',
                'quantity' => 3,
                'unit_price' => 3.25,
                'total' => 9.75,
                'status' => 'Completed'
            ]
        ];

        foreach ($purchaseHistory as $history) {
            PurchaseHistory::create($history);
        }
    }
}
