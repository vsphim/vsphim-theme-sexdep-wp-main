<?php
get_header();
?>
<div class="container">
    <div class="clear"></div>
    <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item">
                <span itemprop="name">Xem phim</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="active">Tất cả phim</li>
    </ol>
    <form id="form-filter" class="form-filter" method="GET" action="/">
        <div class="filter-item">
            <select name="filter[categories]" form="form-filter" class="input form-control" id="type">
                <option value="">Định dạng</option>
                <?php $categories = get_terms(array('taxonomy' => 'ophim_categories', 'hide_empty' => false,));?>
                <?php foreach($categories as $category) { ?>
                    <option value='<?php echo $category->name; ?>' ><?php echo $category->name ; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="filter-item">
            <select name="filter[genres]" form="form-filter" class="input form-control" id="cat_id">
                <option value="">Thể loại</option>
                <?php $genres = get_terms(array('taxonomy' => 'ophim_genres', 'hide_empty' => false,));?>
                <?php foreach($genres as $genre) { ?>
                    <option value='<?php echo $genre->name; ?>' ><?php echo $genre->name ; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="filter-item">
            <select name="filter[regions]" form="form-filter" class="input form-control" id="city_id">
                <option value="">Quốc gia</option>
                <?php $regions = get_terms(array('taxonomy' => 'ophim_regions', 'hide_empty' => false,));?>
                <?php foreach($regions as $region) { ?>
                    <option value='<?php echo $region->name; ?>' ><?php echo $region->name ; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="filter-item">
            <select name="filter[years]" form="form-filter" class="input form-control" id="year">
                <option value="">Năm</option>
                <?php $years = get_terms(array('taxonomy' => 'ophim_years', 'hide_empty' => false,));?>
                <?php foreach($years as $year) { ?>
                    <option value='<?php echo $year->name; ?>'><?php echo $year->name ; ?> </option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" form="form-filter" class="btn btn-success" value="Lọc phim" />
    </form>

    <div class="left-content" id="page-info">
        <div class="list-films film-new">
            <ul>
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
            </ul>

            <div class="clear"></div>
            <div class="pagination">
                <?php ophim_pagination(); ?>
            </div>
        </div>
    </div>
    <div class="right-content">
        <?php get_sidebar('ophim'); ?>
    </div>
    <div class="clear"></div>
</div>
<?php
get_footer();
?>
