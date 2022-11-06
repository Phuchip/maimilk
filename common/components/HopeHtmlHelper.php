<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components;

use DateTime;
use yii\db\Exception;

/**
 *
 * @author PhucHip
 */
class HopeHtmlHelper
{
    public function createRateStar($score = null, $totalRate = null)
    {
        $html = '<div class="rating">';
        for ($i = 1; $i <= 5; $i++) {
            $active = '';
            if ($i <= $score) {
                $active = ' active';
            }
            $html .= '<i class="icon-star' . $active . '"></i>';
        }
        $html .= '</div>';
        if ($totalRate) {
            $html .= '<div class="total-rate">(' . $totalRate . ')</div>';
        }
        return $html;
    }

    public function createRateProduct()
    {
        $arrStar = [5,4,3,2,1];
        $html = '<ul>';
        foreach($arrStar as $star){
            $html .= '<li class="active">
                <span class="number">'.$star.'</span>
                <i class="icon-star-grey"></i>
                <div class="bg-line-color">
                    <p class="time-line-star" style="width:'.$star.'0%"></p>
                </div>
                <p class="rate-txt">'.$star.' Đánh giá</p>
            </li>';
        }
        $html .= '</ul>';
        return $html;
    }

    public function createProductTest()
    {
        $html = '';
        $html = '<div class="product-item">
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
                <div class="product-other">
                    <div class="product-label product-new">
                        <span>Mới</span>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-head">
                    <a href="product" class="product-link">
                        <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-2.jpg" alias="Nước rửa bình sữa Organic Lamoon chai 500ml" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-name">
                        <h3 class="name">
                            <a href="product" title="Nước rửa bình sữa Organic Lamoon chai 500ml">Nước rửa bình sữa Organic Lamoon chai 500ml</a>
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
                <div class="product-other">
                    <div class="product-label product-hot">
                        <span>Hot</span>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-head">
                    <a href="product" class="product-link">
                        <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-3.jpg" alias="Đai nịt bụng hương quế thảo dược KidsPlaza HQ21" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-name">
                        <h3 class="name">
                            <a href="product" title="Đai nịt bụng hương quế thảo dược KidsPlaza HQ21">Đai nịt bụng hương quế thảo dược KidsPlaza HQ21</a>
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
                <div class="product-other">
                    <div class="product-label product-sale">
                        <span>-20%</span>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-head">
                    <a href="product" class="product-link">
                        <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-4.jpg" alias="Sữa bột Glico số 0 800g nội địa Nhật cho bé 0M-12M" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-name">
                        <h3 class="name">
                            <a href="product" title="Sữa bột Glico số 0 800g nội địa Nhật cho bé 0M-12M">Sữa bột Glico số 0 800g nội địa Nhật cho bé 0M-12M</a>
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
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                            </div>
                        </div>
                        <div class="product-cart">
                            <i class="icon-cart"></i>
                        </div>  
                    </div>
                </div>
                <div class="product-other">
                    <div class="product-label product-new">
                        <span>Mới</span>
                    </div>
                    <div class="product-label product-sale">
                        <span>-20%</span>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-head">
                    <a href="product" class="product-link">
                        <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-5.jpg" alias="Sữa Blackmores số 3 Toddler 900g (>12 tháng)" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-name">
                        <h3 class="name">
                            <a href="product" title="Sữa Blackmores số 3 Toddler 900g (>12 tháng)">Sữa Blackmores số 3 Toddler 900g (>12 tháng)</a>
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
                <div class="product-other">
                    <div class="product-label product-sale">
                        <span>-20%</span>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-head">
                    <a href="product" class="product-link">
                        <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-6.jpg" alias="Sữa bột Hipp số 4 Organic Combiotic HMP 800g cho bé trên 3 tuổi" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-name">
                        <h3 class="name">
                            <a href="product" title="Sữa bột Hipp số 4 Organic Combiotic HMP 800g cho bé trên 3 tuổi">Sữa bột Hipp số 4 Organic Combiotic HMP 800g cho bé trên 3 tuổi</a>
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
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                        <div class="product-cart">
                            <i class="icon-cart"></i>
                        </div>  
                    </div>
                </div>
                <div class="product-other">
                    <div class="product-label product-sale">
                        <span>-20%</span>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-head">
                    <a href="product" class="product-link">
                        <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-7.jpg" alias="Sữa Nan Supreme Thụy Sỹ số 3 (800gr) cho bé 2-6 tuổi" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-name">
                        <h3 class="name">
                            <a href="product" title="Sữa Nan Supreme Thụy Sỹ số 3 (800gr) cho bé 2-6 tuổi">Sữa Nan Supreme Thụy Sỹ số 3 (800gr) cho bé 2-6 tuổi</a>
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
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                        <div class="product-cart">
                            <i class="icon-cart"></i>
                        </div>  
                    </div>
                </div>
                <div class="product-other">
                    <div class="product-label product-sale">
                        <span>-20%</span>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-head">
                    <a href="product" class="product-link">
                        <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-8.jpg" alias="Bỉm - tã quần Merries size M 58 miếng (cho bé 6-11kg)" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-name">
                        <h3 class="name">
                            <a href="product" title="Bỉm - tã quần Merries size M 58 miếng (cho bé 6-11kg)">Bỉm - tã quần Merries size M 58 miếng (cho bé 6-11kg)</a>
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
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                        <div class="product-cart">
                            <i class="icon-cart"></i>
                        </div>  
                    </div>
                </div>
                <div class="product-other">
                    <div class="product-label product-sale">
                        <span>-20%</span>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-head">
                    <a href="product" class="product-link">
                        <img class="lazyload" src="/images/loading.gif" data-src="/images/product/test/product-9.jpg" alias="Sữa bột Nestle Nan Optipro HMO số 4 900gr cho bé 2-6 tuổi" onerror="this.onerror=null;this.src=&quot;/images/error.png&quot;;">
                    </a>
                </div>
                <div class="product-content">
                    <div class="product-name">
                        <h3 class="name">
                            <a href="product" title="Sữa bột Nestle Nan Optipro HMO số 4 900gr cho bé 2-6 tuổi">Sữa bột Nestle Nan Optipro HMO số 4 900gr cho bé 2-6 tuổi</a>
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
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star active"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </div>
                        <div class="product-cart">
                            <i class="icon-cart"></i>
                        </div>  
                    </div>
                </div>
                <div class="product-other">
                    <div class="product-label product-sale">
                        <span>-20%</span>
                    </div>
                </div>
            </div>
        ';
        return $html;
    }
}
