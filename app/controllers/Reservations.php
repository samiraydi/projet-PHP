<?php
class Reservations extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->reservationModel = $this->model('Reservation');
    }
    public function delete()
    {
        $data = [
            'ride' => $_POST['RideId'],
            'passager' => $_SESSION['user_id']
        ];

        if ($this->reservationModel->delete($data)) {

            redirect('rides/index');
        }
    }
    public function addReservation()
    {

        if (isset($_POST['book'])) {

            //sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //sanitize post array

            $data = [

                'ride' => trim($_POST['RideId']),
                'passager' => $_SESSION['user_id'],
                'nb_place' => trim($_POST['nb_place']),
            ];

            if ($this->reservationModel->addReservation($data)) {
                $this->reservationModel->notification($_POST['RideId'],$_POST['cond']);
                echo "<script>
    
alert('Success');
window.location.href='../rides/index';
</script>";
            } else {
                die("something went wrong");
            }
        } else
            print_r("Erreeeeeeeur");
        die();
    }
}
