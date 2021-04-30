<?php
class User{
    private $db;
 public function __construct()
 {
     $this->db=new Database;
 }//FirstName /LastName/Email/Phone/Sex/ProfilePic/Password/Adress/DrivingLic/DNS
 //Register user
 public function addfeedback($data){

$this->db->query('INSERT INTO feedback (subject,message,user_id )VALUES (:subject,:message,:user_id ) ');
 $this->db->bind(':subject',$data['subject']);
    $this->db->bind(':message',$data['message']);
    $this->db->bind(':user_id',$_SESSION['user_id']);
    if($this->db->execute()){
        return true;
     }else {
         return false ;
     }

 }
 public function update($data){
    $this->db->query('UPDATE users  SET FirstName=:FirstName,LastName=:LastName,Email=:Email,Phone=:Phone,Sex=:Sex,Password=:Password,Adress=:Adress,DrivingLic=:DrivingLic,DNS=:DNS,Profile_Pic=:Profile_Pic WHERE id=:id_user');
     //binding values 
     $this->db->bind(':FirstName',$data['FirstName']);
     $this->db->bind(':LastName',$data['LastName']);
     $this->db->bind(':Email',$data['Email']);
     $this->db->bind(':Phone',$data['Phone']);
     $this->db->bind(':Sex',$data['Sex']);
     //$this->db->bind(':ProfilePic',$data['ProfilePic']);
     $this->db->bind(':Password',$data['Password']);
     $this->db->bind(':Adress',$data['Adress']);
     $this->db->bind(':DrivingLic',$data['DrivingLic']);
     $this->db->bind(':DNS',$data['DNS']);
     $this->db->bind(':Profile_Pic',$data['Profile_Pic']);
     $this->db->bind(':id_user',$_SESSION['user_id']);
     
     if($this->db->execute()){
        return true;
     }else {
         return false ;
     }
 }

 public function register($data){
     $this->db->query('INSERT INTO users (FirstName,LastName,Email,Phone,Sex,Password,Adress,DrivingLic,DNS,Profile_Pic,score,status) VALUES(:FirstName,:LastName,:Email,:Phone,:Sex,:Password,:Adress,:DrivingLic,:DNS,:Profile_Pic,:score,:status)');
     //binding values 
     $this->db->bind(':FirstName',$data['FirstName']);
     $this->db->bind(':LastName',$data['LastName']);
     $this->db->bind(':Email',$data['Email']);
     $this->db->bind(':Phone',$data['Phone']);
     $this->db->bind(':Sex',$data['Sex']);
     //$this->db->bind(':ProfilePic',$data['ProfilePic']);
     $this->db->bind(':Password',$data['Password']);
     $this->db->bind(':Adress',$data['Adress']);
     $this->db->bind(':DrivingLic',$data['DrivingLic']);
     $this->db->bind(':DNS',$data['DNS']);
     $this->db->bind(':Profile_Pic',$data['Profile_Pic']);
    $this->db->bind(':score','0');
    $this->db->bind(':status','BEGINNER');

     //execute 
     if($this->db->execute()){
        return true;
     }else {
         return false ;
     }
 }
//login user
 public function loginA($Email,$Password){
    $this->db->query('SELECT * FROM admin WHERE Email= :Email and ');
    $this->db->bind(':Email', $Email);

    $row =$this->db->single();
    $hashed_password = $row->Password;
    if (password_verify($Password,$hashed_password )){
        return $row;
    }else{
        return false ;
    }
} 
public function getUsers(){
    $this->db->query('SELECT * 
    FROM users     ');
    $results=$this->db->resultSet();

    return $results;

}
public function getFeedback(){
$this->db->query('SELECT * ,
    feedback.id as feedbackid,
    users.id as userid
    FROM feedback 
    INNER JOIN users 
    ON feedback.user_id=users.id
    ');
    $results=$this->db->resultSet();

    return $results;



}
public function login($Email,$Password){
    $this->db->query('SELECT * FROM users WHERE Email= :Email');
    $this->db->bind(':Email', $Email);

    $row =$this->db->single();
    $hashed_password = $row->Password;
    if (password_verify($Password,$hashed_password )){
        return $row;
    }else{
        return false ;
    }
} 
public function deleteUser($id){
$this->db->query('DELETE FROM users WHERE id=:id');
$this->db->bind(':id',$id);
if($this->db->execute()){
    return true;
 }else {
     return false ;
 }


}
//find user by id
public function findUserByID($id){
    $this->db->query('SELECT * FROM users WHERE id= :id ');
     $this->db->bind(':id',$id);
     $row=$this->db->single();
      //check row 
    if($this->db->rowCount() >0){
        return true;
    }else {
        return false;
    } 
}
//find user by phone number
public function findUserByPhone($Phone){
    $this->db->query('SELECT * FROM users WHERE Phone= :Phone ');
     $this->db->bind(':Phone',$Phone);
     $row=$this->db->single();
      //check row 
    if($this->db->rowCount() >0){
        return true;
    }else {
        return false;
    } 
}
 //find user by email
 public function findUserByEmail($Email){
     $this->db->query('SELECT * FROM users WHERE Email= :email ');
     $this->db->bind(':email',$Email);
    $row=$this->db->single();

    //check row 
    if($this->db->rowCount() >0){
        return true;
    }else {
        return false;
    } 
 }
}
