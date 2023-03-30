<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>shakil</title>
    <!-- <link rel="stylesheet" media="screen and (max-width: 600px)" href="RWD\mobile.css"> -->
    <style>

    .menu {
      background-color: cadetblue;
      display: flex;
      justify-content: flex-end;
    }
    .menu a{
      text-decoration: none;
      padding: 20px;
      color: white;
    }
    .menu a:hover{
      background-color: grey;
    }
    @media screen and (max-width:600px){
      .menu{
          flex-direction: column;
          padding: 10px;
      }
      .menu a{
        background-color: indigo;
        margin: 10px 0;
        text-align: center;
        border-radius: 10px;
      }
    }
    *{
      box-sizing: border-box;
    }
    @media screen and (min-width: 600px) {
      body{
        background-color: brown;
      }
      h1{
        color:white;
      }
      h2{
        display: none;
      }
      @media screen and (min-width: 900px){
        body{
          background-color: green;
        }
      }

    }

    </style>
  </head>
  <body>
<div class="menu">
  <a href="">Home</a>
  <a href="">about us</a>
  <a href="">tutorials</a>
  <a href="">contact us</a>

</div>
<div>
  <h1>Bangladesh</h1>
<h2>Responsive web design</h2>
</div>
  </body>
</html>
