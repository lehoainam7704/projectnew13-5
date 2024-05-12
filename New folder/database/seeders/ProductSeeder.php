<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            [
                'product_name' => 'Iphone 14 ProMax',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => 28000000,
                'product_detail' => 'iPhone 14 ProMax sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic',
                'product_image' => 'iphone14pro.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Iphone 15 Pro Max',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 32000000,
                'product_detail' => 'iPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc.',
                'product_image' => 'iphone15promax.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Xiaomi 14',
                'product_type' => '1',
                'product_quantity' => 25,
                'product_price' => 14000000,
                'product_detail' => 'Xiaomi 14 5G mang trên mình màn hình OLED 6.36-inch,cùng với bộ vi xử lý Qualcomm Snapdragon 8 Gen 3, làm nên một cấu hình siêu mạnh mẽ cho người dùng. Đi kèm với đó là viên pin dung lượng 4610mAh hỗ trợ tốc độ sạc 90W kết hợp cùng hệ thống ba camera sau với cảm biến chính 50MP, đảm bảo hiệu suất và khả năng chụp ảnh ấn tượng',
                'product_image' => 'xiaomi14.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'iPhone 13 128GB',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => 20000000,
                'product_detail' => 'Điện thoại iPhone 13 sẽ được sử dụng tấm nền OLED chất lượng cao và có kích thước 6.1 inch, lớn hơn iPhone 13 mini (5.4 inch). Với tấm nền này với công nghệ ProMotion giúp iPhone 13 tiết kiệm pin đến tối đa khi sử dụng. Người dùng cũng có thể dễ dàng điều chỉnh tốc độ làm tươi tùy theo ý thích.',
                'product_image' => 'iphone13.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Samsung Galaxy Z Fold5',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => 33500000,
                'product_detail' => 'Samsung Galaxy Z Fold5 12GB 256GB tạo nên trải nghiệm xử lý tác vụ siêu mượt mà thông qua chipset Snapdragon 8 Gen 2 đỉnh cao cùng dung lượng RAM lên tới 12GB. Máy được trang bị công nghệ màn hình Dynamic AMOLED 2X 120Hz với kích thước có thể lên tới 7.6 inch khi mở, đem lại trải nghiệm hình ảnh sắc nét trong từng điểm ảnh. Bên cạnh đó, phân khúc smartphone gập này còn sở hữu cụm camera hiện đại với độ sắc nét đạt tới 50MP cùng viên pin 4400mAh.',
                'product_image' => 'samsungzfold5.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Samsung Galaxy S24',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 24000000,
                'product_detail' => 'Điện thoại Samsung Galaxy S24 được trang bị bộ xử lý Exynos 2400 do Samsung tự sản xuất với 10 nhân CPU cùng bộ nhớ RAM 8GB, bộ nhớ trong 256GB. Màn hình thiết bị với kích thước 6.2 inch với khung viền siêu mỏng cùng công nghệ Dynamic AMOLED 2X.',
                'product_image' => 'samsunggalaxys24.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Samsung Galaxy A55',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => 9500000,
                'product_detail' => 'Samsung Galaxy A55 thiết kế sang trọng, hiện đại với màn hình rộng 6.6 inch, tấm nền Super AMOLED cùng độ phân giải Full HD+ cho hình ảnh hiển thị mượt mà, sắc nét. Sở hữu con chip Exynos 1480, cùng tần số quét 120 Hz cho trải nghiệm sử dụng không bị giật, lag.',
                'product_image' => 'samsunga55.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Macbook Pro M3 Pro',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => 50000000,
                'product_detail' => 'Macbook Pro 14 inch M3 Pro 2023 - Hiệu suất khủng, tản nhiệt hiệu quả Macbook Pro M3 Pro bản 14 inch 18GB/512GB có khả năng lý đồ họa chuyên sâu, kết cấu 3D một cách ổn định và mượt mà. Bên cạnh đó, sản phẩm có chất lượng hiển thị rất sắc nét, và tần số quét lên tới 120Hz, giúp người dùng làm việc hiệu quả, nhanh chóng. ',
                'product_image' => 'macbookpro.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Macbook Air M2',
                'product_type' => '2',
                'product_quantity' => 30,
                'product_price' => 32000000,
                'product_detail' => 'Apple Macbook Air M2 2022 16GB 256GB thiết kế siêu mỏng 1.13cm, trang bị chip M2 8 nhân GPU, 16 nhân Neural Engine, RAM khủng 16GB, SSD 256GB, màn hình IPS Liquid Retina Display cùng hệ thống 4 loa cho trải nghiệm đỉnh cao.',
                'product_image' => 'macbookair15.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'iMac M3',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 34500000,
                'product_detail' => 'iMac M3 2023 24 inch là mẫu iMac thế hệ mới sở hữu một cấu hình vượt trội với con CPU 8 lõi Apple M3 cùng với bộ nhớ RAM 8GB và dung lượng lưu trữ 256GB. iMac M3 mới được trang bị tới bảy phiên bản màu khác nhau bao gồm: Xanh dương, Xanh lá, Hồng, Bạc, Vàng, Cam và Tím. Cùng với đó, mẫu iMac này được trong bị màn hình 24 inch Retina 4,5K mang lại khả năng hiển thị vượt trội.',
                'product_image' => 'imacM3.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Mac Studio M1 Max',
                'product_type' => '2',
                'product_quantity' => 25,
                'product_price' => 14000000,
                'product_detail' => 'Mac Studio là chiếc máy tính để bàn sở hữu thiết kế vô cùng ấn tượng. Bên cạnh đó là hiệu năng mạnh mẽ giúp cho mọi thứ trở nên dễ dàng hơn trong tầm tay. Đặc biệt hơn nữa là hệ thống cổng kết nối đa dạng cho khả năng kết nối dễ dàng và nhanh chóng hơn.',
                'product_image' => 'macstudio.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Laptop ASUS Gaming',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => 32586000,
                'product_detail' => 'Laptop Asus Gaming ROG Zephyrus G14 GA402NJ-L4056W nổi bật với kích thước thon gọn đi kèm với hiệu suất hoạt động mạnh mẽ. Cấu hình laptop Asus gaming này được trang bị con chip thế hệ mới của nhà AMD cùng dung lượng bộ nhớ vượt trội giúp xử lý mượt mà mọi tác vụ chiến game.',
                'product_image' => 'laptopgamingasusrog.png',
                'type_name' => '9',
                'type_logo' => '9'
            ],

            [
                'product_name' => 'Laptop ASUS Gaming ROG',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => 52300000,
                'product_detail' => 'Laptop ASUS Gaming ROG Zephyrus G16 GU605MV-QR135W được trang bị chipset Intel Core Ultra 9 processor 185H 2.3GHz tích hợp công nghệ Intel AI Boost NPU. Sản phẩm sử dụng card đồ họa NVIDIA GeForce RTX 4060 kết hợp cùng RAM 32GB cho tốc độ xử lý ấn tượng. Công nghệ làm mát 3 quạt giúp tản nhiệt hiệu quả giảm tới 10 độ C cho cả GPU và CPU. Màn hình OLED chuẩn Pantone hiển thị sống động với độ sáng tối đa 500 nits. ',
                'product_image' => 'gaming.png',
                'type_name' => '9',
                'type_logo' => '9'
            ],

            [
                'product_name' => 'Laptop ASUS Zenbook',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 32040000,
                'product_detail' => 'Laptop Asus Zenbook 14 OLED UX3405MA PP152W có kích thước nhỏ gọn 14 inch, độ phân giải 3K cùng màn hình OLED Lumia cho chất lượng hiển thị chi tiết. Bên cạnh đó, sản phẩm laptop Asus Zenbook còn trang bị chipset Intel Core Ultra 7 125H, GPU Intel Arc Graphics cùng bộ nhớ RAM 32GB và SSD 1TB, mang đến hiệu năng ưu việt với các tác vụ đồ họa nặng cùng không gian lưu trữ rộng lớn. ',
                'product_image' => 'asuszenbook14.png',
                'type_name' => '9',
                'type_logo' => '9'
            ],

            [
                'product_name' => 'Samsung Galaxy Tab S9',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 21400000,
                'product_detail' => 'Samsung Galaxy Tab S9 Ultra là thế hệ tablet mới của nhà Samsung với thiết kế đẹp mắt, thanh lịch, màn hình Dynamic AMOLED 2X cùng với chipset Snapdragon 8 gen 2 mạnh mẽ cân mọi tác vụ. Bên cạnh đó, thời lượng pin của Galaxy Tab S9 Ultra cũng được cải thiện so với người tiền nhiệm để mang đến trải nghiệm lâu hơn cho người dùng.',
                'product_image' => 'samsunggalaxytabs9.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Xiaomi Pad 6s Pro',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 10000000,
                'product_detail' => 'Xiaomi Pad 6S Pro sở hữu màn hình 12.4 inch kích thước lớn cùng độ phân giải 3K hiển thị sống động, tần số quét 144Hz. Máy tính bảng với cấu hình từ con chip được sản xuất trên tiến trình 4nm - Snapdragon® 8 thế hệ 2. Cùng với đó, thiết bị sở hữu viên pin dung lượng lớn 10000 mah cùng sạc nhanh công suất 120W.',
                'product_image' => 'xiaomiTab.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'iPhone 11 64GB',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 9870000,
                'product_detail' => 'iPhone 11 sở hữu hiệu năng khá mạnh mẽ, ổn định trong thời gian dài nhờ được trang bị chipset A13 Bionic. Màn hình LCD 6.1 inch sắc nét cùng chất lượng hiển thị Full HD của máy cho trải nghiệm hình ảnh mượt mà và có độ tương phản cao. Hệ thống camera hiện đại được tích hợp những tính năng công nghệ mới kết hợp với viên Pin dung lượng 3110mAh, giúp nâng cao trải nghiệm của người dùng.',
                'product_image' => 'iPhone 11.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'iPad Pro M3 5G',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 23760000,
                'product_detail' => 'iPad Pro 11 inch M3 5G sở hữu công nghệ màn hình OLED, tần số quét 120Hz và trang bị con chip Apple M3 kết hợp với phiên bản iPadOS 17 đem lại hiệu năng vượt trội. Bên cạnh đó, chiếc máy tính bảng iPad Pro này có hai camera 12MP và 10MP, dung lượng RAM tối đa 16GB đa nhiệm cực kỳ tốt. ',
                'product_image' => 'ipadprom3.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Laptop Gaming Acer Nitro 5',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 23070000,
                'product_detail' => 'Laptop Acer Nitro 5 Tiger AN515-58-52SP mang vẻ ngoài phong thái sắc sảo, tích hợp hàng loạt công nghệ phần mềm đời mới và đặc biệt là bộ vi xử lý Intel ổn định. Chứa đựng hiệu năng siêu vượt trội đã góp phần làm nên chiếc laptop Acer Nitro 5 dẫn đầu phân khúc.',
                'product_image' => 'acernitro5.png',
                'type_name' => '8',
                'type_logo' => '8'
            ],

            [
                'product_name' => 'Laptop Acer Aspire 7',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 19500000,
                'product_detail' => 'Laptop Acer Aspire 7 A715 76G 5806 được trang bị bộ vi xử lý i5 12450H cùng card màn hình rời 4GB RTX3050 và dung lượng RAM 16GB, ổ cứng SSD 512 GB. Máy sở hữu màn hình 15.6 inch FHD với tần số 144Hz. Ngoài ra, sản phẩm laptop Acer Aspire còn nổi bật với thiết kế tối giản, bền bỉ nhờ vỏ nhựa cùng nắp lưng kim loại cứng cáp.',
                'product_image' => 'laptopaser.png',
                'type_name' => '8',
                'type_logo' => '8'
            ],

            [
                'product_name' => 'Laptop LG Gram 2023 ',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 23760000,
                'product_detail' => 'Laptop LG gram 2023 14Z90R-G.AH75A5 – Một siêu phẩm công nghệ táo bạo, đầy hiện đại mà ông lớn LG mang đến cho người dùng của mình. Với tất cả sự hoàn hảo cao nhất từ cấu hình, thiết kế đến hiệu năng và mọi hoạt động của laptop LG Gram 2023 thì đây đích thị là lựa chọn hàng đầu mà nhiều người.',
                'product_image' => 'laptoplg.png',
                'type_name' => '10',
                'type_logo' => '10'
            ],

            [
                'product_name' => 'Samsung Galaxy Tab S9',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 15760000,
                'product_detail' => 'Samsung Galaxy Tab S9 Wifi sở hữu màn hình kích thước 11 inch Dynamic AMOLED 2X cùng tần số quét 120Hz mang lại trải nghiệm hình ảnh mượt mà và ổn định. Cấu hình máy tính bảng Samsung mới này cũng mạnh mẽ với con chip Snapdragon® 8 Gen 2 cùng với đó là sự hỗ trợ của bút Spen thế hệ mới tiện lợi. Máy còn ấn tượng với khả năng kháng nước và bụi bẩn IP68 cùng camera độ phân giải cao.',
                'product_image' => 'Samsung Galaxy Tab S9 Wifi.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Laptop Acer Gaming Aspire 5',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 19500000,
                'product_detail' => 'Laptop Acer Gaming Aspire 5 A515 58GM 53PZ thu hút giới game thủ khi có giao diện mỏng nhẹ, đậm chất gaming cùng hiệu năng mạnh mẽ với Core i5 H thế hệ 13. Kết hợp với card rời NVIDIA GeForce RTX 2050 4GB, RAM DDR4 8GB cùng bộ nhớ trong PCIe NVMe Gen 4 512GB cho tốc độ xử lý các tác vụ từ cơ bản đến nâng cao nhanh chóng và mượt mà. ',
                'product_image' => 'Acer Gaming.png',
                'type_name' => '8',
                'type_logo' => '8'
            ],

