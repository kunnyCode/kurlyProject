<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/login.css">
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
</head>
<body>
    <div class="container">
        <section>
            <div class="login">
                <div class="login_form">
                <h1 class="tit_login">로그인</h1>
                <!-- <td> -->
                    <div class="class1">
                    <p><input type="text" name="login_id" id="login_id" maxlength="20" size="20" tabindex="1" placeholder="아이디를 입력해주세요."></p></div>

                    <div class="class2">
                    <p><input type="password" name="login_pw" id="login_pw" maxlength="20" size="20" tabindex="2" placeholder="비밀번호를 입력해주세요."></p></div>
                    <!-- </td> -->
                </div>
                    <div class="checkbox_double">
                        <label class="lable_checkbox">
                            <input type="checkbox" id="chk_security" name="chk_security" value="y" checked="checked"> 보안접속
                        </label>

                        <!-- <div class="search_idpw"> -->
                        <a href="#" class="link"onclick="#" id="search_id">아이디 찾기</a>

                        <span class="ico">|</span>

                        <a href="#" class="link" id="search_pw">비밀번호 찾기</a>
                    <!-- </div> -->
                </div>
                    <div class="submit_form">
                        <td>
                            <button type="submit" class="btn_num1">
                                <span class="text">로그인</span>
                            </button>
                        <p>
                            <button type="submit"
                                class="btn_num2"></a>
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