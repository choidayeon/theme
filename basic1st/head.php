<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<header id="header_wrap">
    <div id="header">
         <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/incredible_logo.png" alt="logo"></a>
        <ul >
            <li>
                <a href="<?php echo G5_BBS_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/tumblr_white.png" alt="facebook"></a>
            </li>
            <li>
                <a href="<?php echo G5_BBS_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/twitter_white.png" alt="twitter"></a>
            </li>
            <li>
                <a href="<?php echo G5_ADMIN_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/instar_white.png" alt="instar"></a>
            </li>
        </ul>
        <?php  include(G5_THEME_PATH.'/skin/nav/menu.php'); ?>
    </div>
</header>
<?php    if(defined('_INDEX_')) {     // index에서만 실행?>
<script>
    $(function(){
        var $menu = $("#header_wrap")
        var $menuPos = $("#header").offset().top+350;
        var $in_img = $("div.in_img>p>img")
        var $incredible = $("#incredibles").offset().top;
        var $eventPos = $("#event_wrap").offset().top-150;
        var $jack1 = $("#jack01");   
        var $jack2 = $("#jack02");

        $(window).on("scroll",function(){
            var scrollY = window.pageYOffset;
            
            if(scrollY>$menuPos){
                $menu.addClass("fixed");
            }else{
                $menu.removeClass("fixed");
            };
            
            if(scrollY > $eventPos-300){
                $jack1.stop().animate({top:-100});
                $jack2.stop().delay(150).animate({left:300});
            }else{
                $jack1.stop().animate({top:-300});
                $jack2.stop().animate({left:0});
            }

            if(scrollY > $incredible -350){
                $in_img.eq(0).stop().animate({top:300,opacity:1});
                $in_img.eq(1).stop().delay(100).animate({top:50,opacity:1});
                $in_img.eq(2).stop().delay(200).animate({top:50,opacity:1});
                $in_img.eq(3).stop().delay(300).animate({top:100,opacity:1});
                $in_img.eq(4 ).stop().delay(400).animate({top:300,opacity:1});
            }else{
                $in_img.stop().animate({top:0,opacity:0});
            }
        });

        var current = 0;
        var liCount = $(".main_slide>ul>li").length;

        var wrapWidth = $(window).outerWidth();
        console.log(wrapWidth);
        $(".main_slide>ul>li").css("width",wrapWidth);
        $(".main_slide>ul").css("width",wrapWidth*liCount);

        $(window).resize(function(){
            wrapWidth = $(window).outerWidth();
            $(".main_slide>ul>li").css("width",wrapWidth);
            $(".main_slide>ul").css("width",wrapWidth*liCount); 
            $(".main_slide>ul").css({left:current*wrapWidth*-1})
        });

        $("#btn_next").click(function(){
            if(current<=liCount-1){
                current++;
                if(current>1){
                    current=0;
                }
            }
            listMove();
            console.log(current);
        });

        $("#btn_prev").click(function(){
            if(current<=liCount-1){
                current--;
                if(current <= -1){
                    current=1;
                };
            };
            listMove();
            
        });

        function listMove(){
            $(".main_slide>ul").stop().animate({left:current*wrapWidth*-1})
        };

        var clickInterval;

        function timer(){
            clickInterval = setInterval(function(){
                $("#btn_next").trigger("click");
            },3000);
        };

        timer();
    });

</script>
<?}else{?>
<script>
    
     $(function(){
        var $menu = $("#header_wrap")
        var $menuPos = $("#header").offset().top+350;


        $(window).on("scroll",function(){
            var scrollY = window.pageYOffset;
            
            if(scrollY>$menuPos){
                $menu.addClass("fixed");
            }else{
                $menu.removeClass("fixed");
            };

        });

        });
</script>
<?}?>

<?php    if(defined('_INDEX_')) {     // index에서만 실행?>

    <section id="recomm_book">
        <div class="main_slide">
            <ul>
                <li>slide01</li>
                <li>slide02</li>
            </ul>
            <div class="slide_btn">
                <span id="btn_prev"><img src="<?php echo G5_THEME_IMG_URL ?>/prev.png" alt=""></span>
                <span id="btn_next"><img src="<?php echo G5_THEME_IMG_URL ?>/next.png" alt=""></span>
            </div>
        </div>
    </section> 

 <?}else if($co_id=="incredible2"){?>

   </body>
        <div style="background-image:url(<?php echo G5_THEME_IMG_URL?>/sub_incredible2.jpg);height:5866px"></div>

    <?}else if($co_id=="charecter"){?>
        </body>
        <div style="background-image:url(<?php echo G5_THEME_IMG_URL?>/sub_character.jpg);height:1338px"></div>


    <?}else if($co_id=="media"){?>
        </body>
        <div style="background-image:url(<?php echo G5_THEME_IMG_URL?>/sub_media.jpg);height:2804px"></div>


    <?}else if($co_id=="event"){?>
        </body>
        <div style="background-image:url(<?php echo G5_THEME_IMG_URL?>/sub_event.jpg);height:3000px"></div>


    <?}else if($co_id=="store"){?>
        </body>
        <div style="background-image:url(<?php echo G5_THEME_IMG_URL?>/sub_store.jpg);height:2400px"></div>


    <?}else{?>
        </body>
        <div style="background-image:url(<?php echo G5_THEME_IMG_URL?>/sub_news.jpg);height:450px"></div>
<?}?>
<?php if($bo_table == "NEWS"){?>
    <div id="board_wr" style="width:1200px;margin:50px auto;">

     <?}?>