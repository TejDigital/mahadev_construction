
<?php
include('authentication.php');
require('config/dbcon.php');


if (isset($_POST['vi_upload'])) {

$video = $_POST['video_upl'];
$status = $_POST['status'];
$convertUrl = str_replace("watch?v=","embed/",$video);

$sql = "INSERT INTO video_tbl(video_name,status)VALUES('$convertUrl','$status')";

$connect_db = mysqli_query($con,$sql);

if ($connect_db) {

    $_SESSION['fire_msg'] = "video uploaded  Successfully.";
    header('location:video_tbl.php');
} else {

    $_SESSION['fire_msg'] = "Somthing went wrong";
    header('location:video_tbl.php');
}
}



// --------------------------------------------delete-video---------------------------------

if (isset($_POST['delete_video'])) {

$video_id = $_POST['delete_video_id'];

$query_delete = " DELETE FROM video_tbl WHERE  id ='$video_id'";

$query_delete_run = mysqli_query($con, $query_delete);

if ($query_delete_run) {

    $_SESSION['fire_msg'] = "Videdo deleted";
    header('location:video_tbl.php');
} else {
    $_SESSION['fire_msg'] = "Video deletion failed";
    header('location:video_tbl.php');
}
}

?>