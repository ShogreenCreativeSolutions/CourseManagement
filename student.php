<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>Student</title>
    <style>
        body{

        }
        p{
            font-family: Arial, sans-serif ;
            font-size: 18px;
        }
        ul {
            list-style-type: none;
            margin-left: 0;
            padding-left: 0;
            padding-top: 2px;
            background-color:#dedede;
            width: 250px;
            float: left;
            height: 800px;
            position: fixed;
            top:180px;
        }
        table{
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        td{
            padding: 10px;

        }
        #header{
            font-family: Arial, sans-serif;
            font-size: 80px;
            background-color: red;
            color: white;
            position: fixed;
            top: 0;
            height: 200px;
            width:1600px;
            margin-left:;



        }
        #content{
            margin-top: 200px;

        }
    </style>
</head>
<body>
<?php
    $choice = 'Student';

?>

<div id="header">
<span id="title">Course Management System<span>
</div>
<div id="content" >
<table>
<form action="student_results.php" method="POST" name="course_mgmt" class="">
    <tr>
        <td><label for="idNum">ID Number: </label><input type="text" name="idNum" id="idNum" size=\"50\" placeholder ="Enter ID number." required="required"/></td>
        <td>
            <label for="courseId">Course: </label>
            <input type="text" name="courseId" id="courseId" size="30" placeholder ="Enter course number." required="required"/>
        </td>
    </tr>
    <tr>
    <tr>
        <td><label for="semester">Semester: </label>
            <select name="semester" id="semester" >
                <option value="Spring" selected="selected">Spring</option>
                <option value="Summer">Summer</option>
                <option value="Fall">Fall</option>
            </select>
        </td>
        <td ><label for="selectOption">Options: </label>
            <select name="selectOption" id="selectOption" >
                <option value="Print Courses">Print Your Courses</option>

            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"  style="text-align:center;"><input type="submit" value="Submit"/>
<input type="reset" value="Clear form"/></td>
    </tr>
    <input type="hidden" id="choice" name="choice" value="<?php echo $choice; ?>">
</form>
</table>
</div>
</body>

</html>

