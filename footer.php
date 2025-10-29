<?php
    if ( is_active_sidebar('widget-footer') ) {
        dynamic_sidebar( 'widget-footer' );
    } else {
        _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
    }
    ?>
</div>
<?php wp_footer(); ?>
<script>var button=document.getElementById("back-to-top");button&&(button.style.opacity="0",button.style.transition="opacity 0.3s",window.addEventListener("scroll",function(){100<window.scrollY?button.style.opacity="1":button.style.opacity="0"}),button.addEventListener("click",function(){window.scrollTo({top:0,behavior:"smooth"})}))</script>
<script type="text/javascript">let hasWebP=!1;function lazyImg(r){return function(){let t,n=document.querySelectorAll("."+r);function o(e){e.onload=function(){e.classList.remove(r)},e.dataset.lazybackground&&(e.style.backgroundImage="url(".concat(e.dataset.lazybackground,")")),e.getAttribute("data-src")&&(e.src=(hasWebP,e.dataset.src),"IntersectionObserver"in window)&&t.unobserve(e)}if("IntersectionObserver"in window)t=new IntersectionObserver(function(e){e.forEach(function(e){0<e.intersectionRatio&&o(e.target)})},{rootMargin:"0px",threshold:.05}),n.forEach(function(e){t.observe(e)});else for(let e=0;e<n.length;e++)o(n[e])}}!function(){let e=new Image;e.onload=function(){hasWebP=!!(0<e.height&&0<e.width)},e.onerror=function(){hasWebP=!1},e.src="data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA"}()</script>
<script type="text/javascript">document.addEventListener("DOMContentLoaded",lazyImg("lzl")),document.addEventListener("DOMContentLoaded",function(){setTimeout(function(){document.querySelectorAll(".mmo-inner .img-delay").forEach(function(e){var t=e.getAttribute("data-src");t&&(e.src=t)})},1e3)})</script>
</html>