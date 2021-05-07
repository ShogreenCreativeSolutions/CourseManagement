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

        table{
            margin-left: auto;
            margin-right: auto;

        }
        td{
            padding: 10px;
            font-size: 18px;

        }
        #header{
            font-size: 80px;
            background-color: red;
            color: white;
            position: fixed;
            top: 0px;
            height: 200px;
            width:1600px;

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

if(!empty($_POST['choice']) && $choice == "Student") {
    header("Location: student.php" );
    exit;

}

if(!empty($_POST['choice']) && $choice == "Faculty") {
    header("Location: faculty.php" );
    exit;
}
else

 echo "<div id=\"content\" >
            <table>
                <form action=\"\" method=\"POST\" name=\"course_mgmt\" >
                    <tr>
                        <td colspan=\"\"><label for=\"choice\">Student</label>
                            <input type=\"radio\" name=\"choice\" id=\"student\" value=\"Student\">
                            <label for=\"choice\">Faculty</label>
                            <input type=\"radio\" name=\"choice\" id=\"faculty\" value=\"Faculty\">
                        </td>
                    </tr>
                        <td><input type=\"submit\" value=\"Submit\"/>
                        <input type=\"reset\" value=\"Clear form\"/></td>
                    </tr>
                    
                </form>
            </table>
            <input type='hidden' name='type' value='<?php echo $choice; ?>'
</div>";

?>
</body>
</html>
