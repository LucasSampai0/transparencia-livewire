<?php

namespace Database\Factories;

use App\Models\Mean;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupplierAttachment>
 */
class SupplierAttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'file' => $this->faker->file('storage/app/public'),
            'supplier_id' => Supplier::factory(),
        ];
    }
}
