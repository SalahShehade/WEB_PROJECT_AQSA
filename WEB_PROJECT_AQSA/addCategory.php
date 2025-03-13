
<?php

//session_start();
include('config.php');
// if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
//  header('location:login.php');
// }
?>

<?php include('header.php') ?>
<?php include('nav.php') ;

if(isset($_POST['submit'])){
    $catname = $_POST['catname'];
    

    
		if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['catimage']['name'];
			$size = $_FILES['catimage']['size'];
			$type = $_FILES['catimage']['type'];
			$tmp_name = $_FILES['catimage']['tmp_name'];

			$max_size = 10000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) && !empty($name)){
				if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
					$location = "uploads/";
					if(move_uploaded_file($tmp_name, $location.$name)){
						//$smsg = "Uploaded Successfully";
						$sql2 = "INSERT INTO category (cat_name, cat_img)
                        VALUES ('$catname','$location$name')";
						$res = mysqli_query($conn, $sql2);
						if($res){
							//echo "Product Created";
							$message = 'Saved Successfully with image';
						}else{
                            $message = "Failed to Create Product";
                            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
						}
					}else{
						$message = "Failed to Upload File";
					}
				}else{
					$message = "Only JPG files are allowed and should be less that 1MB";
				}
			}else{
				$message = "Please Select a File";
			}
		}else{
    $sql = "INSERT INTO category (cat_name, cat_img)     VALUES ('$catname' )";

if (mysqli_query($conn, $sql)) {
   
$message = 'Saved Successfully';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

}


 



?>

<div class="container">
<div class="card">
<div class="card-header">
Add Category
</div>
<div class="card-body">
<section id="content ">
	<div class="content-blog bg-white py-3">
		<div class="container"> 
        <?php
        if(isset($message)){
            ?>
    <div class="alert alert-success"><?php echo $message ?></div>
        <?php
        }
        ?>
        		<form method="post" enctype="multipart/form-data" action='addCategory.php'>
			  <div class="form-group">
			    <label for="Catname">Category Name</label>
			    <input type="text" class="form-control" name="catname" id="Catname" placeholder="Cat Name">
			  </div>
			  

			  
			  

			 
			  <div class="form-group">
			    <label for="catimage">Category Image</label>
			    <input type="file" name="catimage" id="catimage">
			    <p class="help-block">Only jpg/png are allowed.</p>
			  </div>
			  
			  <button type="submit"  name ='submit' class="btn btn-primary">Submit</button>
			</form>
			
		</div>
	</div>

</section>
</div>
</div>


</div>


<?php include('footer.php'); ?>


















