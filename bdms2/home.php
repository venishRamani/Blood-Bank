<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
  <style>
    #carouselExampleIndicator {
      max-width: 100%;
      margin: 0 auto;
    }

    .carousel-inner {
      border-radius: 10px;
      overflow: hidden;
    }

    .carousel-item img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    /* .carousel-control-prev, .carousel-control-next {
            background: rgba(0, 0, 0, 0.2);
        } */
    .carousel-indicators li {
      border-top: none !important;
      border-bottom: none !important;
      background-color: #000 !important;
      border: #000 !important;
    }

    .carousel-indicators .active {
      width: 30px !important;
      height: 3px !important;
      background-color: #dc3545 !important;
      border: #dc3545 !important;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #fff;
      border-radius: 50%;
      color: #000;
    }

    /* .carousel-control-prev:hover, .carousel-control-next:hover {
            background: rgba(0, 0, 0, 0.3);
        } */
  </style>
</head>

<body>
  <div class="header">
    <?php
    $active = "home";
    include('head.php'); ?>
  </div>


  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:75px;">
        <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicator" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicator" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicator" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image\Banner_1.jpg" class="d-block w-100" style="height: 75vh;" alt="banner1">
            </div>
            <div class="carousel-item">
              <img src="image\Banner_2.jpg" class="d-block w-100" style="height: 75vh;" alt="banner2">
            </div>
            <div class="carousel-item">
              <img src="image\Banner_3.jpg" class="d-block w-100" style="height: 75vh;" alt="banner3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        </section>

        <section>
          <h1 class="text-center mb-4 mt-4">Welcome to BloodBank & Donor Management System</h1>
          <!-- <br> -->
          <div class="row col-12">
            <div class="accordion col-12 px-0" id="accordionExample">
              <!-- Card 1 -->
              <div class="card">
                <div class="card-header bg-danger" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="cursor: pointer;">
                  <h2 class="mb-0 text-white">
                    The need for blood
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body" style="font-size: 18px;">
                    <?php
                    include 'conn.php';
                    $sql = "select * from pages where page_type='needforblood'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['page_data'];
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="card">
                <div class="card-header bg-danger" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="cursor: pointer;">
                  <h2 class="mb-0 text-white">
                    Blood Tips
                  </h2>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body" style="font-size: 18px;">
                    <?php
                    include 'conn.php';
                    $sql = "select * from pages where page_type='bloodtips'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['page_data'];
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="card">
                <div class="card-header bg-danger" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="cursor: pointer;">
                  <h2 class="mb-0 text-white">
                    Who you could Help
                  </h2>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body" style="font-size: 18px;">
                    <?php
                    include 'conn.php';
                    $sql = "select * from pages where page_type='whoyouhelp'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['page_data'];
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-4 mb-4">
            <div class="card">
              <h2 class="card-header card bg-info text-white">The need for blood</h2>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left; font-size: 18px;">
                <?php
                include 'conn.php';
                $sql = "select * from pages where page_type='needforblood'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card bg-info text-white">Blood Tips</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = "select * from pages where page_type='bloodtips'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>

            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <h4 class="card-header card bg-info text-white">Who you could Help</h4>

              <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                <?php
                include 'conn.php';
                $sql = "select * from pages where page_type='whoyouhelp'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?>
              </p>


            </div>
          </div> -->
          </div>
        </section>

        <section>
          <h2 class="mt-5">Blood Donor Names : </h2>

          <div class="row">
    <?php
    include 'conn.php';
    $sql = "SELECT * FROM donor_details JOIN blood ON donor_details.donor_blood = blood.blood_id ORDER BY RAND() LIMIT 6";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $whatsappMessage = "Hello, I am interested in donating blood. Can we arrange a meeting?";
    ?>
            <div class="col-lg-4 col-sm-6 portfolio-item"><br>
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="image\Blood_logo.jpg" alt="Card image" style="width:100%;height:300px">
                    <div class="card-body">
                        <h2 class="card-title" style="text-transform: capitalize;"><?php echo $row['donor_name']; ?></h2>
                        <p class="card-text">
                            <h5 class="font-weight-bold">Blood Group : <span class="text-danger"> <?php echo $row['blood_group']; ?></span></h5>
                            <!-- <h5 class="font-weight-bold">Mobile No. : <span class="text-dark"> <?php echo $row['donor_number']; ?></span></h5> -->
                            <h5 class="font-weight-bold">Gender : <span class="text-dark"> <?php echo $row['donor_gender']; ?></span></h5>
                            <h5 class="font-weight-bold">Age : <span class="text-dark"> <?php echo $row['donor_age']; ?></span></h5>
                            <h5 class="font-weight-bold">City : <span class="text-dark" style="text-transform: capitalize;"> <?php echo $row['donor_address']; ?></span></h5>
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $row['donor_number']; ?>" class="btn btn-success">Contact</a>



                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>

        </section>

        <!-- camp  -->
        <section>
          <h2 class="mt-5">Camp Notice</h2>

          <div class="row">
            <?php
            $count = 1;
            include 'conn.php';
            $sql = "SELECT `camp_id`, `date`, `camp_name`, `address`, `contact`, `conductedby`, `organizedby`, `time` FROM `camp` limit 6";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {

            ?>
              <div class="table-responsive">
                <table class="table table-bordered table-striped" style="text-align:center">
                  <thead style="text-align:center;font-size: 15px;">
                    <th style="text-align:center">S.no</th>
                    <th style="text-align:center">Date</th>
                    <th style="text-align:center">Camp Name</th>
                    <th style="text-align:center">Address</th>
                    <th style="text-align:center">Contact</th>
                    <th style="text-align:center">Conductedby</th>
                    <th style="text-align:center">Organizedby</th>
                    <th style="text-align:center">Time</th>
                  </thead>
                  <tbody style="font-size: 15px;">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['camp_name']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['conductedby']; ?></td>
                        <td><?php echo $row['organizedby']; ?></td>
                        <td><?php echo $row['time']; ?></td>


                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              <?php } ?>
              </div>
          </div>

        </section>

        <!-- Features Section -->
        <section class="mb-5">
          <div class="row mt-5">
            <div class="col-lg-6">
              <h2 class="mb-4">BLOOD GROUPS</h2>
              <h5>
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='bloodgroups'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?></h5>

            </div>
            <div class="col-lg-6">
              <img class="img-fluid rounded" src="image\blood_donationcover.jpeg" alt="">
            </div>
          </div>
        </section>

        <hr>

        <!-- Call to Action Section -->
        <section class="mt-5">
          <div class="row mb-4 align-items-center">
            <div class="col-md-8">
              <h2 class="mb-3">UNIVERSAL DONORS AND RECIPIENTS</h2>
              <h5>
                <?php
                include 'conn.php';
                $sql = $sql = "select * from pages where page_type='universal'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['page_data'];
                  }
                }

                ?></h5>
            </div>
            <div class="col-md-4">
              <a class="btn btn-danger btn-lg btn-block" href="donate_blood.php" style="text-align:center;">
                <p class="py-3 my-0" style="font-size: 16px;">Become a Donor</p>
              </a>
            </div>
          </div>
        </section>
      </div>
      <?php include('footer.php'); ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    
</body>

</html>