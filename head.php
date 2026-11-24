<html>

<head>

<!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- JavaScript (optional) -->

  <style>
    .header {
      position: fix;
      overflow: hidden;
      background-color: #333;
      top: 0;
      width: 100%;
      /* padding: 10px 5px; */
      color: #FF0404;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    /* Style the header links */
    .header a {
      float: left;
      color: white;
      text-align: center;
      /* padding: 12px; */
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
      font-weight: Bold Italic;
    }

    /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
    .header a.logo {
      font-size: 25px;
      font-weight: Bold Italic;
      color: #FF0404;
    }

    .header a.logo:hover {
      background-color: transparent;
    }

    /* Change the background color on mouse-over */
    .header a:hover {
      /* background-color: #ddd; */
      color: #dc3545;
      background-color: transparent;
    }




    /* Float the link section to the right */
    .header-right {
      float: right;
    }

    .header-right a{
      padding: 5px 15px;
    }


    /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }

      .header-right {
        float: none;
      }
    }

    /* Style the active/current link*/
    a.act {
      /* background: linear-gradient(to right, #fd746c 0%, #ff9068 100%); */
      background-color: #dc3545;
      color: white;
      border-radius: 30px;
      padding-top: 5px;
      padding-bottom: 5px;
    }

    a.logo2 {
      background-color: #333;
    }
  </style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"><img src="./image/logo.png" alt="" style="height: 85px;width: 160px;" ,></a>
    <!-- <a href="home.php" class="logo"<?php if ($active == 'home') echo "class='logo2'"; ?>>Blood Bank & Donation </a> -->
    <div class="header-right">
    <a href="home.php" <?php if ($active == 'home') echo "class='act'"; ?>>Home</a>
      <a href="about_us.php" <?php if ($active == 'about') echo "class='act'"; ?>>About Us</a>
      <a href="why_donate_blood.php" <?php if ($active == 'why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php" <?php if ($active == 'donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="camp.php" <?php if ($active == 'camp') echo "class='act'"; ?>>Camp</a>
      <a href="need_blood.php" <?php if ($active == 'need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" style="margin-right: 15px;" <?php if ($active == 'contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div>




  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>