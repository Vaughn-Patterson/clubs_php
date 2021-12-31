<?php 
$title = 'View Records';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

$results = $crud->getparticipants();
?>
<table class="table table-dark table-hover">
    <tr> 
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Specialty</th>
        <th>Actions</th>
    </tr>
    <?php 
    while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>    
        <tr>
                <td><?php echo $r['participants_id']?></td>
                <td><?php echo $r['firstname']?></td>
                <td><?php echo $r['lastname']?></td>
                <td><?php echo $r['clubname']?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['participants_id'] ?>" class="btn btn-primary">view</a>
                      <a href="edit.php?id=<?php echo $r['participants_id'] ?>" class="btn btn-warning">Edit</a>
                      <a onclick="return confirm('Are you Sure You Want To delete Record?')" href="delete.php?id=<?php echo $r['participants_id'] ?>" class="btn btn-danger">Delete</a>
               </td>
             </tr>
         <?php }?>
    </table>

<br>
<br>
<br>
<br>
    <?php require_once'includes/footer.php';?>