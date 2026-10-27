<?php
    if(Request()->segment(1) == 'jp'){
        $login_lang = '会員限定';
        $user_lang = 'ユーザー名';
        $pass_lang = 'パスワード';
        $log_lang = 'ログイン';
        
    }else{
        $login_lang = 'MEMBER';
        $user_lang = 'username';
        $pass_lang = 'password';
        $log_lang = 'Login';
    
    }
?>
<dl class="aside--login">
    <dt class="aside--login-txt">{{$login_lang}}</dt>
    <dd>
    <script type="text/javascript">
        var recaptchaVerifyCallback = function() {
            document.getElementById('side_btn_submit').disabled = false;
        }
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey' : '6Lcp3PAUAAAAAE4NYYDpmHiceCZ8ugey_enCCChZ',
                'callback': recaptchaVerifyCallback
            });
        };
    </script>
        <form name="loginform" id="" action="{{url($code.'/login/member')}}" method="post">
        {{ csrf_field() }}
            <p><input id="user_login" type="text" class="aside--login-input username" size="20"
                    value="" name="email" placeholder="{{$user_lang}}"></p>
            <p><input id="user_pass" type="password" class="aside--login-input password" size="20"
                    value="" name="password" placeholder="{{$pass_lang}}"></p>
            <br><div id="html_element" style=""></div>        
            <p><input id="side_btn_submit" type="submit" class="aside--btn login" disabled value="{{$log_lang}}"
                    name="wp-submit"></p>
        </form>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer>
        </script>
    </dd>
</dl>
<style>
    #html_element {
        transform:scale(0.84);
        -webkit-transform:scale(0.84);
        transform-origin:0 0;
        -webkit-transform-origin:0 0;
    }
    .g-recaptcha {
        transform:scale(0.77);
        transform-origin:0 0;
    }
    .aside--login {
        border: 2px solid #005B9B;
    }
    .aside--login p {
        margin: 0;
    }

    .aside--login dt {
        background-color: #2a388f;
        border-bottom: 1px solid red;
    }

    .aside--login-txt {
        padding: 20.5px 0;
        font-size: 20px;
        font-weight: 100;
        color: #fff;
        background-color: #005B9B;
        letter-spacing: 0.05em;
        text-align: center;
        line-height: 1.37;
    }

    .aside--login dd {
        padding: 20px 14px 22px;
        background-color: #2a388f;
    }

    body,
    div,
    pre,
    p,
    a,
    img,
    form,
    fieldset,
    input,
    textarea,
    select,
    option,
    dl,
    dt,
    dd,
    ul,
    ol,
    li,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    table,
    th,
    td,
    embed,
    object,
    figure,
    figcaption {
        margin: 0;
        padding: 0;
    }

    .aside--login-input.username {
        color: black;
        background: #DDF0FF url(../img/share/user_2.png) no-repeat 10px center / 14px auto;
    }

    .aside--login-input {
        padding: 0 8px 0 8px;
        width: 100%;
        font-size: 16px;
        font-weight: 400;
        line-height: 1;
        border-radius: 0;
        height: 32px;
        border: 0;
        border-radius: 0;
    }

    .aside--login-input.password {
        margin-top: 10px;
    }

    .aside--login-input.password {
        color: black;
        background: #DDF0FF url(../img/share/locked.png) no-repeat 10px center / 14px auto;
    }

    .aside--login-input {
        padding: 0 8px 0 8px;
        width: 100%;
        font-size: 16px;
        font-weight: 400;
        line-height: 1;
        border-radius: 0;
        height: 40px;
        border: 0;
        border-radius: 0;
    }

    .rc-anchor-light.rc-anchor-normal {
        border: 1px solid #d3d3d3;

    }

    .rc-anchor-light {
        background: #f9f9f9;
        color: #000;
    }

    .rc-anchor-normal {
        height: 74px;
        width: 300px;
    }

    .rc-anchor {
        border-radius: 3px;
        box-shadow: 0 0 4px 1px rgba(0, 0, 0, 0.08);
        -webkit-box-shadow: 0 0 4px 1px rgba(0, 0, 0, 0.08);
        -moz-box-shadow: 0 0 4px 1px rgba(0, 0, 0, 0.08);
    }

    .aside--login .g-recaptcha {
        position: relative;
        margin-top: 15px;
    }

    .aside--btn:hover {
        text-decoration: none;
    }

    .aside--btn.login,
    .aside--btn.primary {
        background-color: #0079CB;
        background-image: linear-gradient(to bottom, #73C2F8, #0079CB);
    }

    .aside--btn {
        padding: 2px;
        display: block;
        margin-top: 0px;
        width: 100%;
        font-size: 16px;
        font-weight: bold;
        color: #fff !important;
        text-align: center;
        border: 0;
        border-radius: 0;
        -webkit-box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.16);
        -moz-box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.16);
        box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.16);
        cursor: pointer;
    }
</style>