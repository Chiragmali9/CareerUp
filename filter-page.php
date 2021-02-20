<?php

include('database_connection.php');

$country = '';
$query = "SELECT DISTINCT Location FROM tbl_job ORDER BY Location ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $country .= '<option value="'.$row['Location'].'">'.$row['Location'].'</option>';
}

?>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
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
  z-index: 99;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  margin-left: 8%;
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
        border: solid gray;
        border-width: 1.5px; 
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
          border: solid white;
          border-width: 1.5px;  
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
      /*margin: -15px;*/
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

  .cities{
    background-color: #F0F0F0;
  }

    .cities-flex {
    display:flex;
    }

  .cities-flex div {
    flex:1;
    margin:5px; /* need some space ?*/
    text-align: center;
    padding: 30px;
    }

  .cities-flex img {
    width:50%;
    } 

    .cities-flex figcaption{
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

    .footer-content a{
      text-decoration: none;
    }


    .footer-content a:hover{
      color: white;
      text-decoration: underline;
    }

    .footer a{
      color: gray;
    }

    .footer-newletter p{
        margin-left: 50px; 
        color: white;
        width: 280px;
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
    width: 44px;
     border-radius: 4px;
  }

  .footer-flex {
  display:flex;
  }
.footer-flex div {
  flex:1;
  /*margin:5px;  need some space ?*/
  }

  .footer-bottom-flex {
  display:flex;
  border-top: 1px solid gray;
  }
.footer-bottom-flex div {
  flex:1;
  /*margin:5px;  need some space ?*/
  }



  .footer-bottom-img{
    padding-left: 50px;
    padding-top: 10px;
  }

  .footer-bottom-flex #follow-us{
    color: white;
    font-size: 18px;
    text-align: center;
    padding-top: 30px;
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

        #copyright{
          color: white;
          font-size: 14px;
          text-align: center;
          padding-top: 30px;
          padding-right: 25px;
        }


      #top-up-button {
        display: inline-block;
        /*background-color: #FF9800;*/
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        visibility: hidden;
      }

      #top-up-button::after {
        content: url("top-up-rocket-icon.png");
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        /*color: #fff;*/
        color: green;
      }
      
      #top-up-button:hover {
        cursor: pointer;
      }
      
      #top-up-button:active {
        /*background-color: #555;*/
      }
      
      #top-up-button.show {
        opacity: 1;
        visibility: visible;
      }

      .login-bar{
      background-color: #F0F0F0;
      width: 100%;
      display: flex;
      align-items: center;
      color: black;
    }

    .login-bar h2{
      padding: 40px 100px;
      margin: 0px;
      font-size: 26px; 
    }

    .login-bar ol{
      list-style-type: none;
      margin-left: 44%;
      text-align: right;
      display: inline-flex;
    }

    .login-bar li a{
      text-decoration: none;
      color: black;
      font-size: 15px;
    }

    .login-body{
      width: 100%;
      /*height: 900px;*/
      background-color:   #F5F5F5;
    }

  .wrapper { 
  /*border : 2px solid #000; */
  overflow:hidden;
}

.wrapper div {
   min-height: 200px;
   padding: 10px;
}
#one {
  /*background-color: gray;*/
  float:left;
  /*margin-right:20px;*/
  /*width: 670px;*/
  width: 50%;
  padding: 100px;
  /*border-right:2px solid #000;*/
}

#two {
  /*background-color: red;*/
  float:left;
  /*margin-right: 10px;*/
  /*width: 670px;*/
  width: 50%;
  padding: 100px 20px;
  /*border-right:2px solid #000;*/
}



.login-card{
  /*border: 1px solid black;*/
  background-color: white;
  text-align: center;
  align-items: center;
  /*width: 560px;*/
  width: 85%;
  height: 100%;
  margin-left: 15%;
}


  .login-card h3{
    color: gray;
    font-size: 16px;
    margin-bottom: 10%

  }

  .login-card input{
    width: 92%;
    height: 25%;
    padding: 2%;
    border-width: thin;
  }

  .login-button{
  background-color: #82B440;
  border-radius: 4px;
  color: white;
  border: none;
  font-size: 18px;

}

.login-button:hover{
  background-color: #5f842e;
}


