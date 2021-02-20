<!DOCTYPE html>
<html lang="en">
<head>
  <title>Career Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
</head>
<style type="text/css">
  .topnav{
    background-color: #333;
    overflow: hidden;
    height: 90px;
  }

  .nav-logo-img{
      margin: 20px;
      padding-left: 50px;
    }

    .bg-img{
    background-image: url("bg1.jpg");
    width: 103.4%;
    height: 550px;
    margin-left: -30px;
    /*background-position: center;*/
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
 

    .div-btn-login{
      text-align: center;
      padding: 18px;
      /*margin-right: 75px;*/
      /*margin-left: 260px;
      margin-top: 100px;*/
    }

    .button {
        background-color: #333;
        border: 0.3px solid gray;
        color: #C0C0C0;
        /*padding: 16px 32px;*/
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        /*transition-duration: 0.4s;*/
        cursor: pointer;
      }
    .button:hover{
          border: 0.3px solid white;
          color: white;
    }

    .btn-login{
      border-radius: 4px;
      /*background-color: blue;*/
      padding: 12px 28px;
    }

    .categories-btn-center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100px;
    }

    .categories-button {
      background-color: #F0F0F0; 
      color: black;
      border: 1px solid black;
      padding: 12px 28px;
      border-radius: 4px;
      font-size: 16px;
    }

    .categories-button:hover {
      background-color: black;
      color: #C0C0C0;
    }


    .bg-img h3 {
      margin: 0px;
      /*padding: 150px 100px;*/
      padding-top: 150px;
      padding-left: 100px;
      color: white;
      font-size: 40px;
    }

    .bg-img p{
      padding-top: 10px;
      padding-left: 100px;
      color: white;
      font-size: 15px;
      width: 55%;
    }

    .popular-job-categories{
      background-color: #F0F0F0;
      /*margin: -15px;*/
    }

    .categories-header{
      text-align: center;
      font-weight: bold;
      font-size: 28px;
      padding: 15px;
    }

    
    .categories-img{
      width: 100%;
      text-align: center;
    }

    .text-block{
      position: absolute;
      width: 305px;
      height: 35px;
      bottom: 0px;
      right: 16px;
      /*left: 20px;*/
      font-weight: bold;
      font-size: 18px;
      text-align: center;
      padding: 5px;
      opacity: 0.8;
      background-color: black;
      color: white;
      padding-left: 20px;
      padding-right: 20px;
      /*margin: 8px;*/
    }

    .inner-box:hover{
      border: 2px solid #B80000 ;
    }

    .howitwork-header{
      text-align: center;
      font-weight: bold;
      font-size: 28px;
      padding: 20px;
    }

    .block{
        text-align: center;
        padding: 20px;
        width: 350px;
        margin-left: 70px;
      }

      .block h1{
        text-align: left;
    }

    .block-title{
    cursor:pointer;
    font-size: 20px;
    padding: 10px;
    font-weight: bold;
  }

    .featured-button{
      background-color: transparent;
      color: green;
      border: none;
      text-decoration: none;
      display: inline-block;
      font-size: 18px;
      margin: 70px 100px;
      cursor: pointer;
      float: right;
    }

    .how-it-work{
      height: 400px;
    }

    .cities{
      height: 450px;
      background-color: #F0F0F0;
    }
    .cities-content{
      width: 150px;
      height: 110px;
      margin-left: 70px; 
      margin-top: 20px;
    }

    .cities figcaption{
          text-align: center;
          font-size: 18px;
      }

    .footer{
          background-color: #333; 
          height: 380px;
    }

    .footer h4{
      float: center;
      margin-left: 50px;
      margin-top: 50px;
      font-size: 22px;
      color:white;
    }

    .footer-content{
      padding-left: 50px;
      font-size: 17px;
      line-height: 1.8;
    }

    .footer a{
      color: gray;
    }

    .footer-newletter p{
        margin-left: 50px; 
        color: white;
        width: 250px;
      }

      .email-text{
        background-color: black;
        color:white; 
        padding: 5px;
        border-radius: 4px;
        margin-left: 50px;
        height: 35px;
        width: 65%; 
    }

    .email-send-btn{
    background-color: #78AB46;
    height: 35px; 
    width: 40px;
     border-radius: 4px;
  }

      .social-media-icon a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 16px;
        text-align: center;
        display: inline-block;
        color: #707070;
        background: #353535;
        border-radius: 4px;
      /*    -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        -o-border-radius: 4px;*/
      }

      .social-media-icon ul{
        display: inline-block;
        padding: 10px;
      }

          .social-media-icon li{
        display: inline-block;
        margin-top: 10px;
        margin-right: 10px;
    }

        .social-media-icon a:hover{
          background: white;
          color: black;
        }

        /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {

  col-sm-3{

  }
  .topnav{
    background-color: red;
    position: relative;
  }

  .nav-logo-img{
      /*margin: 20px;*/
      /*padding-left: 50px;*/
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
 .topnav .responsive{
    background-color: blue;
    /*width: 100%;*/
  }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
   .topnav{
    /*background-color: green;*/
  }
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .example {background: orange;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .example {background: pink;}
}
</style>
<body>
  <div class="container-fluid">
    <div class="row">
        <div class="topnav" id="myTopnav">
            <div class="col-sm-3">
              <div class="nav-logo-img">
                  <img src="careerup-logo.png">
              </div>
            </div>

            <div class="col-sm-6" >
              
            </div>

            <div class="col-sm-3">
              <div class="div-btn-login">
                <a href="#">
                  <button type="button" class="button btn-login">Login/Register</button>
                </a>
              </div>
            </div>
      </div>
    </div>
  </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="bg-img">
              <h3>Find The Job That Fits Your Life</h3>
              <p>Each month, more than 7 million jobseekers turn to website in their search for work, making over
                  160,000 applications every day. 
              </p>
          </div>
        </div>
      </div>
    </div>

    <div class="popular-job-categories">
      <div class="container-fluid">
        <div class="row">
            <div class="categories-header">
              Popular Job Categories
            </div> 
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
            <div class="categories">

                    <div class="col-md-3">
                      <div class="inner-box">
                        <a href="#">
                          <div class="categories-img">
                            <img src="categories1.jpg">
                          </div>
                          <div class="text-block">
                              Design And Multimedia  
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-md-3">
                       <div class="inner-box">
                        <a href="#">
                          <div class="categories-img">
                            <img src="categories2.jpg">
                          </div>
                          <div class="text-block">
                            Education Training 
                          </div>
                        </a>
                      </div>  
                    </div>
                    
                    <div class="col-md-3">
                      <div class="inner-box">
                        <a href="#">
                        <div class="categories-img">
                          <img src="categories3.jpg">
                        </div>
                          <div class="text-block">
                            Accounting / Finance
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="inner-box">
                        <a href="#">
                          <div class="categories-img">
                              <img src="categories4.jpg">
                          </div>
                          <div class="text-block">
                            Human Resource
                          </div>
                        </a>
                      </div>
                    </div>
                    
            </div> 
        </div>
      </div>

      <br>
      <br>
      
      <div class="container-fluid">
        <div class="row">
            <div class="categories">

                    <div class="col-md-3">
                      <div class="inner-box">
                        <a href="#">
                          <div class="categories-img">
                            <img src="categories5.png">
                          </div>
                          <div class="text-block">
                            Telecommunication 
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="inner-box">
                        <a href="#">
                          <div class="categories-img">
                            <img src="categories6.jpg">
                          </div>
                          <div class="text-block">
                            Restaurant / Food Service
                          </div>
                        </a>
                      </div>
                    </div>
                    
                    <div class="col-md-3">
                      <div class="inner-box">
                      <a href="#">
                        <div class="categories-img">
                          <img src="categories7.jpg">
                        </div>
                          <div class="text-block">
                            Construction / Facilities
                          </div>
                      </a>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="inner-box">
                        <a href="#">
                          <div class="categories-img">
                            <img src="categories8.jpg">
                          </div>
                            <div class="text-block">
                              Health
                            </div>
                        </a>
                      </div>
                    </div>
                    
            </div> 
        </div>
      </div>

      <div class="categories-btn-center">
        <button class="button categories-button">
          Browse All Categories 
          <i class='fa fa-arrow-right'></i>
        </button>
      </div>
  </div>


  <div class="how-it-work" >
    <div class="container-fluid">
      <div class="row">
        <div class="howitwork-header">
          How It Works?
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">

        <div class="col-md-4">
          <div class="block">
            <h1> 1 </h1> 
            <i id="lock-icon" class="fa fa-user" aria-hidden="true" style="font-size: 88px;"></i>
            <div id="icon1-title" class="block-title" onclick="location.href='#';" onmouseover="mouseOver1()" onmouseout="mouseOut1()"> Create an account</div>
            <p> Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
          </div>
        </div>
        
         <div class="col-md-4">
          <div class="block">
            <h1> 2 </h1> 
            <i id="search-icon" class="fa fa-search" aria-hidden="true" style="font-size: 88px;"></i>
            <div id="icon2-title" class="block-title" onclick="location.href='#';" onmouseover="mouseOver2()" onmouseout="mouseOut2()"> Search Jobs</div>
            <p> Browse profiles, reviews, and proposals then interview top candidates.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="block">
            <h1> 3 </h1> 
            <i id="trophy-icon" class="fa fa-trophy" aria-hidden="true" style="font-size: 88px;"></i>
            <div id="icon3-title" class="block-title" onclick="location.href='#';" onmouseover="mouseOver3()" onmouseout="mouseOut3()"> Save & Apply</div>
            <p> Use the Upwork platform to chat, share files, and collaborate from your desktop.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="featured-job" style="height: 400px;background-color: gray;">
    <div class="featured-job-header" style="font-size: 28px;padding: 60px 100px;">
      Featured Jobs
    </div>
  </div>
 -->
 <!-- <div class="featured-job" style="height: 400px;background-color:  #F0F0F0;">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-6">
          <div class="featured-job-header" style="font-size: 28px;padding: 60px 100px;">
            Featured Jobs
          </div>
        </div>

        <div class="col-sm-6">
          <button class="featured-button"> 
            Browse All Jobs
            <i class='fas fa-arrow-right'></i>
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12" style="background-color: red; height: 100px; padding-left: 30px; padding-top: 0px;">
          <article style="background-color: blue; width: 50%;height: 100px; margin-left: 100px;">
            Hello 
          </article>
        </div>
      </div>
    </div>
  </div> -->

  <div class="cities">
    <div class="container-fluid">
      <div class="row">
        <div style="font-size: 35px;text-align: center;padding: 25px;">
          Cities
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="cities-content"> 
            <figure>
                <a href="#"><img src="delhi_ncr.svg" alt="Delhi" style="width:100%;"></a>
              <figcaption>Delhi</figcaption>
            </figure>
          </div>
        </div>
        
        
        <div class="col-sm-3">
          <div class="cities-content"> 
            <figure>
                <a href="#"><img src="bangalore.svg" alt="Bangalore" style="width:100%;"></a>
              <figcaption>Bangalore</figcaption>
            </figure>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="cities-content"> 
            <figure>
                <a href="#"><img src="mumbai.svg" alt="Mumbai" style="width:100%;"></a>
              <figcaption>Mumbai</figcaption>
            </figure>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="cities-content"> 
            <figure>
                <a href="#"><img src="hyderabad.svg" alt="Hyderabad" style="width:100%;"></a>
              <figcaption>Hyderabad</figcaption>
            </figure>
          </div>
        </div>
        
      </div>
      <br><br>
      <div class="row">
        <div class="col-sm-3">
          <div class="cities-content"> 
            <figure>
                <a href="#"><img src="chennai.svg" alt="Chennai" style="width:100%;"></a>
              <figcaption >Chennai</figcaption>
            </figure>
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="cities-content"> 
            <figure>
                <a href="#"><img src="kolkata.svg" alt="Kolkata" style="width:100%;"></a>
              <figcaption>Kolkata</figcaption>
            </figure>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="cities-content"> 
            <figure>
                <a href="#"><img src="work_from_home.svg" alt="Work From Home" style="width:100%;"></a>
              <figcaption >Work From Home</figcaption>
            </figure>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="cities-content"> 
            <figure>
                <a href="#"><img src="international.svg" alt="International" style="width:100%;"></a>
              <figcaption >International</figcaption>
            </figure>
          </div>
        </div>
        
      </div>
    </div>
  </div>

   <div class="footer" >
    <div class="container-fluid">
    
      <div class=" row" >
        <div class="col-sm-3">
          
          <h4 style=" "> Job By Places </h4>
          
          <div class="footer-content">
            <a href="#">Job In Delhi</a><br>
            <a href="#">Job In Bangalore</a><br>
            <a href="#">Job In Mumbai</a><br>
            <a href="#">Job In Hyderabad</a><br>
            <a href="#">Job In Chennai</a><br>
            <a href="#">Job In International</a><br><br>
          </div> 
        </div>

        
        <div class="col-sm-3" >
          <h4 style=" "> Job By Categories </h4>
          
          <div class="footer-content">
            <a href="#">Part-Time</a><br>
            <a href="#">Engineering</a><br>
            <a href="#">NGO</a><br>
            <a href="#">MBA</a><br>
            <a href="#">Design</a><br>
            <a href="#">Media</a><br>
          </div> 
        </div>

        <div class="col-sm-3">
          <h4 style=" "> About CareerUp </h4>
          
          <div class="footer-content">
            <a href="#">About Us</a><br>
            <a href="#">Our Servies</a><br>
            <a href="#">Terms & Conditions</a><br>
            <a href="#">Contact Us</a><br>
          </div> 
        </div>

        <div class="col-sm-3">
          <div class="footer-newletter">
            <h4> Newsletter </h4>
            <p >Subscribe to CareerUp Pacific newsletter to get
              the latest jobs posted, candidates ,and other latest news stay updated.</p>
            <form action="...">
              <input class="email-text" type="email" placeholder="Enter your email address" name="emails">
              <button class="email-send-btn"><i class="fa fa-paper-plane" style="font-size: 18px;color: white"></i></button>
            </form>
          </div>
          
        </div>

      </div>

      <div class="row">
        <div class="col-md-12" style="border-top: 1px solid gray">
          <div class="col-md-4">
          
            <div class="footer-img" style="padding-left: 50px;padding-top: 10px;">
              <img src="careerup-logo.png">  
            </div>
          </div>

          <!-- <div class="col-md-4">
            <p style="color: white;font-size: 14px;text-align: center;padding-top: 40px;"> <span>&#169;</span> 2020CareerUp. All Rights Reserved. </p>  
          </div> -->
            
          <div class="col-md-1">
            <p style="color: white;font-size: 18px;text-align: left;padding-top: 25px;"> Follow Us</p>  
           </div> 

           <div class="col-sm-3">
              <div class="social-media-icon">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-google"></i>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>  
              </div>
            </div>

            <div class="col-md-4">
            <p style="color: white;font-size: 14px;text-align: center;padding-top: 40px;"> <span>&#169;</span> 2020CareerUp. All Rights Reserved. </p>  
          </div>
        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript">

    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


    function mouseOver1() {
    document.getElementById("lock-icon").style.color = "green";
    document.getElementById("icon1-title").style.color = "green";
  }

  function mouseOut1() {
    document.getElementById("lock-icon").style.color = "black";
    document.getElementById("icon1-title").style.color = "black";
  }

   function mouseOver2() {
    document.getElementById("search-icon").style.color = "green";
    document.getElementById("icon2-title").style.color = "green";
  }

  function mouseOut2() {
    document.getElementById("search-icon").style.color = "black";
    document.getElementById("icon2-title").style.color = "black";
  }

  function mouseOver3() {
    document.getElementById("trophy-icon").style.color = "green";
    document.getElementById("icon3-title").style.color = "green";
  }

  function mouseOut3() {
    document.getElementById("trophy-icon").style.color = "black";
    document.getElementById("icon3-title").style.color = "black";
  }

  
  </script>
</body>
</html>