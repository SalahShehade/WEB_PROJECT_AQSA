<?php

//session_start();
include('config.php');
//if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
// header('location:login.php');
//}



############## update query


if(isset($_POST['submit'])){

	// echo 'you clicked on submit';
    $catname = $_POST['catname'];
	$cat_id = $_POST['hiddenID']; 


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
					$filePath = $location.$name;
					if(move_uploaded_file($tmp_name, $filePath)){
						//$smsg = "Uploaded Successfully";  
						
			$sql2 = "UPDATE category SET cat_name='$catname', cat_img='$filePath'  WHERE cat_id='$cat_id'";
 
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
		} 
		
			$sql_update = "UPDATE category SET cat_name='$catname' WHERE cat_id='$cat_id'";
		
		if (mysqli_query($conn, $sql_update)) {
		   
		$message = 'Saved Successfully';
		} else {
		  echo "Error: " . $sql_update . "<br>" . mysqli_error($conn);
		}

	 
		header('location:categories.php');
 

}







if(isset($_GET['id'])){
    $cat_id = $_GET['id'];
   $sql = "SELECT * FROM category  WHERE cat_id='$cat_id'";
   $result = mysqli_query($conn, $sql);
  // header('location:Products+.php');

$row = mysqli_fetch_assoc($result);

}
















?>

<?php include('header.php') ?>
<?php include('nav.php') ?>

<div class="container">

<div class="card">
<div class="card-header">
Edit Category
</div>
<div class="card-body">
<section id="content ">
	<div class="content-blog bg-white py-3">
		<div class="container"> 
        		<form method="post" enctype="multipart/form-data">
				<input type="hidden" name='hiddenID' value='<?php echo $cat_id?>'>
			  <div class="form-group">
			    <label for="Categoryname">Category Name</label>
			    <input type="text" class="form-control" value='<?php echo $row['cat_name']; ?>' name="catname" id="Catname" placeholder="Product Name">
			  </div>
			 

		
			  

			 
			  <?php if(isset($row['cat_img']) && !empty($row['cat_img'])){
				  ?>
	<img src="<?php echo $row['cat_img']; ?>" alt="" height='150' width='150'><br>
	<a href="delcatimg.php?id=<?php echo $row['cat_id'];?>">Delete Image</a><br>

				  <?php
			  }else{

 ?>
  <div class="form-group">
			    <label for="catimage">Category Image</label>
			    <input type="file" name="catimage" id="catimage">
			    <p class="help-block">Only jpg/png are allowed.</p>
			  </div>

				  <?php
			  } ?>
			
			  
			  <button type="submit" name='submit' class="btn btn-default">Submit</button>
			</form>
			
		</div>
	</div>

</section>
</div>
</div>

</div>


<?php include('footer.php') ?>