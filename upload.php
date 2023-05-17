<?php 
require_once 'DBconfigration.php'; 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Form Data
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $listing_id = date("YmdHis");

    //Uploaded Files  
    $icon = $_FILES['icon'];
    $image_source = $_FILES['image_source'];

    //Query
    $query = "INSERT INTO `listings`(`id`, `user_name`, `user_id`, `icon`, `title`, `category`, `image_src`, `description`) VALUES ('{$listing_id}','{$username}','{$user_id}','{$icon['name']}','{$title}','{$category}','{$image_source['name']}','{$description}')";
    echo $query;

    //Execute Query
    $result = $mysqli->query($query);
    if($result){
        echo "Success";
    }else{
        echo "Failed";
    }
    $mysqli -> close();
}
?>
