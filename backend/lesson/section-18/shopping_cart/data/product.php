<?php
// $conn = mysqli_connect('localhost', 'root', '', 'db_shopping_cart');
// $sql = "SELECT * FROM `tbl_list_product`";
// $result = mysqli_query($conn, $sql);
// $list_productt = array();
// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $list_product[] = $row;
//     }
// } else {
//     echo "0 result";
// }
$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'Điện thoại',
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'Macboook',
    )

);

$list_product = array(
    1 => array(
        'id' => '1',
        'product_title' => 'Điện thoại Samsung Galaxy S21 5G ',
        'price' => 18000000,
        'code' => 'HT#1',
        'product_desc' => 'Galaxy S21 5G nằm trong series S21 đến từ Samsung nổi bật với thiết kế tràn viền, cụm camera ấn tượng cho đến hiệu năng mạnh mẽ hàng đầu',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/220833/samsung-galaxy-s21-tim-600x600.jpg',
        'product_content' => "'Bộ cánh'mới nổi bật và sang trọng/Nổi bật với cụm camera sau được thiết kế đầy mới lạ, phần khuôn hình chữ nhật chứa bộ 3 camera ôm trọn cạnh trái của chiếc smartphone, viền khuôn cong uyển chuyển, hạn chế tối đa độ nhô ra so với mặt lưng, mang lại cái nhìn tổng thể hài hòa, độc đáo.Galaxy S21 có 3 màu sắc chính là: Tím, trắng và xám. Cho người dùng thoải mái lựa chọn để phù hợp với phong cách của bản thân nhất.Galaxy S21 là chiếc điện thoại kháng nước, bụi đạt chuẩn IP68, chuẩn cao nhất hiện tại. Máy có thể sống sót ở độ sâu 1.5m lên đến 30 phút, giúp hạn chế được khả năng hư hỏng thiết bị khi bị nước đổ vào, trời mưa hoặc không may làm rơi xuống nước.",
        'cat_id' => 1,
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'iPhone 12 64GB',
        'price' => 20000000,
        'code' => 'HT#2',
        'product_desc' => 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-600x600.jpg',
        'product_content' => "Hiệu năng vượt xa mọi giới hạn Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.Với CPU Apple A14 Bionic, bạn có thể dễ dàng trải nghiệm mọi tựa game với những pha chuyển cảnh mượt mà hay hàng loạt hiệu ứng đồ họa tuyệt đẹp ở mức đồ họa cao mà không lo tình trạng giật lag.Chưa hết, Apple còn gây bất ngờ đến người dùng với hệ thống 5G lần đầu tiên được trang bị trên những chiếc iPhone, cho tốc độ truyền tải dữ liệu nhanh hơn, ổn định hơn.",
        'cat_id' => 1,
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'OPPO A74',
        'price' => 7000000,
        'code' => 'HT#3',
        'product_desc' => "OPPO luôn đa dạng hoá các sản phẩm của mình từ giá rẻ cho đến cao cấp. Trong đó, điện thoại OPPO A74 4G được nằm trong phân khúc tầm trung rất đáng chú ý với nhiều tính năng và smartphone cũng chính là bản nâng cấp của OPPO A73 ra mắt trước đó.",
        'product_thumb' => "https://cdn.tgdd.vn/Products/Images/42/235653/oppo-a74-blue-9-600x600.jpg",
        'product_content' => "Thiết kế quen thuộc, màu sắc tối giảnChiếc điện thoại OPPO A74 vẫn sở hữu cụm camera nằm trong mô-đun hình chữ nhật góc trái thân thuộc của hãng, máy được gia công tỉ mỉ, tối ưu kích thước giúp smartphone mỏng nhẹ, thiết kế thân máy cong 3D mảnh mai, dễ cầm nắm sử dụng.OPPO A74 tối giản sự lựa chọn của người dùng chỉ với 2 phiên bản màu sắc, đó là: Màu xanh thanh mát như một tảng băng trôi toát vẻ thanh lịch, tươi mới và lớp vỏ màu đen huyền bí, sang trọng lại cực kỳ dễ phối màu với trang phục.OPPO A74 sở hữu màn hình có kích thước hiển thị khá rộng 6.43 inch với tỷ lệ màn hình so với thân máy lên đến 90.8% cho không gian hiển thị rộng mở, cho trải nghiệm người dùng thêm sự rõ ràng, đã mắt.",
        'cat_id' => 1,
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'MacBook Pro M1 2020 Space Grey (Z11C)',
        'price' => 45000000,
        'code' => 'HT#4',
        'product_desc' => 'Apple Macbook Pro M1 2020 (Z11C) được nâng cấp với bộ vi xử lý mới cực kỳ mạnh mẽ, con laptop này sẽ phục vụ tốt cho công việc của bạn, đặc biệt bên lĩnh vực đồ họa, kỹ thuật.
            Tăng cường không gian lưu trữ, tốc độ xử lý',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/231255/apple-macbook-pro-2020-z11c-3-600x600.jpg',
        'product_content' => "Chip Apple M1 là một bộ vi xử lý mạnh mẽ, được ra mắt lần đầu tiên trên MAC. Đây là con chip với bộ xử lý 5 nm, tích hợp CPU 8 lõi với 4 lõi CPU tốc độ và và 4 lõi tiết kiệm năng lượng. Nhờ vậy, thời lượng pin của laptop được kéo dài đến tận 10 tiếng đồng hồ, giúp cho bạn thoải mái làm việc với một hiệu suất cực kỳ cao.Ngoài ra, card đồ họa tích hợp 8 nhân GPU giúp người dùng xử lý các tác vụ văn phòng cũng như đồ họa một cách trơn tru, mượt mà với tốc độ xử lý gấp 5 lần các thế hệ trước đó. Nhờ vậy, bạn có thể nâng cao hiệu suất làm việc cũng như tiết kiệm được thời gian một cách tối ưu nhất.Với ổ cứng SSD 512 GB giúp bạn tăng tốc toàn diện máy tính với tốc độ khởi động, mở ứng dụng, truyền dữ liệu nhanh vượt trội so với ổ cứng HDD truyền thống. Bên cạnh đó, RAM 16 GB của laptop giúp nâng cao khả năng đa nhiệm, dễ dàng mở những tập tin lớn, nặng hay mở nhiều trình duyệt cùng lúc nhưng không xảy ra tình trạng giật lag.Chiếc laptop phiên bản màu bạc với vỏ kim loại nguyên khối cực kỳ sang trọng, nhỏ gọn và thời trang. Bạn cũng có thể dễ dàng cho Macbook Pro 2020 vào cặp xách hay balo, cầm trên tay nhẹ nhàng để di chuyển bất cứ nơi đâu chỉ với trọng lượng 1.4 kg và mỏng 15.6 mm.",
        'cat_id' => 2
    ),
    5 => array(
        'id' => 5,
        'product_title' => 'MacBook Air M1 2020 Gold (MGNE3SA/A)',
        'price' => 32000000,
        'code' => 'HT#5',
        'product_desc' => "Apple MacBook Air M1 2020 (MGNE3SA/A) là chiếc laptop đang gây được rất nhiều sự chú ý, đặc biệt là đối với những fan nhà “Táo”. Với MacBook Air 2020, lần đầu tiên bạn sẽ được trải nghiệm con chip M1 được thiết kế dành riêng cho Mac cung cấp hiệu năng đồ họa mạnh mẽ.
            Chất liệu kim loại cao cấp",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/239235/macbook-pro-m1-2020-mydc2saa-600x600.jpg',
        'product_content' => "Thiết kế tối giản với độ mỏng chỉ 4.1 mm tại điểm mỏng nhất, trọng lượng nhẹ chỉ 1.29 kg, cùng chất liệu kim loại tái chế giúp cho MacBook Air sang trọng, đẳng cấp nhưng vẫn đảm bảo tính di động hơn bao giờ hết.Apple luôn làm rất tốt yếu tố bảo mật cho người dùng. Như các thế hệ trước, MacBook Air vẫn sử dụng chip T2 mã hóa mọi dữ liệu trên máy, chống đánh cắp dữ liệu tối đa. Khởi động máy chỉ với 1 cái chạm tay đồng thời bảo vệ an toàn cho dữ liệu trên máy.Với bàn phím Magic, các khuyết điểm của bàn phím cánh bướm thế hệ trước sẽ được khắc phục, gõ phím êm ái, ít tiếng ồn cùng với các phím tắt được lập trình giúp dễ dàng truy cập hơn. Các phím có đèn nền với cảm biến ánh sáng để bạn có thể sử dụng kể cả trong môi trường thiếu sáng.Macbook M1 trang bị 2 cổng Thunderbolt 3 (USB-C) có tốc độ truyền dữ liệu nhanh và ổn định - lên đến 40 Gb/s, tiện lợi khi kết nối máy với thiết bị khác.",
        'cat_id' => 2,
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'MacBook Pro M1 2020 Space Grey (MYD82SA/A)',
        'price' => 38000000,
        'code' => 'HT#6',
        'product_desc' => 'Apple Macbook Pro M1 2020 (MYD82SA/A) sở hữu thiết kế sang trọng từ kim loại nguyên khối được kế thừa từ các thế hệ trước nhưng bên trong là một cấu hình cực kỳ đáng gờm. Với chip M1 lần đầu tiên xuất hiện trên MacBook Pro, hiệu năng CPU của máy tăng đến 2.8 lần, hiệu năng GPU tăng 5 lần.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/231253/apple-macbook-pro-2020-m1-myd82saa-274121-084107-600x600.jpg',
        'product_content' => 'Vẫn là thiết kế kim loại nguyên khối sang trọng thường thấy ở các thế hệ trước, phiên bản MacBook Pro lần này mỏng nhẹ chỉ 15.6 mm, trọng lượng 1.4 kg có thể tự tin đồng hành cùng bạn đến bất cứ đâu.Bàn phím Magic trên máy được Apple cho là đã khắc phục hầu hết các nhược điểm của bàn phím Cánh bướm trên các thế hệ trước. Với đèn nền và các phím tắt, bạn có thể xử lý công việc một cách thuận tiện hơn.Apple trang bị cho MacBook Pro 2020 chip bảo mật T2 mã hóa dữ liệu ổ cứng cùng với cảm biến vân tay nhỏ gọn được tích hợp giúp bạn có thể mở máy nhanh chóng, không cần mất thời gian nhập mật mã, thanh toán trực tuyến dễ dàng. 

Laptop trang bị 2 cổng Thunderbolt 3 (USB-C) truyền dữ liệu cực nhanh lên đến 40 Gb/s để xuất dữ liệu sang màn hình, máy chiếu, chia sẻ thông tin dễ dàng. ',
        'cat_id' => 2,
    )
);
