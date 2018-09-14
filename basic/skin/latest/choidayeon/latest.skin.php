<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<div class="bnr_section bnr_section_right" id="notice_area">
        <div class="bnr_notice">
            <dl>
                <dt><? echo $bo_subject; ?></dt>
                <dd>
                    <ul id="noticeList">
                        <? for($i=0;$i<count($list);$i++){ ?>
                        <li>
                            <a href="<? echo $list[$i]['href']?>"><i class="fas fa-volume-down"></i>
                                <? 
                                echo $list[$i]['subject'];
                                    ?>
                            <span class="ico ico_notice">
                            </span>
                            </a>
                        </li>
                    <? } ?>
                    </ul>
                </dd>
            </dl>
            <div class="btn_more">
                <a href="<? echo G5_BBS_URL ?>/board.php?bo_table=<? echo $bo_table; ?>"><i class="fas fa-plus"></i></a>
            </div>
        </div>
</div>