<?php 
include '../App/connection.php';

// Save  record

if (isset($_POST['AddNewStudent'])) {
  $FName = $_POST['FirstName'];
  $MName = $_POST['MiddleName'];
  $LName = $_POST['LastName'];
  $Course = $_POST['Course'];
  $Email = $_POST['Email'];

  $query = "INSERT INTO students (FName, MName, LName, Course, Email) VALUES ('$FName', '$MName','$LName','$Course','$Email')";
  mysqli_query($con, $query);
  header('location: ../Public/home.php');
  exit();
}

// Delete  record

if (isset($_POST['DelStudent'])) {
    $id = $_POST['DelStudent'];
    // echo "Deleting student id : $id";
    $query =  "DELETE FROM students WHERE StudentID = $id";


    if (mysqli_query($con, $query)) {
        header('location: ../Public/home.php');
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

//Edit record

if (isset($_POST['EditStudent'])) {
  $StudentID = $_POST['StudentID'];
  $FName = $_POST['FirstName'];
  $MName = $_POST['MiddleName'];
  $LName = $_POST['LastName'];
  $Course = $_POST['Course'];
  $Email = $_POST['Email'];

  $query = "UPDATE students SET FName = '$FName', MName = '$MName', LName = '$LName', Course = '$Course', Email = '$Email' WHERE StudentID = $StudentID";
  mysqli_query($con, $query);
  header('location: ../Public/home.php');
  exit();
}



 ?>