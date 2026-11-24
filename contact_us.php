<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <style>
    body {
      color: #fff;
    }

    .right_conatct_social_icon {
      background: linear-gradient(to top right, #df1b1b -5%, #721414 100%);
    }

    .contact_us {
      background-color: #fff;
      padding: 20px 0px;
    }

    .contact_inner {
      background-color: #fff;
      position: relative;
      box-shadow: 20px 22px 44px #cccc;
      border-radius: 25px;
    }

    .contact_field {
      padding: 40px 340px 40px 100px;
    }

    .right_conatct_social_icon {
      height: 100%;
    }

    .contact_field h3 {
      color: #000;
      font-size: 40px;
      letter-spacing: 1px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .contact_field p {
      color: #000;
      font-size: 13px;
      font-weight: 400;
      letter-spacing: 1px;
      margin-bottom: 35px;
    }

    .contact_field .form-control {
      border-radius: 0px;
      border: none;
      border-bottom: 1px solid #ccc;
    }

    .contact_field .form-control:focus {
      box-shadow: none;
      outline: none;
      border-bottom: 2px solid #1325e8;
    }

    .contact_field .form-control::placeholder {
      font-size: 13px;
      letter-spacing: 1px;
    }

    .contact_info_sec {
      position: absolute;
      background-color: #2d2d2d;
      right: 1px;
      top: 18%;
      height: 340px;
      width: 340px;
      padding: 40px;
      border-radius: 25px 0 0 25px;
    }

    .contact_info_sec h4 {
      letter-spacing: 1px;
      padding-bottom: 15px;
    }

    .info_single {
      margin: 30px 0px;
    }

    .info_single i {
      margin-right: 15px;
    }

    .info_single span {
      font-size: 14px;
      letter-spacing: 1px;
    }

    button.contact_form_submit {
      background: linear-gradient(to top right, #df1b1b -5%, #721414 100%);
      border: none;
      color: #fff;
      padding: 10px 15px;
      width: 100%;
      margin-top: 25px;
      border-radius: 35px;
      cursor: pointer;
      font-size: 14px;
      letter-spacing: 2px;
    }

    .socil_item_inner li {
      list-style: none;
    }

    .socil_item_inner li a {
      color: #fff;
      margin: 0px 15px;
      font-size: 14px;
    }

    .socil_item_inner {
      padding-bottom: 10px;
    }

    .map_sec {
      padding: 50px 0px;
    }

    .map_inner h4,
    .map_inner p {
      color: #000;
      text-align: center;
    }

    .map_inner p {
      font-size: 13px;
    }

    .map_bind {
      margin-top: 50px;
      border-radius: 30px;
      overflow: hidden;
    }
  </style>
</head>

<body>
  <?php $active = 'contact';
  include 'head.php'; ?>
  <?php
  if (isset($_POST["send"])) {
    $name = $_POST['fullname'];
    $number = $_POST['contactno'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $conn = mysqli_connect("localhost", "root", "", "blood_donation") or die("Connection error");
    $sql = "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$email}','{$number}','{$message}')";
    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
    echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
  } ?>

  <!-- <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:50px;">
        <h1 class="mt-4 mb-3">Contact</h1>
        <div class="row">
          <div class="col-lg-8 mb-4">
            <h3>Send us a Message</h3>
            <form name="sentMessage" method="post">
              <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" id="name" name="fullname" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" pattern="[0-9]{10}" name="contactno" required>
              </div>
              <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea rows="6" class="form-control" id="message" name="message" required maxlength="999" style="resize: none;"></textarea>
              </div>
              <button type="submit" name="send" class="btn btn-primary">Send Message</button>
            </form>
          </div>
          <div class="col-lg-4 mb-4">
            <h2>Contact Details</h2>
            <?php
            include 'conn.php';
            $sql = "select * from contact_info";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) { ?>
                <br>
                <p>
                <h4>Address :</h4><?php echo $row['contact_address']; ?>
                </p>
                <p>
                <h4>Contact Number :</h4><?php echo $row['contact_phone']; ?>
                </p>
                <p>
                <h4> Email: </h4><a href="#"><?php echo $row['contact_mail']; ?></a>
                </a></b>
                </p>
            <?php }
            } ?>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php' ?>
  </div> -->
  <section class="contact_us">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="contact_inner">
            <div class="row">
              <div class="col-md-10">
                <div class="contact_form_inner">
                  <div class="contact_field">
                    <h3>Contatc Us</h3>
                    <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                    <form name="sentMessage" method="post">
                      <input type="text" class="form-control form-group" id="name" name="fullname" placeholder="Full Name" required>
                      <input type="tel" class="form-control form-group" id="phone" pattern="[0-9]{10}" name="contactno" placeholder="Contact Number" required>
                      <input type="email" class="form-control form-group" id="email" name="email" placeholder="Email" required>
                      <textarea class="form-control form-group" id="message" name="message" placeholder="Message" required maxlength="999"></textarea>
                      <button class="contact_form_submit">Send a Message</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="right_conatct_social_icon d-flex align-items-end">
                  <div class="socil_item_inner d-flex">
                    <!-- <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="contact_info_sec text-light">
              <h4>Contact Info</h4>
              <?php
              include 'conn.php';
              $sql = "select * from contact_info";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-headset"></i>
                    <span>+91 <?php echo $row['contact_phone']; ?></span>
                  </div>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-envelope-open-text"></i>
                    <span><?php echo $row['contact_mail']; ?></span>
                  </div>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-map-marked-alt"></i>
                    <span><?php echo $row['contact_address']; ?></span>
                  </div>

              <?php }
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>