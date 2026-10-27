<?php
	if($code == 'jp'){
		$contact_us_lang = "お問い合わせ";
		$contact_us_name_lang = "お‌名‌前";
		$contact_us_email_lang = "メールアドレス";
		$company_email_lang = "企業名";
		$contact_us_mess_lang = "メッセージ本文";
		$contact_us_address_lang = "カンボジア日本ビジネス投資協会の事務局の所在地";
		$contact_us_phone_lang = "電話番号";
		$contact_us_email_lang = "メールアドレス";
		$contact_us_facebook_lang = "フェイスブック";	
		$contact_us_submit = "提出する";
	}else{
		$contact_us_lang = "CONTACT US";
		$contact_us_name_lang = "Name";
		$contact_us_email_lang = "Email";
		$company_email_lang = "Company";
		$contact_us_mess_lang = "Message";
		$contact_us_address_lang = "Address";
		$contact_us_phone_lang = "Phones";
		$contact_us_email_lang = "Email";
		$contact_us_facebook_lang = "Facebook";	
		$contact_us_submit = "Submit";
	}
?>
<div class="contact"> 
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head">{{$contact_us_lang}}</h2>
			</div>
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-right"> 
					<form action="#" method="post">  
						<input type="text" name="Name" placeholder="{{$contact_us_name_lang}} *" required="">
						<input type="text" class="email" name="Email" placeholder="{{$contact_us_email_lang}} *" required="">
						<input type="text" name="Phone no" placeholder="{{$contact_us_phone_lang}} *" required="">
						<input type="text" class="email" name="company" placeholder="{{$company_email_lang}} *" required="">
						<textarea name="Message" placeholder="{{$contact_us_mess_lang}}" required=""></textarea>
						<input type="submit" value="{{$contact_us_submit}}" > 
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<div class="address">
						<h5>{{$contact_us_address_lang}} </h5>
						<p><i class="glyphicon glyphicon-home"></i> Cambodia-Japan Cooperation Center (CJCC),  The Royal University of Phnom Penh  (RUPP) Russian Confederation Blvd., Khan Tuol Kork, Phnom Penh, Cambodia. P.O. Box: 1290.</p>
					</div>
					<div class="address address-mdl">
						<h5>{{$contact_us_phone_lang}} </h5>
						<p><i class="glyphicon glyphicon-earphone"></i> +855 (0)12 771 676 </p>
						<p><i class="glyphicon glyphicon-phone"></i> +855 (0)98 99 89 08</p>
					</div>
					<div class="address address-mdl">
						<h5>{{$contact_us_email_lang}} </h5>
						<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:secretary.general@cjbi.asia">secretary.general@cjbi.asia</a></p>
					</div>
					<div class="address">
						<h5 style="margin-bottom: 1em;">{{$contact_us_facebook_lang}} </h5>
						<div class="fb-page" data-href="https://www.facebook.com/cjbi.asia/" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cjbi.asia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cjbi.asia/">CJBI</a></blockquote></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div> 
	</div>
	<div class="agileits-w3layouts-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.7616899779146!2d104.89150531462573!3d11.568934247228677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517512b63833%3A0x560917ccb993e08c!2z4Z6Y4Z6H4Z-S4Z6I4Z6Y4Z6O4Z-S4Z6M4Z6b4Z6f4Z6g4Z6U4Z-S4Z6a4Z6P4Z634Z6U4Z6P4Z-S4Z6P4Z634Z6A4Z624Z6a4Z6A4Z6Y4Z-S4Z6W4Z674Z6H4Z62LeGeh-GelOGfieGeu-GekyAo4Z6YLuGeny7hnoAu4Z6HKQ!5e0!3m2!1skm!2skh!4v1585007821701!5m2!1skm!2skh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=2732495643493236&autoLogAppEvents=1" nonce="JbUhZSlF"></script>