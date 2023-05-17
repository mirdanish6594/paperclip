<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'fetch.php' ?>
  <head>
    <meta charset="utf-8">
    <title>Reusio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Nunito:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Hero section -->
    <section class="main">
      <nav class="navbar navbar-inverse">
      <div class="container-fluid">
      <div class="navbar-header mt-4">
         <a class="navbar-brand reusio-logo" href="#"><img src="images/paperclip.png" alt="main-logo"></a>
      </div>
         <ul class="nav navbar-nav navbar-right">
          <li> <a href="#"><i class="fa fa-solid fa-user fa-3x user-icon" style="color: #ffffff;"></i></a></li>
         </ul>
     </div>
     </nav>

     <div class="main-text">
           <h1 class="name accent">paperclip</h1>
           <p class="main-line">Your ultimate college marketplace for secondhand finds</p>
           <p class="sub-head"><strong>Buy, sell and save with paperclip! Our user-friendly platform connects college students to second-hand items on campus. Enjoy a wide selection of affordable goods.</strong></p>
           <p class="sub-head"><strong>Join today to trade your unwanted items or find the things your need for less.</strong></p>
           <button class="hero-btn"><strong>Buy now</strong></button>
           <button class="hero-btn"><strong>Sell something</strong></button>
           <div class="illustration"><img src="images/Rectangle-1.png" class="rectangle-1-image" alt="Rectangle1"></div>
           <div class="illustration"><img src="images/Rectangle-2.png" class="rectangle-2-image" alt="Rectangle2"></div>
           <div class="illustration"><img src="images/Rectangle-2.png" class="rectangle-3-image" alt="Rectangle3"></div>
           <div class="illustration"><img src="images/Charity.png" class="main-image" alt="Charity-illustration"></div>
     </div>
<!-- Searching section-->
<div class="searching">
  <form>
    <form action="/action_page.php" id="searching-form">
      <table class="search-items">
        <tr>
          <th>
            <label id="searching-label">What are you looking for?</label>
            <br>
            <input type="text" name="text" id="text-search"/>
          </th>
          <th>
            <label id="current-role">Categories</label>
            <br>
            <select id ="dropdown">
            <option selected disabled id ="dropdown">All categories</option>
              <option value="1">Lab coat</option>
              <option value="2">Books</option>
              <option value="3">Drafters</option>
              <option value="4">Stationary</option>
              <option value="5">Chart holder</option>
           </select>
          </th>
          <th class="search-btn">
               <button type="submit" class="hero-btn search-btn"><strong>Search</strong></button>
          </th>
        </tr>
      </table>
</form>
</div>
<!-- Cards-->
  </section>
  <h1 class="latest-listings accent"><strong>Latest Listings</strong></h1>
  <br><br><br><br><br>
<div class="section_our_solution">
<div class="row">
<div class="col-md-6">
  <div class="our_solution_category">
  <div class="three-cards">
    <div class="solution_cards_box">
        <?php fetchLatestListings(5); ?>
    </div>
  </div>
</div>
</div>
</div>
  </section>

  <button type="button" class="show-more-btn">Show more</button>

<!-- footer -->
<div class="footer">
    <a class="logo-name accent" href="#"><img src="images/paperclip.png" alt="main-logo"></a>
    <div class="details-footer">
      <p class="last-line">For any queries contact us at:</p>
      <p class="email"> <a href="#"><strong>random@gmail.com</strong></a></p>
    </div>
</div>
  <script src="index.js" charset="utf-8"></script>
  </body>
</html>
