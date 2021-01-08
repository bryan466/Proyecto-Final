<?php 
    include_once "connectionBD.php";

    if (isset($_POST['action'])){
        $movieController = new movieController();
        switch ($_POST['action']) {

        }

    }

class MovieController
{
    public function get(){
        $conn = connect();
        if (!$conn->connect_error){
            $query = "select * from peliculas";
            $prepared_query = $conn->prepare($query);
            $prepared_query->execute();

            $results = $prepared_query->get_result();
            $movies = $results->fetch_all(MYSQLI_ASSOC);

            if (count($movies)>0){
                return $movies;
            }else{
                return array();
            }

        }else{
            return array();
        }
    }

}



?>