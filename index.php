<?php require_once('couch/cms.php'); ?>
<cms:template>
  <cms:repeatable name='grid_items'>
    <cms:editable name='grid_item_image' type='image' />
    <cms:editable name='grid_item_title' type='text' />
    <cms:editable name='grid_item_subtitle' type='text' />
  </cms:repeatable>
</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>


  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@Bureau d’Achat des Diamants  " />
  <meta name="twitter:title" content="Bureau d’Achat des Diamants  " />
  <meta name="twitter:description" content="Diamond Seller in DRC" />
  <meta name="twitter:image" content="https://images.pexels.com/photos/15530562/pexels-photo-15530562/free-photo-of-ice-diamond.png" />




  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=yes>
  <meta name="description" content="Diamond seller in DRC">
  <meta name="keywords" content="diamond, sell">
  <meta name="author" content="Bureau d’Achat des Diamants
  ">
  <meta name="title" content="Bureau d’Achat des Diamants
  ">
  <meta property="og:type" content="website" />

  <meta property="og:title" content="Bureau d’Achat des Diamants
  " />
  <meta property="og:description" content="Diamond seller in DRC">
  <meta property="og:image" content="https://images.pexels.com/photos/15530562/pexels-photo-15530562/free-photo-of-ice-diamond.pnsg">

  <link rel="icon" type="image/x-icon" href="https://images.pexels.com/photos/15530562/pexels-photo-15530562/free-photo-of-ice-diamond.png">

  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>Bureau d’Achat des Diamants
  </title>

</head>

