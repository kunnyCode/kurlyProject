<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/common.css">
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
                            <a href="#" class="linkMenu">고객센터</a>
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
                <div id="headerLogo" class="layout-wrapper">
                    <h1 class="logo">
                        <a href="#" class="link_main">
                            <span id="gnbLogoContainer">
                                <img src="#" alt="마켓컬리 로고">
                            </span>
                        </a>
                    </h1>
                    <a href="#" onclick="" class="bnr_delivery">
                        <img src="#" alt="샛별, 택배 배송안내">
                    </a>
                </div>
                <!-- 카테고리 시작 --------------------------------------------------------------------------->
                <div id="gnb">
                    <h2 class="screen_out">메뉴</h2>
                    <nav id="gnbMenu" class="gnb_kurly">
                        <div class="inner_gnbkurly">
                            <div class="gnb_main">
                                <ul class="gnb">
                                    <li class="menu1">
                                        <a href="#" class="link"><span class="ico"></span><span class="txt">전체 카테고리</span></a>
                                    </li>
                                    <li class="menu2">
                                        <a href="#" class="link"><span class="txt">신상품</span></a>
                                    </li>
                                    <li class="menu3">
                                        <a href="#" class="link"><span class="txt">베스트</span></a>
                                    </li>
                                    <li class="menu4">
                                        <a href="#" class="link"><span class="txt">알뜰 쇼핑</span></a>
                                    </li>
                                    <li class="menu5">
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
                                        <input type="image" src="#" class="btn_search">
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
                                            <img src="#" alt="#" class="thumb">
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

                            <div class="gnb_sub" style="display:none; width:219px;"><!--mouseover했을때 드롭다운, 기본은 숨김-->
                                <div class="inner_sub">
                                    <ul class="gnb_menu" style="height:auto;"> <!-- ul에 data속성 들어있었음.-->
                                    <!-- 채소 카테고리 시작--------------------------------------------------------------------------->
                                        <li>
                                            <a class="menu">
                                                <span class="icon">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
                                                </span>
                                                <span class="tit">
                                                    <span class="txt">채소</span>
                                                </span>
                                            </a>
                                            <ul class="sub_menu">
                                                <li><a class="sub"><span class="name">친환경</span></a></li>
                                                <li><a href="" class="sub"><span class="name">고구마·감자·당근</span></a></li>
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                        <!-- 과일,견과,쌀 카테고리 끝--------------------------------------------------------------------------->
                                        
                                        <!-- 수산,해산,건어물 카테고리 시작--------------------------------------------------------------------------->
                                        <li>
                                            <a class="menu">
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                                                <span class="ico">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_off">
                                                    <img src="#" alt="카테고리 아이콘" class="ico_on">
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
                        </div>
                    </nav>
                </div>
            </header>
            <!-- 헤더 끝-------------------------------------------------------------------->
         
            <!-- 바디 시작 ----------------------------------------------------------------->
            <main id="main">
                <section id="content">
                    <!--사이드 퀵메뉴-->
                    <div id="quick"></div>
                    <!-- 메인 대형 롤링배너 -->
                    <div class="main_type1"> <!--메인 좌우롤링, 대형배너형식 main_type1-->

                    </div>
                    <!--↓↓↓↓반복되는 주제별 상품 블록↓↓↓↓↓↓-------->                    
                    <div><!--사이즈 맞추기용 div -->
                        <div class="main_type2"></div> <!-- 좌우롤링, 상품명가격있는형식 main_type2 -->
                    </div>
                    <div>
                        <div class="main_type3"></div><!--좌우롤링, 이벤트상품 가격표기x main_type3-->
                    </div>             
                    <div>
                        <div class="main_type2"></div>
                    </div>
                    <div>
                        <div class="bnr_main" alt="할로윈 간식,소품 최대 30%할인"></div>
                    </div>
                    <div>
                        <div class="main_type2">
                            <div class="category_type">
                                <div class="tit_goods"><h3 class="title">MD의 추천</h3></div>
                            </div>                            <div class="category">
                                <ul class="list_category">
                                    <li><a href="#" class="menu">채소</a></li>
                                    <li><a href="#" class="menu">과일·견과·쌀</a></li>
                                    <li><a href="#" class="menu">수산·해산·건어물</a></li>
                                    <li><a href="#" class="menu">정육·계란</a></li>
                                    <li><a href="#" class="menu">국·반찬·메인요리</a></li>
                                    <li><a href="#" class="menu">샐러드·간편식</a></li>
                                    <li><a href="#" class="menu">면·양념·오일</a></li>
                                    <li><a href="#" class="menu">생수·음료·우유·커피</a></li>
                                    <li><a href="#" class="menu">간식·과자·떡</a></li>
                                    <li><a href="#" class="menu">베이커리·치즈·델리</a></li>
                                    <li><a href="#" class="menu">건강식품</a></li>
                                    <li><a href="#" class="menu">생활용품·리빙·캠핑</a></li>
                                    <li><a href="#" class="menu">스킨케어·메이크업</a></li>
                                    <li><a href="#" class="menu">헤어·바디·구강</a></li>
                                    <li><a href="#" class="menu">주방용품</a></li>
                                    <li><a href="#" class="menu">가전제품</a></li>
                                    <li><a href="#" class="menu">베이비·키즈</a></li>
                                    <li><a href="#" class="menu">반려동물</a></li>
                                </ul>
                            </div>
                            <div class="list_goods">
                            </div>
                            <!--↓↓↓↓↓↓md추천의 카테고리를 누르면 버튼의 텍스트가 해당카테고리 이름으로 변함↓↓↓↓-->
                            <div class="link_cate">

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bnr_main"><img src="#" alt="무제한적립금,참여만해도 적립금 1천원"></div>
                    </div>
                    <div>
                        <div class="main_type2">
                            <div class="product_list">
                                <div class="tit_goods">
                                    <h3><a href="#" class="name"><span class="ico">지금 가장 핫한 상품</span> </a></h3>
                                </div>
                                <div class="list_goods">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </section>
            </main>
            <!-- 바디 끝 ----------------------------------------------------------------->

            <!-- 푸터 시작 --------------------------------------------------------------->
            <footer id="footer">
            <div class="inner_footer">
                    <h2 class="tit_cc">고객행복센터</h2>
                    <div class="cc_view cc_call">
                        <h3>
                            <spam class="tit">1644-1107</spam>
                        </h3>
                        <dl class="list">
                            <dt>365고객센터</dt>
                            <dd>오전 7시 - 오후 7시</dd>
                        </dl>
                    </div>
                    <div class="cc_view cc_kakao">
                        <h3>
                            <a href="#none" class="tit">카카오톡 문의</a>
                        </h3>
                        <dl class="list">
                            <dt>365고객센터</dt>
                            <dd>오전 7시 - 오후 7시</dd>
                        </dl>
                    </div>
                    <div class="cc_view cc_qna">
                        <h3>
                            <a href="#none" class= "tit">1:1 문의</a>
                        </h3>
                        <dl class="list">
                            <dt>24시간 접수 가능</dt>
                            <dd>고객센터 운영시간에 순차적으러 답변해드리겠습니다.</dd>
                        </dl>
                    </div>
                </div>


            </footer>
            <!-- 푸터 끝 ----------------------------------------------------------------->
        </div>
    </div>
</body>
</html>