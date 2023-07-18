<?php
session_start();
require('config/dbcon.php');
// include('authentication.php');


// if (isset($_POST['submit'])) {

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $number = $_POST['number'];
//     $message = $_POST['message'];

//     $img = $_FILES['files']['name'];


//     if ($_FILES['files']["size"] > 500000) {
//         $_SESSION['cons_msg'] = " image size is to Big";
//         header('location:../contact.php');
//     }
//     echo $_FILES['files']["size"];
//     $img_ext = ['png', 'jpg', 'jpeg','pdf'];

//     $file_ext = pathinfo($img, PATHINFO_EXTENSION);

//     $img_name = time() . '.' . $file_ext;

//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $_SESSION['cons_msg'] = "Invailid Email";
//         header('location:../contact.php');
//     } else {

//         if (!in_array($file_ext,$img_ext)) {

//             $_SESSION['cons_msg'] = "img only in jpg  or jpeg ext";
//               header('location:../contact.php');
// } else {


//             $sql = "INSERT INTO contact(name,email,phone,message,pdf_file) VALUES('$name','$email','$number','$message','$img_name')";

//             $connect_db = mysqli_query($con, $sql);

//             if ($connect_db) {
//                 move_uploaded_file($_FILES['files']['tmp_name'], 'upload/' . $img_name);

//                 $_SESSION['cons_msg'] = "We Are Connect Soon....";
//                 header('location:../contact.php');
        

//             } else {

//                 $_SESSION['cons_msg'] = "Somthing went wrong";
//                 header('location:../contact.php');
//             }
//         }
//     }
// };


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_tbl(name,email,phone,messages)VALUES('$name','$email','$phone','$message')";

    $connect_db = mysqli_query($con, $sql);

    if ($connect_db) {
        $_SESSION['cons_msg'] = "We are connect Soon";
        header('location:../contact.php');
    } else {
        $_SESSION['cons_msg'] = "Somthing went wrong";
        header('location:../contact.php');
    }
}

if (isset($_POST['submit_index'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_tbl(name,email,phone,messages)VALUES('$name','$email','$phone','$message')";

    $connect_db = mysqli_query($con, $sql);

    if ($connect_db) {
        $_SESSION['cons_msg'] = "We are connect Soon";
        header('location:../index.php');
    } else {
        $_SESSION['cons_msg'] = "Something went wrong";
        header('location:../index.php');
    }
}






// ----------------------------------------------UPDATE---------------------------------------

if (isset($_POST['update_cus'])) {

    $id = $_POST['cus_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "UPDATE contact_tbl SET name='$name', email='$email',phone='$phone',messages='$message' WHERE contact_id ='$id'";
    $query_run = mysqli_query($con, $query);


    if ($query_run) {
        $_SESSION['cons_msg'] = "User details Updated";
        header('location:index.php');
    } else {
        $_SESSION['cons_msg'] = "User details updating failed";
        header('location:index.php');
    }
}




// --------------------------------------------delete----------------------------------

if (isset($_POST['delete_msg'])) {

    $user_id = $_POST['delete_msg_id'];

    $query_delete = " DELETE FROM contact_tbl WHERE  contact_id ='$user_id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {

        $_SESSION['cons_msg'] = "User details deleted";
        header('location:index.php');
    } else {
        $_SESSION['cons_msg'] = "User details deletion failed";
        header('location:index.php');
    }
}
