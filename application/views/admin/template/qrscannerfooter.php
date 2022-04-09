<!-- Insta Scanner for QrCode-->
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript">
					var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
					scanner.addListener('scan',function(content){
						  alert(content);
						//  $("#data").text(content);
						 var res = content.split(",");
					      $("#transaction_id").val(res[0]);
					      $("#name").val(res[1]);
					    //   $("#p_number").val(res[2]);
					    //   $("#status").val(res[3]);
					    //   $("#arrival").val(res[4]);
					    //  $("#total").text(res[5]);
					

						// window.location.href=content;
					});
					Instascan.Camera.getCameras().then(function (cameras){
						if(cameras.length>0){
							scanner.start(cameras[0]);
							$('[name="options"]').on('change',function(){
								if($(this).val()==1){
									if(cameras[0]!=""){
										scanner.start(cameras[0]);
									}else{
										alert('No Front camera found!');
									}
								}else if($(this).val()==2){
									if(cameras[1]!=""){
										scanner.start(cameras[1]);
									}else{
										alert('No Back camera found!');
									}
								}
							});
						}else{
							console.error('No cameras found.');
							alert('No cameras found.');
						}
					}).catch(function(e){
						console.error(e);
						alert(e);
					});
</script>
<script>
	setInterval(function(){
            // alert("hello world");
            //ajax;
			var transaction_id = $("#transaction_id").val();
			var BASE_URL = "<?php echo base_url();?>";
			if(transaction_id != ""){
				$.ajax({
					url: BASE_URL+"select-FinderBookingTransaction/"+transaction_id,
					type: "POST",
					data:{},
					success: function(data)
					{
						$('.gcash').hide();
						$('.overcounter').hide();
						var result = JSON.parse(data);
						for(var x = 0 ; x < result.length ; x ++)
                		{
						

								$("#gender").text(result[x]['gender']);
								// $("#vac_status").text(result[x]['']);
								$("#p_number").text(result[x]['phone_num']);
								$("#email").text(result[x]['email']);
						
								$("#shop").val(result[x]['shop_name']);
								$("#service").val(result[x]['servicetype']);
								$("#time_arrival").val(result[x]['arrival_time']);
								$("#date_arrival").val(result[x]['arrival_date']);
								$("#comp_type").val(result[x]['name']);
								$("#num_person").val(result[x]['num_ticket']);
						
						

							if(result[x]['payment_type']=="gcash"){
								$('.gcash').show();
								$('.overcounter').hide();
								
								$("#gcash_payment_status").text(result[x]['payment_status']);
								$("#gcash_service_fee").text("₱"+result[x]['service_fee']);

							}else if(result[x]['payment_type'] == "overthecounter"){
								 $('.overcounter').show();
								 $('.gcash').hide();
								

								 $("#Over_C_payment_status").text(result[x]['payment_status']);
								$("#gcash_service_fee").text("₱"+result[x]['Over_C_service_fee']);
							}

                		}

					}
				});
			}else{

			
			}
		

        },1000);
</script>
<script>
	$(document).on('click','#click_paid',function(){ 
		transaction_id = $("#transaction_id").val();	
		
		var BASE_URL = "<?php echo base_url();?>";
		$.ajax({
          url: BASE_URL+"updatePaymentStatus/"+transaction_id+"/paid",
          type: "POST",
          data:{},
          success: function(data)
          {
         
          }
        });
    });

	$(document).on('click','#click_unpaid',function(){ 
		transaction_id = $("#transaction_id").val();	
		
		var BASE_URL = "<?php echo base_url();?>";
		$.ajax({
          url: BASE_URL+"updatePaymentStatus/"+transaction_id+"/unpaid",
          type: "POST",
          data:{},
          success: function(data)
          {
         
          }
        });
    });


</script>