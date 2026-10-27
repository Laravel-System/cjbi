<?php
  $post = $cat->post()->orderBy('publish_date','ASC')->get();
?>
<?php
    if($code == 'jp'){
        $read_more = "続きを読む";
    }else{
        $read_more = "Read More";
    }
?>
<section id="team" class="bg-white">
  <div class="container">
    <div class="col-md-12">
      <div class="w3l-heading">
        <h2 class="w3ls_head" style="margin-bottom:0;">{{$cat->name}}</h2>
      </div>
      <div class="row row-eq-height no-gutter pb-5">
        @foreach($post as $k=>$p)
        <?php  
            $url_det = url($code.'/'.'detail'.'/'.$p->id.'/'.$p->link);
            if($code == 'jp'){
                $des = str_limit($p->description, 600, "");
            }else{
                $des = limit_text($p->description, 100);
            }
        ?>
        <div class="col-sm-6 mt-5 <?php if($k%2==0)echo 'border-right'; ?>">
          <div class="container-fluid">
            <div class="row row-eq-height">
              <div class="col-sm-6">
                <div class="thumb">
                  <img class="img-fluid" src="{{url('images/'.$p->image)}}" alt="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="team-description">
                  <h5 class="mb-1 title card-caption">{{$p->title}}</h5>
                  <h6 class="category text-gray">{{$p->position}}</h6>
                  <div class="bio">{!! str_limit(strip_tags($p->description), 332,'<b>...</b><br>') !!}</div>
                  <b><a href="#" data-toggle="modal" data-target="#myModal{{$k}}" style="float: right;margin: 7px 0 0;"> <i class="fa fa-long-arrow-right"> </i> {{ $read_more }}</a></b> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal video-modal fade" id="myModal{{$k}}" tabindex="-1" role="dialog" aria-labelledby="myModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                {{$p->title}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;"><span aria-hidden="true">&times;</span></button>						
              </div>
              <section class="modal-section">
                <div class="modal-body">
                  <div class="col-md-4">
                    <img src="{{url('images/'.$p->image)}}" alt=" " class="img-responsive" />
                  </div>
                  <div class="col-md-8" style="padding-left: 0;">
                    <p style="font-size: 18px;font-weight: bold;">{{$p->position}}</p>
                    {!! $p->description !!}
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    
  </div>
</section>
<style>
  .bg-white {
    background-color: #fff !important;
  }
  .modal-dialog ol {
    margin-bottom: 15px;
  }
  section {
    padding: 80px 0 80px 0;
    position: relative;
    overflow: hidden;
  }
  section.modal-section {
    padding: 12px 0 80px 0;
  }
  .text-center {
    text-align: center !important;
  }

  .section-title,
  a:hover {
    /* color: #f4c736 !important; */
  }

  .pb-5,
  .py-5 {
    padding-bottom: 3rem !important;
  }

  .mt-5,
  .my-5 {
    margin-top: 3rem !important;
  }

  .border-right {
    border-right: 1px solid #dee2e6 !important;
  }

  #team .thumb {
    margin-bottom: 0;
    transition: 1s ease;
    border-radius: 4px;
    background: #fff;
  }

  .img-fluid {
    max-width: 100%;
    height: auto;
  }

  img {
    vertical-align: middle;
    border-style: none;
  }

  #team .team-description {
    position: relative;
    height: 100%;
  }

  .title {
    margin-bottom: 15px;
  }

  /* .title,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: Oswald, Roboto, sans-serif;
    font-weight: 400;
    text-transform: uppercase;
  } */

  .card-caption {
    font-weight: 700;
  }

  .mb-1,
  .my-1 {
    font-size: 16px;
    margin-bottom: .25rem !important;
    color: #3c52a4;
  }

  .text-gray {
    color: #888;
    font-weight: bold;
    margin: 10px 0;
    font-size: 14px;
  }

  .bio {
    font-weight: 300;
    font-size: 14px;
    text-align: justify;
  }

  #team .social {
    position: absolute;
    bottom: -40px;
    left: 0;
    width: 100%;
    text-align: left;
    opacity: .8;
    transition: .5s ease;
    z-index: 99;
  }

  .btn-outline-primary,
  .text-primary,
  a {
    /* color: #016993 !important; */
  }

  a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
  }

  #team .social svg {
    width: 24px;
    height: 24px;
    margin-right: 10px;
  }

  svg.feather {
    height: 14px;
    width: 14px;
    vertical-align: middle;
  }

  svg:not(:root) {
    overflow: hidden;
  }
</style>