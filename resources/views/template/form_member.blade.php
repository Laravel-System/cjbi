<?php
    if($code == "jp"){
        $mem_form = "会員登録申請書";
        $personal_info = "会員情報";
        $fam_name = "クメール語または日本語 (EN)";
        $fam_name_lan = "姓 (日本語)";
        $give_name_lan = "名 (日本語)";
        $give_name = "クメール語または日本語 (EN)";
        $gender = "性別";
        $male = "男性";
        $female = "女性";
        $dob = "生年月日";
        $nationality = "国籍";
        $phone = "携帯番号または連絡の取れる電話番号";
        $email = "メールアドレス";
        $job = "企業または団体における職位";
        $address = "自宅の住所";
        $ref_info = "推薦者に関する情報";
        $ref_name = "推薦者の氏名（英語）";
        $ref_phone = "電話番号";
        $ref_email = "メールアドレス";
        $att_doc = "添付頂く資料";
        $moc = "商業省への登録書類";
        $patent = "事業許可証";
        $photo = "申請者の写真";
        $app_cv = "申請者の履歴書";
        $val_cert_org = "企業や法人の事業許可証";
        $val_cert_2a = "2-a. 商業省への登録書類";
        $val_cert_2b = "事業許可証";
        $val_comment = "*企業や法人が商業省へ登録されていな場合は2-bのみご提出ください。";
        $company_logo = "企業または法人のロゴ";
        $cicg = "企業情報";
        $com_name = "企業または法人の名称（英語）";
        $year_establish = "企業または法人の創業年月";
        $buss_type = "従事しているビジネスの種類";
        $com_phone = "企業または法人の電話番号";
        $com_email = "企業または法人のメールアドレス";
        $com_web = "企業または法人のウェブサイトのアドレス";
        $com_addr = "企業または法人の住所";
        $com_des = "企業または法人の事業内容";
        $com_comment = '私は、この申請にかかる提出した全ての書類、情報に相違ないことを誓い、また、カンボジア王国及び日本国の法律や法令、規則並びに<a href="'.url($code.'/statutes').'" style="color: #3c52a4">CJBIの会則</a>、規則、決定を遵守することを誓います。';
        $com_comment2 = '<span class="label-bol">注意事項：</span>CJBIに入会するにあたり年会費である100米ドルをお支払い頂く必要があります。また、上記において登録した情報や事業許可証に変更がある場合はCJBI事務局にお申し出ください。';
        $mem_process = "会員登録申請の承認プロセス";
        $mem_description = '<input type="radio" name="terms" id="terms_radio" value="yes" class="text-right"> CJBI会員入会ガイドラインの内容に同意します';
        $submit = "提出";
    }else{
        $mem_form = "Membership Application Form";
        $personal_info = "PERSONAL INFORMATION";
        $fam_name = "Family Name (EN)";
        $fam_name_lan = "Family Name (Khmer)";
        $give_name_lan = "Given Name (Khmer)";
        $give_name = "Given Name (EN)";
        $gender = "Gender";
        $male = "Male";
        $female = "Female";
        $dob = "Date of Birth";
        $nationality = "Nationality";
        $phone = "Mobile Phone";
        $email = "Personal E-mail";
        $job = "Job Title";
        $address = "Home Address";
        $ref_info = "REFEREE'S INFORMATION";
        $ref_name = "Name of Referee (English)";
        $ref_phone = "Phone";
        $ref_email = "Email";
        $att_doc = "Attach Documents";
        $photo = "Your Photo";
        $app_cv = "Applicant's CV (Bio Profile)";
        $moc = "MOC";
        $patent = "Patent";
        $val_cert_org = "Valid certification of a company/an organization";
        $val_cert_2a = "2-A: Company's registration with the Ministry of Commerce.";
        $val_cert_2b = "2-B: Valid patent.";
        $val_comment = "* If your company is not registered in the Ministry of Commerce, please submit only 2-B.";
        $company_logo = "Company Logo";
        $cicg = "COMPANY INFORMATION FOR CJBI REGISTRATION";
        $com_name = "Company Name (in English)";
        $year_establish = "Years of Establishment";
        $buss_type = "Type of Business";
        $com_phone = "Company Phone";
        $com_email = "Company E-mail";
        $com_web = "Company Website";
        $com_addr = "Company Address";
        $com_des = "Company Description";
        $com_comment = 'I confirm the above information is complete and correct and I will give a pledge to abide by the laws and regulations
        of the Kingdom of Cambodia and Japan as well as <a href="'.url($code.'/statutes').'" style="color: #3c52a4">CJBI’s statute</a>, internal regulation and decisions.';
        $com_comment2 = '<span class="label-bol">NOTE:</span>  You are required to pay an annual membership fee of <span class="label-bol">USD 100</span> and inform any changes the
        above mentioned information and the valid patent if your application form is approved.';
        $mem_process = "Membership Approval Process";
        $mem_description = '<input type="radio" name="terms" id="terms_radio" value="yes" class="text-right"> I have read and agreeed to the CJBI Membership Guideline';
        $submit = "SUBMIT";
    }
