<?php
   
include_once 'db_credentials.php';

   echo "HERE";
	
	  $movie = mysqli_real_escape_string($db,$_POST['movie']);
      $native = mysqli_real_escape_string($db,$_POST['native']);
      $year = mysqli_real_escape_string($db,$_POST['year']);
	  
	    $sql = "INSERT INTO movies (native_name, english_name, year_made)
            VALUES ( '$native' , '$movie', '$year' )";

                mysqli_query($db, $sql);
                header('location: list.php?create=Success');
				
				
				
?>
