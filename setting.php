<?php include "header_login.php";?>
<style>
  .btn_setting{
    margin-top: 10px;
  }
</style>
<body>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Paramètre du Compte</h1>
      <h3>Change Password</h3>
      <p>Old Password</p>
      <input type="text" class="form-control"/>
      <p>New Password</p>
      <input type="text" class="form-control"/>
      <p>Repeat Password</p>
      <input type="text" class="form-control"/>
      <div class="btn_setting">
       <a href="#ChangePassword" class="btn btn-success" role="button">Confirm</a>
     </div>
     <hr>
     <h3>Change Email</h3>
     <p>Old Email</p>
      <input type="text" class="form-control"/>
      <p>New Email</p>
      <input type="text" class="form-control"/>
      <p>Repeat Email</p>
      <input type="text" class="form-control"/>
      <div class="btn_setting">
        <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Confirm</button>
         <div id="loginModal" class="modal fade" role="dialog">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Login</h4>  
                </div>  
                <div class="modal-body">  
                     <label>Username</label>  
                     <input type="text" name="username" id="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" id="password" class="form-control" />  
                     <br />  
                     <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                </div>  
           </div>  
      </div>
      </div>
     
    </div>
  </div>
</div>

<?php include "footer.php";?>









</body>
<?php include "footer.php"; ?>