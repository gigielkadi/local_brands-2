<?php
include('../includes/connection.php');


if (isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_type'];

    // select data from database
    $select_query="select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($conn,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('category already exists')</script>";
        exit();
    }
    else{

    $insert_query="insert into `categories` (category_title) values ('$category_title')";
    $reuslt=mysqli_query($conn,$insert_query);
    if($reuslt){
        echo "<script>alert('category inserted successfully')</script>";

    }
    else{
        echo "<script>alert('category not inserted successfully')</script>";
    }
}

}
?>

<h2 class="text-center">insert categories</h2>


<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_type" placeholder="insert categories" aria-label="categories" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-autos">
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="insert categories">
</div>

</form>