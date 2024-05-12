<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopSellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topsellers')->insert([

            [
                'topsale_name' => 'Iphone 15 ProMax',
                'topsale_type' => '1',
                'topsale_quantity' => 30,
                'topsale_price' => 32000000,
                'topsale_detail' => 'iPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc.',
                'topsale_image' => 'iphone15promax.png'
            ],

            [
                'topsale_name' => 'iPhone 13 128GB',
                'topsale_type' => '1',
                'topsale_quantity' => 20,
                'topsale_price' => 20000000,
                'topsale_detail' => 'Điện thoại iPhone 13 sẽ được sử dụng tấm nền OLED chất lượng cao và có kích thước 6.1 inch, lớn hơn iPhone 13 mini (5.4 inch). Với tấm nền này với công nghệ ProMotion giúp iPhone 13 tiết kiệm pin đến tối đa khi sử dụng. Người dùng cũng có thể dễ dàng điều chỉnh tốc độ làm tươi tùy theo ý thích.',
                'topsale_image' => 'iphone13.png'
            ],

            [
                'topsale_name' => 'Samsung Galaxy Z Fold5',
                'topsale_type' => '1',
                'topsale_quantity' => 20,
                'topsale_price' => 33500000,
                'topsale_detail' => 'Samsung Galaxy Z Fold5 12GB 256GB tạo nên trải nghiệm xử lý tác vụ siêu mượt mà thông qua chipset Snapdragon 8 Gen 2 đỉnh cao cùng dung lượng RAM lên tới 12GB. Máy được trang bị công nghệ màn hình Dynamic AMOLED 2X 120Hz với kích thước có thể lên tới 7.6 inch khi mở, đem lại trải nghiệm hình ảnh sắc nét trong từng điểm ảnh. Bên cạnh đó, phân khúc smartphone gập này còn sở hữu cụm camera hiện đại với độ sắc nét đạt tới 50MP cùng viên pin 4400mAh.',
                'topsale_image' => 'samsungzfold5.png'
            ],

            [
                'topsale_name' => 'Iphone 14 ProMax',
                'topsale_type' => '1',
                'topsale_quantity' => 20,
                'topsale_price' => 28000000,
                'topsale_detail' => 'iPhone 14 ProMax sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic',
                'topsale_image' => 'iphone14pro.png'
            ],

            [
                'topsale_name' => 'Xiaomi 14',
                'topsale_type' => '1',
                'topsale_quantity' => 25,
                'topsale_price' => 14000000,
                'topsale_detail' => 'Xiaomi 14 5G mang trên mình màn hình OLED 6.36-inch,cùng với bộ vi xử lý Qualcomm Snapdragon 8 Gen 3, làm nên một cấu hình siêu mạnh mẽ cho người dùng. Đi kèm với đó là viên pin dung lượng 4610mAh hỗ trợ tốc độ sạc 90W kết hợp cùng hệ thống ba camera sau với cảm biến chính 50MP, đảm bảo hiệu suất và khả năng chụp ảnh ấn tượng',
                'topsale_image' => 'xiaomi14.png'
            ],
        ]);



    }
}
