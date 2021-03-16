<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Json PHP</h1>

    <?php

     $filepath = "data.txt";

     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $gen = $_POST['gen'];
     $email = $_POST['email'];
     $uname = $_POST['uname'];
     $pwd = $_POST['pwd'];
     $remail = $_POST['remail'];

     $arr1 = array('FirstName' => $fname, 'LastName' => $lname, 'Gender' => $gen, 'Email' => $email, 'Username' => $uname, 'Password' => $pwd, 'Recovery email address' => $remail);
     $file = fopen($filepath, "w");
     $arr1_encode = json_encode($arr1);
     fwrite($file, $arr1_encode);
     fclose($file);


    ?>

</body>
</html>