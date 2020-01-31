<?php
    if(Request::segment(1) == 'kh') {
        $contact = "ទាក់ទងមកពួកយើង";
        $name = "ឈ្មោះ";
        $email = "អុីម៊ែល";
        $subject = "ប្រធានបទ";
        $mess​​ = "មតិយោបល់";
        $send = "បញ្ជូន";
    }elseif(Request::segment(1) == 'cn') {
        $contact = "联系我们";
        $name = "名称";
        $email = "电子邮件";
        $subject = "学科";
        $mess​​ = "信息";
        $send = "发送消息";
    }elseif(Request::segment(1) == 'en') {
        $contact = "CONTACT US";
        $name = "Name";
        $email = "Email";
        $subject = "Subject";
        $mess​​ = "Message";
        $send = "SEND MESSAGE";
    }else {
        $contact = "CONTACT US";
        $name = "Name";
        $email = "Email";
        $subject = "Subject";
        $mess​​ = "Message";
        $send = "SEND MESSAGE";
    }
?>
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-wrap form-style">
                    <h3>{{ $contact }}</h3>
                    <div class="cf-msg"></div>
                    <form action="{{ url('mail') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <input type="text" placeholder="{{ $name }}" name="fname">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <input type="text" placeholder="{{ $email }}" name="email">
                            </div>
                            <div class="col-xs-12">
                                <input type="text" placeholder="{{ $subject }}" name="subject">
                            </div>
                            <div class="col-xs-12">
                                <textarea class="contact-textarea" placeholder=" {{ $mess​​ }} " name="message"></textarea>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="cont-submit btn-contact" name="submit">{{ $send }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php $setting = App\Setting::where('language',$local)->get(); ?>
            @foreach($setting as $set)
                <div class="col-md-4">
                    <div class="contact-wrap">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>{{ $set->phone }} </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>{{ $set->email }}</p>
                            </li>
                            <li>
                                <i class="fa fa-location-arrow"></i>
                                {{ strip_tags($set->address) }}
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div id="googleMap">{!! $set->address_site !!}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>