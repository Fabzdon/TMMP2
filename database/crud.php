<?php

class crud
{

    //private database object
  private $database;

  //constructor to initialise private variable
  function __construct($conn)
  {
    $this->database = $conn;

  }

  public function insert ($fname, $lname, $email, $contactnum, $gender, $address, $avatar_path, $plantypeid)
  {
    

    try
    {
        $sql = "INSERT INTO planmembers (firstname, lastname, email, contactnumber, gender, address, avatar_path, plantype_id ) VALUES (:fname, :lname, :email, :contactnum, :gender, :address1, :avatar_path, :plantypeid )";
        $statement = $this->database->prepare($sql);

        $statement->bindparam(':fname', $fname);
        $statement->bindparam(':lname', $lname);
        $statement->bindparam(':email', $email);
        $statement->bindparam(':contactnum', $contactnum);
        $statement->bindparam(':gender', $gender);
        $statement->bindparam(':address1', $address);
        $statement->bindparam(':avatar_path', $avatar_path);
        $statement->bindparam(':plantypeid', $plantypeid);





        $statement->execute();
        return true;




    }
    catch(PDOException $e)
    {

        echo $e->getMessage();
        //throw $e;
        return false;

    }


    


  }

  public function getPlanMembers()
  {
    try{
    $sql = "SELECT * FROM `planmembers` a inner join plan_type p on a.plantype_id = p.plantype_id";
    $result = $this->database->query($sql);
    return $result;
  }
  catch (PDOException $e)
  {

    echo $e->getMessage();
    return false;
  
  }
}

public function getUsers()
  {
    try{
    $sql = "SELECT * FROM `user` ";
    $result = $this->database->query($sql);
    return $result;
  }
  catch (PDOException $e)
  {

    echo $e->getMessage();
    return false;
  
  }
}



  public function getPlanTypes(){
    try
    {
    $sql = "SELECT * FROM `plan_type`";
    $result = $this->database->query($sql);
    return $result;
    }
    catch (PDOException $e){

      echo $e->getMessage();
      return false;
    
    }
  }

  public function getMemberDetails($id)
  {
    try
    {
    $sql = "select * from `planmembers` a inner join plan_type p on a.plantype_id = p.plantype_id where id = :id";
    $stmt = $this->database->prepare($sql);
    $stmt->bindparam(':id',$id);
     $stmt->execute();
     $result = $stmt->fetch();
     return $result;
    }
    catch (PDOException $e){

      echo $e->getMessage();
      return false;
    
    }
  }
  public function getUserDetails($id)
  {
    try
    {
    $sql = "select * from `user` where id = :id ";
    $stmt = $this->database->prepare($sql);
    $stmt->bindparam(':id',$id);
     $stmt->execute();
     $result = $stmt->fetch();
     return $result;
    }
    catch (PDOException $e){

      echo $e->getMessage();
      return false;
    
    }
  }

  public function getPlanName($id)
  {
    try
    {
    $sql = "select * from planmembers a inner join plan_type p on a.plantype_id = p.plantype_id where id = :id";

    $stmt = $this->database->prepare($sql);
    $stmt->bindparam(':id',$id);
     $stmt->execute();
     $result = $stmt->fetch();
     return $result;
    }
    catch (PDOException $e){

      echo $e->getMessage();
      return false;
    
    }
  }

  public function deleteMember($id){


    try
    {

    $sql = "delete from planmembers where id = :id";
    $stmt = $this->database->prepare($sql);
    $stmt->bindparam(':id',$id);
    $stmt->execute();
    return true;
  }
  catch (PDOException $e){

    echo $e->getMessage();
    return false;

  }
    
  }

  public function editMember($id, $fname, $lname, $contactnum, $gender, $address, $plantypeid){

    try{
      $sql = "UPDATE `planmembers` SET `firstname`= :fname,`lastname`=:lname,`contactnumber`=
      :contactnum,`gender`= :gender,`address`= :address1,`plantype_id`= :plantypeid1 WHERE id = :id ";

       $statement = $this->database->prepare($sql);
       $statement->bindparam(':id', $id);
  
       $statement->bindparam(':fname', $fname);
       $statement->bindparam(':lname', $lname);
       $statement->bindparam(':contactnum', $contactnum);
       $statement->bindparam(':gender', $gender);
       $statement->bindparam(':address1', $address);
       $statement->bindparam(':plantypeid1', $plantypeid);
  
  
       $statement->execute();
       return true;

    }
    catch(PDOException $e)
    {

        echo $e->getMessage();
        //throw $e;
        return false;

    }

  }
  public function editUser($id, $username, $password){

    try{
      $sql = "UPDATE `user` SET `username`= :user_name,`password`=:pass_word WHERE id = :id ";

       $statement = $this->database->prepare($sql);
       $statement->bindparam(':id', $id);
  
       $statement->bindparam(':user_name', $username);
       $statement->bindparam(':pass_word', $password);
       
  
       $statement->execute();
       return true;

    }
    catch(PDOException $e)
    {

        echo $e->getMessage();
        //throw $e;
        return false;

    }

  }
  public function getSpecialtiesById($id){
    try
    {
    $sql = "SELECT * FROM `specialties` where specialty_id = :id";
    $stmt = $this->database->prepare($sql);
    $stmt->bindparam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
    }
    catch (PDOException $e)
    {

      echo $e->getMessage();
      return false;
    
    }
  }


  };

?>