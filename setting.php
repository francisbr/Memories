<?php include "includes/header_login.php";?>
<?php include "styles/modals.php";?>
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
       <button id="myBtn">Confirm</button>
     </div>
     <div id="myModal" class="modal">
       <div class="modal-content">
         <span class="close">&times</span>
         <p>Password has been changed</p>
       </div>
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
        <button id="myBtn">Confirm</button>
      </div>
      <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times</span>
          <p>Email has been changed</p>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
<?php include "includes/footer.php"; ?>