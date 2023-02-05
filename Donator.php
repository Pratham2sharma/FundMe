<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CrowdFunding</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!----CSS BootStrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91-97867867565</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <img src="admin/assets/img/logo.png" alt="Logo" width="100" height="100" style="margin-bottom: -50px;">
        <br>
        <br>
        
        <h1 class="text-light"><a href="index.html">CrowdFunding</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="campaign-list.html">List of Campaign</a></li>
          <li><a href="Donator.php">Add Your Campaign</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="#">/</a></li>
          <li><a href="Register.php">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <h1 style="margin-top: 20px; text-align: center;">Add Your Campaign</h1>
  <form action="newCampaign.php" method="post" class="row g-3" style="border: 2px solid black; margin-top: 20px; margin-left: 20px; margin-right: 20px; background-color: rgb(144, 214, 190);">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label" style="font-weight: bold; font-family: sans-serif;">Email</label>
      <input type="email" class="form-control" id="Email">
    </div>
    <div class="col-md-6">
      <label for="text" class="form-label" style="font-weight: bold; font-family: sans-serif;">Full Name</label>
      <input type="text" class="form-control" id="FullName">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label" style="font-weight: bold; font-family: sans-serif;">Address</label>
      <input type="text" class="form-control" id="Address1" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label" style="font-weight: bold; font-family: sans-serif;">Address 2</label>
      <input type="text" class="form-control" id="Address2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label" style="font-weight: bold; font-family: sans-serif;">City</label>
      <input type="text" class="form-control" id="City">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label" style="font-weight: bold; font-family: sans-serif;">State</label>
      <select id="States" class="form-select">
        <option selected>Choose...</option>
        <option>Gujarat</option>
        <option>Goa</option>
        <option>Uttar Pradesh</option>
        <option>Karnataka</option>
        <option>Madhya Pradesh</option>
        <option>Bihar</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label" style="font-weight: bold; font-family: sans-serif;" >Zip</label>
      <input type="text" class="form-control" id="Zip">
    </div>
    <div class="col-12">
        <div class="col-12">
            <label for="description" class="form-label" style="font-weight: bold; font-family: sans-serif;">Description</label>
            <textArea class="form-control" id="description1" placeholder="Problem you want To solve with Donations"></textArea>
        </div>
        <br>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01" style="font-weight: bold;" >Upload Documents</label>
            <input type="file" class="form-control" id="documents">
          </div>
          
          <br>
      <div class="submit" style="text-align: center; margin-bottom: 10px;">
        <button onclick="myFunction()" type="button" id="Submitbtn"  class="btn btn-primary">Submit</button>
        </label>
      </div>


    </div>

  </form>

  <script>
    function myFunction(){
        alert("Your Request Is Submitted, We Will update you after Verification of Your campaign is Done.")
        window.location = 'index.php';
    }
  </script>

</body>
</html>

