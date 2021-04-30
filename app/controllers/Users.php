<?php 
class Users extends Controller{

public function __construct(){
    $this->userModel=$this->model('User');

}
public function check(){
   $info= $this->userModel->findUserByID($_SESSION['user_id']);
}


public function update(){

if($_SERVER['REQUEST_METHOD']=='POST'){
        //Process form
           
        
        //sanitize POST data
         //FirstName /LastName/Email/Phone/Sex/ProfilePic/Password/Adress/DrivingLic/DNS
        $_POST =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        //pic 


        $data=[
            'FirstName'=>trim($_POST['FirstName']),
            'LastName'=>trim($_POST['LastName']),
            'Email'=>trim($_POST['Email']),
            'Phone'=>trim($_POST['Phone']),
            'Sex'=>$_POST['Sex'],
            //'ProfilePic'=>trim($_POST['ProfilePic']),
            'Password'=>trim($_POST['Password']),
            'confirm_password' =>trim($_POST['confirm_password']),
            'Adress'=>trim($_POST['Adress']),
            'DrivingLic'=>trim($_POST['DrivingLic']),
            'DNS'=>trim($_POST['DNS']),
            'Profile_Pic'=>'pic.jpg',
            
            'FirstName_err'=>'',
            'LastName_err'=>'',
            'Email_err'=>'',
            'Sex_err'=>'',
            'Phone_err'=>'',
            'Password_err'=>'',
            'confirm_password_err'=>'',
            'Adress_err'=>'',
            'DNS_err'=>''

            
            ];
         

    
//recupération du fichier type file
if(!empty($_FILES['Profile_Pic']['tmp_name'][0])){
 
//modifier le nom du fichier
$tabphoto=explode('.',strval($_FILES['Profile_Pic']['name'][0]));
$ext=$tabphoto[sizeof($tabphoto)-1];
$Profile_Pic="User_".random_int(0,900).'.'.$ext;
$data['Profile_Pic']=$Profile_Pic;
print_r($_FILES['Profile_Pic']['tmp_name'][0]); //die();
copy($_FILES['Profile_Pic']['tmp_name'][0],"../public/images/avatars/".$Profile_Pic); 


}
if($data['Password']== $data['confirm_password']){
                $data['Password']=password_hash($data['Password'],PASSWORD_DEFAULT);
            }
            else{
                echo "<script>
alert('Password Error');

</script>";
            }

       
        
            if($this->userModel->update($data)){
                session_destroy();
                
                 echo "<script>
alert('Your account was updated successfully');
window.location.href='login';
</script>";
            }else{
                //load view with errors
                die('Something went wrong');
            }
       
       
    }

}
public function register(){

   //check for post
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Process form
           
        
        //sanitize POST data
         //FirstName /LastName/Email/Phone/Sex/ProfilePic/Password/Adress/DrivingLic/DNS
        $_POST =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        //pic 


        $data=[
            'FirstName'=>trim($_POST['FirstName']),
            'LastName'=>trim($_POST['LastName']),
            'Email'=>trim($_POST['Email']),
            'Phone'=>trim($_POST['Phone']),
            'Sex'=>$_POST['Sex'],
            //'ProfilePic'=>trim($_POST['ProfilePic']),
            'Password'=>trim($_POST['Password']),
            'confirm_password' =>trim($_POST['confirm_password']),
            'Adress'=>trim($_POST['Adress']),
            'DrivingLic'=>trim($_POST['DrivingLic']),
            'DNS'=>trim($_POST['DNS']),
            'Profile_Pic'=>'pic.jpg',
            'score'=>'',
            'status'=>'',
            'FirstName_err'=>'',
            'LastName_err'=>'',
            'Email_err'=>'',
            'Sex_err'=>'',
            'Phone_err'=>'',
            'Password_err'=>'',
            'confirm_password_err'=>'',
            'Adress_err'=>'',
            'DNS_err'=>''

            
            ];
         
  
    
//recupération du fichier type file
if(!empty($_FILES['Profile_Pic']['tmp_name'][0])&& !empty($_FILES['Profile_Pic']['tmp_name'][0])){
 
//modifier le nom du fichier
$tabphoto=explode('.',strval($_FILES['Profile_Pic']['name'][0]));
$ext=$tabphoto[sizeof($tabphoto)-1];
$Profile_Pic="User_".random_int(0,900).'.'.$ext;
$data['Profile_Pic']=$Profile_Pic;
print_r($_FILES['Profile_Pic']['tmp_name'][0]); //die();
copy($_FILES['Profile_Pic']['tmp_name'][0],"../public/images/avatars/".$Profile_Pic); 


}

        // validate email
        if(empty($data['Email'])){
            $data['Email_err']='Please enter email';
        }else {
            //check email
            if($this->userModel->findUserByEmail($data['Email'])){
                $data['Email_err']='Email is already used'; 
            }
        }
        
        //validate name
        if(empty($data['FirstName'])){
            
            $data['FirstName_err']='Please enter first name';
        }
        if(empty($data['LastName'])){
            $data['LastName_err']='Please enter last  name';
        }
        if(empty($data['Phone'])){
            $data['Phone_err']='Please enter phone number';
            } else {
                //check email
                if($this->userModel->findUserByPhone($data['Phone'])){
                    $data['Phone_err']='Phone is already used'; 
                }
            }
        if(empty($data['Password'])){
            $data['Password_err']='Please enter password';
        }elseif(strlen($data['Password'])<6){
            $data['Password_err']='Password must be at least 6 charachters';
        }
        if(empty($data['confirm_password'])){
            $data['confirm_password_err']='Please confirm your password';
        }else{
            if($data['Password']!= $data['confirm_password']){
                $data['confirm_password_err']='passwords do not match';
            }
        }
        if(empty($data['Adress'])){
            $data['Adress_err']='Please enter adress';
        }
        if(empty($data['Sex'])){
            $data['Sex_err']='Please enter sex';
        }
        if(empty($data['DNS'])){
            $data['DNS_err']='Please enter date of birth';
        }  //FirstName /LastName/Email/Phone/Sex/ProfilePic/Password/Adress/DrivingLic/DNS
        //make sure errors are empty
        if(empty($data['Email_err'])&&empty($data['FirstName_err'])&&empty($data['Sex_err']) &&empty($data['LastName_err']) &&empty($data['Phone_err']) && empty($data['DNS_err']) && empty($data['Adress_err']) && empty($data['Password_err']) && empty($data['confirm_password_err'])){
            //hach the password 
            $data['Password']=password_hash($data['Password'],PASSWORD_DEFAULT);
            // Register user
            if($this->userModel->register($data)){
                flash('register_success','You are registred and can log in');
                redirect('/users/login');
            }else{
                //load view with errors
                die('Something went wrong');
            }
       
        }else{
            //Load view with errors
            $this->view('users/register',$data);
        }

    }else{
       //init data
       //FirstName /LastName/Email/Phone/Sex/ProfilePic/Password/Adress/DrivingLic/DNS
       $data=[
       'FirstName'=>'',
       'LastName'=>'',
       'Email'=>'',
       'Phone'=>'',
       'Sex'=>'',
       'ProfilePic'=>'',
       'Password'=>'',
       'confirm_password'=>'',
       'Adress'=>'',
       'DrivingLic'=>'',
       'DNS'=>'',
       'FirstName_err'=>'',
       'LastName_err'=>'',
       'Email_err'=>'',
       'Sex_err'=>'',
       'Phone_err'=>'',
       'Password_err'=>'',
       'confirm_password_err'=>'',
       'Adress_err'=>'',
       'DNS_err'=>''
       ];
       //load views 
       $this->view('users/register',$data);
    }
}
public function profile(){
     
    $this->view('users/profile',$data);
}
public function edit(){
    $this->view('users/edit');
}
public function feedback(){
    $this->view('users/feedback');
    if($_SERVER['REQUEST_METHOD']=='POST'){
         //Process form
         //sanitize POST data
        $_POST =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        
        $data=[
            'subject'=>trim($_POST['subject']),
            'message'=>trim($_POST['message']),
            
        ];
        if ($this->userModel->addfeedback($data)){
                
                
                echo "<script>
alert('Feedback Added with success');
window.location.href='../rides/index';
</script>";
            }else {die("something went wrong");}}
}

