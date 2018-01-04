<!DOCTYPE html>
<html lang="en">
<head>
<!--
      MACC Student Enrollment
      Author: Diallo
      Date: 10/20/2017
   -->
    <?php
        header('Location: MainPage.php');
        // Connecting to the database
          include 'connect.php';
    ?>
	<title>MACC Student Enrollment</title>
    <link rel="icon" type="image/png" href="Logo.png" />
    <link rel="stylesheet" type="text/css" href="CSS_Styles.css" />
    <meta charset="utf-8" />

</head>

<body>
<h2 id="Top"></h2>
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
                    <a href="#Enroll" id="enroll" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'enroll'); return false; " >Add</a>

                    <a href="#EnrollST" id="enrollST" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'enrollST'); return false; " >Add/Drop Class</a>

                    <a href="#" >Payment</a>

                    <a href="#" >Transcripts</a>

                    <a href="#" >Appointment</a>

                    <a href="#ListST" id="listST" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'listST'); return false; " >List</a>

                   <a href="#" >Revise Info</a>

                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Course</button>
                <div class="dropdown-content">
                    <a href="#CoursePage" id="addCrs" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'addCrs'); return false; "  >Add</a>

                    <a href="#" >Delete</a>

                    <a href="#ListCrs" id="listCrs" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'listCrs'); return false; "  >List</a>

                    <a href="#" >Pre-Requisites</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Degree</button>
                <div class="dropdown-content">
                    <a href="#DegreePage" id="addDegree" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'addDegree'); return false; "  >Add</a>

                    <a href="#" >Remove</a>

                    <a href="#ListDeg" id="listDeg" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'listDeg'); return false; "  >List</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Department</button>
                <div class="dropdown-content">
                    <a href="#DepartmentPage" id="addDept" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'addDept'); return false; "  >Add</a>

                    <a href="#" >Remove</a>

                    <a href="#" id="listDept" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'listDept'); return false; "  >List</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Room</button>
                <div class="dropdown-content">
                    <a href="#RoomPage" id="addRoom" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'addRoom'); return false; "  >Add</a>

                    <a href="#" >Availability</a>

                    <a href="#" >Revise</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Session</button>
                <div class="dropdown-content">
                    <a href="#SessionPage" id="addSess" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'addSess'); return false; "  >Add</a>

                    <a href="#" >Delete</a>

                    <a href="#" id="ListSess" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'listSess'); return false; "  >List</a>
                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Instructor</button>
                <div class="dropdown-content">
                    <a href="#Instructor" id="Ins" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'Ins'); return false; "  >Add</a>

                    <a href="#ListIns" id="listIns" onclick="printing('Enroll', 'EnrollST', 'ListST', 'CampusPage',
                    'ListDeg', 'DegreePage', 'RoomPage', 'DepartmentPage','SessionPage', 'ListCrs',
                     'CoursePage', 'ListIns', 'Instructor', 'Business', 'listIns'); return false; "  >List</a>

                    <a href="#" >Revise Info</a>

                </div>
            </div>
        </li>

        <li>
            <div class="dropdown">
                <button class="dropbtn">Campus</button>
                <div class="dropdown-content">
                    <a href="#CampusPage" id="OpCamp" >Open</a>

                    <a href="#" >Close</a>

                    <a href="#" >Revise</a>

                </div>
            </div>
        </li>

    </ul>
