<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<script>
	$(document).ready(function(){
		$(".slide1").bxSlider({
			controls:false,pager:false,auto:true});
		});
</script>

<div class="slide1" style="margin-bottom:20px;">
	<div><img src="<?php echo G5_THEME_IMG_URL;?>/pc01.jpg"  alt="gallery01"></div>
	<div><img src="<?php echo G5_THEME_IMG_URL;?>/pc02.jpg"  alt="gallery02"></div>
	<div><img src="<?php echo G5_THEME_IMG_URL;?>/pc03.jpg"  alt="gallery03"></div>
</div>

<h2 class="sound_only">최신글</h2>
<style>
.gallery_wrap{width:100%;margin-top:20px;}
.gallery_wrap>ul{width:100%;overflow:hidden;}
.gallery_wrap>ul>li{float:left;width:25%;}
</style>

<div class="gallery_wrap">
	<ul>
		<li>
			<?php  echo latest('theme/basic', 'gallery', 5, 23);  ?>
		</li>
		<li>
			<?php  echo latest('theme/basic', 'free', 5, 23);  ?>
		</li>
		<li>
			<?php  echo latest('theme/basic', 'notice', 5, 23);  ?>
		</li>
		<li>
			<?php  echo latest('theme/basic', 'qa', 5, 23);  ?>
		</li>
	</ul>
</div>
<div>
	<? echo latest('theme/dayeon', 'free', 4, 20); ?>
</div>
<div>
	<? echo latest('theme/dayeon', 'notice', 4, 20); ?>
</div>
<div style="margin-top:20px;">
	<? echo latest('theme/choidayeon', 'notice', 2, 20); ?>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>