public function login(){
    //check for post
     if($_SERVER['REQUEST_METHOD']=='POST'){
         //Process form
         //sanitize POST data
        $_POST =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        
        $data=[
            
            'Email'=>trim($_POST['Email']),
            'Password'=>trim($_POST['Password']),
            'Email_err'=>'',
            'Password_err'=>'',
           
            ];
          if($data['Email']=="admin@admin.com" && $data['Password']=="admin"){
           redirect('/users/admin');die;
          }
            // validate email
        if(empty($data['Email'])){
            $data['Email_err']='Please enter email';
        }
        // validate password
        if(empty($data['Password'])){
            $data['Password_err']='Please enter password';
        }
        
        //check for user email
            if ($this->userModel->findUserByEmail($data['Email'])){
                //user found 

            }else{
                //user not found 
                $data['Email_err']='You are not registred';
            }
         //make sure errors are empty
         if(empty($data['Email_err'])&& empty($data['Password_err'])){
            //validation
            //check and set logged in user 
            $loggedInUser=$this->userModel->login($data['Email'],$data['Password']);
            if($loggedInUser){
                    //Create Session
                    $this->createUserSession($loggedInUser);

                    redirect('/Rides/index');
            }else{
                $data['Password_err']='Password incorrect';
                $this->view('users/login',$data);
            }
        }else{
            //Load view with errors
            $this->view('users/login',$data);
        }
     }else{
        //init data
        $data=[
        
        'Email'=>'',
        'Password'=>'',
        
        'Email_err'=>'',
        'Password_err'=>'',
        
        ];
        //load views 
        $this->view('users/login',$data);
     }
 }
 public function Allusers(){
    $u=$this->userModel->getUsers();
        $data=[
            'users'=>$u
        ] ;
        

        $this->view('admin/users',$data);

 }
 public function feedbackA(){

        $f=$this->userModel->getFeedback();
        $data=[
            'feedback'=>$f
        ] ;
        

        $this->view('admin/feedback',$data);
    

 }
 public function admin(){
     $_SESSION['user_id']='1';
    $_SESSION['user_email']='admin@admin.com';
    $_SESSION['Password']='admin';
    $this->view('admin/index');
 }
 public function createUserSession($user){
    $_SESSION['user_id']=$user->id;
    $_SESSION['user_email']=$user->Email;
    $_SESSION['FirstName']=$user->FirstName;
    $_SESSION['LastName']=$user->LastName;
    $_SESSION['Profile_Pic']=$user->Profile_Pic;
    $_SESSION['status']=$user->status;
    $_SESSION['DNS']=$user->DNS;
    $_SESSION['Phone']=$user->Phone;
    $_SESSION['Sex']=$user->Sex;
    $_SESSION['Adress']=$user->Adress;
    $_SESSION['DrivingLic']=$user->DrivingLic;
    $_SESSION['Password']=$user->Password;
    redirect('profile');
 }
 public function logout(){
     unset($_SESSION['user_id']);
     unset($_SESSION['user_email']);
     unset($_SESSION['FirstName']);
     unset($_SESSION['LastName']);
     unset($_SESSION['Profile_Pic']);
     unset($_SESSION['status']);
     unset($_SESSION['DNS']);
     unset($_SESSION['Phone']);
     unset($_SESSION['Adress']);
     unset($_SESSION['DrivingLic']);
     unset($_SESSION['Password']);

     session_destroy();
     redirect('users/login');
 }

 public function deleteUser(){
     $id=$_SESSION['user_id'];
    if($this->userModel->deleteUser($id))
    {
        if (isset($_SESSION['user_id'])){
            redirect('users/register');
            session_destroy();
        }
        else{
            redirect('users/login');
        }
    }
}

 public function deleteUserA($id){
     
    if($this->userModel->deleteUser($id))
    {
        if (isset($_SESSION['user_id'])){
            redirect('users/Allusers');
            
        }
        else{
            redirect('users/Allusers');
        }
    }
}
}
?>