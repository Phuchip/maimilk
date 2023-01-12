<?php

use Yii;
use common\components\HopeHtmlHelper;
use common\components\HopeImageHelper;

$this->title = 'Sữa Non ILDONG số 1 Hàn Quốc 90 gói/90g (trẻ 0-12 tháng)';
$this->keywords = 'Sữa Non ILDONG số 1 Hàn Quốc 90 gói/90g (trẻ 0-12 tháng)';
$this->description = 'Sữa Non ILDONG số 1 Hàn Quốc 90 gói/90g (trẻ 0-12 tháng)';
$this->image = '/images/logo.png';
$this->css = '/css/product.css';
$arrImage = [4, 5, 6, 7];
$breadcrumb = [
    [
        'url' => '/',
        'title' => 'Sữa bột'
    ],
    [
        'url' => '/',
        'title' => 'Sữa non ILDONG'
    ],
    [
        'url' => '/',
        'title' => 'Sữa Non ILDONG số 1 Hàn Quốc 90 gói/90g (trẻ 0-12 tháng)',
        'current' => true
    ],
];
?>
<?= $this->render('/layouts/_breadcrumb', ['breadcrumb' => $breadcrumb]); ?>
<div class="product-index">
    <div class="product">
        <div class="row">
            <div class="product-image col-sm-12 col-md-5 col-lg-4">
                <ul id="multiple-items">
                    <?php foreach ($arrImage as $image) : ?>
                        <li><?= HopeImageHelper::createTagImage('/images/product/test/product-' . $image . '.jpg') ?></li>
                    <?php endforeach; ?>
                </ul>
                <ul id="thumbnail-items">
                    <?php foreach ($arrImage as $image) : ?>
                        <li><?= HopeImageHelper::createTagImage('/images/product/test/product-' . $image . '.jpg') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="product-info col-sm-12 col-md-7 col-lg-5">
                <div class="product-title">
                    <h1>Sữa Non ILDONG số 1 Hàn Quốc 90 gói/90g (trẻ 0-12 tháng)</h1>
                </div>
                <div class="product-other-info">
                    <p class="trademark mr-1">
                        <strong>Thương hiệu</strong>
                        <span>Abbott</span>
                    </p>
                    <p class="product-code boder-left ml-1">
                        <strong>Mã sản phẩm</strong>
                        <span>SKU 211110254</span>
                    </p>
                </div>
                <div class="product-other-info">
                    <div class="product-rate mr-1">
                        <div class="rating">
                            <i class="icon-star active"></i>
                            <i class="icon-star active"></i>
                            <i class="icon-star active"></i>
                            <i class="icon-star active"></i>
                            <i class="icon-star active"></i>
                        </div>
                        <p>(50 đánh giá)</p>
                    </div>
                    <p class="product-stock boder-left ml-1">
                        <strong>Tình trạng</strong>
                        <span>Còn hàng</span>
                    </p>
                </div>
                <div class="product-other-description">
                    <ul class="other-description">
                        <li><i class="fa fa-check"></i>Thương hiệu: ILDONG FOODIS Korea</li>
                        <li><i class="fa fa-check"></i>Nhập khẩu nguyên hộp có tem phụ tiếng Việt</li>
                        <li><i class="fa fa-check"></i>100% sữa bò non cao cấp giàu IgG – IGF – DHA</li>
                    </ul>
                    <div class="freeship">
                        <?= HopeImageHelper::createTagImage('/images/freeship.png') ?>
                    </div>
                </div>
                <div class="detail-price">
                    <p class="price-new">300.000đ</p>
                    <p class="price-old">450.000đ</p>
                    <p class="discount">Tiết kiệm 30%</p>
                </div>
                <div class="add-cart">
                    <form onsubmit="return false" id="form_add_cart">
                        <div class="add-cart-quantity">
                            <p class="label">Số lượng</p>
                            <div class="area-quatity">
                                <button class="btn-adjust minus">
                                    <i class="fa fa-minus-circle"></i>
                                </button>
                                <input class="quantity" type="number" name="quantity" value="1" min="1" max="999">
                                <button class="btn-adjust plus">
                                    <i class="fa fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn-add-cart btn-add-to-cart">
                            <i class="icon-cart-white"></i>Thêm vào giỏ hàng
                        </button>
                    </form>
                    <button class="contact-supplier">
                        <p>Đặt hàng ngay</p>
                        <span>Giao hàng tận nơi nhanh chóng</span>
                    </button>
                </div>
            </div>
            <div class="service col-sm-12 col-md-12 col-lg-3">
                <div class="group-btn-text">
                    <button class="btn-text" role="button">Sản phẩm có sẵn tại</button>
                    <ul class="collapse show">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>68 ngõ 151 Nguyễn Đức Cảnh, Hoàng Mai, Hà Nội</span>
                        </li>
                    </ul>
                </div>
                <div class="group-btn-text">
                    <button class="btn-text" role="button">Cam kết dịch vụ</button>
                    <ul class="collapse show">
                        <li>
                            <i class="fa fa-diamond"></i>
                            <span>Cam kết 100% hàng chính hãng</span>
                        </li>
                        <li>
                            <i class="fa fa-truck"></i>
                            <span>Ship Toàn Quốc, Miễn Phí Hà Nội</span>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <span>Đổi trả Miễn Phí trong 7 ngày</span>
                        </li>
                        <li>
                            <i class="fa fa-handshake-o"></i>
                            <span>Dịch vụ khách hàng tốt nhất</span>
                        </li>
                    </ul>
                </div>
                <div class="group-btn-text">
                    <button class="btn-text" role="button">Hỗ trợ khách hàng</button>
                    <ul class="collapse show">
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:0912870820">0912870820 <span>(Hotline/Zalo)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="product-detail">
        <div class="title-desc">
            <h2>Thông tin sản phẩm</h2>
        </div>
        <div class="product-content">
            <div class="product-left">
                <div class="product-desc">
                    <h2>Sữa dê Hipp Organic số 2 - <strong>cung cấp đầy đủ các dưỡng chất thiết yếu cho sự phát triển của bé</strong>
                    </h2>
                    <p>Với <strong><a href="https://www.kidsplaza.vn/sua-de.html">sữa dê</a> Hipp Organic số 2 (400g)</strong> mẹ hoàn toàn yên tâm trao cho bé nguồn dưỡng chất an toàn, dễ hấp thu với đạm A2 tự nhiên từ sữa dê Organic thanh mát cùng với các vitamin và khoáng chất cần thiết giúp bé phát triển toàn diện thể chất và trí tuệ.</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Hipp/sua-de-hipp-organic-2-400g-1.jpg" alt="Sữa dê Hipp Organic số 2 (400g) cho bé 6-12 tháng tuổi" width="500"></p>
                    <p style="text-align: center;"><em>Sữa dê Hipp Organic số 2 (400g) cho bé 6-12 tháng tuổi</em></p>
                    <p>HiPP là thương hiệu <strong><a href="https://www.kidsplaza.vn/sua-bot-cho-be.html">sữa công thức</a> hữu cơ nổi tiếng hàng đầu tại Châu Âu</strong> với nhiều năm kinh nghiệm. Sữa dê HiPP Organic số 2 được sản xuất từ những nguyên liệu hữu cơ Organic tốt nhất - Vượt tiêu chuẩn do EU đặt ra.</p>
                    <p>Sản phẩm sữa dê HiPP Organic số 2 chính hãng đã có mặt tại các hệ thống siêu thị Mẹ Bầu &amp; Em Bé <strong><a href="https://www.kidsplaza.vn/">Kids Plaza</a></strong>&nbsp;</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Hipp/sua-de-hipp-organic-2-400g-5.jpg" alt="" width="500"></p>
                    <p style="text-align: center;"><em>Sữa dê Hipp Organic số 2 sản xuất từ những nguyên liệu hữu cơ Organic tốt nhất</em></p>
                    <h3>Đặc điểm nổi bật của sữa dê HiPP Organic số 2 400g</h3>
                    <p><a href="https://www.kidsplaza.vn/tag/sua-de-hipp-organic"><strong>Sữa dê HiPP Organic</strong></a> chứa thành phần đạm đặc biệt: beta casein A2 dễ tiêu hoá,&nbsp;thân thiện với đường ruột của bé với <strong>khả năng hấp thu tối đa</strong> nhờ các thành phần hữu cơ lành tính và dịu nhẹ cùng sự kết hợp giữa đạm A2 trong sữa dê với chất xơ GOS từ nguồn lactose hữu cơ tinh khiết, sản phẩm sữa dê HiPP Organic số 2 đặc biệt dễ tiêu hóa giúp cho đường ruột của bé được nhẹ nhàng hơn&nbsp;</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Hipp/sua-de-hipp-organic-so-3-400g-cho-be-tren-12-thang-tuoi-9.jpg" alt="Sữa dê Hipp Organic số 2 chứa đạm A2 thân thiện với đường ruột của trẻ" width="500"></p>
                    <p style="text-align: center;"><em>Sữa dê HiPP Organic số 2 chứa đạm A2 thân thiện với đường ruột của trẻ</em></p>
                    <p>Không những vậy sữa dê HiPP Organic số 2 còn chứa chất xơ GOS từ nguồn lactose hữu cơ giúp <strong>cân bằng hệ vi sinh đường ruột</strong> và hạn chế táo bón&nbsp;ở trẻ sơ sinh khi sử dụng</p>
                    <p><em><strong><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Hipp/sua-de-hipp-organic-so-1-400g-cho-be-0-6-thang-tuoi-5.jpeg" alt="Sữa dê Hipp Organic số 2- dinh dưỡng quan trọng cần thiết cho bé" width="500"></strong></em></p>
                    <p style="text-align: center;"><em>Sữa dê HiPP Organic số 2- dinh dưỡng quan trọng cần thiết cho bé</em></p>
                    <p>Tỷ lệ tối ưu giữa Omega 3 và Omega 6 (DHA và ARA) ở sữa dê HiPP Organic số 2&nbsp;giúp <strong>tăng cường sự phát triển của não, mô thần kinh và thị giác</strong> ở độ tuổi của trẻ, phổ axit béo lấy cảm hứng từ thiên nhiên</p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Hipp/sua-de-hipp-organic-2-400g-2.jpg" alt="Thành phần dinh dưỡng có trong sữa dê Hipp Organic số 2" width="500"></p>
                    <p style="text-align: center;"><em>Thành phần dinh dưỡng có trong sữa dê HiPP Organic số 2</em></p>
                    <p>Cơ cấu hàm lượng sắt tối ưu, bổ sung gấp đôi HiPP 1 giúp hỗ trợ hình thành máu và phát triển nhận thức.</p>
                    <p>Sữa dê HiPP Organic số 2 chứa các thành phần chất dinh dưỡng giá trị khác như vitamin A, C có trong sữa giúp hỗ trợ xây dựng nền tảng sức khoẻ cho trẻ.</p>
                    <p><strong>Sản phẩm sữa dê HiPP Organic số 2 không sử dụng:</strong></p>
                    <ul>
                        <li>
                            <p>Thực phẩm biến đổi gen</p>
                        </li>
                        <li>
                            <p>Thuốc kháng sinh để phòng bệnh</p>
                        </li>
                        <li>
                            <p>Thuốc trừ sâu tổng hợp hóa học hoặc thuốc trừ sâu</p>
                        </li>
                        <li>
                            <p>Phân bón hóa học</p>
                        </li>
                        <li>
                            <p>Hormone nhân tạo/hormon tăng trưởng</p>
                        </li>
                    </ul>
                    <p><strong>&gt;&gt;&gt; Sữa dê HiPP Organic số 2 được sản xuất tại Đức theo hình thái trung hòa với khí hậu, góp phần quan trọng trong việc bảo vệ môi trường và khí hậu</strong></p>
                    <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn.kidsplaza.vn/media/wysiwyg/product/suabotchobe/Hipp/sua-de-hipp-organic-so-1-400g-cho-be-0-6-thang-tuoi-7.jpg" alt="" width="500"></p>
                    <p style="text-align: center;"><em>Sữa dê HiPP&nbsp;Organic cho bé theo từng giai đoạn phát triển</em></p>
                    <p><em>Mẹ có thể tham khảo thêm:</em></p>
                    <p><em><strong>&gt;&gt;&gt;</strong>&nbsp;<a href="https://www.kidsplaza.vn/sua-de-hipp-organic-so-1-400g-cho-be-0-6-thang-tuoi.html"><span style="text-decoration: underline;"><strong>Sữa dê HiPP Organic số 1 400g cho bé 6-12 tháng tuổi</strong></span></a></em></p>
                    <p><em><strong>&gt;&gt;&gt;</strong> <a href="https://www.kidsplaza.vn/sua-de-hipp-organic-so-3-400g-cho-be-tren-12-thang-tuoi.html"><strong>Sữa dê HiPP Organic số 3 400g cho bé trên 12 tháng tuổi</strong></a></em></p>
                    <h3>Hướng dẫn cách pha sữa dê HiPP Organic số 2</h3>
                    <ul>
                        <li>
                            <p><strong>Bước 1</strong>: Đun sôi nước sạch và để nguội xuống khoảng 40 - 50° C. Đổ lượng nước cần thiết vào cốc hoặc bình có vạch đo dung tích</p>
                        </li>
                        <li>
                            <p><strong>Bước 2:</strong> Cho từ từ lượng sữa dê HiPP Organic số 2&nbsp;theo số muỗng gạt ngang cần thiết. Pha 1 thìa gạt với 30 ml nước</p>
                        </li>
                        <li>
                            <p><strong>Bước 3</strong>: Đậy nắp bình rồi lắc đều bình theo chiều thẳng đứng</p>
                        </li>
                        <li>
                            <p><strong>Bước 4</strong>: Kiểm tra nhiệt độ của sữa trước khi cho bé uống (khoảng 37° độ C)</p>
                        </li>
                    </ul>
                    <h3>Bảo quản sản phẩm sữa dê HiPP&nbsp;Organic số 2</h3>
                    <ul>
                        <li>
                            <p>Bảo quản sữa dê HiPP Organic số 2 ở nơi khô thoáng, tránh ánh sáng trực tiếp</p>
                        </li>
                        <li>
                            <p>Không để gần chất có mùi hoặc nơi có nhiệt độ không ổn định.</p>
                        </li>
                        <li>
                            <p>Khi đã mở nắp&nbsp;chỉ nên dùng trong vòng 03 tuần.</p>
                        </li>
                    </ul>
                    <h3><strong>Thông tin sản phẩm sữa dê HiPP Organic số 2</strong></h3>
                    <ul>
                        <li>
                            <p><strong>Tên sản phẩm: </strong>Sữa dê HiPP Organic số 2 (400g)</p>
                        </li>
                        <li>
                            <p><strong>Độ tuổi sử dụng</strong>: 6-12M</p>
                        </li>
                        <li>
                            <p><strong>Khối lượng</strong>: 400 gram</p>
                        </li>
                        <li>
                            <p><strong>Thương hiệu: </strong>sữa HiPP</p>
                        </li>
                        <li>
                            <p><strong>Xuất xứ</strong>: Đức</p>
                        </li>
                        <li>
                            <p><strong>HSD và NSX</strong>: In trên bao bì</p>
                        </li>
                    </ul>
                </div>
                <div class="product-see-more">
                    <button type="button" class="btn btn-see-more">Xem thêm</button>
                </div>
            </div>
            <div class="product-right">
                <div class="product-info">
                    <p class="product-info-title">Thông tin cơ bản</p>
                    <table class="product-info-content">
                        <tr>
                            <td>Thương hiệu</td>
                            <td>PureLac</td>
                        </tr>
                        <tr>
                            <td>Xuất xứ</td>
                            <td>Newzealand</td>
                        </tr>
                        <tr>
                            <td>Độ tuổi sử dụng</td>
                            <td>1 - 3 tuổi</td>
                        </tr>
                        <tr>
                            <td>Trọng lượng</td>
                            <td>800 gram</td>
                        </tr>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>SKU 211110254</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="product-comment">
        <div class="title">
            <p>Khách hàng chấm điểm, đánh giá, nhận xét</p>
        </div>
        <div class="rate-product">
            <div class="rp-first">
                <div class="rp-text">
                    <p>4</p>
                    <span>/</span>
                    <p>5</p>
                </div>
                <div class="rp-star">
                    <?= HopeImageHelper::createTagImage('/icon/star-color.png') ?>
                </div>
            </div>
            <i class="icon-line"></i>
            <div class="rp-last">
                <?= HopeHtmlHelper::createRateProduct(); ?>
            </div>
        </div>
        <form id="review-form" onsubmit="return false;">
            <div class="star-rank">
                <span class="txt-rank">Chọn đánh giá của bạn</span>
                <div class="group-rating">
                    <div class="rating-comment">
                        <input type="radio" id="star5" name="rating" class="rating" value="5" checked>
                        <label class="full" for="star5" title="Rất hài lòng"></label>
    
                        <input type="radio" id="star4" name="rating" class="rating" value="4">
                        <label class="full" for="star4" title="Hài lòng"></label>
    
                        <input type="radio" id="star3" name="rating" class="rating" value="3">
                        <label class="full" for="star3" title="Bình thường"></label>
    
                        <input type="radio" id="star2" name="rating" class="rating" value="2">
                        <label class="full" for="star2" title="Tạm được"></label>
    
                        <input type="radio" id="star1" name="rating" class="rating" value="1">
                        <label class="full" for="star1" title="Không thích"></label>
                    </div>
                    <span class="desc-star">Rất hài lòng</span>
                </div>
            </div>
            <div class="field comment-name hide">
                <input name="comment-name" id="comment-name" placeholder="Họ và tên *"></input>
            </div>
            <div class="field comment-phone hide">
                <input name="comment-phone" id="comment-phone" placeholder="Số điện thoại *"></input>
            </div>
            <div class="field comment-content">
                <textarea name="comment-content" id="comment-content" cols="5" rows="3" placeholder="Nhập đánh giá về sản phẩm *"></textarea>
            </div>
            <div class="action-toolbar hide">
                <div class="primary actions-primary">
                    <button type="submit" class="action-submit primary">
                        <span>Gửi đánh giá</span></button>
                </div>
            </div>
        </form>
        <div class="review-customer-rating">
            <div class="filter-star">
                <p>Bộ lọc</p>
                <div class="list-filter">
                    <ul>
                        <li class="active" value="all">Tất cả</li>
                        <li value="5">5 sao</li>
                        <li value="4">4 sao</li>
                        <li value="3">3 sao</li>
                        <li value="2">2 sao</li>
                        <li value="1">1 sao</li>
                    </ul>
                </div>
            </div>
            <div class="review-area">
                <div class="review-item">
                    <div class="item-head">
                        <div class="item-name">
                            <p>Nguyễn Thị Hà</p>
                        </div>
                        <div class="item-star">
                            <div class="rating">
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <p>Sản phẩm rất tiện lợi, dễ sử dụng. Dùng khá bền đặ biệt mua hàng tại Kidslaza mình hoàn toàn yên tâm. Quyét vnpay nên đc giảm 100k mẹ bỉm tiết kiệm đc 1 khoản</p>
                    </div>
                    <div class="item-bottom">
                        <div class="item-like">
                            <i class="fa fa-thumbs-o-up"></i>
                            <span class="count-like">0</span>
                            <span>Lượt thích</span>
                        </div>
                        <div class="item-date">
                            <p>27-04-2021</p>
                        </div>                        
                    </div>
                </div>
                <div class="review-item">
                    <div class="item-head">
                        <div class="item-name">
                            <p>Nguyễn Thị Hà</p>
                        </div>
                        <div class="item-star">
                            <div class="rating">
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <p>Sản phẩm rất tiện lợi, dễ sử dụng. Dùng khá bền đặ biệt mua hàng tại Kidslaza mình hoàn toàn yên tâm. Quyét vnpay nên đc giảm 100k mẹ bỉm tiết kiệm đc 1 khoản</p>
                    </div>
                    <div class="item-bottom">
                        <div class="item-like">
                            <i class="fa fa-thumbs-o-up"></i>
                            <span class="count-like">0</span>
                            <span>Lượt thích</span>
                        </div>
                        <div class="item-date">
                            <p>27-04-2021</p>
                        </div>                        
                    </div>
                </div>
                <div class="review-item">
                    <div class="item-head">
                        <div class="item-name">
                            <p>Nguyễn Thị Hà</p>
                        </div>
                        <div class="item-star">
                            <div class="rating">
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <p>Sản phẩm rất tiện lợi, dễ sử dụng. Dùng khá bền đặ biệt mua hàng tại Kidslaza mình hoàn toàn yên tâm. Quyét vnpay nên đc giảm 100k mẹ bỉm tiết kiệm đc 1 khoản</p>
                    </div>
                    <div class="item-bottom">
                        <div class="item-like">
                            <i class="fa fa-thumbs-o-up"></i>
                            <span class="count-like">0</span>
                            <span>Lượt thích</span>
                        </div>
                        <div class="item-date">
                            <p>27-04-2021</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-relate">
        <div class="relate-title">
            <h3>Sản phẩm liên quan</h3>
        </div>
        <div class="list-product">
            <?= HopeHtmlHelper::createProductTest(); ?>
        </div>
    </div>
</div>