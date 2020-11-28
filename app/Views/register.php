<header>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.js"></script>


</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">RANG-RANG CELL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/produk">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Home">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>

<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-transparent mb-0">
            <h5 class="text">
              <span class="font-weight-bold text">REGISTER</span></h5>
          </div>
          <div class="card-body">
            <form action="">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="username" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm password</label>
                <input type="ConfirmPassword" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm password">
              </div>
              <div class="form-group">
                <input type="submit" name="" value="Register" class="btn btn-dark btn-block">
              </div>
          </div>
          <a href="Home" class="text-center">Already have account</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>