.line-header{
      text-align: center;
    width: 100% !important;
    margin-bottom: 30px;
    z-index: 1;
    margin-bottom: 30px;
}



  .wrapper-social-login .inner-social {
    clear: both;
    overflow: hidden;
    margin-left: -15px;
    margin-right: -15px;
  }
  .wrapper-social-login .inner-social > div {
    width: 50%;
    float: left;
    padding-left: 15px;
    padding-right: 15px;
    margin-bottom: -145px;
  }

  .rtl .wrapper-social-login .inner-social > div {
    float: right;
  }
  .wrapper-social-login a {
    display: inline-block;
    width: 100%;
    text-align: center;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    background: #262626;
    color: #fff;
    padding: 8px;
    text-decoration: none;
    position: relative;
  }
  .wrapper-social-login a i {
    position: absolute;
    top: 13px;
    left: 20px;
  }
  .rtl .wrapper-social-login a i {
    right: 20px;
    left: auto;
  }
  .wrapper-social-login .linkedin-login-btn {
    background: #0077B5;
  }
  .wrapper-social-login .google-login-btn {
    background: #dc4d28;
  }
  .wrapper-social-login .facebook-login-btn {
    background: #3b5998;
  }
  .wrapper-social-login .twitter-login-btn {
    background: #55acee;
  }


  .login-card2{
  /*border: 1px solid black;*/
  background-color: white;
  text-align: center;
  align-items: center;
  width: 85%;
  height: 100%;
  /*float: left;*/
  margin-right: 23px;
}


  .login-card2 h3{
    color: gray;
    font-size: 16px;
    margin-bottom: 5%;
  }

  .login-card2 input{
    width: 92%;
    height: 25%;
    padding: 2%;
    border-width: thin;
  }


form .role-tabs {
    padding: 0;
    margin: 0;
    text-align: center;
    width: 100%;
    clear: both;
    overflow: hidden;
}

form .role-tabs li {
    display: block;
    text-align: center;
    float: left;
    cursor: pointer;
    /*width: calc(50% - 30px);*/
    width: 44%;
    margin-left: 3.9%;
    margin-bottom: 5%;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border: 1px solid #82b440;
    color: #82b440;
    background: #fff;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
    padding: 14px;
}


.role-tabs label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
}


  form .role-tabs li input {
    display: none;
}
input[type="radio"], input[type="checkbox"] {
    margin: 4px 0 0;
    margin-top: 1px 9px;
    line-height: normal;
}
input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0;
    background-color: red;
}

form .role-tabs li label {
    cursor: pointer;
    font-weight: 400;
    margin: 0;
    width: 100%;
}

  
form .role-tabs li.active {
    background: #82b440;
    color: #fff;
}

#myCname { 
  min-height: auto; display: none;
  }

#myCName #c-name {
  width: 92%;
  height: 25%;
  padding: 2%;
}


form .form-group {
    margin-bottom: 20px;
    min-height: auto;
    height: auto;
    margin-left: 2.5%;
}

.form-group label{
  /*background-color: red;*/
      display: inline-block;
      float: left;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input[type="checkbox"]{
  background-color: red;
  width: auto;
  height: auto;
}

.form-group a{
  color: black;
}

.form-group a:hover{
  color: #82B440;
  text-decoration: none;
}

.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    font-family: "Nunito";
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    letter-spacing: 0;
    /* padding: 12px 30px; */
    font-size: 16px;
    line-height: 1.71;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}

.btn {
    color: #fff;
    background-color: #262626;
    border-color: #191919;
}

.btn:hover {
    color: #fff;
    background-color: #262626;
    border-color: #191919;
}

