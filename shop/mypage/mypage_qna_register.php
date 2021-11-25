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
    <link rel="stylesheet" href="../../CSS/bulk_order.css">
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
                            <a href="../board/list.php" class="linkMenu">고객센터</a>
                            <ul class="sub">
                                <li><a href="../board/list.php" onClick="">공지사항</a></li>
                                <li><a href="../service/faq.php" onClick="">자주하는 질문</a></li>
                                <li><a href="./mypage_qna.php" onClick="">1:1 문의</a></li>
                                <li><a href="../main/bulk_order.php" onClick="">대량주문 문의</a></li>
                                <li><a href="./offer.php" onClick="">상품 제안</a></li>
                                <li><a href="./echo_packing.php" onClick="">에코포장 피드백</a></li>
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
                                        <a href="../board/list.php">공지사항</a>
                                    </li>
                                    <li>
                                        <a href="../service/faq.php" onclick="KurlyTrackerLink('/shop/service/faq.php', 'select_service_frequently_qna')">자주하는 질문</a>
                                    </li>
                                    <li class="on">
                                        <a href="./mypage_qna.php" onclick="KurlyTrackerLink('/shop/mypage/mypage_qna.php', 'select_service_personal_inquiry_history')">1:1문의</a>
                                    </li>
                                    <li>
                                        <a href="../main/bulk_order.php" onclick="KurlyTrackerLink('/shop/main/html.php?htmid=mypage/bulk_order.htm', 'select_service_bulk_order')">대량주문 문의</a>
                                    </li>
                                    <li> 
                                        <a href="./offer.php" onclick="KurlyTrackerLink('/shop/mypage/offer.php', 'select_service_product_offer')">상품 제안</a>
                                    </li>
                                    <li>
                                        <a href="./echo_packing.php" onclick="KurlyTrackerLink('/shop/mypage/echo_packing.php', 'select_service_eco_packing_feedback')">에코포장 피드백</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="./mypage_qna_register.php" class="link_inquire">
                                <span class="emph">도움이 필요하신가요 ?</span>
                                " 1:1 문의하기"
                            </a>
                        </div>
                        <!-- 좌측 고객센터 목록 끝 -->

                        <!-- 1:1문의 글쓰기 시작 -->
                        <div class="page_section section_qna">
                            <div class="head_aticle">
                                <h2 class="tit">1:1 문의</h2>
                            </div>
                            <div class="xans-board-write">
                                <form name="fm" id="fm" method="post" action="/shop/mypage/indb.php" enctype="multipart/form-data" onsubmit="return chkSubmitData(this)" style="height: 100%;">
                                    <input type="hidden" name="mode" value="add_qna">
                                    <input type="hidden" name="itemcd" value>
                                    <input type="hidden" name="sno" value="0">
                                    <table id="table_after" class="boardWrite2" width="100%">
                                        <colgroup>
                                            <col width="14%" align="rigth">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <th class="input_txt">제목</th>
                                                <td>
                                                    <select name="itemcd" required fld_esssential label="질문유형" class="select" onclick="KurlyTracker.setAction('select_personal_inquiry_case_list').sendData();" onchange="KurlyTracker.setAction('select_personal_inquiry_case_value').sendData();">
                                                        <option value>선택해주세요.</option>
                                                        <option value="01">배송지연/불만</option>
                                                        <option value="11">컬리패스 (무료배송)</option>
                                                        <option value="02">반품문의</option>
                                                        <option value="03">A/S문의</option>
                                                        <option value="06">환불문의</option>
                                                        <option value="07">주문결제문의</option>
                                                        <option value="08">회원정보문의</option>
                                                        <option value="04">취소문의</option>
                                                        <option value="05">교환문의</option>
                                                        <option value="09">상품정보문의</option>
                                                        <option value="10">기타문의</option>
                                                    </select>
                                                    <br>
                                                    <input type="text" name="subject" style="width: 100%" required fld_esssential label="제목" value onfocus="KurlyTracker.setAction('select_personal_inquiry_title').sendData();">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="input_txt">주문번호</th>
                                                <td>
                                                    <input type="text" name="ordno" style="width: 25%" value readonly="readonly" onclick="$(this).blur()" onfocus="$(this).blur()">
                                                    <input onclick="order_open()" type="button" class="bhs_button yb" value="주문조회" style="float: none; line-height: 27px; width: 100px;">
                                                    <div style="position: relative; z-index: 1">
                                                        <iframe id="ifm_order" frameborder="0" scrolling="no" style="display: none; position: absolute; width: 560px; height: 380px; background-color: #fff; position: absolute; left: 0; top: 0; border: 1px solid #000">
                                                            #document
                                                                <html>
                                                                    <head></head>
                                                                    <body></body>
                                                                </html>
                                                        </iframe>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="input_txt">이메일</th>
                                                <td>
                                                    <input type="text" name="email" value="#" size="26" readonly="readonly" class="read_only">
                                                    <span class="noline smalle" style="padding-left: 10px">
                                                        <input type="checkbox" name="mailling">
                                                        <span style="font-size: 8pt;">답변수신을 이메일로 받겠습니다.</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="input_txt">문자메시지</th>
                                                <td>
                                                    <input type="text" name="mobile[]" value="#" readonly="readonly" class="read_only">
                                                    <span class="noline smalle" style="padding-left: 10px">
                                                        <input type="checkbox" name="sms">
                                                        <span style="font-size: 8pt;">답변수신을 문자메시지로 받겠습니다.</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="input_txt">내용</th>
                                                <td class="edit_area" style="position: relative;">
                                                    <style>
                                                        #qnaNotice .qna_goods{display: none}
                                                    </style>
                                                    <div id="qnaNotice">
                                                        <div class="inner_qnaNotice">
                                                            <div class="notice_qna">
                                                                <strong class="tit qna_public">1:1 문의 작성 전 확인해주세요!</strong>
                                                                <strong class="tit qna_goods">상품문의 작성 전 확인해 주세요!</strong>
                                                                <dl class="list qna_goods">
                                                                    <dd>
                                                                        <span>답변은 영업일 기준 2~3일 소요됩니다.</span>
                                                                        <span>해당 게시판의 성격과 다른 글은 사전동의 없이 담당 게시판으로 이동될 수 있습니다.</span>
                                                                        <span>배송관련, 주문(취소/교환/환불)관련 문의 및 요청사항은 마이컬리 내 1:1 문의에 남겨주세요.</span>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="list qna_goods">
                                                                    <dt>제품</dt>
                                                                    <dd>
                                                                        <span>입고일: 품절 상품 입고 일이 확정된 경우, 섬네일에 기재되어 있습니다.(종 모양을 클릭하여, 재입고 알람 설정 가능)</span>
                                                                        <span>제품 상세정보: 영양성분 및 함량, 용량, 보관 및 취급 방법 등 제품 정보는 상세 이미지 또는 상세정보에서 확인 가능합니다.</span>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="list qna_public">
                                                                    <dt>반품 / 환불</dt>
                                                                    <dd>
                                                                        <span>
                                                                            제품 하자 혹은 이상으로 반품 (환불)이 필요한 경우 사진과 함께 구체적인 내용을 남겨주세요.
                                                                        </span>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="list" id="branchByVersion15">
                                                                    <dt>주문취소</dt>
                                                                    <dd class="old" style="display:none">
                                                                        <span>
                                                                            샛별 지역 : 배송일 전날 19시까지 
                                                                            <br>
                                                                            택배 지역 : 배송일 전날 18시까지 
                                                                            <br>
                                                                            고객행복센터(1644-1107)/ 1:1문의 게시판/ 카카오톡(마켓컬리) 으로 취소 요청 바랍니다.
                                                                        </span>
                                                                        <span>생산이 시작된 이후에는 취소가 불가능 한 점 고객님의 양해 부탁드립니다.</span>
                                                                        <span>일부 예약상품은 배송 3~4일 전에만 취소 가능합니다.</span>
                                                                        <span>주문상품의 부분 취소는 불가능합니다. 전체 주문 취소 후 재구매 해주세요.</span>
                                                                        <span>비회원 주문건의 경우 1:1문의 게시판 접수가 불가하기에 고객행복센터(1644-1107), 카카오톡(마켓컬리) 로 취소 요청 부탁드립니다.</span>
                                                                    </dd>
                                                                    <dd class="new">
                                                                        <span>
                                                                            배송 단계별로 주문취소 방법이 상이합니다. 
                                                                            <br>
                                                                            [입금확인] 단계 :  [마이컬리 > 주문내역 상세페이지] 에서 직접 취소 가능 
                                                                            <br>
                                                                            [입금확인] 이후 단계 : 고객행복센터로 문의 
                                                                        </span>
                                                                        <br>
                                                                        <span>
                                                                            생산이 시작된 [상품 준비중] 이후에는 취소가 제한되는 점 고객님의 양해 부탁드립니다.
                                                                        </span>
                                                                        <span>
                                                                            비회원은 모바일 App 또는 모바일 웹사이트에서 [마이컬리 > 비회원 주문 조회 페이지] 에서 취소가 가능합니다.
                                                                        </span>
                                                                        <span>
                                                                            일부 예약상품은 배송 3~4일 전에만 취소 가능합니다.
                                                                        </span>
                                                                        <span>
                                                                            주문상품의 부분 취소는 불가능합니다. 전체 주문 취소 후 재구매 해주세요.
                                                                        </span>
                                                                    </dd>
                                                                </dl>
                                                                <dl class="list">
                                                                    <dt>배송</dt>
                                                                    <dd>
                                                                        <span>
                                                                            주문 완료 후 배송 방법(샛별 / 택배)은 변경이 불가능합니다.
                                                                        </span>
                                                                        <span>
                                                                            배송일 및 배송시간 지정은 불가능합니다. (예약배송 포함)
                                                                        </span>
                                                                        <p class="info">※ 전화번호, 이메일, 주소, 계좌번호 등의 상세 개인정보가 문의 내용에 저장되지 않도록 주의해 주시기 바랍니다.</p>
                                                                    </dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        var qnaNotice = new Vue({
                                                            el: '#qnaNotice',
                                                            data: {
                                                                getData : null,
                                                                layerOn : true
                                                            },
                                                            methods: {
                                                                update:function(){
                                                                    var $self = this;
                                                                    $.ajax({
                                                                        type:'GET',
                                                                        url: campaginUrl + 'pc/notice/qna_info.html',
                                                                        datatype: 'html',
                                                                        async : true,
                                                                    }).done(function(result){
                                                                        $self.getData = result;
                                                                    });
                                                                }
                                                            }
                                                        });
                                                        $(document).ready(function(){
                                                            qnaNotice.update();
                                                        });
                                                    </script>
                                                    <textarea name="contents" style="width: 100%; height: 474px;" class="editing_area" required fld_esssential label="내용" onfocus="KurlyTracker.setAction('select_personal_inquiry_text').sendData();"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="input_txt">이미지</th>
                                                <td>
                                                    <table width="95%" id="table" cellpadding="0" cellspacing="0" border="0" style="border: solid 1px #f4f4f4; border-collapse: collapse;">
                                                        <tbody>
                                                            <tr id="tr_0">
                                                                <td width="20" nowrap align="center">1</td>
                                                                <td width="100%">
                                                                    <input type="file" name="file[]" style="width: 50%" class="linebg">
                                                                    <a href="javascript:add()">
                                                                        <img src="../../img/btn_upload_plus.gif" align="absmiddle">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td height="2"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div width="100%" style="padding: 5px" class="stxt">
                                                        - 파일은 최대 5개까지 업로드가 지원됩니다.
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td align="right" style="padding-top: 5px; border: none;" id="avoidDbl">
                                                    <input type="submit" class="bhs_button yb" value="저장" style="float: none;">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <!-- 1:1문의 글쓰기 끝 -->
                    </div>
                    <script type="text/javascript">
                        function chkSubmitData(form) {
                            if (chkForm(form)) {
                            KurlyTracker.setAction('submit_personal_inquiry_success').sendData();
                            return true;
                            } else {
                            return false;
                            }
                        }

                        function order_open(){
                            KurlyTracker.setAction('select_personal_inquiry_order_list').sendData();

                            var divEl = document.getElementById('ifm_order');
                            divEl.style.display = "block";
                            if( divEl.src == '' ) divEl.src = "mypage_qna_order.php";

                            // KM-1483 Amplitude 연동
                            KurlyTracker.setScreenName('personal_inquiry_writing_order_history_selection');
                        }

                        function order_close(){
                            var divEl = document.getElementById('ifm_order');
                            divEl.style.display = "none";
                        }

                        function order_put( ordno ){
                            // KMF-299 선택한 주문번호가 기존 주문 번호와 다를때만 트래킹 처리
                            if (parseInt(document.fm.ordno.value, 10) !== parseInt(ordno, 10)) {
                            KurlyTracker.setAction('select_personal_inquriry_order_number').sendData();
                            }

                            document.fm.ordno.value = ordno;
                            order_close();
                        }

                        function add(){
                            var table = document.getElementById('table');
                            var reviewFileNum = "5";
                            if (table.rows.length>=parseInt(reviewFileNum)){
                                alert("업로드는 최대 "+reviewFileNum+"개만 지원합니다");
                                return;
                            }
                            var tr_num = table.rows.length;
                            oTr		= table.insertRow( table.rows.length );
                            oTr.id	= "tr_"+(tr_num);
                            oTd1		= oTr.insertCell(0);
                            oTd1.style.textAlign = "center";
                            oTd2		= oTr.insertCell(1);
                            tmpHTML = "<input type=file name='file[]' style='width:50%' class=line> <a href=\"javascript:del('"+"tr_"+(tr_num)+"')\"><img src='/shop/data/skin/designgj/img/common/btn_upload_minus.gif' align=absmiddle></a>";
                            oTd2.innerHTML = tmpHTML;
                            calcul();
                        }
                        function del(index,ncode)
                        {
                            var table = document.getElementById('table');
                            for (i=0;i<table.rows.length;i++) if (index==table.rows[i].id) table.deleteRow(i);
                            calcul();
                        }
                        function calcul()
                        {
                            var table = document.getElementById('table');
                            for (var i=0;i<table.rows.length;i++){
                                table.rows[i].cells[0].innerHTML = i+1;
                            }
                        }

                        // KM-1483 Amplitude 연동
                        KurlyTracker.setScreenName('personal_inquiry_writing');
                    </script>
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
                                <a href="./mypage_qna_register.php" onclick="KurlyTrackerLink('/shop/mypage/mypage_qna_register.php?mode=add_qna', 'select_bottom_onebyone_button')" class="tit">1:1 문의</a>
                            </h3>
                            <dl class="list">
                                <dt>24시간 접수 가능</dt>
                                <dd>고객센터 운영시간에 순차적으로 답변해드리겠습니다.</dd>
                            </dl>
                        </div>
                        <div class="cc_view cc_bulkorder">
                            <h3>
                                <a href="../main/bulk_order.php" class="tit">대량주문 문의</a>
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