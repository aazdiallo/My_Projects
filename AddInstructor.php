<?php
//header( "refresh:120;url=AddInstructor.php" );
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
<div id="main">

    <div id="Instructor" >
        <fieldset id="Ins_Info" style="text-align: left;">
            <legend>Instructor Management Form</legend>
            <form name="Ins_Info" id="Ins_Info" action="AddInstructor.php#AddIns" method="post" autocomplete="off">
                <label for="sname" class="sname"> Full Name: </label>
                <input name="sname" id="sname" placeholder="Enter full name" required="required" />

                <label for="birth" class="birth"> Birth Date: </label>
                <input name="birth" id="birth" required="required" placeholder="Select birth date"/>

                <label for="status" class="status">Status:</label>
                <select name="status" id="status" required="required" >
                    <option value="" selected>--Select status--</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Other">Other</option>
                </select>

                <label for="race" class="race">Race:</label>
                <select name="race" id="race" required="required">
                    <option value="" selected>--Select race--</option>
                    <option value="Hispanic-Latino">Hispanic-Latino</option>
                    <option value="White">White</option>
                    <option value="Black">Black</option>
                    <option value="Asian">Asian</option>
                    <option value="Two or more">Two or more races</option>
                    <option value="Other">Other</option>
                </select>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required="required">
                    <option value="" selected>--Select gender--</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>

                <label for="address">Address:</label>
                <input name="address" id="address" required="required" placeholder="Enter street address" />

                <label for="city">City:</label>
                <input name="city" id="city" placeholder="Enter city name" required="required" />

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
                       required="required" maxlength="5" />

                <label for="email">E-mail:</label>
                <input name="email" id="email" type="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />

                <label for="Telephone" class="Telephone"> Phone Number: </label>
                <input name="Telephone" id="Telephone" placeholder="Enter nine digits"
                       required="required" pattern="^\d{10,10}$" maxlength="10"  />

                <label for="degree" class="degree"> Degree: </label>
                <select name="degree" id="degree" required="required" >
                    <option value="" selected>--Select Degree</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Masters">Masters</option>
                    <option value="PhD">PhD</option>
                    <option value="Other">Other</option>
                </select>

                <label for="regist"></label>
                <input id="regist" name="regist" value="Add Instructor" type="submit" onsubmit="clearForm();" />
                <label for="rest"></label>
                <input id="rest" name="rest" value="Reset Values" type="reset" />
            </form>
        </fieldset>
    </div>

    <div id="AddIns">
        <?php

        // Connecting to the database
        $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");

        if(isset($_POST['sname']) && isset($_POST['birth']) && isset($_POST['status']) && isset($_POST['race'])
            && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state'])
            && isset($_POST['zip']) && isset($_POST['email']) && isset($_POST['Telephone']) && isset($_POST['degree'])) {

            $sname = $_POST['sname'];
            $birth = $_POST['birth'];
            $status = $_POST['status'];
            $race = $_POST['race'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $email = $_POST['email'];
            $tel = $_POST['Telephone'];
            $degree = $_POST['degree'];
            $Add = $address . ", " . $city . " " . $state . ", " . $zip;

            //Testing if the instructor already exists in the database
            $sq = "select Ins_ID from Instructor WHERE (Ins_BirthDate = '$birth')
                   && ( Ins_Email = '$email') && (Ins_Phone = $tel) && Ins_Name = '$sname' ";
            $res = mysqli_query($connect, $sq);
            if (mysqli_num_rows($res) > 0) {//If the instructor exist in the database;
                echo "<script type='text/javascript' >alert('process failed!\\nThis instructor is already registered'); </script>";
            } else {// If the instructor doesn't exist

                $sql = "insert into Instructor (Ins_Name, Ins_Gender, Ins_Status, Ins_Ethnicity,
                    Ins_BirthDate, Ins_Degree, Ins_Email, Ins_Phone, Ins_Address) VALUES 
                ('$sname', '$gender', '$status', '$race', '$birth', '$degree', '$email', $tel, '$Add' )";
                if (mysqli_query($connect, $sql))
                    echo "<script type='text/javascript'>alert('Instructor added successfully!'); </script>";
                else
                    echo "<script type='text/javascript'>alert('process failed!'); </script>";
            }
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
            var form = document.getElementById("Ins_Info");
            form.onsubmit = function(){
                form.reset();
            }
        }
    </script>
    <script src="modernizr-1.5.js"></script>
</body>
</html>