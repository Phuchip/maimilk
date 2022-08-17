<?php

use common\components\HopeImageHelper;
?>
<footer class="page-footer">
    <div class="container footer content">
        <div class="footer-columns">
            <div class="footer-column">
                <div class="footer-title"><strong>Về BiBo Mart</strong><i class="fa fa-caret-down"></i></div>
                <ul class="footer-content">
                    <li class="footer-item"><a href="#">Giới thiệu Bibo Mart</a></li>
                    <li class="footer-item"><a href="#">Danh sách cửa hàng</a></li>
                    <li class="footer-item"><a href="#">Cẩm nang cho mẹ</a></li>
                    <li class="footer-item"><a href="#">Liên hệ</a></li>
                    <li class="footer-item"><a href="#">Bảo mật thông tin cá nhân</a></li>
                    <li class="footer-item"><a href="#">Sử dụng thông tin</a></li>
                    <li class="footer-item"><a href="#" rel="nofollow">Bản tin tuyển dụng</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <div class="footer-title"><strong>Hỗ trợ khách hàng</strong><i class="fa fa-caret-down"></i></div>
                <ul class="footer-content">
                    <li class="footer-item"><a href="#">Hotline miễn phí: <b>18006886</b></a></li>
                    <li class="footer-item"><a href="#">Chính sách tích điểm</a></li>
                    <li class="footer-item"><a href="#">CS đổi hàng &amp; hoàn tiền</a></li>
                    <li class="footer-item"><a href="#">Chính sách bảo hành</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <div class="footer-title"><strong>Hệ thống tiện ích</strong><i class="fa fa-caret-down"></i></div>
                <ul class="footer-content">
                    <li class="footer-item"><a href="#">Tra cứu hóa đơn điện tử</a></li>
                    <li class="footer-item"><a href="#">Kiểm tra đơn hàng</a></li>
                    <li class="footer-item"><a href="#">Hướng dẫn đặt hàng</a></li>
                    <li class="footer-item"><a href="#">Hướng dẫn tải App</a></li>
                    <li class="footer-item"><a href="#">Hướng dẫn đổi quà từ Bixu</a></li>
                    <li class="footer-item"><a href="#">Quà tặng đổi từ Bixu</a></li>
                    <li class="footer-item"><a href="#">Phương thức thanh toán</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <div class="footer-title"><strong>Kênh thông tin</strong><i class="fa fa-caret-down"></i></div>
                <ul class="footer-content">
                    <li class="footer-item social-icon">
                        <a class="social-link fb-link" href="" rel="nofollow">
                            <?= HopeImageHelper::createTagImage('/icon/facebook.png') ?>
                        </a> 
                        <a class="social-link youto-link" href="" rel="nofollow">
                        <?= HopeImageHelper::createTagImage('/icon/youtube.png') ?>
                        </a> 
                        <a class="social-link zalo-link" href="" rel="nofollow">
                            <?= HopeImageHelper::createTagImage('/icon/zalo.png') ?>
                        </a> 
                        <a class="social-link titok-link" href="" rel="nofollow">
                            <?= HopeImageHelper::createTagImage('/icon/tiktok.png') ?>
                        </a> 
                        <a class="social-link pint-link" href="" rel="nofollow">
                            <?= HopeImageHelper::createTagImage('/icon/instagram.png') ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-column">
                <div class="footer-title">
                    <strong>Đăng ký nhận tin khuyến mãi</strong><i class="fa fa-caret-down"></i>
                </div>
                <div class="footer-content">
                    <form class="form-new-letter" onsubmit="return false">
                        <input type="text" class="form-control new-letter" placeholder="Email hoặc số điện thoại">
                        <button type="submit" class="btn btn-submit">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>