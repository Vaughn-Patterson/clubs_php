<?php
class crud{
     private $db;

function __construct($conn){
    $this ->db = $conn;

     }

   public  function insertparticipants($fname,$lname,$dob,$home,$gender,$email,$contact,$club,$avatar_path){
        try {
            $sql = "INSERT INTO `participants` (firstname,lastname,dateofbirth,homeaddress,gender,emailaddress,contactnumber,club_id,avatar_path)VALUES(:fname,:lname,:dob,:home,:gender,:email,:contact,:club,:avatar_path)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':home',$home);
            $stmt->bindparam(':gender',$gender);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':club',$club);
            $stmt->bindparam(':avatar_path',$avatar_path);


            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
     }

     public function editparticipants($id, $fname,$lname,$dob,$home,$gender,$email,$contact,$club){
        try{
         $sql = "UPDATE`participants` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`homeaddress`=:home,`gender`=:gender,`emailaddress`=:email,`contactnumber`=:contact,`club_id`=:club WHERE participants_id = :id " ;

         $stmt = $this->db->prepare($sql);
            
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':home',$home);
            $stmt->bindparam(':gender',$gender);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':club',$club);

            $stmt->execute();
            return true;

        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

     }

     public function getparticipants(){
         try{
              $sql = "SELECT * FROM `participants` p inner join `clubs` c on p.club_id = c.club_id";
        $result = $this-> db->query($sql);
        return $result;
         }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
         }
     }


     public function getparticipantsDetails($id){
         try{
        $sql = "SELECT * from `participants` p inner join `clubs` c on p.club_id = c.club_id where participants_id = :id";
        $stmt = $this-> db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(); 
         return $result; 
         }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        
    }

public function deleteparticipants($id){
    try{
        $sql = "DELETE from `participants` where participants_id =:id";
    $stmt = $this-> db->prepare($sql);
    $stmt->bindparam(':id', $id);
    $stmt->execute();
     return true;
    } catch(PDOException $e) {
        echo $e->getMessage();
        return false;
    } 

}
     public function getclubs(){
        try{
        $sql = "SELECT * FROM `clubs`";
        $result = $this-> db->query($sql);
        return $result; 
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
       
    }
   public function getclubsById($id){
        try{
        $sql = "SELECT * FROM `clubs` WHERE club_id = :id";
        $stmt = $this-> db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    } catch(PDOException $e) {
        echo $e->getMessage();
        return false;
    }        
    }
 

}

?>