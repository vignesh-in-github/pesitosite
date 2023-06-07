<?php
if(isset($_POST["submit"])) {
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["image_upload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//   $check = getimagesize($_FILES["image_upload"]["tmp_name"]);
//   if($check !== false) {
//     $uploadOk = 1;
//   } else {
//     $uploadOk = 0;
//   }


// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// if ($_FILES["image_upload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// } else {
//   if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], $target_file)) {
//     // echo "The file ". htmlspecialchars( basename( $_FILES["image-upload"]["name"])). " has been uploaded.";
 
// convert form data to json format
    $postArray = array(
      "resname" => $_POST['restaurant_name'],
      "rescusines" => $_POST['restaurant_cuisines'],
      "resavailablity" => $_POST['restaurant_avail'],
      "resratings" => $_POST['restaurant_points'],
      "resdistance" => $_POST['restaurant_distance'],
      "resprice" => $_POST['restaurant_price']
        ); 

    $json = json_encode( $postArray );
   
    $file = 'entries.json';
    // write to file
    
    file_put_contents( $file, $json, FILE_APPEND);

  } 
//   else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
// }
?>
    <form action="" methood="post" class="add-item" id="ajax-form-data"> 
        <!-- enctype="multipart/form-data" -->
        <div class="mb-3">
            <label for="image-upload" class="form-label">Upload image*:</label>
            <input type="file" id="image-upload" class="form-control" name="image_upload">
        </div>
        <div class="mb-3">
            <label for="restaurant-name" class="form-label">Restaurant Name*:</label>
            <input type="text" id="restaurant-name" class="form-control" name="restaurant_name" value="">
        </div>
        <div class="mb-3">
        <label for="restaurant-cuisines" class="form-label">Cuisines Available*:</label>
            <input type="text" id="restaurant-cuisines" class="form-control" name="restaurant_cuisines" value="">
        </div>
        <div class="mb-3">
            <label for="restaurant-avail" class="form-label">Availablity*:</label>
            <select name="restaurant_avail" class="form-control" id="restaurant-avail">
                <option name="restaurant_avail" value="Accepting Orders" selected>Accepting Orders</option>
                <option name="restaurant_-avail" value="Not Accepting Orders">Not Accepting Orders</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="restaurant-points" class="form-label">Store Rating:*</label>
            <input type="range" class="form-control" id="restaurant-points" name="restaurant_points" min="0" max="5" step="0.25" oninput="this.nextElementSibling.value = this.value">
            <output>4.5</output>
        </div>    
        <div class="mb-3">
            <label for="restaurant-distance" class="form-label">Store Distance:</label>
            <input type="text" class="form-control" id="restaurant-distance" name="restaurant_distance" value="">
        </div>
        <div class="mb-3">
            <label  for="restaurant-price" class="form-label">Average Price:*</label>
            <input type="text" class="form-control" id="restaurant-price" name="restaurant_price" value="">
        </div>
        <div class="mb-3">
        <input class="btn btn-primary" type="submit" name="submit" value="Add Details">
            
        </div>
    </form>