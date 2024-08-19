<!DOCTYPE html>

<html lang="">
<style>
    
.sub-title {
font-weight: bold;
font-size: 20px;
line-height: 121.7%;
letter-spacing: 0.04em;
color: #0AA2C7;
 text-align: center;
font-family: 'Rubik', sans-serif;
}
.title{
margin-bottom: 5px;
font-weight: bold;
font-size: 25px;
line-height: 190%;
color: #292929;
font-family: 'Rubik', sans-serif;
float: left;
width: 100%;
text-align: center;
  
}
.link-title{
text-align: center;
margin-bottom: 5px;
font-weight: normal;
font-size: 25px;
line-height: 190%;
color: #292929;
font-family: 'Rubik', sans-serif;
float: left;
width: 100%;
border-bottom: 1px solid gray;
}
.my-content{
  margin-block: 5rem;
  padding: 5rem;
  /*border-radius: .2rem;*/
  /*box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;*/
  /*border:1px solid #24cae2;*/
}
</style>
<head>
	<!-- Header -->
    	@include('financepro.includes.head')
    <!-- Header End -->


</head>

<body>


    <!-- Header -->

    @include('financepro.includes.header_content')

        @if(Request::is('/'))
            @include('financepro.includes.slider')
        @endif
            
    <!-- Header End -->


    <!-- Main Content -->
    
        <div class="container my-content">
            <h1 class= "title"> Congratulations!</h1>
            <h3 class="sub-title">- You are on your way to get Expert Trade Signals from an Experienced Trader - we hope you will make Lots of Profit!</h3>
            <h3 class="sub-title">Join this Group on Telegram and you will start getting Trade Signals</h3>
            <h2 class="link-title"><a href="#">https://t.me/goldium_Free_FX_Signals</a></h2>
            <h1 class="title"> Good Luck with your Trading!</h1>
        </div>
    <!-- Main Content End -->
	
	<!-- Footer -->
	@include('financepro.includes.footer')

    <!-- Footer End -->

<br/>


</body>

</html>