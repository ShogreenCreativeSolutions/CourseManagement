<!DOCTYPE html>
<html>
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
            font-size: 80px;
            background-color: red;
            color: white;
            position: fixed;
            top: 0px;
            height: 200px;
            width:1600px;
            margin-left:;



        }
        #content{
            margin-top: 200px;

        }
        .hide{
            visibility: hidden;
        }
    </style>
</head>
<body>


<div id="header">
<span id="title">Course Management System<span>
</div>
<div id="content" >
<table>
<form action="results.php" method="POST" name="course_mgmt" class="">
    <tr>
        <td><label for="selectSemester">Semester: </label>
            <select name="selectSemester" id="selectID" form="course_mgmt">
                <option value="spring">Spring</option>
                <option value="summer">Summer</option>
                <option value="summer">Fall</option>
            </select>
        </td>
        <td>
            <label for="courseId">Course: </label>
            <input type="text" name="courseId" id="courseId" size="30" placeholder ="Enter course number." required="required"/>

        <td><label for="selectOption">Options: </label>
            <select name="selectOption" id="selectOption" form="course_mgmt">
                <option value="courses">Print Your Courses</option>

            </select>
        </td>
    </tr>
    <tr>
        <td><input type="submit" value="Search Classes"/></td>
    <td><input type="reset" value="Clear form"/></td>
    </tr>

</form>
</table>
</div>
</body>

</html>

