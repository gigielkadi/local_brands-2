<?php
include('../includes/connection.php');


if (isset($_POST['insert_section'])){
    $section_title=$_POST['section_type'];

    // select data from database
    $select_query="select * from `sections` where section_title='$section_title'";
    $result_select=mysqli_query($conn,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('category already exists')</script>";
        exit();
    }
    else{

    $insert_query="insert into `sections` (section_title) values ('$section_title')";
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


<h2 class="text-center">insert section</h2>


<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="section_type" placeholder="insert section" aria-label="section" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-autos">
  <input type="submit" class=" bg-info border-0 p-2 my-3" name="insert_section" value="insert section">
</div>

</form>