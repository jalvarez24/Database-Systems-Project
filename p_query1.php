<?php
        $selection = $_GET['text1'];
        $selection = intval($selection);
        if($selection == 0){
                echo '<center><br/>
                        <h1>INVALID SEARCH/NO RECORDS FOUND</h1>
                        </center>';
        }
        else{
        //professor, query 1
        $hostname = "mariadb";
        $username = "cs332d1";
        $password = "daeleigh";
        $dbname = "cs332d1";

        $link = mysql_connect($hostname, $username, $password)
        or die('Error connecting to MySQL server.');

        mysql_select_db($dbname)
        or die("Unable to select database $dbname");

        $SQL = "SELECT title, classroom_num, meeting_days, start_time, end_time
        FROM courses, sections
        WHERE sections.professor_ssn = $selection AND sections.course_num = courses.course_id";

        $theprofessor = mysql_query($SQL, $link);
        echo '<br/>';
        $usermsg = "<center><h2>Showing Results for Professor with SSN:  $selection</h2></center>";
        echo $usermsg;
        echo '<table align="center" cellspacing="5" cellpadding="5">

                <tr><td align="left"><b>Title:</b></td>
                <td align="left"><b>Class Number:</b></td>
                <td align="left"><b>Meeting Days:</b></td>
                <td align="left"><b>Start Time:</b></td>
                <td align="left"><b>End Time:</b></td></tr>';

        while($row = mysql_fetch_array($theprofessor,MYSQL_ASSOC)){
                echo '<tr><td align="left">' .
                $row['title'] . '</td><td align="left">' .
                $row['classroom_num'] . '</td><td align="left">' .
                $row['meeting_days'] . '</td><td align="left">' .
                $row['start_time'] . '</td><td align="left">' .
                $row['end_time'] . '</td><td align="left">';
                echo '</tr>';
        }

        echo '</table>';
        }
?>
