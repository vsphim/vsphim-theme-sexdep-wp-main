<?php
get_header();
?>

<?php
if (!isset($_GET['filter'])){
    $_GET['filter']['categories'] ='';
    $_GET['filter']['genres'] ='';
    $_GET['filter']['regions'] ='';
    $_GET['filter']['years'] ='';
}
?>
<div id="main-wrapper" class="layout-page page-category">
    <div class="top-banner">
        <div class="container"></div>
        <div class="top-fixed"><h1>Kết quả tìm kiếm "<?php echo "$s"; ?>"</h1><p class="d-none d-md-block">Kết quả tìm kiếm "<?php echo "$s"; ?>"</p><p class="d-block d-md-none">Kết quả tìm kiếm "<?php echo "$s"; ?>"</p></div>
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
        <section class="block_area block_area_category">
            <div class="block_area-header"><div class="bah-heading mr-3"></div></div>
            <div class="block_area-content block_area-list film_list film_list-grid">
                <div class="film_list-wrap">
                    <?php $key =0; if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            $xClass = 'item';
                            if ($key === 0 || $key % 4 === 0) {
                                $xClass .= ' no-margin-left';
                            }
                            include THEMETEMPLADE.'/section/section_thumb_item.php';
                        } wp_reset_postdata();  }
                    else { ?>
                        <p>Rất tiếc, không có nội dung nào trùng khớp yêu cầu</p>
                    <?php } ?>
                </div>
            </div>
            <div class="pre-pagination mt-5">
                <?php ophim_pagination();?>
            </div>
        </section>
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
