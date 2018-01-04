<?php
/**
 * Created by IntelliJ IDEA.
 * User: ghadhakanka
 * Date: 11/1/17
 * Time: 11:27 AM
 */
        // Connecting to the database
        $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
       if($connect) {// If the connection was successful
       }
       else if (mysqli_connect_errno()) { // If there was an error of connection
           echo "Failed to connect to MySQL: ".mysqli_connect_error();// Displayed message in case connection fails
       }