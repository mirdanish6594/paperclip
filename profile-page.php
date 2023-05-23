<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php 
    include 'fetch.php';
    $id="2022BCHE034";
  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="profile-page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Nunito:wght@300&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="row main">
      <div class="container">
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header mt-2">
           <a class="navbar-brand reusio-logo" href="#"><img src="images/paperclip.png" alt="main-logo"></a>
        </div>
           <ul class="nav navbar-nav navbar-right">
            <li><button class="publish-btn"><strong>Publish a listing</strong></button></li>
            <li> <a href="#"><i class="fa fa-solid fa-user fa-3x user-icon" style="color: #ffffff;"></i></a></li>
           </ul>
       </div>
       </nav>
       </div>
       </div>
      <!--Profile-->
      <?php
        fetchProfile($id);
      ?>
       <!-- footer -->
       <div class="footer">
           <a class="logo-name accent" href="#"><img src="images/paperclip.png" alt="main-logo"></a>
           <div class="details-footer">
             <p class="last-line">For any queries contact us at:</p>
             <p class="email"> <a href="#"><strong>random@gmail.com</strong></a></p>
           </div>
       </div>
         <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
         <script src="profile-page.js" charset="utf-8"></script>
  </body>
</html>
