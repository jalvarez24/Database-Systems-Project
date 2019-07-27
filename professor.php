<html>
        <head>
                <meta name="description" content="professor page" />
                <title>Professors</title>
                <style type="text/css">h1 {color:002458} </style>
                <style type="text/css">h4 {color:white} </style>
        </head>
        <center>
        <body bgcolor ="ff8a00">
                <br />
                <h1>Welcome Professor!</h1>
                <br/>

                <form action="p_query1.php" method="get">
                <h4>Enter social security number of professor to see class information:</h4>
                <textarea name="text1" cols=10 rows=1 placeholder="Enter SS#"></textarea><br/><br/>
                <input type="submit" value="Enter"><br/>
                </form>

                <form action="p_query2.php" method="get">
                <h4>Enter course and section numbers to see grade count its:</h4>
                <textarea name="text2" cols=9 rows=1 placeholder="Enter Crs.#"></textarea>
                <textarea name="text3" cols=9 rows=1 placeholder="Enter Sec.#"></textarea><br/><br/>
                <input type="submit" value="Enter"><br/>
                </form>

                <script src="script_prof.js"></script>
        </body>
        </center>

</html>
