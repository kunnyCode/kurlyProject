<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- 전체카테고리 > 채소 의 goodsList입니다. --------------------------------------------------------->
<link rel="stylesheet" href="../../CSS/common.css">
<link rel="stylesheet" href="../../CSS/goods_list.css">
<title>마켓컬리 :: 내일의 장보기, 마켓컬리</title>
</head>
<body>
    <main id="main">
        <section id="content">
            <!-- 헤더 시작-------------------------------------------------------------------->
            <header id="header">
                <div id="userMenu">
                    <ul class="listMenu">
                        <li class="menu"><a href="#" class="linkMenu">회원가입</a></li>
                        <!-- <link rel="login_form" href="./CSS/Signup.css"> -->
                        <li class="menu"><a href="#" class="linkMenu">로그인</a></li>
                        <a href="../Signup.php"></a>
                        <li class="menu lst">
                            <a href="../board/service_center.php" class="linkMenu">고객센터</a>
                            <ul class="sub">
                                <li><a href="../board/service_center.php" onClick="">공지사항</a></li>
                                <li><a href="#" onClick="">자주하는 질문</a></li>
                                <li><a href="#" onClick="">1:1 문의</a></li>
                                <li><a href="#" onClick="">대량주문 문의</a></li>
                                <li><a href="#" onClick="">상품 제안</a></li>
                                <li><a href="#" onClick="">에코포장 피드백</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <style>
                        /*  회원가입 폰트 색상*/
                        /* #listMenu ul li {
                            color: #5f0080;
                        } */
                        
                        /* 고객센터 드롭다운바 */
                        #userMenu ul li:hover ul {
                            font-size:12px;
                            display: block;
                            width:90px;
                            height: 150px;
                            color: #333;
                        }
                </style>
                <div id="headerLogo" class="layout-wrapper">
                    <h1 class="logo">
                        <a href="../../index.php" class="link_main">
                            <span id="gnbLogoContainer">
                                <img src="../../img/kurlyLogo_x2.png" alt="마켓컬리 로고">
                            </span>
                        </a>
                    </h1>
                    <a href="#" onclick="" class="bnr_delivery">
                        <img src="../../img/delivery.png" alt="샛별, 택배 배송안내">
                    </a>
                </div>

                <!-- 카테고리 시작 --------------------------------------------------------------------------->       
                <div id="gnb">
                    <h2 class="screen_out">메뉴</h2>
                    <div id="gnbMenu" class="gnb_kurly">
                        <div class="inner_gnbkurly">
                            <div class="gnb_main">
                                <ul class="gnb">
                                    <li class="menu1 hover">
                                        <a href="#" class="link"><span class="ico"></span><span class="txt">전체 카테고리</span></a>
                                        <div class="gnb_sub"; style="width:200px;"><!--mouseover했을때 드롭다운, 기본은 숨김-->
                                            <div class="inner_sub">
                                                <ul class="gnb_menu" style="height:20px;"> <!-- ul에 data속성 들어있었음.-->
                                                <!-- 채소 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu" href="../shop/goods/goods_list.php">
                                                            <span class="icon" style="margin-left: 7px">
                                                                <img src="../../img/1.veg_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/1.veg.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">채소</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">친환경</span></a></li>
                                                            <li><a class="sub"><span class="name">고구마·감자·당근</span></a></li>
                                                            <li><a class="sub"><span class="name">시금치·쌈채소·나물</span></a></li>
                                                            <li><a class="sub"><span class="name">브로콜리·파프리카·양배추</span></a></li>
                                                            <li><a class="sub"><span class="name">양파·대파·마늘·배추</span></a></li>
                                                            <li><a class="sub"><span class="name">오이·호박·고추</span></a></li>                                                
                                                            <li><a class="sub"><span class="name">냉동·이색·간편채소</span></a></li>
                                                            <li><a class="sub"><span class="name">콩나물·버섯</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 채소 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 과일,견과,쌀 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/2.fruit_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/2.fruit.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">과일·견과·쌀</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">친환경</span></a></li>
                                                            <li><a class="sub"><span class="name">제철과일</span></a></li>
                                                            <li><a class="sub"><span class="name">국산과일</span></a></li>
                                                            <li><a class="sub"><span class="name">수입과일</span></a></li>
                                                            <li><a class="sub"><span class="name">간편과일</span></a></li>
                                                            <li><a class="sub"><span class="name">냉동·건과일</span></a></li>
                                                            <li><a class="sub"><span class="name">견과류</span></a></li>
                                                            <li><a class="sub"><span class="name">쌀·잡곡</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 과일,견과,쌀 카테고리 ㄴ끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 수산,해산,건어물 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/3.fish_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/3.fish.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">수산·해산·건어물</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">제철수산</span></a></li>
                                                            <li><a class="sub"><span class="name">생선류</span></a></li>
                                                            <li><a class="sub"><span class="name">굴비·반건류</span></a></li>
                                                            <li><a class="sub"><span class="name">오징어·낙지·문어</span></a></li>
                                                            <li><a class="sub"><span class="name">새우·게·랍스터</span></a></li>
                                                            <li><a class="sub"><span class="name">해산물·조개</span></a></li>
                                                            <li><a class="sub"><span class="name">수산가공품</span></a></li>
                                                            <li><a class="sub"><span class="name">김·미역·해조류</span></a></li>
                                                            <li><a class="sub"><span class="name">건어물·다시팩</span></a></li>                                                
                                                        </ul>
                                                    </li>
                                                    <!-- 수산,해산,건어물 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 정육,계란 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/4.meat_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/4.meat.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">정육·계란</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">국내산 소고기</span></a></li>
                                                            <li><a class="sub"><span class="name">수입산 소고기</span></a></li>
                                                            <li><a class="sub"><span class="name">돼지고기</span></a></li>
                                                            <li><a class="sub"><span class="name">계란류</span></a></li>
                                                            <li><a class="sub"><span class="name">닭·오리고기</span></a></li>
                                                            <li><a class="sub"><span class="name">양념육·돈까스</span></a></li>
                                                            <li><a class="sub"><span class="name">양고기</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 정육,계란 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 국,반찬,메인요리 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/5.soup_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/5.soup.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">국·반찬·메인요리</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">국·탕·찌개</span></a></li>
                                                            <li><a class="sub"><span class="name">밀키트·메인요리</span></a></li>
                                                            <li><a class="sub"><span class="name">밑반찬</span></a></li>
                                                            <li><a class="sub"><span class="name">김치·젓갈·장류</span></a></li>
                                                            <li><a class="sub"><span class="name">두부·어묵·부침개</span></a></li>
                                                            <li><a class="sub"><span class="name">베이컨·햄·통조림</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 국,반찬,메인요리 카테고리 끝--------------------------------------------------------------------------->

                                                    <!-- 샐러드,간편식 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/6.salad_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/6.salad.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">샐러드·간편식</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">샐러드·닭가슴살</span></a></li>
                                                            <li><a class="sub"><span class="name">도시락·밥류</span></a></li>
                                                            <li><a class="sub"><span class="name">파스타·면류</span></a></li>
                                                            <li><a class="sub"><span class="name">떡볶이·튀김·순대</span></a></li>
                                                            <li><a class="sub"><span class="name">피자·핫도그·만두</span></a></li>
                                                            <li><a class="sub"><span class="name">폭립·떡갈비·안주</span></a></li>
                                                            <li><a class="sub"><span class="name">죽·스프·카레</span></a></li>
                                                            <li><a class="sub"><span class="name">선식·시리얼</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 샐러드,간편식 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 면,양념,오일 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/8.sources_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/8.sources.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">면·양념·오일</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">파스타·면류</span></a></li>
                                                            <li><a class="sub"><span class="name">식초·소스·드레싱</span></a></li>
                                                            <li><a class="sub"><span class="name">양념·액젓·장</span></a></li>
                                                            <li><a class="sub"><span class="name">식용유·참기름·오일</span></a></li>
                                                            <li><a class="sub"><span class="name">소금·설탕·향신료</span></a></li>
                                                            <li><a class="sub"><span class="name">밀가루·가루·믹스</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 면,양념,오일 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 생수,음료,우유,커피 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/7.beverage_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/7.beverage.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">생수·음료·우유·커피</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">생수·탄산수</span></a></li>
                                                            <li><a class="sub"><span class="name">음료·주스</span></a></li>
                                                            <li><a class="sub"><span class="name">우유·두유·요거트</span></a></li>
                                                            <li><a class="sub"><span class="name">커피</span></a></li>
                                                            <li><a class="sub"><span class="name">차</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 생수,음료,우유,커피 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 간식,과자,떡 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/9.snack_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/9.snack.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">간식·과자·떡</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">과자·스낵·쿠키</span></a></li>
                                                            <li><a class="sub"><span class="name">초콜릿·젤리·캔디</span></a></li>
                                                            <li><a class="sub"><span class="name">떡·한과</span></a></li>
                                                            <li><a class="sub"><span class="name">아이스크림</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 간식,과자,떡 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 베이커리,치즈,델리 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/10.bakery_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/10.bakery.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">베이커리·치즈·델리</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">식빵·빵류</span></a></li>
                                                            <li><a class="sub"><span class="name">잼·버터·스프레드</span></a></li>
                                                            <li><a class="sub"><span class="name">케이크·파이·디저트</span></a></li>
                                                            <li><a class="sub"><span class="name">치즈</span></a></li>
                                                            <li><a class="sub"><span class="name">델리</span></a></li>
                                                            <li><a class="sub"><span class="name">올리브·피클</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 베이커리,치즈,델리 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 건강식품 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/11.healthyfood_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/11.healthyfood.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">건강식품</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">영양제</span></a></li>
                                                            <li><a class="sub"><span class="name">유산균</span></a></li>
                                                            <li><a class="sub"><span class="name">홍삼·인삼·꿀</span></a></li>
                                                            <li><a class="sub"><span class="name">건강즙·건강음료</span></a></li>
                                                            <li><a class="sub"><span class="name">건강분말·건강환</span></a></li>
                                                            <li><a class="sub"><span class="name">다이어트·이너뷰티</span></a></li>
                                                            <li><a class="sub"><span class="name">유아동</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 건강식품 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 생활용품,리빙,캠핑 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/12.softener_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/12.softener.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">생활용품·리빙·캠핑</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">휴지·티슈</span></a></li>
                                                            <li><a class="sub"><span class="name">여성·위생용품</span></a></li>
                                                            <li><a class="sub"><span class="name">세제·정소용품</span></a></li>
                                                            <li><a class="sub"><span class="name">화훼·인테리어소품</span></a></li>
                                                            <li><a class="sub"><span class="name">의약외품·마스크</span></a></li>
                                                            <li><a class="sub"><span class="name">생활잡화·문구</span></a></li>
                                                            <li><a class="sub"><span class="name">캠핑용품</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 생활용품,리빙,캠핑 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 스킨케어,메이크업 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/13.makeup_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/13.makeup.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">스킨케어·메이크업</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">스킨·미스트·패드</span></a></li>
                                                            <li><a class="sub"><span class="name">에센스·앰플·로션</span></a></li>
                                                            <li><a class="sub"><span class="name">크림·오일</span></a></li>
                                                            <li><a class="sub"><span class="name">클렌징</span></a></li>
                                                            <li><a class="sub"><span class="name">마스크팩</span></a></li>
                                                            <li><a class="sub"><span class="name">선케어</span></a></li>
                                                            <li><a class="sub"><span class="name">메이크업</span></a></li>
                                                            <li><a class="sub"><span class="name">뷰티소품·기기</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 스킨케어,메이크업 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 헤어,바디,구강 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/14.hair.body.tooth_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/14.hair.body.tooth.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">헤어·바디·구강</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">구강·면도</span></a></li>
                                                            <li><a class="sub"><span class="name">샴푸·컨디셔너</span></a></li>
                                                            <li><a class="sub"><span class="name">트리트먼트·팩</span></a></li>
                                                            <li><a class="sub"><span class="name">헤어에센스·염모</span></a></li>
                                                            <li><a class="sub"><span class="name">바디워시·스크럽</span></a></li>
                                                            <li><a class="sub"><span class="name">바디로션·크림</span></a></li>
                                                            <li><a class="sub"><span class="name">핸드·립·데오</span></a></li>
                                                            <li><a class="sub"><span class="name">향수·디퓨저</span></a></li>
                                                            <li><a class="sub"><span class="name">헤어·바디소품</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 헤어,바디,구강 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 주방용품 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/15.kitchen.png" alt="카테고리 아이콘" class="ico_on">
                                                                <img src="../../img/15.kitchen_b.png" alt="카테고리 아이콘" class="ico_off">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">주방용품</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">주방소모품·잡화</span></a></li>
                                                            <li><a class="sub"><span class="name">주방·조리도구</span></a></li>
                                                            <li><a class="sub"><span class="name">냄비·팬·솥</span></a></li>
                                                            <li><a class="sub"><span class="name">보관용기·텀블러</span></a></li>
                                                            <li><a class="sub"><span class="name">식기·테이블웨어</span></a></li>
                                                            <li><a class="sub"><span class="name">컵·잔·커피도구</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 주방용품 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 가전제품 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/16.home appliances_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/16.home appliances.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">가전제품</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">주방가전</span></a></li>
                                                            <li><a class="sub"><span class="name">생활가전</span></a></li>
                                                            <li><a class="sub"><span class="name">계절가전</span></a></li>
                                                            <li><a class="sub"><span class="name">디지털·PC</span></a></li>
                                                            <li><a class="sub"><span class="name">대형·설치가전</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 가전제품 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 베이비,키즈 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/17.feeding-bottle_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/17.feeding-bottle_b.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">베이비·키즈</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">분유·간편 이유식</span></a></li>
                                                            <li><a class="sub"><span class="name">이유식 재료</span></a></li>
                                                            <li><a class="sub"><span class="name">간식·음식·음료</span></a></li>
                                                            <li><a class="sub"><span class="name">건강식품</span></a></li>
                                                            <li><a class="sub"><span class="name">이유·수유용품</span></a></li>
                                                            <li><a class="sub"><span class="name">기저귀·물티슈</span></a></li>
                                                            <li><a class="sub"><span class="name">세제·위생용품</span></a></li>
                                                            <li><a class="sub"><span class="name">스킨·구강케어</span></a></li>
                                                            <li><a class="sub"><span class="name">완구·잡화류</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 베이비,키즈 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 반려동물 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/18.pet-food_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/18.pet-food.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">반려동물</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu">
                                                            <li><a class="sub"><span class="name">강아지 간식</span></a></li>
                                                            <li><a class="sub"><span class="name">강아지 주식</span></a></li>
                                                            <li><a class="sub"><span class="name">고양이 간식</span></a></li>
                                                            <li><a class="sub"><span class="name">고양이 주식</span></a></li>
                                                            <li><a class="sub"><span class="name">반려동물 용품</span></a></li>
                                                            <li><a class="sub"><span class="name">배변·위생</span></a></li>
                                                            <li><a class="sub"><span class="name">소용량·샘플</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- 반려동물 카테고리 끝--------------------------------------------------------------------------->
                                                    
                                                    <!-- 컬리의 추천 카테고리 시작--------------------------------------------------------------------------->
                                                    <li>
                                                        <a class="menu">
                                                            <span class="icon">
                                                                <img src="../../img/19.best_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/19.best.png" alt="카테고리 아이콘" class="ico_on">
                                                            </span>
                                                            <span class="tit">
                                                                <span class="txt">컬리의 추천</span>
                                                            </span>
                                                        </a>
                                                        <ul class="sub_menu recommend">
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">호텔 예약</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">홈캉스</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">식단관리</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">간편한 아침식사</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">재구매 BEST</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">3천원의 행복</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">컬리마트</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">대용량 상품</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">캠핑</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">1인 가구</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">비건</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">오프라인 맛집</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">컬리가 만든 상품</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">Kurly Only</span>
                                                                </a>
                                                            </li><li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">KF365</span>
                                                                </a>
                                                            </li><li>
                                                                <a class="sub">
                                                                    <span class="thumb" style="background-image:url(#);"><img src="#"></span>
                                                                    <span class="name">1% Table</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- 컬리의 추천 카테고리 끝--------------------------------------------------------------------------->
                                                </ul>
                                            </div>
                                        </div>                  
                                    </li>
                                    <li class="menu2 hover">
                                        <a href="#" class="link"><span class="txt">신상품</span></a>
                                    </li>
                                    <li class="menu3 hover">
                                        <a href="#" class="link"><span class="txt">베스트</span></a>
                                    </li>
                                    <li class="menu4 hover">
                                        <a href="#" class="link"><span class="txt">알뜰 쇼핑</span></a>
                                    </li>
                                    <li class="menu5 hover">
                                        <a href="#" class="link"><span class="txt">특가/혜택</span></a>
                                    </li>
                                </ul>
                                <div id="side_search" class="gnb_search">
                                    <form action="#">
                                        <input type="hidden" name = "searched" value = "Y">
                                        <input type="hidden" name = "log" value="1">
                                        <input type="hidden" name= "skey" value="all">
                                        <input type="hidden" name="hid_pr_text" value>
                                        <input type="hidden" name="hid_link_url" value>
                                        <input type="hidden" id="edit" name="edit" value>
                                        <input type="sword" type="text" id="sword" value required="required" label="검색어" placeholder="검색어를 입력해주세요." class="inp_search">
                                        <input type="image" src="../../img/ico_search_x2.png" class="btn_search">
                                        <div class="init"><button type="button" id="searchInit" class="btn_delete">검색어 삭제하기</button></div>
                                    </form>
                                </div>
                                <div class="cart_count">
                                    <div class="inner_cartcount">
                                        <a href="#" class="btn_cart">
                                            <span class="screen_out">장바구니</span>
                                            <span id="cart_item_count" class="num realtime_cartcount" style="display:none;"></span>                                               
                                        </a>
                                    </div>
                                    <div id="addMsgCart" class="msg_cart">
                                        <span class="point"></span>
                                        <div class="inner_msgcart">
                                            <img src="../../img/ico_cart.png" alt="#" class="thumb">
                                            <p id="msgReaddedItem" class="desc">
                                                <span class="tit"></span>
                                                <span class="txt">
                                                    " 장바구니에 상품을 담았습니다. "
                                                    <span class="repeat">
                                                        "이미 담으신 상품이 있어 추가되었습니다."
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="location_set">
                                    <button type="button" class="btn_location on">배송지 설정하기</button>
                                    <div class="layer_location">
                                        <div class="no_address">
                                            <span class="emph">배송지를 등록</span>
                                            "하고"
                                            <br>
                                            " 구매 가능한 상품을 확인하세요!"
                                            <div class="group_button double">
                                                <button class="btn default login">로그인</button>
                                                <button class="btn active searchAddress"><span class="ico"></span>"주소검색"</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </header>

            <!-- 헤더 끝 ---------------------------------------------------------------------------------------------------------->
        <div class="page_aticle">
            <div id="lnbMenu" class="lnb_menu">
                <div id="bnrCategory" class="bnt_category">
                    <div class="thumb">
                        <img src="../../img/goods_list/vege_bnr.webp" alt="카테고리 배너">
                    </div>
                </div>
                <div class="inner_lnb">
                    <h3 class="tit">채소</h3>
                    <ul class="list on">
                        <li><a href="#">전체보기</a></li>
                        <li><a href="#">친환경</a></li>
                        <li><a href="#">고구마·감자·당근</a></li>
                        <li><a href="#">시금치·쌈채소·나물</a></li>
                        <li><a href="#">브로콜리·파프리카·양배추</a></li>
                        <li><a href="#">양파·대파·마늘·배추</a></li>
                        <li><a href="#">오이·호박·고추</a></li>
                        <li><a href="#">냉동·이색·간편채소</a></li>
                        <li><a href="#">콩나물·버섯</a></li>
                    </ul>
                </div>
            </div>
            <div id="goodsList" class="page_section section_goodslist">
                <div class="list_ability">
                    <div class="sort_menu">
                        <div>
                            <p class="count"><span class="inner_count">총 120개</span></p>
                            <div class="select_type">
                                <a href="#" class="name_select">추천순</a> <!--display:none-->
                                <ul class="list">
                                    <li class="item_recommend">
                                        <a class="on">추천순</a>
                                        <div class="recommend">
                                            <div id="layerRecommend" class="layer_recommend">
                                                <p class="desc">
                                                    "검색어 적합성과 소비자 인기도(판매량,판매금액,"
                                                    <br>"조회수 등)를 종합적으로 고려한 순서입니다."
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a>신상품순</a></li>
                                    <li><a>인기상품순</a></li>
                                    <li><a>혜택순</a></li>
                                    <li><a>낮은 가격순</a></li>
                                    <li><a>높은 가격순</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list_goods">
                    <div class="inner_listgoods">
                        <ul class="list">
                            <!--상품리스트 안에서 반복되는 li 구조 시작-------------------------------------------->
                            <li class="item">
                                <div class="thumb">
                                    <a class="img" style="background-image: url(../../img/goods_list/mushPowder.jpg);"><img src="../../img/goods_list/mushPowder.jpg" alt="표고버섯가루"></a>
                                    <div class="group_btn">
                                        <button type="button" class="btn btn_cart">
                                            <span class="screen_out"><!--알 수 없는 숫자--></span>
                                        </button>
                                    </div>
                                </div>
                                <a class="info">
                                    <span class="name">장흥 표고 버섯 가루 70g</span>
                                    <span class="cost"><span class="price">5,490원</span></span>
                                    <span class="desc">솔솔 뿌리는 표고의 감칠맛</span>
                                    <span class="tag"></span>
                                </a>
                            </li>

                            <li class="item">
                                <div class="thumb">
                                    <a class="img" style="background-image: url(../../img/goods_list/mushPowder.jpg);"><img src="../../img/goods_list/mushPowder.jpg" alt="표고버섯가루"></a>
                                    <div class="group_btn">
                                        <button type="button" class="btn btn_cart">
                                            <span class="screen_out"><!--알 수 없는 숫자--></span>
                                        </button>
                                    </div>
                                </div>
                                <a class="info">
                                    <span class="name">장흥 표고 버섯 가루 70g</span>
                                    <span class="cost"><span class="price">5,490원</span></span>
                                    <span class="desc">솔솔 뿌리는 표고의 감칠맛</span>
                                    <span class="tag"></span>
                                </a>
                            </li>

                            <li class="item">
                                <div class="thumb">
                                    <a class="img" style="background-image: url(../../img/goods_list/mushPowder.jpg);"><img src="../../img/goods_list/mushPowder.jpg" alt="표고버섯가루"></a>
                                    <div class="group_btn">
                                        <button type="button" class="btn btn_cart">
                                            <span class="screen_out"><!--알 수 없는 숫자--></span>
                                        </button>
                                    </div>
                                </div>
                                <a class="info">
                                    <span class="name">장흥 표고 버섯 가루 70g</span>
                                    <span class="cost"><span class="price">5,490원</span></span>
                                    <span class="desc">솔솔 뿌리는 표고의 감칠맛</span>
                                    <span class="tag"></span>
                                </a>
                            </li>

                            <li class="item">
                                <div class="thumb">
                                    <a class="img" style="background-image: url(../../img/goods_list/mushPowder.jpg);"><img src="../../img/goods_list/mushPowder.jpg" alt="표고버섯가루"></a>
                                    <div class="group_btn">
                                        <button type="button" class="btn btn_cart">
                                            <span class="screen_out"><!--알 수 없는 숫자--></span>
                                        </button>
                                    </div>
                                </div>
                                <a class="info">
                                    <span class="name">장흥 표고 버섯 가루 70g</span>
                                    <span class="cost"><span class="price">5,490원</span></span>
                                    <span class="desc">솔솔 뿌리는 표고의 감칠맛</span>
                                    <span class="tag"></span>
                                </a>
                            </li>

                            <li class="item">
                                <div class="thumb">
                                    <a class="img" style="background-image: url(../../img/goods_list/mushPowder.jpg);"><img src="../../img/goods_list/mushPowder.jpg" alt="표고버섯가루"></a>
                                    <div class="group_btn">
                                        <button type="button" class="btn btn_cart">
                                            <span class="screen_out"><!--알 수 없는 숫자--></span>
                                        </button>
                                    </div>
                                </div>
                                <a class="info">
                                    <span class="name">장흥 표고 버섯 가루 70g</span>
                                    <span class="cost"><span class="price">5,490원</span></span>
                                    <span class="desc">솔솔 뿌리는 표고의 감칠맛</span>
                                    <span class="tag"></span>
                                </a>
                            </li>

                            <li class="item">
                                <div class="thumb">
                                    <a class="img" style="background-image: url(../../img/goods_list/mushPowder.jpg);"><img src="../../img/goods_list/mushPowder.jpg" alt="표고버섯가루"></a>
                                    <div class="group_btn">
                                        <button type="button" class="btn btn_cart">
                                            <span class="screen_out"><!--알 수 없는 숫자--></span>
                                        </button>
                                    </div>
                                </div>
                                <a class="info">
                                    <span class="name">장흥 표고 버섯 가루 70g</span>
                                    <span class="cost"><span class="price">5,490원</span></span>
                                    <span class="desc">솔솔 뿌리는 표고의 감칠맛</span>
                                    <span class="tag"></span>
                                </a>
                            </li>

                            <li class="item">
                                <div class="thumb">
                                    <a class="img" style="background-image: url(../../img/goods_list/mushPowder.jpg);"><img src="../../img/goods_list/mushPowder.jpg" alt="표고버섯가루"></a>
                                    <div class="group_btn">
                                        <button type="button" class="btn btn_cart">
                                            <span class="screen_out"><!--알 수 없는 숫자--></span>
                                        </button>
                                    </div>
                                </div>
                                <a class="info">
                                    <span class="name">장흥 표고 버섯 가루 70g</span>
                                    <span class="cost"><span class="price">5,490원</span></span>
                                    <span class="desc">솔솔 뿌리는 표고의 감칠맛</span>
                                    <span class="tag"></span>
                                </a>
                            </li>
                            <!--상품리스트 안에서 반복되는 li 구조 끝-------------------------------------------->
                        </ul>
                    </div>
                </div>
                <div class="layout-pagination">
                    <div class="pagediv">
                        <a href="#" class="layout-pagination-button layout-pagination-first-page">맨 처음 페이지로 가기</a>
                        <a href="#" class="layout-pagination-button layout-pagination-prev-page">이전 페이지로 가기</a>
                        <!-- span > a 구조가 페이지 넘버마다 반복되는데 현재페이지는 자동으로 strong처리됨
                            한 페이지당 최대 10개의 페이지 넘버가 존재 -->
                        <span><a class="layout-pagination-button layout-pagination-number">1</a></span>
                        <span><a class="layout-pagination-button layout-pagination-number">2</a></span>
                        <span><a class="layout-pagination-button layout-pagination-number">3</a></span>
                        <span><a class="layout-pagination-button layout-pagination-number">4</a></span>
                        <span><a class="layout-pagination-button layout-pagination-number">5</a></span>
                        <a href="#" class="layout-pagination-button layout-pagination-next-page">다음 페이지로 가기</a>
                        <a href="#" class="layout-pagination-button layout-pagination-last-page">맨 끝 페이지로 가기</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- footer ------------------------------------------------------------------------------------------>
    <footer id="footer" style="opacity: 1;">
                <div class="inner_footer">
                    <div class="footer_cc">
                        <h2 class="tit_cc">고객행복센터</h2>
                        <div class="cc_view cc_call">
                            <h3>
                                <span class="tit">1644-1107</span>
                            </h3>
                            <dl class="list">
                                <dt>365고객센터</dt>
                                <dd>오전 7시 - 오후 7시</dd>
                            </dl>
                        </div>
                        <div class="cc_view cc_kakao">
                            <h3>
                                <a class="tit" href="#none">카카오톡 문의</a>
                            </h3>
                            <script type="text/javascript">
                                $('.cc_kakao .tit').on('click',function(e){
                                    e.preventDefault();
                                    KurlyTracker.setAction('select_bottom_kakao_button').sendData();
                                    $.ajax({
                                        type: "GET",
                                        url: apiDomain+'/v1/mypage/asks/confirm/kakao',
                                        dataType: 'json',
                                        success: function(data) {
                                            if(data.data.ok_button_action_url.indexOf('https://api.happytalk.io/') > -1){
                                                if(confirm('['+data.data.title+'] '+data.data.message)) window.open(data.data.ok_button_action_url,'_blank');
                                            }else{
                                                alert(data.data.title+'\n'+data.data.message);
                                            }
                                        }
                                    })
                                });                          
                            </script>
                            <dl class="list">
                                <dt>365고객센터</dt>
                                <dd>오전 7시 - 오후 7시</dd>
                            </dl>
                        </div>
                        <div class="cc_view cc_qna">
                            <h3>
                                <a href="#none" onclick="KurlyTrackerLink('../shop/mypage/mypage_qna_register.php?mode=add_qna', 'select_bottom_onebyone_button')" class="tit">1:1 문의</a>
                            </h3>
                            <dl class="list">
                                <dt>24시간 접수 가능</dt>
                                <dd>고객센터 운영시간에 순차적으로 답변해드리겠습니다.</dd>
                            </dl>
                        </div>
                        <div class="cc_view cc_bulkorder">
                            <h3>
                                <a href="#" class="tit">대량주문 문의</a>
                            </h3>
                            <p class="txt">비회원의 경우 메일로 문의 바랍니다.</p>
                        </div>
                    </div>
                    <div class="company">
                        <ul class="list">
                            <li>
                                <a class="link" href="#">컬리소개</a>
                            </li>
                            <li>
                                <a class="link" href="https://www.youtube.com/embed/WEep7BcboMQ?rel=0&showinfo=0&wmode=opaque&enablejsapi=1" onclick="window.open(this.href, 'pop', 'width=1330,height=660,scrollbars=yes');return false;">컬리소개영상</a>
                            </li>
                            <li>
                                <a class="link" href="https://marketkurly.recruiter.co.kr/appsite/company/index" target="_blank">인재채용</a>
                            </li>
                            <li>
                                <a class="link" href="#">이용약관</a>
                            </li>
                            <li>
                                <a class="link emph" href="#">개인정보처리방침</a>
                            </li>
                            <li>
                                <a class="link" href="#">이용안내</a>
                            </li>
                        </ul>
                        법인명 (상호) : 주식회사 컬리
                        <span class="bar">|</span>
                        사업자등록번호 : 261-81-23567
                        <a href="https://www.ftc.go.kr/bizCommPop.do?wrkr_no=2618123567&apv_perm_no=" target="_blank" class="link">사업자정보 확인</a>
                        <br>
                        통신판매업 : 제 2018-서울강남-01646 호
                        <span class="bar">|</span>
                        개인정보보호책임자 : 이원준
                        <br>
                        주소 : 서울특별시 강남구 테헤란로 133, 18층(역삼동)
                        <span class="bar">|</span>
                        대표이사 : 김슬아
                        <br>
                        입점문의 : 
                        <a href="https://forms.gle/oKMAe1SaicqMX3SC9" target="_blank" class="link">입점문의하기</a>
                        <span class="bar">|</span>
                        제휴문의 : 
                        <a href="mailto:business@kurlycorp.com" class="link">business@kurlycorp.com</a>
                        <br>
                        채용문의 : 
                        <a href="mailto:recruit@kurlycorp.com" class="link">recruit@kurlycorp.com</a>
                        <br>
                        팩스 : 070 - 7500 - 6098
                        <span class="bar">|</span>
                        이메일 : 
                        <a href="mailto:help@kurlycorp.com" class="link">help@kurlycorp.com</a>
                        <br>
                        대량주문 문의 : 
                        <a href="mailto:kurlygift@kurlycorp.com" class="link">kurlygift@kurlycorp.com</a>
                        <em class="copy">© KURLY CORP. ALL RIGHTS RESERVED</em>
                        <ul class="list_sns">
                            <li>
                                <a href="https://instagram.com/marketkurly/" class="link_sns" target="_blank">
                                    <img src="./img/ico_instagram.png" alt="마켓컬리 인스타그램 바로가기">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/marketkurly" class="link_sns" target="_blank">
                                    <img src="./img/ico_fb.png" alt="마켓컬리 페이스북 바로가기">
                                </a>
                            </li>
                            <li>
                                <a href="https://blog.naver.com/marketkurly" class="link_sns" target="_blank">
                                    <img src="./img/ico_blog.png" alt="마켓컬리 네이버블로그 바로가기">
                                </a>
                            </li>
                            <li>
                                <a href="https://m.post.naver.com/marketkurly" class="link_sns" target="_blank">
                                    <img src="./img/ico_naverpost.png" alt="마켓컬리 포스트 바로가기">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCfpdjL5pl-1qKT7Xp4UQzQg" class="link_sns lst" target="_blank">
                                    <img src="./img/ico_youtube.png" alt="마켓컬리 유튜브 바로가기">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer_link">
                    <div class="authentication">
                        <a href="#none" onclick="popup('https://res.kurly.com/pc/img/1909/img_isms.jpg',550,700);return false;" class="mark" target="_blank">
                            <img src="../../img/logo_isms.png" alt="isms 로고" class="logo">
                            <p class="txt">
                                [인증범위] 마켓컬리 쇼핑몰 서비스 개발 · 운영
                                <br>
                                [유효기간] 2019.04.01 ~ 2022.03.31
                            </p>
                        </a>
                        <a href="#none" onclick="popup('https://www.eprivary.or.kr/front/certifiedSiteMark/certifiedSiteMarkPopup.do?certCmd=EP&certNum=2021-EP-R003',527,720);return false;" class="mark" target="_blank">
                            <img src="../../img/logo_eprivacyplus.png" alt="eprivacy plus 로고" class="logo">
                            <p class="txt">
                                개인정보보호 우수 웹사이트 · 
                                <br>
                                개인정보처리시스템 인증 (ePRIVACY PLUS)
                            </p>
                        </a>
                        <a href="#none" onclick="popup('http://pgweb.uplus.co.kr/ms/escrow/s_escrowYn.do?mertid=go_thefarmers',460,550);return false;" class="mark lguplus" target="_blank">
                            <img src="../../img/logo_payments.png" alt="payments 로고" class="logo">
                            <p class="txt">
                                고객님의 안전거래를 위해 현금 등으로 결제 시 저희 쇼핑몰에서 가입한
                                <br>
                                토스 페이먼츠 구매안전(에스크로) 서비스를 이용하실 수 있습니다.
                            </p>
                        </a>
                    </div>
                </div>
            </footer>
        </section>
    </main>
</body>