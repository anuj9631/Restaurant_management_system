<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registermodal">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/Isoeh_project/partials/_handleregister.php" method="post">
    <div class="form-group">
    <label for="regemail">Email address</label>
    <input type="email" class="form-control" id="regemail" aria-describedby="emailHelp" name="regemail">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     </div>
    <div class="form-group">
    <label for="regpassword">Password</label>
    <input type="password" class="form-control" id="regpassword" name="regpassword">
    </div>
    <div class="form-group">
    <label for="regcpassword">Confirm Password</label>
    <input type="password" class="form-control" id="regcpassword" name="regcpassword">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
     
    </div>
  </div>
</div>