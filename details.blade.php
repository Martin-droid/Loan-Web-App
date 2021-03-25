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
                  <a class="nav-link" href="#">LogOut <font color="#AA0000"><i class="fa fa-lock"></i></font></a>
                </li>


              </ul>

            </div>
          </nav>
          </header>
        </div>
    </header>
<div class="head">
    <h2>Customer Details</h2>
</div>

<form action= "{{route('new_details')}}" method="POST" style="margin-bottom: 20px;">
    @csrf
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" name="fname" class="form-control" id="inputEmail4" placeholder="Enter Your Full Name">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Last Name</label>
        <input type="text" name="lname" class="form-control" id="inputEmail4" placeholder="Enter Your Full Name">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">ID Number</label>
      <input type="text" name="idno" class="form-control" id="inputPassword4" placeholder="Your ID Number">
    </div>


    <div class="form-group col-md-6">
        <label for="inputEmail4">Phone Number</label>
        <input type="text" name="phone" class="form-control" id="inputEmail4" placeholder="+25401234567">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Estate</label>
        <input type="text" name="estate" class="form-control" id="inputEmail4" placeholder="Enter Estate Name">
      </div>


      <div class="form-group col-md-6">
        <label for="inputEmail4">City</label>
        <input type="text" name="city" class="form-control" id="inputEmail4" placeholder="Enter Town Name">
      </div>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputEmail4">County</label>
    <input type="text" name="county" class="form-control" id="inputEmail4" placeholder="Enter County Name">
  </div>

<div class="form-group col-md-6">
    <label for="inputEmail4">Country</label>
    <input type="text" name="country" class="form-control" id="inputEmail4" placeholder="Enter Country Name">
  </div>
</div>


<h3>Guarantor Details</h3>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" name="firstname" class="form-control" id="inputEmail4" placeholder="Enter Your Full Name">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Last Name</label>
        <input type="text" name="lastname" class="form-control" id="inputEmail4" placeholder="Enter Your Last Name">
      </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">ID Number</label>
          <input type="text" name="idnumber" class="form-control" id="inputEmail4" placeholder="Enter Your ID Number">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Phone Number</label>
            <input type="text" name="number" class="form-control" id="inputEmail4" placeholder="Enter Phone Number">
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