#li2 span{
  font-size: 15px;
  color: black;
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

       .wrapper{
    padding: 20px;
  }
     #one { 
      float: none;
      margin-right:0;
      width:auto;
      border:0;
      padding: 0px;    
    }

    .login-card{
      width: 100%;
      margin: 0px;
      /*padding: 10px;*/
    }

    #two { 
      float: none;
      margin-right:0;
      margin-top: 10%;
      width:auto;
      border:0;
      padding: 0px;    
    }

    .login-card2{
      width: 100%;
    }

    }















    @media only screen and (max-width: 600px) {

      .login-bar{
      background-color: #F0F0F0;
      width: 100%;
      height: 50%;
      align-items: center;
      display: inline-block;
      color: black;
    }

    .login-bar h2{
      /*padding: 40px 100px;*/
      margin-top: 8rem;
      margin-left: 1.5rem;
      font-size: 20px;
      text-align: left;
      padding: 0px; 
    }

    .login-bar ol{
      display : inline-flex;
      text-align: left;
      margin: 0px;
      padding: 0px;
      margin-top: 1rem;
      margin-left: 1.5rem;
      margin-bottom: 2rem;
      list-style-type: none;
    }

    
   /* .login-bar li a{
      text-decoration: none;
      color: black;
      font-size: 15px;
    }*/

      .topnav{
        position: fixed;
        width: 100%;
        top: 0px;
        background-color: #333;

      }
      .topnav.responsive {position: relative;}
      
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
        border-width: thin;
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

    .bg-img.responsive{
        background-image: url("categories1.jpg");
        /*position: relative;*/
        margin-top: -250px;
        background: transparent;
        margin-bottom: 0px;
        width: 0px;
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

    .popular-job-categories-flex{
      display: inline;
    }

    .popular-job-categories-flex img:hover {
      display: none;
      } 

       .popular-job-categories.responsive{
      margin-top: -16%;
     }


    .categories-button:hover {
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

    .cities-flex{
      display: inline;
    }

      .cities-flex div {
    flex:1;
    margin: auto;
    /*margin:5px;  need some space */
    text-align: center;
    padding: 15px;
    }

    .footer{
      height: 100%;
    }

    .footer-flex{
      display: inline;
    }

    .footer-flex h4{
      padding-top: 8%;
      padding-left: 12%;
      font-size: 28px;
      text-align: left;
      margin: auto;
    }

    .footer-newletter p{
        margin-left: 12%; 
        color: #9E9E9E;
        width: 80%;
        font-size: 16px;
        padding-top: 1%;
      }

    .footer-job-by{
      display: none;
    }

    .email-text{
        background-color: black;
        color:white; 
        padding: 5px;
        border-radius: 4px;
        margin-left: 12%;
        height: 40px;
        width: 65%; 
    }

      .email-send-btn{
      background-color: #78AB46;
      height: 40px; 
      width: 44px;
       border-radius: 4px;
    }

    .footer-bottom-flex{
      display: inline;
    }
    
    .footer-bottom-flex .footer-bottom-img{
      border-top: 1px solid gray;
    }


    .footer-bottom-flex #follow-us{
      text-align: left;
      padding-left: 12%;
    }

    .social-media-icon ul{
      text-align: center;
      /*background-color: red;*/
      margin-left: 20%;
    }

    .social-media-icon a:hover{
      display: none;
    }

    #copyright{
      margin: auto;
      padding: 0px;
      padding-bottom: 5%;
      text-align: center;
    }

    #top-up-button {
      margin: 30px;
    }

    #top-up-button::after {
        content: url("top-up-rocket-icon.png");
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        color: #fff;
        margin-left: 120%;
      }

      .wrapper-social-login a {
      display: inline-block;
      width: 100%;
      text-align: center;
      border-radius: 4px;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      -ms-border-radius: 4px;
      -o-border-radius: 4px;
      background: #262626;
      color: #fff;
      padding: 8px;
      text-decoration: none;
      position: static;
      }

      
      .wrapper-social-login a i {
        display: none;
        top: 13px;
        left: 20px;
      }

  }





















  @media (min-width:600px) and (max-width: 900px) and (orientation: landscape) {
  .topnav {
  overflow: hidden;
  background-color: #333;
  width: 120%;
}

.topnav a {
      margin: 0%;
    padding-top: 3%;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.careerup-logo{
  width: 25%;
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
    width: 120%;
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
      width: 120%;
      /*margin: -15px;*/
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

    .how-it-work-header{
      text-align: center;
      font-weight: bold;
      font-size: 28px;
      padding: 20px;
    }

    .how-it-work{
      width: 120%;
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

  .cities{
    background-color: #F0F0F0;
    width: 120%;
  }

    .cities-flex {
    display:flex;
    }

  .cities-flex div {
    flex:1;
    margin:5px; /* need some space ?*/
    text-align: center;
    padding: 30px;
    }

  .cities-flex img {
    width:50%;
    } 

    .cities-flex figcaption{
      font-size: 18px;
  }


  .footer{
      background-color: #333;
      width: 120%; 
      /*height: 590px;*/
      height: 100%;

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

    .footer-content a{
      text-decoration: none;
    }

    .footer a{
      color: gray;
    }

    .footer-newletter p{
        margin-left: 50px; 
        color: white;
        width: 280px;
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
    width: 44px;
     border-radius: 4px;
  }

  .footer-flex {
  display:flex;
  }
.footer-flex div {
  flex:1;
  /*margin:5px;  need some space ?*/
  }

  .footer-bottom-flex {
  display:flex;
  border-top: 1px solid gray;
  }
.footer-bottom-flex div {
  flex:1;
  /*margin:5px;  need some space ?*/
  }



  .footer-bottom-img{
    padding-left: 20px;
    padding-top: 10px;
  }

  .footer-bottom-flex #follow-us{
    color: white;
    font-size: 18px;
    text-align: center;
    padding-top: 30px;
  }
  .social-media-icon a {
        width: 30px;
        height: 30px;
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
        /*padding: 10px;*/
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

        #copyright{
          color: white;
          font-size: 14px;
          text-align: center;
          padding-top: 30px;
          padding-right: 25px;
        }


      #top-up-button {
        display: inline-block;
        /*background-color: #FF9800;*/
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        visibility: hidden;
      }

      #top-up-button::after {
        content: url("top-up-rocket-icon.png");
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        /*color: #fff;*/
        color: green;
      }
      
      #top-up-button:hover {
        cursor: pointer;
      }
      
      #top-up-button:active {
        /*background-color: #555;*/
      }
      
      #top-up-button.show {
        opacity: 1;
        visibility: visible;
      }

      .login-bar{
        background-color: #F0F0F0;
        width: 120%;
        display: flex;
        align-items: center;
        color: black;
      }

      .login-bar h2{
        padding: 40px 100px;
        margin: 0px;
        font-size: 23px; 
      }

      .login-bar ol{
        margin: 0px;
        padding: 0px;
        margin-left: 30%;
        list-style-type: none;
        text-align: right;
        display: inline-flex;
      }

      .login-body{
        width: 120%;
      }

      #two{
        width: 50%;
      }

      .login-card{
        width: 90%;
        margin-left: 5%;
      }

      .login-card2{
        width: 90%;
        margin-left: 5%;
      }

}









