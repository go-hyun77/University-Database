<html>
<body>

<div id="main">

<h1>University Mock Database Project</h1>

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

$query = "SELECT Course_Title, Enrollment_Course_Number, Enrollment_Section_Number, Grade
        FROM ENROLLMENT, COURSE
        WHERE Enrollment_Course_Number
	AND Enrollment_CWID = " .$_POST["studentCWID"];


$result = mysql_query($query, $link) or die(mysql_error());

$i=0;

if ($i<mysql_numrows($result)){
        echo "Student CWID: " .$_POST["studentCWID"], "<BR>";
        echo "Results: ", mysql_numrows($result), "<BR>", "<BR>";

	for($i=0; $i<mysql_numrows($result); $i++){
                echo "Course Name: ", mysql_result($result,$i, Course_Title), "<BR>";
                echo "Course Number: ", mysql_result($result,$i, Enrollment_Course_Number), "<BR>";
                echo "Section Number: ", mysql_result($result,$i, Enrollment_Section_Number), "<BR>";
                echo "Grade: ", mysql_result($result,$i, Grade), "<BR>", "<BR>", "<BR>";
        }
}

else{
	echo "INVALID CWID, STUDENT NOT FOUND", "<BR>", "<BR>", "<BR>";
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
