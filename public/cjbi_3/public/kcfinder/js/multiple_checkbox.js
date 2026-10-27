{/* <script> */}
	$(document).ready(function(){
			//condition check_me when select 
		if($(".item_list").find(".check_me").is(":checked"))		
		{
			$(".Delete").removeAttr('disabled');
		}
		else
		{
			$(".Delete").attr('disabled','disabled');
		}
			//condition check all
		$(".check_me_all").click(function()
		{
			if($(this).is(":checked"))
			{
				$(".item_list").find(".check_me").prop('checked',true);
				//for click check all and when remove one select is not text button check all
				$(".Delete").removeAttr('disabled');
				// for remove button delete from not active to active
			}
			else
			{
				$(".item_list").find(".check_me").prop('checked',false);
				$(".Delete").attr('disabled','disabled');
			}
		});
		$(document).on('click','.check_me',function()
		{			
			if($(".item_list").find(".check_me").is(":checked"))
			{
				$(".Delete").removeAttr('disabled');
			//ber select check box min tan all te nus check_all kor min tex dae
				if($(".item_list").find(".check_me").is(":not(:checked)"))
				{
					$(".check_me_all").prop('checked',false);
				}
				else
				{
					$(".check_me_all").prop('checked',true);
				}
			}			
			else
			{
				$(".Delete").attr('disabled','disabled');
			}
		});
		$(".Delete").click(function()
		{
			if($(".item_list").find(".check_me").is(":checked"))
			{
				return confirm("Do you want to delete this all select?");
			}		
		});
	});

  // $(document).ready(function(){
  //   $('.selectall').click(function () {    
  //     $('.selectbox').prop('checked',$(this).prop('checked')); 
  //   });
  //   $('.selectbox').click(function(){
  //     var total=$('.selectbox').length;
  //     var number=$('.selectbox:checked').lenght;
  //     if(total==number){
  //       $('.selectall').prop('checked',true);
  //     }else{
  //       $('.selectall').prop('checked',false);
  //     }
  //   });
  // });

// </script>