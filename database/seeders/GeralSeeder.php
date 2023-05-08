<?php

namespace Database\Seeders;

use App\Models\Xp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $xpModel = new Xp();

        $arrray = [
            [
                'company' => 'Edmond Tech',
                'image' => 'https://edmond.com.br/wp-content/uploads/2023/02/EDMOND_W.svg',
                'office' => 'Developer Full Stack',
                'description' => 'Development and Maintenance of web applications, using Laravel with Tailwind, AlpineJS and Livewire.',
                'dt_start' => '2022-01-18',
                'dt_end' => '2023-04-10',
                'url' => 'https://edmond.com.br/',
            ],
            [
                'company' => 'Wirelink Telecom',
                'image' => 'https://www.wirelink.com.br/wp-content/uploads/2022/07/wire-logo-colorida-1.png',
                'office' => 'Developer Full Stack',
                'description' => 'Development and Maintenance of web applications, using Laravel together with VueJS. MSSQL and MySQL Database Administration',
                'dt_start' => '2021-01-01',
                'dt_end' => '2022-01-18',
                'url' => 'https://www.wirelink.com.br/',
            ]
        ];

        foreach ($arrray as $item) {
            $xpModel->query()->create($item);
        }

    }
}
