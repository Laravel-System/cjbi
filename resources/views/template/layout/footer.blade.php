<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
	src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2732495643493236&autoLogAppEvents=1">
</script>
<div class="w3-agile-footer">
	<div class="container">
		<div class="footer-grids">
		<?php
			if($code == 'en'){
				$code_id = 1;
				$emb_lang = "Embassy of Japan in Cambodia";
				$jica_lang = "Japan International Cooperation Agency (JICA)";
				$address_lang = "Address";
				$phone_lang = "Phones";
				$contact_lang = "Contact us";
				$email_lang = "Email";
				$facebook_lang = "Facebook";
				$link_lang = "Link";
				$info_lang = "Information";
				$about_lang = "About CJBI";
				$link_title = "Japan International Cooperation Agency Cambodia Office";
				$link_title1 = "Cambodian-Japan Cooperation Center";
			}else{
				$code_id = 2;
				$emb_lang = "在カンボジア日本国大使館";
				$jica_lang = "国際協力機構 (JICA) カンボジア事務所";
				$address_lang = "カンボジア日本ビジネス投資協会の事務局の所在地";
				$phone_lang = "電話番号";
				$contact_lang = "お問い合わせ";
				$email_lang = "メールアドレス";
				$facebook_lang = "フェイスブック";
				$link_lang = "リンク集";
				$info_lang = "お知らせ";
				$about_lang = "CJBIとは";
				$link_title = "国際協力機構 (JICA) カンボジア事務所";
				$link_title1 = " カンボジア日本人材開発センター (CJCC)";
			}
			$foot_about = App\Menu::whereIn('parent_id',[2,25])->where('language',$code_id)->get();
			$foot_info = App\Menu::whereIn('parent_id',[3,26])->where('language',$code_id)->get();
          	$foot_link = App\Category::whereIn('id',[3,34])->where('language',$code_id)->first()->post()->get();
		?>
			<div class="col-md-3 footer-grid">
				<div class="footer-grid-heading">
					<h4>{{ $about_lang }}</h4>
				</div>
				<div class="footer-grid-info">
					<ul>
						@foreach($foot_about as $a)
						<li><a href="{{url($code.'/'.$a->link)}}"><i class="fa fa-angle-right" aria-hidden="true"> </i> {{ $a->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-md-3 footer-grid">
				<div class="footer-grid-heading">
					<h4>{{ $info_lang }}</h4>
				</div>
				<div class="footer-grid-info">
					<ul>
						@foreach($foot_info as $i)
						<li><a href="{{url($code.'/'.$i->link)}}"><i class="fa fa-angle-right" aria-hidden="true"> </i> {{ $i->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-md-3 footer-grid">
				<div class="footer-grid-heading">
					<h4>{{$link_lang}}</h4>
				</div>
				<div class="footer-grid-info">
					<ul>
						<li><a href="https://www.cjcc.edu.kh/site/index.php/en"><i class="fa fa-angle-right" aria-hidden="true"></i> {{ $link_title1 }} </a></li>
						<li><a href="https://www.jica.go.jp/english/index.html"><i class="fa fa-angle-right" aria-hidden="true"></i> {{ $link_title }} </a></li>
                      <!-- @foreach($foot_link as $li)
						<li><a href="{{ $li->link_download }}"><i class="fa fa-angle-right" aria-hidden="true"></i> {{ $li->title }}</a></li>
                      @endforeach -->
					</ul>
				</div>
			</div>
			<div class="col-md-3 footer-grid">
				<div class="footer-grid-heading">
					<h4>{{ $contact_lang }}</h4>
				</div>
				<div class="footer-grid-info">
					<p>{{ $address_lang }}:
						<span>Cambodia-Japan Cooperation Center (CJCC),  The Royal University of Phnom Penh  (RUPP) Russian Confederation Blvd., Khan Tuol Kork, Phnom Penh, Cambodia. P.O. Box: 1290.</span>
					</p>
					<p class="phone">{{ $phone_lang }}: +855 (0)12 771 676 <br> +855 (0)98 99 89 08
						<span>{{ $email_lang }} : <a
								href="mailto:secretary.general@cjbi.asia" style="color: #ccc;"> secretary.general@cjbi.asia</a></span>
					</p>
					<p>{{ $facebook_lang }}: <a href="https://www.facebook.com/cjbi.asia/" style="color: #ccc;"> @cjbi.asia</a></p>
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
		<div class="agileits-w3layouts-copyright">
			<!-- <p>© 2020 All Rights Reserved | Design by <a href="http://titb.biz/"> TITB</a> </p> -->
		</div>
	</div>
</div>