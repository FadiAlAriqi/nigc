<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MainContent>
 */
class MainContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'services_title_ar' => $this->faker->sentences(150),
            'services_title_en' => $this->faker->sentences(150),

            'header_logo_ar' => $this->faker->image('public/logo1.png'),
            'header_logo_height_ar' => 100,
            'header_logo_width_ar' => 100,
//
//            'header_logo_en' => $this->faker->image(['app/public/logo/logo1.png']),
//            'header_logo_height_en' => 100,
//            'header_logo_width_en' => 100,
//
//            'footer_logo_ar' => $this->faker->image(['app/public/logo/logo1.png']),
//            'footer_logo_height_ar' => 100,
//            'footer_logo_width_ar' => 100,
//
//            'footer_logo_en' => $this->faker->image(['app/public/logo/logo1.png']),
//            'footer_logo_height_en' => 100,
//            'footer_logo_width_en' => 100,
//
//            'dashboard_logo_ar' => $this->faker->image(['app/public/logo/logo1.png']),
//            'dashboard_logo_height_ar' => 100,
//            'dashboard_logo_width_ar' => 100,
//
//            'dashboard_logo_en' => $this->faker->image(['app/public/logo/logo1.png']),
//            'dashboard_logo_height_en' => 100,
//            'dashboard_logo_width_en' => 100,
        ];
    }
}
