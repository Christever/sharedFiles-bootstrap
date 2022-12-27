<?php
if (isset($_FILES["image"]) && $_FILES["image"]["error"]===0){
    if ($_FILES["image"]["size"] <= 3000000) {
        $information  = pathinfo($_FILES["image"]["name"]);
        $extentionImg = $information['extension'];
        $extArray = ["png", "gif", "jpg", "jpeg"];

        if (in_array($extentionImg, $extArray)){
            $newImage = time().rand().rand().".".$extentionImg;
            move_uploaded_file($_FILES["image"]["tmp_name"], "./uploads/". $newImage);
            $send = true;
            header("location: index.php?send=$send&newImage=$newImage");
            exit();
        }
        
    }
}
else {
    echo "ERREUR";
}