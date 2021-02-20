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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
</head>
<style type="text/css">




  .nav-logo-img{
    margin: 20px;
    padding-left: 50px;
  }

  .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  margin-left: 13%;
  padding-top: 1.8%;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.careerup-logo{
  width: 16%;
  float: left;
  padding-top: 1%;
  padding-left: 5%;
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
        /*margin: 4px 2px;*/
        /*transition-duration: 0.4s;*/
        cursor: pointer;      
      }

    .button:hover{
          border: 0.3px solid white;
          color: white;
    }

    .btn-login{
      border-radius: 4px;
      padding: 12px 28px;
    }
    
    .bg-img{
    background-image: url("bg1.jpg");
    width: 100%;
    height: 550px;
    /*margin-left: -30px;*/
    /*background-position: center;*/
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
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
    }


    .categories-img{
      width: 100%;
      text-align: center;
    }

    .categories-header{
      text-align: center;
      font-weight: bold;
      font-size: 28px;
      padding: 15px;
    }

    .popular-job-categories-flex {
      display:flex;
      }

    .popular-job-categories-flex div {
      flex:1;
      margin:35px;
        /*need some space*/
      }

    .popular-job-categories-flex img {
      width:100%;
      border: 1px solid black;  
      } 

    .popular-job-categories-flex img:hover {
      width:100%;
      border: 2px solid red;
      } 

    .popular-job-categories-flex figcaption{
        font-size: 20px;
        text-align: center;
        color: black;

      }

    .popular-job-categories-flex a{
      text-decoration: none;
    }

    .how-it-work-header{
      text-align: center;
      font-weight: bold;
      font-size: 28px;
      padding: 20px;
    }

    .how-it-work-flex {
      display:flex;
      }

    .how-it-work-flex div {
      flex:1;
      margin:20px; /* need some space ?*/
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
























     @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
        padding: 4%;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }


    }

    @media screen and (max-width: 600px) {

      .topnav{
        position: fixed;
        width: 100%;
        top: 0px;
        background-color: #333;

      }
      .topnav.responsive {position: relative;}
      
      .bg-img.responsive{
        background-image: url("categories1.jpg");
        /*position: relative;*/
        margin-top: -250px;
        background: transparent;
        margin-bottom: 0px;
      }


   .bg-img.responsive h3 {
      margin: 0px;
            padding-top: 150px;
      padding-left: 100px;
      color: white;
      font-size: 40px;
      display: none;
    }

     .bg-img.responsive p{
      padding-top: 10px;
      padding-left: 100px;
      color: white;
      font-size: 15px;
      width: 55%;
      display: none;
    }

      .careerup-logo{
        width: 35%;
        padding-top: 2%;
        display: inline;
      }

      .topnav.responsive .careerup-logo{
        display: none;
      }


      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: center;
        margin: 5%;
      }

      .button:hover{
        display: none;
      }

      a .btn-login{
        padding: 10px;
      }

      
         .bg-img{
        background-image: url("bg1.jpg");
        height: 300px; 
        margin-top: 14%;
        width: 100%;

      }


      .bg-img h3{
        /*margin: 0px;*/
        width: 80%;
      /*padding: 150px 100px;*/
      padding-top: 50px;
      padding-left: 30px;
      color: white;
      font-size: 20px;
      position: relative;

      }

      .bg-img p{
        /*background-color: red;*/
        padding: 2% 8%;
        width: 100%;
        position: absolute;
        /*margin-left: 5%;*/
    }

     .popular-job-categories.responsive{
      margin-top: -15%;
     }

    .popular-job-categories-flex{
      display: inline;
    }

    .popular-job-categories-flex img:hover {
      display: none;
      }

     .how-it-work-flex{
      display: inline;
      margin-left: 20%;
    }


    .how-it-work-flex div {
      flex:1;
      margin: auto;

      }

    .block{
        /*text-align: center;*/
        padding: 20px;
        width: 280px;
      }

      .block h1{
        text-align: left;
        margin: 0px;
    }

    .block-title{
    cursor:pointer;
    font-size: 20px;
    padding: 10px;
    font-weight: bold;
  } 
  
  }












      









     