/*For iPads*/
  
  @media (min-width:700px) and (max-width: 1200px) and (orientation: portrait) {
  
  .topnav {
  overflow: hidden;
  background-color: #333;
  /*background-color: red;*/
  width: 155%;
}

.topnav a {
  margin: 2%;
    margin-left: 2%;
    font-size: 26px;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.careerup-logo{
  width: 25%;
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


  .footer{
      background-color: #333;
      width: 155%; 
      /*height: 590px;*/
      height: 100%;

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

    .footer-content a{
      text-decoration: none;
    }

    .footer a{
      color: gray;
    }

    .footer-newletter p{
        margin-left: 50px; 
        color: white;
        width: 280px;
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
    width: 44px;
     border-radius: 4px;
  }

  .footer-flex {
  display:flex;
  }
.footer-flex div {
  flex:1;
  /*margin:5px;  need some space ?*/
  }

  .footer-bottom-flex {
  display:flex;
  border-top: 1px solid gray;
  }
.footer-bottom-flex div {
  flex:1;
  /*margin:5px;  need some space ?*/
  }



  .footer-bottom-img{
    padding-left: 20px;
    padding-top: 10px;
  }

  .footer-bottom-flex #follow-us{
    color: white;
    font-size: 18px;
    text-align: center;
    padding-top: 30px;
  }
  .social-media-icon a {
        width: 30px;
        height: 30px;
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
        /*padding: 10px;*/
      }

          .social-media-icon li{
        display: inline-block;
        margin-top: 10px;
        margin-right: 10px;
    }

        .social-media-icon a:hover{
          color: #707070;
        background: #353535;
        }

        #copyright{
          color: white;
          font-size: 14px;
          text-align: center;
          padding-top: 30px;
          padding-right: 25px;
        }


      #top-up-button {
        display: inline-block;
        /*background-color: #FF9800;*/
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        visibility: hidden;
      }

      #top-up-button::after {
        content: url("top-up-rocket-icon.png");
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        /*color: #fff;*/
        color: green;
      }
      
      #top-up-button:hover {
        cursor: pointer;
      }
      
      #top-up-button:active {
        /*background-color: #555;*/
      }
      
      #top-up-button.show {
        opacity: 1;
        visibility: visible;
      }

       .card {
      background-color: white;
      border-radius: 14px;
      /*padding: 1rem 2rem;*/
      /*min-width: 250px;*/
      /*max-width: 630px;*/
      box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.2), 0 16px 20px 0 rgba(0, 0, 0, 0.19);
      /*width: 150%;*/
      width: auto;
      transition: all 0.6s;
      /*margin: 2.5rem 1rem;*/
      }

      .cards{
        margin-left: 30%;
        width: 140%;
      }

      .search-block{
        margin-left: 30%;
        width: 120%;
      }

        .login-bar{
      background-color: #F0F0F0;
      width: 155%;
      display: flex;
      align-items: center;
      color: black;
    }

    .login-bar h2{
      padding: 40px 100px;
      margin: 0px;
      font-size: 26px; 
    }

    .login-bar ol{
      list-style-type: none;
      margin-left: 45%;
      text-align: right;
      display: inline-flex;
    }

    .login-bar li a{
      text-decoration: none;
      color: black;
      font-size: 15px;
    }

    .login-body{
      width: 155%;
      height: 965px;
    }

    #two {
    float:left;
    width: 50%;
    padding: 100px 20px;
    margin-top: 5%;
  }

  .footer-bottom-flex{
      height: 85px;
  }
}










