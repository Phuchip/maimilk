<?php

use Yii;
use common\components\HopeHtmlHelper;
use common\components\HopeImageHelper;

$this->title = 'Sữa Cho Trẻ Sơ Sinh - Sữa Cho Bé và Đồ Dùng Bé Uống Bibo Mart';
$this->keywords = 'sữa cho bé, sua cho be, sữa bột, bình sữa, núm ty, máy tiệt trùng, binh sua, num ty, may tiet trung, nước rửa bình, hộp chia sữa, hop chia sua, sữa cho trẻ sơ sinh, sữa công thức, sữa tốt cho trẻ sơ sinh, sữa pediasure, sữa tốt cho bé, sữa tăng cân';
$this->description = 'Sữa cho trẻ sơ sinh, sữa bột cho bé và đồ dùng  bé uống bình sữa, núm ty, máy hút sữa hỗ trợ cho bé phát triển tốt nhất theo giai đoạn. Chính hãng Giá tốt, nhiều ưu đãi tại BiboMart - Xem và Mua ngay';
$this->image = '/images/logo.png';
$this->css = '/css/category.css';
$this->js = '/js/category.js';
$arrImage = [4, 5, 6, 7];
$breadcrumb = [
    [
        'url' => '/category',
        'title' => 'Sữa và thực phẩm'
    ],
];

