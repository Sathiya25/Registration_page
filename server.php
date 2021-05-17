<?php

session_start();

$name = "";
$email="";

$errors = array();

$db = mysqli_connect("localhost","root","","registration") or die("DB not connected");

if($db){
    echo "Database connected ";
  }else{
      echo "Error";
  }


    $name = mysqli_real_escape_string($db, $_POST['name']);
    $rno = mysqli_real_escape_string($db, $_POST['rno']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pnumber = mysqli_real_escape_string($db, $_POST['pnumber']);
    $college = mysqli_real_escape_string($db, $_POST['college']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $district = mysqli_real_escape_string($db, $_POST['district']);

    if(empty($name)) {array_push($errors, "name is required");}
    if(empty($rno)) {array_push($errors, "roll number is required");}
    if(empty($age)) {array_push($errors, "age is required");}
    if(empty($email)) {array_push($errors, "email is required");}
    if(empty($pnumber)) {array_push($errors, "phone number is required");}
    if(empty($college)) {array_push($errors, "college is required");}
    if(empty($state)) {array_push($errors, "state is required");}
    if(empty($district)) {array_push($errors, "district is required");}

//unique user



if(count($errors) == 0){
    $insert_query = "INSERT INTO users (uname, rno, age, email, pnumber, college, ustate, district) VALUES ('$name', '$rno', '$age', '$email', '$pnumber', '$college', '$state', '$district');" ;
    mysqli_query($db, $insert_query);
    $_SESSION['name'] = $name;
    $_SESSION['sucess'] = "Sucessfully Registered";

    header('location: final.php');
}

?>