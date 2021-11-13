<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="./CSS/Signup.css">
    <div class="tit">
        <h2>회원가입</h2>
    </div>
    
    <p class="page_imp">
        <span class="ico">*</span>필수입력사항
        <div>::after</div>
    </p> 

</head>
<body>
    <div id="main_login">
        <div class="content">
        <table class="tbl_form">
        <td>
            <p><label>아이디<span class="ico">*</span> <input type="text" name="userid" id="userid" maxlength="20" size="35" placeholder="6자 이상의 영문 혹은 영문과 숫자를 조합" ></label></p>
            <div class="id_again"></div>
            <input type="hidden" name="checkid" id="checkid" required="아이디중복체크"><a href="#">중복확인</a>
            
                <ul>
                    <li>6자 이상의 영문 혹은 영문과 숫자를 조합</li>
                    <li>아이디 중복확인</li>
                </ul>
        </td>

    <p><label>비밀번호<span class="ico">*</span> <input type="password" name="userpw" id="userpw" maxlength="20" size="30" placeholder="비밀번호를 입력해주세요"></label></p>

    <input type="hidden" name="checkid" id="checkid" required="비밀번호조합">
    <ul>
        <li>10자 이상 입력</li>
        <li>영문/숫자/특수문자(공백제외)만 허용하며, 2개 이상 조합</li>
        <li>동일한 숫자 3개 이상 연속 사용 불가</li>
    </ul>
    </table>

    <table class="tb1_form2">
    <p><label>비밀번호확인<span class="ico">*</span> <input type="password" name="userpw_cfrm" id="userpw_cfrm" maxlength="20" size="30" placeholder="비밀번호를 한번 더 입력해주세요"></label></p>
    <input type="hidden" name="checkid" id="checkid" required="비밀번호중복체크">
    <ul>
        <li>동일한 비밀번호를 입력해주세요</li>
    </ul>

    <!-- 비밀번호 끝 -->

    <p><label>이름<span class="ico">*</span> <input type="text" name="user_name" id="user_name" maxlength="20" size="30" placeholder="이름을 입력해주세요"></label></p>
    <p><label>이메일<span class="ico">*</span> <input type="text" name="email" id="email" maxlength="20" size="30" placeholder="예:marketkurly@kurly.com"></label></p>
    <p><label>휴대폰<span class="ico">*</span> <input type="text" name="phone" id="phone" maxlength="20" size="30" placeholder="숫자만 입력해주세요"></label>
    <div class="checkagain">
            <input type="text" name="numb" maxlength="10" size="10" placeholder="인증번호 받기"></p></div>
    </div>

    <div class="address">
    <p><label>주소<span class="ico">*</span> <input type="text" name="address_search" id="address_search" maxlength="20" size="30" placeholder="주소 검색"></label></p>
    <ul>배송지에 따라 상품 정보가 달라질 수 있습니다.</ul>
    </div>
<!-- 주소 끝 -->
<tr>
    <th>성별</th>
        <td>
            <input type="radio" name="gender" value="m" checked>
            <label>남자</label>
                <span class="ico"></span>

            <input type="radio" name="gender" value="w" checked>
            <label>여자</label>
            
            <input type="radio" name="gender" value="선택안함" checked>
            <label>선택안함</label>
            
        </td>
</tr>

    <p><label>생년월일 <input type="text" name="birth" id="birth" maxlength="20" size="20" placeholder="YYYY / MM /  DD"></label></p>
    </table>
<!-- 추가입력 사항 -->
    <th>추가입력 사항</th>
    <td>
        <input type="radio"name="rcm_id" value="rcm_id" checked>
        <label> 추천인 아이디</label>
        <p><label> <input type="text" name="rcm_id" id="rcm_id" maxlength="20" size="30" placeholder="추천인 아이디를 입력해주세요."><label>
            <ul>추천인 아이디와 참여 이벤트명 중 하나만 선택 가능합니다.</ul>
            <ul>가입 이후, 수정이 불가합니다.</ul>
            <ul>대소문자 및 띄어쓰기에 유의해주세요.</ul>
        
    
        <input type="radio" name="add_info" value="join_event" checked></label>
        <label> 참여 이벤트명</label>
        <p><label> <input type="text" name="add_info" id="join_event" maxlength="20" size="30" placeholder="참여 이벤트명"></label>
            <ul>추천인 아이디와 참여 이벤트명 중 하나만 선택 가능합니다.</ul>
            <ul>가입 이후, 수정이 불가합니다.</ul>
            <ul>대소문자 및 띄어쓰기에 유의해주세요.</ul>
    </td>

    <div>::after</div>
    <!-- 이용약관동의 -->

    <td>
        <p>이용약관동의<span class="ico">*</span></p>

    <input type="radio" name="agree" value="agree" checked>
    <label>전체 동의합니다.</label>
    <ul>선택항목에 동의하지 않은 경우도 회원가입 및 일반적인 서비스를 이용할 수 있습니다.</ul>

        <p>
            <input type="radio" name="use_agree" id="use_ag" checked>
            <label>이용약관 동의</label>
            <span class="ico">(필수)</span>
        </p>

        <p>
            <input type="radio" name="ppl_info" id="info" checked>
            <label>개인정보 수집 . 이용동의</label>
            <span class="ico">(필수)</span>
        </p>
        
        <p>
            <input type="radio" name="ppl_info2" id="info2" checked>
            <label>개인정보 수집 . 이용동의</label>
            <span class="ico">(선택)</span>
        </p>

        <p>
            <input type="radio" name="event" id="event" checked>
            <label>무료배송,할인쿠폰 등 혜택/ 정보 수신 동의</label>
            <span class="ico">(선택)</span>
        </p>
            
        <p>
            <input type="radio" name="SMS" id="SMS" checked>
            <label>SMS</label>
            <input type="radio" name="email" id="email" checked>
            <label>이메일</label>
            <ul>ㄴ 동의 시 한 달간[5%적립]+[무제한 무료배송]</ul>
            <span class="(첫 주문 후 적용)"></span>    
        </p>
            
        <p>
            <input type="radio" name="adult" id="adult" checked>
            <label>본인은 만 14세 이상입니다.</label>
            <span class="ico">(필수)</span>
        </p>
    </td>
    </div>
</div>
</body>
</html>