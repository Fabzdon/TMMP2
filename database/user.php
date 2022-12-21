<?php

class user 
{

    //private database object
  private $database;

  //constructor to initialise private variable
  function __construct($conn)
  {
    $this->database = $conn;

  }

  public function insertUser ($username, $password)
  {
    
    try
    {
        $result = $this->getUSerByUsername($username);
        if($result['num'] > 0){
            return false;
        }
        else
        {
        $new_password = md5($password.$username);
        $sql = "INSERT INTO user (username,password) VALUES (:username, :password)";
        $statement = $this->database->prepare($sql);

        $statement->bindparam(':username', $username);
        $statement->bindparam(':password', $new_password);
       


        $statement->execute();
        return true;

        }


    }
    catch(PDOException $e)
    {

        echo $e->getMessage();
        //throw $e;
        return false;

    }
}

public function getUserDetails($username, $password)
  {
    try{
    $sql = "select * from user  where username = :username AND password = :password";
    $stmt = $this->database->prepare($sql);
    $stmt->bindparam(':username',$username);
    $stmt->bindparam(':password',$password);

     $stmt->execute();
     $result = $stmt->fetch();
     return $result;
    }
    catch (PDOException $e){

      echo $e->getMessage();
      return false;
    
    }
  }

  public function deleteUser($id){


    try
    {

    $sql = "delete from user where id = :id";
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
  public function getUSerByUsername($username){
    
    try{
        $sql = "select count(*) as num  from user where username = :username";
        $stmt = $this->database->prepare($sql);
        $stmt->bindparam(':username',$username);
      
    
         $stmt->execute();
         $result = $stmt->fetch();
         return $result;
        }
        catch (PDOException $e){
    
          echo $e->getMessage();
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

public function getUserById($id)
  {
    try{
    $sql = "SELECT * FROM `user` where id = :id";
    $stmt = $this->database->prepare($sql);
    $stmt->bindparam(':id',$id);
    $result = $this->database->query($sql);
    return $result;
  }
  catch (PDOException $e)
  {

    echo $e->getMessage();
    return false;
  
  }
}
}

?>