//
            [
                'product_name' => 'Xiaomi Redmi Note 12',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 12300000,
                'product_detail' => 'Xiaomi Redmi Note 12 8GB 128GB tỏa sáng với diện mạo viền vuông cực thời thượng cùng hiệu suất mạnh mẽ nhờ sở hữu con chip Snapdragon 685 ấn tượng. Chất lượng hiển thị hình ảnh của Redmi Note 12 Vàng cũng khá sắc nét thông qua tấm nền AMOLED 120Hz hiện đại. Chưa hết, máy còn sở hữu cụm 3 camera với độ rõ nét lên tới 50MP cùng viên pin 5000mAh và s ạc nhanh 33W giúp đáp ứng được mọi nhu cầu sử dụng của người dùng.',
                'product_image' => 'rebmi12.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'Xiaomi Redmi Note 13',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 14300000,
                'product_detail' => 'Xiaomi Redmi Note 13 Pro Plus sở hữu màn hình rộng 6.67 inch, trang bị bộ vi xử lý Dimensity 7200 đem lại hiệu năng kinh ngạc. Với dung lượng pin 5000 mAh cùng hỗ trợ sạc nhanh lên đến 120W. Camera 200MP và khả năng zoom 4x mở ra những trải nghiệm chụp ảnh độc đáo và đa dạng.',
                'product_image' => 'redmi13pro.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'Xiaomi 13T Pro 5G',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 10790000,
                'product_detail' => 'Xiaomi 13T Pro là flagship mới nhất nhà Xiaomi, mạnh mẽ ấn tượng với chip MediaTek Dimensity 9200+, cùng với đó là RAM 12GB và bộ nhớ trong lên tới 512GB. Đặc biệt, khả năng chụp ảnh đỉnh cao nhờ cụm camera siêu chất, viên pin lớn 5000mAh cùng sạc nhanh 120W. Tất cả sẽ mang tới một siêu phẩm đình đám giúp bạn có được trải nghiệm độc đáo và khẳng định được cá tính của mình.',
                'product_image' => 'xiami13t.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'iPhone 13 Pro Max',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 22300000,
                'product_detail' => 'Phone 13 Pro Max chắc chắn sẽ là chiếc smartphone cao cấp được quan tâm nhiều nhất trong năm 2021. Dòng iPhone 13 series được ra mắt vào ngày 14 tháng 9 năm 2021 tại sự kiện "California Streaming" diễn ra trực tuyến tương tự năm ngoái cùng với 3 phiên bản khác là iPhone 13, 13 mini và 13 Pro. Vậy điện thoại 13 Pro Max giá bao nhiêu? Có gì nổi bật? Cùng tìm hiểu ngay nhé!',
                'product_image' => 'iphone13promax.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'iPhone 13 ',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 18900000,
                'product_detail' => 'iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).',
                'product_image' => 'iphone12.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],
            
            [
                'product_name' => 'Laptop ASUS TUF Gaming',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 19799000,
                'product_detail' => 'Laptop Asus TUF Gaming A15 FA507NU-LP140W đem tới hiệu suất xử lý khủng nhờ được trang bị chipset AMD Ryzen 5 7535HS và VGA NVIDIA GeForce RTX 4050 6GB. Cùng với đó là khả năng lưu trữ và đa nhiệm xuất sắc thông qua dung lượng RAM 8GB DDR5-4800 SO-DIMM cùng ổ cứng 512GB PCIe 4.0 NVMe M.2 SSD. Ngoài ra, dòng laptop Asus Gaming này còn sở hữu màn hình 15.6 inches với công nghệ hiển thị tiên tiến, hỗ trợ độ sáng 250nits và độ phủ màu sRGB 100% siêu thực.',
                'product_image' => 'tubgaming.png',
                'type_name' => '9',
                'type_logo' => '9'
            ],

            [
                'product_name' => 'Laptop Asus Expertbook',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 14560000,
                'product_detail' => 'Laptop ASUS ExpertBook B1402CBA-NK2669W mạnh mẽ nhờ được trang bị bộ vi xử lý Intel Core I5-1235U, RAM 16GB kết hợp cùng ổ cứng SSD 512GB PCIe. Màn hình 14.0 inch Full HD mang tới chất lượng hình ảnh sắc nét vượt trội. Hệ điều hành Windows 11 và thiết kế mỏng nhẹ cùng tone màu sang trọng mang tới lựa chọn tuyệt vời cho người dùng.',
                'product_image' => 'laptopasus.png',
                'type_name' => '9',
                'type_logo' => '9'
            ],

            [
                'product_name' => 'Laptop Dell Vostro',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 11000000,
                'product_detail' => 'Laptop Dell Vostro 3520 là một trong những sản phẩm laptop Dell Vostro đáng chú ý của thương hiệu Dell, được thiết kế để đáp ứng nhu cầu làm việc và giải trí của người dùng hiện đại. Với thiết kế nhỏ gọn, hiệu năng mạnh mẽ và tính năng bảo mật ấn tượng, sản phẩm này sẽ là một trợ thủ đắc lực cho công việc và giải trí hàng ngày của bạn.',
                'product_image' => 'laptopdellvostro.png',
                'type_name' => '16',
                'type_logo' => '16'
            ],

            [
                'product_name' => 'Laptop Gigabyte',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 19300000,
                'product_detail' => 'Laptop Gigabyte G5 MF-F2VN333SH thuộc phân khúc cao cấp có thể hỗ trợ người dùng trải nghiệm nhiều tựa game với hiệu ứng đồ họa bắt mắt. Nổi bật với bộ vi xử lý đầu bảng của Intel và dung lượng bộ nhớ vượt trội, chiếc laptop Gigabyte hứa hẹn sẽ là người bạn đồng hành tuyệt vời giúp chiến thắng trong các trận đấu. ',
                'product_image' => 'giga.png',
                'type_name' => '2',
                'type_logo' => '2'
            ],

            [
                'product_name' => 'Laptop Surface Pro 9',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 15790000,
                'product_detail' => 'Laptop Surface Pro 9 là dòng laptop 13 inch sở hữu thiết kế đẹp mắt, tính di động cao để thao tác sử dụng thêm linh hoạt. Surface Pro 9 còn mang đến hiệu suất mạnh mẽ, giúp xử lý nhanh mọi tác vụ và có thể giải trí được với game 3D.',
                'product_image' => 'surface.png',
                'type_name' => '11',
                'type_logo' => '11'
            ],

            [
                'product_name' => 'Redmi Pad SE',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 17450000,
                'product_detail' => 'Máy tính bảng Xiaomi Redmi Pad SE sở hữu màn hình LCD 11 inch với tần số quét 90hz cùng chứng nhận bảo vệ mắt TÜV Rheinland ánh sáng xanh thấp và không nhấp nháy. Cùng với đó, tablet còn được trang bị loa Dolby Atmos âm thanh nổi giúp mang lại trải nghiệm âm thanh ấn tượng. Máy với ba lựa chọn màu sắc là xanh bạc hà, tím Lavender và xám khoáng thạch.',
                'product_image' => 'redmipadse.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'TCL Tab 11',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 5300000,
                'product_detail' => 'Máy tính bảng TCL Tab 11 với màn hình IPS LCD 1200 x 2000 pixels kích thước lớn 10.95 inches cùng dải màu 16.7 triệu màu mang lại trải nghiệm hiển thị sống động. Cùng với đó, máy còn được trang bị một cấu hình mạnh mẽ với 4GB RAM cùng con chip Mediatek Helio P60T Octa-core. TCL Tab 11 còn tương tích với bút T-Pen giúp người dùng take-note, ghi chú một cách dễ dàng.',
                'product_image' => 'tcltab11.png',
                'type_name' => '13',
                'type_logo' => '13'
            ],

            [
                'product_name' => 'Nokia T21',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 7200000,
                'product_detail' => 'Nokia T21 là một cái tên đã không còn quá xa lạ với những tín đồ đam mê công nghệ. Được phát triển từ phiên bản đời trước là Nokia T20, T21 đã có những bước đột phá về thiết kế bên ngoài và cấu hình bên trong, mang tới cho người dùng một trải nghiệm cực kỳ thú vị và mới lạ.',
                'product_image' => 'nokiat21.png',
                'type_name' => '5',
                'type_logo' => '5'
            ],

            [
                'product_name' => 'TECNO SPARK 20PRO+',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 8300000,
                'product_detail' => 'Tecno Spark 20 Pro Plus sở hữu cấu hình cực ấn tượng trong phân khúc giá rẻ với chip Helio G99 Ultimate, 8GB RAM (+8GB mở rộng) cùng bộ nhớ 256GB. Màn hình AMOLED 6,78 inch 120 Hz sẽ luôn mang tới chất lượng hiển thị của điện thoại. Hệ thống camera có độ phân giải 108MP, hỗ trợ quay video 2K đáp ứng tốt cho nhu cầu sống ảo của người dùng.',
                'product_image' => 'tecnospark20.png',
                'type_name' => '6',
                'type_logo' => '6'
            ],

            [
                'product_name' => 'Samsung Galaxy S23 Ultra',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 22140000,
                'product_detail' => 'Samsung S23 Ultra là dòng điện thoại cao cấp của Samsung, sở hữu camera độ phân giải 200MP ấn tượng, chip Snapdragon 8 Gen 2 mạnh mẽ, bộ nhớ RAM 8GB mang lại hiệu suất xử lý vượt trội cùng khung viền vuông vức sang trọng. Sản phẩm được ra mắt từ đầu năm 2023.',
                'product_image' => 's23ultra.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Sony Xperia 5 IV',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => 28000000,
                'product_detail' => 'Sony Xperia 5 IV là chiếc điện thoại được ra mắt bởi Sony với vô vàn tính năng thông minh được tích hợp. Dung lượng pin khủng cho thời gian giải trí, làm việc hay học tập không bị gián đoạn. Cụm camera với độ phân giải cao cho hình ảnh được ghi lại vô cùng chân thật.',
                'product_image' => 'sony.png',
                'type_name' => '7',
                'type_logo' => '7'
            ],

            [
                'product_name' => 'OPPO Reno11 F 5G',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 8000000,
                'product_detail' => 'OPPO Reno11 F 5G cung cấp trải nghiệm hiển thị, xử lý siêu mượt mà với màn hình AMOLED 6.7 inch hiện đại cùng chipset MediaTek Dimensity 7050 mạnh mẽ. Hệ thống quay chụp trên thế hệ Reno11 F 5G này được cải thiện hơn thông qua cụm 3 camera với độ phân giải lần lượt là 64MP, 8MP và 2MP. Ngoài ra, cung cấp năng lượng cho thế hệ OPPO smartphone này là viên pin 5000mAh cùng sạc nhanh 67W, mang tới trải nghiệm liền mạch suốt ngày dài.',
                'product_image' => 'opporeno11.png',
                'type_name' => '14',
                'type_logo' => '14'
            ],

            [
                'product_name' => 'Nokia 105 4G',
                'product_type' => '1',
                'product_quantity' => 25,
                'product_price' => 400000,
                'product_detail' => 'Nokia 105 4G Pro sở hữu màn hình IPS LCD có kích thước 1.77 inch đem lại cho người dùng khả năng hiển thị chữ rõ nét hơn. Cùng với đó, dung lượng pin 1450mAh đem lại khả năng sử dụng lâu dài trong nhiều ngày. Với sự trang bị chipset Unisoc T107 và bộ nhớ trong 128MB, sản phẩm đem lại trải nghiệm ổn định cho người dùng.',
                'product_image' => 'nokia1054g.png',
                'type_name' => '5',
                'type_logo' => '5'
            ],

            [
                'product_name' => 'Laptop Lenovo Yoga',
                'product_type' => '2',
                'product_quantity' => 25,
                'product_price' => 18990000,
                'product_detail' => 'Laptop Lenovo Yoga Duet 7 13ITL6 82MA009NVN là sản phẩm cao cấp được tích hợp 2 trong 1. Với laptop Lenovo Yoga này người dùng có thể sử dụng như một chiếc máy tính, vừa sử dụng như chiếc ipad vô cùng tiện lợi để mọi công việc được xử lý nhẹ nhàng và hiệu quả nhất.',
                'product_image' => 'laptoplenovo.png',
                'type_name' => '12',
                'type_logo' => '12'
            ],

            [
                'product_name' => 'MacBook Pro M2 Pro 2023',
                'product_type' => '2',
                'product_quantity' => 25,
                'product_price' => 82000000,
                'product_detail' => 'Macbook Pro 16 inch M2 Pro 32GB 1TB 2023 không chỉ sở hữu một kích thước lớn mà còn mạnh mẽ, uy lực hơn với thế hệ chip xử lý M2 Pro mới. Không chỉ hiệu năng mà khả năng xử lý đồ hoạ của Macbook Pro 2023 cũng đã được nâng lên một tầm cao mới để xoá nhoà sự khác biệt lớn nhất giữa laptop với các mẫu máy tính để bàn.',
                'product_image' => 'macprom2.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Laptop HP Gaming Victus',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 21320000,
                'product_detail' => 'Laptop HP Gaming Victus 15 FB1023AX 94F20PA được trang bị bộ xử lý trung tâm AMD Ryzen 5 7535HS 6 nhân, 12 luồng với tốc độ xung nhịp lên tới 4.5GHz. RAM dung lượng 8GB xử lý tốt khối lượng công việc tốt và phù hợp để thiết kế đồ hoạ 2D. VGA NVIDIA Geforce RTX 2050 4GB trên laptop HP Victus này mang tới trải nghiệm chiến game mượt mà trên màn hình rộng 15.6 inch cùng tần số quét 144Hz ấn tượng. ',
                'product_image' => 'hpgaming.png',
                'type_name' => '15',
                'type_logo' => '15'
            ],

            [
                'product_name' => 'iPad Pro 2022 M2',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 25400000,
                'product_detail' => 'iPad Pro 11 2022 M2 Wifi 5G 128GB vừa qua đã được hãng Apple cho ra mắt với nhiều tính năng cao cấp. Cùng với những cải tiến mới như trang bị dòng chip xịn sò, kết hợp với viên pin có dung lượng ổn định, chiếc iPad Pro thế hệ mới này hứa hẹn sẽ mang đến sự trải nghiệm thú vị cho bạn.',
                'product_image' => 'ipadpro13.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'iPad Pro 2021 M1 ',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 21000000,
                'product_detail' => 'iPad Pro 11 inch 2021 sở hữu ngoại hình mang nhiều điểm tương tự về ngoại hình với chiếc iPad Pro trước đó. Apple iPad Pro 2021 sử dụng màn hình kích thước 11 inch và sử dụng màn hình LCD truyền thống.  Màn hình trên iPad Pro 2021 này với công nghệ màu ProMotion cùng độ phân giải cao 264 pixel mỗi inch. Màn hình này cũng được trang bị lớp phủ chống bám vân tay và chống phản xạ, nâng cao trải nghiệm cho người dùng.',
                'product_image' => 'ipadpro13.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'iPad Air 6 M2',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => 15670000,
                'product_detail' => 'iPad Air 6 M2 là mẫu máy tính bảng đến từ thương hiệu Apple sang trọng với một cấu hình vượt trội. Vậy iPad Air 6 M2 chính hãng này có gì nổi bật về thiết kế và cấu hình, cùng hiểu ngay sau đây.',
                'product_image' => 'ipadair6.png',
                'type_name' => '1',
                'type_logo' => '1'
            ],

            [
                'product_name' => 'Samsung Galaxy S24 Ultra',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 28140000,
                'product_detail' => 'Samsung S24 Ultra là dòng điện thoại cao cấp của Samsung, sở hữu camera độ phân giải 200MP ấn tượng, chip Snapdragon 8 Gen 3 mạnh mẽ, bộ nhớ RAM 8GB mang lại hiệu suất xử lý vượt trội cùng khung viền vuông vức sang trọng. Sản phẩm được ra mắt từ đầu năm 2024.',
                'product_image' => 'samsungs24ultra.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Samsung Galaxy M34',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 6340000,
                'product_detail' => 'Samsung M34 5G là chiếc điện thoại làm nên ấn tượng nhờ chip Exynos 1280 mạnh mẽ và ROM 128 GB, RAM 8GB. Cùng với đó là hệ thống 3 camera với cảm biến chính 50MP, góc siêu rộng 8 MP + macro 2 MP và camera selfie 13MP. Cạnh đó, màn hình Super AMOLED cao cấp, tần số quét 120Hz và viên pin 6000mAh còn tạo nên những điểm nhấn đặc biệt cho chiếc smartphone này.',
                'product_image' => 'Galaxy M34.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Samsung Galaxy S22 Ultra',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 18340000,
                'product_detail' => 'Điện thoại Samsung S22 Ultra phiên bản RAM 12GB cho cảm giác siêu mượt mà khi mở và đóng ứng dụng, đi kèm bộ nhớ trong 256GB cho bạn thoải mái lưu trữ những khung hình, thước phim chất lượng cao. Vi xử lý Qualcomm Snapdragon 8 Gen 1 hứa hẹn mang đến hiệu năng tuyệt đỉnh, xử lý mượt mà mọi tác vụ.',
                'product_image' => 'Galaxy S22 Ultra.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Samsung Galaxy A35',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 7990000,
                'product_detail' => 'Samsung Galaxy A35 sở hữu những tính năng mang tính đột phá, vượt trội hơn hẳn những mẫu điện thoại thông thường. Với thiết kế ngoại hình ấn tượng cùng sự mạnh mẽ của hiệu năng tới từ con chip Exynos 1380 đi kèm với bộ vi xử lý đồ hoạ ấn tượng, sản phẩm Samsung Galaxy A mới này được các chuyên giá đánh giá là rất có tiềm năng so với những chiếc máy cùng phân khúc.',
                'product_image' => 'Galaxy A35.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Samsung Galaxy S24 Plus',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 20990000,
                'product_detail' => 'Samsung Galaxy S24 Plus có màn hình 6.7 inch, với tấm nền Dynamic AMOLED 2X giúp hình ảnh sống động đến từng chi tiết, độ làm mới liên tục từng giây. Camera của điện thoại gồm: camera chính 50MP và camera selfie 12MP, giúp ghi lại những khoảnh khắc đáng nhớ của bạn bên gia đình. Hiệu năng mạnh mẽ với dung lượng 8GB+256GB,viên pin 4.900 mAh kết hợp sạc nhanh 45W.',
                'product_image' => 'Galaxy S24 Plus.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Samsung Galaxy S21 FE',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 9990000,
                'product_detail' => 'Samsung S21 FE 8GB 128GB sở hữu chipset Exynos 2100 mạnh mẽ có thể chơi mượt mà, RAM 8GB và ROM 128GB cho khả năng đa nhiệm và lưu trữ ổn định. Thêm vào đó cụm camera chất lượng, cho hình ảnh sắc nét: 12MP+12MP+8MP và camera selfie 32MP. Không chỉ vậy, các phiên bản màu sắc thanh lịch, thời thượng giúp sản phẩm nổi bật hơn giữa hàng loạt các thương hiệu khác.',
                'product_image' => 'Galaxy S21 FE.png',
                'type_name' => '4',
                'type_logo' => '4'
            ],

            [
                'product_name' => 'Xiaomi POCO X6 Pro',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 8300000,
                'product_detail' => 'Điện thoại Xiaomi Poco X6 Pro được trang bị con chip Dimensity 8300 Ultra 8 nhân, tiến trình 4nm, tích hợp với GPU Mali-G615 cùng RAM 8GB, bộ nhớ trong 256GB. Máy sở hữu 3 camera sau với camera chính 64MP và 1 camera selfie 16MP. Ngoài ra máy X6 Pro được trang bị màn hình AMOLED 6.67 inch, độ phân giải 1220 x 2712 pixels cùng tần số quét 120Hz. ',
                'product_image' => 'POCO X6 Pro.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'Redmi Note 12 Pro',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 5790000,
                'product_detail' => 'Xiaomi Redmi Note 12 Pro 4G là mẫu điện thoại tầm trung mới của hãng Xiaomi vừa được ra mắt vào tháng 4 năm 2023. Mẫu điện thoại Xiaomi mới này được trang bị màn hình 6.67 inch cùng tần số quét tới 120Hz giúp các chuyển động mượt mà, đặc biệt trong các trận chiến game. Xiaomi Redmi Note 12 Pro 4G cũng sẽ hoạt động ổn định với con chip Snapdragon® 732G cùng bộ nhớ RAM 6GB. Điện thoại cũng đáp ứng tốt nhu cầu nhiếp ảnh của người dùng với cụm bốn camera sau, trong đó ống kính chính sở hữu độ phân giải tới 50MP.',
                'product_image' => 'Note 12 Pro.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'Xiaomi 13',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 16490000,
                'product_detail' => 'Xiaomi 13 là sản phẩm mới được trang bị màn hình OLED kích thước 6.36 inch cùng tần số quét lên đến 120Hz. Bên trong Xiaomi 13 là con chip Snapdragon 8 Gen 2 mới nhất cùng bộ nhớ RAM 8GB vượt trội. Điện thoại cũng đáp ứng tốt khả năng nhiếp ảnh với camera Leica 50MP.',
                'product_image' => 'Xiaomi 13.png',
                'type_name' => '3',
                'type_logo' => '3'
            ],

            [
                'product_name' => 'Sony Xperia 1 V',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => 35060000,
                'product_detail' => 'Sony Xperia 1 V sở hữu hệ thống camera vô cùng ấn tượng với 3 cảm biến có độ phân giải 52MP, 12MP và 12MP. Mẫu điện thoại Sony này sở hữu bộ vi xử lý Snapdragon 8 Gen 2 mạnh mẽ, RAM đạt đến 12GB giúp cải tiến hiệu suất hoạt động trên máy đáng kể. Màn hình Xperia 1V trang bị tấm nền OLED 4K với kích thước 6.5 inch cùng tần số quét 120Hz.',
                'product_image' => 'Xperia 1 V.png',
                'type_name' => '7',
                'type_logo' => '7'
            ],

            [
                'product_name' => 'Sony Xperia 10 V',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => 16060000,
                'product_detail' => 'Sony Xperia 10 V được trang bị cấu hình mạnh mẽ với chip Snapdragon 695 5G, RAM 8GB ấn tượng. Bên cạnh đó chiếc điện thoại Sony này còn sở hữu giá thành phải chăng cùng nhiều tính năng vượt trội. Chắc chắn Xperia 10V sẽ mang đến lợi thế cạnh tranh mà nhiều thương hiệu khác cùng phân khúc phải dè chừng.',
                'product_image' => 'Xperia 10 V.png',
                'type_name' => '7',
                'type_logo' => '7'
            ],

            [
                'product_name' => 'Xperia 5 V',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => 25990000,
                'product_detail' => ' Sony Xperia 5V với thiết kế phẳng hiện đại, màn hình OLED tuyệt hảo, chip Snapdragon 8 Gen 2 mạnh mẽ, bộ đôi camera 52MP-12MP chụp ảnh chất lượng cùng viên pin 5000mAh cho trải nghiệm xuyên suốt cả ngày.',
                'product_image' => 'Xperia 5 V.png',
                'type_name' => '7',
                'type_logo' => '7'
            ],

            [
                'product_name' => 'TECNO POVA 5',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 5570000,
                'product_detail' => 'Điện thoại Tecno Pova 5 hoạt động trên con chip MediaTek Helio G99 và bộ nhớ RAM 8GB cùng viên pin dung lượng 6000mAh hỗ trợ sạc nhanh công suất 45W. Vẻ ngoài máy với màn hình IPS LCD 6.78 inch tần số quét 120Hz hiển thị mượt mà. Cùng với đó cụm camera chính 50MP sẽ giúp điện thoại Tecno này sở hữu khả năng nhiếp ảnh ổn định.',
                'product_image' => 'TECNO POVA 5.png',
                'type_name' => '6',
                'type_logo' => '6'
            ],

            [
                'product_name' => 'TECNO Camon 20 Pro',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 4370000,
                'product_detail' => 'Điện thoại Tecno Pova 5 hoạt động trên con chip MediaTek Helio G99 và bộ nhớ RAM 8GB cùng viên pin dung lượng 6000mAh hỗ trợ sạc nhanh công suất 45W. Vẻ ngoài máy với màn hình IPS LCD 6.78 inch tần số quét 120Hz hiển thị mượt mà. Cùng với đó cụm camera chính 50MP sẽ giúp điện thoại Tecno này sở hữu khả năng nhiếp ảnh ổn định.',
                'product_image' => '20 Pro.png',
                'type_name' => '6',
                'type_logo' => '6'
            ],

            [
                'product_name' => 'Surface Pro 8',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 22790000,
                'product_detail' => 'Surface Pro 8 Core i5 / 8GB / 128GB dòng laptop được thiết kế 2 trong 1 vô cùng sang trọng, ấn tượng cùng màn hình có độ phân giải cao giúp hiển thị hình ảnh một cách rõ nét và chân thật, đáp ứng nhu cầu học tập, làm việc và giải trí của người dùng.',
                'product_image' => 'Surface Pro 8.png',
                'type_name' => '11',
                'type_logo' => '11'
            ],

            [
                'product_name' => 'Surface Laptop Go',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 11790000,
                'product_detail' => 'Laptop mỏng nhẹ ngày càng trở nên phổ biến và được ưu tiên hàng đầu khi chọn lựa laptop của người dùng bởi tính tiện lợi khi di chuyển của nó. Khi nhắc đến các mẫu laptop mỏng nhẹ nổi tiếng nhất hiện nay, phải kể đến Surface Laptop Go 21K-00019 - một trong những đại diện lý tưởng cho dòng laptop Microsoft Surface nhỏ gọn nhưng hiệu năng vẫn mạnh mẽ.',
                'product_image' => 'Laptop Go.png',
                'type_name' => '11',
                'type_logo' => '11'
            ],

            [
                'product_name' => 'TCL 40 NXT',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 3990000,
                'product_detail' => 'Điện thoại TCL 40 Nxt Paper sở hữu màn hình LCD 6.78 inch cùng độ phân giải tới FHD, tần số quét màn hình 90Hz mang lại khả năng hiển thị ấn tượng. Điện thoại còn được trang bị cấu hình với con chip Helio G88 cùng bộ nhớ RAM 8GB và dung lượng lưu trữ 256GB. Máy cũng được trang bị cụm camera chất lượng với ống kính chính 50MP và hai ống kính phụ 5MP và 2MP.',
                'product_image' => 'TCL 40 NXT.png',
                'type_name' => '13',
                'type_logo' => '13'
            ],

            [
                'product_name' => 'TCL 40SE',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => 5300000,
                'product_detail' => 'TCL 40 SE tạo được ấn tượng với người dùng khi sở hữu chipset ổn định Helio G37 cùng chất lượng hiển thị tuyệt vời trên màn hình NXTVISION 6.75’’ cao cấp. Trải nghiệm quay chụp trên thế hệ điện thoại TCL cũng có nhiều cải tiến khi được tích hợp cụm 3 camera AI 50MP. Kèm theo đó là viên pin 5010 mAh, giúp kéo dài thời lượng sử dụng của người dùng.',
                'product_image' => 'TCL 40SE.png',
                'type_name' => '13',
                'type_logo' => '13'
            ],

            [
                'product_name' => 'Laptop Gigabyte U4',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => 21670000,
                'product_detail' => 'Hiệu suất làm việc hằng ngày của bạn sẽ được tăng cường với sản phẩm laptop Gigabyte U4 UD-70S1823SO. Đây lag chiếc laptop Gigabyte mang vẻ ngoài sang trọng cùng với vi xử lý Intel đời 11 và 16 GB RAM bên trong hỗ trợ nhu cầu làm việc đa nhiệm một cách hiệu quả tối ưu.',
                'product_image' => 'Gigabyte U4.png',
                'type_name' => '2',
                'type_logo' => '2'
            ],

            [
                'product_name' => 'OPPO Reno7',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 7300000,
                'product_detail' => 'Đi ngược với thiết kế mặt lưng phẳng cùng góc cạnh vuông vức, điện thoại OPPO Reno7 5G được trang bị thiết kế với góc cạnh bo tròn mềm mại. Thiết kế này hoàn toàn không làm mất đi vẻ sang trọng của thiết bị đồng thời mang lại khả năng cầm nắm dễ dàng. Tổng thể, OPPO Reno7 5G khá nhẹ với tổng trọng lượng chỉ khoảng 173g, dễ dàng đút túi và mang theo mà không cảm thấy nặng nề.',
                'product_image' => 'OPPO Reno7.png',
                'type_name' => '14',
                'type_logo' => '14'
            ],

            [
                'product_name' => 'OPPO Find N2 Flip',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 16030000,
                'product_detail' => 'OPPO Find N2 Flip có kích thước 3.26 inch ở màn hình ngoài và bên trong là 6.8 inch, đặc biệt là GẬP KHÔNG NÊP GẤP và công nghệ hình ảnh chuyên nghiệp - MariSilicon X. Ngoài ra smartphone sẽ được vận hành bởi con chip Dimensity 9000+, kèm dung lượng pin 4.300 mAh và sạc siêu nhanh Super VOOC 44W.',
                'product_image' => 'OPPO Find N2 Flip.png',
                'type_name' => '14',
                'type_logo' => '14'
            ],

            [
                'product_name' => 'OPPO Find N3 Flip',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => 22030000,
                'product_detail' => 'OPPO Find N3 Flip chính thức ra mắt thị trường Việt Nam ngày 26/10 sở hữu nhiều ưu điểm vượt trội: chip Dimensity 9200, RAM 12GB cùng bộ nhớ trong 256GB. Cạnh đó, camera điện thoại gập Find N3 Flip hợp tác cùng Hasselblad, ống kính chính độ phân giải 50MP và màn hình AMOLED 6.8 inch cho trải nghiệp quay chụp chuyên nghiệp hơn bao giờ hết.',
                'product_image' => 'OPPO Find N3 Flip.png',
                'type_name' => '14',
                'type_logo' => '14'
            ],
            
        ]);

    }
}
