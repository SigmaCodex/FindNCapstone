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
                                    <input id="comshop_id" value="1" type="text">
                                </div>
                                <div class="card-body">
                                    <form autocomplete="off" class="form" role="form">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Computershop Name:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input id="cshopname" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Address:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input id="cshop_address" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                    <div class="form-group row">

                                        <label class="col-lg-4 col-form-label form-control-label">Coordinates:</label>
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4">
                                             <input id="coordinates" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Operating Hours:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input id="operating_hours" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Net Speed:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input id="net_speed" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Description:</label>
                                        <div class="col-lg-5"> </div>
                                        <div class="col-lg-3">
                                             <input id="description" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Contact Number:</label>
                                        <div class="col-lg-5"> </div>
                                        <div class="col-lg-3">
                                             <input id="contact_num" class="form-control" type="text" value="">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">email address:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input id="email_add" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                </div><!-- /form user info -->                  
                                <button id="idbtn" >Submit</button>
            </div>
            <div class="col-md-2"></div>
        </div>


</div>   
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script>
    $(document).on("click", '#idbtn', function() {
       var comshopid = $('#comshop_id').val();
       var computershop = $('#cshopname').val();
       var shop_address = $('#cshop_address').val();
       var shop_coordi = $('#coordinates').val();
       var shop_ophours = $('#operating_hours').val();
       var shop_netspeed = $('#net_speed').val();
       var shop_description = $('#description').val();
       var shop_contact = $('#contact_num') .val();
       var shop_emailadd = $('#email_add') .val();
       $.ajax({
             url: "updateComputerDetails/"+comshopid,
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
             }
            });
    });
</script>