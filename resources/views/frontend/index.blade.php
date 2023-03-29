<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>shakil</title>
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


    </style>
  </head>
  <body>
<div class="menu">
  <a href="">Home</a>
  <a href="">about us</a>
  <a href="">tutorials</a>
  <a href="">contact us</a>

</div>
  </body>
</html>
