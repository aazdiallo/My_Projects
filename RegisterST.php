<?php
//header( "refresh:120;url=RegisterST.php" ); refresh page
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

                    <a href="#" >Add</a>

                    <a href="#" >Enroll</a>

                    <a href="#" >Payment</a>

                    <a href="#" >Transcripts</a>

                    <a href="#" >Appointment</a>

                    <a href="#ListST" id="List" onclick="affichage('List')"  >List</a>

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

<div id="Enroll" style="display: none;" >
    <fieldset id="StudentInfo">
        <legend>Student Enrollment form</legend>
        <form name="ST_Info" id="ST_Info" action="#ST_Register" method="post" autocomplete="off">
            <label for="sname" class="sname"> Full Name: </label>
            <input name="sname" id="sname" placeholder="Please enter full name" required="required" />

            <label for="birth" class="birth"> Birth Date: </label>
            <input name="birth" id="birth" required="required" placeholder="Select birth date"/>

            <label for="status" class="status">Status:</label>
            <select name="status" id="status" required="required" >
                <option value="" selected>--Select your status--</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
                <option value="Other">Other</option>
            </select>

            <label for="race" class="race">Race:</label>
            <select name="race" id="race" required="required">
                <option value="" selected>--Select your race--</option>
                <option value="Hispanic-Latino">Hispanic-Latino</option>
                <option value="White">White</option>
                <option value="Black">Black</option>
                <option value="Asian">Asian</option>
                <option value="Two or more">Two or more races</option>
                <option value="Other">Other</option>
            </select>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required="required">
                <option value="" selected>--Select your gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
            </select>

            <label for="address">Address:</label>
            <input name="address" id="address" required="required" placeholder="Street address" />

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
                        <option value="" selected>--Select your state--</option>
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

            <label for="email">E-mail:</label>
            <input name="email" id="email" type="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />

            <label for="Telephone" class="Telephone"> Phone Number: </label>
            <input name="Telephone" id="Telephone" placeholder="Enter nine digits"
                   required="required" pattern="^\d{10,10}$" maxlength="10" />

            <label for="degree" class="degree"> Degree: </label>
            <select name="degree" id="degree" required="required" >
                <?php
                //$connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                if($connect) {// If the connection was successful
                    $q = mysqli_query($connect,"select Degree_ID, Degree_Title from Degree");
                    if (mysqli_num_rows($q) > 0) { //If there are occurrences in the table
                        ?>
                        <option value="" selected>--Select degree--</option>
                        <?
                        while ($ws = mysqli_fetch_array($q)) {
                            ?>
                            <option value="<? echo $ws[0]; ?>"><? echo $ws[1]; ?> </option>
                            <?
                        }
                    }else{
                        echo "<h3 style='text-align: center;'>No degree found in the database</h3>";
                    }
                }else
                {
                    echo "<h3 style='text-align: center;'>Connection to the database failed</h3>";
                }
                mysqli_close($connect);
                ?>
            </select>
            <label for="semester">Semester:</label>
            <select name="semester" id="semester" required>
                <option value="" selected>--Semester--</option>
                <option value="Fall">Fall</option>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
            </select>

            <label for="semesterYear"></label>
            <select name="semesterYear" id="semesterYear" required>
                <option value="" selected>--Year--</option>
                <?php
                $dates = date("Y");
                for ($i=$dates; $i <= ($dates +1); $i++){
                ?>
                <option value="<?echo $i;?>"><?echo $i; }?></option>
            </select>
            <label for="regist"></label>
            <input id="regist" name="regist" value="Register Student" type="submit" onsubmit="clearForm();" />
            <label for="rest"></label>
            <input id="rest" name="rest" value="Reset Values" type="reset" />
        </form>
    </fieldset>
</div>