/*For iPads*/
  
  @media (min-width:700px) and (max-width: 1200px) and (orientation: landscape) {
  
  .topnav {
  overflow: hidden;
  background-color: #333;
  width: 155%;
}

.topnav a {
  margin: 2%;
    margin-left: 1.5%;
    font-size: 26px;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.careerup-logo{
  width: 25%;
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


  .footer{
      background-color: #333;
      width: 155%; 
      /*height: 590px;*/
      height: 100%;

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

    .footer-content a{
      text-decoration: none;
    }

    .footer a{
      color: gray;
    }

    .footer-newletter p{
        margin-left: 50px; 
        color: white;
        width: 280px;
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
    width: 44px;
     border-radius: 4px;
  }

  .footer-flex {
  display:flex;
  }
.footer-flex div {
  flex:1;
  /*margin:5px;  need some space ?*/
  }

  .footer-bottom-flex {
  display:flex;
  border-top: 1px solid gray;
  }
.footer-bottom-flex div {
  flex:1;
  /*margin:5px;  need some space ?*/
  }



  .footer-bottom-img{
    padding-left: 20px;
    padding-top: 10px;
  }

  .footer-bottom-flex #follow-us{
    color: white;
    font-size: 18px;
    text-align: center;
    padding-top: 30px;
  }
  .social-media-icon a {
        width: 30px;
        height: 30px;
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
        /*padding: 10px;*/
      }

          .social-media-icon li{
        display: inline-block;
        margin-top: 10px;
        margin-right: 10px;
    }

        .social-media-icon a:hover{
          color: #707070;
        background: #353535;
        }

        #copyright{
          color: white;
          font-size: 14px;
          text-align: center;
          padding-top: 30px;
          padding-right: 25px;
        }


      #top-up-button {
        display: inline-block;
        /*background-color: #FF9800;*/
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        visibility: hidden;
      }

      #top-up-button::after {
        content: url("top-up-rocket-icon.png");
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        /*color: #fff;*/
        color: green;
      }
      
      #top-up-button:hover {
        cursor: pointer;
      }
      
      #top-up-button:active {
        /*background-color: #555;*/
      }
      
      #top-up-button.show {
        opacity: 1;
        visibility: visible;
      }

       .card {
      background-color: white;
      border-radius: 14px;
      /*padding: 1rem 2rem;*/
      /*min-width: 250px;*/
      /*max-width: 630px;*/
      box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.2), 0 16px 20px 0 rgba(0, 0, 0, 0.19);
      /*width: 150%;*/
      width: auto;
      transition: all 0.6s;
      /*margin: 2.5rem 1rem;*/
      }

      .cards{
        margin-left: 30%;
        width: 140%;
      }

      .search-block{
        margin-left: 30%;
        width: 120%;
      }

        .login-bar{
      background-color: #F0F0F0;
      width: 155%;
      display: flex;
      align-items: center;
      color: black;
    }

    .login-bar h2{
      padding: 40px 100px;
      margin: 0px;
      font-size: 26px; 
    }

    .login-bar ol{
      list-style-type: none;
      margin-left: 45%;
      text-align: right;
      display: inline-flex;
    }

    .login-bar li a{
      text-decoration: none;
      color: black;
      font-size: 15px;
    }

    .login-body{
      width: 155%;
      height: 965px;
    }

    #two {
    float:left;
    width: 50%;
    padding: 100px 20px;
    margin-top: 5%;
  }

  .footer-bottom-flex{
      height: 85px;
  }
}








