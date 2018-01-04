<?php
//header( "refresh:60;url=AddRoom.php" );
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
        <fieldset id="RoomInfo">
            <legend>Add/Delete course form</legend>
            <form name="RoomInfo" id="RoomInfo" action="AddRoom.php#CrsSuccess" method="post" autocomplete="off">
                <label for="Rcode" class="Rcode">Room Code: </label>
                <input name="Rcode" id="Rcode" placeholder="Enter course code" required="required" />

                <label for="seats" class="seats"> Number of Seats: </label>
                <select name="seats" id="seats">
                    <option value="" selected>--Seats--</option>
                    <?php
                    //$dates = date("Y");
                    for ($i=1; $i <= 30; $i++){
                    ?>
                    <option value="<?echo $i;?>"><?echo $i; }?></option>
                </select>

                <label for="Camp" class="Camp">Campus:</label>
                <select name="Camp" id="Camp" required="required">
                    <?php
                    $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                    if($connect) {// If the connection was successful
                        $query = mysqli_query($connect, "select Cam_ID, Cam_Location from Campus");
                        if (mysqli_num_rows($query) > 0) { //If there is any campus in the database
                            ?>
                            <option value="" selected>--Select Campus--</option>
                            <?
                            while ($w = mysqli_fetch_array($query)) {
                                ?>
                                <option value="<? echo $w[0]; ?>"><? echo $w[1]; ?> </option>
                                <?
                            }
                        }else{
                            echo "<h3 style='text-align: center;'>No data found in the database</h3>";
                        }
                    }else
                    {
                        echo "<h3 style='text-align: center;'>Connection to the database failed</h3>";
                    }
                    //mysqli_close($connect);
                    ?>
                </select>

                <label for="regist"></label>
                <input id="regist" name="regist" value="Add Room" type="submit" onsubmit="clearForm();" />
                <label for="rest"></label>
                <input id="rest" name="rest" value="Reset Values" type="reset" />
            </form>
        </fieldset>
    </div>

    <div id="CrsSuccess" style="display: block;">
        <?php
        if (isset($_POST['Rcode']) && isset($_POST['seats'])  && isset($_POST['Camp'])) {

            // Connecting to the database
            include 'connect.php';
            $connect = mysqli_connect("SystemProject", "root", "Nadhel123#", "Student_DB");

            $Rcode = $_POST['Rcode'];
            $seats = $_POST['seats'];
            $Camp = $_POST['Camp'];

            $sql = "insert into Room (Room_Code, Number_Seats, Cam_ID) VALUES 
                    ('$Rcode', $seats, $Camp )";
            if (mysqli_query($connect, $sql))
                echo "<script type='text/javascript'>alert('Room added successfully!'); </script>";
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
        var form = document.getElementById("RoomInfo");
        form.onsubmit = function(){
            form.reset();
        }
    }
</script>
<script src="modernizr-1.5.js"></script>
</body>
</html>