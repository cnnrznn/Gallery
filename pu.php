<?php
date_default_timezone_set("America/New_York");

for( $i=0; $i<count($_FILES["photos"]["name"]); $i++ ) {
    $name = $_FILES["photos"]["name"][$i];
    $info = pathinfo($name);
    $movePath = "photos/".$info["filename"].date("_d_m_Y_H:i").".".$info["extension"];
    move_uploaded_file($_FILES["photos"]["tmp_name"][$i], $movePath);
}
?>
