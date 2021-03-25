<html>
<head>
    <title>

    </title>

    <link rel="stylesheet" href="assets/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/b0ad0da1eb.js"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
           <img src="assets/logo.png">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item active">
                  <a class="nav-link" class="home" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Apply Now</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Login <font color="#AA0000"><i class="fa fa-user"></i></font></a>
                </li>


              </ul>

            </div>
          </nav>
          </header>
        </div>
    </header>
<div class="head">
    <h2>Loan Application Form</h2>
</div>
<div class="head2">
    <u><h3>Personal Details</h3></u>
</div>
<form action= "{{route('new_loan')}}" method="POST" style="margin-bottom: 20px;">
    @csrf
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Full Name</label>
      <input type="text" name="fname" class="form-control" id="inputEmail4" placeholder="Enter Your Full Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">ID Number</label>
      <input type="text" name="idno"class="form-control" id="inputPassword4" placeholder="Your ID Number">
    </div>
     </div>
     <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">Phone Number</label>
        <input type="text" name="phone" class="form-control" id="inputEmail4" placeholder="+25401234567">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Town</label>
        <input type="text" name="town" class="form-control" id="inputEmail4" placeholder="Enter Town Name">
      </div>
  </div>

  <div class="head3">
     <u> <h3>Loan Details</h3></u>
  </div>
  <div class="form-group">
    <label for="inputAddress">Why do you want the Loan?</label>
    <input type="text" name="reason" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">How Much do you need?</label>
    <input type="text" name="need" class="form-control" id="inputAddress" placeholder="Amount in Kshs.">
  </div>

  <div class="form-group">
    <label for="inputAddress">How long will you take to repay the loan</label>
    <input type="text" name="time" class="form-control" id="inputAddress" placeholder="">
  </div>
  </div>

  <button type="submit"  class="btn btn-danger" id="">Submit</button>
</form>

<footer>
	<div id="foot">
	<div class="footer-content">
		<h3>Alphicons Loans</h3>
		<p>Your financial friend We offer, Fast application. Instant approval decision. Good credit not needed.</p>
		<ul class="socials">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
<div class="footer-bottom">
	<p>copyright &copy;2021 Alphicons.</p>
</footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
</body>
</html>
