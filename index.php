<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="/js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <!-- <link href="/lib/jquery.bxslider.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="./CSS/common.css">
    <script>
    $(document).ready(function(){
        $('._slider').bxSlider();
    });
    </script>
    <title>마켓컬리 :: 내일의 장보기, 마켓컬리</title>
</head>
<body>
    <div id="wrap">
        <div id="container">
            <!-- 헤더 시작-------------------------------------------------------------------->
            <header id="header">
                <div id="userMenu">
                    <ul class="listMenu">
                        <li class="menu"><a href="#" class="linkMenu">회원가입</a></li>
                        <li class="menu"><a href="#" class="linkMenu">로그인</a></li>
                        <li class="menu lst">
                            <a href="./img/ico_down_8x5.png" class="linkMenu">고객센터</a>
                            <ul class="sub">
                                <li><a href="#" onClick="">공지사항</a></li>
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
                                <img src="./img/kurlyLogo_x2.png" alt="마켓컬리 로고">
                            </span>
                        </a>
                    </h1>
                    <a href="#" onclick="" class="bnr_delivery">
                        <img src="./img/delivery.png" alt="샛별, 택배 배송안내">
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
                                                                <img src="./img/1.veg_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/1.veg.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/2.fruit_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/2.fruit.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/3.fish_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/3.fish.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/4.meat_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/4.meat.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/5.soup_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/5.soup.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/6.salad_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/6.salad.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/8.sources_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/8.sources.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/7.beverage_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/7.beverage.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/9.snack_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/9.snack.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/10.bakery_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/10.bakery.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/11.healthyfood_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/11.healthyfood.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/12.softener_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/12.softener.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/13.makeup_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/13.makeup.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/14.hair.body.tooth_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/14.hair.body.tooth.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/15.kitchen_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/15.kitchen.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/16.home appliances_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/16.home appliances.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/17.feeding-bottle_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/17.feeding-bottle_b.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/18.pet-food_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/18.pet-food.png" alt="카테고리 아이콘" class="ico_on">
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
                                                                <img src="./img/19.best_b.png" alt="카테고리 아이콘" class="ico_off">
                                                                <img src="./img/19.best.png" alt="카테고리 아이콘" class="ico_on">
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
                                        <input type="image" src="./img/ico_search_x2.png" class="btn_search">
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
                                            <img src="./img/ico_cart.png" alt="#" class="thumb">
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

            <!-- 바디 시작 ----------------------------------------------------------------->
            <main id="main">
                <section id="content">
                    <!-- 사이드 퀵 메뉴 시작 -->
                    <div id="qnb" class="quick-navigation" style="top: 70px;">
                        <div class="bnr_qnb" id="brnQuick">
                            <a href="#" id="brnQuickObj">
                                <img class="thumb" src="./img/bnr_quick.png" alt="퀄리티있게 샛별배송">
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
                    
                    <div id="mainNotice">
                        <div id="mainNoticePop">

                        </div>
                    </div>
                    
                    <!-- 메인 ---------------------------------------------------------------------------------------->
                    <div id="kurlyMain" class="page_article page_main" style="opacity:1;">
                        <h2 class="screen out">마켓컬리 메인</h2>
                        <!-- 롤링베너 시작---------------------------------------------------------------------------------------->
                            <div>
                                <div class="main_type1">
                                    <div class="list_goods">
                                        <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto;">
                                            <!-- bx-viewport를 만들었어니 메인배너 모아짐 -->
                                            <div class="bx-viewport">
                                                <!-- 우선 롤링 어떻게 하는지 몰라서 임시적으로 해당 style="width: 1440px; margin: 0px auto;" 적어 넣었습니다. -->
                                                <ul class="bxslider list">
                                                    <!-- 이미지 비율 때문에 overflow: hidden 값 비활성화 : 여건 -->
                                                    <li data-index="11" class="bx-clone" data-name="main_banner" style="float: left; list-style: none; position: relative; width: 1440px; margin: 0 auto; overflow: hidden;">
                                                        <img src = "./img/pc_img_1583112495.png" class="thumb_goods" >메인배너</a>
                                                    </li>
                                                    <li data-index="1" data-name="main_banner">
                                                        <img src ="./img/pc_img_1621561009.png" class="thumb_goods">메인배너</a>
                                                    </li>
                                                    <li data-index="2" data-name="main_banner">
                                                        <img src="./img/pc_img_1628583839.png" class="thumb_goods" alt="">메인배너</a>
                                                    </li>
                                                    <li data-index="3" data-name="main_banner">
                                                        <img src="./img/pc_img_1633501694.png" class="thumb_goods">메인배너</a>
                                                    </li>
                                                    <li data-index="4"  data-name="main_banner">
                                                        <img src="./img/pc_img_1634285707.png" class="thumb_goods" >메인배너</a>
                                                    </li>
                                                    <li data-index="5"  data-name="main_banner">
                                                        <img src="./img/pc_img_1634523002.png" class="thumb_goods" >메인배너</a>
                                                    </li>
                                                    <li data-index="6" data-name="main_banner">
                                                        <img src="./img/pc_img_1634640525.png" class="thumb_goods">메인배너</a>
                                                    </li>
                                                    <li data-index="7" data-name="main_banner">
                                                        <img src="./img/pc_img_1634640530.png" class="thumb_goods">메인배너</a>
                                                    </li>
                                                    <li data-index="8"  data-name="main_banner">
                                                        <img src="./img/pc_img_1634775416.png" class="thumb_goods" >메인배너</a>
                                                    </li>
                                                    <li data-index="9"  data-name="main_banner">
                                                        <img src="./img/pc_img_1634805265.png" class="thumb_goods">메인배너</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="bx-controls bx-has-controls-direction bx-has-controls-auto">
                                        <div class="bx-controls-direction">
                                            <a href="#" class="bx-prev">Prev</a>
                                            <a href="#" class="bx-prev">Next</a>
                                        </div>
                                        <div class="bx-has-controls-auto">
                                            <div class="box-controls-auto-item">
                                                <a href="#" class="bx-start active">Start</a>
                                            </div>
                                            <div class="box-controls-auto-item">
                                                <a href="#" class="bx-stop">Stop</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!--롤링베너 끝 --------------------------------------------------------------------------------->
                            <!-- 이 상품 어때요? 시작 -->
                            <div>
                                <div class="main_type2">
                                    <div class="product_list">
                                        <div class="tit_goods">
                                            <h3 class="tit">
                                                <span class="name">이 상품 어때요?</span>
                                            </h3>
                                        </div>
                                        <div class="list_goods">
                                            <div class="bx-wrapper" style="max-width: 1050px; margin: 0 auto;">
                                                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 506px;">
                                                    <ul data-title="이 상품 어때요?" data-section="today_recommendation" class="list" style="width: 2215%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <li data-index="1" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <!--↓↓↓↓ <img> 홈페이지에서는 249px에 320px로 렌더가 되는데 여기는 왜 실제 크기인 109px에 145px로 나올까요오?!? -->
                                                                <img src="./img/tomato.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[폰티] 선드라이드 토마토</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">25%</span>"6,375원"
                                                                </span>
                                                                <span class="cost">8,500원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="2" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/lime.png" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">맥시코 생 라임 1개</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">15%</span>"1,147원"
                                                                </span>
                                                                <span class="cost">1,350원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="3" class="cut" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/ssuk.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="4" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/cucumber.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[조선호텔김치] 오이소박이</a>
                                                                </span>
                                                                <span class="price">
                                                                    "26,900원"
                                                                </span>

                                                            </div>
                                                        </li>
                                                        <li data-index="5" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="6" class="cut" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="7" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="8" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="9" class="cut" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="10" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="11" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="12" class="cut" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="13" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="14" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="15" class="cut" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="16" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="17" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="18" class="cut" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="19" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="20" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bx-controls bx-has-controls-direction">
                                                    <div class="bx-controls-direction">
                                                        <a href="#" class="bx-prev disabled">Prev</a>
                                                        <a href="#" class="bx-next">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <!-- 이상품 어때요 끝 -->
                            <!--특가/혜택 시작 ----------------------------------------------------------------------------->
                            <div>
                                <!--↓↓↓↓좌우롤링, 이벤트상품 가격표기x 백그라운드색O main_type3-->
                                <div class="main_type3 bg">
                                    <div class="main_event">
                                        <div class="tit_goods">
                                            <h3 class="tit">
                                                <a href="#" class="name">
                                                    <span class="ico">특가/혜택</span>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="list_goods">
                                            <ul data-title="특가/혜택" data-selection="event" class="list">
                                                <li data-index="1">
                                                    <a class="thumb_goods">
                                                        <!-- 338px * 338px -->
                                                        <img src="./img/bread.jpg" alt="상품이미지" class="thumb">
                                                    </a>
                                                    <div class="info_goods">
                                                        <div class="inner_info">
                                                            <span class="name">
                                                                <a class="txt">건강 빵집 최대 20% 할인</a>
                                                            </span>
                                                            <span class="desc">
                                                                <a class="txt">밀가루가 부담스럽다면</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-index="2">
                                                    <a class="thumb_goods">
                                                        <img src="./img/lg.jpg" alt="상품이미지" class="thumb" >
                                                    </a>
                                                    <div class="info_goods">
                                                        <div class="inner_info">
                                                            <span class="name">
                                                                <a class="txt">최대 20% 할인 + 10% 추가 쿠폰</a>
                                                            </span>
                                                            <span class="desc">
                                                                <a class="txt">엘지생활건강 생필품 BEST</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-index="3">
                                                    <a class="thumb_goods">
                                                        <img src="./img/perfume.jpg" alt="상품이미지" class="thumb" >
                                                    </a>
                                                    <div class="info_goods">
                                                        <div class="inner_info">
                                                            <span class="name">
                                                                <a class="txt">프레그런스 최대 60% 할인</a>
                                                            </span>
                                                            <span class="desc">
                                                                <a class="txt">나만의 향기가 주는 편안함</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                            <!--특가혜택 끝---------------------------------------------------------------------------------------->

                            <!--놓치면 후회할 가격 시작-------------------------------------------------------------------------- -->
                            <div>
                                <div class="main_type2">
                                    <div class="product_list">
                                        <div class="tit_goods">
                                            <h3 class="tit">
                                                <a class="name">
                                                    <span class="ico">놓치면 후회할 가격</span>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="list_goods">
                                            <div class="bx-wrapper" style="max-width: 1050px; margin: 0 auto;">
                                                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 506px;">
                                                    <ul data-title="놓치면 후회할 가격" data-section="today_recommendation" class="list" style="width: 2215%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <li data-index="1" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <span class="global_sticker">
                                                                    <span class="inner_sticker">
                                                                        <span class="bg_sticker" style="background-color: rgb(189, 118, 255); opacity: 0.9;"></span>
                                                                        <span class="txt_sticker">
                                                                            <span>
                                                                                <span class="emph_sticker">+30%쿠폰</span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <img src="./img/face.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1621593044686l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[설화수] [한정수량] 탄력에센셜3종 세트(윤조에센스30ml+12종사은품추가증정)</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">10%</span>"144,000원"
                                                                </span>
                                                                <span class="cost">160,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="2" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/butter.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1622101306785l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[라콩비에트] 플뢰르 드 셀 버터(15gx30개입)</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">25%</span>"26,250원"
                                                                </span>
                                                                <span class="cost">35,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="3" class="cut" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/chicken.jpg" alt="상품이미지" class="thumb" style="background-image: url(&quot;https://img-cf.kurly.com/shop/data/goods/1623201851712l0.jpg&quot;);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[Better me] 냉장 닭가슴살 5종</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">5%</span>"1,710원"
                                                                </span>
                                                                <span class="cost">1,800원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="4" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/dish.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/163348880463l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[르크루제] 한식 2인조 세트 (8pcs 세트)</a>
                                                                <span class="price">
                                                                    <span class="dc">45%</span>"1671,700원"
                                                                </span>
                                                                <span class="cost">294,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="5" class="" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="6" class="cut" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1623912428897l0.jpg);">
                                                            </a>
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[한애가] 담금초 사자발쑥 350ml</a>
                                                                </span>
                                                                <span class="price">
                                                                    <span class="dc">13%</span>"27,650원"
                                                                </span>
                                                                <span class="cost">32,000원</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bx-controls bx-has-controls-direction">
                                                    <div class="bx-controls-direction">
                                                        <a href="#" class="bx-prev disabled">bx-prev</a>
                                                        <a href="#" class="bx-next">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--놓치면 후회할 가격 끝-------------------------------------------------------------------------- -->

                            <!--bnr_main 이벤트 배너 시작------------------------------------------------------------------------->
                            <div>
                                <!--↓↓↓↓이벤트배너 bnr_main-->
                                <div class="bnr_main1" alt="할로윈 간식,소품 최대 30%할인">
                                    <a class="link">
                                        <span class="inner_link">
                                            <img src="">
                                        </span> 
                                    </a>
                                </div>
                            </div>
                            <!--bnr_main 이벤트 배너 끝------------------------------------------------------------------------->


                            <!--MD의 추천------------------------------------------------------------------------------>
                            <div>
                                <div class="main_type2">
                                    <div class="category_type">
                                        <div class="tit_goods"><h3 class="tit">MD의 추천</h3>
                                        </div>
                                        <div class="category_menu">
                                            <div class="bg_category">
                                                <span class="bg_shadow shadow_bofore"></span>
                                                <span class="bg_shadow shadow_after"></span>
                                            </div>
                                            <div class="category">
                                                <ul class="list_category">
                                                    <li data-start="33" data-end="75"><a data-no="907" href="#" class="menu">채소</a></li>
                                                    <li data-start="100" data-end="188"><a data-no="908" href="#" class="menu">과일·견과·쌀</a></li>
                                                    <li data-start="213" data-end="327"><a data-no="909" href="#" class="menu">수산·해산·건어물</a></li>
                                                    <li data-start="353" data-end="424"><a data-no="910" href="#" class="menu">정육·계란</a></li>
                                                    <li data-start="449" data-end="563"><a data-no="911" href="#" class="menu">국·반찬·메인요리</a></li>
                                                    <li data-start="588" data-end="685"><a data-no="912" href="#" class="menu">샐러드·간편식</a></li>
                                                    <li data-start="710" data-end="798"><a data-no="913" href="#" class="menu">면·양념·오일</a></li>
                                                    <li data-start="823" data-end="954"><a data-no="914" href="#" class="menu cut">생수·음료·우유·커피</a></li>
                                                    <li data-start="979" data-end="1067"><a data-no="249" href="#" class="menu">간식·과자·떡</a></li>
                                                    <li data-start="1092" data-end="1219"><a data-no="915" href="#" class="menu">베이커리·치즈·델리</a></li>
                                                    <li data-start="1243" data-end="1311"><a data-no="032" href="#" class="menu">건강식품</a></li>
                                                    <li data-start="1336" data-end="1463"><a data-no="918" href="#" class="menu">생활용품·리빙·캠핑</a></li>
                                                    <li data-start="1488" data-end="1611"><a data-no="233" href="#" class="menu">스킨케어·메이크업</a></li>
                                                    <li data-start="1636" data-end="1737"><a data-no="012" href="#" class="menu">헤어·바디·구강</a></li>
                                                    <li data-start="1762" data-end="1830"><a data-no="916" href="#" class="menu">주방용품</a></li>
                                                    <li data-start="1854" data-end="1922"><a data-no="085" href="#" class="menu">가전제품</a></li>
                                                    <li data-start="1947" data-end="2031"><a data-no="919" href="#" class="menu">베이비·키즈</a></li>
                                                    <li data-start="2056" data-end="2124"><a data-no="991" href="#" class="menu">반려동물</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="list_goods">
                                            <div class="bx-wrapper" style="max-width: 1050px; margin: 0px auto;">
                                                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 462px;">
                                                    <ul data-title="MD의 추천" data-section="md-choice" class="list" style="width: 815%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <li data-index="1" class="" data-name="md_choice" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/sweetp.jpg" alt="상품이미지" class="thumb" style="background-image: url(&quot;https://img-cf.kurly.com/shop/data/goods/1605512383246l0.jpg&quot;);">
                                                            </a> 
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">나주 영산포 '햇' 꿀 밤고구마 3kg</a>
                                                                </span> 
                                                                <span class="price">
                                                                    <span class="dc">13%</span>19,923원</span> 
                                                                <span class="cost">22,900원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="2" class="" data-name="md_choice" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/onion.jpg" alt="상품이미지" class="thumb" style="background-image: url(&quot;https://img-cf.kurly.com/shop/data/goods/1608528305940l0.jpg&quot;);">
                                                            </a> 
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">양파 3kg</a>
                                                                </span> 
                                                                <span class="price">5,690원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="3" class="cut" data-name="md_choice" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/greenonion.jpg" alt="상품이미지" class="thumb" style="background-image: url(&quot;https://img-cf.kurly.com/shop/data/goods/1593568688351l0.jpg&quot;);">
                                                            </a> 
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[KF365] 흙대파 1단</a>
                                                                </span> 
                                                                <span class="price">2,480원</span>
                                                            </div>
                                                        </li>
                                                        <li data-index="4" class="" data-name="md_choice" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods">
                                                                <img src="./img/vegemix.png" alt="상품이미지" class="thumb" style="background-image: url(&quot;https://img-cf.kurly.com/shop/data/goods/1491876649273l0.jpg&quot;);">
                                                            </a> 
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">친환경 채소믹스 500g</a>
                                                                </span> 
                                                                <span class="price">5,900원</span> 
                                                            </div>
                                                        </li>
                                                        <li data-index="5" class="" data-name="md_choice" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods"> 
                                                                <img src="  " alt="상품이미지" class="thumb" style="background-image: url(&quot;https://img-cf.kurly.com/shop/data/goods/1609141186826l0.jpg&quot;);">
                                                            </a> 
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">친환경 당근 500g</a>
                                                                </span> 
                                                                <span class="price">2,990원</span> 
                                                            </div>
                                                        </li>
                                                        <li data-index="6" class="cut" data-name="md_choice" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                            <a class="thumb_goods"> 
                                                                <img src="  " alt="상품이미지" class="thumb" style="background-image: url(&quot;https://img-cf.kurly.com/shop/data/goods/1613703436357l0.jpg&quot;);">
                                                            </a> 
                                                            <div class="info_goods">
                                                                <span class="name">
                                                                    <a class="txt">[KF365] 깐마늘 200g</a>
                                                                </span> 
                                                                <span class="price">2,660원</span> 
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bx-controls bx-controls-direction">
                                                    <div class="bx-controls-direction">
                                                        <a class="bx-prev">Prev</a>
                                                        <a class="bx-next disabled">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!--↓↓↓↓↓↓md추천의 카테고리를 누르면 버튼의 텍스트가 해당카테고리 이름으로 변함↓↓↓↓-->
                                        <div class="link_cate">
                                            <a class="link">
                                                <span class="ico">채소</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--MD의 추천 끝------------------------------------------------------------------------------>

                    <!-- 무제한 적립금 배너 시작 -->
                    <div>
                        <div class="bnr_main2">
                            <img src="#" alt="무제한적립금,참여만해도 적립금 1천원">
                        </div>
                    </div>
                    <!-- 무제한 적립금 배너 끝 -->
                    <!-- 가장 핫한 상품 시작 -->
                    <div>
                        <div class="main_type2">
                            <div class="product_list">
                                <div class="tit_goods">
                                    <h3 class="tit">
                                        <a class="name">
                                            <span class="ico">지금 가장 핫한 상품</span>
                                        </a>
                                    </h3>
                                </div>
                                <div class="list_goods">
                                    <div class="bx-wrapper" tyle="max-width: 1050px; margin: 0px auto;">
                                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 506px;">
                                            <ul data-title="지금 가장 핫한 상품" data-section="theme_goods_21" class="list" style="width: 815%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <li data-index="1" class data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <span class="global_sticker">
                                                        </span>
                                                        <img src="./img/bean_curd.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1634887936221l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[종가집] 국산콩 두부 반모 200g (부침/찌개 겸용)</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">30%</span>
                                                            1,540원
                                                        </span>
                                                        <span class="cost">2,200원</span>
                                                    </div>
                                                </li>
                                                <li data-index="2" class data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <span class="global_sticker">
                                                        </span>
                                                        <img src="./img/fish_cake_soup.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1634878670787l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[와카메] 어묵탕 모듬세트</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">35%</span>
                                                            5,135원
                                                        </span>
                                                        <span class="cost">7,900원</span>
                                                    </div>
                                                </li>
                                                <li data-index="3" class="cut" data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/goosedown.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1632974139245l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[더 조선호텔] 헝가리 사계절 구스다운 3종</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">5%</span>
                                                            817,000원
                                                        </span>
                                                        <span class="cost">860,000원</span>
                                                    </div>
                                                </li>
                                                <li data-index="4" class data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/rib.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1592281489516l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[한일관 X 백년가게] 순살갈비</a>
                                                        </span>
                                                        <span class="price">                                                            
                                                            29,000원
                                                        </span>
                                                    </div>
                                                </li>
                                                <li data-index="5" class data-name="theme_goods_21 "style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/tangerine.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1634620472411l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">'햇' 조생 노지 감귤 2.5kg</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">16%</span>
                                                            9,912원
                                                        </span>
                                                        <span class="cost">11,800원</span>
                                                    </div>
                                                </li>
                                                <li data-index="6" class="cut" data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/fish_roe_soup.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1629180148342l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[프레시지] 연안식당 알폭탄 알탕</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">17%</span>
                                                            15,590원
                                                        </span>
                                                        <span class="cost">18,900원</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bx-controls bx-has-controls-direction">
                                            <div class="bx-controls-direction">
                                                <a class="bx-prev" href>Prev</a>
                                                <a class="bx-next disabled" href>Next</a>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 가장 핫한 상품 끝 -->
                    <!-- 추위가 두렵지 않도록, 계절 가전 시작 -->
                    <div>
                        <div class="main_type2 bg" style="background-color:background-color: rgb(247, 247, 247);">
                            <div class="product_list">
                                <div class="tit_goods">
                                    <h3 class="tit">
                                        <a class="name">
                                            <spa class="ico">추위가 두럽지 않도록, 계절 가전</span>
                                        </a>
                                    </h3>
                                </div>
                                <div class="list_goods">
                                    <div class="bx-wrapper" style="max-width: 1050px; margin: 0px auto;">
                                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 506px;">
                                            <ul data-title="추위가 두렵지 않도록, 계절 가전" data-section="theme_goods_9" class="list" style="width: 815%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);" >
                                                <li data-index="1" class data-name="theme_goods_9" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/air_purifier.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1586421154704l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[아이큐에어] 헬스프로 공기청정기 2종 (HP100/HP250)</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">5%</span>
                                                            1,188,450원 
                                                        </span>
                                                        <span class="cost">1,251,000원</span>
                                                    </div>
                                                </li>
                                                <li data-index="2" class data-name="theme_goods_9" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/humidifier.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1604380767765l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[듀플렉스] 간편세척 초음파 가습기 3.2L DP-6090UH</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">10%</span>
                                                            26,820원
                                                        </span>
                                                        <span class="cost">29,800원</span>
                                                    </div>
                                                </li>
                                                <li data-index="3" class="cut" data-name="theme_goods_9" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/hot_water_mat.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1632987091414l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[경동나비엔] 프리미엄 온수매트 EQM540-KS 킹사이즈</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">3%</span>
                                                            354,050원
                                                        </span>
                                                        <span class="cost">365,000원</span>
                                                    </div>
                                                </li>
                                                <li data-index="4" class data-name="theme_goods_9" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/kettle.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1610589625936l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[라쿠진] 오리엔탈 티팟 2종 LCZ2001</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">5%<span>
                                                            75,050원
                                                        </span>
                                                        <span class="cost">79,000원</span>
                                                    </div>
                                                </li>
                                                <li data-index="5" class data-name="theme_goods_9" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/electricity.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1602051645978l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[보국] 프리미엄 극세사 에어프릴 안심세탁 워셔블 전기요 2종</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">5%<span>
                                                            84,550원
                                                        </span>
                                                        <span class="cost">89,000원</span>
                                                    </div>
                                                </li>
                                                <li data-index="6" class="cut" data-name="theme_goods_9" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/heater.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1634569529317l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[한일] 세라믹 온풍기 히터 HEF-1495</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">5%<span>
                                                            61,750원
                                                        </span>
                                                        <span class="cost">65,000원</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bx-controls bx-has-controls-direction">
                                            <div class="bx-controls-direction">
                                                <a class="bx-prev disabled" href>Prev</a>
                                                    <a class="bx-next" href>Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 추위가 두렵지 않도록, 계절 가전 끝 -->
                    <!-- 컬리가 만든 상품 시작 -->
                    <div>
                        <div class="main_type2">
                            <div class="product_list">
                                <div class="tit_goods">
                                    <h3 class="tit">
                                        <a class="name">
                                            <span class="ico">컬리가 만든 상품</span>
                                        </a>
                                    </h3>
                                </div>
                                <div class="list_goods">
                                    <div class="bx-wrapper" tyle="max-width: 1050px; margin: 0px auto;">
                                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 506px;">
                                            <ul data-title="컬리가 만든 상품" data-section="theme_goods_21" class="list" style="width: 815%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <li data-index="1" class data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/shrimp_cutlet.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1604913852328l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[Kurly's] 간편하게 바삭, 새우까스</a>
                                                        </span>
                                                        <span class="price">4,900원</span>
                                                    </div>
                                                </li>
                                                <li data-index="2" class data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/wet_tissue.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1610532035693l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[Kurly's] 시그니처 물티슈 2종</a>
                                                        </span>
                                                        <span class="price">1,850원</span>
                                                    </div>
                                                </li>
                                                <li data-index="3" class="cut" data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/kimchi.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1621993224201l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[Kurly's] 시원한 배추김치</a>
                                                        </span>
                                                        <span class="price">10,800원</span>
                                                    </div>
                                                </li>
                                                <li data-index="4" class data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/ham.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1596462655754l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[Kurly's] 돈육햄 200g</a>
                                                        </span>
                                                        <span class="price">3,200원</span>
                                                    </div>
                                                </li>
                                                <li data-index="5" class data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/seaweed_rolls.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1622531502246l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[Kurly's] 간편하게 바삭, 야채 김말이</a>
                                                        </span>
                                                        <span class="price">2,900원</span>
                                                    </div>
                                                </li>
                                                <li data-index="6" class="cut" data-name="theme_goods_21" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/vanilla_latte.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1626166688105l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[Kurly's] 에브리빈 바닐라라떼 파우치(190mL X 10팩)</a>
                                                        </span>
                                                        <span class="price">12,000원</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bx-controls bx-has-controls-direction">
                                            <div class="bx-controls-direction">
                                                <a class="bx-prev disabled" href>Prev</a>
                                                <a class="bx-next" href>Next</a>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 컬리가 만든 상품 끝 -->
                    <!-- 365일 최저가 도전 시작 -->
                    <div>
                        <div class="main_type2 bg" style="background-color: rgb(247, 247, 247);">
                            <div class="product_list">
                                <div class="tit_goods">
                                    <h3 class="tit">
                                        <a class="name">
                                            <span class="ico">365일 최저가 도전</span>
                                            <span class="tit_desc">최저가 도전, 365일 언제나 알뜰하게</span>
                                        </a>
                                    </h3>
                                </div>
                                <div class="list_goods">
                                    <div class="bx-wrapper" style="max-width: 1050px; margin: 0px auto;">
                                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 506px;">
                                            <ul data-title="365일 최저가 도전" data-section="theme_goods_11" class="list" style="width: 815%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <li data-index="1" class data-name="theme_goods_11" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/salmon.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1576818398674l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[은하수산] 노르웨이 생연어회 120g (냉장)</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">20%</span>
                                                            8,800원
                                                        </span>
                                                        <span class="cost">11,000원</span>
                                                    </div>
                                                </li>
                                                <li data-index="2" class data-name="theme_goods_11" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/abalone.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1591679368159l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[바븐] 완도 전복 260g 내외 (5마리) (생물)</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">15%</span>
                                                            12,750원
                                                        </span>
                                                        <span class="cost">15,000원</span>
                                                    </div>
                                                </li>
                                                <li data-index="3" class="cut" data-name="theme_goods_11" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/bagel.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1626076681146l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[밀크앤허니] 간편한 베이글 3종</a>
                                                        </span>
                                                        <span class="price">
                                                            1,300원
                                                        </span>
                                                    </div>
                                                </li>
                                                <li data-index="4" class data-name="theme_goods_11" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/radish.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1629785470976l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[KF365] 무 1통</a>
                                                        </span>
                                                        <span class="price">
                                                            1,680원
                                                        </span>
                                                    </div>
                                                </li>
                                                <li data-index="5" class data-name="theme_goods_11" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/garlic.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1613703436357l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[KF365] 깐마늘 200g</a>
                                                        </span>
                                                        <span class="price">
                                                            2,660원
                                                        </span>
                                                    </div>
                                                </li>
                                                <li data-index="6" class="cut" data-name="theme_goods_11" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/socks.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1634796251205l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[KF365] 벗겨지지 않는 페이크삭스 양말 6종(10개입)</a>
                                                        </span>
                                                        <span class="price">
                                                            <span class="dc">33%</span>
                                                            9,900원
                                                        </span>
                                                        <span class="cost">14,000원</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bx-controls bx-has-controls-direction">
                                            <div class="bx-controls-direction">
                                                <a class="bx-prev disabled" href>Prev</a>
                                                <a class="bx-next" href>Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 365일 최저가 도전 끝 -->
                    <!-- 오프라인 맛집 시작 -->
                    <div>
                        <div class="main_type2">
                            <div class="product_list">
                                <div class="tit_goods">
                                    <h3 class="tit">
                                        <a class="name">
                                            <span class="ico">오프라인 맛집</span>
                                            <span class="tit_desc">유명 맛집의 그 맛을 집에서 그대로 편안하게</span>
                                        </a>
                                    </h3>
                                </div>
                                <div class="list_goods">
                                    <div class="bx-wrapper" style="max-width: 1050px; margin: 0px auto;">
                                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 506px;">
                                            <ul data-title="오프라인 맛집" data-section="theme_goods_12" class="list" style="width: 815%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <li data-index="1" class data-name="theme_goods_12" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/brownie_cookie.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1630564157943l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[노티드] 브라우니 2종</a>
                                                        </span>
                                                        <span class="price">
                                                            5,200원
                                                        </span>
                                                    </div>
                                                </li>
                                                <li data-index="2" class data-name="theme_goods_12" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/coffee_beans.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1603946084400l0.jpg);">
                                                    </a>
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[노티드] 브라우니 2종</a>
                                                        </span>
                                                        <span class="price">
                                                            16,000원
                                                        </span>
                                                    </div>
                                                </li>
                                                <li data-index="3" class="cut" data-name="theme_goods_12" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/dumpling.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1573458950506l0.jpg);">
                                                    </a> 
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[창화당] 호호 불어먹는 고기왕만두</a>
                                                        </span> 
                                                        <span class="price">
                                                            <span class="dc">8%</span>
                                                            7,268원                           
                                                        </span> 
                                                        <span class="cost">7,900원</span>
                                                    </div>
                                                </li>
                                                <li data-index="4" class="" data-name="theme_goods_12" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/red_fish_cake" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1627441344214l0.jpg);">
                                                    </a> 
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[제천빨간오뎅] 빨간오뎅 세트</a>
                                                        </span> 
                                                        <span class="price">
                                                            6,900원
                                                        </span>
                                                    </div>
                                                </li>
                                                <li data-index="5" class="" data-name="theme_goods_12" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/strong_noodles.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1625711479454l0.jpg);">
                                                    </a> 
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[쮸즈] 탄탄면</a>
                                                        </span> 
                                                        <span class="price">
                                                            <span class="dc">10%</span>
                                                            6,210원                            
                                                        </span> 
                                                        <span class="cost">6,900원</span>
                                                    </div>
                                                </li>
                                                <li data-index="6" class="cut" data-name="theme_goods_12" style="float: left; list-style: none; position: relative; width: 249px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/blend_beans.jpg" alt="상품이미지" class="thumb" style="background-image: url(https://img-cf.kurly.com/shop/data/goods/1631767904882l0.jpg);">
                                                    </a> 
                                                    <div class="info_goods">
                                                        <span class="name">
                                                            <a class="txt">[블루보틀: Fall Poetry] 리컬렉션 블렌드 원두</a>
                                                        </span> 
                                                        <span class="price">
                                                            29,000원                            
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bx-controls bx-has-controls-direction">
                                            <div class="bx-controls-direction">
                                                <a class="bx-prev" href="">Prev</a>
                                                <a class="bx-next disabled" href="">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 오프라인 맛집 끝 -->
                    <!-- 컬리의 레시피 시작 -->
                    <div>
                        <div class="main_type3">
                            <div class="main_recipe">
                                <div class="tit_goods">
                                    <h3 class="tit">
                                        <a class="name">
                                            <span class="ico">컬리의 레시피</span>
                                        </a>
                                    </h3>
                                </div>
                                <div class="list_goods">
                                    <div class="bx-wrapper" style="max-width: 1050px; margin: 0px auto;">
                                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 303px;">
                                            <ul data-title="컬리의 레시피" data-section="kurly_recipe" class="list" style="width: 715%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <li style="float: left; list-style: none; position: relative; width: 338px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/main_v2_1.jpg" alt="상품이미지" class="thumb">
                                                    </a>
                                                    <div class="info_goods">
                                                        <div class="inner_info">
                                                            <span class="name">
                                                                <a class="txt">시나몬 배 조림 & 카나페</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 338px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/main_v2_2.jpg" alt="상품이미지" class="thumb">
                                                    </a>
                                                    <div class="info_goods">
                                                        <div class="inner_info">
                                                            <span class="name">
                                                                <a class="txt">쏨땀</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 338px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/main_v2_3.png" alt="상품이미지" class="thumb">
                                                    </a>
                                                    <div class="info_goods">
                                                        <div class="inner_info">
                                                            <span class="name">
                                                                <a class="txt">굴 크림 스튜</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 338px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/main_v2_4.jpg" alt="상품이미지" class="thumb">
                                                    </a>
                                                    <div class="info_goods">
                                                        <div class="inner_info">
                                                            <span class="name">
                                                                <a class="txt">과일 버터 2종</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li style="float: left; list-style: none; position: relative; width: 338px; margin-right: 18px;">
                                                    <a class="thumb_goods">
                                                        <img src="./img/main_v2_5.jpg" alt="상품이미지" class="thumb">
                                                    </a>
                                                    <div class="info_goods">
                                                        <div class="inner_info">
                                                            <span class="name">
                                                                <a class="txt">베이컨 체커보드 토스트</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bx-controls bx-has-controls-direction">
                                            <div class="bx-controls-direction">
                                                <a class="bx-prev disabled" href>Prev</a>
                                                <a class="bx-next" href>Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 컬리의 레시피 끝 -->
                    <!-- 인스타그램 고객 후기 시작 -->
                    <div>
                        <div class="main_type4">
                            <div class="tit_goods">
                                <h3 class="tit">인스타그램 고객 후기</h3>
                            </div>
                            <div class="list_goods">
                                <div class="bx-wrapper" style="max-width: 1050px; margin: 0px auto;">
                                    <div class="bx-viewport" style="width: 100%; height: 175px; overflow: hidden; position: relative; ">
                                        <ul data-title="인스타그램 고객 후기" data-section="instagram" class="list" style="width: 2715%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <li data-index="1" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list1.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="2" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list2.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="3" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list3.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="4" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list4.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="5" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list5.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="6" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list6.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="7" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list7.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="8" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list8.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="9" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list9.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="10" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list10.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="11" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list11.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                            <li data-index="12" data-name="instagram" style="float: left; list-style: none; position: relative; width: 175px;">
                                                <a target="_blank" class="thumb_goods">
                                                    <img src="./img/insta_list12.jpg" alt="상품이미지" class="thumb">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bx-controls bx-has-controls-direction">
                                        <div class="bx-controls-direction">
                                            <a class="bx-prev disabled" href>Prev</a>
                                            <a class="bx-next" href>Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bnr">
                                <span class="txt">더 많은 고객 후기가 궁금하다면?</span>
                                <a href="https://www.instagram.com/marketkurly_regram/" target="_blank">@marketkurly_regram</a>
                            </div>
                        </div>
                    </div>
                    <!-- 인스타그램 고객 후기 끝 -->
                    <!-- 샛별 택배 배송안내 보기 시작 -->
                    <div>
                        <div class="bnr_main3">
                            <a class="link">
                                <span class="inner_link"></span>
                            </a>
                        </div>
                    </div>
                    <!-- 샛별 택배 배송안내 보기 끝 -->

                </section>
            </main>
            <!-- 바디 끝 ----------------------------------------------------------------->

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
                            <img src="./img/logo_isms.png" alt="isms 로고" class="logo">
                            <p class="txt">
                                [인증범위] 마켓컬리 쇼핑몰 서비스 개발 · 운영
                                <br>
                                [유효기간] 2019.04.01 ~ 2022.03.31
                            </p>
                        </a>
                        <a href="#none" onclick="popup('https://www.eprivary.or.kr/front/certifiedSiteMark/certifiedSiteMarkPopup.do?certCmd=EP&certNum=2021-EP-R003',527,720);return false;" class="mark" target="_blank">
                            <img src="./img/logo_eprivacyplus.png" alt="eprivacy plus 로고" class="logo">
                            <p class="txt">
                                개인정보보호 우수 웹사이트 · 
                                <br>
                                개인정보처리시스템 인증 (ePRIVACY PLUS)
                            </p>
                        </a>
                        <a href="#none" onclick="popup('http://pgweb.uplus.co.kr/ms/escrow/s_escrowYn.do?mertid=go_thefarmers',460,550);return false;" class="mark lguplus" target="_blank">
                            <img src="./img/logo_payments.png" alt="payments 로고" class="logo">
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

    <script>
        $(document).ready(function(){ $('.bxslider').bxSlider( { mode: 'horizontal',// 가로 방향 수평 슬라이드
            speed: 500, // 이동 속도를 설정
            pager: false, // 현재 위치 페이징 표시 여부 설정
            moveSlides: 1, // 슬라이드 이동시 개수
            slideWidth: 1900, // 슬라이드 너비
            minSlides: 1, // 최소 노출 개수
            maxSlides: 1, // 최대 노출 개수
            slideMargin: 0, // 슬라이드간의 간격
            auto: true, // 자동 실행 여부
            autoHover: true, // 마우스 호버시 정지 여부
            controls: true // 이전 다음 버튼 노출 여부 
            });
        });
    </script>

</body>
</html>