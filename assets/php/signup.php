<?php

session_start();

include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
  // checking user email validity
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // checking if email is in database
    $sql = mysqli_query($conn, "SELECT email FROM users WHERE email='{$email}'");
    if (mysqli_num_rows($sql) > 0) { //if email already exists
      // $row = mysqli_fetch_array($sql);
      echo "$email - already exists";
    } else {
      // checking user upload file or not
      if (isset($_FILES['image'])) {   //if file is uploaded
        $img_name = $_FILES['image']['name'];   //user upload img
        //$img_type=$_FILES['image']['type'];    //user upload img type
        $tmp_name = $_FILES['image']['tmp_name'];    //temporary name to save file in folder

        //get img extension
        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode); //get ext here

        $extensions = ['png', 'jpeg', 'jpg'];   //accepted and valid extensions
        if (in_array($img_ext, $extensions) === true) {    //if user uploaded file wid or specified exts
          $time = time(); //return as current time, used so all images have uique names
          //moving user img to our particular folder
          $new_img_name = $time . $img_name;
          if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {    //if upload n move successful
            $status = "Active now";  //once user signed up then his status will be active
            $random_id = rand(time(), 100000000);  //creating random id for user
            //inserting all user data into table
            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}','{$status}')");
            if ($sql2) {    //on successful data insertion
              $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
              if (mysqli_num_rows($sql3) > 0) {
                $row = mysqli_fetch_assoc($sql3);
                $_SESSION["unique_id"] = $row["unique_id"];  //using unique id for session.
                echo "success";
              }
            } else {
              echo "Something went wrong";
            }
          }
        } else {
          echo "please select an image file - jpg, jpeg, png!";
        }
      } else {
        echo "Please upload an image";
      }
    }
  } else {
    echo "$email -This is not a valid email";
  }
} else {
  echo "all input fields are required!";
}