</style>
<body>
  <a id="top-up-button"></a>
  <div class="topnav" id="myTopnav" >
    <img class="careerup-logo" src="careerup-logo.png">
      <a href="#contact" id="topnav-1">Contact</a>
        <a href="#about">About</a>
        <a href="#"><i class="fa fa-bell"></i></a>
        <a href="#">
          <button type="button" class="button btn-login"><div class="login-text">Login/Register</div></button>
        </a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
  </div> 

  
  <div class="bg-img" id="myBgImg">
    <h3>Find The Job That Fits Your Life</h3>
    <p> Each month, more than 7 million jobseekers turn to website in their search for work, making over
                  160,000 applications every day. </p>
  </div>

  <div class="popular-job-categories" id="myPopularJobCategories">
      <div class="categories-header">
      Popular Job Categories
    </div>

    <div class="popular-job-categories-flex">
    
      <a href="#" >
        <div>
          <figure>
            <img src="categories1.jpg">
            <figcaption >Design and Multimedia</figcaption>  
          </figure>
        </div>
      </a>

    <a href="#" >
      <div>
        <figure>
          <img src="categories2.jpg">
            <figcaption >Education</figcaption>  
          </figure>
       </div>
    </a>

    <a href="#" >
      <div>
        <figure>
          <img src="categories3.jpg">
            <figcaption >Accounting / Finance</figcaption>  
        </figure>
      </div>
    </a>

    <a href="#" >
      <div>
        <figure>
          <img src="categories4.jpg">
            <figcaption >Human Resource</figcaption>  
          </figure>
      </div>
    </a>

  </div>

  <div class="popular-job-categories-flex">
    
   <a href="#" >
      <div>
        <figure>
          <img src="categories5.png">
            <figcaption >Telecommunication</figcaption>  
          </figure>
      </div>
    </a>

   <a href="#" >
      <div>
        <figure>
          <img src="categories6.jpg">
            <figcaption >Restaurant / Food Service</figcaption>  
          </figure>
      </div>
    </a>

   <a href="#" >
      <div>
        <figure>
          <img src="categories7.jpg">
            <figcaption >Construction / Facilities</figcaption>  
          </figure>
      </div>
    </a>

   <a href="#" >
      <div>
        <figure>
          <img src="categories8.jpg">
            <figcaption >Health</figcaption>  
          </figure>
      </div>
    </a>
  </div>

  <div class="categories-btn-center">
          <button class="button categories-button">
            Browse All Categories 
            <i class='fa fa-arrow-right'></i>
          </button>
  </div>

  </div>

  <div class="how-it-work" >
        <div class="how-it-work-header">
          How It Works?
        </div>

        <div class="how-it-work-flex">
          <div class="block">
            <h1> 1 </h1> 
            <i id="lock-icon" class="fa fa-user" aria-hidden="true" style="font-size: 88px;color: black;"></i>
            <div id="icon1-title" class="block-title" onclick="onclickicon1()" onmouseover="mouseOver1()" onmouseout="mouseOut1()" > Create an account</div>
            <p> Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
          </div>
        
          <div class="block">
            <h1> 2 </h1> 
            <i id="search-icon" class="fa fa-search" aria-hidden="true" style="font-size: 88px;color: black;"></i>
            <div id="icon2-title" class="block-title" onclick="onclickicon2()" onmouseover="mouseOver2()" onmouseout="mouseOut2()"> Search Jobs</div>
            <p> Browse profiles, reviews, and proposals then interview top candidates.</p>
          </div>
        
          <div class="block">
            <h1> 3 </h1> 
            <i id="trophy-icon" class="fa fa-trophy" aria-hidden="true" style="font-size: 88px;color: black;"></i>
            <div id="icon3-title" class="block-title" onclick="onclickicon3()" onmouseover="mouseOver3()" onmouseout="mouseOut3()"> Save & Apply</div>
            <p> Use the Upwork platform to chat, share files, and collaborate from your desktop.</p>
          </div>
        </div>
  </div>



  <script>

    function myFunction() {
      var x = document.getElementById("myTopnav");
      var y = document.getElementById("myBgImg");
      var z = document.getElementById("myPopularJobCategories");
      if (x.className === "topnav") {
        x.className += " responsive";
        y.className += " responsive";
        z.className += " responsive";
      } else {
        x.className = "topnav";
        y.className = "bg-img";
        z.className = "popular-job-categories";
      }
    }

   
  </script>

</body>


</html>