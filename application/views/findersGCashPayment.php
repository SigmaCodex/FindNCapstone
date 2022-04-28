<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    
    <link rel="stylesheet" href="../assets/css/findersBookings.css" />
    <title>Booking History</title>
  </head>
  <body>
    <!-- file image upload css -->
  <style>
    .file-upload {
  background-color: #ffffff;
  width: auto;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #eb7514;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #adadad;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #F1A971;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #282c30;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #F1A971;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
  </style>

<?php 
                //start of for each
                foreach ($transaction_details as $row) {
              ?> 
    <div class="transaction-form-wrapper d-flex justify-content-center ">
      <div class="transaction-form p-1 ">
        <div class="header-transaction d-flex justify-content-between p-3 m-0">

          <a href="<?php echo base_url();?>findersTransactionDetail/<?php echo $row->transaction_id?>"> <i class="back-icon fa-solid fa-xmark"></i></a>  
          <h3 class="back-button-title" style="color:white;">Transaction Details</h3> <a href="#filter"></a>

        </div>

        <!-- LEGEND END -->
        <div class="transaction-body justify-content-center align-items-center">
          <div class="transaction-content p-4">
              <img src="../assets/images/icon-logo.png" style="width: 50px;">
              <hr>
              
              <div class="content active extra-info p-0" id="all-tab">


                <div class="row d-flex align-items-center justify-content-between">
                  <div class="col-6 m-0 d-flex justify-content-center align-items-center">
                    <p class="payment-info-text-left" style="font-size: 20px; padding-top: 15px;">Payment Overview</p>
                  </div>
                  

                  <div class="col-6 d-flex justify-content-end gcash-logo">
                    <img src="../assets/images/gcash.png" class="gcash-logo-pic">
                  </div>
                </div>

                
              </div>

            

              <!-- booking details -->
              <div class="booking-info-card">

                <h5 class="shop-title" style="text-align:center; font-size: 20px; padding-bottom: 15px;" id="shop"><?php echo $row->shop_name?></h5>
                <hr>
                <div class="booking-info-card-text ">

                  <div class="row ">
                      <div class="col-4"><h4 class="info-text-left">Transaction Number:</h4> </div>
                      <!-- <div class="col-2"><p class="info-text-middle">:</p></div> -->
                      <div class="col-8"><p class="info-text-right" id="transaction_id"><?php echo $row->transaction_id?></p></div>
                  </div>

                  <div class="row d-flex">
                    <div class="col-4"><h4 class="info-text-left">Computer Type</h4> </div>
                    <!-- <div class="col-2"><p class="info-text-middle">:</p></div> -->
                    <div class="col-8"><p class="payment-info-text-right"><?php echo $row->name;//name == computertype name?></p></div>
                  </div>
                  <div class="row d-flex">
                    <div class="col-4"><h4 class="info-text-left">Service Type</h4> </div>
                    <!-- <div class="col-2"><p class="info-text-middle">:</p></div> -->
                    <div class="col-8"><p class="payment-info-text-right" id="service-type"><?php echo $row->servicetype;?></p></div>
                  </div>
   

                  <div class="row">
                    <div class="col-4"><h4 class="info-text-left">Number of Bookings (Person)</h4></div>
                    <!-- <div class="col-2"><p class="info-text-middle">:</p></div> -->
                    <div class="col-8"><p class="payment-info-text-right"><?php echo $row->num_ticket;?></p></div>
                  </div>

                  <div class="row">
                    <div class="col-4"><h4 class="info-text-left">Name</h4></div>
                    <!-- <div class="col-2"><p class="info-text-middle">:</p></div> -->
                    <div class="col-8"><p class="payment-info-text-right" id="b_name"><?php echo $row->lastname;echo ","; echo $row->firstname?></p></div>
                  </div>

                  <div class="row">
                    <div class="col-4"><h4 class="info-text-left">Email</h4></div>
                    <!-- <div class="col-1"><p class="payment-info-text-middle">:</p></div> -->
                    <div class="col-8"><p class="payment-info-text-right" id="b_email"><?php echo $row->email; echo " ";?></p></div>
                  </div>

                  <div class="row">
                    <div class="col-4"><h4 class="info-text-left">Contact Number</h4></div>
                    <!-- <div class="col-2"><p class="info-text-middle">:</p></div> -->
                    <div class="col-8"><p class="payment-info-text-right" id="phone_number"><?php echo $row->phone_num;?>
                      <i class="edit-icon fa-solid fa-edit"  data-toggle='modal' data-target='#ChangePhoneNumberModal'></i></p>
                    </div>
                  </div>

                  <h6 style="text-align:center; font-size: 15px; font-weight: 800; padding-top: 10px; color: red;"><b>Booking Fee</b><h5 id="booking_fee"><?php echo $row->service_fee;?></h5></h5>
                  <hr>
                
                                                <!-- Step 1-->
                    <!-- ======================================================================= -->
                  <h6 style="text-align:center; font-size: 15px; font-weight: 700; padding-top: 10px;">Step 1: Pay GCash</h6>
                  <div class="pay-now-div">
                    <button class="pay-now" id="btngcash">Pay GCash</button>
                  </div>
                  <h6 style="text-align:center; font-size: 10px; font-weight: 500; padding-top: 10px; color: #022DB8;">Note: You only have to pay the <b>booking fee.</b></h6>
                  <hr>
                  
                  <h6 style="text-align:center; font-size: 15px; font-weight: 700; padding-top: 10px;">Step 2: Upload GCash Receipt</h6>
                  <div class="d-flex justify-content-center"><button class="btn btn-success gcash-receipt" data-toggle='modal' data-target='#UploadGcashPaymentDetails'>Upload</button>
                  </div>
                  
                  <h6 style="text-align:center; font-size: 10px; font-weight: 500; padding-top: 10px; color: rgb(55, 152, 10);">Note: <b>Gcash Receipt</b> should be on high quality.</h6>
                </div>   
                  
                
              </div>
              
            <?php
                }
            ?>
          </div>
        </div>
      </div>   
    </div>
    


    <!-- Modal Change Phone Number--> 
<div class="modal fade" id="ChangePhoneNumberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Number For Gcash</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- start modalbody -->
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">PhoneNumber:</label>
            <input type="number" class="form-control" id="phone-number" placeholder="+63">
          </div>
        </form>
       <!-- end modalbody -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="p_num_ChangeBtn">Change</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="UploadGcashPaymentDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Gcash Payment Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- start modalbody -->
        <form method="post" id="upload_form" enctype="multipart/form-data">
          <div class="form-group">
            <input type="reference_number" name="reference_number" class="form-control" id="reference_num" placeholder="Gcash ReferenceNumber">
          </div>
          <hr>
          <!-- upload image receipt -->
          <div class="row file-upload">
            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

            <div class="image-upload-wrap">
                <input class="file-upload-input" name="imageUpload" type="file" onchange="readURL(this);"/>
                <div class="drag-text">
                <h3>Drag and drop a file or select add Image</h3>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                </div>
            </div>

          </div>          

          <!-- end of upload image receipt -->
       
       <!-- end modalbody -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="GcashPaymentDetails_Btn">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>





    <script src="../assets/js/findersBookings.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    $(document).on('click','#p_num_ChangeBtn',function(){ 

      var new_phoneNum = $("#phone-number").val();
    
      $("#phone_number").text(new_phoneNum);
      // alert(new_phoneNum );
      $('#ChangePhoneNumberModal').modal('hide')
    });
    </script>

    <script>
    $(document).on('click','#btngcash',function(){ 
      var s_shop = $("#shop").text();
      var service_type = $("#service-type").text();
      var name = $("#b_name").text();
      var email = $("#b_email").text();
      var contact_num = $("#phone_number").text();
      var amount = $('#booking_fee').text();
      var BASE_URL = "<?php echo base_url();?>";
      $.ajax({
          url: BASE_URL+"goto-gcash",
          type: "POST",
          data:{shop:s_shop,s_type:service_type,b_name:name,b_email:email,b_contactnum:contact_num,total_amount:amount},
          beforeSend : function()
          {
            alert("processing");
          },
          success: function(data)
          {
            //open new tab
            window.open(data);
          }
        });
    });
      
    </script>
  <!-- upload GCashPayment Details   -->
<script>  
 $(document).ready(function(){  
      $('#upload_form').on('submit', function(e){  
        var transaction_id = $("#transaction_id").text();
        var BASE_URL = "<?php echo base_url();?>";
           e.preventDefault();  
    
                $.ajax({  
                     url: BASE_URL+"uploadGcashPaymentDetails/"+transaction_id,   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     success:function(data)  
                     {  
                        
                      swal({
                            title: "Good job!",
                            text: "Transaction Complete",
                            icon: "success",
                            button: "Continue",
                          }).then((value) => {
                            window.location = BASE_URL+"findersTransactionDetail/"+transaction_id;
                          });




                     }  
                });  
             
      });  
 });  
 </script>
    
<script>
    function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

</script>
  </body>
</html>
