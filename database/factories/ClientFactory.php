<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $filePath = storage_path('app/public/logos/' . Str::random(10) . '.jpg');

        // Create a valid image file
        $img = imagecreatetruecolor(120, 120);
        $textColor = imagecolorallocate($img, 233, 14, 91);
        imagestring($img, 1, 5, 5, 'A Simple Text String', $textColor);
        imagejpeg($img, $filePath);
        imagedestroy($img);

        return [
            'logo' => 'logos/' . basename($filePath),
            'name' => $this->faker->name,
            'cnpj' => $this->faker->numerify('##.###.###/####-##'),
            'address' => $this->faker->address,
            'slug' => $this->faker->slug,
        ];
    }
}
