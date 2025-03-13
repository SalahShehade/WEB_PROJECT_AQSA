<?php

//session_start();
include('config.php');
//if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
// header('location:login.php');
//}



############## update query


if(isset($_POST['submit'])){

	// echo 'you clicked on submit';
    $productname = $_POST['productname'];
    $productdescription = $_POST['productdescription'];
    $productcategory = $_POST['productcategory'];
    $productprice = $_POST['productprice']; 
	$product_id = $_POST['hiddenID']; 


		if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['productimage']['name'];
			$size = $_FILES['productimage']['size'];
			$type = $_FILES['productimage']['type'];
			$tmp_name = $_FILES['productimage']['tmp_name']; 
			$max_size = 10000000;
			$extension = substr($name, strpos($name, '.') + 1); 
			if(isset($name) && !empty($name)){
				if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
					$location = "uploads/";
					$filePath = $location.$name;
					if(move_uploaded_file($tmp_name, $filePath)){
						//$smsg = "Uploaded Successfully";  
						
			$sql2 = "UPDATE products SET pro_name='$productname', pro_desc='$productdescription',  
			cat_id='$productcategory', pro_price='$productprice', pro_thumb='$filePath'  WHERE pro_id='$product_id'";
 
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
		
			$sql_update = "UPDATE products SET pro_name='$productname', pro_desc='$productdescription',  
			cat_id='$productcategory', pro_price='$productprice' WHERE pro_id='$product_id'";
		
		if (mysqli_query($conn, $sql_update)) {
		   
		$message = 'Saved Successfully';
		} else {
		  echo "Error: " . $sql_update . "<br>" . mysqli_error($conn);
		}

	 
		header('location:Products+.php');
 

}







if(isset($_GET['id'])){
    $product_id = $_GET['id'];
   $sql = "SELECT * FROM products  WHERE pro_id='$product_id'";
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
Edit Products
</div>
<div class="card-body">
<section id="content ">
	<div class="content-blog bg-white py-3">
		<div class="container"> 
        		<form method="post" enctype="multipart/form-data">
				<input type="hidden" name='hiddenID' value='<?php echo $product_id?>'>
			  <div class="form-group">
			    <label for="Productname">Product Name</label>
			    <input type="text" class="form-control" value='<?php echo $row['pro_name']; ?>' name="productname" id="Productname" placeholder="Product Name">
			  </div>
			  <div class="form-group">
			    <label for="productdescription">Product Description</label>
			    <textarea class="form-control" name="productdescription" rows="3"> <?php echo $row['pro_desc']; ?> </textarea>
			  </div>

			  <div class="form-group">
			    <label for="productcategory">Product Category</label>
			    <select class="form-control" id="productcategory" name="productcategory">
				 
				 
				  <?php
                  
        
                  $sql2 = "SELECT * FROM Category";
                  $result2 = mysqli_query($conn, $sql2);
              
                
                      // output data of each row
                      while($row2 = mysqli_fetch_assoc($result2)) {
              
                          ?> 
				 <option value="<?php echo $row2["cat_id"] ?>" <?php
				 
				 if($row2["cat_id"] == $row['cat_id']){ echo 'selected';

				 }else{
					 echo '';
				 }
				 ?>><?php echo  $row2["cat_name"] ?></option> 
                      <?php
                      }
                  
                  ?>
				 
				</select>
			  </div>
			  

			  <div class="form-group">
			    <label for="productprice">Product Price</label>
			    <input type="text" class="form-control" value='<?php echo $row['pro_price']; ?>'  name="productprice" id="productprice" placeholder="Product Price">
			  </div>

			  <?php if(isset($row['pro_thumb']) && !empty($row['pro_thumb'])){
				  ?>
	<img src="<?php echo $row['pro_thumb']; ?>" alt="" height='150' width='150'><br>
	<a href="delproduImg.php?id=<?php echo $row['pro_id'];?>">Delete Image</a><br>

				  <?php
			  }else{

 ?>
  <div class="form-group">
			    <label for="productimage">Product Image</label>
			    <input type="file" name="productimage" id="productimage">
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