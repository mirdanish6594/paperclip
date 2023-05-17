<!DOCTYPE html>
<html lang="en">
<?php 

  $categories = ['Lab Coat', 'Drafter', 'Chart Holder', 'Books', 'Notes', 'Stationary', 'Geometry Set', 'Calculator', 'Other'];

  include 'fetch.php';
  if(isset($_GET['id'])){
    $listing = fetchListingDetails($_GET['id']);
  }
  else{
    header("Location: index.php");
  }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesList.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Nunito:wght@300&display=swap" rel="stylesheet">
    <title>ListPage</title>
</head>

<body>

    <nav class="nav-List">
        <img src="images/paperclip.png" alt="paperclip-logo" class="paperclip-logo">
        <a href="#"><i class="fa fa-solid fa-user fa-3x" style="color: #ffffff;"></i></a>
    </nav>
    <main>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="images/demo1.jpg" alt="1">
        </div>
        <div class="item">
          <img src="images/demo1.jpg" alt="1">
        </div>
        <div class="item">
          <img src="images/demo1.jpg" alt="1">
        </div>
        <div class="item">
          <img src="images/demo1.jpg" alt="1">
        </div>
        <div class="item">
          <img src="images/demo1.jpg" alt="1">
        </div>
        <div class="item">
          <img src="images/demo1.jpg" alt="1">
        </div>
    </div>
    <!-- description -->
    <div class="desc">
      <div class="desc1" style="width: 20rem;">
        <h2 class=" accent"><?php echo $listing['title'] ?></h2>
        <h4><?php echo $categories[$listing['category']] ?></h4>
        <p><?php echo $listing['description'] ?></p>
      </div>
      <div class="desc2" style="width: 24rem;">
        <div class="card" style="width: 24rem; display:flex; padding:5px">
           <h3 class="card-title">paperclip customer</h3>
           <br/>
           <p class="card-text">i am a 2nd year BCSE student currently doing nothing</p>
           <h5>600600600</h5>
           <br/>
           <div style="display:flex;">
             <span class="fa fa-star"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>
           </div>
        </div>
      </div>
    </div>
    <!--cards  -->
    <h1 class="accent"style="margin-left: 14vw; margin-top: 90px;">More Like This</h1>
    <div class="section_our_solution">
    <div class="row">
      <div class="col-md-6">
        <div class="our_solution_category">
        <div class="three-cards">
          <div class="solution_cards_box">
              <?php fetchListingsByCategory($listing['category']); ?>
          </div>
        </div>
      </div>
      </div>
    </div>
    </main>

    <footer>
      <div class="nav-bottom">
        <img src="images/paperclip.png" alt="paperclip-logo" class="paperclip-logo">
        <div>
          <p>For further queries</p>
          <a href="#">abcd@gmail.com</a>
        </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
  </script>
</body>

</html>