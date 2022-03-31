<div class="container-fluid">

      <!-- Content Row 2-->
      <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 jumbotron"> 
                        <!-- info -->
                            <div class="card card-outline-secondary">
                                <div class="card-header">
                                    <h3 class="mb-0">Computerdetails</h3>
                                </div>
                                <div class="card-body">
                                <form>
                                <?php foreach ($shop_details as $s) {?>  
                                <h1 id="comshop_id" style="display:none"><?php echo $s->shop_id;?></h1>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Computer Shop Name*</label> 
                                <div class="col-8">
                                  <input id="cshopname" name="username" placeholder="Shop Name" class="form-control here" required="required" type="text" value="<?php echo $s->shop_name?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Address*</label> 
                                <div class="col-8">
                                  <input id="cshop_address" name="email" placeholder="Address" required="required" class="form-control here" type="text" value="<?php echo $s->address?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Coordinates</label> 
                                <div class="col-8">
                                <?php 
                                $string = $s->coordinates;
                                $str_arr = explode (",", $string);
                                $lat = $str_arr[0];
			                    $long = $str_arr[1];
                                ?>
                                  <input id="lat" name="name" placeholder="Latitude" class="form-control here" type="text" value="<?php echo $lat?>">
                                  <input id="long" name="name" placeholder="Longitude" class="form-control here" type="text" value="<?php echo $long?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Operating Hours</label> 
                                <div class="col-8">
                                  <input id="operating_hours" name="lastname" placeholder="Operating Hours" class="form-control here" type="text" value="<?php echo $s->operating_hours?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Net Speed</label> 
                                <div class="col-8">
                                  <input id="net_speed" name="website" placeholder="Net Speed" class="form-control here" type="text" value="<?php echo $s->net_speed?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="pass" class="col-4 col-form-label">Description</label> 
                                <div class="col-8">
                                  <textarea id="description" name="pass" placeholder="Description" class="form-control here" required="required"><?php echo $s->description?></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Contact Number</label> 
                                <div class="col-8">
                                  <input id="contact_num" name="website" placeholder="Contact Number" class="form-control here" type="text" value="<?php echo $s->contact_number?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Email Address</label> 
                                <div class="col-8">
                                  <input id="email_add" name="website" placeholder="Email Address" class="form-control here" type="text" value="<?php echo $s->email_address?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button id="idbtn" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                              <?php }?>
                            </form>
                                </div>
                                </div><!-- /form user info -->                  
                                <!-- <button id="idbtn" >Submit</button> -->
            </div>
            <div class="col-md-2"></div>
        </div>


</div>   
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script>
    $(document).on("click", '#idbtn', function() {
       var Base_URL = "<?php echo base_url();?>";
       var comshopid = $('#comshop_id').text();
       var computershop = $('#cshopname').val();
       var shop_address = $('#cshop_address').val();
       var shop_lat = $('#lat').val();
       var shop_long = $('#long').val();
       var shop_ophours = $('#operating_hours').val();
       var shop_netspeed = $('#net_speed').val();
       var shop_description = $('#description').val();
       var shop_contact = $('#contact_num') .val();
       var shop_emailadd = $('#email_add') .val();
       var shop_coordi = shop_lat+","+shop_long; 
       alert(comshopid);
       $.ajax({
             url: Base_URL+"updateComputerDetails/"+comshopid,
             type: "POST",
             data:{cshop:computershop,cshop_address:shop_address,cshop_coordi:shop_coordi,
             cshop_ophours:shop_ophours,cshop_netspeed:shop_netspeed,cshop_description:shop_description,
             cshop_contact:shop_contact,cshop_emailadd:shop_emailadd},
             beforeSend : function()
             {
             alert("processing");
             },
             success: function(data)
             {
                alert(data);
                location.reload();
             }
            });
     });
</script>