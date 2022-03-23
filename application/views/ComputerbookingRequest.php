<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CompBookingRequest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>CompBookingRequest</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form>
                            <div class="controls">
                            <div class="row"><h5 id="shop_id"><?php if(isset($shop_id)){ echo $shop_id;}?></h5></div>
                            <div class="row">
                                <?php foreach ($shopdetails as $w) {?> 
                                    <h3><?php
                                            echo $w->shop_name; 
                                        ?></h3>
                                <?php }?> 
                            </div>
                            <div class="row">
                              
                            </div>
                            <hr class="mb-2">
                            <br>
                            <div class="row"><label style="display:grid; grid-template-columns:repeat(2,1fr)">Username:<p> <?php if(isset($username)){ echo $username;}?></p> </label></h3></div>
                            <hr class="mb-2">  
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="form_lastname">ComputerType</label>
                                            <select class="form-control" id="computer_type" aria-label="Default select example">
                                               <option selected disabled>--Select Computer Type--</option>

                                               <?php foreach ($computer_type as $s) {?> 
                                                    <option value="<?php echo $s->Ctype_id;?>"><?php echo $s->name;?></option>
                                               <?php }?> 

                                            </select>  
                                            <br>
                                            <label style="display:grid; grid-template-columns:repeat(2,1fr)">computer Rate: <p>₱ 10</p> </label>
                                            <label style="display:grid; grid-template-columns:repeat(2,1fr)">Specs: <p>Cpu Intel Core i3 @3.60GHz(4 CPUs), ~ 3.6GHz
GPU: NVIDIA GeForce GTX 1050 TI @4GB
Total RAM: 1x16 GB @2667 MHz
OS: Windows 10 Pro 64-bit</p> </label>
                                        </div> 
                                    </div>
                                    <div class="col-md-2">
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">available</span>
                                    </div>
                                </div>
                                <hr class="mb-4">  
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <label >Number person</label> 
                                            <input type="number" id="num-person" name="num-person" class="form-control" required="required" data-error="Valid email is required."> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <label >Date of arrival</label> 
                                            <input type="date" id="date-arrival" name="" class="form-control" required="required" data-error="Valid email is required."> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <label >Time of arrival</label> 
                                            <input type="time" id="time-arrival" name="" class="form-control" required="required" data-error="Valid email is required."> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Additional Message</label> <textarea id="message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input id="submit-booking" class="btn btn-success btn-send pt-2 btn-block " value="Submit"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>  



</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- computertype populate if selected -->
<script>
    $(document).on('click','#submit-booking',function(){ 
         shop_id       = $('#shop_id').text();
         numperson    = $('#num-person').val();
         date_arrival  = $('#date-arrival').val();
         time_arrival  = $('#time-arrival').val();
         message       = $('#message').val();
        computer_type = $('#computer_type').val();

        alert(message);
    });
</script>