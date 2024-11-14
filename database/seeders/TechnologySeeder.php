<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'HTML',
                'url' => 'https://developer.mozilla.org/en-US/docs/Web/HTML',
            ],
            [
                'name' => 'CSS',
                'url' => 'https://developer.mozilla.org/en-US/docs/Web/CSS',
            ],
            [
                'name' => 'JS',
                'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript',
            ],
            [
                'name' => 'Vue',
                'url' => 'https://vuejs.org/guide/introduction.html',
            ],
            [
                'name' => 'PHP',
                'url' => 'https://www.php.net/docs.php',
            ],
            [
                'name' => 'LARAVEL',
                'url' => 'https://laravel.com/docs/10.x/readme',
            ],
        ];
        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
