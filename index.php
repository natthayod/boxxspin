<?php
include 'config.php';

$site["index"] = array("file"=>"themes/index.php");
$site["card-online"] = array("file"=>"themes/card-online.php");
$site["luckysrandom"] = array("file"=>"themes/luckysrandom.php");
$site["termgame"] = array("file"=>"themes/termgame.php");
$site["mobiletopup"] = array("file"=>"themes/mobiletopup.php");
$site["product"] = array("file"=>"themes/product.php");
$site["categorie"] = array("file"=>"themes/categorie.php");
$site["topup"] = array("file"=>"themes/topup.php");
$site["truemoney"] = array("file"=>"themes/truemoney.php");
$site["truewallet"] = array("file"=>"themes/truewallet.php");
$site["banktransfer"] = array("file"=>"themes/banktransfer.php");
$site["view"] = array("file"=>"themes/view.php");
$site["accountmanage"] = array("file"=>"themes/accountmanage.php");
$site["createaccount"] = array("file"=>"themes/createaccount.php");


$page = $_GET["p"];
if (isset($page)){

	$file = $site[$page]["file"];

}else{

	$file = $site["index"]["file"];
}

?>



<?php /*if(isset($page)) {
            include $file;
            }
            
            else {
            include $file;
            }
            */
            ?> 
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="preconnect" href="https://staticxx.facebook.com">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>LuckyStore : ซื้อ - ขายไอดีเกมออนไลน์ บัตรเติมเกม เติมเงินเกมออนไลน์ ไอเทมโค้ดเกม เติมเงินมือถือ ตลาดซื้อขายออนไลน์ รวมไปถึง ระบบสุ่มรางวัลอันดับมากมาย 1 ในประเทศไทย</title>
      <meta name="keywords" content="ขายไอดีเกม, luckystore, lucky-store, เว็บสุ่มบัตรการีน่า, สุ่มบัตรทรู, สุ่มบัตรทรูมันนี่,  สุ่มรางวัล, ลัคกี้สโตร์, lucky-Store, รับซื้อไอดีเกม, ขายไอดีเกมออนไลน์, ขายบัตรเติมเงินเกม, ไอดีเกมราคาถูก, รับซื้อไอดีเกม ขายไอดีเกม PUBG, รับซื้อไอดีเกม SPEED Diffters, รับซื้อไอดีเกม Free fire, รับซื้อไอดีเกม Point Blank, รับซื้อไอดีเกม FIFA Online, ขายไอดีเกม PUBG, ขายไอดีเกม SPEED Diffters, ขายไอดีเกม Free fire, ขายไอดีเกม Point Blank, ขายไอดีเกม FIFA Online" />
      <meta name="robots" content="all">
      <meta content='index, follow, all' name='robots' />
      <meta name="googlebots" content="INDEX,FOLLOW">
      <meta property="fb:app_id" content="" />
      <meta property="fb:pages" content="">
      <meta property="og:locale" content="th_TH" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="<?php echo $url;?>" />
      <meta property="og:type" content="gameonlineshopcenter" />
      <meta property="og:title" content="Luckystore | ซื้อ-ขายไอดีเกมออนไลน์ บัตรเติมเกม ไอเทมโค้ดเกม เติมเงินเกมออนไลน์ เติมเงินมือถือ ตลาดซื้อขายออนไลน์ รวมไปถึง ระบบสุ่มรางวัลอันดับมากมาย 1 ในประเทศไทย" />
      <meta property="og:description" content="Luckystore | ซื้อ-ขายไอดีเกมออนไลน์ บัตรเติมเกม เติมเงินเกมออนไลน์ ไอเทมโค้ดเกม เติมเงินมือถือ ตลาดซื้อขายออนไลน์ รวมไปถึง ระบบสุ่มรางวัลอันดับมากมาย 1 ในประเทศไทย" />
      <meta property="og:image" content="<?php echo $url;?>/assets/images/YRXdUOn.png" />
      <meta property="og:image:width" content="1200" />
      <meta property="og:image:height" content="628" />
      <meta name="description" content="LuckyStore เว็บไซต์ซื้อ - ขายไอดีเกมออนไลน์ บัตรเติมเกม ไอเทมโค้ตเกม เติมเงินมือถือ ตลาดซื้อขายออนไลน์ รวมไปถึง ระบบสุ่มรางวัลอันดับมากมาย 1 ในประเทศไทย" />
      <link rel="canonical" href="<?php echo $url;?>" />
      <link rel="shortcut icon" href="<?php echo $url;?>/favicon.ico?v=1">
      <link rel="icon" href="<?php echo $url;?>/favicon.ico?v=1" type="image/x-icon">
      <link rel="stylesheet" href="<?php echo $url;?>/assets/css/bootstrap.min.css?v=16">
      <link rel="stylesheet" href="<?php echo $url;?>/assets/css/plugins.css?v=1">
      <link rel="stylesheet" href="<?php echo $url;?>/assets/css/helper.css?v=3">
      <link rel="stylesheet" href="<?php echo $url;?>/assets/css/style.css?v=156">
      <link rel="stylesheet" href="<?php echo $url;?>/assets/css/fontawesome-all.min.css?v=1">
      <link rel="stylesheet" href="<?php echo $url;?>/assets/css/iconfont.min.css?v=1">
      <script type="text/javascript">
         WebFontConfig = {
             google: { families: [ 'Kanit:300,400,600,700,800','Poppins:300,400,500,600,700','Segoe Script:300,400,500,600,700' ] }
         };
         (function(d) {
             var wf = d.createElement('script'), s = d.scripts[0];
             wf.src = '/assets/js/webfont.js';
             wf.async = true;
             s.parentNode.insertBefore(wf, s);
         })(document);
      </script>
      <script src="<?php echo $url;?>/assets/js/modernizr-2.8.3.min.js?v=1"></script>
      <script src="<?php echo $url;?>/assets/js/particles.min.js"></script>
      <script src="<?php echo $url;?>/assets/js/jquery.min.js"></script>
      <script src='<?php echo $url;?>/assets/js/sweetalert.min.js'></script>
   </head>
   <style>
   .header-top,.maq-out,.footer-bottom {background-image: radial-gradient(circle farthest-side at center bottom,#e87575,#ff0000 125%);}
   .faq-accordion .card-style-two.actives .card-header {
    background-color: #ff6b6b;
    background-image: radial-gradient(circle farthest-side at center bottom,#ff6b6b,#ff0202 125%);
    border-color: #ff6b6b;
   }
   </style>
   <body>
      <div id="main-wrapper">
         <header class="header header-sticky d-none d-lg-block">
            <div class="header-top pt-0">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="pt-10 pb-10">
                           <div class="row align-items-center">
                              <div class="col-lg-6">
                                 <div class="header-top-text">
                                    <a href="<?php echo $line;?>" target="_blank">ติดต่อเรา <i class="far fa-comment-dots"></i></a>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="header-top-member justify-content-end">
                                    <div class="header-right">
                                       <div class="text-center">
                                          <a class="" href="/accountmanage" alt="เข้าสู่ระบบ">
                                            <i class="fas fa-lock fa-fw"></i> เข้าสู่ระบบ
                                          </a> 
                                          &nbsp; <span class="white">|</span> &nbsp; 
                                          <a class="btn-member" href="/createaccount" alt="สมัครสมาชิก"><i class="fas fa-user-plus fa-fw">
                                            </i> สมัครสมาชิก
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-bottom">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-2">
                        <div class="header-logo logo">
                           <a href="<?php echo $url;?>"><img src="<?php echo $url;?>/assets/images/logo.png?v=3" alt="ลัคกี้สโตร์" class="logo"></a>
                        </div>
                     </div>
                     <div class="col-lg-9 d-flex justify-content-end">
                        <nav class="main-menu main-menu-two">
                           <ul>
                              <li class="">
                                 <a href="/card-online" class="sf-with-ul" alt="บัตรเติมเกม">บัตรเติมเกม <i class="fas fa-angle-down"></i></a>
                                 <ul class="sub-menu">
                                    <li><a href="/card-online/garena">GARENA CARD</a></li>
                                    <li><a href="/card-online/razer">RAZER PIN</a></li>
                                    <li><a href="/card-online/excash">EX CASH</a></li>
                                    <li><a href="/card-online/truemoney">TRUE MONEY</a></li>
                                    <li><a href="/card-online/ais">AIS</a></li>
                                    <li><a href="/card-online/dtac">DTAC</a></li>
                                    <li><a href="/card-online/acash">@CASH</a></li>
                                    <li><a href="/card-online/line-prepaid">LINE PREPAID</a></li>
                                    <li><a href="/card-online/steam-card">STEAM CARD</a></li>
                                    <li><a href="/card-online/cubi-card">CUBI CARD</a></li>
                                    <li><a href="/card-online/Ini3-cookie-card">Ini3 Cookie Card</a></li>
                                    <li><a href="/card-online/battlenet">Battle net</a></li>
                                    <li><a href="/card-online">ดูทั้งหมด</a></li>
                                 </ul>
                              </li>
                              <li class=""><a href="/luckysrandom" alt="สุ่มของรางวัล">สุ่มของรางวัล</a></li>
                              <li class=""><a href="/termgame" alt="เติมเกมออนไลน์">เติมเกมออนไลน์</a></li>
                              <li class=""><a href="/mobiletopup" alt="เติมเงินมือถือ">เติมเงินมือถือ</a></li>
                              <li class="">
                                 <a href="/product" alt="ขายไอดีเกม">ไอดีเกมออนไลน์ <i class="fas fa-angle-down"></i></a>
                                 <ul class="sub-menu">
                                    <li><a href="/categorie/rov">REALM OF VALOR</a></li>
                                    <li><a href="/categorie/freefire">FREE FIRE</a></li>
                                    <li><a href="/categorie/speeddrifters">SPEED DRIFTERS</a></li>
                                    <li><a href="/categorie/pb">POINT BLANK</a></li>
                                    <li><a href="/categorie/steam">STEAM</a></li>
                                    <li><a href="/categorie/fifa4">FIFA ONLINE 4</a></li>
                                    <li><a href="/product/all">ดูทั้งหมด</a></li>
                                 </ul>
                              </li>
                              <li class="">
                                 <a href="/topup" class="sf-with-ul">เติมเงิน <i class="fas fa-angle-down"></i></a>
                                 <ul class="sub-menu">
                                    <li><a href="/truemoney">บัตรเติมเงินทรูมันนี่</a></li>
                                    <li><a href="/truewallet">แจ้งโอนทรูวอลเล็ท</a></li>
                                    <li><a href="/banktransfer">แจ้งโอนธนาคาร</a></li>
                                    <li><a href="#" onclick="swal('Coming Soon', 'ระบบจะเปิดใช้งานเร็วๆนี้ . .', 'info');">แจ้งโอนแอร์เพย์</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="col-lg-1 d-flex justify-content-end">
                        <div class="header-search">
                           <button class="header-search-toggle"><i class="ion-ios-search-strong"></i></button>
                           <div class="header-search-form">
                              <form action="/search" method="get">
                                 <input type="text" name="name" placeholder="ค้นหาสินค้า">
                                 <button type="submit" class="submit"><i class="ion-ios-search-strong"></i></button>
                              </form>
                           </div>
                        </div>
                        <div class="header-cart">
                           <a href="#"><i class="ion-bag"></i><span class="badge-cart badge-purple rounded-circle">0</span></a>
                           <div class="header-cart-dropdown">
                              <ul class="cart-items">
                              <h3 class="gray text-center mt-2">ไม่มีสินค้าในตะกร้า</h3>
                              <div class="cart-btn">
                                 <a href="/product">เลือกซื้อสินค้า</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <header class="header-mobile d-block d-lg-none" style="padding-bottom:134px;">
            <div class="header-bottom menu-right" style="position:fixed;width:100%;margin-top:42px;z-index:100;">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="header-mobile-navigation d-block d-lg-none">
                           <div class="row align-items-center">
                              <div class="col-6 col-md-6">
                                 <div class="header-logo logo">
                                    <a href="<?php echo $url;?>">
                                    <img src="<?php echo $url;?>/assets/images/logo.png?v=3" alt="ลัคกี้สโตร์" class="img-fluid logo">
                                    </a>
                                 </div>
                              </div>
                              <div class="col-6 col-md-6">
                                 <div class="mobile-navigation text-right">
                                    <div class="header-icon-wrapper">
                                       <ul class="icon-list justify-content-end">
                                          <li>
                                             <div class="header-cart-icon">
                                                <a href="/cart"><i class="ion-bag"></i><span class="badge-cart badge-purple rounded-circle">0</span></a>
                                             </div>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><span style="font-size:14px;">Menu <span class="red required">*</span></span> <i class="fa fa-bars"></i></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12 d-flex d-lg-none">
                        <div class="mobile-menu"></div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
            <i class="ion-android-close"></i>
            </a>
            <div class="offcanvas-wrapper">
               <div class="offcanvas-inner-content">
                  <div class="offcanvas-mobile-search-area">
                     <form action="/search" method="get">
                        <input type="search" name="name" placeholder="ค้นหาสินค้า ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <div class="container">
                     <div class="row">
                        <div class="col">
                           <a class="btn btn-primary btn-sm btn-block" href="/createaccount">สมัครสมาชิก</a>
                        </div>
                        <div class="col">
                           <a class="btn btn-primary btn-sm btn-block" href="/accountmanage">เข้าสู่ระบบ</a>
                        </div>
                     </div>
                  </div>
                  <nav class="offcanvas-navigation">
                     <ul>
                        <li class="menu-item-has-children"><a href="<?php echo $url;?>">หน้าหลัก</a></li>
                        <li class="menu-item-has-children">
                           <a href="/card-online">บัตรเติมเกม</a>
                           <ul class="submenu2">
                              <li class="menu-item-has-children"><a href="/card-online/garena">GARENA CARD</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/razer">RAZER PIN</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/excash">EX CASH</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/truemoney">TRUE MONEY</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/ais">AIS</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/dtac">DTAC</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/acash">@CASH</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/line-prepaid">LINE PREPAID</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/steam-card">STEAM CARD</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/cubi-card">CUBI CARD</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/Ini3-cookie-card">Ini3 Cookie Card</a></li>
                              <li class="menu-item-has-children"><a href="/card-online/battlenet">Battle net</a></li>
                           </ul>
                        </li>
                        <li class="menu-item-has-children">
                           <a href="/product">ไอดีเกมออนไลน์</a>
                           <ul class="submenu2">
                              <li class="menu-item-has-children"><a href="/categorie/rov">REALM OF VALOR</a></li>
                              <li class="menu-item-has-children"><a href="/categorie/freefire">FREE FIRE</a></li>
                              <li class="menu-item-has-children"><a href="/categorie/speeddrifters">SPEED DRIFTERS</a></li>
                              <li class="menu-item-has-children"><a href="/categorie/pb">POINT BLANK</a></li>
                              <li class="menu-item-has-children"><a href="/categorie/steam">STEAM</a></li>
                              <li class="menu-item-has-children"><a href="/categorie/fifa4">FIFA ONLINE 4</a></li>
                              <li class="menu-item-has-children"><a href="/product/all">ดูทั้งหมด</a></li>
                           </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="/mobiletopup" alt="เติมเงินมือถือ">เติมเงินมือถือ</a></li>
                        <li class="menu-item-has-children"><a href="/luckysrandom" alt="สุ่มของรางวัล">สุ่มของรางวัล</a></li>
                        <li class="menu-item-has-children">
                           <a href="/topup">เติมเงิน</a>
                           <ul class="submenu2">
                              <li class="menu-item-has-children"><a href="/turemoney">บัตรเติมเงินทรูมันนี่</a></li>
                              <li class="menu-item-has-children"><a href="/truewellet">แจ้งโอนทรูวอลเล็ท</a></li>
                              <li class="menu-item-has-children"><a href="/banktransfer">แจ้งโอนเงินธนาคาร</a></li>
                              <li class="menu-item-has-children"><a href="#" onclick="swal('Coming Soon', 'ระบบจะเปิดใช้งานเร็วๆนี้ . .', 'info');">แจ้งโอนแอร์เพย์</a></li>
                           </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="/reload" alt="วิธีเติมเกมคุ้มๆ">วิธีเติมเกมคุ้มๆ</a></li>
                        <li class="menu-item-has-children"><a href="/contact">ติดต่อเรา</a></li>
                     </ul>
                  </nav>
                  <div class="offcanvas-widget-area">
                     <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                           <ul class="header-contact-info-list">
                              <li><span class="white">Phone :</span> <a href="#">000-000-0000</a></li>
                              <li><span class="white">Facebbok Page :</i> <a href="https://www.facebook.com/" target="_blank">แฟนเพจ</a></li>
                              <li><span class="white">Line :</i> <a href="<?php echo $line;?>" target="_blank">@</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php if(isset($page)) { include $file; } else { include $file; }?> 
         <style>
            .slide img {
            border-radius:4px;
            }
            .slide {
            margin: 0px 25px;
            }
         </style>
         <div class="section text-center pt-30 pb-40" style="background-position:center;background-size: cover;background-image: url(/assets/images/agency-bg.jpg?v=2);">
            <div class="container">
               <h1 class="mb-0" style="color:#fff;"><strong>ระบบเติมเงินอัตโนมัติ</strong></h1>
               <p class="mb-3" style="color:#fff;">สะดวก รวดเร็ว ปลอดภัย ตลอด 24 ช.ม.</p>
               <div class="customer-logos slider">
                  <div class="slide"><img src="/assets/images/bank/brand-01.png"></div>
                  <div class="slide"><img src="/assets/images/bank/brand-02.png"></div>
                  <div class="slide"><img src="/assets/images/bank/brand-09.png?v=1"></div>
                  <div class="slide"><img src="/assets/images/bank/brand-03.png"></div>
                  <div class="slide"><img src="/assets/images/bank/brand-04.png"></div>
                  <div class="slide"><img src="/assets/images/bank/brand-05.png"></div>
                  <div class="slide"><img src="/assets/images/bank/brand-06.png"></div>
                  <div class="slide"><img src="/assets/images/bank/brand-07.png"></div>
                  <div class="slide"><img src="/assets/images/bank/brand-08.png"></div>
               </div>
            </div>
         </div>
         <script>
            $(document).ready(function () {
              $('.customer-logos').slick({
            	slidesToShow: 5,
            	slidesToScroll: 1,
            	autoplay: true,
            	autoplaySpeed: 5000,
            	arrows: false,
            	dots: false,
            	pauseOnHover: false,
            	responsive: [{
            	  breakpoint: 768,
            	  settings: {
            		slidesToShow: 4 } },
            
            	{
            	  breakpoint: 520,
            	  settings: {
            		slidesToShow: 2 } }] });
            
            
            
            });
         </script>
         <footer class="footer-section section bg-gray-two">
            <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-15 pb-xs-5">
               <div class="container">
                  <div class="row">
                     <div class="footer-widget col-lg-4 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <div class="footer-logo">
                           <a href="<?php echo $url;?>"><img src="<?php echo $url;?>/assets/images/logo.png?v=3" alt="ลัคกี้สโตร์"></a>
                        </div>
                        <div class="footer-p">
                           <p class="blue"><i class="fas fa-exclamation-circle"></i> เกี่ยวกับเรา</p>
                           <p>เว็บไซต์ ลัคกี้สโตร์ เป็นเพียงตัวแทนจำหน่ายเท่านั้น
                              ไม่มีส่วนเกี่ยวข้องกับองค์กรหรือบุคคลใดๆที่แอบอ้างใช้ชื่อบัญชีธนาคาร ร้านลัคกี้สโตร์ เครดิตในเว็บไซต์ใช้สำหรับซื้อสินค้าภายในเว็บไซต์ลัคกี้สโตร์เท่านั้นโปรดระวังมิจฉาชีพแอบอ้างบัญชีเราเพื่อหลอกให้ผู้อื่นจ่ายค่าสินค้าแทน
                           </p>
                        </div>
                        <div class="tag-key" style="margin-top:15px;">
                           <span class="tag-on">ขายไอดีเกม</span>
                           <span class="tag-on">บัตรเติมเงินเกม</span>
                           <span class="tag-on">สุ่มของรางวัล</span>
                        </div>
                     </div>
                     <div class="footer-widget col mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">Contact</span></h4>
                        <ul class="ft-menu">
                           <li><a href="" class="mb-15"><i class="fas fa-mobile-alt"></i> 000-000-0000</a></li>
                           <li><a href="<?php echo $line;?>" target="_blank" class="mb-15"><i class="fab fa-line"></i> @</a></li>
                           <li><a href="#" class="mb-15">จ - อ : 9:00น. - 21:00น.</a></li>
                        </ul>
                        <img src="/assets/images/bns_registered.png">
                     </div>
                     <div class="footer-widget col mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">Help ?</span></h4>
                        <ul class="ft-menu">
                           <li><a href="/howtocreateaccount" class="mb-15"><i class="fas fa-angle-right"></i> วิธีสมัครสมาชิก</a></li>
                           <li><a href="/howtotopup" class="mb-15"><i class="fas fa-angle-right"></i> วิธีเติมเงิน</a></li>
                           <li><a href="/howtobuy" class="mb-15"><i class="fas fa-angle-right"></i> วิธีสั่งซ์้อสินค้า</a></li>
                        </ul>
                     </div>
                     <div class="footer-widget col-lg-4 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">Follow Us</span></h4>
                        <div class="fb-page" data-href="https://www.facebook.com/luckystoreTH/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                           <blockquote cite="https://www.facebook.com/luckystoreTH/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/luckystoreTH/">Loading . .</a></blockquote>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom section">
               <div class="container">
                  <div class="row no-gutters">
                     <div class="col-12 pt-25 pb-25">
                        <div class="row justify-content-between align-items-center">
                           <div class="col-lg-10 col-md-10 col-sm-12">
                              <div class="copyright-f">
                                 <p>บริษัท ลัคกี้สโตร์ &copy; 2018-2020 สงวนสิทธิ์</p>
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-2 col-sm-12">
                              <div class="footer-nav footer-payments">
                                 <nav>
                                   
                                 </nav>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <div class="nav-bg-mobile d-block fixed-bottom d-md-none">
         <ul class="nav-mobile">
            <li>
               <a href="/createaccount">สมัครสมาชิก</a>
            </li>
            <li>
               <a href="/accountmanage">เข้าสู่ระบบ</a>
            </li>
            <li>
               <a href="/topup">เติมเงิน</a>
            </li>
         </ul>
      </div>
      <script src="<?php echo $url;?>/assets/js/popper.min.js?v=1"></script>
      <script src="<?php echo $url;?>/assets/js/bootstrap.min.js?v=1"></script>
      <script src="<?php echo $url;?>/assets/js/plugins.js?v=2"></script>
      <script src="<?php echo $url;?>/assets/js/script.js?v=10"></script>
      <script src="<?php echo $url;?>/assets/js/main.js?v=10"></script>
   </body>
</html>