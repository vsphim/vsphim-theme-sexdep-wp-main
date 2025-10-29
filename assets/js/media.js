$(document).ready(function() {
    function copyToClipboard(text) {
        var $temp = $('<input>');
        $('body').append($temp);
        $temp.val(text).select();
        document.execCommand('copy');
        $temp.remove();
    }
    $('.btn-link').on('click', function() {
        copyToClipboard($(this).attr('data'));
        $('.div-rs').html('Coppied Link!').css('display', 'block');
        $('.div-rs').fadeOut(2000); return false;
    });
    var resizeCheck = "small";
    var playersize = { width: 0, height: 0 }
    var playerWrapper = $(".video-play");
    var wrapper = $('.bodyall').width();
    playersize.width = playerWrapper.width();
    playersize.height = playerWrapper.height();
    $("#explayer").click(function() {
        var container = $('.bodyall').width();
        if (container < 970) { return; }
        if (resizeCheck == "small") { playerWrapper.animate({ width: wrapper - 20, height: (wrapper - 20) / 1.78 });
            $(".columright").animate({ marginTop: (wrapper - 30) / 1.78 + 40 });
            $("#explayer").html("Zoom-");
            resizeCheck = "large"; } else if (resizeCheck == "large") { playerWrapper.animate({ width: playersize.width, height: playersize.height });
            $(".columright").animate({ marginTop: 0 });
            $("#explayer").html("Zoom+");
            resizeCheck = "small"; }
        $("html, body").animate({ scrollTop: $(playerWrapper).offset().top - 10 }, 1500);
    });
    $('.btn-like').click(function() {
        var id = $(this).data('id');
        $('span.vote-count').removeClass('fa-thumbs-o-up');
        $('span.vote-count').addClass('fa-thumbs-up') ;
        if (id) {
            $.post(ajaxurl, {
                like_post: 1,
                like: id
            }, function(data) {
                if(data == 0) data = '1';
                $('.vote-count').html(data);
            });
        }
    });

    $("#server1").click(function() {
        $('span.default-srv').removeClass('default-srv');
        $('#server1').addClass('default-srv');
        $('#video').attr('data-sv', '1');
    });
    $("#server2").click(function() {
        $('span.default-srv').removeClass('default-srv');
        $('#server2').addClass('default-srv');
        $('#video').attr('data-sv', '2');
    });
     $("#server3").click(function() {
        $('span.default-srv').removeClass('default-srv');
        $('#server3').addClass('default-srv');
        $('#video').attr('data-sv', '3');
    });
});

var reloadedCount = {};
function reloadCurrentserver() {
    var data_id = $('#video').attr('data-id');
    var server_id = $('#video').attr('data-sv');
    if (data_id) {
        server(server_id, data_id);
    }
}

function del_cache() {
    var data_id = $('#video').attr('data-id');
    var server_id = $('#video').attr('data-sv');
    $.post(ajaxurl, {
        delcache: 1,
        server: server_id,
        videoid: data_id
    });
}

function errorHandler() {
    var time = 2;
    var data_id = $('#video').attr('data-id');
    var server_id = $('#video').attr('data-sv');
    if (typeof reloadedCount[server_id] == "undefined") {
        reloadedCount[server_id] = 1;
    }
    if (reloadedCount[server_id] < time) {
        setTimeout(function() {
            reloadCurrentserver();
        }, 100);
        reloadedCount[server_id] ++;
    } else {
        $.post(ajaxurl, {
            reloadError: 1,
            server: server_id,
            videoid: data_id
        });
        $('#video .video-player').html("<p style='background:#333; color: #fff; text-align:center; padding: 10px;'>Server này là lỗi và tự động tải lại trong " + time + " lần." + "<br />Vui lòng chọn một server #2 để xem. </p>");
    }
}
var cookie_notice = !1,
    error_thispage = false;

function server(server, id) {
    var server = parseInt(server);
    $('#video').html('<svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="15" fill="none" stroke-width="2" stroke-miterlimit="10" /></svg><iframe src="/embed/index.php?id=' + encodeURIComponent(id) + '&server=' + server + '" scrolling="no" frameborder="0" width="100%" height="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" style="position: absolute;top: 0;"></iframe>')
    if (server == 1) {
        $('#server1').addClass('default-srv');
    }
    return false;
}


var _xvideos = '.videos .dept-ct';
$(_xvideos).addClass("show-less");
$('.show-less').css({ 'height': '66px', 'overflow': 'hidden' });
$(_xvideos).after("<span class='btn-show'>đọc thêm &rarr;</span>");
$(".btn-show").click(function() { if ($(_xvideos).hasClass("show-less")) { $(_xvideos).css({ 'height': 'auto', 'overflow': 'none' });
        $(_xvideos).removeClass("show-less");
        $(_xvideos).addClass("show-more");
        $(this).html("&larr; rút gọn"); } else { $(_xvideos).css({ 'height': '66px', 'overflow': 'hidden' });
        $(_xvideos).addClass("show-less");
        $(_xvideos).removeClass("show-more");
        $(this).html("đọc thêm &rarr;"); } });
$('.btn-show').css({ 'cursor': 'pointer' });