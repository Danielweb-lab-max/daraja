<!DOCTYPE html>
<html lang="en">


<head>

  <title>Checkout | Faidagram</title>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faidagram is an easy social media follower page.">
<meta content="Codescandy" name="author" />


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/Faidalogo.png">



<!-- Libs CSS -->
<link href="../../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
<link href="../../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
<link href="../../assets/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
<link href="../../assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
<link href="../../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
<link href="../../assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
<link href="../../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
<link href="../../assets/libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
<link href="../../assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">

<!-- Theme CSS -->
<link rel="stylesheet" href="../../assets/css/theme.min.css">
</head>

<body>

  <!-- navigation -->
<div class="border-bottom pb-5">
    <nav class="navbar navbar-light py-lg-5 pt-3 px-0 pb-0">
    <div class="container">
      <div class="row w-100 align-items-center g-3">
        <div class="col-xxl-2 col-lg-3">
          <a class="navbar-brand d-none d-lg-block" href="../../index.html">
            <img src="../../assets/images/faida.png" height="70px" alt="Faidagram Logo">

          </a>
            <div class="d-flex justify-content-between w-100 d-lg-none">
            <a class="navbar-brand" href="#">
              <img src="../../assets/images/faida.png" height="100px" alt="Faidagram mobile Logo">

            </a>

            <!--<div class="d-flex align-items-center lh-1">-->

            <!--  <div class="list-inline me-2">-->
            <!--    <div class="list-inline-item">-->

            <!--      <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">-->
            <!--        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"-->
            <!--          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"-->
            <!--          class="feather feather-user">-->
            <!--          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>-->
            <!--          <circle cx="12" cy="7" r="4"></circle>-->
            <!--        </svg>-->
            <!--      </a>-->
            <!--    </div>-->
            <!--    <div class="list-inline-item">-->

            <!--      <a class="text-muted" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"-->
            <!--        href="#offcanvasExample" role="button" aria-controls="offcanvasRight">-->
            <!--        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"-->
            <!--          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"-->
            <!--          class="feather feather-shopping-bag">-->
            <!--          <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>-->
            <!--          <line x1="3" y1="6" x2="21" y2="6"></line>-->
            <!--          <path d="M16 10a4 4 0 0 1-8 0"></path>-->
            <!--        </svg>-->
            <!--      </a>-->
            <!--    </div>-->

            <!--  </div>-->
              <!-- Button -->
            <!--  <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"-->
            <!--    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"-->
            <!--    aria-label="Toggle navigation">-->
            <!--    <span class="icon-bar top-bar mt-0"></span>-->
            <!--    <span class="icon-bar middle-bar"></span>-->
            <!--    <span class="icon-bar bottom-bar"></span>-->
            <!--  </button>-->

            <!--</div>-->
          </div>

        </div>
        <div class="col-xxl-6 col-lg-5 d-none d-lg-block">

          <form action="#" class="search-header">


            <div class="input-group">
              <input type="text" class="form-control border-end-0" placeholder="Search for a social media service.."
                aria-label="Search for a social media service.." aria-describedby="basic-addon2">
              <span class="input-group-text bg-transparent" id="basic-addon2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-search">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg></span>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-xxl-3 d-none d-lg-block">
          <!-- Button trigger modal -->
          <button type="button" class="btn  btn-outline-gray-400 text-muted" data-bs-toggle="modal"
            data-bs-target="#locationModal">
            <i class="feather-icon icon-map-pin me-2"></i> Serving your Location
          </button>


        </div>
       
      </div>
      </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light navbar-default pt-0 pb-0">
    <div class="container px-0 px-md-3">

      
      <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">

        <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
          <div><img src="../../assets/images/faida.png" alt="Faidagram Logo"></div>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

       

        <div class="d-lg-none d-block mb-3">
          <button type="button" class="btn  btn-outline-gray-400 text-muted w-100 " data-bs-toggle="modal"
            data-bs-target="#locationModal">
            <i class="feather-icon icon-map-pin me-2"></i>Pick Location
          </button>
        </div>
        <div class="d-none d-lg-block">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link " href="../../index.html" role="button"  aria-expanded="false">Home </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Telegram
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#telegram">Buy Telegram Channel Subscribers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#telegram">Buy Telegram Group members</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Instagram
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram Followers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram Likes</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram Videos + Reels</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram Story views</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram LIVE Stream views</a></li>

              </ul>
            </li>

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tiktok
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#tiktok">Buy Tiktok Followers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#tiktok">Buy Tiktok Views</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#tiktok">Buy Tiktok like + Views</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Youtube
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#youtube">Buy Youtube Views</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#youtube">Buy Youtube Video Likes</a></li>
                <li><a class="dropdown-item" href="../../pages/blog-category.html">Buy youtube watchtime hours</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#youtube">Buy youtube subscribers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#youtube">Buy youtube livestream +views</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Facebook
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#facebook">Buy Facebook Post Likes</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#facebook">Buy Facebook Page Likes</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../../pages/services.html#twitter" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
                Twitter
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#twitter">Buy Twitter Followers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#twitter">Buy Twitter Retweets</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#twitter">Buy Twitter Likes</a></li>


              </ul>
            </li>
          </ul>
        </div>
        <div class="d-block d-lg-none">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link " href="../../index.html" role="button"  aria-expanded="false">Home </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Telegram
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#telegram">Buy Telegram Channel Subscribers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#telegram">Buy Telegram Group members</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Instagram
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram Followers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram Likes</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram Videos + Reels</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram Story views</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#instagram">Buy Instagram LIVE Stream views</a></li>

              </ul>
            </li>

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tiktok
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#tiktok">Buy Tiktok Followers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#tiktok">Buy Tiktok Views</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#tiktok">Buy Tiktok like + Views</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Youtube
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#youtube">Buy Youtube Views</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#youtube">Buy Youtube Video Likes</a></li>
                <li><a class="dropdown-item" href="../../pages/blog-category.html">Buy youtube watchtime hours</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#youtube">Buy youtube subscribers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#youtube">Buy youtube livestream +views</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Facebook
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#facebook">Buy Facebook Post Likes</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#facebook">Buy Facebook Page Likes</a></li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../../pages/services.html#twitter" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
                Twitter
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../pages/services.html#twitter">Buy Twitter Followers</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#twitter">Buy Twitter Retweets</a></li>
                <li><a class="dropdown-item" href="../../pages/services.html#twitter">Buy Twitter Likes</a></li>


              </ul>
            </li>
          </ul>
        </div>


      </div>
    </div>

  </nav>
