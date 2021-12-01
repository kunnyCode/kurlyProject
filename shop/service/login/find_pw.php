<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>
    <link rel="stylesheet" href="CSS\common.css">
    <link rel="stylesheet" href="CSS\Service_center.css">
    <link rel="stylesheet" href="CSS\find_pw.css">
    

</head>

<body>
    <div class="find_form">
    <div class="id">비밀번호 찾기
        <p><div class="certify_from">
            <button selected type="button" class="phone" id="phone_confirm">휴대폰 인증</button>
            <button selected type="button" class="email" id="email_confirm">이메일 인증
                <a href="shop\service\login\find_pw2.php" class="link" id="search_email"></a>
            </button>
        </div></p>
        <form class="find_form">
            <div class="find_id">
                <label for="name" id="pw_id">아이디</label>
                <input type="text" name="name_id" id="name_id"  maxlength="20" size="30" placeholder="아이디를 입력해주세요">
                <!-- <p><span class="warn">가입 시 등록한 아이디를 입력해 주세요.</span></p> -->
            </div>
            <div class="find_phone">
                <label for="phone" id="phone">휴대폰 번호</label>
                <input type="text" name="phone_id" id="phone_id"  maxlength="20" size="30" placeholder="휴대폰 번호를 입력해주세요">
                <!-- <p><span class="warn">가입 시 등록한 휴대폰 번호를 입력해 주세요.</span></p> -->
            </div>
            <div class="confirm_numb">
                <input type="text" name="confirm_numb" id="confirm_numb"  maxlength="20" size="30" placeholder="인증번호 받기">
            </div>
        </form>
    </div>
</div>
</body>
</html>