<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!--begin header -->
      <div class="container">
        <div class="header">
          <h4><a href="index.html" class"title"> Movieders Zone</a></h4>
          <div class="nav">
            <a href="index.html">Home</a>
            <ul class="dropmenu">
              <li><a href="#1">Browse</a>
                <ul>
                  <h6>Year</h6>
                  <li><a href="browse.html">2012</a></li>
                  <li><a href="browse.html">2013</a></li>
                  <li><a href="browse.html">2014</a></li>
                  <li><a href="browse.html">2015</a></li>
                  <li><a href="browse.html">2016</a></li>
                  <li><a href="browse.html">2017</a></li>

                  <h6>Genre</h6>
                  <li><a href="browse.html">Action</a></li>
                  <li><a href="browse.html">Drama</a></li>
                  <li><a href="browse.html">Horor</a></li>
                  <li><a href="browse.html">Romance</a></li>
                  <li><a href="browse.html">Sci-Fi</a></li>
                  <li><a href="browse.html">Thriller</a></li>

                </ul>
              </li>

            </ul>
            <a href="login.php">Login</a>

          </div>
        </div>
      </div>
      <input type="text" name="" value="" placeholder="Search Movie"
      style="border:1px #1e88e557 solid; border-radius: 10px;
      background-color: #0000004d;
      margin-left:74%;
      ">

      <!-- end header -->


    <div class="out">
      <div class="outsideBox">
        <form action="register_process.php" class="login" method="post">

          <h1>Register</h1>
          <input type="text" name="firstName" placeholder="Nama Depan" required>
          <input type="text" name="lastName" placeholder="Nama Belakang" required>
          <input type="text" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>

          <button type="submit" >Register</button>

          <h4>* Sudah punya akun?
          <a href="login.html">Login!</a></h4>

        </form>
      </div>
    </div>
    <!-- START CATEGORY -->
    <div class="category-wrapper">
      <div class="category">

      <div class="container">
        <h2 class="text-center">Movieders Zone</h2>

        <ul class="category">
          <li class=item>
            <a href="browse.html">
              <span class="lnr lnr-star-half"></span>All Movie
            </a>
          </li>
          <li class=item>
            <a href="login.php">
              <span class="lnr lnr-star-half"></span>Login
            </a>
          </li>
          <li class=item>
            <a href="register.php">
              <span class="lnr lnr-star-half"></span>Register
            </a>
          </li>
          <li class=item>
            <a href="about.html">
              <span class="lnr lnr-star-half"></span>Help and About
            </a>
          </li>
        </ul>
      </div>
    </div>
    </div>
  <!-- END CATEGORY -->
  </body>
</html>
