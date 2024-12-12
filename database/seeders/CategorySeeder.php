<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Infectious Disease',
                'description' => 'These are illnesses caused by pathogenic microorganisms such as bacteria, viruses, fungi, or parasites, often spread through direct contact, contaminated surfaces, or airborne particles. Examples include influenza and tuberculosis.',
                'photo' => '1.jpg'
            ],
            [
                'name' => 'Chronic Disease',
                'description' => 'Long-lasting health conditions that often progress slowly and require ongoing management, such as diabetes, asthma, or arthritis. They can significantly impact quality of life but are often manageable with proper care.',
                'photo' => '2.jpg'
            ],
            [
                'name' => 'Mental Health Disorder',
                'description' => 'Conditions affecting emotional, psychological, and social well-being, influencing how individuals think, feel, and behave. Examples include depression, anxiety, and schizophrenia.',
                'photo' => '3.jpg'
            ],
            [
                'name' => 'Genetic Disorder',
                'description' => 'Diseases caused by abnormalities in an individual’s DNA, either inherited from parents or resulting from mutations. Examples include cystic fibrosis and Down syndrome.',
                'photo' => '4.jpg'
            ],
            [
                'name' => 'Autoimmune Disease',
                'description' => 'Conditions in which the immune system mistakenly attacks the body’s own healthy tissues, leading to inflammation and damage. Examples include lupus and rheumatoid arthritis.',
                'photo' => '5.jpg'
            ],
            [
                'name' => 'Cardiovascular Disease',
                'description' => 'A group of disorders involving the heart and blood vessels, such as coronary artery disease, heart attacks, and strokes, often linked to lifestyle and genetic factors.',
                'photo' => '6.jpg'
            ]
        ];
        DB::table('categories')->insert($datas);
    }
}