/* iPad Pro*/
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: portrait ) {
    

    .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 25px;
    margin-left: 5%;
    padding-top: 1.8%;
}
    .login-bar{
      height: 200px;
    }

    .login-bar h2{
      font-size: 42px;
    }

    .login-bar li a {
      text-decoration: none;
      color: black;
      font-size: 32px;
    }

    #li2 span{
      font-size: 32px;
    }

    #li2 i{
      font-size: 28px;
    }

    .login-body{
      /*background-color: red;*/
      height: 150%;
    }

    .wrapper{
      height: 1335px;
    }


     .footer h4{
      float: center;
      margin-left: 50px;
      margin-top: 50px;
      font-size: 28px;
      color:white;
    }

    .footer-content{
      padding-left: 50px;
      font-size: 20px;
      line-height: 1.8;
    }

    .footer-content a{
      text-decoration: none;
    }

    .footer a{
      color: gray;
    }

    .footer-newletter p{
        margin-left: 50px; 
        color: white;
        width: 280px;
        font-size: 20px;
      }

      .footer-bottom-flex #follow-us{
    color: white;
    font-size: 26px;
    text-align: center;
    padding-top: 30px;
  }
  .social-media-icon a {
        width: 30px;
        height: 30px;
        line-height: 40px;
        font-size: 16px;
        text-align: center;
        display: inline-block;
        color: #707070;
        background: #353535;
        border-radius: 4px;
      }

      .social-media-icon ul{
        display: inline-block;
        padding: 15px;
        margin-left: 9%;
      }

          .social-media-icon li{
        display: inline-block;
        margin-top: 10px;
        margin-right: 10px;
    }

        .social-media-icon a:hover{
          color: #707070;
        background: #353535;
        }

        #copyright{
          color: white;
          font-size: 22px;
          text-align: center;
          padding-top: 30px;
          padding-right: 25px;
        }
}







</style>
<body>
  <a id="top-up-button"></a>
  <div class="topnav" id="myTopnav" >
    <img class="careerup-logo" src="careerup-logo.png" onclick=" location.href='index-careerup.php' ">
         <a href="categories-page.php" id="topnav-1">Categories</a>
        <a href="cities-page.php">Cities</a>
        <a href="#myFooter">About Us</a>
        <a href="#"><i class="fa fa-bell"></i></a>
        <a href="login-page.php">
          <button type="button" class="button btn-login"><div class="login-text">Login/Register</div></button>
        </a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
  </div> 

  
<div class="login-bar">
    <h2> Filter </h2>
    <ol>
      <li><a href="index-careerup.php"> Home </a></li>
      <li id="li2">
        <i class="fa fa-caret-right" style="padding: 0px 8px;"></i><span> Filter </span>
      </li>
    </ol>
  </div>

<div class="filter-body">
<div class="container box">
   <h3 text-align="center">Custom Search in jQuery Datatables using PHP Ajax</h3>
   <br />
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <div class="form-group">
      <select name="filter_gender" id="filter_gender" class="form-control" required>
       <option value="">Select Duration </option>
       <option value="6months">6months</option>
       <option value="12months">12months</option>
      </select>
     </div>
     <div class="form-group">
      <select name="filter_country" id="filter_country" class="form-control" required>
       <option value="">Select Location</option>
       <?php echo $country; ?>
      </select>
     </div>
     <div class="form-group" text-align="center">
      <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
     </div>
    </div>
    <div class="col-md-4"></div>
   </div>
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th width="20%">Company Name</th>
       <th width="10%">Duration</th>
       <th width="25%">Salary</th>
       <th width="15%">Rating</th>
       <th width="15%">Position</th>
       <th width="15%">Location</th>
      </tr>
     </thead>
    </table>
    <br />
    <br />
    <br />
   </div>
  </div>
