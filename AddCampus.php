<?php
//header( "refresh:60;url=AddCampus.php" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
          MACC Student Enrollment
          Author: Diallo
          Date: 10/20/2017
    -->

    <title>MACC Student Enrollment</title>
    <link rel="icon" type="image/png" href="Logo.png" />
    <link rel="stylesheet" type="text/css" href="CSS_Styles.css" />
    <meta charset="utf-8" />

</head>

<body>
<header>
    <ul id="Menu">
        <li>

            <div class="dropdown">
                <button class="dropbtn">
                    <a href="MainPage.php" >Home</a>
                </button>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn" >Student</button>
                <div class="dropdown-content">
                    <a href="#" >Enroll</a>

                    <a href="#" >Payment</a>

                    <a href="#" >Transcripts</a>

                    <a href="#" >Appointment</a>

                    <a href="#" >List</a>

                    <a href="#" >Drop Class</a>

                    <a href="#" >Revise Info</a>

                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Course</button>
                <div class="dropdown-content">
                    <a href="#" >Add</a>

                    <a href="#" >Delete</a>

                    <a href="#" >Pre-Requisites</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Degree</button>
                <div class="dropdown-content">
                    <a href="#" >Add</a>

                    <a href="#" >Remove</a>

                    <a href="#" >List</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Department</button>
                <div class="dropdown-content">
                    <a href="#" >Add</a>

                    <a href="#" >Remove</a>

                    <a href="#" >List</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Room</button>
                <div class="dropdown-content">
                    <a href="#" >Add</a>

                    <a href="#" >Availability</a>

                    <a href="#" >Revise</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Session</button>
                <div class="dropdown-content">
                    <a href="#" >Add</a>

                    <a href="#" >Delete</a>

                    <a href="#" >List</a>

                    <a href="#" ></a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Instructor</button>
                <div class="dropdown-content">
                    <a href="#" >Add</a>

                    <a href="#" >Revise Info</a>

                    <a href="#" ></a>

                    <a href="#" ></a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Campus</button>
                <div class="dropdown-content">
                    <a href="#" >Open</a>

                    <a href="#" >Close</a>

                    <a href="#" >Revise</a>

                    <a href="#" ></a>
                </div>
            </div>
        </li>

    </ul>
</header>
<div id="main" >

    <div id="Course" >
        <fieldset id="CampusInfo">
            <legend>Opening/Closing campus form</legend>
            <form name="CampInfo" id="CampInfo" action="AddCampus.php#CampSuccess" method="post" autocomplete="off">
                <label for="CrsID" class="CrsID">Campus Location </label>
                <label for="city">City:</label>
                <input name="city" id="city" placeholder="Enter city name" required="required" />

                <label for="address">Address:</label>
                <input name="address" id="address" required="required" placeholder="Street address" />

                <label for="state">State:</label>
                <select name="state" id="state" required="required">
                    <?php
                    $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                    if($connect) {// If the connection was successful
                        $query = mysqli_query($connect, "select Abreviation, StateName from States");
                        if (mysqli_num_rows($query) > 0) { //If there are states in the database
                            ?>
                            <option value="" selected>--Select state--</option>
                            <?
                            while ($w = mysqli_fetch_array($query)) {
                                ?>
                                <option value="<? echo $w[0]; ?>"><? echo $w[1]; ?> </option>
                                <?
                            }
                        }else{
                            echo "<h3 style='text-align: center;'>No states found in the database</h3>";
                        }
                    }else
                    {
                        echo "<h3 style='text-align: center;'>Connection to the database failed</h3>";
                    }
                    //mysqli_close($connect);
                    ?>
                </select>
                <label for="zip">Postal Code:</label>
                <input name="zip" id="zip" placeholder="Enter five digits" pattern="^\d{5,5}$"
                       required="required"  maxlength="5"/>

                <label for="Telephone" class="Telephone"> Phone Number: </label>
                <input name="Telephone" id="Telephone" placeholder="Enter nine digits"
                       required="required" pattern="^\d{10,10}$" maxlength="10" />

                <label for="regist"></label>
                <input id="regist" name="regist" value="Open Campus" type="submit" onsubmit="clearForm();" />
                <label for="rest"></label>
                <input id="rest" name="rest" value="Reset Values" type="reset" />
            </form>
        </fieldset>
    </div>

    <div id="CampSuccess" style="display: block;">
        <?php
        if (isset($_POST['city']) && isset($_POST['state']) &&
            isset($_POST['zip']) && isset($_POST['Telephone']) && isset($_POST['address'])) {

            // Connecting to the database
            include 'connect.php';
            $connect = mysqli_connect("SystemProject", "root", "Nadhel123#", "Student_DB");

            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $tel = $_POST['Telephone'];
            $address = $_POST['address'];

            $Add = $address.", ".$city." ".$state.", ".$zip;
            $sql = "insert into Campus (Cam_Location, Cam_Address, Cam_Phone) VALUES 
                    ('$city', '$Add', $tel )";
            if (mysqli_query($connect, $sql))
                echo "<script type='text/javascript'>alert('Campus opened successfully!'); </script>";
            else
                echo "<script type='text/javascript'>alert('process failed!'); </script>";
        }
        mysqli_close($connect);
        ?>


    </div>
</div>
<footer>
    <address>
        <em>MACC Student Enrollment &#9827;
            601 Business Loop 70 W, Columbia MO, 65203 &#9827;
            Tel: (573) 234-1067</em>
    </address>
</footer>

<!--



                                -->
<link rel="stylesheet" href="https://unpkg.com/js-datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<!--<script src="https://unpkg.com/js-datepicker"></script>-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

    $( function() { // date picker function
        $( "#birth" ).datepicker();
    } );

    ////////////////////////////////////
    ///////////////////////////////////

    function clearForm() {// clearing form inputs after data submission
        var form = document.getElementById("CoursInfo");
        form.onsubmit = function(){
            form.reset();
        }
    }
</script>
<script src="modernizr-1.5.js"></script>
</body>
</html>