<?php
require_once('../Model/userModel.php');
if (isset($_POST['info'])) {
    $std = $_POST['info'];

    $info = json_decode($std);

    $result = searchInfo($info->Employe_name);

    echo json_encode($result);
}
?>
