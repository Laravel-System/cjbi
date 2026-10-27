<?php
    if(Request()->segment(1) == 'jp'){
        $login_lang = '会員限定';
    }else{
        $login_lang = 'Inside this Issue';
    }
?>
<?php ?>
<dl class="aside--login">
    <dt class="aside--login-txt">{{$login_lang}}</dt>
    <dd>
            {!! $cat->description !!}
    </dd>
</dl>
<style>
    hr{
        margin-top:5px;
        margin-bottom:5px;
    }
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


    .aside--login-input.password {
        margin-top: 10px;
    }

    .aside--login-input.password {
        color: black;
        background: #DDF0FF url(../img/share/locked.png) no-repeat 10px center / 14px auto;
    }
    .rc-anchor-light.rc-anchor-normal {
        border: 1px solid #d3d3d3;

    }

    .rc-anchor-light {
        background: #f9f9f9;
        color: #000;
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

</style>