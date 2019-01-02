<script>
        $(function(){
            $('#menu>li').hover(function(){
                console.log($(this).index());
                $('#menu>li>a>span').eq($(this).index()).addClass('active');
            },function(){
                $('#menu>li>a>span').removeClass('active');
            });
        });
    </script>
    <style>
        #nav{width: 78%; float: left;padding-top:25px;}
        #nav>div{width:582px; margin: 0 auto;}
        #menu{height:40px;}
        #menu>li{float:left;}
        #menu>li>a{text-align: center; display: block; padding:0 15px; font-size:16px; font-weight:bold; line-height: 40px; font-family: 'Roboto', sans-serif; color:white}
        #menu>li>a:hover{color:#f0ca29;}
        #menu>li>a>span:after{content:""; border-bottom: 5px solid #f0ca29; width: 0; display: block; transition-duration:0.4s; margin-top: -9px;}
        #menu>li>a>span.active:after{width: 100%;}
        #sub_menu{display:none;}
    </style>

    <!-- http://dkrnss.dothome.co.kr/main/ -->
    <nav id="nav">
        <div>
           <ul id="menu"> <!-- 메인메뉴 시작 -->
                    <?php
                    $sql = " select *
                                from {$g5['menu_table']}
                                where me_use = '1'
                                  and length(me_code) = '2'
                                order by me_order, me_id ";
                    $result = sql_query($sql, false);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $menu_datas = array();

                    for ($i=0; $row=sql_fetch_array($result); $i++) {
                        $menu_datas[$i] = $row;

                        $sql2 = " select *
                                    from {$g5['menu_table']}
                                    where me_use = '1'
                                      and length(me_code) = '4'
                                      and substring(me_code, 1, 2) = '{$row['me_code']}'
                                    order by me_order, me_id ";
                        $result2 = sql_query($sql2);
                        for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                            $menu_datas[$i]['sub'][$k] = $row2;
                        }

                    }

                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue; 
                    ?>
                <li>
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>">
                        <span><?php echo $row['me_name'] ?></span>
                    </a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '
                            <ul id="sub_menu"><!--서브메뉴 시작-->'.PHP_EOL;
                    ?>
                        <li>
                            <a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>
                        </li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>
        </div>
    </nav>