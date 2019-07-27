<html>
        <head>
                <title>Login Info</title>
                <meta name="description" content="Post-login page." />
        </head>
        <center>
        <body bgcolor="orange">

                <?php
                        $selection = $_GET['loginselection'];

                        if($selection == "student"){
                                header('Location: student.php');

                        }
                        else if($selection == "professor"){
                                header('Location: professor.php');
                        }
                        else{
                                echo "<br/><br/><br/><br/><br/>";
                                echo "No choice was detected. Please return home.";
                        }
                ?>
        </body>
        </center>
</html>
