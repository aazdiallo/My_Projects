<?php
//header( "refresh:60;url=AddSession.php" );
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
        <fieldset id="SessInfo">
            <legend>Add/Delete session form</legend>
            <form name="SessInfo" id="SessInfo" action="AddSession.php#SesSuccess" method="post" autocomplete="off">
                <label for="SessCode" class="SessCode">Session Code: </label>
                <input name="SessCode" id="SessCode" placeholder="Enter session code" required="required" type="text" />

                <label for="SessType" class="SessType">Session Type:</label>
                <select name="SessType" id="SessType" required="required" onchange="affich(this);" >
                    <option value="" selected>--Session type--</option>
                    <option value="On Campus" >On campus</option>
                    <option value="Online" >Online</option>
                    <option value="Virtual" >Virtual</option>
                    <option value="Hybride" >Hybride</option>
                </select>
                    <!--
                        //////////////////////////////////////////
                        //////////////////////////////////////////
                        -->
                    <script >
                        function affich (elem) {
                            if(elem.value === 'On Campus') {
                                    document.getElementById('room').style.display = 'block';
                                }
                            else if(elem.value === 'Online'){
                                    document.getElementById('room').style.display = 'none';
                                }
                            else if(elem.value === 'Virtual'){
                                    document.getElementById('room').style.display = 'none';
                                }
                            else if(elem.value === 'Hybride'){
                                    document.getElementById('room').style.display = 'block';
                                }
                            }
                    </script>

                <label for="ClassID" class="ClassID">Course:</label>
                <select name="ClassID" id="ClassID" required="required">
                    <?php
                    $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                    if($connect) {// If the connection was successful
                        $query = mysqli_query($connect, "select CL_ID, CL_Tittle from Class");
                        if (mysqli_num_rows($query) > 0) { //If there is data in the database
                            ?>
                            <option value="" selected>--Select Class--</option>
                            <?
                            while ($w = mysqli_fetch_array($query)) {
                                ?>
                                <option value="<? echo $w[0]; ?>"><? echo $w[1]; ?> </option>
                                <?
                            }
                        }else{
                            echo "<h3 style='text-align: center;'>No data in the database</h3>";
                        }
                    }else
                    {
                        echo "<h3 style='text-align: center;'>Connection to the database failed</h3>";
                    }
                    mysqli_close($connect);
                    ?>
                </select>

                <label for="Hours" class="Hours"> Hours: </label>
                <INPUT name="Hours" id="Hours" type="text" placeholder="Hint:10:30AM - 12:30PM" required="required">

                <label for="Days" class="Days"> Days: </label>
                <INPUT name="Days" id="Days" type="text" placeholder="Hint: MW or M-W" required="required">


                <div id="room" style="display: none;">
                    <label for="RoomID" class="RoomID">Room:</label>
                    <select name="RoomID" id="RoomID" required="required">
                        <?php
                        $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                        if($connect) {// If the connection was successful
                            $query = mysqli_query($connect, "select Room_ID, Room_Code from Room ");
                            if (mysqli_num_rows($query) > 0) { //If there is data in the database
                                ?>
                                <option value="" selected>--Select Room--</option>
                                <?
                                while ($w = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<? echo $w[0]; ?>"><? echo $w[1]; ?> </option>
                                    <?
                                }
                            }else{
                                echo "<h3 style='text-align: center;'>No data in the database</h3>";
                            }
                        }else
                        {
                            echo "<h3 style='text-align: center;'>Connection to the database failed</h3>";
                        }
                        mysqli_close($connect);
                        ?>
                    </select>
                </div>

                <label for="InsID" class="InsID">Instructor:</label>
                <select name="InsID" id="InsID" required="required">
                    <?php
                    $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                    if($connect) {// If the connection was successful
                        $query = mysqli_query($connect, "select Ins_ID, Ins_Name from Instructor");
                        if (mysqli_num_rows($query) > 0) { //If there is data in the database
                            ?>
                            <option value="" selected>--Select Instructor--</option>
                            <?
                            while ($w = mysqli_fetch_array($query)) {
                                ?>
                                <option value="<? echo $w[0]; ?>"><? echo $w[1]; ?> </option>
                                <?
                            }
                        }else{
                            echo "<h3 style='text-align: center;'>No data in the database</h3>";
                        }
                    }else
                    {
                        echo "<h3 style='text-align: center;'>Connection to the database failed</h3>";
                    }
                    //mysqli_close($connect);
                    ?>
                </select>

                <label for="regist"></label>
                <input id="regist" name="regist" value="Add Session" type="submit" onsubmit="clearForm();" />
                <label for="rest"></label>
                <input id="rest" name="rest" value="Reset Values" type="reset" />
            </form>
        </fieldset>
    </div>

    <div id="SesSuccess" style="display: block;">
        <?php
        if (isset($_POST['SessCode']) && isset($_POST['SessType']) && isset($_POST['ClassID'])
            && isset($_POST['RoomID']) && isset($_POST['Hours']) && isset($_POST['Days'])
            && isset($_POST['InsID'])) {

            // Connecting to the database
            include 'connect.php';
            $connect = mysqli_connect("SystemProject", "root", "Nadhel123#", "Student_DB");

            $Scode = $_POST['SessCode'];
            $Stype = $_POST['SessType'];
            $ClassID = $_POST['ClassID'];
            $RoomID = $_POST['RoomID'];
            $InsID = $_POST['InsID'];
            $Hours = $_POST['Hours'];
            $Day = $_POST['Days'];

            if ($Stype == 'Online' || $Stype == 'Virtual')
                $RoomID = 0;

            $sql = "insert into Session (Sess_Code, Sess_Type, Hours, Days, CL_ID, Room_ID, Ins_ID) VALUES 
                    ('$Scode', '$Stype', '$Hours', '$Day', $ClassID, $RoomID, $InsID )";
            if (mysqli_query($connect, $sql))
                echo "<script type='text/javascript'>alert('Session added successfully!'); </script>";
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
        var form = document.getElementById("SessInfo");
        form.onsubmit = function(){
            form.reset();
        }
    }
</script>
<script src="modernizr-1.5.js"></script>
</body>
</html>