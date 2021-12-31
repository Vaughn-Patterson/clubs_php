<?php 
$title = 'Edit';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';
$results = $crud->getclubs();
if(!isset($_GET['id']))
{
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
}
else{
    $id= $_GET['id'];
    $participants = $crud->getparticipantsDetails($id);


?>
    <h1 class="text-center">Update Record</h1>

<form method="post" action="editpost.php">
  <input type="hidden" name="id" value="<?php $participants['participants_id'] ?>" />
    <div class="form-group">
   <label for="FirstName">First Name</label>
   <input type="text" class="form-control" value= "<?php echo $participants['firstname'] ?>" id="first name"name="firstname"  >
 
</div>
<div class="form-group">
  <label for="LastName">Last Name</label>
  <input type="text" class="form-control" value= "<?php echo $participants['lastname'] ?>" id="last name" name="lastname" >
  
</div>
<div class="form-group">
   <label for="DOB">Date Of Birth</label>
  <input type="text" class="form-control" value= "<?php echo $participants['dateofbirth'] ?>" id="dob" name="dob" >

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



<div class="form-group">
<label for="Clubs and Society">Available Clubs</label>
 <select class="form-select" id=" club" name=" club">
   <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)){?>
 <option value="<?php echo $r['club_id'] ?>"<?php if($r['club_id'] == $participants['club_id']) echo 'selected'?>>
    <?php echo $r['clubname']; ?></option>
 <?php } ?>
</select>
</div>

 <div class="form-group">
  <label for="Email">Email address</label>
  <input type="email" class="form-control" value= "<?php echo $participants['emailaddress'] ?>" id="Email" name="email"
  aria-describedlby="emailHelp">
  <small id="emailHelp" class="form-text text-muted"> Your information is protected.</small>
</div>

<div class="form-group">
  <label for="phone">Phone Number</label>
  <input type="text" class="form-control" value= "<?php echo $participants['contactnumber'] ?>" id="phone" name="phone"
  aria-describedlby="phoneHelp">

  <small id="phoneHelp" class="form-text text-muted"> Your information is protected.</small>

</div>
<button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button>
</form>

<?php } ?>

<br>
<br>
<br>
<br>
    <?php require_once'includes/footer.php';?>