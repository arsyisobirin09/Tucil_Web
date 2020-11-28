<?= $this->include('template/header'); ?>
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header bg-transparent mb-0">
          <h5 class="text">
            <span class="font-weight-bold text">LOGIN</span></h5>
        </div>
        <div class="card-body">
          <form action="">
            <div class="form-group">
              <label for="exampleInputEmail1">Email or username</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <a type="submit" name="" value="Login" class="btn btn-dark btn-block" href="Dashboard">Login</a>
            </div>
        </div>
        <a href="Admin" class="text-center">Login as admin</a>

        <a href="Register" class="text-center">Register a new account</a>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->include('template/footer'); ?>