<body>
  <!-- Client needs to be able to edit class shine -->

  <div class="shine">
    <h1>
      <cms:editable name="title">Bureau d’Achat des Diamants </cms:editable>
    </h1>
  </div>

  <div class="img-clip-block">
    <div class="img-clip-row">
      <div class="img-clip-wrap"></div>
    </div>

    <div class="img-clip-row">
      <a href="#diamonds" class="img-clip-wrap">
        <div class="overlay">
          <div class="overlay-content">Diamonds
          </div>
        </div>
      </a>

      <a href="#contact" class="img-clip-wrap">
        <div class="overlay">
          <div class="overlay-content">Contact</div>
        </div>
      </a>
    </div>

    <div class="img-clip-row">
      <a href="#about" class="img-clip-wrap">
        <div class="overlay">
          <div class="overlay-content">About</div>
        </div>
      </a>
    </div>
  </div> <!-- /img-clip-block -->

  <svg class="clip-svg">
    <defs>
      <clipPath id="clip-diamond-demo" clipPathUnits="objectBoundingBox">
        <polygon points="0.5 0, 1 0.5, 0.5 1, 0 0.5" />
      </clipPath>
    </defs>
  </svg>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 439.16 448.24" width="200px" height="150px">
    <defs>
      <style>
        .cls-1 {
          fill: #fff;
        }

        .cls-2 {
          fill: red;
        }
      </style>
    </defs>
    <title>shine</title>
    <g id="OBJECTS">
      <polygon class="cls-1 glitter star-5" points="376.66 272.3 404.11 271.34 376.66 270.38 387.24 258.52 375.38 269.1 374.42 241.65 373.46 269.1 361.6 258.52 372.18 270.38 344.73 271.34 372.18 272.3 361.6 284.17 373.46 273.59 374.42 301.03 375.38 273.59 387.24 284.17 376.66 272.3" />
      <polygon class="cls-1 glitter star-2" points="224.25 207.06 263.15 205.7 224.62 204.36 243.03 193.17 222.85 202.47 233.02 182.72 220.83 200.93 219.47 162.02 218.13 200.56 206.94 182.15 216.24 202.32 196.49 192.16 214.7 204.34 175.79 205.7 214.33 207.05 195.92 218.24 216.09 208.94 205.93 228.69 218.12 210.47 219.47 249.38 220.82 210.85 232.01 229.25 222.71 209.08 242.46 219.25 224.25 207.06" />
    </g>
  </svg>

  <!-- Client needs to be able to edit the h1 title Diamonds, the image, the h2 and the p  -->

  <h1 class="title" id="diamonds">
    <cms:editable name="diamonds_title" type="text">Diamonds</cms:editable>
  </h1>
  <div class="grid">
    <cms:show_repeatable 'grid_items'>
      <div class="grid-item">
        <img src="<cms:show grid_item_image />" alt="<cms:show grid_item_title />" class="product-image">
        <h2 class="product-title">
          <cms:show grid_item_title />
        </h2>
        <p class="product-subtitle">
          <cms:show grid_item_subtitle />
        </p>
      </div>
    </cms:show_repeatable>
  </div>

  <!-- Modal -->
  <div class="modal" id="modal">
    <span class="close" id="close">&times;</span>
    <img src="media/diamond.png" alt="Modal Image" id="modal-image">
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 439.16 448.24" width="200px" height="150px">
    <defs>
      <style>
        .cls-1 {
          fill: #fff;
        }

        .cls-2 {
          fill: red;
        }
      </style>
    </defs>
    <title>shine</title>
    <g id="OBJECTS">
      <polygon class="cls-1 glitter star-5" points="376.66 272.3 404.11 271.34 376.66 270.38 387.24 258.52 375.38 269.1 374.42 241.65 373.46 269.1 361.6 258.52 372.18 270.38 344.73 271.34 372.18 272.3 361.6 284.17 373.46 273.59 374.42 301.03 375.38 273.59 387.24 284.17 376.66 272.3" />
      <polygon class="cls-1 glitter star-2" points="224.25 207.06 263.15 205.7 224.62 204.36 243.03 193.17 222.85 202.47 233.02 182.72 220.83 200.93 219.47 162.02 218.13 200.56 206.94 182.15 216.24 202.32 196.49 192.16 214.7 204.34 175.79 205.7 214.33 207.05 195.92 218.24 216.09 208.94 205.93 228.69 218.12 210.47 219.47 249.38 220.82 210.85 232.01 229.25 222.71 209.08 242.46 219.25 224.25 207.06" />
    </g>
  </svg>
  <!-- Client needs to be able to edit the h1 title About us, and the p -->

  <h1 id="about" class="title">
    <cms:editable name="about_us_title" type="text">About Us</cms:editable>
  </h1>

  <section class="about">
    <div class="container">
      <div class="grid-2">
        <div class="center">
        </div>
        <div>
          <p>
            <cms:editable name="about_us_paragraph1" type="textarea">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eos aperiam labore consectetur maiores ea magni exercitationem
              similique laborum sed, unde, autem vel iure doloribus aliquid. Aspernatur explicabo consectetur consequatur non
              nesciunt debitis quos alias soluta, ratione, ipsa officia reiciendis.
            </cms:editable>

          </p>
          <p>
            <cms:editable name="about_us_paragraph2" type="textarea">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non eos aperiam labore consectetur maiores ea magni exercitationem
              similique laborum sed, unde, autem vel iure doloribus aliquid. Aspernatur explicabo consectetur consequatur non
              nesciunt debitis quos alias soluta, ratione, ipsa officia reiciendis.
            </cms:editable>

          </p>
        </div>
      </div>
    </div>
  </section>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 439.16 448.24" width="200px" height="150px">
    <defs>
      <style>
        .cls-1 {
          fill: #fff;
        }

        .cls-2 {
          fill: red;
        }
      </style>
    </defs>
    <title>shine</title>
    <g id="OBJECTS">
      <polygon class="cls-1 glitter star-5" points="376.66 272.3 404.11 271.34 376.66 270.38 387.24 258.52 375.38 269.1 374.42 241.65 373.46 269.1 361.6 258.52 372.18 270.38 344.73 271.34 372.18 272.3 361.6 284.17 373.46 273.59 374.42 301.03 375.38 273.59 387.24 284.17 376.66 272.3" />
      <polygon class="cls-1 glitter star-2" points="224.25 207.06 263.15 205.7 224.62 204.36 243.03 193.17 222.85 202.47 233.02 182.72 220.83 200.93 219.47 162.02 218.13 200.56 206.94 182.15 216.24 202.32 196.49 192.16 214.7 204.34 175.79 205.7 214.33 207.05 195.92 218.24 216.09 208.94 205.93 228.69 218.12 210.47 219.47 249.38 220.82 210.85 232.01 229.25 222.71 209.08 242.46 219.25 224.25 207.06" />
    </g>
  </svg>
  <h1 id="contact" class="title">Contact</h1>

  <form target="_blank" action="https://formsubmit.co/costanza.casullo@hotmail.it" method="POST">
    <input type="text" name="name" placeholder="What is your name?" class="form-control" required />
    <input type="email" name="emailaddress" placeholder="What is your email?" class="form-control" type="email" required />
    <textarea rows="4" cols="50" name="subject" placeholder="Please enter your message" class="form-control" required></textarea>
    <button type="submit" class="btn">Submit</button>
  </form>
  <!-- Client needs to be able to edit the phone number, email and location -->

  <section class="contact">
    <div>
      <p>Phone: <a href="tel:<cms:show phone_number />">
          <cms:editable name="phone_number" type="text">+250791029777</cms:editable>
        </a></p>
    </div>
    <div>
      <p>Email: <a href="mailto:<cms:show email />">
          <cms:editable name="email" type="text">vegetsolutions@gmail.com</cms:editable>
        </a>
      </p>
    </div>
    <p>Address:
      <cms:editable name="address" type="textarea">Gasabo District, Bumbogo Sector, Kinyaga, Kigali</cms:editable>
    </p>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 439.16 448.24" width="200px" height="150px">
    <defs>
      <style>
        .cls-1 {
          fill: #fff;
        }

        .cls-2 {
          fill: red;
        }
      </style>
    </defs>
    <title>shine</title>
    <g id="OBJECTS">
      <polygon class="cls-1 glitter star-5" points="376.66 272.3 404.11 271.34 376.66 270.38 387.24 258.52 375.38 269.1 374.42 241.65 373.46 269.1 361.6 258.52 372.18 270.38 344.73 271.34 372.18 272.3 361.6 284.17 373.46 273.59 374.42 301.03 375.38 273.59 387.24 284.17 376.66 272.3" />
      <polygon class="cls-1 glitter star-2" points="224.25 207.06 263.15 205.7 224.62 204.36 243.03 193.17 222.85 202.47 233.02 182.72 220.83 200.93 219.47 162.02 218.13 200.56 206.94 182.15 216.24 202.32 196.49 192.16 214.7 204.34 175.79 205.7 214.33 207.05 195.92 218.24 216.09 208.94 205.93 228.69 218.12 210.47 219.47 249.38 220.82 210.85 232.01 229.25 222.71 209.08 242.46 219.25 224.25 207.06" />
    </g>
  </svg>
  <!-- Client needs to be able to edit the links to which the icons redirect -->

  <div class="social_icons">
    <div class="square">
      <div class="icons">
        <a href="<cms:editable name='facebook_link' type='text' />" target="_blank">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="square">
      <div class="icons">
        <a href="<cms:editable name='youtube_link' type='text' />" target="_blank">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="square">
      <div class="icons">
        <a href="<cms:editable name='twitter_link' type='text' />" target="_blank">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
      </div>
    </div>

  </div>

  <script src="script.js"></script>

</body>

</html>

<?php COUCH::invoke(); ?>