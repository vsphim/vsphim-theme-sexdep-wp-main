<?php
get_header();
?>
<div id="main-wrapper">
    <div class="top-banner">
        <div class="container"></div>
        <?php if ( is_active_sidebar('text-header') ) {
            dynamic_sidebar( 'text-header' );
        } else {
            _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
        }
        ?>
        <div class="swiper-banner d-none d-sm-block">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner01.webp" class="lzl" height="403" alt="">
                </div>
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner02.webp" class="lzl" height="403" alt="">
                </div>
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner03.webp" class="lzl" height="403" alt="">
                </div>
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner04.webp" class="lzl" height="403" alt="">
                </div>
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner05.webp" class="lzl" height="403" alt="">
                </div>
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner06.webp" class="lzl" height="403" alt="">
                </div>
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner07.webp" class="lzl" height="403" alt="">
                </div>
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner08.webp" class="lzl" height="403" alt="">
                </div>
                <div class="swiper-slide">
                    <img data-src="<?= get_template_directory_uri() ?>/assets/images/banner09.webp" class="lzl" height="403" alt="">
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <div class="swiper-banner d-sm-none">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner01_m.webp?v=4" class="lzl" height="261" alt=""></div>
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner02_m.webp?v=4" class="lzl" height="261" alt=""></div>
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner03_m.webp?v=4" class="lzl" height="261" alt=""></div>
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner04_m.webp?v=4" class="lzl" height="261" alt=""></div>
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner05_m.webp?v=4" class="lzl" height="261" alt=""></div>
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner06_m.webp?v=4" class="lzl" height="261" alt=""></div>
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner07_m.webp?v=4" class="lzl" height="261" alt=""></div>
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner08_m.webp?v=4" class="lzl" height="261" alt=""></div>
                <div class="swiper-slide"><img data-src="<?= get_template_directory_uri() ?>/assets/images/banner09_m.webp?v=4" class="lzl" height="261" alt=""></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="main-search">
            <div class="search-content">
                <form id="home-search-form" id="form">
                    <input id="home-search-text" class="form-control search-input" type="text" name="search"
                        placeholder="Thể loại, Diễn viên, Code, ..." autocomplete="off" value="">
                    <button id="home-search-button" type="submit" class="search-icon">
                        <span>Tìm kiếm</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M10.3637 2.99707C8.90728 2.99707 7.4836 3.42894 6.27267 4.23806C5.06173 5.04718 4.11792 6.19722 3.56058 7.54274C3.00325 8.88826 2.85743 10.3688 3.14155 11.7972C3.42568 13.2256 4.12699 14.5377 5.15681 15.5675C6.18663 16.5973 7.4987 17.2986 8.92709 17.5828C10.3555 17.8669 11.8361 17.7211 13.1816 17.1637C14.5271 16.6064 15.6771 15.6626 16.4863 14.4517C17.2954 13.2407 17.7273 11.817 17.7273 10.3607C17.7271 8.40776 16.9513 6.53487 15.5704 5.15395C14.1895 3.77304 12.3166 2.99719 10.3637 2.99707V2.99707Z" stroke="#111111" stroke-width="1.5" stroke-miterlimit="10"></path><path d="M15.8573 15.8562L21 20.9989" stroke="#111111" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"></path></svg>
                    </button>
                </form>
            </div>
            <div class="keywords" style="text-align:left;margin-top:16px"><span class="keywords-callout d-none d-xl-inline-block">Các từ khóa hay được tìm kiếm: </span></div>
            <div class="search-suggestion" style="display:none"></div>
        </div>
        <div class="main-filter">
            <div class="of-mobile">
                <ul class="list-cat">
                    <li><img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/list-cat.webp?v=4" class="d-none d-md-block" alt="" width="99" height="16"></li>
                    <li class="c-item"><a href="<?php
                    $action_genre_link = op_get_genre_link('hiep-dam');
                    echo $action_genre_link;
                ?>" title=""><img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/i-hapdiem.webp?v=4">Hấp diêm</a></li>
                    <li class="c-item"><a href="<?php
                    $action_genre_link = op_get_genre_link('khong-che');
                    echo $action_genre_link;
                ?>" title=""><img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/i-khongche.webp?v=4">Không che</a></li>
                    <li class="c-item"><a href="<?php
                    $action_genre_link = op_get_genre_link('loan-luan');
                    echo $action_genre_link;
                ?>" title=""><img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/i-loanluan.webp?v=4">Loạn luân</a></li>
                    <li class="c-item"><a href="<?php
                    $action_genre_link = op_get_genre_link('viet-sub');
                    echo $action_genre_link;
                ?>" title=""><img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/i-viet.webp?v=4">Vietsub</a></li>
                    <li><img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/list-cat.webp?v=4" class="d-none d-md-block" alt="" width="99" height="16"></li>
                </ul>
            </div>
        </div>
        <?php if ( is_active_sidebar('widget-area') ) {
            dynamic_sidebar( 'widget-area' );
        } else {
            _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
        }
        ?>
    </div>
</div>
<script>
    document.body.classList.add('homepage');
</script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/swiper.min.js"></script>
<script>var swiper=new Swiper(".swiper-banner",{slidesPerView:1,spaceBetween:0,effect:"fade",loop:!0});const keywords=["JAV","Creampie","Doggy","Massage","Xinh gái","XXX","POV","thổi kèn","hot girl","threesome"],shuffled_keywords=keywords.sort(()=>.5-Math.random()),random_keywords=shuffled_keywords.slice(0,4);$(document).ready(function(){function e(){var e=$("#home-search-text").val().replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a").replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e").replace(/ì|í|ị|ỉ|ĩ/g,"i").replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o").replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u").replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y").replace(/đ/g,"d").replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g,"A").replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g,"E").replace(/Ì|Í|Ị|Ỉ|Ĩ/g,"I").replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g,"O").replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g,"U").replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g,"Y").replace(/Đ/g,"D");return(e=$.trim(e))&&(window.location.href="/?s="+e),!1}$("#home-search-text").keypress(function(e){if(13==e.which)return $("#home-search-form").submit(),!1}),$("#home-search-form").submit(e),$("#home-search-button").click(function(){return e()});let a='<span class="keywords-callout d-none d-xl-inline-block">Các từ khóa hay được tìm kiếm: </span>';$.each(random_keywords,function(e,r){a+=`<div class="keyword-container"><a href="/tim-kiem/${r}" class="keyword-item" title="#${r}" style="margin-right: .5rem">#${r}</a></div>`}),$("#search-keywords").html(a)})</script>
<?php
get_footer();
?>
