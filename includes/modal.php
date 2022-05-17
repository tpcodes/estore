
<div class="modal  fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="font-size: 25px; background-color:#9F000F; color:white;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center" id="myModalLabel"><strong>LOGIN</strong></h3>
      </div>
      <div class="modal-body">
          <form method="POST" action="login_submit.php" id="login">
            <div  class="form-group">
              Don't have an account?<a href="signup.php"><span style="color:blue;"> Register</span></a>
            </div>  
              <div class="form-group">
              <div class="input-group">
                        <div class="input-group-addon" style="background-color:#3BB9FF; color:white;">
                        <span class="glyphicon glyphicon-user"></span>
                        </div>
                <input type="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">    
              </div>
              </div>
              <div class="form-group">
              <div class="input-group">
                        <div class="input-group-addon" style="background-color:#3BB9FF; color:white;">
                        <span class="glyphicon glyphicon-pencil"></span>
                        </div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="true" pattern=".{6,}">  
              </div>
              </div>
                <button type="submit" name="submit" class="btn btn-block btn-primary" style="border-radius :25px; background-color:#f9a602; border:none;">Login</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

