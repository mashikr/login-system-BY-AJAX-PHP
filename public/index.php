<?php require_once 'include/header.php'; ?>
<div class="form-area">
    <div class="row h-100 justify-content-end">
      <div class="col-7 col-sm-6 col-md-4 col-lg-3 m-5 d-flex justify-content-center">
      <div id="registration-info"></div>

      <div class="card border-0 align-self-end mb-5" id="signin-div">
          <div class="card-header text-light text-center"><h5>Sign in <i class="fas fa-lock"></i></h5></div>
          <div class="card-body">
            <form id="signin-form">
              <div class="form-group">
                <input type="text" name="email" id="signin-email" class="form-control" placeholder="Enter email">
                <div id="email-msg-in"></div>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="signin-password" placeholder="Enter password">
                <div id="password-msg-in"></div>
              </div>
              <input type="button" class="btn btn-success btn-block" id="signin-btn" value="Login">
            </form>
            <div class="text-center mt-2">
            <a href="#" id="signin-alt">Create an account?</a>
            </div>
          </div>
        </div>

        <div class="card border-0 align-self-end mb-5" id="signup-div">
          <div class="card-header text-light text-center"><h5>Create an account <i class="fas fa-user-plus"></i></h5></div>
          <div class="card-body">
            <form id="signup-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="signup-name" placeholder="Enter name">
                <div id="name-msg"></div>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" id="signup-email" placeholder="Enter email">
                <div id="email-msg"></div>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="signup-password" placeholder="Enter password">
                <div id="password-msg"></div>
              </div>
              <div class="form-group">
                <input type="password" name="confirm_password" class="form-control" id="signup-confirm-password" placeholder="Enter confirm password">
                <div id="confirm_password-msg"></div>
              </div>
              <input type="button" class="btn btn-success btn-block" id="signup-btn" value="Sign up">
            </form>
            <div class="text-center mt-2">
            <a href="#" id="signup-alt">Already have an account?</a>
            </div>
          </div>
        </div>

        


      </div>
    </div>
</div>
<div class="video-area">
  <video muted autoplay loop>
      <source src="img/bg-video.mp4" type="video/mp4">
  </video>
</div>


<?php require_once 'include/footer.php'; ?>
    
 
