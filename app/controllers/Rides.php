<?php
class Rides extends Controller{

    public function __construct()
    {
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->rideModel=$this->model('Ride');
    }
        public function edit(){
            $id=$_POST['RideId'];
             $r=$this->rideModel->findRidebyID($id);
        $data=[
            'rides'=>$r
        ] ;
        

        $this->view('posts/editRide',$data);
        }
        public function imprimer(){
             $r=$this->rideModel->getRides();
        $data=[
            'rides'=>$r
        ] ;

        $this->view('posts/etats',$data);

        }
         public function deleteRide(){
        
     $id=$_POST['RideId'];
     
    if($this->rideModel->deleteRide($id))
    {
        
            redirect('rides/index');
            
       
    }
}
        public function editRide(){



            if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $_POST =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
              $data=[
            'id_ride'=>trim($_POST['id_ride']),
            'passager1'=>0,
            'passager2'=>0,
            'passager3'=>0,
            'conducteur'=>$_SESSION['user_id'],
            'date_depart'=>trim($_POST['date_depart']),
            'heure_depart'=>trim($_POST['heure_depart']),
            'cite_depart'=>trim($_POST['cite_depart']),
            'destination'=>trim($_POST['destination']),
            'point_rassemblement'=>trim($_POST['point_rassemblement']),
            'point_intermediaire1'=>trim($_POST['point_intermediaire1']),
            'point_intermediaire2'=>trim($_POST['point_intermediaire2']),
            'bagage'=>trim($_POST['bagage']),
            'animaux'=>trim($_POST['animaux']),

            'status'=>'',
            //'heure_creation'=>trim($_POST['heure_creation']),
            'nombre_place'=>trim($_POST['nombre_place']),
            'prix'=>trim($_POST['prix']),
            'modele_voiture'=>trim($_POST['modele_voiture']),
            'couleur_voiture'=>trim($_POST['couleur_voiture'])
        ];

        }
    if($this->rideModel->updateRide($data)){
        echo "<script>

            alert(' Updated');
            window.location.href='index';
            </script>";
        }
    }
    public function indexA(){
        $r=$this->rideModel->getRidesA();
        $data=[
            'rides'=>$r
        ] ;
        

        $this->view('admin/Profile',$data);
    }
    public function index(){
        $r=$this->rideModel->getRides();
        $data=[
            'rides'=>$r
        ] ;
        

        $this->view('users/Profile',$data);
    }
    public function active(){
        $r=$this->rideModel->activeRides($_SESSION['user_id']);
        $r1=$this->rideModel->activeRidesPas($_SESSION['user_id']);
        
        $data=[
            'rides'=>$r,
            'ridesP'=>$r1
        ] ;
        

        $this->view('users/ActiveRides',$data);

    }
     public function history(){
        $r=$this->rideModel->getRidesByUser($_SESSION['user_id']);
        
        $data=[
            'rides'=>$r,
            
        ] ;
        

        $this->view('users/history',$data);
    }
    public function lookRideI(){
      	
    $this->view('posts/lookRide');
}
public function loginadmin(){
    $this->view('admin/index');
}

      public function lookRide(){
      	
    
 

            
        //sanitize post array
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        $data=[
        'date_depart'=>trim($_POST['date_depart']),
        //'heure_depart'=>trim($_POST['heure_depart']),
        'cite_depart'=>trim($_POST['cite_depart']),
        'destination'=>trim($_POST['destination']),
    ];

    if (($this->rideModel->lookRide($data))){

    
    $r=$this->rideModel->lookRide($data);
    $data=[
    	'rides'=>$r
    ];
    echo json_encode($data);
    
    //$this->view('posts/lookRideV',$data);
    
    
 /*echo "<script>
alert(' with success');
window.location.href='lookRide';
</script>";*/
    
    }
	else  
        echo json_encode("Erreur!");
        /*
		echo "<script>
			alert(' Rides not found');
			window.location.href='index';
			</script>";
            */
 
    
}
 public function deleteR($a1){
     
    if($this->rideModel->deleteRide($a1))
    {
        if (isset($_SESSION['user_id'])){
            redirect('rides/indexA');
            
        }
        else{
            redirect('users/Allusers');
        }
    }
}
 public function confirmR($a1){
     
    if($this->rideModel->confirmR($a1))
    {
        if (isset($_SESSION['user_id'])){
            redirect('rides/indexA');
            
        }
        else{
            redirect('users/Allusers');
        }
    }
}
        
    
    public function addRide(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            
            //sanitize post array
            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data=[
            'passager1'=>0,
            'passager2'=>0,
            'passager3'=>0,
            'conducteur'=>$_SESSION['user_id'],
            'date_depart'=>trim($_POST['date_depart']),
            'heure_depart'=>trim($_POST['heure_depart']),
            'cite_depart'=>trim($_POST['cite_depart']),
            'destination'=>trim($_POST['destination']),
            'point_rassemblement'=>trim($_POST['point_rassemblement']),
            'point_intermediaire1'=>trim($_POST['point_intermediaire1']),
            'point_intermediaire2'=>trim($_POST['point_intermediaire2']),
            'bagage'=>trim($_POST['bagage']),
            'animaux'=>trim($_POST['animaux']),

            'status'=>'',
            //'heure_creation'=>trim($_POST['heure_creation']),
            'nombre_place'=>trim($_POST['nombre_place']),
            'prix'=>trim($_POST['prix']),
            'modele_voiture'=>trim($_POST['modele_voiture']),
            'couleur_voiture'=>trim($_POST['couleur_voiture']),
            'cite_depart_err'=>'',
            'heure_depart_err'=>'',
            'date_depart_err'=>'',
            'destination_err'=>'',
            'point_rassemblement_err'=>'',
            'bagage_err'=>'',
            'animaux_err'=>'',
            'nombre_place_err'=>''
            
            ];
            //validate date_depart
            if(empty($data['date_depart'])){ $data['date_depart_err']='please enter departure date';}
            if(empty($data['cite_depart'])){ $data['cite_depart_err']='please enter departure city';}
            if(empty($data['heure_depart'])){ $data['heure_depart_err']='please enter departure time';}
            if(empty($data['destination'])){ $data['destination_err']='please enter destination ';}
            if(empty($data['point_rassemblement'])){ $data['point_rassemblement_err']='please enter assembly point';}
            if(empty($data['bagage'])){ $data['bagage_err']='please shoose yes or no';}
            if(empty($data['animaux'])){ $data['animaux_err']='please shoose yes or no';}
            if(empty($data['nombre_place'])){ $data['nombre_place_err']='please enter number of places';}
        
        if (empty($data['date_depart_err']) && empty($data['cite_depart_err'])&& empty($data['heure_depart_err']) &&  empty($data['destination_err']) &&  empty($data['point_rassemblement_err']) && empty($data['bagage_err']) && empty($data['animaux_err']) && empty($data['nombre_place_err']))
        {
            //validated
            if ($this->rideModel->addRide($data)){
                
                
                echo "<script>
alert('Ride Added with success');
window.location.href='index';
</script>";
            }else {die("something went wrong");}

        } else {
            //load the view with error 
            $this->view('posts/addRide',$data);
        }
        }else{
        $data=[
            'passenger1'=>'',
            'nombre_place'=>'',
            'passenger2'=>'',
            'passenger3'=>'',
            'conducteur'=>'',
            'date_depart'=>'',
            'heure_depart'=>'',
            'cite_depart'=>'',
            'destination'=>'',
            'point_rassemblement'=>'',
            'point_intermediaire1'=>'',
            'point_intermediaire2'=>'',
            'bagage'=>'',
            'animaux'=>'',
            'status'=>'',
            //'heure_creation'=>'',
            'cite_depart_err'=>'',
            'heure_depart_err'=>'',
            'date_depart_err'=>'',
            'destination_err'=>'',
            'point_rassemblement_err'=>'',
            'bagage_err'=>'',
            'animaux_err'=>'',
            'nombre_place_err'=>''

            

        ];
        $this->view('posts/addRide',$data);
    }
}
}
?>