<?php 
class Pages extends Controller{
    public function __construct()
    {
       
    }
    public function index(){
       
        $data= ['title'=>'SharePosts',
        'description'=>'simple social network build on mvc php framework'
    ];
       
        $this->view('Pages/index',$data);
    }
    public function about(){
        $data= [
        'title'=>'about us',
        'description'=>'App to share posts with other users'

    ];
        $this->view('Pages/about',$data);   
    }
} 
?>