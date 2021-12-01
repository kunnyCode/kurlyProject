<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>
    <link rel="stylesheet" href="CSS\common.css">
    <link rel="stylesheet" href="CSS\Service_center.css">
    <link rel="stylesheet" href="CSS\find_pw2.css">
    

</head>

<body>
    <div class="find_form">
    <div class="id">비밀번호 찾기
        <p><div class="certify_from">
            <button selected type="button" class="phone" id="phone_confirm">휴대폰 인증</button>
            <button selected type="button" class="email" id="email_confirm">이메일 인증
            </button>
        </div></p>
        <form class="find_form">
            <div class="find_id">
                <label for="name" id="pw_id">아이디</label>
                <input type="text" name="name_id" id="name_id"  maxlength="20" size="30" placeholder="아이디를 입력해주세요">
                <!-- <p><span class="warn">가입 시 등록한 아이디를 입력해 주세요.</span></p> -->
            </div>
            <div class="find_email">
                <label for="email" id="email">이메일</label>
                <input type="text" name="email_id" id="email_id"  maxlength="20" size="30" placeholder="이메일을 입력해주세요">
                <!-- <p><span class="warn">가입 시 등록한 이메일을 입력해 주세요.</span></p> -->
            </div>
            </div>
            <div class="confirm">
                <input type="text" name="confirm_btn" id="confirm_btn"  maxlength="20" size="30" placeholder="확인">
            </div>
        </form>
    </div>
</div>
</body>
</html>