</header>
<div id="main">
    <div class="Paragraph">

        <div id="Business">
            <img src="RichLog.jpg" alt="Logo MACC" width="100%" height="640px" />
        </div>
        <!--
                Instructor page
                                -->
        <div id="Instructor" style="display: none;">
            <fieldset id="Ins_Info" style="text-align: left;">
                <legend>Instructor Management Form</legend>
                <form name="Ins_Info" id="Ins_Info" action="#AddIns" method="post" autocomplete="off">
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
                    <input name="Telephone" id="Telephone" placeholder="Enter ten digits"
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
                    if (mysqli_query($connect, $sql)) {
                        header('Location: MainPage.php');
                        echo "<script type='text/javascript'>alert('Instructor added successfully!'); </script>";
                        $_POST = array();
                    } else {
                        header('Location: MainPage.php');
                        echo "<script type='text/javascript'>alert('process failed!'); </script>";
                        $_POST = array();
                    }
                }
            }
            mysqli_close($connect);
            ?>
        </div>

        <div id="ListIns" style="display: none;">
            <?php
            $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");

            $s="select Ins_Name, Ins_Email, Ins_Phone, Ins_Degree from Instructor ";
            $j=mysqli_query($connect, $s);
            $y="select count(ST_ID) from Student ";//If the table is not empty
            $yi=mysqli_fetch_row(mysqli_query($connect, $y));
            if($yi[0]!= null){//
                echo"<table align=center border=1 width='80%' bgcolor='#f0f8ff' ><caption>List of Instructors</caption><thead><tr bgcolor='#a9a9a9' >";
                echo"<th align=center>Name</th><th align=center>Email</th>
                    <th align=center>Phone</th><th align=center>Degree</th></tr></thead>";
                while($a=mysqli_fetch_array($j))
                    echo"<tbody><tr><td align=center>".$a[0]."</td><td align=center>".$a[1]."</td>
                    <td align=center>".$a[2]."</td><td align=center>".$a[3]."</td></tr></tbody>";
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

        <!--
                Student page
                                -->
        <div id="Enroll" style="display: none;" >
            <fieldset id="StudentInfo">
                <legend>Student Enrollment form</legend>
                <form name="ST_Info" id="ST_Info" action="#ST_Register" method="post" autocomplete="off">
                    <label for="sname" class="sname"> Full Name: </label>
                    <input name="sname" id="sname" placeholder="Please enter full name" required="required" />

                    <label for="births" class="births"> Birth Date: </label>
                    <input name="births" id="births" required="required" placeholder="Select birth date"/>

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
                    <input name="Telephone" id="Telephone" placeholder="Enter ten digits"
                           required="required" pattern="^\d{10,10}$" maxlength="10" type="text" />

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

            if(isset($_POST['sname']) && isset($_POST['births']) && isset($_POST['status']) && isset($_POST['race'])
                && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state'])
                && isset($_POST['zip']) && isset($_POST['email']) && isset($_POST['Telephone']) && isset($_POST['degree'])
                && isset($_POST['semester']) && isset($_POST['semesterYear'])){

                $sname = $_POST['sname'];
                $birth = $_POST['births'];
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
                ('$sname', '$gender', '$status', '$race', '$birth', '$email', '$tel',
                '$Add', $degree )";
                    if (mysqli_query($connect, $sql)) {
                        $sq = "select ST_ID from Student WHERE  (ST_Address = '$Add') && (ST_BirthDate = '$birth')
                   && (ST_Email = '$email') && (ST_phone = $tel)";
                        if (mysqli_query($connect, $sq)) {//If the student exist in the database;
                            $val = mysqli_fetch_row(mysqli_query($connect, $sq));
                            $en = "insert into ListEnrollment (Years, Semester, ST_ID)
                        VALUES ('$semesYear', '$semester', $val[0])";
                            if(mysqli_query($connect, $en)) {
                                header('Location: MainPage.php');
                                echo "<script type='text/javascript'>alert('Student registered successfully!'); </script>";
                                $_POST = array();
                            }else{
                                header('Location: MainPage.php');
                                echo "<script type='text/javascript'>alert('Registration failed!'); </script>";
                                $_POST = array();
                            }
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

            $s="select ST_ID, ST_Name, ST_Gender, ST_Email, Degree_Title, ST_Phone from Student, Degree WHERE Degree.Degree_ID = Student.Degree_ID";
            $j=mysqli_query($connect, $s);
            $y="select count(ST_ID) from Student ";//If the student table is not empty
            $yi=mysqli_fetch_row(mysqli_query($connect, $y));
            if($yi[0]!= null){//
                echo"<table align=center border=1 width='100%' bgcolor='#f0f8ff' ><caption>List of Enrolled Students</caption><thead><tr bgcolor='#a9a9a9' >";
                echo"<th align=center> ID </th><th align=center> Name </th><th align=center> Gender </th>
                    <th align=center>Email</th><th align=center>Degree</th><th align=center>Telephone</th></tr></thead>";
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

        <!--
                Register Student Page
                                           -->
        <div id="EnrollST" style="display: none;" >
            <fieldset id="EnrollST">
                <legend>Add/Drop class form</legend>
                <form name="RoomInfo" id="RoomInfo" action="#EnrSuccess" method="post" autocomplete="off">
                    <label for="ST_ID" class="ST_ID">Student ID: </label>
                    <input name="ST_ID" id="ST_ID" placeholder="Enter student ID"  pattern="^\d{1,5}$" maxlength="5" />
                    <label for="CrsID" class="CrsID"> </label>
                    <select name="CrsID" id="CrsID" required="required">
                        <?php
                        $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                        if($connect) {// If the connection was successful
                            $query = mysqli_query($connect, "select Sess_ID, Sess_Type, Days, Hours,Ins_Name, CL_Tittle, Session.Ins_ID  from Class, Session, Instructor WHERE (Session.Ins_ID = Instructor.Ins_ID) AND (Class.CL_ID = Session.CL_ID) order by Ins_ID ");
                            if (mysqli_num_rows($query) > 0) { //If there is any campus in the database
                                ?>
                                <option value="" selected align = center>--Select Session--</option>
                                <option label="-------Class--------Class Type---Days-------Hours---------Instructor---" disabled></option>
                                <?
                                while ($w = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<? echo $w[0]; ?>"><? echo $w[5]."&nbsp;&nbsp;&nbsp;".$w[1]."&nbsp;&nbsp;&nbsp;&nbsp;".$w[2]."&nbsp;&nbsp;".$w[3]."&nbsp;&nbsp;&nbsp;".$w[4]; ?> </option>
                                    <?
                                }
                            }else{
                                echo "<h3 style='text-align: center;'>No data found in the database</h3>";
                            }
                        }else
                        {
                            echo "<h3 style='text-align: center;'>Connection to the database failed</h3>";
                        }
                        mysqli_close($connect);
                        ?>
                    </select>

                    <label for="regist"></label>
                    <input id="regist" name="regist" value="Enroll Student" type="submit" onsubmit="clearForm();" />
                    <label for="rest"></label>
                    <input id="rest" name="rest" value="Reset Values" type="reset" />
                </form>
            </fieldset>
        </div>

        <div id="EnrSuccess" style="display: block;">
            <?php
            if (isset($_POST['ST_ID']) && isset($_POST['CrsID'])) {

                // Connecting to the database
                include 'connect.php';
                $connect = mysqli_connect("SystemProject", "root", "Nadhel123#", "Student_DB");

                $ST_ID = $_POST['ST_ID'];
                $CrsID = $_POST['CrsID'];

                $verif = "select ST_ID from Student WHERE ST_ID = $ST_ID";
                $res = mysqli_fetch_row(mysqli_query($connect, $verif));
                if ($res == 0){
                    echo "<script type='text/javascript'>alert('This student doesn\'t exist!'); </script>";
                }
                else {
                    $sql = "insert into Enrollment (ST_ID, Sess_ID) VALUES 
                        ('$ST_ID', $CrsID )";
                    if (mysqli_query($connect, $sql)) {
                        header('Location: MainPage.php');
                        echo "<script type='text/javascript'>alert('Enrollment executed successfully!'); </script>";
                        $_POST = array();
                    } else {
                        header('Location: MainPage.php');
                        echo "<script type='text/javascript'>alert('Enrollment process failed!'); </script>";
                        $_POST = array();
                    }
                }
            }
            mysqli_close($connect);
            ?>


        </div>

        <!--
                Course page
                                -->
        <div id="CoursePage" style="display: none;" >
            <fieldset id="CoursInfo">
                <legend>Add/Delete course form</legend>
                <form name="CoursID" id="CoursID" action="#CrsSuccess" method="post" autocomplete="off">
                    <label for="CrsID" class="CrsID">Course Code: </label>
                    <input name="CrsID" id="CrsID" placeholder="Enter course code" required="required" />

                    <label for="CrsT" class="CrsT"> Course Tittle: </label>
                    <input name="CrsT" id="CrsT" required="required" placeholder="Enter course tittle"/>

                    <label for="CrsCr">Credit Hours:</label>
                    <select name="CrsCr" id="CrsCr" required>
                        <option value="" selected>--Credits--</option>
                        <?php
                        //$dates = date("Y");
                        for ($i=1; $i <= 5; $i++){
                        ?>
                        <option value="<?echo $i;?>"><?echo $i; }?></option>
                    </select>

                    <label for="CrsD" class="CrsD">Department:</label>
                    <select name="CrsD" id="CrsD" required="required">
                        <?php
                        $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                        if($connect) {// If the connection was successful
                            $query = mysqli_query($connect, "select Dept_ID, Dept_Name from Department");
                            if (mysqli_num_rows($query) > 0) { //If there are states in the database
                                ?>
                                <option value="" selected>--Select Department--</option>
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

                    <label for="regist"></label>
                    <input id="regist" name="regist" value="Add Course" type="submit" onsubmit="clearForm();" />
                    <label for="rest"></label>
                    <input id="rest" name="rest" value="Reset Values" type="reset" />
                </form>
            </fieldset>
        </div>

        <div id="CrsSuccess" style="display: block;">
            <?php
            if (isset($_POST['CrsID']) && isset($_POST['CrsT'])
                && isset($_POST['CrsCr']) && isset($_POST['CrsD'])) {

                // Connecting to the database
                include 'connect.php';
                $connect = mysqli_connect("SystemProject", "root", "Nadhel123#", "Student_DB");

                $CrsID = $_POST['CrsID'];
                $CrsT = $_POST['CrsT'];
                $CrsCr = $_POST['CrsCr'];
                $CrsType = $_POST['CrsType'];
                $CrsD = $_POST['CrsD'];

                $sql = "insert into Class (CL_Code, CL_Tittle, CreditHrs, Dept_ID) VALUES 
                    ('$CrsID', '$CrsT', $CrsCr, $CrsD )";
                if (mysqli_query($connect, $sql)) {
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Course added successfully!'); </script>";
                    $_POST = array();
                }else{
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Course add failed!'); </script>";
                    $_POST = array();
                }
            }
            mysqli_close($connect);
            ?>
        </div>

        <div id="ListCrs" style="display: none;">
            <?php
            $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");

            $s="select CL_Code, CL_Tittle, CreditHrs, Dept_Name from Class, Department WHERE Class.Dept_ID = Department.Dept_ID";
            $j=mysqli_query($connect, $s);
            $y="select count(ST_ID) from Student ";//If the table is not empty
            $yi=mysqli_fetch_row(mysqli_query($connect, $y));
            if($yi[0]!= null){//
                echo"<table align=center border=1 width='80%' bgcolor='#f0f8ff'><caption >List of Classes</caption><thead><tr bgcolor='#a9a9a9' >";
                echo"<th align=center>Course Code</th><th align=center>Course Name</th>
                <th align=center >Credit Hrs</th><th align=center>Department</th></tr></thead>";
                while($a=mysqli_fetch_array($j))
                    echo"<tbody><tr><td align=center>".$a[0]."</td><td align=center>".$a[1]."</td>
                    <td align=center>".$a[2]."</td><td align=center>".$a[3]."</td></tr></tbody>";
                echo "<tfoot><tr><td colspan='6' id='home' ><a href=\"MainPage.php\"><input type=button value=\"Home Page\"></a></td></tr></tfoot>";
                echo"</table>";
            }
            else{//If not
                echo"<h3 align=center>No data in the database!!!</h3>";
                echo"<h4 align=center><a href=\"MainPage.php\"><input type=button value=\"Home Page\"></a></h4>";
            }
            mysqli_close($connect);
            ?>

        </div>

            <!--
                    Session Page
                                    -->
        <div id="SessionPage" style="display: none;" >
            <fieldset id="SessInfo">
                <legend>Add/Delete session form</legend>
                <form name="SessInfo" id="SessInfo" action="#SesSuccess" method="post" autocomplete="off">
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
                && isset($_POST['Hours']) && isset($_POST['Days']) && isset($_POST['InsID'])) {

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
                    $RoomID = $_POST['RoomID'] = 3;

                $sql = "insert into Session (Sess_Code, Sess_Type, Hours, Days, CL_ID, Room_ID, Ins_ID) VALUES 
                    ('$Scode', '$Stype', '$Hours', '$Day', $ClassID, $RoomID, $InsID )";
                if (mysqli_query($connect, $sql)) {
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Session added successfully!'); </script>";
                    $_POST = array();
                } else {
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Session add failed!'); </script>";
                    $_POST = array();
                }
            }
            mysqli_close($connect);
            ?>

        </div>

            <!--
                    Room Page
                                -->
        <div id="RoomPage" style="display: none;" >
            <fieldset id="RoomInfo">
                <legend>Add/Delete course form</legend>
                <form name="RoomInfo" id="RoomInfo" action="#CrsSuccess" method="post" autocomplete="off">
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
                if (mysqli_query($connect, $sql)) {
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Room added successfully!'); </script>";
                    $_POST = array();
                }else {
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Room add failed!'); </script>";
                    $_POST = array();
                }
            }
            mysqli_close($connect);
            ?>

        </div>

            <!--
                Department Page
                                -->
        <div id="DepartmentPage" style="display: none;" >
            <fieldset id="DepartInfo">
                <legend>Add/Delete Department form</legend>
                <form name="DeptInfo" id="DeptInfo" action="#DepSuccess" method="post" autocomplete="off">
                    <label for="DeptName" class="DeptName">Department Name: </label>
                    <input name="DeptName" id="DeptName" placeholder="Enter Department name" required="required" />

                    <label for="DepAdd"></label>
                    <input id="DepAdd" name="DepAdd" value="Add Department" type="submit" onsubmit="clearForm();" />
                    <label for="rest"></label>
                    <input id="rest" name="rest" value="Reset Values" type="reset" />
                </form>
            </fieldset>
        </div>

        <div id="DepSuccess" style="display: block;">
            <?php
            if (isset($_POST['DeptName'])){

                // Connecting to the database
                $connect = mysqli_connect("SystemProject", "root", "Nadhel123#", "Student_DB");

                $Dept = $_POST['DeptName'];
                $l = "select Dept_Name from Department WHERE Dept_Name = '$Dept'";
                if (mysqli_fetch_row(mysqli_query($connect, $l)) <= 0) {
                    $sql = "insert into Department (Dept_Name) VALUES ('$Dept')";
                    if (mysqli_query($connect, $sql)) {
                        header('Location: MainPage.php');
                        echo "<script type='text/javascript'>alert('Department added successfully!'); </script>";
                        $_POST = array();
                    }else {
                        header('Location: MainPage.php');
                        echo "<script type='text/javascript'>alert('Department add failed!'); </script>";
                        $_POST = array();
                    }
                }
                else{
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('This Department exist already...!!!'); </script>";
                    $_POST = array();
                }
            }
            mysqli_close($connect);
            ?>

        </div>

                <!--
                        Degree Page
                                        -->
        <div id="DegreePage" style="display: none;" >
            <fieldset id="DegreeInfo">
                <legend>Add/Delete Degree form</legend>
                <form name="DegInfo" id="DegInfo" action="#DegSuccess" method="post" autocomplete="off">
                    <label for="DegName" class="DegName">Degree Name: </label>
                    <input name="DegName" id="DegName" placeholder="Enter Degree name" required="required" />

                    <label for="DeptName">Department:</label>
                    <select name="Dept" id="Dept" required="required">
                        <?php
                        $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");
                        if($connect) {// If the connection was successful
                            $query = mysqli_query($connect, "select Dept_ID, Dept_Name from Department");
                            if (mysqli_num_rows($query) > 0) { //If there is data in the database
                                ?>
                                <option value="" selected>--Select Department--</option>
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
                    <label for="DegAdd"></label>
                    <input id="DegAdd" name="DegAdd" value="Add Degree" type="submit" onsubmit="clearForm();" />
                    <label for="rest"></label>
                    <input id="rest" name="rest" value="Reset Values" type="reset" />
                </form>
            </fieldset>
        </div>

        <div id="DegSuccess" style="display: block;">
            <?php
            if (isset($_POST['Dept']) && isset($_POST['DegName'])){

                // Connecting to the database
                $connect = mysqli_connect("SystemProject", "root", "Nadhel123#", "Student_DB");

                $Dept = $_POST['Dept'];
                $Deg = $_POST['DegName'];

                $l = "select Degree_Title from Degree WHERE Degree_Title = '$Deg'";
                if (mysqli_fetch_row(mysqli_query($connect, $l)) <= 0) {
                    $sql = "insert into Degree (Degree_Title, Dept_ID) VALUES ('$Deg', $Dept)";
                    if (mysqli_query($connect, $sql)) {
                        header('Location: MainPage.php');
                        echo "<script type='text/javascript'>alert('Degree added successfully!'); </script>";
                        $_POST = array();
                    }
                    else {
                        header('Location: MainPage.php');
                        echo "<script type='text/javascript'>alert('Degree add failed!'); </script>";
                        $_POST = array();
                    }
                }
                else{
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Process failed...\\nThis Degree exist already...!!!'); </script>";
                    $_POST = array();
                }
            }
            mysqli_close($connect);
            ?>

        </div>

        <div id="ListDeg" style="display: none;">
            <?php
            $connect = mysqli_connect("SystemProject","root","Nadhel123#", "Student_DB");

            $s="select Dept_Name, Degree_Title from Degree, Department WHERE Degree.Dept_ID = Department.Dept_ID";
            $j=mysqli_query($connect, $s);
            $y="select count(ST_ID) from Student ";//If the table is not empty
            $yi=mysqli_fetch_row(mysqli_query($connect, $y));
            if($yi[0]!= null){//
                echo"<table align=center border=1 width='60%' bgcolor='#f0f8ff'><caption >List of Degrees</caption><thead><tr bgcolor='#a9a9a9' >";
                echo"<th align=center>Degree</th><th align=center>Department</th></tr></thead>";
                while($a=mysqli_fetch_array($j))
                    echo"<tbody><tr><td align=center>".$a[1]."</td><td align=center>".$a[0]."</td></tr></tbody>";
                echo "<tfoot><tr><td colspan='6' id='home' ><a href=\"MainPage.php\"><input type=button value=\"Home Page\"></a></td></tr></tfoot>";
                echo"</table>";}
            else{//If not
                echo"<h3 align=center>No data in the database!!!</h3>";
                echo"<h4 align=center><a href=\"MainPage.php\"><input type=button value=\"Home Page\"></a></h4>";
            }
            mysqli_close($connect);
            ?>

        </div>

        <!--
                Campus Page
                                -->
        <div id="CampusPage" style="display: none;" >
            <fieldset id="CampusInfo">
                <legend>Opening/Closing campus form</legend>
                <form name="CampInfo" id="CampInfo" action="#CampSuccess" method="post" autocomplete="off">
                    <label for="CrsID" class="CrsID">Campus Location </label>
                    <label for="city">City:</label>
                    <input name="city" id="city" placeholder="Enter city name" required="required" />

                    <label for="addr">Address:</label>
                    <input name="addr" id="addr" required="required" placeholder="Street address" />

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

                    <label for="Tel" class="Tel"> Phone Number: </label>
                    <input name="Tel" id="Tel" placeholder="Enter ten digits"
                           required="required" pattern="^\d{10,10}$" maxlength="10" />

                    <label for="OPCmp"></label>
                    <input id="OPCmp" name="OPCmp" value="Open Campus" type="submit" onsubmit="clearForm();" />
                    <label for="rest"></label>
                    <input id="rest" name="rest" value="Reset Values" type="reset" />
                </form>
            </fieldset>
        </div>

        <div id="CampSuccess" style="display: block;">
            <?php
            if (isset($_POST['city']) && isset($_POST['state']) &&
                isset($_POST['zip']) && isset($_POST['Tel']) && isset($_POST['address'])) {

                // Connecting to the database
                include 'connect.php';
                $connect = mysqli_connect("SystemProject", "root", "Nadhel123#", "Student_DB");

                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];
                $tel = $_POST['Tel'];
                $address = $_POST['addr'];

                $Add = $address.", ".$city." ".$state.", ".$zip;
                $sql = "insert into Campus (Cam_Location, Cam_Address, Cam_Phone) VALUES 
                    ('$city', '$Add', $tel )";
                if (mysqli_query($connect, $sql)) {
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Campus opened successfully!'); </script>";
                    $_POST = array();
                }else{
                    header('Location: MainPage.php');
                    echo "<script type='text/javascript'>alert('Campus add unsuccessful!'); </script>";
                    $_POST = array();
                }
            }
            mysqli_close($connect);
            ?>


        </div>
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
    $( function() {
        $( "#birth" ).datepicker();
    } );

    $( function() {
        $( "#births" ).datepicker();
    } );

    function printing(Enroll, EnrollST, ListST, CampusPage, ListDeg, DegreePage, RoomPage, DepartmentPage,
                      SessionPage, ListCrs, CoursePage, ListIns, Instructor, Business, Element) {
        switch (Element) { // Selecting the element to display by call
            case 'enroll': {
                if (document.getElementById(Enroll).style.display === 'none') {
                    document.getElementById(Enroll).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#Enroll';
                }
            }
                break;
            case 'enrollST': {
                if (document.getElementById(EnrollST).style.display === 'none') {
                    document.getElementById(EnrollST).style.display = 'block';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#EnrollST';
                }
            }
                break;
            case 'listST': {
                if (document.getElementById(ListST).style.display === 'none') {
                    document.getElementById(ListST).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#ListST';
                }
            }
                break;
            case 'OpCamp': {
                if (document.getElementById(CampusPage).style.display === 'none') {
                    document.getElementById(CampusPage).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#CampusPage';
                }
            }
                break;
            case 'listDeg': {
                if (document.getElementById(ListDeg).style.display === 'none') {
                    document.getElementById(ListDeg).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#ListDeg';
                }
            }
                break;
            case 'addDegree': {
                if (document.getElementById(DegreePage).style.display === 'none') {
                    document.getElementById(DegreePage).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#DegreePage';
                }
            }
                break;
            case 'addRoom': {
                if (document.getElementById(RoomPage).style.display === 'none') {
                    document.getElementById(RoomPage).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#RoomPage';
                }
            }
                break;
            case 'addDept': {
                if (document.getElementById(DepartmentPage).style.display === 'none') {
                    document.getElementById(DepartmentPage).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#DepartmentPage';
                }
            }
                break;
            case 'addSess': {
                if (document.getElementById(SessionPage).style.display === 'none') {
                    document.getElementById(SessionPage).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#SessionPage';
                }
            }
                break;
            case 'listCrs': {
                if (document.getElementById(ListCrs).style.display === 'none') {
                    document.getElementById(ListCrs).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#ListCrs';
                }
            }
                break;
            case 'addCrs': {
                if (document.getElementById(CoursePage).style.display === 'none') {
                    document.getElementById(CoursePage).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#CoursePage';
                }
            }
                break;
            case 'Ins': {
                if (document.getElementById(Instructor).style.display === 'none') {
                    document.getElementById(Instructor).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListIns).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#Instructor';
                }
            }
                break;
            case 'listIns': {
                if (document.getElementById(ListIns).style.display === 'none') {
                    document.getElementById(ListIns).style.display = 'block';
                    document.getElementById(EnrollST).style.display = 'none';
                    document.getElementById(Enroll).style.display = 'none';
                    document.getElementById(ListST).style.display = 'none';
                    document.getElementById(CampusPage).style.display = 'none';
                    document.getElementById(DegreePage).style.display = 'none';
                    document.getElementById(DepartmentPage).style.display = 'none';
                    document.getElementById(RoomPage).style.display = 'none';
                    document.getElementById(SessionPage).style.display = 'none';
                    document.getElementById(ListCrs).style.display = 'none';
                    document.getElementById(CoursePage).style.display = 'none';
                    document.getElementById(ListDeg).style.display = 'none';
                    document.getElementById(Instructor).style.display = 'none';
                    document.getElementById(Business).style.display = 'none';
                    window.location.hash = '#ListIns';
                }
            }
                break;
        }
    }

</script>
<script src="modernizr-1.5.js"></script>

</body>
</html>