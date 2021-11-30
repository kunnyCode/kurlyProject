<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 찾기</title>
    <link rel="stylesheet" href="../../CSS/find_id.css">
    

</head>
<body>
    <div class="find_form">
    <div class="id">아이디 찾기
        <p><div class="certify_from">
            <button selected type="button" class="phone" id="phone_confirm">휴대폰 인증</button>
            <button selected type="button" class="email" id="email_confirm">이메일 인증
                <!-- <a href="이메일인증" class="link"onclick="./find_id2.css" id="search_id"></a> -->
            </button>
        </div></p>
        <form class="find_form">
            <div class="find_id">
                <label for="name" id="name">이름</label>
                <input type="text" name="name_id" id="name_id"  maxlength="20" size="30" placeholder="이름을 입력해주세요">
            </div>
            <div class="find_phone">
                <label for="phone" id="phone">휴대폰 번호</label>
                <input type="text" name="phone_id" id="phone_id"  maxlength="20" size="30" placeholder="휴대폰 번호를 입력해주세요">
            </div>
            <div class="confirm">
                <input type="text" name="confirm_btn" id="confirm_btn"  maxlength="20" size="30" placeholder="확인">
            </div>
        </form>
    </div>
</div>
</body>
</html>