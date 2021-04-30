<?php
class Ride{
private $db;

public function __construct()
{
    $this->db=new Database;
}
public function lookRide($data){


$this->db->query('SELECT * ,
    rides.id as rideid,
    users.id as userid
    FROM rides
    INNER JOIN users 
    ON rides.conducteur=users.id
     WHERE date_depart=:date_depart AND nombre_place>0 AND date_depart>=CURDATE()  AND  cite_depart=:cite_depart AND destination=:destination
     ORDER BY heure_creation DESC ');
    $this->db->bind(':date_depart',$data['date_depart']);
    $this->db->bind(':cite_depart',$data['cite_depart']);
    $this->db->bind(':destination',$data['destination']);
    $res=$this->db->resultSet();

    return $res;
}
public function confirmR($a){
  $this->db->query('UPDATE rides  SET validation=1 WHERE id=:id_ride');
  $this->db->bind(':id_ride',$a);
    if($this->db->execute()){
        return true;
     }else {
         return false ;
     }

}
public function updateRide($data){

     $this->db->query('UPDATE rides  SET passager1=:passager1,passager2=:passager2,passager3=:passager3,date_depart=:date_depart,cite_depart=:cite_depart, 
    destination=:destination,point_rassemblement=:point_rassemblement,heure_depart=:heure_depart,point_intermediaire1=:point_intermediaire1,point_intermediaire2=:point_intermediaire2,bagage=:bagage, 
    animaux=:animaux,nombre_place=:nombre_place,prix=:prix,modele_voiture=:modele_voiture,couleur_voiture=:couleur_voiture WHERE id=:id_ride');
      $this->db->bind(':passager1',$data['passager1']);
    $this->db->bind(':passager2',$data['passager2']);
    $this->db->bind(':passager3',$data['passager3']);
    
    $this->db->bind(':date_depart',$data['date_depart']);
    $this->db->bind(':cite_depart',$data['cite_depart']);
    
    $this->db->bind(':destination',$data['destination']);
    $this->db->bind(':point_rassemblement',$data['point_rassemblement']);
    $this->db->bind(':heure_depart',$data['heure_depart']);
    $this->db->bind(':point_intermediaire1',$data['point_intermediaire1']);
    $this->db->bind(':point_intermediaire2',$data['point_intermediaire2']);
    $this->db->bind(':bagage',$data['bagage']);
    $this->db->bind(':animaux',$data['animaux']);
    
      $this->db->bind(':nombre_place',$data['nombre_place']);
      $this->db->bind(':prix',$data['prix']);
      $this->db->bind(':modele_voiture',$data['modele_voiture']);
      $this->db->bind(':couleur_voiture',$data['couleur_voiture']);
      $this->db->bind(':id_ride',$data['id_ride']);
    //$this->db->bind(':heure_creation',$data['heure_creation']);

    if($this->db->execute()){
        return true;
     }else {
         return false ;
     }
}
public function findRidebyID($data){
    $this->db->query('SELECT * FROM rides WHERE id= :id ');
     $this->db->bind(':id',$data);
     $row=$this->db->resultSet();
      //check row 
    if($this->db->rowCount() >0){
        return $row;
    }else {
        return false;
    } 

}


public function addRide($data){
    $this->db->query('INSERT INTO rides(passager1,passager2,passager3,conducteur,date_depart,cite_depart, 
    destination,point_rassemblement,heure_depart,point_intermediaire1,point_intermediaire2,bagage, 
    animaux, status,nombre_place,prix,modele_voiture,couleur_voiture) VALUES(:passager1,:passager2,:passager3,:conducteur,:date_depart,:cite_depart, 
    :destination,:point_rassemblement,:heure_depart,:point_intermediaire1,:point_intermediaire2,:bagage, 
    :animaux, :status,:nombre_place,:prix,:modele_voiture,:couleur_voiture)');
    $this->db->bind(':passager1',$data['passager1']);
    $this->db->bind(':passager2',$data['passager2']);
    $this->db->bind(':passager3',$data['passager3']);
    $this->db->bind(':conducteur',$data['conducteur']);
    $this->db->bind(':date_depart',$data['date_depart']);
    $this->db->bind(':cite_depart',$data['cite_depart']);
    $this->db->bind(':cite_depart',$data['cite_depart']);
    $this->db->bind(':destination',$data['destination']);
    $this->db->bind(':point_rassemblement',$data['point_rassemblement']);
    $this->db->bind(':heure_depart',$data['heure_depart']);
    $this->db->bind(':point_intermediaire1',$data['point_intermediaire1']);
    $this->db->bind(':point_intermediaire2',$data['point_intermediaire2']);
    $this->db->bind(':bagage',$data['bagage']);
    $this->db->bind(':animaux',$data['animaux']);
    $this->db->bind(':status','AVAILABLE');
      $this->db->bind(':nombre_place',$data['nombre_place']);
      $this->db->bind(':prix',$data['prix']);
      $this->db->bind(':modele_voiture',$data['modele_voiture']);
      $this->db->bind(':couleur_voiture',$data['couleur_voiture']);
    //$this->db->bind(':heure_creation',$data['heure_creation']);

    if($this->db->execute()){
        return true;
     }else {
         return false ;
     }
}
public function getRidesA(){
    $this->db->query('SELECT * ,
    rides.id as rideid,
    users.id as userid
    FROM rides 
    INNER JOIN users 
    ON rides.conducteur=users.id
    WHERE nombre_place>0  AND date_depart>=CURDATE() AND validation=0
    ORDER BY heure_creation DESC ');
    $results=$this->db->resultSet();

    return $results;
}
public function getRides(){
    $this->db->query('SELECT * ,
    rides.id as rideid,
    users.id as userid
    FROM rides 
    INNER JOIN users 
    ON rides.conducteur=users.id
    WHERE nombre_place>0  AND date_depart>=CURDATE()  AND validation=1
    ORDER BY heure_creation DESC ');
    $results=$this->db->resultSet();

    return $results;
}
public function activeRidesPas($data){
     $this->db->query('SELECT * ,
    reservation.id_reservation as reservationid,
    rides.id as rideid,
    users.id as userid
    FROM rides 
    INNER JOIN users 
    ON rides.conducteur=users.id
    INNER JOIN reservation
    ON rides.id = reservation.ride 
    where reservation.passager=:data and rides.date_depart>=CURDATE()
    ORDER BY heure_creation DESC 

     ');
$this->db->bind(':data',$data);

  
    $results=$this->db->resultSet();
   

    return $results;
}
public function activeRides($data){
     $this->db->query('SELECT * ,
    rides.id as rideid,
    users.id as userid
    FROM rides 
    INNER JOIN users 
    ON rides.conducteur=users.id
    where rides.conducteur=:data and rides.date_depart>=CURDATE()
    ORDER BY heure_creation DESC 

     ');
$this->db->bind(':data',$data);
  
    $results=$this->db->resultSet();
   

    return $results;
}
public function deleteRide($id){
$this->db->query('DELETE FROM rides WHERE id=:id');
$this->db->bind(':id',$id);
if($this->db->execute()){
    return true;
 }else {
     return false ;
 }


}
public function getRidesByUser($data){
    
    $this->db->query('SELECT * ,
    rides.id as rideid,
    users.id as userid
    FROM rides 
    INNER JOIN users 
    ON rides.conducteur=users.id
    where rides.conducteur=:data 
    ORDER BY heure_creation DESC 

     ');
$this->db->bind(':data',$data);
  
    $results=$this->db->resultSet();
   

    return $results;
    
}
}
?>