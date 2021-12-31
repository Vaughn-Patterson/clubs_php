<?php 
$title = 'View Record';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

if(!isset($_GET['id'])){
  
}else{  $id = $_GET['id'];
    $result = $crud->getparticipantsDetails($id);
  

?>
<img src="<?php echo empty($result['avatar_path']) ? "pics/placeholder.jpeg" : $result['avatar_path'] ; ?>" class = "rounded" style = "width:20%; heaght: 20%"/>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo  $result['firstname']. ' '.  $result['lastname'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['clubname'] ?></h6>
    <p class="card-text">Date of Birth: <?php echo  $result['dateofbirth'] ?></p>
    <p class="card-text">Email: <?php echo  $result['emailaddress'] ?></p>
    <p class="card-text">Contact Number: <?php echo  $result['contactnumber'] ?></p>

  </div>
</div>

<a href="viewrecords.php" class="btn btn-info">Back To List</a>
<a href="edit.php?id=<?php echo $result['participants_id'] ?>" class="btn btn-warning">Edit</a>
<a onclick="return confirm('Are you Sure You Want To delete Record?')" href="delete.php?id=<?php echo $result['participants_id'] ?>" class="btn btn-danger">Delete</a>
<?php } ?>

<br>
<br>
<br>
<br>
    <?php require_once'includes/footer.php';?>