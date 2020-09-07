<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">

  <title>BlackVision User Posts</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <a href="index.php">

      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
  
        <li><a href="login.php">Login</a></li>
        <!-- <li><a href="register.php">Sign up</a></li>
        <li>
          <a href="login.php">
            <i class="fa fa-sign-in"></i>
            Login
          </a>
        </li> -->

        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
           Root_User
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="admin/posts/index.php">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->

  <!-- Page wrapper -->
  <div class="page-wrapper">

    <!-- Posts Slider -->
    <div class="posts-slider">
      <h1 class="slider-title">Blog Posts</h1>
      <i class="fa fa-chevron-right next"></i>
      <i class="fa fa-chevron-left prev"></i>

      <div class="posts-wrapper">
        <div class="post">
          <div class="inner-post">
            <img src="images/image_7.jpg" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">BLM poems</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Meron Solomon
                  &nbsp;
                  <i class="fa fa-calendar"></i> Aug 02,2020
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="images/blackfilms.jpg" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Top ten black made movies!!!!!!</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Meron Solomon
                  &nbsp;
                  <i class="fa fa-calendar"></i> Aug 02,2020
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="images/hbcu-schools.jpg" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">How to get into a HBCU</a></h3>
                <div>
                  <i class="fa fa-user-o"></i> Bryana
                  &nbsp;
                  <i class="fa fa-calendar"></i> Aug 02,2020
                </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="images/image_4.jpg" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h4><a href="single.php">Black Women in Tech</a></h4>
              <div>
                <i class="fa fa-user-o"></i> Bryana
                &nbsp;
                <i class="fa fa-calendar"></i> Aug 02,2020
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- // Posts Slider -->

    <!-- content -->
    <div class="content clearfix">
      <div class="page-content">
        <h1 class="recent-posts-title">Recent Posts</h1>
        <div class="post clearfix">
          <img src="images/BLM.png" class="post-image" alt="">
          <div class="post-content">

            <h2 class="post-title"><a href="#">BLM Facts</a></h2>

            <div class="post-info">
              <i class="fa fa-user-o"></i> Chris
              &nbsp;
              <i class="fa fa-calendar"></i> Aug 02,2020
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="images/MLK.jpg" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">MLK Biography </h2></a>
            <div class="post-info">
              <i class="fa fa-user-o"></i>  Amiralca Jackson
              &nbsp;
              <i class="fa fa-calendar"></i> Aug 02,2020
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="images/image_3.png" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">The problem with colleges</a></h2>
            <div class="post-info">
              <i class="fa fa-user-o"></i>  Amiralca Jackson
              &nbsp;
              <i class="fa fa-calendar"></i> Aug 02,2020
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <div class="sidebar">
        <!-- Search -->
        <div class="search-div">
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>
        <!-- // Search -->

        <!-- topics -->
        <div class="section topics">
          <h2>Topics</h2>
          <ul>
            <a href="#">
              <li>Poems</li>
            </a>
            <a href="#">
              <li>Quotes</li>
            </a>
            <a href="#">
              <li>BLM</li>
            </a>
            <a href="#">
              <li>Biography</li>
            </a>
            <a href="#">
              <li>Motivation</li>
            </a>
            <a href="#">
              <li>Inspiration</li>
            </a>
            <a href="#">
              <li>Education</li>
            </a>
            <a href="#">
              <li>Self Development</li>
            </a>
          </ul>
        </div>
        <!-- // topics -->

      </div>
    </div>
    <!-- // content -->

  </div>
  <!-- // page wrapper -->

  <!-- FOOTER -->
  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
       

      </div>

    

      <div class="footer-section contact-form-div">

        <br>
      
      </div>

    </div>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="scripts.js"></script>

</body>

</html>