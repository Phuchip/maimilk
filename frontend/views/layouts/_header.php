<?php

use common\components\HopeImageHelper;

?>
<header>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <div class="navbar-logo">
                <a class="navbar-brand" href="/"><?= HopeImageHelper::createTagImage('/images/logo.png', 'logo') ?></a>
            </div>
            <div class="search-area">
                <form class="d-flex form-search" method="GET" onsubmit="return false">
                    <input id="search-box" name="keyword" required class="form-control search-box" placeholder="Nhập tên sản phẩm, tên hãng" aria-label="Search" autocomplete="off">
                    <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <!--dropdown-->
                <div id="suggestion-box" class="dropdown-content suggestion-box">
                    <div class="result-search">
                        <div class="bg-gray">
                            <p class="suggestion-title">Có phải bạn muốn tìm</p>
                        </div>
                        <div class="suggestion-body">
                            <ul class="list-group output-tag">
                                <li class="list-group-item li-output-tag"><a href="/may-in-hoa-don-cam-tay-ID-12.html">máy in hóa đơn cầm tay</a></li>
                                <li class="list-group-item li-output-tag"><a href="/may-in-hoa-don-mini-ID-13.html">máy in hóa đơn mini</a></li>
                                <li class="list-group-item li-output-tag"><a href="/may-in-hoa-don-bluetooth-ID-14.html">máy in hóa đơn bluetooth</a></li>
                            </ul>
                        </div>
                        <div class="bg-gray">
                            <p class="suggestion-title">Sản phẩm gợi ý</p>
                        </div>
                        <div class="list-item-suggest">
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-other">
                <div class="info-account">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="text">
                        <p>Tài khoản</p>
                        <div class="action">
                            <a href="/login">Đăng nhập</a>
                            <i>|</i>
                            <a href="/signup">Đăng ký</a>
                        </div>
                    </div>
                </div>
                <div class="cart">
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="mini-cart">
                        <div class="mini-cart-content">
                            <div class="minicart-content">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu-mobile">
        <div class="content home-page active">
            <a href="">
                <div class="image">
                        <?= HopeImageHelper::createTagImage('/icon/favicon.ico'); ?>
                </div>
                <span>Trang chủ</span>
            </a>
        </div>
        <div class="content category">
            <div class="icon-bottom">
                <i class="fa fa-bars"></i>
            </div>
            <span>Danh mục</span>
        </div>
        <div class="content promotion">
            <a href="">
                <div class="image">
                    <?= HopeImageHelper::createTagImage('/icon/sale.png'); ?>
                </div>
                <span>Khuyến mãi</span>
            </a>
        </div>
        <div class="content cart-bottom">
            <a href="">
                <div class="icon-bottom">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <span>Giỏ hàng</span>
            </a>
        </div>
        <div class="content account">
            <a href="">
                <div class="icon-bottom">
                    <i class="fa fa-user"></i>
                </div>
                <span>Tài khoản</span>
            </a>
        </div>
    </div>
    <div class="section-menu-mobile">
        <nav class="navigation mega-menu-mobile" data-action="navigation">
            <div class="mega-menu">
                <ul class="mega-menu-lv1">
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/me-bau-va-sau-sinh.png') ?>
                            <span>Mẹ bầu và sau sinh</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/sua-va-thuc-pham.png') ?>
                            <span>Sữa và thực phẩm</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/ta-bim.png') ?>
                            <span>Bỉm tã và Vệ sinh</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/do-so-sinh.png') ?>
                            <span>Đồ sơ sinh</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/do-dung-an-uong.png') ?>
                            <span>Đồ dùng ăn uống</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/thoi-trang.png') ?>
                            <span>Thời trang và phụ kiện</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/do-choi.png') ?>
                            <span>Đồ chơi và học tập</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/xe-day.png') ?>
                            <span>Xe - đai - địu</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/noi-giuong-cui.png') ?>
                            <span>Nôi - giường - cũi</span>
                        </a>
                    </li>
                    <li class="mega-menu-lv1-item">
                        <a href="">
                            <?= HopeImageHelper::createTagImage('/images/category/giat-xa-tam-goi.png') ?>
                            <span>Giặt xả và tắm gội</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>