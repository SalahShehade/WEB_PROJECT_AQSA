<?php

//session_start();
include('config.php');
//if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
// header('location:login.php');
//}
?>
<?php include('header.php') ?>
<?php include('nav.php') ?>

<div class="container">

<div class="card">
<div class="card-header">
All Products
</div>
<div class="card-body">
<section id="content mt-5">
	<div class="content-blog  bg-white">
		<div class="container">
			<table class="table table-striped">
				<thead>
					<tr> 
						<th>Product Name</th>
						<th>Category Name</th>
						<th>Thumbnail</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

                <?php
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
      
        <tr>
            <td><?php echo $row["pro_name"] ?></td>
            <td><?php echo $row["cat_id"] ?></td>
            <td><?php if(isset($row["pro_thumb"])){echo 'yes'; }else{ echo 'No'; }  ?></td> 
            <td><a href='editProducts.php?id=<?php echo $row["pro_id"] ?>'>Edit</a> 
            | <a href='delProducts.php?id=<?php echo $row["pro_id"] ?>'>Delete</a></td>
        </tr>

        
        <?php
        }
      } else {
        echo "0 results";
      }


?>

			 
				</tbody>
			</table>
			
		</div>
	</div>

</section>
</div>
</div>


</div>




<?php include('footer.php') ?>