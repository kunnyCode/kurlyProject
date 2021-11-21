<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>로그인</title>
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box;}
        body{
            font-family:'Noto Sans KR' sans=serif ;
            font-size: 13px;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            background-size: auto;
        }
    </style>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <div class="container">
        <section>
            <div class="login">
                <div class="login_form"></div>
                <h1>로그인</h1>
                <td>
                    <p><input type="text" name="login_id" id="login_id" maxlength="20" size="20" tabindex="1" placeholder="아이디를 입력해주세요."></p>
                    <p><input type="text" name="login_pw" id="login_pw" maxlength="20" size="20" tabindex="2" placeholder="비밀번호를 입력해주세요."></p>
                    </td>
                    <div class="checkbox_double">
                        <input type="checkbox"> 보안접속
                    </div>
                    <div class="search_idpw">
                        <a href="#" class="link"onclick="#">아이디 찾기</a>
                        <span class="ico">|</span>
                        <a href="#" class="link" onclick="#">비밀번호 찾기</a>
                    </div>
                    <div class="submit_form">
                        <td>
                            <button type="submit" class="btn_num1">
                                <span class="text">로그인</span>
                            </button>
                        <p>
                            <button>
                                <a href="#" class="link" class="btn_num2"></a>
                                <span class="text">회원가입</span>
                            </button>
                        </p>
                        </td>
                    </div>

            </div>
        </section>
    </div>
</body>
</html>