<html>
<body>

<div id="main">

<h1> University Mock Database Project</h1>

</div>

<div style="background-color:lightgrey;">
<fieldset>
<legend>Students:</legend>


<?php

$link = mysql_connect('mariadb', 'cs332s13', airo0Fee');

if (!$link) {
	 die('Connection failed: '. mysql_error());
}

echo 'Connection successful.<p>';

mysql_select_db("cs332s13", $link);

$query = "SELECT Course_Number, Course_Title, Section_Number, Section_Classroom,
                 Section_Meeting_Days, Section_Start_Time, Section_End_Time,
                 (Seats-COUNT(Enrollment_CWID)) as 'Seats'

	FROM COURSE, SECTION, SECTION
        WHERE Enrollment_Section_Number = Section_Number
        AND Course_Number = Section_Course_Number
        AND Enrollment_Course_Number = '".$_POST["courseNUmber"]."'
        GROUP BY Section_Number;";

$result = mysql_query($query, $link) or die(mysql_error());


$i=0;
if ($i<mysql_numrows($result)){
        echo "Course Number: ".$_POST["courseNumber"], "<BR>", "<BR>";

        for($i=0; $i<mysql_numrows($result); $i++){
                echo "Section Number: ", mysql_result($result,$i, Section_Number), "<BR>";
                echo "Classroom: ", mysql_result($result,$i, Section_Classroom), "<BR>";
                echo "Start Time: ", mysql_result($result,$i, Section_Start_Time), "<BR>";
                echo "End Time: " mysql_result($result,$i, Section_End_Time), "<BR>";
                echo "Meeting Days: ", mysql_result($result,$i, Section_Meeting_Days), "<BR>";
                echo "Seats: " mysql_result($result,$i, "Seats"), "<BR>", "<BR>", "<BR>";
        }
}

else{
     	echo "INVALID Course Number, Course NOT FOUND", "<BR>", "<BR>", "<BR>";
}


mysql_close($link);
?>


<button onclick = "previous()"> Previous</button>

<script>
function previous(){
        window.history.back();
}
</script>


</fieldset>
</div>
</body>
</html>



