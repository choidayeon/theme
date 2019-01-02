
 <? if($bo_table == "NEWS"){?>

    <?}?>
</div>

<!-- } 콘텐츠 끝 -->

<hr>

<footer id="realfooter">
	 <div id="footer_wrap">
	 	<div class="logo"></div>
	 	<div class="f_content">
	 		<div class="f_sns">
	 			<ul>
	 				<li>twitter</li>
	 				<li>facebook</li>
	 				<li>instar</li>
	 			</ul>
	 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A laboriosam minima soluta molestias dolorum animi hic ipsum repellat nemo nam totam rem harum eum, dolorem quidem repudiandae sint ut, itaque veniam ad. Tenetur sed optio rem ea non exercitationem voluptatibus error minima culpa, quos, consequatur, vero inventore laudantium temporibus veritatis.
	 			</p>
	 		</div>
	 	</div>
	 </div>
</footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>