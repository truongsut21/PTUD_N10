<?php
    class ConnectDB{
        function connect_DB(& $conn){
            $conn = mysqli_connect("localhost", "CCH", "12345", "mypham");
            if ($conn){
                mysqli_set_charset($conn, "utf8");
                return $conn;
            }else{
                return false;
            }
        }
    
        function closeDB($conn){
            mysqli_close($conn);
        }
    }
    
?> 