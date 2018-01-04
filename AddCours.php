<?php
//header( "refresh:60;url=AddCours.php" );
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

                    <a href="AddCours.php#ListCrs" onclick="affichage('Listc')" id="Listc">List</a>

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
        <fieldset id="CoursInfo">
            <legend>Add/Delete course form</legend>
            <form name="CoursID" id="CoursID" action="AddCours.php#CrsSuccess" method="post" autocomplete="off">
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
            if (mysqli_query($connect, $sql))
                echo "<script type='text/javascript'>alert('Course added successfully!'); </script>";
            else
                echo "<script type='text/javascript'>alert('process failed!'); </script>";
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
                echo"<table align=center border=1 width='80%' bgcolor='#f0f8ff'><caption >List of Classes</caption><tr bgcolor='#a9a9a9' >";
                echo"<th align=center>Course Code</th><th align=center>Course Name</th>
                <th align=center >Credit Hrs</th><th align=center>Department</th></tr>";
                while($a=mysqli_fetch_array($j))
                    echo"<tr><td align=center>".$a[0]."</td><td align=center>".$a[1]."</td>
                    <td align=center>".$a[2]."</td><td align=center>".$a[3]."</td></tr>";
                echo"</table>";
                echo"<h4 align=center><a href=\"MainPage.php\"><input type=button value=\"Home Page\"></a></h4>";
            }
            else{//If not
                echo"<h3 align=center>No data in the database!!!</h3>";
                echo"<h4 align=center><a href=\"MainPage.php\"><input type=button value=\"Home Page\"></a></h4>";
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

    function affichage(elem) {
        switch (elem){
            case 'Listc' :{
                document.getElementById('ListCrs').style.display = 'block';
                document.getElementById('Course').style.display = 'none';
            }
        }
    }
</script>
<script src="modernizr-1.5.js"></script>
</body>
</html>