</div>



<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 mt-8 mb-8">
        <div class="p-5 shadow rounded content">
          <h2 class="section-title">We need small info to process your order.</h2>
          <p>Note that you'll be making payment with <strong><i>Ksh</i></strong></p>
          <form method="POST" action="pesapal-iframe.php">
            <div class="row g-3">
              <div class="col">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Your First Name" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Your Last Name">
              </div>
            
            <div class="col-12">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address"
                required>
            </div>
            <div class="col-12">
              <input type="text" class="form-control" id="amount" name="amount" value="<? echo $_POST['price']?>">
              <input type="hidden" name="currency" id="currency" value="<? echo $_POST['abr']?>" />
              <input type="hidden" name="desc" id="desc" value="<? echo $_POST['desc']?>" />

              <input type="hidden" name="reference" value="<?=uniqid()?>"  />
              
            </div>
            <div class="col-12">
              <input type="phone" class="form-control" id="phone" name="phone" placeholder="+254..">
              
            </div>
             <div class="col-12">
              <label for="reason">Paste Your social Link here</label>
              <input type="text" class="form-control" id="link" name="link" placeholder="https://.">
              
            </div>
            
            <button type="submit" id="submit" class="btn btn-primary">Pay!</button>
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- footer -->
<div class="footer">
  <div class="container">
    <footer class="row g-4 py-4">
      <div class="col-12 col-md-12 col-lg-4">
        <h6 class="mb-4">Categories</h6>
        <div class="row">
          <div class="col-6">
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="../../pages/services.html" class="nav-link">Tiktok</a></li>
              <li class="nav-item mb-2"><a href="../../pages/services.html" class="nav-link"> Instagram</a></li>
              <li class="nav-item mb-2"><a href="../../pages/services.html" class="nav-link"> Telegram</a></li>
            </ul>
          </div>
          
          <div class="col-6">
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="../../pages/services.html" class="nav-link"> Youtube</a></li>
              <li class="nav-item mb-2"><a href="../../pages/services.html" class="nav-link"> Twitter</a></li>
              <li class="nav-item mb-2"><a href="../../pages/services.html" class="nav-link"> Facebook</a></li>
            </ul>
          </div>
        </div>

      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="row g-4">
          <div class="col-12 col-sm-6 col-md-12">
           <img src="../../assets/images/faida.png" height="100px" alt="Faidagram Logo">
              
            </ul>
          </div>

        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="row g-4">
          <div class="col-12 col-sm-6 col-md-12">
            <h6 class="mb-4">Get to know us</h6>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link">Company</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link">About</a></li>
              
            </ul>
          </div>

         

        </div>
      </div>
     





    </footer>
    
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-md-6"><span class="small text-muted">Copyright 2023 © Faidagram.</span></div>
        <div class="col-md-6">
          <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
            <li class="list-inline-item text-muted">Follow us on</li>
            <li class="list-inline-item me-1">
              <a href="#!" class="icon-shape icon-sm social-links"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a></li>
            <li class="list-inline-item me-1">
              <a href="#!" class="icon-shape icon-sm social-links"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-twitter" viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a></li>
            <li class="list-inline-item">
              <a href="#!" class="icon-shape icon-sm social-links"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
  <!-- Javascript-->
  <!-- Libs JS -->
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="../../assets/libs/slick-carousel/slick/slick.min.js"></script>
<script src="../../assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../../assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="../../assets/libs/wnumb/wNumb.min.js"></script>
<script src="../../assets/libs/rater-js/index.js"></script>
<script src="../../assets/libs/prismjs/prism.js"></script>
<script src="../../assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="../../assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="../../assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="../../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="../../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="../../assets/libs/flatpickr/dist/flatpickr.min.js"></script>

<!-- Theme JS -->
<script src="../../assets/js/theme.min.js"></script>
  




</body>


</html>