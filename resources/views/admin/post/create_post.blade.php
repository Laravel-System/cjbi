@extends('admin.layout.master')
@section('content')
	<div class="row">
        <div class="col-md-12">

			<h2><strong>Create Post</strong></h2>
		       @include('errors.message_error')
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('create_post') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			   <div class="col-md-11">
              <div class="form-group">
                <label> Title</label>
                <input type="text" name="title" class="form-control">
              </div>

              <!-- <div class="col-md-2"> -->
                     <div class="form-group">
                        <label for="">show title</label>
                        <label class="switch">
                           <input class="switch-input show_title" type="checkbox" id="switch_check" name="show_title" value="1" checked>
                           <span class="switch-label" data-on="On" data-off="Off"></span> 
                           <span class="switch-handle"></span> 
                        </label>                                       
                     </div>
                  <!-- </div> -->

               <div class="form-group">
                <label>Categories</label><br>
                  <select class="form-control" name="categorie_id[]">
                    <option value="0">Select Category</option>
                    @if(count($category)>0)
                      @foreach($category as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                      @endforeach
                    @endif
                  </select>
              </div>
              <div class="form-group">
                  <label>Language</label>
                  <?php $lang = App\Language::get(); ?>
                  <select class="form-control" name="language">
                      @if(count($lang) > 0)
                          @foreach($lang as $la)
                            <option value="{{ $la->id }}"> {{ $la->name }} </option>
                          @endforeach
                      @endif
                  </select>
              </div>
              <div class="form-group">
                <label>Post Format</label><br>
                  <select class="form-control" name="categorie_id[]">
                    <option value="0">Select Post Format</option>
                    <option value="standard">Standard</option>
                    <option value="file">File</option>
                    <option value="image">Image</option>
                    <option value="gallery">Gallery</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="ckeditor" id="editor" placeholder="Enter Description"></textarea>
              </div>
              <div class="form-group">
                <label>Price</label>
                <input type="text" name="link_download" class="form-control">
              </div>
              <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Not Active</option>
                  </select>
              </div>
              <div class="form-group">
              <label>Publish Date</label>
              <div class='input-group date' id='datetimepicker1'>
                  <input type='text' name="publish_date" class="form-control" />
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
            <div class="form-group">
              <label>Unpublish Date</label>
              <div class='input-group date' id='datetimepicker2'>
                  <input type='text' name="unpublish_date" class="form-control" />
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
              <div class="form-group">
                <label>Choose Image Feature</label>
                <input type="file" name="image" class="form-control">
              </div>
							<div class="form-group">
                <label>Choose Image Multi Upload</label>
                <input type="file" name="image_multi[]" class="form-control" multiple>
              </div>
              <div class="form-group">
                <label>Choose Image Multi Upload</label>
                <button type="button"  data-toggle="modal" data-target="#myModal">Choose Image Multi Upload</button>
              </div>             
               <div class="col-md-12">
                
                <div class="col-md-12">                
                   <span id="show_image">                   
                   <span id="show_images">
                   </span>
                   <input type="text" id="count">
                  
                   <input  name="img_multiple[]" class="name_images">
                   
                   <div id="GFG_DOWN" style="width:100px;height:100px;">
                      
                   </div>
                </div> 
               </div>             
             <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-primary">Submit </button>
             </div>
           </div>
			</form>
		</div>
	</div>
 
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="{{url('form')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Upload</a>
                        </li>
                          <li role="presentation">
                            <a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Browse</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab"><br>
                          <div class="file-loading">    
                            <input type="hidden" name="_token" value="{{csrf_token()}}">                         
                              <input id="input-b6"  name="filename[]" class="file" type="file" multiple>
                          </div>
                        </div>                                             
                        <div role="tabpanel" class="tab-pane" id="browseTab"><br>  
                          <div class="col-lg-12 item">      
                            <?php                               
                                $imagesDirectory = "images/";                                 
                                if(is_dir($imagesDirectory))
                                {
                                  $opendirectory = opendir($imagesDirectory);                                  
                                    while (($image = readdir($opendirectory)) !== false)
                                  {
                                    
                                    if(($image == '.') || ($image == '..'))
                                    {
                                      continue;
                                    }                                      
                                    $imgFileType = pathinfo($image,PATHINFO_EXTENSION);                                      
                                    if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
                                      {
                                     
                                        ?>                        
                                        
                                          <div class="nopad text-centers" id="text">
                                            <button type="button" id="DeleteImg" data-sample-id="<?php echo $image; ?>" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-secondary" title="<?php echo $image; ?>"value="<?php echo $image; ?>">
                                              <i class="glyphicon glyphicon-trash" title="<?php echo $image; ?>"></i>
                                            </button>

                                              <label class="image-checkbox" id="img" value="<?php echo $image; ?>" >
                                                  <img class="img-responsive" src='images/<?php echo $image; ?>' style="height:140px;">
                                                  <input class="chkbx"  type="checkbox" name="image_check" value="<?php echo $image; ?>" />                                                
                                                  <i class="glyphicon glyphicon-ok hidden"></i>
                                              </label>
                                          </div>
                                        <?php
                                       
                                      }
                                      ?>                                       
                                      <?php
                                  }                                  
                                  closedir($opendirectory);                                
                                }                 
                               ?>                          ​                          
                          </div>                        
                          </div>          
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <a> 
                  click here 
                </a> 
            </div>
        </div>
      </form>
     
    </div>
</div> 
 

<script type="text/javascript">

$('.delete').live('click',function(){ 
  deleteFile( $(this).attr('id') );
});

function deleteFile(id){
    $.ajax({
        url: 'deletefile.php?fileid='+id,
        success: function() {
            alert('File deleted.');
        }
    });
}
</script>
<script>
  $(document).ready(function() {
     // add/remove checked class

    
     $('body').on('click','#DeleteImg', function(){
       if($(this).data('sample-id')===$('#img').val()){
         alert(1);
       }
      //  $(this).remove();
      // 
      // title.remove();
      // alert(1);
     });

     $('body').on('click','a', function() {
        var text= "";
        var array = []; 
        var name_img = $('.name_images');
        $("input:checkbox[name=image_check]:checked").each(function(index,element) { 
          array.push($(this).val());         
          $('#GFG_DOWN').html($("<img src='images/"+array+"'>")); 
          name_img.val(array); 
        });
          text=text.substring(0,text.length-1);
          var count = $("[type='checkbox']:checked").length;
          $('#count').val($("[type='checkbox']:checked").length);
      });

     $(".image-checkbox").each(function() {
        if($(this).find('input[type="checkbox"]').first().attr("checked")){
            $(this).addClass('image-checkbox-checked');
        }else{
            $(this).removeClass('image-checkbox-checked');
        }
    });

    // sync the input state
    $(".image-checkbox").on("click", function(e){
        $(this).toggleClass('image-checkbox-checked');
        var $checkbox = $(this).find('input[type="checkbox"]');
        $checkbox.prop("checked",!$checkbox.prop("checked"));
    
        e.preventDefault();
    });  
  });

  $("#switch_check").on('change', function(){
      if($(this).is(':checked')){
          $(this).attr('value','1');
          $(this).attr("checked", "checked");
      }else if($(this).val('" "')){
          $(this).attr('value', '0');
          $(this).removeAttr("checked", "checked");
      }
  }); 

  $("#feature_check").on('change', function(){
      if($(this).is(':checked')){
        $(this).attr('value','1');
        $(this).attr("checked", "checked");
      }else if($(this).val('" "')){
        $(this).attr('value', '0');
        $(this).removeAttr("checked", "checked");
      }
  }); 
</script>

<script>
$(document).ready(function() {
    $("#input-b6").fileinput({
        theme:'fa',
        uploadUrl:"form",
        showUpload:false,
        showCancel: true,
        initialPreviewAsData: true,
        overwriteInitial: false,
        allowedFileExtensions:['jpg','png','gif'],         
        maxFileSize:2000,
        maxFileNum:8,
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png|doc|docx|pdf|txt)$/i,
           
    });
});
</script>
 
