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
$idNum = $_POST['idNum'];
$courseNum = $_POST['courseId'];
$semester = $_POST['semester'];
$action = $_POST['selectOption']

?>
<div id="header">
<span id="title">Course Management System<span>
</div>
<div id="content" >
    <table>
        <tr>
            <td>Type: <?php echo $choice; ?></td>
        </tr>
        <tr>
            <td>Faculty Id: <?php echo $idNum; ?></td>
        </tr>
        <tr>
            <td>Course Id: <?php echo $courseNum; ?></td>
        </tr>
        <tr>
            <td>Semester: <?php echo $semester; ?></td>
        </tr>
        <tr>
            <td>Action: <?php echo $action; ?></td>
        </tr>
    </table>
</div>
</body>

</html>

<?php