</div>
  
  
<div class="footer" id="myFooter">
<div class="footer-flex">
  

    <a href="#" style="text-decoration: none;">
    <div class="footer-job-by">
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

  <div class="footer-job-by">
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
  
  <div class="footer-job-by">
      <h4 style=" "> About CareerUp </h4>
          
          <div class="footer-content">
            <a href="#">About Us</a><br>
            <a href="#">Our Servies</a><br>
            <a href="#">Terms & Conditions</a><br>
            <a href="#">Contact Us</a><br>
          </div> 
  </div>

  <div>
     <div class="footer-newletter">
            <h4> Newsletter </h4>
            <p >Subscribe to CareerUp Pacific newsletter to get
              the latest jobs posted,candidates,and other latest news stay updated.</p>
            <form action="..." style="padding-bottom: 20px;">
              <input class="email-text" type="email" placeholder="Enter your email address" name="emails">
              <button class="email-send-btn"><i class="fa fa-paper-plane" style="font-size: 18px;color: white"></i></button>
            </form>
          </div>
  </div>

</div>

<div class="footer-bottom-flex">

      <div class="border-line">
       <div class="footer-bottom-img">
              <img src="careerup-logo.png">  
        </div>
      </div>
          <p id="follow-us"> Follow Us</p>  

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
            
            <p id="copyright" > <span>&#169;</span> 2020 CareerUp. All Rights Reserved. </p>  
</div>
</div>



  <script>

    function myFunction() {
     var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
         $('html, body').animate({scrollTop:0}, '300');
       
      } else {
        x.className = "topnav";
        
      }
    }

function myFunction() {
     var x = document.getElementById("myTopnav");

      if (x.className === "topnav") {
        x.className += " responsive";
         $('html, body').animate({scrollTop:0}, '300');
        
      } else {
        x.className = "topnav";

      }
    }



  $(function() {
  $("body").click(function(e) {
    if (e.target.id == "mySidebar" || $(e.target).parents("#mySidebar").length) {
        
    } else {
          $('.container').click(function(e) {
          if ($('.sidebar').hasClass('responsive')) {
            $(".sidebar").toggleClass('responsive')
            document.getElementById("myForm").reset();
          }
          if ($('.filter').hasClass('responsive')) {
            $(".filter").toggleClass('responsive')
          }
        })
    }
  });
})


    var btn = $('#top-up-button');

    $(window).scroll(function() {
    if ($(window).scrollTop() > 200) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
    });

    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });



  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
    
    if ($('.topnav').hasClass('responsive')) {
            $(".topnav").toggleClass('responsive')
          }
    if ($('.bg-img').hasClass('responsive')) {
            $(".bg-img").toggleClass('responsive')
          }
    });

     $(document).ready(function() {
    $('li').click(function() {
        $('li').removeClass('active');
        $(this).addClass('active');
    });
    });

    function yesnoCheck() {
    if (document.getElementById('employer').checked) {
        document.getElementById('myCname').style.display = 'initial';
        document.getElementById('c-name').style.marginBottom = "3%";
    }
    else 
    {
      document.getElementById('myCname').style.display = 'none';
    }
  }




  $(document).ready(function(){
  
  fill_datatable();
  
  function fill_datatable(filter_gender = '', filter_country = '')
  {
   var dataTable = $('#customer_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "searching" : false,
    "ajax" : {
     url:"fetch.php",
     type:"POST",
     data:{
      filter_gender:filter_gender, filter_country:filter_country
     }
    }
   });
  }
  
  $('#filter').click(function(){
   var filter_gender = $('#filter_gender').val();
   var filter_country = $('#filter_country').val();
   if(filter_gender != '' && filter_country != '')
   {
    $('#customer_data').DataTable().destroy();
    fill_datatable(filter_gender, filter_country);
   }
   else
   {
    alert('Select Both filter option');
    $('#customer_data').DataTable().destroy();
    fill_datatable();
   }
  });
  
  
 });

  </script>

</body>


</html>