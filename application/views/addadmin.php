<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add computer</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="assets/css/register.css">
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script>
    $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});
</script>

</head>
<body>
<!--PEN HEADER-->
  <!-- <header class="header">
    
  </header> -->
<!--PEN CONTENT     -->
<div class="content">
    <nav>
        <ul class="menu">
            <li class="logo"><a href="#">FindN</a></li>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">About</a></li>
            <li class="item"><a href="#">Services</a></li>
            </li>
            <li class="item button"><a href="#">Log In</a></li>
            <li class="item button secondary"><a href="#">Sign Up</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
  <br>
  <br>
  <br>
  <!--content inner-->
  <div class="content__inner">

    <div hidden class="container">
      <!--content title-->
      <h2 class="content__title content__title--m-sm">Pick animation type</h2>
      <!--animations form-->
      <form class="pick-animation my-4">
        <div class="form-row">
          <div class="col-5 m-auto">
            <select class="pick-animation__select form-control">
              <option value="scaleIn" selected="selected">ScaleIn</option>
              <option value="scaleOut">ScaleOut</option>
              <option value="slideHorz">SlideHorz</option>
              <option value="slideVert">SlideVert</option>
              <option value="fadeIn">FadeInOten</option>
            </select>
          </div>
        </div>
      </form>
      <!--content title-->
      <h2 class="content__title">Click on steps or 'Prev' and 'Next' buttons</h2>
    </div>
    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <!-- <div class="multisteps-form"> -->
        <!--progress bar-->
        <!-- <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Account Info</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Personal Info</button>
            </div>
          </div>
        </div> -->
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title"><center>Add Admin</center></h3>
                <div class="multisteps-form__content">
                  
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Computer Shop Name"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Address Brgy/City/Cntry"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Owner Name"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Admin Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                      </select>
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Cancel</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Add</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="asset/js/register.js"></script>

</body>
</html>