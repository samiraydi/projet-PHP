<?php
class Reservation
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function delete($data)
    {
        $this->db->query('UPDATE  rides set nombre_place=nombre_place+1 where id=:id');
        $this->db->bind(':id', $data['ride']);
        $this->db->execute();
        $this->db->query('DELETE FROM reservation WHERE ride=:id1 and passager=:id2');

        $this->db->bind(':id1', $data['ride']);
        $this->db->bind(':id2', $data['passager']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function notification($sender,$recevier)
    {
        $this->db->query('INSERT INTO notification (description	,sender,receiver)VALUES (:subject,:message,:message2 ) ');
        $this->db->bind(':subject', 'joined your ride!');
        $this->db->bind(':message', $sender);
        $this->db->bind(':message2', $recevier);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function addReservation($data)
    {
        $this->db->query('UPDATE rides set nombre_place=nombre_place-:nb_place where id=:ride');
        $this->db->bind(':nb_place', $data['nb_place']);
        $this->db->bind(':ride', $data['ride']);
        $this->db->execute();

        $this->db->query('INSERT INTO reservation(ride,passager,nb_place) Values(:ride,:passager,:nb_place)');
        $this->db->bind(':ride', $data['ride']);
        $this->db->bind(':passager', $data['passager']);
        $this->db->bind(':nb_place', $data['nb_place']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