?>
@if(Request()->session()->has('success'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Thank You",
            text: " ",
            icon: "success",
            buttons: false,
            timer: 2000,
        })
    </script>
@endif
<div class="register">
    <div class="container">
        <div class="col-md-9">
            <div class="wthree-services-bottom-grids">
                @foreach($cat->post as $p)
                    <div class="col-md-12 wthree-services-right">
                        <div class="wthree-services-right-top">
                            @if($p->action_title==1)
                            <h2 class="w3ls_head" style="text-align: center;font-size: 30px;">{{$p->title}}</h2>
                            @endif
                            {!! $p->description !!}
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                @endforeach
            </div>
            <hr>
            <div class="title-form">
                <h2>{{$mem_form}}</h2>
            </div>
            <div class="well clearfix">
                <div id="service_form_result agileinfo-subscribe" data-notify-type="success" data-notify-msg=""></div>
                <form id="regis_form" action="{{url('register/member')}}" method="POST" novalidate="novalidate"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="language_url" value="<?php echo Request()->segment(1); ?>">
                    <div class="clearfix"></div>
                    <div class="fancy-title title-bottom-border">
                        <h3>{{$personal_info}}</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col_half">
                        <label>{{$fam_name}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="fam_name" type="text" class="fam_name required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_half col_last">
                        <label>{{$give_name}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="give_name" type="text" class="give_name form-control input-block-level">
                    </div>
                    <div class="col_half">
                        <label>{{$fam_name_lan}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="fam_name_lan" type="text" class="fam_name_lan required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_half col_last">
                        <label>{{$give_name_lan}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="give_name_lan" type="text" class="give_name_lan form-control input-block-level">
                    </div>
                    <div class="col_half">
                        <label>{{$gender}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <select name="gender" class="required form-control input-block-level" aria-required="true">
                            <option value="male">{{ $male }}</option>
                            <option value="female">{{ $female }}</option>
                        </select>
                    </div>
                    <div class="col_half col_last">
                        <label>{{$dob}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="dob" type="text" class="dob form-control input-block-level">
                    </div>
                    <div class="col_half ">
                        <label>{{$nationality}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="nationality" type="text" class="nationality form-control input-block-level">
                    </div>
                    <div class="col_half col_last">
                        <label>{{$phone}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="per_phone" type="text" class="per_phone form-control input-block-level">
                    </div>
                    <div class="col_half">
                        <label>{{$email}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="email" type="email" class="re_email required form-control input-block-level" required="">
                    </div>
                    <div class="col_half col_last">
                        <label>{{$job}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="job_title" type="text" class="job_title form-control input-block-level">
                    </div>
                    <div class="col_full">
                        <label>{{$address}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <textarea name="home_address" type="text" class="home_address form-control input-block-level"></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <!-- end representative one-->
                    <div class="fancy-title title-bottom-border">
                        <h3>{{$ref_info}}</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col_half">
                        <label> {{$ref_name}} </label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="ref_name" type="text" class="ref_name required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_half col_last">
                        <label> {{$ref_phone}}</label>
                        <input name="ref_phone" type="text" class="required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_full">
                        <label> {{$ref_email}}</label>
                        <input name="ref_email" type="text" class="required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="clearfix"></div>

                    <div class="fancy-title title-bottom-border">
                        <h3>{{$att_doc}}</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col_full">
                        <label>{{$photo}} </label>
                        <label class="attach-cond"> <span>*File: jpg, gif, or png (up to 3MB)</span></label>
                        <input name="photo" id="choose-file" type="file" class="photo required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_full">
                        <label>{{$app_cv}} </label>
                        <label class="attach-cond"> <span>*File: pdf, doc or docx (up to 3MB)</span></label>
                        <input name="cv" type="file" class="cv required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_full">
                        <label>
                            {{$val_cert_org}} <br>
                            <ul style="margin:0; padding:0 0 0 30px;">
                                <li style="font-size: 13px;">{{$val_cert_2a}}</li>
                                <li style="font-size: 13px;">{{$val_cert_2b}}</li>
                            </ul>
                            {{$val_comment}}
                        </label><br>
                        <label>{{$moc}}</label>
                        <label class="attach-cond"> <span> *File: pdf, doc or docx (up to 3MB)</span></label>
                        <input name="moc" type="file" class="required form-control input-block-level"
                            aria-required="true">

                        <label>{{$patent}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <label class="attach-cond"> <span> *File: pdf, doc or docx (up to 3MB)</span></label>
                        <input name="patent" type="file" class="patent required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_full">
                        <label>{{$company_logo}}</label>
                        <label class="attach-cond"> <span>*File: jpg, gif, or png (up to 3MB)</span></label>
                        <input name="company_logo" type="file" class="required form-control input-block-level"
                            aria-required="true">
                    </div>

                    <div class="clearfix"></div>
                    <!--start of representative two-->
                    <div class="fancy-title title-bottom-border">
                        <h3>{{$cicg}}</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col_half">
                        <label>{{$com_name}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="com_name" type="text" class="com_name required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_half col_last">
                        <label>{{$year_establish}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="year_estab" type="text" class="year_estab form-control input-block-level">
                    </div>
                    <div class="col_half">
                        <label>{{$buss_type}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="buss_type" type="email" class="buss_type required form-control input-block-level"
                            aria-required="true">
                    </div>
                    <div class="col_half col_last">
                        <label>{{$com_phone}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="com_phone" type="text" class="com_phone form-control input-block-level">
                    </div>
                    <div class="col_half">
                        <label>{{$com_email}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="com_email" type="text" class="com_email form-control input-block-level">
                    </div>
                    <div class="col_half col_last">
                        <label>{{$com_web}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <input name="com_website" type="text" class="com_website form-control input-block-level">
                    </div>
                    <div class="col_full">
                        <label>{{$com_addr}}</label><span class="span" style="font-size:15px;color:red;"> * </span>
                        <textarea name="com_address" type="text" class="com_address form-control input-block-level"></textarea>
                    </div>
                    <div class="col_full">
                        <label>{{$com_des}}</label>
                        <textarea name="com_description" type="text" class="form-control input-block-level">  </textarea>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col_full">
                        <label class="label-desc">{!! $com_comment !!}
                        </label>
                        <label class="label-desc"> {!! $com_comment2 !!}
                        </label>
                    </div>
                    <div class="clearfix"></div>
                    <div class="fancy-title title-bottom-border">
                        <h3>{{$mem_process}}</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-9">
                        <label class="label-desc"> <span>
                        {!! $mem_description !!}
                        </label>
                    </div>
                    <div class="col-md-3">
                        <input type="button" id="btn_submit" class="btn btn-primary pull-right" value="{{$submit}}" disabled>
                    </div>
                </form>
            </div>
        </div>
        @include('template.layout.sidebar')
    </div>
</div>
<script>
    $("#terms_radio").click(function(){
        $("#btn_submit").removeAttr('disabled');
    });
    
    var arr_name = [
                    'fam_name','give_name','fam_name_lan','give_name_lan','dob','nationality',
                    'per_phone','re_email','job_title','home_address','ref_name','photo','cv',
                    'patent','com_name','year_estab','buss_type','com_phone','com_email','com_website',
                    'com_address'
                ];
    
    $("#btn_submit").click(function(){
        var len = arr_name.length;
        for(var i=0;i<arr_name.length;i++){
            if($("."+arr_name[i]).val() == ''){
                $("."+arr_name[i]).parent().find("label").attr('style','color:red;');
            }else{
                len--;
            }
        }  
        
        if(len == 0){
            $("#regis_form").submit();
        }
    })
</script>
<style>
    .title-form {
        text-align: center;
    }
    .title-form h2{
        color: #3c52a4
    }
    .register {
        padding: 2em 0;
    }
    .label-desc {
        text-transform: none;
        line-height: 175%;
        color: #3c52a4;
    }
    .label-bol {
        font-style: italic;
        font-weight: 900;
    }
    .attach-cond {
        float: right;
        font-size: 9px;
        font-family: 'Raleway', sans-serif;
        text-transform: none;
        font-style: italic;
        color: #666;
    }
    /* p, pre, ul, ol, dl, dd, blockquote, address, table, fieldset, form {
        margin-bottom: 20px !important;
    }
    p, pre, ul, ol, dl, dd, blockquote, address, table, fieldset, form {
        margin-bottom: 30px;
    } */
    label {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #555;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .fancy-title {
        position: relative;
        margin-bottom: 30px;
    }

    .fancy-title.title-bottom-border h1,
    .fancy-title.title-bottom-border h2,
    .fancy-title.title-bottom-border h3,
    .fancy-title.title-bottom-border h4,
    .fancy-title.title-bottom-border h5,
    .fancy-title.title-bottom-border h6,
    .more-link {
        border-bottom-color: #283991;
    }

    .fancy-title.title-bottom-border h1,
    .fancy-title.title-bottom-border h2,
    .fancy-title.title-bottom-border h3,
    .fancy-title.title-bottom-border h4,
    .fancy-title.title-bottom-border h5,
    .fancy-title.title-bottom-border h6 {
        display: block;
        background: transparent;
        padding: 0 0 10px;
        border-bottom: 2px solid #1ABC9C;
    }

    .postcontent h3 {
        margin-bottom: 15px;
    }

    form .col_full,
    form .col_half,
    form .col_one_third,
    form .col_two_third,
    form .col_three_fourth,
    form .col_one_fourth,
    form .col_one_fifth,
    form .col_two_fifth,
    form .col_three_fifth,
    form .col_four_fifth,
    form .col_one_sixth,
    form .col_five_sixth {
        margin-bottom: 25px;
    }

    .col_half {
        width: 48%;
    }

    form .col_full,
    form .col_half,
    form .col_one_third,
    form .col_two_third,
    form .col_three_fourth,
    form .col_one_fourth,
    form .col_one_fifth,
    form .col_two_fifth,
    form .col_three_fifth,
    form .col_four_fifth,
    form .col_one_sixth,
    form .col_five_sixth {
        margin-bottom: 25px;
    }

    .col_full {
        clear: both;
        float: none;
        margin-right: 0;
    }

    .col_full {
        width: 100%;
    }

    .col_last {
        margin-right: 0 !important;
        clear: right;
    }

    .postcontent,
    .sidebar,
    .col_full,
    .col_half,
    .col_one_third,
    .col_two_third,
    .col_three_fourth,
    .col_one_fourth,
    .col_one_fifth,
    .col_two_fifth,
    .col_three_fifth,
    .col_four_fifth,
    .col_one_sixth,
    .col_five_sixth {
        display: block;
        position: relative;
        margin-right: 4%;
        margin-bottom: 50px;
        float: left;
    }
</style>