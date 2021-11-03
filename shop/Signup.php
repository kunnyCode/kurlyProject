<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <h2>회원가입</h2>
    <div id="content">
        <td>
            <p><label>아이디 <input type="text" name="userid" id="userid" maxlength="20" size="35" placeholder="6자 이상의 영문 혹은 영문과 숫자를 조합" ></label></p>
            <input type="hidden" name="checkid" id="checkid" required="아이디중복체크"><a href="#">중복확인</a>
            
                <ul>
                    <li>6자 이상의 영문 혹은 영문과 숫자를 조합</li>
                    <li>아이디 중복확인</li>
                </ul>
        </td>
    <p><label>비밀번호 <input type="text" name="userpw" id="userpw" maxlength="20" size="30" placeholder="비밀번호를 입력해주세요"></label></p>
    <input type="hidden" name="checkid" id="checkid" required="비밀번호조합">
    <ul>
        <li>10자 이상 입력</li>
        <li>영문/숫자/특수문자(공백제외)만 허용하며, 2개 이상 조합</li>
        <li>동일한 숫자 3개 이상 연속 사용 불가</li>
    </ul>
    <p><label>비밀번호확인 <input type="text" name="userpw_cfrm" id="userpw_cfrm" maxlength="20" size="30" placeholder="비밀번호를 한번 더 입력해주세요"></label></p>
    <input type="hidden" name="checkid" id="checkid" required="비밀번호중복체크">
    <ul>
        <li>동일한 비밀번호를 입력해주세요</li>
    </ul>
    <!-- 비밀번호 끝 -->

    <p><label>이름 <input type="text" name="user_name" id="user_name" maxlength="20" size="30" placeholder="이름을 입력해주세요"></label></p>
    <p><label>이메일 <input type="text" name="email" id="email" maxlength="20" size="30" placeholder="예:marketkurly@kurly.com"></label></p>
    <p><label>휴대폰 <input type="text" name="phone" id="phone" maxlength="20" size="30" placeholder="숫자만 입력해주세요"></label>
            <input type="text" name="numb" maxlength="10" size="10" placeholder="인증번호 받기"></p>
    <p><label>주소 <input type="text" name="adress_search" id="adress_search" maxlength="20" size="30" placeholder="주소 검색"></label></p>
    <ul>배송지에 따라 상품 정보가 달라질 수 있습니다.</ul>
<!-- 주소 끝 -->
<tr>
    <th>성별</th>
        <td>
            <label>남자</label>
                <input type="radio" name="gender" value="m" checked>
                <span class="ico"></span>
            <label>여자</label>
            <input type="radio" name="gender" value="w" checked>
            <label>선택안함</label>
            <input type="radio" name="gender" value="선택안함" checked>
        </td>
</tr>
    <p><label>생년월일 <input type="text" name="birth" id="birth" maxlength="20" size="20" placeholder="YYYY / MM /  DD"></label></p>

<!-- 추가입력 사항 -->
    <th>추가입력 사항</th>
    <td>
        <div class="group_radio"></div>
        <label> 추천인 아이디</label>
            <input type="radio"name="add_info" value="rcm_id" checked>
        <label> 참여 이벤트명</label>
            <input type="radio" name="add_info" value="참여 이벤트명" checked></label></p>
    </td>
    
    -----------------------------
    <th>이용약관동의</th>
    </div>
</body>
</html>