@endsection
<style>
   .switch {
      position: relative;
      display: block;
      vertical-align: top;
      width: 100px;
      height: 30px;
      padding: 3px;
      margin: 0 10px 10px 0;
      background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
      background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
      border-radius: 18px;
      box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
      cursor: pointer;
      box-sizing:content-box;
   }
   .switch-input {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      box-sizing:content-box;
   }
   .switch-label {
      position: relative;
      display: block;
      height: inherit;
      font-size: 10px;
      text-transform: uppercase;
      background: #eceeef;
      border-radius: inherit;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
      box-sizing:content-box;
   }
   .switch-label:before, .switch-label:after {
      position: absolute;
      top: 50%;
      margin-top: -.5em;
      line-height: 1;
      -webkit-transition: inherit;
      -moz-transition: inherit;
      -o-transition: inherit;
      transition: inherit;
      box-sizing:content-box;
   }
   .switch-label:before {
      content: attr(data-off);
      right: 11px;
      color: #aaaaaa;
      text-shadow: 0 1px rgba(255, 255, 255, 0.5);
   }
   .switch-label:after {
      content: attr(data-on);
      left: 11px;
      color: #FFFFFF;
      text-shadow: 0 1px rgba(0, 0, 0, 0.2);
      opacity: 0;
   }
   .switch-input:checked ~ .switch-label {
      background: #02C4FD;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
   }
   .switch-input:checked ~ .switch-label:before {
      opacity: 0;
   }
   .switch-input:checked ~ .switch-label:after {
      opacity: 1;
   }
   .switch-handle {
      position: absolute;
      top: 4px;
      left: 4px;
      width: 28px;
      height: 28px;
      background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
      background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
      border-radius: 100%;
      box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
   }
   .switch-handle:before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -6px 0 0 -6px;
      width: 12px;
      height: 12px;
      background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
      background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
      border-radius: 6px;
      box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
   }
   .switch-input:checked ~ .switch-handle {
      left: 74px;
      box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
   }
   
   /* Transition
   ========================== */
   .switch-label, .switch-handle {
      transition: All 0.3s ease;
      -webkit-transition: All 0.3s ease;
      -moz-transition: All 0.3s ease;
      -o-transition: All 0.3s ease;
   }

  
</style>