$page = 4;
$total_page = 20;
?>
<?= $this->render('/layouts/_breadcrumb', ['breadcrumb' => $breadcrumb]); ?>
<div class="category-index">
    <div class="category">
        <form method="GET" class="filter-product">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="sidebar">
                    <div class="category-list category-item">
                        <div class="sidebar-title active">
                            <p>Nhóm sản phẩm</p>
                            <i class="fa fa-angle-up"></i>
                        </div>
                        <div class="sidebar-content">
                            <ul class="list-items">
                                <li><a href="">Sữa bột các loại</a></li>
                                <li><a href="">Sữa nước các loại</a></li>
                                <li><a href="">Bình sữa</a></li>
                                <li><a href="">Vệ sinh bình sữa</a></li>
                                <li><a href="">Dụng cụ trữ sữa & hâm sữa</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="category-price category-item">
                        <div class="sidebar-title active">
                            <p>Khoảng giá</p>
                            <i class="fa fa-angle-up"></i>
                        </div>
                        <div class="sidebar-content">
                            <ul class="list-items">
                                <li class="item custom-input">
                                    <input type="radio" name="price" value="500">
                                    <label for="price">Dưới 500.000đ</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="radio" name="price" value="500-700">
                                    <label for="price">Từ 500.000đ - 700.000đ</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="radio" name="price" value="700-1000">
                                    <label for="price">Từ 700.000đ - 1.000.000đ</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="radio" name="price" value="1000-1500">
                                    <label for="price">Từ 1.000.000đ - 1.500.00đ</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="radio" name="price" value="1500-2000">
                                    <label for="price">Từ 1.500.00đ đến 2.000.000đ</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="radio" name="price" value="2000">
                                    <label for="price">Trên 2.000.000đ</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="category-brand category-item">
                        <div class="sidebar-title active">
                            <p>Thương hiệu</p>
                            <i class="fa fa-angle-up"></i>
                        </div>
                        <div class="sidebar-content">
                            <ul class="list-items">
                                <li class="item custom-input">
                                    <input type="checkbox" name="brand" value="" checked>
                                    <label for="brand">137 Degrees <span class="count">10</span></label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="brand" value="">
                                    <label for="brand">Abbott <span class="count">50</span></label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="brand" value="">
                                    <label for="brand">Babyganics</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="brand" value="">
                                    <label for="brand">Bebble</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="brand" value="">
                                    <label for="brand">Biostime</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="brand" value="">
                                    <label for="brand">Chicco</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="category-item category-age">
                        <div class="sidebar-title active">
                            <p>Khoảng giá</p>
                            <i class="fa fa-angle-up"></i>
                        </div>
                        <div class="sidebar-content">
                            <ul class="list-items">
                                <li class="item custom-input">
                                    <input type="checkbox" name="age" value="6">
                                    <label for="age">0 - 6 tháng</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="age" value="12">
                                    <label for="age">6 - 12 tháng</label>
                                </li>
                                <li class="item checkbox-input">
                                    <input type="checkbox" name="age" value="24">
                                    <label for="age">1 - 2 tuổi</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="age" value="36">
                                    <label for="age">2 - 3 tuổi</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="age" value="37">
                                    <label for="age">trên 3 tuổi</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="category-item category-origin">
                        <div class="sidebar-title active">
                            <p>Xuất xứ thương hiệu</p>
                            <i class="fa fa-angle-up"></i>
                        </div>
                        <div class="sidebar-content">
                            <ul class="list-items">
                                <li class="item custom-input">
                                    <input type="checkbox" name="origin" value="england">
                                    <label for="origin">Anh</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="origin" value="france">
                                    <label for="origin">Pháp</label>
                                </li>
                                <li class="item checkbox-input">
                                    <input type="checkbox" name="origin" value="germany">
                                    <label for="origin">Đức</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="origin" value="denmark">
                                    <label for="origin">Đan Mạch</label>
                                </li>
                                <li class="item custom-input">
                                    <input type="checkbox" name="origin" value="usa">
                                    <label for="origin">Mỹ</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="column-main">
                    <div class="column-header d-flex justify-content-between">
                        <div class="page-title-wrapper d-flex align-items-center">
                            <h1 class="page-title">Bé uống</h1>
                            <span class="count ml-2">530 sản phẩm</span>
                        </div>
                        <div class="toolbar-sort">
                            <label for="sort">Sắp xếp: </label>
                            <select name="sort" class="sort-options form-control">
                                <option value="asc">Giá tăng dần</option>
                                <option value="desc">Giá giảm dần</option>
                                <option value="seller">Bán chạy</option>
                                <option value="new">Hàng mới</option>
                                <option value="position" selected>Phổ biến nhất</option>
                            </select>
                        </div>
                    </div>
                    <div class="column-content mt-2">
                        <div class="list-product">
                            <?php for($i = 0;$i<20;$i++): ?>
                                <div class="product-item">
                                    <div class="product-head">
                                        <a href="product" class="product-link">
                                            <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-1.jpg" alias="" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-name">
                                            <h3 class="name">
                                                <a href="product" title="Siro Fitobimbi D3+K2 hỗ trợ hấp thu canxi xương - răng cho bé (30ml)">Siro Fitobimbi D3+K2 hỗ trợ hấp thu canxi xương - răng cho bé (30ml)</a>
                                            </h3>
                                        </div>
                                        <div class="product-price">
                                            <div class="price-new">
                                                <p>300.000đ</p>
                                            </div>
                                            <div class="price-old">
                                                <p>450.000đ</p>
                                            </div>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-rate">
                                                <div class="rating">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                            </div>
                                            <div class="product-cart">
                                                <i class="icon-cart"></i>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="navigation mt-3">
                            <?= HopeHtmlHelper::pagination($page,$total_page); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="category-description">
            <div class="category-description-block">
                <div id="toc">
                    <p id="toc-header">Nội dung chính</p>
                    <ul>
                        <li class="toc2"><a href="#sua-va-thuc-pham-an-dam-cho-giai-doan-phat-trien-cua-con">Sữa và thực phẩm ăn dặm cho giai đoạn phát triển của con</a></li>
                        <li class="toc3"><a href="#nhu-cau-dinh-duong-cua-tre-theo-do-tuoi">Nhu cầu dinh dưỡng của trẻ theo độ tuổi</a></li>
                        <li class="toc3"><a href="#can-luu-y-dieu-gi-khi-mua-sua-va-thuc-pham-an-dam-ch-be">Cần lưu ý điều gì khi mua sữa và thực phẩm ăn dặm cho bé?</a></li>
                        <li class="toc3"><a href="#dia-chi-mua-sua-va-thuc-pham-an-dam-chinh-hang-gia-tot">Địa chỉ mua sữa và thực phẩm ăn dặm chính hãng giá tốt</a></li>
                    </ul>
                </div>        
                <div class="category-desc-content">
                    <h2><a name="sua-va-thuc-pham-an-dam-cho-giai-doan-phat-trien-cua-con"></a>Sữa và thực phẩm ăn dặm cho giai đoạn phát triển của con</h2>
                    <p><strong>Sữa và thực phẩm ăn dặm</strong> là các sản phẩm góp phần vào quá trình phát triển của trẻ từ sơ sinh bên cạnh sữa mẹ. Nhu cầu sữa bột, thực phẩm ăn dặm sẽ thay đổi tùy vào từng giai đoạn và cơ địa của mỗi bé.</p>
                    <h3><a name="nhu-cau-dinh-duong-cua-tre-theo-do-tuoi"></a>Nhu cầu dinh dưỡng của trẻ theo độ tuổi</h3>
                    <h4>Dinh dưỡng cho trẻ sơ sinh</h4>
                    <p>Sữa mẹ là thức ăn tốt nhất cho sự phát triển của trẻ sơ sinh và trẻ nhỏ”. Giai đoạn 6 tháng đầu đời, nhu cầu dinh dưỡng của trẻ được đáp ứng tốt nhất bởi sữa mẹ. Việc nuôi con hoàn toàn bằng sữa mẹ không chỉ hoàn thiện hệ thống tiêu hóa, tăng cường sức đề kháng mà còn giúp ích cho sự phát triển não bộ của trẻ</p>
                    <p><strong>Lượng sữa mẹ cho bé từ 0 – 1 tháng tuổi</strong>: Giai đoạn này trẻ có thể bú mẹ từ 8 – 12 cữ bú mỗi ngày, lượng sữa cho mỗi cữ bú dao động từ 5 – 7ml vào ngày đầu tiên và tăng dần đến khoảng 35 – 60ml trong suốt tháng đầu tiên</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/SEO/luong-sua-me-cho-be-so-sinh.jpg" alt="tre-so-sinh-bu-me-bao-nhieu"></p>
                    <p style="text-align: justify;">- <strong>Lượng sữa mẹ cho trẻ từ 2 – 3 tháng tuổi</strong>: giai đoạn này trẻ không còn bú nhiều cữ như tháng đầu tiên nữa, mỗi ngày cần khoảng 300 – 700ml sữa, chia ra từ 5 – 7 cữ bú</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/SEO/tre-so-sinh-bu-me-bao-nhieu.jpg" alt=""></p>
                    <p>- <strong>Trẻ 4 tháng uống bao nhiêu ml sữa</strong>: bước vào giai đoạn 4 tháng tuổi, hoạt động của bé đã nhiều hơn giai đoạn 3 tháng sơ sinh. Nhu cầu sữa mẹ của bé cũng tăng lên. Từ 4 – 6 tháng tuổi, bé cần 5 – 6 cữ bú mỗi ngày, thời gian bú lâu hơn, lượng sữa cần nhiều hơn trong mỗi cữ.</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/SEO/tre-4-thang-bu-me-bao-nhieu-la-du.jpg" alt=""></p>
                    <p style="text-align: justify;">Với những gia đình dùng <a href="https://www.kidsplaza.vn/sua-bot-cho-be.html">sữa công thức cho bé</a> từ giai đoạn sơ sinh, lượng sữa mỗi cữ cho con phụ thuộc vào từng thương hiệu. Khuyến cáo nên tham khảo lượng pha sữa được nhà sản xuất gợi ý</p>
                    <h4 style="text-align: justify;">Dinh dưỡng cho trẻ từ 6 tháng tuổi</h4>
                    <p style="text-align: justify;">Giai đoạn này bé đã sẵn sàng cho việc làm quen với <a href="https://www.kidsplaza.vn/thuc-pham-dinh-duong.html">thực phẩm ăn dặm</a> hay còn gọi là giai đoạn ăn dặm của trẻ. Đây là bước&nbsp;cực kỳ quan trọng, không chỉ kịp thời bổ sung dinh dưỡng cho con mà còn quyết định thói quen ăn uống sau này của trẻ.</p>
                    <p style="text-align: justify;">- <strong>Chế độ ăn cho trẻ từ 6 – 8 tháng tuổi</strong>: sang đến tháng thứ 6, bé yêu của mẹ vẫn bú mẹ hoặc uống thêm sữa bột nhưng số lượng cữ bú giảm đi chỉ còn 3 – 5 lần/ngày. Bé sẽ bắt đầu ăn dặm với bột ăn dặm hoặc các thức ăn được chế biến nhuyễn, có dạng lỏng. Giai đoạn này mẹ cần tìm hiểu thêm về 1 số phương pháp ăn dặm phổ biến, những nguyên tắc ăn dặm cho bé mẹ không thể quên và lưu ý khi chọn dụng cụ ăn dặm cho phù hợp</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/SEO/136077283_5176711655703100_1247736158388296696_o.jpg" alt=""></p>
                    <p style="text-align: justify;"><strong>Xem thêm:</strong></p>
                    <ul>
                    <li style="text-align: justify;"><a href="https://www.kidsplaza.vn/blog/mach-me-ba-phuong-phap-an-dam-pho-bien-nhat-hien-nay.html">Review - 3 phương pháp ăn dặm phổ biến nhất hiện nay</a></li>
                    <li style="text-align: justify;"><a href="https://www.kidsplaza.vn/blog/8-quy-tac-tap-an-dam-me-nao-cung-phai-biet-ban-thi-sao.html">8 Nguyên tắc "bất di bất dịch" cho con tập ăn dặm</a></li>
                    </ul>
                    <p style="text-align: justify;">- <strong>Chế độ ăn cho trẻ từ 8 – 12 tháng tuổi: </strong>giai đoạn này bé đã quen với việc ăn dặm, ngoài các loại rau củ nghiền nhuyễn bé có thể ăn như lúc 6 – 8 tháng tuổi, mẹ cũng có thể bổ sung protein cho con qua một số loại thịt, cá, trứng. Tuy trẻ đã ăn giỏi rồi nhưng mẹ vẫn nên duy trì việc cho con bú sữa mẹ hoặc uống sữa bột – đây là nguồn cung cấp canxi tuyệt vời cho bé. Ngoài ra mẹ cũng có thể bổ sung canxi, chất xơ cho trẻ thông qua 1 số loại bánh ăn dặm dễ tan.</p>
                    <h4 style="text-align: justify;">Dinh dưỡng cho trẻ từ 1 tuổi</h4>
                    <p style="text-align: justify;">Khi bước vào giai đoạn 1 tuổi, thực đơn ăn dặm sẽ phong phú hơn, có nhiều hơn các loại thực phẩm như thịt, cá, tôm, cua, rau củ bé&nbsp;có thể ăn được. Ngoài bột ăn dặm, cháo ăn dặm như giai đoạn trước 1 tuổi, đến thời điểm này mẹ cũng nên cho bé đổi món như nui ăn dặm, mì ăn dặm.</p>
                    <p style="text-align: justify;">Nếu như theo khuyến cáo của chuyên gia dinh dưỡng, mẹ không nên nêm gia vị ăn dặm cho trẻ trước 12 tháng tuổi thì đến giai đoạn này, mẹ cũng có thể lựa chọn dầu ăn dặm, nước mắm ăn dặm hay hạt nêm ăn dặm cho bé rồi</p>
                    <p style="text-align: justify;">Ngoài 3 bữa ăn chính mỗi ngày, bé cần thêm các bữa ăn phụ, thông thường bữa phụ này sẽ cách bữa chính khoảng 2 tiếng, mẹ có thể cho bé ăn bánh ăn dặm, trái cây nghiền, váng sữa – sữa chua – phomai.</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn-v2.kidsplaza.vn/media/wysiwyg/SEO/142051918_5256090357765229_8286108000499086145_o.jpg" alt=""></p>
                    <h4 style="text-align: justify;">Dinh dưỡng cho trẻ từ 2 tuổi trở lên</h4>
                    <p style="text-align: justify;">Giai đoạn này ngoài bữa chính ăn cơm như người lớn, bé vẫn cần duy trì việc uống sữa mỗi ngày để phát triển thể chất. Ngoài sữa công thức dạng bột, mẹ có thể lựa chọn thêm <a href="https://www.kidsplaza.vn/sua-tuoi-cho-be.html">sữa tươi</a> hoặc sữa công thức pha sẵn hay còn gọi là sữa nước cho trẻ từ 1 tuổi.</p>
                    <p style="text-align: justify;">Trẻ từ 1 – 2 tuổi, mỗi ngày cần 1 – 2 ly sữa tương đương 200 – 300ml; từ 2 – 3 tuổi mỗi ngày bé cần 300 – 400ml sữa và từ 4 tuổi trở lên, mỗi ngày bé cần đến 600ml sữa để phục vụ nhu cầu phát triển.</p>
                    <h3><a name="can-luu-y-dieu-gi-khi-mua-sua-va-thuc-pham-an-dam-ch-be"></a>Cần lưu ý điều gì khi mua sữa và thực phẩm ăn dặm cho bé?</h3>
                    <p>Để đảm bảo cho sức khỏe của bé, mẹ nên chọn sữa và thực phẩm phù hợp với đặc điểm phát triển cũng như nhu cầu sử dụng của bé.&nbsp;</p>
                    <p>Hiện nay sữa công thức cũng như thực phẩm ăn dặm cho bé khá đa dạng về thành phần và đơn vị cung cấp. Chính vì vậy bố mẹ nên chọn địa chỉ mua uy tín cũng như tìm hiểu kỹ về sản phẩm chính hãng để có thêm sự lựa chọn tốt nhất cho sức khỏe của bé cũng như phù hợp với túi tiền của mình.&nbsp;</p>
                    <h3><a name="dia-chi-mua-sua-va-thuc-pham-an-dam-chinh-hang-gia-tot"></a>Địa chỉ mua sữa và thực phẩm ăn dặm chính hãng giá tốt</h3>
                    <p>Siêu thị mẹ và bé KidsPlaza là đơn vị cung cấp sữa và thực phẩm ăn dặm (bánh ăn dặm, cháo ăn dặm) tin cậy và có giá tốt nhất cho mẹ và bé. KidsPlaza luôn đặt chất lượng sản phẩm lên hàng đầu, cam kết cung cấp sản phẩm chính hãng, có nguồn gốc xuất xứ rõ ràng, tin cậy.</p>
                </div>    
            </div>
        </div>
    </div>
</div>
