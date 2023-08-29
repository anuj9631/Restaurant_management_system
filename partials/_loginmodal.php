<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">
  Launch demo modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginmodal">Login</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/Isoeh_project/partials/_handlelogin.php" method="post"> 
        <div class="mb-3">
          <label for="loginemail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="loginemail" aria-describedby="loginemail" name="loginemail">
          
        </div>
        <div class="mb-3">
          <label for="loginpassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="loginpassword" name="loginpassword">
          <div id="loginpassword" class="form-text">We'll never share your password with anyone else.</div>
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
     
    </div>
  </div>
</div>
