<?php
        $selection = $_GET['text2'];
        $selection = intval($selection);
        if($selection == 0){
                echo '<center><br/>
                        <h1>INVALID SEARCH/NO RECORDS FOUND</h1>
                        </center>';
        }
        else{
        //student, query 2
        $hostname = "mariadb";
        $username = "cs332d1";
        $password = "daeleigh";
        $dbname = "cs332d1";

        $link = mysql_connect($hostname, $username, $password)
        or die('Error connecting to MySQL server.');

        mysql_select_db($dbname)
        or die("Unable to select database $dbname");

        $SQL = "SELECT course_id, title, grade
        FROM enrollment_records, courses
        WHERE enrollment_records.cwid = $selection and enrollment_records.course_num = courses.course_id";

        $thestudent = mysql_query($SQL, $link);
        echo '<br/>';
        $usermsg = "<center><h2>Showing Results for CWID: $selection</h2></center>";
        echo $usermsg;
        echo '<table align="center" cellspacing = "5" cellpadding = "5">

                <tr><td align="left"><b>Course#:</b></td>
                <td align="left"><b>Course Name:</b></td>
                <td align="left"><b>Grade:</b></td></tr>';

        while($row = mysql_fetch_array($thestudent,MYSQL_ASSOC)){
                echo '<tr><td align="left">' .
                $row['course_id'] . '</td><td align="left">' .
                $row['title'] . '</td><td align="left">' .
                $row['grade'] . '</td><td align="left">';
                echo '</tr>';
        }

        echo '</table>';
        }
?>