<div id="ST_Register">
    <?php

    // Connecting to the database
    $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");

    if(isset($_POST['sname']) && isset($_POST['birth']) && isset($_POST['status']) && isset($_POST['race'])
        && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state'])
        && isset($_POST['zip']) && isset($_POST['email']) && isset($_POST['Telephone']) && isset($_POST['degree'])
        && isset($_POST['semester']) && isset($_POST['semesterYear'])){

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
        $semester = $_POST['semester'];
        $semesYear = $_POST['semesterYear'];
        $Add = $address.", ".$city." ".$state.", ".$zip;

        //Testing if the student already exists in the database
    $sq = "select ST_ID from Student WHERE (ST_BirthDate = '$birth')
                   && (ST_Email = '$email') && (ST_phone = $tel) && ST_Name = '$sname' ";
        $res = mysqli_query($connect, $sq);
    if (mysqli_num_rows($res) > 0) {//If the student exist in the database;
        echo "<script type='text/javascript' >alert('process failed!\\nThis student is already registered'); </script>";
    }
    else{

        $sql = "insert into Student (ST_Name, ST_Gender, ST_Status, ST_Ethnicity, 
                ST_BirthDate, ST_Email, ST_Phone, ST_Address, Degree_ID) VALUES 
                ('$sname', '$gender', '$status', '$race', '$birth', '$email', $tel,
                '$Add', $degree )";
        if (mysqli_query($connect, $sql)) {
            $sq = "select ST_ID from Student WHERE  (ST_Address = '$Add') && (ST_BirthDate = '$birth')
                   && (ST_Email = '$email') && (ST_phone = $tel)";
            if (mysqli_query($connect, $sq)) {//If the student exist in the database;
                $val = mysqli_fetch_row(mysqli_query($connect, $sq));
                $en = "insert into ListEnrollment (Years, Semester, ST_ID)
                        VALUES ('$semesYear', '$semester', $val[0])";
                if(mysqli_query($connect, $en))
                    echo "<script type='text/javascript'>alert('Student registered successfully!'); </script>";
                else
                    echo "<script type='text/javascript'>alert('process failed!'); </script>";
            }
            else {
                echo "Print nothing";
            }
        }else {
            echo "Print nothing";
        }
    }//Test for existing student ends here
    }
    else{
        echo "";
    }
    mysqli_close($connect);
    ?>

</div>

    <div id="ListST" style="display: none;">
            <?php
            $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");

            $s="select ST_ID, ST_Name, ST_Gender, ST_Email, Degree_Title, ST_Address from Student, Degree WHERE Degree.Degree_ID = Student.Degree_ID";
            $j=mysqli_query($connect, $s);
            $y="select count(ST_ID) from Student ";//If the student table is not empty
            $yi=mysqli_fetch_row(mysqli_query($connect, $y));
            if($yi[0]!= null){//
                echo"<table align=center border=1 width='95%' bgcolor='#f0f8ff' ><caption>List of Enrolled Students</caption><thead><tr bgcolor='#a9a9a9' >";
                echo"<th align=center>Student ID</th><th align=center>Student Name</th><th align=center>Gender</th>
                    <th align=center>Email</th><th align=center>Degree</th><th align=center>Address</th></tr></thead>";
                while($a=mysqli_fetch_array($j))
                    echo"<tbody><tr><td align=center>".$a[0]."</td><td align=center>".$a[1]."</td>
                    <td align=center>".$a[2]."</td><td align=center>".$a[3]."</td>
                    <td align=center>".$a[4]."</td><td align=center>".$a[5]."</td></tr></tbody>";
                echo "<tfoot><tr><td colspan='6' id='home' ><a href=\"MainPage.php\"><input type=button value=\"Home Page\"></a></td></tr></tfoot>";
                echo"</table>";
                }
            else{//If not
                echo"<h3 align=center>No student in the database!!!</h3>";
                echo"<h4 align=center></h4>";
            }
            mysqli_close($connect);
            ?>
    </div>

<div id="Insert_ST_Info">
    <script>

        function clearForm() {// clearing form inputs after data submission
            var form = document.getElementById("ST_Info");
            form.onsubmit = function(){
                form.reset();
            }
        }

    </script>
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
        function affichage(elem) {
            switch (elem){
                case 'List' :{
                    document.getElementById('ListST').style.display = 'block';
                    document.getElementById('Enroll').style.display = 'none';
                }
            }
        }
    </script>
    <script src="modernizr-1.5.js"></script>
</body>
</html>