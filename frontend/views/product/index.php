<?php

use common\components\HopeImageHelper;
use Yii;

$this->title = 'Sữa Non ILDONG số 1 Hàn Quốc 90 gói/90g (trẻ 0-12 tháng)';
$this->keywords = 'Sữa Non ILDONG số 1 Hàn Quốc 90 gói/90g (trẻ 0-12 tháng)';
$this->description = 'Sữa Non ILDONG số 1 Hàn Quốc 90 gói/90g (trẻ 0-12 tháng)';
$this->image = '/images/logo.png';
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
            <div class="product-image col-sm-12 col-md-4">
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
            <div class="product-info col-sm-12 col-md-5">
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
            <div class="service col-sm-12 col-md-3">
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
        
    </div>
</div>