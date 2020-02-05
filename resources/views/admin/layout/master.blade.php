<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator</title>
	<!-- BOOTSTRAP STYLES-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{url('assets/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{url('assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{url('assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.8/css/fileinput.min.css">
   <link href="{{ url('assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
   <link href="{{url('assets/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
   <script type="text/javascript" src="{{url('ckeditor/ckeditor.js')}}"></script>
   <style>
      .border {
        display: inline-block;
        border-radius:0;
        width: 100px;
        height: 100px;
        margin: 6px;
        border:1px solid black;
      }
      .modal-content{
        border-radius:0;
        height:700px;
      }
      .modal-dialog{
        width:1450px!important;
        height:900px!important;        
      }
      .modal{
        clear: both;
        overflow:visible!important;
        overflow-y:none!important;
      }
      div.file-preview{
        overflow: scroll!important;
        height:350px;
      }
      .image-checkbox{
        cursor: pointer;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        border: 4px solid transparent;
        outline: 0;
        width:100%;
        height:100%;
      }
      .image-checkbox img{
        width:100%;
        height:100%;
      }
      .image-checkbox input[type="checkbox"]{
        display: none;
      }
      .image-checkbox-checked{
        border-color: #0073aa;
         
      }
      .box_img{
        height:150px;
        float:left!important;
        margin-top:40px;
        width:180px;
        margin:5px;
        border:1px solid #ccc;
      }
      .item{
        margin-top:40px;
        float:left;
        
      }
      .item{
        overflow: auto!important;
        height:400px;
      }
      .modal-footer{
        margin-top:10px;
        float:right;
        width:100%;
        background-color:#eee;
      }
      #show_image{
        height:100px;
        width:100px;
        float:left;
        border:1px solid #eee;
        padding:5px;
        margin:5px;
      }
      #show_image img{
        width:100%;
        height:100%;          
      }
  </style>
</head>
<body>
    <div id="wrapper">

        @include('admin.layout.head')
           <!-- /. NAV TOP  -->

        @include('admin.layout.nav')
    <div id="page-wrapper" >
            <div id="page-inner">

            @yield('content')

        </div>
    </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!-- <script src="{{url('assets/js/jquery-1.10.2.js')}}"></script> -->
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{url('assets/js/jquery.metisMenu.js')}}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{url('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{url('assets/js/morris/morris.js')}}"></script>
    <!-- CUSTOM SCRIPTS -->
      <!-- Include Date Range Picker -->
    <script src="{{url('assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{url('assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.8/js/fileinput.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable({                  
                  "aaSorting": []  // for clear                             
                });                
            });
        </script>

    <!-- <script src="{{url('assets/js/jquery.min.js')}}"></script> -->
    <!-- BOOTSTRAP SCRIPTS  -->
  <script  src="{{ url('assets/js/moment.js') }}"></script>
    <!-- <script src="{{url('assets/js/bootstrap.min.js')}}"></script> -->
  <script  src="{{ url('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            var bindDatePicker = function() {
         		$(".date").datetimepicker({
                 format:'DD-MM-YYYY HH:mm ',
         			icons: {
         				time: "fa fa-clock-o",
         				date: "fa fa-calendar",
         				up: "fa fa-arrow-up",
         				down: "fa fa-arrow-down"
         			}
         		}).find('input:first').on("blur",function () {
         			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
         			// update the format if it's yyyy-mm-dd
         			var date = parseDate($(this).val());

         			if (! isValidDate(date)) {
         				//create date based on momentjs (we have that)
         				date = moment().format('DD-MM-YYYY HH:mm ');
         			}

         			$(this).val(date);

         		});
         	}

            var isValidDate = function(value, format) {
         		format = format || false;
         		// lets parse the date to the best of our knowledge
         		if (format) {
         			value = parseDate(value);
         		}

         		var timestamp = Date.parse(value);

         		return isNaN(timestamp) == false;
            }

            var parseDate = function(value) {
         		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
         		if (m)
         			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

         		return value;
            }

            bindDatePicker();
          });
    </script>
    <!-- CUSTOM SCRIPTS -->
  <script src="{{url('assets/js/custom.js')}}"></script>
</body>
</html>
