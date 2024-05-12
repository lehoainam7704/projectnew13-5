<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatestProductSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('latestproducts')->insert([
            [
                'latestproduct_name' => 'Sony Xperia 5 IV',
                'latestproduct_type' => '1',
                'latestproduct_quantity' => 20,
                'latestproduct_price' => 28000000,
                'latestproduct_detail' => 'Sony Xperia 5 IV là chiếc điện thoại được ra mắt bởi Sony với vô vàn tính năng thông minh được tích hợp. Dung lượng pin khủng cho thời gian giải trí, làm việc hay học tập không bị gián đoạn. Cụm camera với độ phân giải cao cho hình ảnh được ghi lại vô cùng chân thật.',
                'latestproduct_image' => 'sony.png'
            ],

            [
                'latestproduct_name' => 'OPPO Reno11 F 5G',
                'latestproduct_type' => '1',
                'latestproduct_quantity' => 30,
                'latestproduct_price' => 8000000,
                'latestproduct_detail' => 'OPPO Reno11 F 5G cung cấp trải nghiệm hiển thị, xử lý siêu mượt mà với màn hình AMOLED 6.7 inch hiện đại cùng chipset MediaTek Dimensity 7050 mạnh mẽ. Hệ thống quay chụp trên thế hệ Reno11 F 5G này được cải thiện hơn thông qua cụm 3 camera với độ phân giải lần lượt là 64MP, 8MP và 2MP. Ngoài ra, cung cấp năng lượng cho thế hệ OPPO smartphone này là viên pin 5000mAh cùng sạc nhanh 67W, mang tới trải nghiệm liền mạch suốt ngày dài.',
                'latestproduct_image' => 'opporeno11.png'
            ],

            [
                'latestproduct_name' => 'Nokia 105 4G',
                'latestproduct_type' => '1',
                'latestproduct_quantity' => 25,
                'latestproduct_price' => 400000,
                'latestproduct_detail' => 'Nokia 105 4G Pro sở hữu màn hình IPS LCD có kích thước 1.77 inch đem lại cho người dùng khả năng hiển thị chữ rõ nét hơn. Cùng với đó, dung lượng pin 1450mAh đem lại khả năng sử dụng lâu dài trong nhiều ngày. Với sự trang bị chipset Unisoc T107 và bộ nhớ trong 128MB, sản phẩm đem lại trải nghiệm ổn định cho người dùng.',
                'latestproduct_image' => 'nokia1054g.png'
            ],

            [
                'latestproduct_name' => 'Laptop Lenovo Yoga',
                'latestproduct_type' => '2',
                'latestproduct_quantity' => 25,
                'latestproduct_price' => 18990000,
                'latestproduct_detail' => 'Laptop Lenovo Yoga Duet 7 13ITL6 82MA009NVN là sản phẩm cao cấp được tích hợp 2 trong 1. Với laptop Lenovo Yoga này người dùng có thể sử dụng như một chiếc máy tính, vừa sử dụng như chiếc ipad vô cùng tiện lợi để mọi công việc được xử lý nhẹ nhàng và hiệu quả nhất.',
                'latestproduct_image' => 'laptoplenovo.png'
            ],

            [
                'latestproduct_name' => 'MacBook Pro M2 Pro 2023',
                'latestproduct_type' => '2',
                'latestproduct_quantity' => 25,
                'latestproduct_price' => 82000000,
                'latestproduct_detail' => 'Macbook Pro 16 inch M2 Pro 32GB 1TB 2023 không chỉ sở hữu một kích thước lớn mà còn mạnh mẽ, uy lực hơn với thế hệ chip xử lý M2 Pro mới. Không chỉ hiệu năng mà khả năng xử lý đồ hoạ của Macbook Pro 2023 cũng đã được nâng lên một tầm cao mới để xoá nhoà sự khác biệt lớn nhất giữa laptop với các mẫu máy tính để bàn.',
                'latestproduct_image' => 'macprom2.png'
            ]
        ]);
    }
}
