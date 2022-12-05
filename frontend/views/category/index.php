<?php

use Yii;
use common\components\HopeHtmlHelper;
use common\components\HopeImageHelper;

$this->title = 'Sữa Cho Trẻ Sơ Sinh - Sữa Cho Bé và Đồ Dùng Bé Uống Bibo Mart';
$this->keywords = 'sữa cho bé, sua cho be, sữa bột, bình sữa, núm ty, máy tiệt trùng, binh sua, num ty, may tiet trung, nước rửa bình, hộp chia sữa, hop chia sua, sữa cho trẻ sơ sinh, sữa công thức, sữa tốt cho trẻ sơ sinh, sữa pediasure, sữa tốt cho bé, sữa tăng cân';
$this->description = 'Sữa cho trẻ sơ sinh, sữa bột cho bé và đồ dùng  bé uống bình sữa, núm ty, máy hút sữa hỗ trợ cho bé phát triển tốt nhất theo giai đoạn. Chính hãng Giá tốt, nhiều ưu đãi tại BiboMart - Xem và Mua ngay';
$this->image = '/images/logo.png';
$this->css = '/css/category.css';
$arrImage = [4, 5, 6, 7];
$breadcrumb = [
    [
        'url' => '/category',
        'title' => 'Sữa và thực phẩm'
    ],
];
?>
<?= $this->render('/layouts/_breadcrumb', ['breadcrumb' => $breadcrumb]); ?>
<div class="category-index">
    <div class="category">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="sidebar">
                    <div class="category-list category-item">
                        <div class="sidebar-title">
                            <p>Nhóm sản phẩm</p>
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
                        <div class="sidebar-title">
                            <p>Khoảng giá</p>
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
                        <div class="sidebar-title">
                            <p>Thương hiệu</p>
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
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">

            </div>
        </div>
    </div>
</div>
