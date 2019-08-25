<html>
<body>

<div id="main">

<h1>University Mock Database Project</h1>

</div>

<div style="background-color:lightgrey;">
<fieldset>
<legend>Professors:</legend>


<?php

$link = mysql_connect('mariadb', 'cs332s13', airo0Fee');

if (!$link) {
	die('Connection failed: '. mysql_error());
}

echo 'Connection successful.<p>';

mysql_select_db("cs332s13", $link);

$query = "SELECT Course_Title, Classroom, Meeting_Days, Start_Time, End_Time
        FROM COURSE, SECTION, PROFESSOR
        WHERE Professor_SSN = Section_Professor_SSN
	AND Course_Number = Section_Course_Number
        AND Professor_SSN = " .$_POST["sno"];


$result = mysql_query($query, $link) or die(mysql_error());

$i=0;
if ($i<mysql_numrows($result)){
        echo "Professor SSN: ".$_POST["sno"],"<BR>", "<BR>";

	for($i=0, $i<mysql_numrows($result); $i++){
                echo "Course Name: ", mysql_result($result,$i, Course_Title), "<BR>";
                echo "Classrooms: ", mysql_result($result,$i, Section_ Classroom), "<BR>";
                echo "Meeting Days: ", mysql_result($result,$i, Section_Meeting_Days), "<BR>";
                echo "Start Time: ", mysql_result($result,$i, Section_Start_Time), "<BR>";
                echo "End Time: ", mysql_result($result,$i, Section_End_Time), "<BR>", "<BR>";
        }
}

else{
	echo "INVALID SSN, Professor NOT FOUND", "<BR>", "<BR>", "<BR>";
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
