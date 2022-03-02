<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Multi Step Bootstrap Form with animations</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="asset/css/register.css">
</head>
<body>
<!-- partial:index.partial.html -->

<!--PEN HEADER-->
<!-- <header class="header">
  <h1 class="header__title">Multi Steps Form with animations</h1>
  <div class="header__btns btns"><a class="header__btn btn" href="https://github.com/nat-davydova/multisteps-form" title="Check on Github" target="_blank">Check on Github</a></div>
</header> -->
<!--PEN CONTENT     -->
<div class="content">
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
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Account Info</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Personal Info</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Account Info</h3>
                <div class="multisteps-form__content">
                  
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Username"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="email" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="password" placeholder="Password"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="password" placeholder="Repeat Password"/>
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Personal Info</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="First Name"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Last Name"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Address Brgy/City/Cntry"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <label><center>Birthday:</center></label>
                      <input class="multisteps-form__input form-control" type="date" >
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Phone Number"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Vac Status</option>
                        <option>1st Dose</option>
                        <option>2nd Dose</option>
                      </select>
                    </div>
                    <div class="col-12 col-sm-6">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">Civil Status</option>
                        <option>Single</option>
                        <option>Married</option>
                      </select>
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Submit</button>
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