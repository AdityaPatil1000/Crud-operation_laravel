<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
<div class="row">
<div class="col">
<form method="post"  action="{{ route('user.store') }}">  
      @csrf
          <div class="form-group">      
              <label for="first_name">First Name:</label><br/><br/>  
              <input type="text" class="form-control" name="first_name"/><br/><br/>  
          </div>  
<div class="form-group">      
<label for="first_name">Last Name:</label><br/><br/>  
              <input type="text" class="form-control" name="last_name"/><br/><br/>  
          </div>  
          </div>
          <div class="col">
<div class="form-group">      
              <label for="gender">Gender:</label><br/><br/>  
              <input type="text" class="form-control" name="gender"/><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="qualifications">Qualifications:</label><br/><br/>  
              <input type="text" class="form-control" name="qualifications"/><br/><br/>  
          </div>  
          </div>
          </div>
<br/>  
<button type="submit" class="btn btn-primary">Insert</button>
 
</form>  
