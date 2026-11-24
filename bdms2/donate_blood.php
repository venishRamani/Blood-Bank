<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    button:hover {
      box-shadow: none !important;
    }
  </style>
</head>

<body>
  <?php
  $active = 'donate';
  include('head.php') ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:50px;">
        <div class="row">
          <div class="col-lg-12 text-center text-danger">
            <h1 class="mt-4 mb-4">Donate Blood</h1>
          </div>
        </div>
        <form name="donor" action="savedata.php" method="post">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-4">
                <label for="fullname" class="font-italic">Full Name<span style="color:red">*</span></label>
                <input type="text" id="fullname" name="fullname" class="form-control" required>
              </div>
              <div class="col-lg-6 mb-4">
                <label for="mobileno" class="font-italic">Mobile Number<span style="color:red">*</span></label>
                <input type="tel" id="mobileno" name="mobileno" pattern="[0-9]{10}" class="form-control" required>
              </div>
              <div class="col-lg-6 mb-4">
                <label for="emailid" class="font-italic">Email Id</label>
                <input type="email" id="emailid" name="emailid" class="form-control">
              </div>
              <div class="col-lg-6 mb-4">
                <label for="age" class="font-italic">Age<span style="color:red">*</span></label>
                <input type="number" id="age" name="age" class="form-control" min="19" required>
              </div>
              <div class="col-lg-6 mb-4">
                <label for="gender" class="font-italic">Gender<span style="color:red">*</span></label>
                <select id="gender" name="gender" class="form-control" required>
                  <option value="">Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-lg-6 mb-4">
                <label for="blood" class="font-italic">Blood Group<span style="color:red">*</span></label>
                <select id="blood" name="blood" class="form-control" required>
                  <option value="" selected disabled>Select</option>
                  <?php
                  include 'conn.php';
                  $sql = "select * from blood";
                  $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['blood_id'] . '">' . $row['blood_group'] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="col-lg-12 mb-4">
                <label for="address" class="font-italic">Address<span style="color:red">*</span></label>
                <textarea id="address" class="form-control" name="address" required></textarea>
              </div>
              <div class="col-lg-12 mb-4 text-center">
                <!-- <input type="submit" name="submit" class="btn btn-primary" value="Submit"> -->
                <button type="submit" name="submit" class="btn btn-primary mb-4 py-2" style="font-size: 16px;" value="Submit">Submit</button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
    <?php include('footer.php') ?>
  </div>
</body>


</html>