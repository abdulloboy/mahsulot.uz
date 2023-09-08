<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_products_show_method(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.show', ['product' => $product->id]));

        $response->assertOk();
        $response->assertSee(($product->quantity * $product->price) * (1 + env('VAT')));

        $this->assertTrue(true);
    }
}
