<?php
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $home = $_POST['home'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $club = $_POST['club'];


    $result = $crud-> editparticipants($id, $fname,$lname,$dob,$home,$gender,$email,$contact,$club);

    if($result){
        header("Location: viewrecords.php");
    }
    else{
        include 'includes/errormessage.php';
    }
}

else {
    include 'includes/errormessage.php';  echo 'error';

} 





?>