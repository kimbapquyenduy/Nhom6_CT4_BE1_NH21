<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'User.php'; ?>

    <form action="" medthod="get">
        Username : <input type="text" name="username"><br>
        Firstname : <input type="text" name="fname"><br>
        Lastname : <input type="text" name="lname"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <table border="1">
        <tr>
            <td>Username</td>
            <td>FullName</td>
        </tr>
        <?php


        if (isset($_GET['submit'])) {

            $User = new User($_GET['username'], $_GET['password'], $_GET['fname'], $_GET['lname']);


        ?>


    </table>


<?php  } ?>



</body>

</html>