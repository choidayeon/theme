<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<div id="content" style="overflow:hidden">
    <div id="incredibles">
        <div class="in_text">
            <h2>#INCREDIBLES 2</h2>       
        </div>
        <div class="in_img">
            <p><img src="<?php echo G5_THEME_IMG_URL ?>/dash.png" alt="dash" class="cha01"></p>
            <p><img src="<?php echo G5_THEME_IMG_URL ?>/mr_incredible.png" alt="incredible" class="cha02"></p>
            <p><img src="<?php echo G5_THEME_IMG_URL ?>/jackjack.png" alt="jackjack" class="cha03"></p>
            <p><img src="<?php echo G5_THEME_IMG_URL ?>/elastin.png" alt="elastin" class="cha04"></p>
            <p><img src="<?php echo G5_THEME_IMG_URL ?>/violet.png" alt="violet" class="cha05"></p>
        </div>
    </div>
    <div id="incredibles02">
        <div class="in_text02">
            <h2>지금까지의 히어로는 잊어라!</h2>
            <p>슈퍼맘 ‘헬렌’이 국민 히어로 ‘일라스티걸’로 활약하며 세상의 주목을 받자<br>바쁜 아내의 몫까지 집안일을 하기 위해 육아휴직을 낸 아빠 ‘밥’은 질풍노도 시기의 딸 ‘바이올렛’,<br>자기애가 넘치는 아들 ‘대쉬’, 어마무시한 능력을 시도때도 없이 방출하는<br>막내 ‘잭잭’까지 전담하며 전쟁같은 하루하루를 보낸다.<br></p>
            <p>그러던 어느 날,<br>각자의 위치에서 바쁜 일상을 보내던 슈퍼파워 가족 앞에 새로운 악당이 나타났다!<br></p>
            <p><strong>다시 한번 세상을 구하기 위해 나선 가족은<br>‘인크레더블’한 능력을 발휘할 수 있을까?</strong></p>
        </div>
    </div>
    <div id="media_wrap">
        <h2>#MEDIA</h2>
        <div class="media">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/EIhyFbt1X7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <script>
        $(function(){
            $("body").append("<div id='glayLayer'></div><div id='overLayer'></div>");
            $(".gallery>div>ul>li>a").click(function(){
                $("#glayLayer").show();
                $("#overLayer").show().html("<img src='" + $(this).attr('href') + "'>");
                return false
            });
            $("#glayLayer,#overLayer").click(function(){
                $("#glayLayer").hide();
                $("#overLayer").hide();
            })
        });
    </script>
    <div id="gallery_wrap">
        <div class="gallery">
            <div class="row">
                <ul>
                    <li><a href="<?php echo G5_THEME_IMG_URL ?>/gallery01j.jpg" alt="img1"><img src="<?php echo G5_THEME_IMG_URL?>/gallery01.jpg" alt=""><p>gallery00</p></a></li>
                    <li><a href="<?php echo G5_THEME_IMG_URL ?>/gallery02j.jpg" alt="img2"><p>gallery01</p><img src="<?php echo G5_THEME_IMG_URL?>/gallery02.jpg" alt=""></a></li>
                    <li><a href="<?php echo G5_THEME_IMG_URL ?>/gallery03j.jpg" alt="img3"><img src="<?php echo G5_THEME_IMG_URL?>/gallery03.jpg" alt=""><p>gallery02</p></a></li>
                    <li><a href="<?php echo G5_THEME_IMG_URL ?>/gallery04j.jpg" alt="img4"><img src="<?php echo G5_THEME_IMG_URL?>/gallery04.jpg" alt=""><p>gallery03</p></a></li>
                    <li><a href="<?php echo G5_THEME_IMG_URL ?>/gallery05j.jpg" alt="img5"><img src="<?php echo G5_THEME_IMG_URL?>/gallery05.jpg" alt=""><p>gallery04</p></a></li>
                    <li><a href="<?php echo G5_THEME_IMG_URL ?>/gallery06j.jpg" alt="img6"><img src="<?php echo G5_THEME_IMG_URL?>/gallery06.jpg" alt=""><p>gallery05</p></a></li>
                    <li><a href="<?php echo G5_THEME_IMG_URL ?>/gallery07j.jpg" alt="img7"><img src="<?php echo G5_THEME_IMG_URL?>/gallery07.jpg" alt=""><p>gallery06</p></a></li>
                    <li><a href="<?php echo G5_THEME_IMG_URL ?>/gallery08j.jpg" alt="img8"><img src="<?php echo G5_THEME_IMG_URL?>/gallery08.jpg" alt=""><p>gallery07</p></a></li>
                </ul>                    
            </div>
            <div class="btn_wrap">
                <button class="btn_more">MORE +</button>
            </div>
        </div>
    </div>
    <div id="event_wrap">
        <div class="event_img">
            <img src="<?php echo G5_THEME_IMG_URL?>/event_jack1.png" alt="jack01" id="jack01">
            <img src="<?php echo G5_THEME_IMG_URL?>/event_jack.png" alt="jack02" id="jack02">
        </div>
        <div class="event">
            <h2>#EVENT</h2>
            <ul>
                <li>
                    <img src="<?php echo G5_THEME_IMG_URL ?>/event01.jpg" alt="event01">
                    <p>인크레더블 2<br>200만 돌파!</p>
                </li>
                <li>
                    <img src="<?php echo G5_THEME_IMG_URL ?>/event02.jpg" alt="event02">
                    <p>더위탈출 인캉스<br>인증 이벤트</p>
                </li>
                <li>
                    <img src="<?php echo G5_THEME_IMG_URL ?>/event03.jpg" alt="event03">
                    <p>인크레더블 2<br>영화 예매권 증정!</p>
                </li>
            </ul>
            <div class="btn_wrap">
                <button class="btn_more">MORE +</button>
            </div>
        </div>
    </div>
    <div id="store_wrap">
        <div class="store">
            <h2>#STORE</h2>
            <ul>
                <li>
                    <img src="<?php echo G5_THEME_IMG_URL ?>/store01.png" alt="">
                    <p>incredibles</p>
                    <span>Power Couple<br>￦ 29,900</span>
                </li>
                <li>
                    <img src="<?php echo G5_THEME_IMG_URL ?>/store02.jpg" alt="">
                    <p>incredibles</p>
                    <span>Power Couple<br>￦ 29,900</span>
                </li>
                <li>
                    <img src="<?php echo G5_THEME_IMG_URL ?>/store03.jpg" alt="">
                    <p>incredibles</p>
                    <span>Power Couple<br>￦ 29,900</span>
                </li>
            </ul>
            <div class="btn_wrap">
                <button class="btn_more">MORE +</button>
            </div>
        </div>
    </div>
    <div class="latest_wr">
	    <!--  사진 최신글2 { -->
	    <?php
	    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
	    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
	    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	    echo latest('theme/basic', 'news', 3, 50);
	    ?>
	    <!-- } 사진 최신글2 끝 -->
	</div>
</div>

    <script>
        $(function(){
            var $gimg = $(".gallery>div>ul>li");
            var $gtext = $(".gallery>div>ul>li>a>p");
            var $event = $(".event>ul>li");
            var $etext = $(".event>ul>li>p");

            $gimg.mouseenter(function(){
                var k = $(this).index();
                console.log("k="+k);
                $gtext.eq(k).css("display","block");
            }).mouseleave(function(){
                $gtext.css("display","none");
            });

            $event.mouseenter(function(){
                var i = $(this).index();
                $etext.eq(i).css("display","block");
            }).mouseleave(function(){
                $etext.css("display","none");
            });
        });
    </script>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>