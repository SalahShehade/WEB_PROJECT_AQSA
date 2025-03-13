<?php

include("config.php");
require_once("productscomp.php");
if(isset($_POST['input'])){

    $input=$_POST['input'];
    $query="SELECT * FROM products WHERE pro_name LIKE '{$input}%'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){?>

    <table class="table table-bordered table-striped mt-4">
        <thead>
           
        <tr>
            <th>pro_id</th>
            <th>pro_name</th>
            <th>cat_id</th>
            <th>pro_price</th>
            <th>pro_thumb</th>
            <th>pro_desc</th>
        </tr>


        </thead>
           <tbody>
            <?php
            
            while($row=mysqli_fetch_assoc($result)){

                $id=$row['pro_id'];
                $name=$row['pro_name'];
                $catid=$row['cat_id'];
                $price=$row['pro_price'];
                $img=$row['pro_thumb'];
                $desc=$row['pro_desc'];

                ?>

                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $name;?></td>
                    <td><?php echo $catid;?></td>
                    <td><?php echo $price;?></td>
                    <td><?php echo $img;?></td>
                    <td><?php echo $desc;?></td>
                </tr>

                <?php
            }
            
            
            ?>

           </tbody>

    </table>

    <?php

    }else{

        echo"<h6 class='text-danger text-center mt-3'>No data Found</h6>";
    }
}

?>