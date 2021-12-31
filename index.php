<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getparticipants();
?>
    <h1 class="text-center">Registration for Clubs and Society</h1>

<form method="post" enctype="multipart/form-data" action="success.php">
    <div class="form-group">
   <label for="FirstName">First Name</label>
   <input required type="text" class="form-control" id="firstname"name="firstname"  >
 
</div>
<div class="form-group">
  <label for="LastName">Last Name</label>
  <input required type="text" class="form-control" id="lastname" name="lastname" >
  
</div>
<div class="form-group">
   <label for="DOB">Date Of Birth</label>
  <input type="text" class="form-control" id="dob" name="dob" >

  <br>
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Street</span>
  <input type="text" class="form-control" placeholder="address" aria-label="address" aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">City</span>
  <input type="text" class="form-control" placeholder="address" aria-label="address" aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Parish</span>
  <input type="text" class="form-control" placeholder="address" aria-label="address" aria-describedby="basic-addon1">
  </div>

<div class="form-group">
  <label for="gender">Gender</label>
  <input required type="text" class="form-control" maxlength="6" id="gender" name="gender" >


</div>
<div class="form-group">
<label for="Clubs and Society">Available Clubs</label>
 <select class="form-select" id="club" name="club">
   <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)){?>
 <option value="<?php echo $r['club_id'] ?>"><?php echo $r['clubname']; ?></option>
 <?php } ?>
</select>
</div>

 <div class="form-group">
  <label for="Email">Email address</label>
  <input required type="email" class="form-control" id="Email" name="email"
  aria-describedlby="emailHelp">
  <small id="emailHelp" class="form-text text-muted"> Your information is protected.</small>
</div>

<div class="form-group">
  <label for="phone">Phone Number</label>
  <input type="text" class="form-control" id="phone" name="phone"
  aria-describedlby="phoneHelp">
  <small id="phoneHelp" class="form-text text-muted">Your information is protected.</small>
</div>


<div class="custom-file">
  
  <input type="file" accept= "image/* "class="custom-file-input" id="avatar" name="avatar">
  <label class="custom-file-label" for= "avatar"></label>
  <small id="avatar" class="form-text text-primary"> Attaching an image is Optional</small>
  
</div>



<button type="Submit" name="submit" class="btn btn-primary btn-block">submit</button>
</form>

<br>
<br>
    <?php require_once 'includes/footer.php';?>