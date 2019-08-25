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

$query = "SELECT Grade, COUNT(*) as 'Count'
        FROM ENROLLMENT, COURSE, SECTION
        WHERE Course_Number = Section_Course_Number
	AND Enrollment_Course_Number = Course_Number
        AND Enrollment_Section_Number = Section_Number
        AND Section_Number = ".$_POST["sectionNumber"]."
        AND Course_Number = '".$_POST["courseNumber"]."'
        GROUP BY Grade;";

$result = mysql_query($query,$link) or die(mysql_error());

$i=0;
if ($i<mysql_numrows($result)){
	echo "Course Number: " . $_POST["courseNumber"], "<BR>";
        echo "Section Number: " . $_POST["sectionNumber"], "<BR>", "<BR>", "<BR>";

        for($i = 0; $i<mysql_numrows($result); $i++){
                echo mysql_result($result,$i,"Count"), "student(s) received: ", mysql_result($result,$i, Grade), "<BR>";
        }

	echo "<BR>";
}

else{
     	echo "INVALID QUERY, Course/Section NOT FOUND", "<BR>", "<BR>", "<BR>";
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
