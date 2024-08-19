<!DOCTYPE html>

<html lang="en">

<head>
	<title>Page Not Found</title>

	<link rel="icon" type="text/icon" href="{{ asset('icon.png') }}">

    <!-- GOOGLE FONTS
            ================================================== -->
    <link rel='stylesheet' id='google-fonts-zozo_options-css' href="{{ asset('financepro/fonts.googleapis.com/css5f51.css?family=Hind%3A300%2C400%2C500%2C600%2C700%7CLora%3A400%2C700%2C400italic%2C700italic') }}" type='text/css' media='all' />
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>

    <style type="text/css">

        body{

          margin-top: 16.5%;
          /*margin-top: 150px;*/

          background-color: #C4CCD9;

        }

        .error-main{

          background-color: #fff;

          box-shadow: 0px 10px 10px -10px #5D6572;

        }

        .error-main h1{

          font-weight: bold;

          color: #444444;

          font-size: 100px;

          text-shadow: 2px 4px 5px #6E6E6E;

        }

        .error-main h6{

          color: #42494F;

        }

        .error-main p{

          color: #9897A0;

          font-size: 14px; 

        }

        .text-th-color{
          color: #24cae2;
        }

    </style>

</head>

<body>

    <div class="container">

      <div class="row text-center">

        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">

          <div class="row">

            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">

              <h1 class="m-0">5<span  class="text-th-color">0</span>0</h1>

              <h6>Internal Server Error - financialmarkets.club</h6>

              <p>A<span class="text-th-color"> Problem </span> Has <span class="text-th-color"> Been </span> Detected <span class="text-th-color"> By </span> Us.</p>

              <a href="{{ route('index') }}" class="text-th-color">Go To Home Page</a>

            </div>

          </div>

        </div>

      </div>

    </div>

</body>

</html>