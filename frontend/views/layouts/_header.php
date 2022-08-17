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
                </div>
            </div>
        </div>
    </nav>
    <div class="menu-mobile">
        <div class="content home-page active">
            <div class="image">
                    <?= HopeImageHelper::createTagImage('/icon/favicon.ico'); ?>
            </div>
            <span>Trang chủ</span>
        </div>
        <div class="content category">
            <div class="icon-bottom">
                <i class="fa fa-bars"></i>
            </div>
            <span>Danh mục</span>
        </div>
        <div class="content promotion">
            <div class="image">
                <?= HopeImageHelper::createTagImage('/icon/sale.png'); ?>
            </div>
            <span>Khuyến mãi</span>
        </div>
        <div class="content cart-bottom">
            <div class="icon-bottom">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <span>Giỏ hàng</span>
        </div>
        <div class="content account">
            <div class="icon-bottom">
                <i class="fa fa-user"></i>
            </div>
            <span>Tài khoản</span>
        </div>
    </div>
</header>