<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Faculty</title>
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
            width: 100%;
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
<?php
$choice = 'Faculty';

?>
<div id="header">
<span id="title">Course Management System<span>
</div>
<div id="content">
<table>
    <form action="faculty_results.php" method="POST" name="course_mgmt">
        <tr>
            <td><label for="idNum">ID Number: </label><input type="text" name="idNum" id="idNum" size=\"50\" placeholder ="Enter ID number." required="required"/></td>
            <td>
                <label for="courseId">Course: </label>
                <input type="text" name="courseId" id="courseId" size="30" placeholder ="Enter course number." required="required"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="semester">Semester: </label>
                <select name="semester" id="semester" >
                    <option value="Spring">Spring</option>
                    <option value="Summer">Summer</option>
                    <option value="Fall">Fall</option>
                </select>
            </td>

            <td><label for="selectOption">Options: </label>
                <select name="selectOption" id="selectOption" >
                    <option value="Print Courses" selected="selected">Print Your Courses</option>
                    <option value="Print Roster">Print Your Roster</option>
                </select>
            </td>
        </tr>
      <tr>
        <td colspan="2" style="text-align:center;"><input type="submit" value="Submit"/>
       <input type="reset" value="Clear form"/></td>
        </tr>
        <input type="hidden" id="choice" name="choice" value="<?php echo $choice; ?>">
    </form>
</table>
</div>
</body>
</html>