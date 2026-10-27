<style>
    .closed_th {
        display: none;
    }
</style>
@if(Request()->session()->get('member_id') == 0)
<?php
    if($code == 'jp'){
        $mem_login = "会員限定";
        $mem_email = "ユーザー名";
        $mem_log = "パスワード";
        
    }else{
        $mem_login = "Member Only";
        $mem_email = "Email";
        $mem_log = "Login";
    }
?>
<div class="news-letter">
  <div class="container">
    <div class="w3l-heading">
      <h3 class="w3ls_head">{{$mem_login}} </h3>
    </div>
    <div class="agileinfo-subscribe">
      <form action="{{url($code.'/login/member')}}" method="post">
      {{ csrf_field() }}
        <input type="email" placeholder="{{$mem_email}}" name="email" required="">
        <input type="password" placeholder="******" name="password" required="">
        <input type="submit" value="{{$mem_log}}">
        <div class="clearfix"> </div>
      </form>
    </div>
  </div>
</div>
@else
<?php
    if($code == 'jp'){
        $sector = "セクタ";
        $member_member = "メンバー";
        $member_country = "事業拠点";
        $all_sect = "セクターでの検索";
        $all_mem = "企業名での検索";
        $all_country = "事業拠点での検索";
        $all_search = "検索";
    }else{
        $sector = "Sector";
        $member_member = "Member";
        $member_country = "Country";
        $all_sect = "All Sectors";
        $all_mem = "All Members";
        $all_country = "All Countries";
        $all_search = "Search";
    }
?>
<link rel="stylesheet" href="{{url('template/datatable/datatables.min.css')}}">
<div class="contact">
    <div class="container">
        <div class="col-md-9">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th class="closed_th"></th>
                        <th class="closed_th"></th>
                        <th></th>
                        <th>{{$sector}}</th>
                        <th>{{$member_member}}</th>
                        <th width="70px">{{$member_country}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cat->post->sortBy("job_type") as $p)
                    <?php  
                        $ordering = App\Post::where('id',$p->translation)->first();
                        $url_det = url($code.'/'.'detail'.'/'.$p->id.'/'.$p->link)."?page=member_profile";
                    ?>
                    <tr>
                        <td class="closed_th">{{ !empty($ordering) ? $ordering->job_type : $p->job_type }}</td>
                        <th class="closed_th">{{ !empty($ordering) ? $ordering->title : $p->title }}</th>
                        <td><img src="{{url('images/'.$p->image)}}" alt="" srcset="" width="20px" height="20px"></td>
                        <td><a href="{{$url_det}}" style="color:#283991;font-weight:bold;">{{ $p->job_type }}</a></td>
                        <td>{{$p->title}}</td>
                        <td>{{$p->location_job}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('template.layout.sidebar')
    </div>
</div>
<?php 
    
    $locate = $cat->post()->groupBy("location_job")->get(); 
    $mem_list = $cat->post();
    if($code == 'jp'){
        $job_t = $cat->post()->leftJoin('posts AS p','posts.translation','=','p.id')->select('posts.*','p.job_type AS p_job_type')->orderBy('p_job_type','ASC')->groupBy("job_type")->get(); 
        $mem_list = $mem_list->leftJoin('posts AS p','posts.translation','=','p.id')->select('posts.*','p.title AS p_title')->orderBy('p_title','ASC')->get();
    }else{
        $mem_list = $mem_list->orderBy('title','ASC')->get();
        $job_t = $cat->post()->groupBy("job_type")->get(); 
    }
?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="{{url('template/datatable/datatables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        var txt1 = '<div class="form-group col-sm-6">' +
            '<select id="sector_select" class="form-control">' +
            '<option value = ""> {{$all_sect}} </option>' +
            @foreach($job_t as $s)
            <?php $ordering = App\Post::where('id',$s->translation)->first() ?>
            '<option value = "<?php echo !empty($ordering) ? $ordering->job_type : $s->job_type ?>">{{ $s->job_type }} </option>' +
            @endforeach
            '</select >' +
            '</div>';
        var txt2 = '<div class="form-group col-sm-6">' +
            '<select id="member_select" class="form-control">' +
            '<option value = ""> {{$all_mem}} </option>' +
            @foreach($mem_list as $m)
            <?php $ordering = App\Post::where('id',$m->translation)->first() ?>
            '<option value = "<?php echo !empty($ordering) ? $ordering->title : $m->title ?>"> {{$m->title}} </option>' +
            @endforeach
            '</select >' +
            '</div>';
        var txt3 = '<div class="form-group col-sm-6">' +
            '<select id="country_select" class="form-control">' +
            '<option value = ""> {{$all_country}} </option>' +
            @foreach($locate as $c)
            '<option value = "{{ $c->location_job }}"> {{ $c->location_job }} </option>' +
            @endforeach
            '</select >' +
            '</div>';
        var txt4 = '<div class="form-group col-sm-6">' +
            '<input id="search_name" class="form-control" placeholder="{{$all_search}}">' +
            '</div>';
        $('#example').DataTable({
            "dom": '<"toolbar">tipr',
            // "sDom": "<'toolbar'>tipr", // Another Option
            "iDisplayLength": 15,
            "order": [[0, "asc"], [1, "asc"]],
        });

        $("div.toolbar").html(txt1 + txt2 + txt3 + txt4);

        var table = $('#example').DataTable();
        $('#sector_select').on('change', function () {
            table.columns(0).search($(this).val()).draw();
        });
        $('#member_select').on('change', function () {
            table.columns(1).search($(this).val()).draw();
        });
        $('#country_select').on('change', function () {
            table.columns(5).search($(this).val()).draw();
        });
        $('#search_name').keyup(function(){
            table.search($(this).val()).draw() ;
        })
        
    });
</script>

@endif