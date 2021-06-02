<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name="tv";
        $product->description="man hinh sieu to khong lo";
        $product->photo="https://cdn.tgdd.vn/Files/2016/02/03/781952/nhung-ky-luc-thu-vi-ve-tivi-1.jpg";
        $product->price=1000.0;
        $product->save();

        $product = new Product();
        $product->name="dien thoai";
        $product->description="iphone100";
        $product->photo="https://cdn.tgdd.vn/Files/2016/02/03/781952/nhung-ky-luc-thu-vi-ve-tivi-1.jpg";
        $product->price=2324.0;
        $product->save();

        $product = new Product();
        $product->name="Trong";
        $product->description="cat moi";
        $product->photo="https://cdn.tgdd.vn/Files/2016/02/03/781952/nhung-ky-luc-thu-vi-ve-tivi-1.jpg";
        $product->price=2.0;
        $product->save();
    }
}
