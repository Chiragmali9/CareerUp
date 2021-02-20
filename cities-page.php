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

    .filter-sidebar{
      /*height: auto;*/
      height: 1100px;
    }
  .footer{
          background-color: #333; 
          height: 380px;
          bottom: 0;
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


      .sidebar {
        margin: 0;
        padding: 0;
        width: 300px;
        /*background-color: #f1f1f1;*/
        position: absolute;
        height: auto;
        overflow: hidden;
      }

      .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
      }
       
      .sidebar a.active {
        background-color: #4CAF50;
        color: white;
      }

      .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
      }

      div.content {
        margin-left: 300px;
        padding: 1px 16px;
        height: 1000px;
      }

      .sidebar .sidebar-bar {
        display: none;
      }


      .main{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 3rem;
    margin-left: 8%;
}

    .filter{
        background: #333;
        height: 390px;
        width: 265px;    
        border-radius: 17px 17px 14px 14px;
    }
    /*.mt-1{
        margin-top: 3rem;
    }*/
    /*.mb-3{
        margin-bottom: 3rem;
    }*/
    .title{
        text-align: center;
        padding: 10px;
        color: white;
    }
    .title h3{
        font-weight: lighter;
        color: white;
    }
    .filter-item{
        background: #333
        height: 110%;
        color: white;
    }

    input[type=text]{
        border: none;
        outline: none;
        line-height: 1.2;
        border-bottom: 1px solid lightgray;
        color: var(--white-text);
        background-color: inherit;
        padding-bottom: .5rem;
        width: 90%;
    }

    .items{
        padding: 0 20px;
        padding-top: 1rem;
        margin: 0 auto;
        
    }
    
    .list {
    padding-top: 40px;
    width: 530px;
    margin-left: 20rem;
  }
    .search-btn {
    background: #333;
    border-radius: 32px;
    outline: none;
    font-size: 0.9rem;
    color: var(--white-text);
    letter-spacing: 0.2px;
    margin-left: 0.7rem;
    padding: 0.7rem 1rem;
    border: none;
    height: 35px;
    font-size: 12px;
    cursor: pointer;
  }

  .search-box {
    border: 1px solid #d6d6d6;
    box-sizing: border-box;
    border-radius: 2px;
    padding: 0.7rem 1.2rem;
    font-size: 12px;
    width: 344px;
    height: 35px;
    margin-left: 1rem;
  }

  .card {
      background-color: white;
      border-radius: 14px;
      padding: 1rem 2rem;
      /*min-width: 250px;*/
      /*max-width: 630px;*/
      box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.2), 0 16px 20px 0 rgba(0, 0, 0, 0.19);
      width: 100%;
      transition: all 0.6s;
      margin: 2.5rem 1rem;
      z-index: 2;
      }


    .card-title {
      font-size: 24px;
      line-height: 22px;
      color: green  ;
    }
    .card-logo {
      width: 80px;
      height: 80px;
      /*background: #ffffff;*/
      box-shadow: 1px 4px 13px rgba(118, 123, 244, 0.25);
      border-radius: 6px;
      position: relative;
      top: auto;
    }

    .card-company {
      font-size: 18px;
      line-height: 0px;
      color: black;
    }
    .three-rows {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .location {
      margin-top: 1rem;
    }
    .small {
      font-size: 14px;
      line-height: 10px;
      color: black;
    }
    .big {
      font-size: 15px;
      line-height: 18px;
      color: black;
    }
    .card-btn {
      background: #333;
      border-radius: 4px;
      border: 0.3px solid gray;
      color: #C0C0C0;
      width: 150px;
      font-size: 14px;
      line-height: 15px;
      padding: 0.8rem;
      margin-top: 0.7rem;
      cursor: pointer;
      transition: all 0.5s;
    }

    .card-btn:hover{
      border: 0.3px solid white;
      color: white;
    }

    .load-btn {
      width: 201.41px;
      height: 46px;
      background: #333;
      border-radius: 32px;
      border: none;
      color: #C0C0C0;
      font-size: 20px;
      cursor: pointer;
      display: block;
      text-align: center;
      margin: 0 auto;
      margin-bottom: 2rem;
    }

    .container{
      display: flex;
      height: 100%;
    }

    .filter-btn-div
    {
      padding: 20px;
      text-align: center;
    }


    .cards{
      width: 120%;
    }

    #close{
      display: none;
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

       .sidebar{
        background: transparent;
        width: 0px;
      }

    .sidebar a {display: none;}

   .sidebar-bar {
      position: fixed;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      background-color: gray;
      width: 0.1%;
      height: 0.1%;
      background-image: url("filter new.png");
      }

      .sidebar a.sidebar-bar {

      display: block;
      text-align: center;
      padding: 16px;
      transition: all 0.3s ease;
      color: black;
      font-size: 20px;
      }

      #sidebar-btn{
        background: transparent;
        border: 0px;
        left: 0px;
      }

      .sidebar-bar-bar a:hover {
      background-color: #000;
      }
      div.content {
      margin-left: 0px;
      padding: 0px;
      height: 1000px;
      }



      .filter{
        /*display: none;*/
        background: transparent;
        /*width: 0px;*/
        /*opacity: 0.1;*/
      }

      .sidebar input[type=text] {
        /*background-color: red;*/
        display: none;
      }

    
      .filter.responsive .title h3{
        display: inline;
        margin-left: -50px;
      }

      .filter.responsive .items p{
        display: inherit;
      }

      .filter.responsive .btn-login{
          display: inline;
      }

      .filter.responsive .filter-btn{
        margin-left: -10%;
      }

      #close{
        display: inline-block;
        width: 14%;
        height: 90%;
        color: white;
        font-size: 20px;
        float: right;
        padding-left: 5%;
      }

    }




    @media only screen and (max-width: 600px) {
      .filter.responsive input{
          border: none;
          background-color: yellow;
        outline: none;
        line-height: 1.2;
        border-bottom: 1px solid lightgray;
        color: var(--white-text);
        background-color: inherit;
        padding-bottom: .5rem;
      }
      .topnav{
        position: fixed;
        width: 100%;
        top: 0px;
        background-color: #333;
      }
      .topnav.responsive {position: relative;}
      
      .filter-sidebar.responsive{
        /*margin-top: -15%;*/
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
        border-width: thin;
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

     .sidebar.responsive {
    /*background-color: green;
    background-color: #333;
    margin-top: 4rem;
    position: fixed;
    overflow: auto;
    height: 300px;*/
    display: inline;
    height: auto;
    margin-top: 8rem;
    position: fixed;
     background: #333;
        height: 390px;
        width: 265px;    
        border-radius: 17px 17px 14px 14px;
  }
  .sidebar.responsive .sidebar-bar {
    position: absolute;
    right: 0;
    top: 0;
    display: none;
  }
  
  .sidebar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

  .sidebar.responsive.filter.title{
        text-align: center;
        padding: 10px;
        color: white;
    }


    .sidebar.responsive.main{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 3rem;
} 
    .sidebar.responsive .title{
        text-align: center;
        padding: 10px;
        color: white;
    }
    .filter.responsive.filter.responsive.title h3{
        font-weight: lighter;
        color: white;
    }
    .sidebar.responsive.filter-item{
        background: #333
        height: 110%;
        color: white;
    }

     .sidebar.responsive input[type=text]{
        border: none;
        outline: none;
        line-height: 1.2;
        border-bottom: 1px solid lightgray;
        color: var(--white-text);
        background-color: inherit;
        padding-bottom: .5rem;
        display: inline;
        width: 80%;

    }

     .sidebar.responsive.items{
        padding: 0 20px;
        padding-top: 1rem;
        margin: 0 auto;
        
    }

     .title h3{
        display: none;
      }

      .items p{
        /*background-color: red;*/
        display: none;
      }


      .list {
        padding-top: 40px;
        width: 100%;
        margin: 0px;
      }

       .search-btn {
        background: #333;
        border-radius: 32px;
        outline: none;
        font-size: 0.9rem;
        color: var(--white-text);
        letter-spacing: 0.2px;
        margin-left: 0.7rem;
        padding: 0.7rem 1rem;
        height: 35px;
        font-size: 10px;
        border: none;
        cursor: pointer;
      }

      .search-box {
        border: 1px solid #d6d6d6;
        box-sizing: border-box;
        border-radius: 2px;
        padding: 0.7rem 1.2rem;
        font-size: 1rem;
        width: 70%;
        height: 35px;
        margin-left: 1rem;
        margin-top: 10%;
      }

      .cards{
        width: auto;
      }
      .card{
        width: auto;
      }

      .card-logo{
        display: none;
      }

    }















  @media (min-width:600px) and (max-width: 1200px) {
  .topnav {
  overflow: hidden;
  background-color: #333;
  width: 155%;
}

.topnav a {
  margin: 2%;
  margin-left: 2%;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.careerup-logo{
      width: 21%;
    float: left;
    padding-top: 3%;
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
  margin-left: 3%;
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
    font-size: 22px;
    text-align: center;
    padding-top: 30px;
  }
  .social-media-icon a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 20px;
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
          font-size: 18px;
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


      .login-text{
        font-size: 19px;
      }


}


  /*For iPads*/
  
  @media (min-width:700px) and (max-width: 1200px) and (orientation: landscape) {
  
  .topnav {
  overflow: hidden;
  background-color: #333;
  /*background-color: red;*/
  width: 155%;
}

.topnav a {
      margin: 2%;
    /* margin-left: 3%; */
    font-size: 25px;
    padding-left: 1%;
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
    font-size: 22px;
    text-align: center;
    padding-top: 30px;
  }
  .social-media-icon a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 20px;
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
          font-size: 18px;
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



}



/* iPad Pro*/
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: portrait){
    
    .topnav {
      overflow: hidden;
      background-color: #333;
      /* background-color: red; */
      width: 155%;
    }

    .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 28px;
    margin-left: 3%;
    padding-top: 1.8%;
    }
    
    .login-text{
      font-size: 28px;
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

    .sidebar{
      /*background-color: green;*/
      width: 55%;
      height: 50%;
    }
    .filter {
    background: #333;
    /*height: 390px;*/
    height: 100%;
    /*width: 265px;*/
    width: 170%;
    margin-top: 25%;
    margin-right: 25%;
    border-radius: 17px 17px 14px 14px;
    }

      .title h3{
    text-align: center;
    padding: 10px;
    color: white;
    font-size: 40px;
    }

    .items p{
    padding: 0 20px;
    padding-top: 1rem;
    margin: auto;
    font-size: 28px;
    }

    input[type=text] {
    border: none;
    outline: none;
    line-height: 1.2;
    border-bottom: 1px solid lightgray;
    color: var(--white-text);
    background-color: inherit;
    padding-bottom: .5rem;
    width: 90%;
    height: auto;
    margin-left: 5%;
    }

    .filter-btn {
    /*margin-left: 5rem;*/
    }

    
    .filter-sidebar {
      height: 1527px;
      width: 155%;
    }

    .container{
      width: 155%;
      margin: 0px;
      /*background-color: yellow;*/
      margin-left: 18%;
    }

    .search-block {
    margin-left: 30%;
    width: 120%;
    margin-top: 10%;
    }

    .search-box{
      width: 60%;
      height: 50px;
    }

    .search-btn{
      width: 25%;
      height: 8%;
      font-size: 22px;
    }

    .card-title{
      font-size: 38px;
    }

    .card-company{
      font-size: 38px;
      padding-top: 5%;
    }

    .three-rows {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 5%;
  }

    .small{
      font-size: 28px;
      line-height: 10px;
    color: black;
    }

    .big {
      font-size: 24px;
      line-height: 18px;
      color: black;
      margin-top: 3%;
    }

      .card-logo {
    width: 90px;
    height: 80px;
    /* background: #ffffff; */
    box-shadow: 1px 4px 13px rgba(118, 123, 244, 0.25);
    border-radius: 6px;
    position: relative;
    top: auto;
    }

    .card-btn {
      background: #333;
      border-radius: 8px;
      border: 0.3px solid gray;
      color: #C0C0C0;
      width: 40%;
      height: 50px;
      font-size: 24px;
      line-height: 15px;
      padding: 0.8rem;
      margin-top: 0.7rem;
      cursor: pointer;
      transition: all 0.5s;
    }

    .load-btn {
      width: 30%;
      height: 46px;
      background: #333;
      border-radius: 32px;
      border: none;
      color: #C0C0C0;
      font-size: 22px;
      cursor: pointer;
      display: block;
      text-align: center;
      margin: 0 auto;
      margin-bottom: 2rem;
    }

    .footer {
    background-color: #333;
    width: 155%;
    /* height: 590px; */
    height: 100%;
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
        font-size: 16px;
      }

        .footer-bottom-flex #follow-us{
    color: white;
    font-size: 20px;
    text-align: center;
    padding-top: 30px;
  }
  .social-media-icon a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 20px;
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
          font-size: 18px;
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
        <a href="cities-page.html">Cities</a>
        <a href="#myFooter">About Us</a>
        <a href="#"><i class="fa fa-bell"></i></a>
        <a href="login-page.php">
          <button type="button" class="button btn-login"><div class="login-text">Login/Register</div></button>
        </a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
  </div> 

  

  <div class="filter-sidebar" id="myFilter">
      <div class="sidebar" id="mySidebar">
      <div class="main mt-1" >
      <section class="mb-3">
        <div class="filter" id="myResponsiveFilter">
          <div style="height: 10%;margin-right: 10%;">
            <span id="close"> x </span>
          </div>
          
          <div class="title">
            <h3>Filter by</h3>
          </div>
          <form id="myForm">
          <div class="filter-item">
            <div class="items">
              <p>Location</p>
              <input type="text" id="filterloc"  placeholder="choose your location" / >
            </div>
            <div class="items">
              <p>Duration</p>
              <input type="text" id="filterdur" placeholder="seclect the duration" />
            </div>
            <div class="items">
              <p>Salary</p>
              <input type="text" id="filtersal" placeholder="seclect the Salary" />
            </div>
          </div></form>
          <div class="filter-btn-div">
            <button type="button" class="button btn-login filter-btn" name="filter" id="filter" onclick="myFilterButton()">
              <div class="login-text">
                Filter
                <i class='fa fa-arrow-right'></i>
              </div>
            </button>
          </div>
        
    
        </div>
      </section>
    </div>
      <a href="javascript:void(0);" class="sidebar-bar" onclick="myFunction2()"><button id="sidebar-btn" ><img></button></a>
      </a>
    </div>

    <div class="container">
    <section class="list">
        <div class="search-block">
          <input
            class="search-box"
            type="search"
            placeholder="Enter job title to find results"
          />
          <button class="search-btn">Search jobs</button>
        </div>

    <div class="cards">
          <div class="card">
            <div class="card-title">
              <p>Front end developer</p>
            </div>
            <div class="card-company">
              <p>Company - Google</p>
            </div>
            <div class="three-rows">
              <div class="location">
                <div class="small">Location:</div>
                <div class="big">
                  <p>Mumbai, Maharashtra</p>
                </div>
              </div>
              <div class="location">
                <div class="small">Salary:</div>
                <div class="big">
                  <p>₹ 500 -700</p>
                </div>
              </div>
              <div class="card-logo">
                <img src="company1-logo.png" width="100%">
              </div>
            </div>
            <button class="card-btn" onclick="window.location.href='#';">More details...
            </button>
          </div>

          <div class="card">
            <div class="card-title">
              <p>Front end developer</p>
            </div>
            <div class="card-company">
              <p>Google</p>
            </div>
            <div class="three-rows">
              <div class="location">
                <div class="small">Location:</div>
                <div class="big">
                  <p>Hyderabad, Telangana</p>
                </div>
              </div>
              <div class="location">
                <div class="small">Salary:</div>
                <div class="big">
                  <p>₹ 500 -700</p>
                </div>
              </div>
              <div class="card-logo">
                <img src="company1-logo.png" width="100%">
              </div>
            </div>
            <button class="card-btn" onclick="window.location.href='#';">More details...</button>
          </div>

          <div class="card">
            <div class="card-title">
              <p>Front end developer</p>
            </div>
            <div class="card-company">
              <p>Google</p>
            </div>
            <div class="three-rows">
              <div class="location">
                <div class="small">Location:</div>
                <div class="big">
                  <p>Hyderabad, Telangana</p>
                </div>
              </div>
              <div class="location">
                <div class="small">Salary:</div>
                <div class="big">
                  <p>₹ 500 -700</p>
                </div>
              </div>
              <div class="card-logo">
                <img src="company1-logo.png" width="100%">
              </div>
            </div>
            <button class="card-btn">More details...</button>
          </div>

          <!-- <div class="card">
            <div class="card-title">
              <p>Front end developer</p>
            </div>
            <div class="card-company">
              <p>Google</p>
            </div>
            <div class="three-rows">
              <div class="location">
                <div class="small">location:</div>
                <div class="big">
                  <p>Hyderabad, Telangana</p>
                </div>
              </div>
              <div class="location">
                <div class="small">Salary:</div>
                <div class="big">
                  <p>₹ 500 -700</p>
                </div>
              </div>
              <div class="card-logo">
                <img src="company1-logo.png" width="100%">  
              </div>
            </div>
            <button class="card-btn">More details...</button>
          </div> 
 -->
          <button class="load-btn">Load more..</button>
        </div>
      </section>
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



  <script  type="text/javascript" language="javascript" >

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
      var y = document.getElementById("myFilter");

      if (x.className === "topnav") {
        x.className += " responsive";
        y.className += " responsive";
         $('html, body').animate({scrollTop:0}, '300');
        
      } else {
        x.className = "topnav";
        y.className = "filter-sidebar";

      }
    }



    function myFunction2() {
    var y = document.getElementById("mySidebar");
    var z = document.getElementById("myResponsiveFilter");
    if (y.className === "sidebar") {
      y.className += " responsive";
      z.className += " responsive";
    } else {
      y.className = "sidebar";
       z.className = " filter";
    }
  }


    $('#sidebar-btn').click(function(e) {
         e.stopPropagation();
    $(".sidebar").toggleClass('responsive')
    $(".filter").toggleClass('responsive')   
  });



  $(function() {
  $("body").click(function(e) {
    if (e.target.id == "mySidebar" || $(e.target).parents("#mySidebar").length) {
        
    } else {

          $('.topnav').click(function(e) {
          if ($('.sidebar').hasClass('responsive')) {
            $(".sidebar").toggleClass('responsive')
            document.getElementById("myForm").reset();
          }
          if ($('.filter').hasClass('responsive')) {
            $(".filter").toggleClass('responsive')
          }
          })


          $('.container').click(function(e) {
          if ($('.sidebar').hasClass('responsive')) {
            $(".sidebar").toggleClass('responsive')
            document.getElementById("myForm").reset();
          }
          if ($('.filter').hasClass('responsive')) {
            $(".filter").toggleClass('responsive')
          }
        })

          $('.footer').click(function(e) {
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


    window.onload = function(){
    document.getElementById('close').onclick = function(){
       if ($('.sidebar').hasClass('responsive')) {
            $(".sidebar").toggleClass('responsive')
            document.getElementById("myForm").reset();
          }
          if ($('.filter').hasClass('responsive')) {
            $(".filter").toggleClass('responsive')
          }
    };
};




function mySideFilter()
{
  var loc = $("#filterloc").val();
  var dur = $("#filterdur").val();
  var sal = $("#filtersal").val(); 
  // console.log(loc);
  $.ajax({
        type: 'POST',
        url: 'fetch.php',
        // data: { text1: loc, text2: dur, text3: sal },
        success: function(response) {
            $('#result').html(response);
        }
    });
}
  
function myFilterButton()
{
  location.href = 'filter-page.php'; 
  document.getElementById("myForm").reset();
}
  </script>

</body>


</html>