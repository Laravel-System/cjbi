<div class="news-letter">
  <div class="container">
    <div class="w3l-heading">
      <h3 class="w3ls_head">{{$cat->name}} </h3>
    </div>
    <div class="agileinfo-subscribe">
      <form action="{{url($code.'/login/member')}}" method="post">
      {{ csrf_field() }}
        <input type="email" placeholder="Email" name="email" required="">
        <input type="password" placeholder="******" name="password" required="">
        <input type="submit" value="Login">
        <div class="clearfix"> </div>
      </form>
    </div>
  </div>
</div>