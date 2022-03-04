
<style>
/* .qr-box {
    width: 80%;
    height: auto;
    position: relative;
    background: white;
    border: 2px dashed #bbb;
} */

</style>

<div class="container-fluid">
     <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">SCAN QR</h1>
    </div>   
    
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12 jumbotron">
                <div class="row">
                    <div class="col-md-6">   <video id="preview"  style="width:100%; border: 4px dashed #bbb; transform: rotateY(180deg);"></video>
                        <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" name="options" value="2" autocomplete="off"> ResetCamera 
                        </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <h2>Booking Information</h2>  
                         <br>
                         <div class="row justify-content-center mb-2"> 
                             <h1 class="col-md-3 " style="color:green">ON TIME </h1>
                             <h1 class="col-md-3 " style="color:red"> LATE</h1>
                         </div>
                          
                         <div class="row justify-content-center">
                            <div class="col-md-3">
                                <h5>Arrival Time</h5><br>
                                <h5 id="arrival">00:00 AM/PM</h5>
                            </div>
                            <div class="col-md-3">
                                <h5>Time left</h5><br>
                                <h5>00:00</h5>
                            </div>
                         </div> 
                         <hr class="mb-4">
                         <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="uname1">Transaction Id:</label> 
                                    <input class="form-control" id="uname1" name="uname1" required="" type="text">
                                </div>
                             </div>

                         </div>
                         <hr class="mb-4">  
                         <div class="row">
                            <div class="col-md-12">
                            <!-- form user info -->
                            <div class="card card-outline-secondary">
                                <div class="card-header">
                                    <h3 class="mb-0">User Information</h3>
                                </div>
                                <div class="card-body">
                                    <form autocomplete="off" class="form" role="form">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" id="name" type="text" value="Junky">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="text" value="Male">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Vac Status</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" id="status" type="text" value="2nd Dose">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" id="p_number" type="text" value="092234753221">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" id="email" type="text" value="Hackmetry@gmail.com">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                </div><!-- /form user info -->                                
                           
                            </div>
                         </div> 
    
                    </div>
                </div>
            </div>
        </div>
        
       <!-- Content Row 2-->
       <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 jumbotron"> 
                        <!-- info -->
                            <div class="card card-outline-secondary">
                                <div class="card-header">
                                    <h3 class="mb-0">Computerdetails</h3>
                                </div>
                                <div class="card-body">
                                    <form autocomplete="off" class="form" role="form">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Computershop:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input class="form-control" type="text" value="Tnc">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">ComputerService:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input class="form-control" type="text" value="ComputerBooking">
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Time Arrival:</label>
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4">
                                             <input class="form-control" type="text" value="4:00 PM">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Date:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input class="form-control" type="text" value="3/25/2022">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Computer Type:</label>
                                        <div class="col-lg-4"> </div>
                                        <div class="col-lg-4">
                                             <input class="form-control" type="text" value="VIP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">Computer Rate:</label>
                                        <div class="col-lg-5"> </div>
                                        <div class="col-lg-3">
                                             <input class="form-control" type="text" value="20 PHP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label form-control-label">#Person:</label>
                                        <div class="col-lg-5"> </div>
                                        <div class="col-lg-3">
                                             <input class="form-control" type="text" value="2">
                                        </div>
                                    </div>
  
                                    </form>
                                </div>
                                </div><!-- /form user info -->                  
                 
            </div>
            <div class="col-md-2"></div>
        </div>
       <!-- Content Row 3-->
       <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 jumbotron">
            <h1>Payment Details</h1>  
            </div>
            <div class="col-md-2"></div>
        </div>    

</div>