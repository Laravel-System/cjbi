<?php $setting = App\Setting::where('language','=',$local)->get(); ?>
<?php
    if (Request::segment(1) == 'kh') {
        $mail = "អុីម៉ែល";
        $phone = "ទូរសព្ទ័";
        $locale = "kh";
    }elseif (Request::segment(1) == 'cn') {
        $mail = "邮件";
        $phone = "电话号码";
        $locale = "cn";
    }elseif (Request::segment(1) == 'en') {
        $mail = "MAIL US";
        $phone = "PHONE US";
        $locale = "en"; 
    }else{
        $mail = "MAIL US";
        $phone = "PHONE US";
        $locale = "";
    }
?>
<header class="header-area">
    <div class="header-middle bg-2">
        <div class="container">
            <div class="row">
                @foreach($setting as $settings)
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="logo">
                            @if($locale)
                                <a href="{{ url($locale.'/home') }}"><img src="{{url('images/'.$settings->logo_image) }}"></a>
                            @else
                                <a href="{{ url('home') }}"><img src="{{url('images/'.$settings->logo_image) }}"></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="header-middle-right" style="margin-top: 20px;">
                            <ul>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="contact-info">
                                        {!! $settings->work_time !!}
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>{{$mail}}</p>
                                        <span>{{ $settings->email }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <p>{{$phone}}</p>
                                        <span> {{ $settings->phone }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>