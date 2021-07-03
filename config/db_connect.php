<?php 
        //connect to database
        $conn = mysqli_connect('127.0.0.1:3307', 'minu', '1730400', 'm&m_piazza');

        //check connection
        if(!$conn) {
            echo 'Connection error ' . mysqli_connect_error();
        }    

?>