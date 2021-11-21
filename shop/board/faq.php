<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마켓컬리 :: 내일의 장보기, 마켓컬리</title>
    <link rel="stylesheet" href="../../CSS/common.css">
    <link rel="stylesheet" href="../../CSS/Service_center.css">
    <link rel="stylesheet" href="../../CSS/faq.css">
</head>
<body >
<div id="wrap">
    <div id="pos_scroll"></div>
    <div id="container">
        <!-- 헤더 시작-------------------------------------------------------------------->
            <header id="header">
                <div id="userMenu">
                    <ul class="listMenu">
                        <li class="menu"><a href="#" class="linkMenu">회원가입</a></li>
                        <li class="menu"><a href="#" class="linkMenu">로그인</a></li>
                        <li class="menu lst">
                            <a href="service_center.php" class="linkMenu">고객센터</a>
                            <ul class="sub">
                                <li><a href="service_center.php" onClick="">공지사항</a></li>
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
                        <a href="#" class="link_main">
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
                                                        <a class="menu">
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
                                                            <li><a class="sub"><span class="name">치금치·쌈채소·나물</span></a></li>
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
                                                                <img src="../../img/15.kitchen_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="../../img/15.kitchen.png" alt="카테고리 아이콘" class="ico_on">
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
            <!-- 헤더 끝-------------------------------------------------------------------->

            <!--main 시작 --------------------------------------------------->
            <div id="main">
                <div id="content">
                    <!-- 사이드 퀵 메뉴 시작 -->
                    <div id="qnb" class="quick-navigation" style="top: 70px;">
                        <div class="bnr_qnb" id="brnQuick">
                            <a href="#" id="brnQuickObj">
                                <img class="thumb" src="../../img/bnr_quick.png" alt="퀄리티있게 샛별배송">
                            </a>
                        </div>
                        <script>
                            var brnQuick = {
                                nowTime : function(){
                                    $.ajax({
                                        url : campaginUrl + 'pc/service/bnr_quick.html'
                                    }).done(function(result){
                                        $('#brnQuick').html(result);
                                    });
                                }
                            }
                        </script>
                        <div class="side_menu">
                            <a href="#" class="link_menu">등급별 혜택</a>
                            <a href="#" class="link_menu">레시피</a>
                            <a href="#" class="link_menu">베스트 후기</a>
                        </div>
                        <div class="side_recent" style="display: none;">
                            <strong class="tit">최근 본 상품</strong>
                            <div class="list_goods" data-height="209" style="height: 0px;">
                                <ul class="list"></ul>
                            </div>
                            <button type="button" class="btn btn_up off">최근 본 상품 위로 올리기</button>
                            <button type="button" class="btn btn_down off">최근 본 상품 아래로 내리기</button>
                        </div>
                        <script>
                            var getGoodsRecent = (function(){
                                var i, len, getGoodsRecent, item, _nowTime = '';

                                _goodsRecent();
                                function _goodsRecent(){
                                    if(localStorage.getItem('goodsRecent') === null){
                                        return false;
                                    }
                                    try{
                                        getGoodsRecent = JSON.parse(localStorage.getItem("goodsRecent"));
                                        len = getGoodsRecent.length;
                                        if(addDays(getGoodsRecent[len - 1].time, 1) < _nowTime){
                                            localStorage.removeItem('goodsRecent');
                                        }else{
                                            for(i = 0; 1 < len; i++){
                                                item = '<li><a class="link_goods" href="/shop/goods/goods_view.php?goodsno=' + getGoodsRecent[i].no + '"><img src="' + getGoodsRecent[i].thumb + '" alt=""></a></li>';
                                                $('.side_recent .list').append(item);
                                            }
                                            $('.side_recent').show();
                                        }
                                    } catch(e){
                                        console.log("JSON parse error from the Quick menu goods list!!!", e);
                                    }
                                }

                                function addDays(date, days){
                                    var result = new Date(date);
                                    result.setDate(result.getDate() + days);
                                    return result.getTime();
                                }
                            })();
                        </script>
                    </div>
                    <!-- 사이드 퀵 메뉴 끝 -->

                    <div class="page_aticle aticle_type2">
                        <!-- 좌측 고객센터 목록 시작 -->
                        <div id="snb" class="snb_cc">
                            <h2 class="tit_snb">고객센터</h2>
                            <div class="inner_snb">
                                <ul class="list_menu">
                                    <li>
                                        <a href="list.php">공지사항</a>
                                    </li>
                                    <li class="on">
                                        <a href="./FAQ.php" onclick="KurlyTrackerLink('/shop/service/faq.php', 'select_service_frequently_qna')">자주하는 질문</a>
                                    </li>
                                    <li>
                                        <a href="./mypage_qna.php" onclick="KurlyTrackerLink('/shop/mypage/mypage_qna.php', 'select_service_personal_inquiry_history')">1:1문의</a>
                                    </li>
                                    <li>
                                        <a href="../main/bulk_order.php" onclick="KurlyTrackerLink('/shop/main/html.php?htmid=mypage/bulk_order.htm', 'select_service_bulk_order')">대량주문 문의</a>
                                    </li>
                                    <li>
                                        <a href="./offer.php" onclick="KurlyTrackerLink('/shop/mypage/offer.php', 'select_service_product_offer')">상품 제안</a>
                                    </li>
                                    <li>
                                        <a href="packing.php" onclick="KurlyTrackerLink('/shop/mypage/echo_packing.php', 'select_service_eco_packing_feedback')">에코포장 피드백</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="/shop/mypage/mypage_qna_register.php?mode=add_qna" class="link_inquire">
                                <span class="emph">도움이 필요하신가요 ?</span>
                                " 1:1 문의하기"
                            </a>
                        </div>
                        <!-- 좌측 고객센터 목록 끝 -->

                        <!-- 공지사항 게시판 시작 -->
                        <form name="frmList" id="form" method="get"  action="?">
                            <div class="page_section">
                                <div class="head_aticle">
                                    <h2 class="tit">
                                        자주하는 질문
                                        <span class="tit_sub">고객님들께서 가장 자주하시는 질문을 모았습니다.</span>
                                    </h2>
                                </div>
                                <div class="search_data">
                                    <a href="#none" class="btn_layer">
                                        선택
                                    </a>
                                    <ul class="layer_search" style="display: none;">
                                        <li>
                                            <a href="#none" @click="searchResult" data-value="01" data-selected="">회원</a>
                                        </li>
                                        <li>
                                            <a href="#none" @click="searchResult" data-value="02" data-selected="">주문 · 결제 · 대량주문</a>
                                        </li>
                                        <li>
                                            <a href="#none" @click="searchResult" data-value="03" data-selected="">취소 · 교환 · 반품</a>
                                        </li>
                                        <li>
                                            <a href="#none" @click="searchResult" data-value="04" data-selected="">배송 · 포장 · 상품</a>
                                        </li>
                                        <li>
                                            <a href="#none" @click="searchResult" data-value="05" data-selected="">이벤트 · 쿠폰 · 적립금</a>
                                        </li>
                                        <li>
                                            <a href="#none" @click="searchResult" data-value="07" data-selected="">서비스 이용</a>
                                        </li>
                                    </ul>
                                    <input type="hidden" name="sitemcd" value>
                                </div>
                                <div class="xans-element- xans-myshop xans-myshop-couponserial">
                                        <table width="100%" class="xans-board-listheader">
                                            <tbody>
                                                <tr>
                                                    <th width="70" class="input_txt">번호</th>
                                                    <th width="135" class="input_txt">카테고리</th>
                                                    <th class="input_txt">제목</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq7">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">66</td>
                                                            <td width="135" align="center">회원</td>
                                                            <td style="cursor: pointer">아이디, 비밀번호를 잊어버렸습니다.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 아이디, 비밀번호 찾기 안내"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 하기 경로를 통해 아이디 및 비밀번호 찾기가 가능하며, 임시 비밀번호의 경우 회원가입 시 등록한 이메일 주소로 발송 됩니다."
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 컬리홈 상단 [로그인] > 화면 아래 [아이디 찾기] [비밀번호 찾기]"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 아래 탭에서 [마이컬리] > 로그인 화면 아래 [아이디 찾기] [비밀번호 찾기]"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 가입시 기재한 메일 주소가 기억나지 않으시거나 오류가 발생하는 경우 고객센터로 문의 바랍니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 상담시에는 고객님의 개인정보보호를 위해 기존에 사용하시던 비밀번호는 안내가 불가하며, 개인정보 확인 후 임시비밀번호를 설정해드립니다.""
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_123">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">65</td>
                                                            <td width="135" align="center">서비스 이용</td>
                                                            <td style="cursor: pointer">1:1 게시판으로 문의 남기는 방법은 없나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 1:1게시판 상담 문의 방법"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 하기 경로를 통해 문의/불만 내용을 남겨주시면 상담사 확인하여 빠르게 도움 드리도록 하겠습니다."
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 컬리홈 상단 고객센터 클릭 > 1:1 문의 하기"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 마이컬리 > 주문 내역"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    ▣ 제품 하자/ 제품 이상 등으로 반품(환불)이 필요한 경우 사진과 함께 구체적은 내용을 남겨주세요
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_126">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">64</td>
                                                            <td width="135" align="center">이벤트 · 쿠폰 · 적립금</td>
                                                            <td style="cursor: pointer">쿠폰이 있는데 "사용할 수 있는 쿠폰이 없습니다" 라고 없다고 뜹니다.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 쿠폰 사용 오류 발생 시"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 간혹, 모바일 네트워크가 불안정한 경우, 쿠폰을 불러오는 동안 해당 문구가 노출될 수 있습니다. "
                                                                    <br>
                                                                    <br>
                                                                    " 쿠폰이 불러오는 동안 조금 기다려 주시고, 이후에도 동일한 문제가 발생할 경우 고객센터로 문의 바랍니다."
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_128">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">63</td>
                                                            <td width="135" align="center">주문 · 결제 · 대량주문</td>
                                                            <td style="cursor: pointer">(회원) 주문 내역 조회는 어디서 하나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 주문 내역 조회"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 하기 경로를 통해 구매하신 주문건의 이력을 확인할 수 있습니다."
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 컬리홈 상단 [회원명] 클릭 > 주문 내역"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 마이컬리 > 주문 내역"
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_159">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">62</td>
                                                            <td width="135" align="center">배송 · 포장 · 상품</td>
                                                            <td style="cursor: pointer">대형/설치 가전은 어떻게 구매하나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 상품 구매 방법"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 구매 희망 상품 클릭 > 구매 진행 > 구매 완료 후, 판매처 해피콜 안내 > 상세 배송일정 조율 > 배송/설치 진행"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " * 결제 이 후, 상품 배송 관련 문의는 상세페이지 내 판매처로 문의 부탁드립니다."
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 아래 탭에서 [마이컬리] > 로그인 화면 아래 [아이디 찾기] [비밀번호 찾기]"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 상품 모아보기"
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 컬리홈 > 상품 카테고리 > 가전제품 > 대형.설치 가전"
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_166">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">61</td>
                                                            <td width="135" align="center">취소 · 교환 · 반품</td>
                                                            <td style="cursor: pointer">교환(반품) 진행 시, 배송비가 부과 되나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 교환(반품) 진행 시, 배송비 안내"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 단숨변심에 의한 교환/반품 시 배송비 6,000원 (주문건 배송비를 낸 경우, 3,000원)을 고객님께서 부담하셔야합니다."
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " ▶ 가공식품 및 일부 비식품류에 한해서만 반품 가능"
                                                                    <br>
                                                                    <br>
                                                                    " ① 상품에 이상이 없거나 상품의 특성적인 부분인 경우"
                                                                    <br>
                                                                    <br>
                                                                    " ② 단순 변심에 의해 교환 및 반품하는 경우"
                                                                    <br>
                                                                    <br>
                                                                    " ③ 옵션 및 상품을 잘못 선택하여 잘못 주문했을 경우"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " ▶ 판매자 과실 등 상품에 문제로 인해 교환 시 판매자 부담"
                                                                    <br>
                                                                    <br>
                                                                    " ① 수령한 상품이 불량인 경우"
                                                                    <br>
                                                                    <br>
                                                                    " ① 수령한 상품이 불량인 경우"
                                                                    <br>
                                                                    <br>
                                                                    " ② 수령한 상품이 파손된 경우 "
                                                                    <br>
                                                                    <br>
                                                                    " ③ 상품이 상품상세정보와 다른 경우"
                                                                    <br>
                                                                    <br>
                                                                    " ④ 주문한 상품과 다른 상품이 배송된 경우 등"
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_9">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">60</td>
                                                            <td width="135" align="center">회원</td>
                                                            <td style="cursor: pointer">회원정보를 바꾸고 싶습니다.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 회원정보 변경 안내"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 아래 경로를 통해 회원정보를 직접 변경하실 수 있습니다."
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 수정가능 항목: 비밀번호/이름/이메일주소/휴대폰번호/생년월일/성별 (아이디 불가)"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 아래 탭에서 [마이컬리] > 로그인 화면 아래 [아이디 찾기] [비밀번호 찾기]"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 컬리홈 상단 (회원명) > 마이컬리 > 개인 정보 수정"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 아래 탭 마이컬리 > 개인정보 수정 "
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    "[참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 배송지 수정은 [마켓컬리/배송지 관리] 에서 직접 수정하실 수 있습니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 구매 이후, 주문건에 대한 배송지 변경은 고객센터로 문의 바랍니다."
                                                                    <br>
                                                                    └ 샛별 : 배송일 전날밤 11시 / 택배 : 배송일 전날 밤 10시
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_109">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">59</td>
                                                            <td width="135" align="center">서비스 이용</td>
                                                            <td style="cursor: pointer">장바구니에 담은 상품들은 계속 보존되나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 장바구니 담기 저장 유효기간 안내"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 상품을 담은 시점부터 최대 90일간 저장 가능"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " 90일 동안 구매하지 않을 경우, 순차로 장바구니에서 자동 소명되오니 이용해 참고 부탁드립니다."
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_125">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">58</td>
                                                            <td width="135" align="center">이벤트 · 쿠폰 · 적립금</td>
                                                            <td style="cursor: pointer">발급 받은 쿠폰은 어디서 확인할 수 있나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 발급쿠폰 확인 방법"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 로그인 후, 아래 경로를 통해 확인 하실 수 있습니다."
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 홈페이지 상단 [회원명] 클릭 > 마이컬리 > 쿠폰"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 마이컬리 > 쿠폰"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 적립금/쿠폰 등은 컬리 회원대상으로 지급되는 서비스 입니다."
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_127">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">57</td>
                                                            <td width="135" align="center">주문 · 결제 · 대량주문</td>
                                                            <td style="cursor: pointer">(회원) 구매하는 방법이 궁금합니다</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 상품 구매 방법"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 희망 상품 클랙 > 수량 체크 > 장바구니 담기 > 장바구니 확인 > 결제"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 예약일 수령 상품은 바로 구매로 이어지므로 장바구니 담기가 불가합니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 당일 추가 주문 시 합주문은 불가하므로 추가 주문건에 배송비가 부여 될 경우 고객센터로 문의 주세요"
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_158">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">56</td>
                                                            <td width="135" align="center">배송 · 포장 · 상품</td>
                                                            <td style="cursor: pointer">호텔/리조트 예약 상품은 어떻게 이용하나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 상품 구매 방법"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 예약 희망 상품 클릭 > 예약 희망 일자 패키지 옵션 클릭 > 구매하기 > 예약완료"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " * 결제 이 후, 예약관련 문의는 상세페이지 내 판매처로 문의 부탁드립니다."
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 예약상품 마다, 지점마다 조금씩 혜택 옵션이 다를 수 있습니다. 구매 전에 상품 페이지 확인 부탁드립니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 상품 모아보기"
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 컬리홈 > 상품 카테고리 > 맨 마지막 "컬리의 추천" > 호텔예약 클릭"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 컬리APP > 상품 카테고리 > 맨 마지막 "컬리의 추천" > 호텔예약 클릭"
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_165">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">55</td>
                                                            <td width="135" align="center">취소 · 교환 · 반품</td>
                                                            <td style="cursor: pointer">교환(반품) 어떻게 진행 되나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 교환(반품) 진행 방법"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 받으신 상품을 교환(반품) 하실 경우, 교환 사유+문제가 발생한 부분을 확인할 수 있는 사진과 함께 고객센터로 문의 바랍니다. "
                                                                    <br>
                                                                    <br>
                                                                    " - 상담사를 통한 상담 이 후, 교환(반품) 절차가 진행 됩니다."
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 홈페이지 상단 고객센터 > 1:1 문의 또는 홈페이지 하단 1:1문의"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 마이컬리 > 1:1 문의 또는 마이컬리 > 1:1 문의 또는 카카오톡 문의"
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_74">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">54</td>
                                                            <td width="135" align="center">회원</td>
                                                            <td style="cursor: pointer">문자(메일) 수신 거부하고 싶습니다.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 문자/메일 수신 거부 방법 안내"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 컬리홈 상단 [회원명] > 마이컬리 > 개인정보수정 > SMS 수신여부 - 수신안함 > 수정"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 마이컬리 > 개인정보수정 > SMS수신여부 - 수신안함 > 수정"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 직접 변경이 어려우시다면 고객센터로 문의 바랍니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 다만, 수신거부를 하시더라도 주문한 상품에 대한 결제정보, 배송정보와 같이 반드시 필요한 정보를 포함한 문자는 자동으로 발송됩니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 따라서 모든 문자에 대한 수신 거부를 원하시는 경우, 고객님 개인 휴대폰에서 수신거부 (스팸등록) 등 직접 설정해주셔야 합니다."
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_122">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">53</td>
                                                            <td width="135" align="center">서비스 이용</td>
                                                            <td style="cursor: pointer">주문 내역은 어떻게 확인하나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 구매이력 확인 방법"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 주문하신 이력은 하기 경로로 확인 가능합니다."
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " (PC) 컬리홈 > 상단의 (이름) 클릭 > 주문 내역 조회"
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 컬리APP > 하단 마이컬리 > 주문 내역 조회"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 비회원의 경우, 모바일 APP 또는 고객센터를 통해 주문이력을 조회하실 수 있습니다."
                                                                    <br>
                                                                    <br>
                                                                    " * PC에서는 조회가 불가합니다."
                                                                    <br>
                                                                    <br>
                                                                    " (모바일) 컬리APP > 하단 마이컬리 > 비회원 주문 조회 { 주문자명, 주문번호}"
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div>
                                                <table width="100%" class="table_faq" onclick="view_content(this)" id="faq_124">
                                                    <tbody>
                                                        <tr>
                                                            <td width="70" align="center">52</td>
                                                            <td width="135" align="center">이벤트 · 쿠폰 · 적립금</td>
                                                            <td style="cursor: pointer">적립금은 어넺 지급 되나요?</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div style="display: none; padding: 30px; border-top: 1px solid #e6e6e6;">
                                                    <table cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <th style="color: #0000bf; width: 40px; padding-top: 1px;">
                                                                    <img src="../../img/boardimg/faq_a.webp" alt="#">
                                                                </th>
                                                                <td>
                                                                    "■ 적립금 지금 시점"
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " - 주문 결제 : 배송완료 이 후, 일괄 적립금이 지급 됩니다."
                                                                    <br>
                                                                    <br>
                                                                    " - 후기 작성 : 후기 작성 이 후, 영업일 2~3일 내에 지급 됩니다."
                                                                    <br>
                                                                    <br>
                                                                    " - 이벤트 참여 : 이벤트 참여 후, 별도 고지 된 일정에 지급 됩니다."
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    " [참고]"
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 주문 결제 적립금 : 배송비르 제외한 결제금액에 각 고객등급별 적립률을 곱한 금액으로 지급 됩니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 컬리 회원 대상으로 제한 된 서비스 입니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 1원 단위부터 주문서에서 사용 가능 합니다."
                                                                    <br>
                                                                    <br>
                                                                    " ▣ 일부 상품의 경우 적립금 미지급품목이므로 구매 시 참고 바랍니다."
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 1px; border-top: 1px solid #e6e6e6;"></div>
                                        <div class="layout-pagination">
                                            <div class="pagediv">
                                                <a href="/shop/service/FAQ.php?&amp;page=1" class="layout-pagination-button layout-pagination-first-page">맨 처음 페이지로 가기</a>
                                                <a href="/shop/service/FAQ.php?&amp;page=1" class="layout-pagination-button layout-pagination-prev-page">이전 페이지로 가기</a>
                                                <strong class="layout-pagination-button layout-pagination-number __active">1</strong>
                                                <a href="/shop/service/FAQ.php?&amp;page=2" class="layout-pagination-button layout-pagination-number">2</a>
                                                <a href="/shop/service/FAQ.php?&amp;page=3" class="layout-pagination-button layout-pagination-number">3</a>
                                                <a href="/shop/service/FAQ.php?&amp;page=4" class="layout-pagination-button layout-pagination-number">4</a>
                                                <a href="/shop/service/FAQ.php?&amp;page=5" class="layout-pagination-button layout-pagination-number">5</a>
                                                <a href="/shop/service/FAQ.php?&amp;page=2" class="layout-pagination-button layout-pagination-next-page">다음 페이지로 가기</a>
                                                <a href="/shop/service/FAQ.php?&amp;page=5" class="layout-pagination-button layout-pagination-last-page">맨 끝 페이지로 가기</a>
                                            </div>
                                        </div>
                                        <table class="xans-board-search xans-board-search2">
                                            <tbody>
                                                <tr>
                                                    <td class="input_txt">&nbsp;</td>
                                                    <td>
                                                        <div class="search_bt">
                                                            <input type="image" src="../../img/boardimg/search.webp" align="abmiddle">
                                                            <input type="text" name="sword" value required>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </form>
                        <!-- 공지사항 게시판 끝 -->
                    </div>
                </div>
            </div>
            <!--main 끝 --------------------------------------------------->

            <!-- layerDSR 시작 ------------------------------------------->
            <div id="layerDSR">
                <div class="bg_dim"></div>
                <div class="in_layer">
                    <div class="inner_layer layer_star">
                        <strong class="dsr_result">샛별배송 지역입니다.</strong>
                        <div class="ani">
                            <img data-src="https://res.kurly.com/mobile/img/1908/img_delivery_kurly.png" src="../../img/bg_1x1.png" alt="샛별배송 이미지">
                        </div>
                        <p class="dsr_desc default_cutoff_23_7">
                            <strong class="emph">오늘 밤 11시 전</strong>
                            "까지 주문시"
                            <br>
                            <strong class="emph">다음날 아침 7시</strong>
                            " 이전 도착합니다! "
                        </p>
                        <p class="dsr_desc early_cutoff_20_8">
                            <strong class="emph">오늘 밤 8시 전</strong>
                            "까지 주문시"
                            <br>
                            <strong class="emph">다음날 아침 8시</strong>
                            " 이전 도착합니다! "
                        </p>
                    </div>
                    <div class="inner_layer layer_normal">
                        <strong class="dsr_result">택배배송 지역입니다.</strong>
                        <div class="ani">
                            <img data-src="https://res.kurly.com/mobile/img/1908/img_delivery_car.png" src="../../img/bg_1x1.png" alt="택배배송 이미지">
                        </div>
                        <p class="dsr_desc old_eight">
                            <strong class="emph">밤 8시 전</strong>
                            "까지 주문시"
                            <br>
                            <strong class="emph">다음날</strong>
                            " 도착합니다! "
                        </p>
                        <p class="dsr_desc new_ten">
                            <strong class="emph">밤 10시 전</strong>
                            "까지 주문시"
                            <br>
                            <strong class="emph">다음날</strong>
                            " 도착합니다! "
                        </p>
                        <p class="dsr_notice">일요일은 배송 휴무로 토요일에는 주문 불가</p>
                    </div>
                    <div class="inner_layer layer_none">
                        <strong class="dsr_result">베송 불가 지역입니다.</strong>
                        <div class="ani">
                            <img data-src="https://res.kurly.com/mobile/img/1908/img_delivery_none.png" src="../../img/bg_1x1.png" alt="배송불가 이미지">
                        </div>
                        <p class="dsr_desc">
                            <strong class="emph">도로명 주소</strong>
                            "로 검색하셨다면,"
                            <br>
                            <strong class="emph">지번 주소(구 주소)</strong>
                            "로 다시 시도해 주세요. "
                        </p>
                        <p class="dsr_notice">배송지역을 확장하도록 노력하겠습니다!</p>
                    </div>
                    <div class="layer_btn1">
                        <button type="button" class="btn_close" onclick="$('#layerDSR').hide();$(this).parent().find('.inner_layer').hide();">확인</button>
                    </div>
                    <button type="button" class="layer_close" onclick="$('#layerDSR').hide();$(this).parent().find('.inner_layer').hide();"></button>
                </div>
            </div>
            <!-- layerDSR 끝 ------------------------------------------->

            <!-- 푸터 시작 -->
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
                                <a href="#none" onclick="KurlyTrackerLink('/shop/mypage/mypage_qna_register.php?mode=add_qna', 'select_bottom_onebyone_button')" class="tit">1:1 문의</a>
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
                                    <img src="../../img/ico_instagram.png" alt="마켓컬리 인스타그램 바로가기">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/marketkurly" class="link_sns" target="_blank">
                                    <img src="../../img/ico_fb.png" alt="마켓컬리 페이스북 바로가기">
                                </a>
                            </li>
                            <li>
                                <a href="https://blog.naver.com/marketkurly" class="link_sns" target="_blank">
                                    <img src="../../img/ico_blog.png" alt="마켓컬리 네이버블로그 바로가기">
                                </a>
                            </li>
                            <li>
                                <a href="https://m.post.naver.com/marketkurly" class="link_sns" target="_blank">
                                    <img src="../../img/ico_naverpost.png" alt="마켓컬리 포스트 바로가기">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCfpdjL5pl-1qKT7Xp4UQzQg" class="link_sns lst" target="_blank">
                                    <img src="../../img/ico_youtube.png" alt="마켓컬리 유튜브 바로가기">
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
            <!-- 푸터 끝 -->
    </div>
</div>
</body>
</html>