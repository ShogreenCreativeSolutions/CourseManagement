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

<?php

$choice = $_POST['choice'];

if(isset($_POST['choice']) && $choice == "student") {

header("Location: student.php" );
exit;

}
if(isset($_POST['choice']) && $choice == "faculty") {
header("Location: faculty.php" );
exit;
}
if(isset($_POST['choice']) && $choice == "goback") {
header("Location: course_mgmt.php" );
exit;
}?>
<div id="header">
<span id="title">Course Management System<span>
</div>
<div id="content" >
    <table>

            <tr>
                <td><p style="font-size: 50px;"> Here are your results.</p></td>
            </tr>

    </table>
</div>
</body>

</html>

