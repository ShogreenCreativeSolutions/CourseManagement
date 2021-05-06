<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Course Management</title>
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
Course Management System
</div>


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
}
else

 echo "<div id=\"content\" >
    <h3>Search Courses<h3>
            <table>
                <form action=\"student.php\" method=\"POST\" name=\"course_mgmt\" >
                    <tr>
                        <td colspan=\"\"><label for=\"choice\">Student</label>
                            <input type=\"radio\" name=\"choice\" id=\"student\" value=\"Student\">
                            <label for=\"choice\">Faculty</label>
                            <input type=\"radio\" name=\"choice\" id=\"faculty\" value=\"Faculty\">
                        </td>
                    </tr>
                    <tr>
                        <td><label for=\"idNum\">ID Number: </label><input type=\"text\" name=\"idNum\" id=\"idNum\" size=\"50\" placeholder =\"Enter ID number.\" required=\"required\"/></td>
                    </tr>
                    <tr>
                        <td><input type=\"submit\" value=\"Search\"/>
                        <input type=\"reset\" value=\"Clear form\"/></td>
                    </tr>
                    
                </form>
            </table>
            <input type='hidden' name='type' value='<?php echo $choice; ?>'
</div>";

?>
</body>
</html>
