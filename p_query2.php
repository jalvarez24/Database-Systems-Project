<?php
    $selection1 = $_GET['text2'];
    $selection1 = intval($selection1);
    $selection2 = $_GET['text3'];
    $selection2 = intval($selection2);
    if($selection1 == 0 || $selection2 == 0){
            echo '<center><br/>
                    <h1>INVALID SEARCH/NO RECORDS FOUND</h1>
                    </center>';
    }


    else{
    //professor, query 2
    $hostname = "mariadb";
    $username = "cs332d1";
    $password = "daeleigh";
    $dbname = "cs332d1";

    $link = mysql_connect($hostname, $username, $password)
    or die('Error connecting to MySQL server.');

    mysql_select_db($dbname)
    or die("Unable to select database $dbname");

    $SQL = "SELECT grade, count(*) AS 'Grade Count'
    FROM enrollment_records
    WHERE course_num = $selection1 AND section_num = $selection2
    GROUP BY grade;";

    $theprofessor = mysql_query($SQL, $link);
    echo '<br/>';
    $usermsg = "<center><h2>Showing All Grades and Counts for<br/>Course: $selection1 <br/>Section: $selection2 </h2></center>";
    echo $usermsg;

    echo '<table align="center" cellspacing="5" cellpadding="5">

            <tr><td align="left"><b>Grade:</b></td>
            <td align="left"><b>Grade Count:</b></td></tr>';

    while($row = mysql_fetch_array($theprofessor,MYSQL_ASSOC)){
            echo '<tr><td align="left">' .
            $row['grade'] . '</td><td align="left">' .
            $row['Grade Count'] . '</td><td align="left">';
            echo '</tr>';
    }

    echo '</table>';
    }

?>
