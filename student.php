<html>
        <head>
                <meta name="description" content="student page" />
                <title>Students</title>
                <style type="text/css">h1 {color:002458} </style>
                <style type="text/css">h4 {color:white} </style>
        </head>
        <center>
        <body bgcolor ="ff8a00">
                <br />
                <h1>Welcome Student!</h1><br/>

                <h4>Enter number of course to see sections:</h4>
                <form action="s_query1.php" method="get">
                        <textarea name="text1" cols =15 rows=1 placeholder="Enter Course#"></textarea><br/><br/>
                        <input type="submit" value="Enter">
                </form>

                <h4>Enter CWID of student to see course history:</h4>
                <form action="s_query2.php" method="get">
                        <textarea name="text2" cols=15 rows=1 placeholder="Enter CWID"></textarea><br/><br/>
                        <input type="submit" value="Enter">
                </form>

                <script src="script_student.js"></script>

        </body>
        </center>

</html>
