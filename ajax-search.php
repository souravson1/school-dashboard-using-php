<?php
$search_value= $_POST["search_term"];
include 'config.php';
$sql = "SELECT * FROM admission where reg_no LIKE '%{$search_value}%'";
$result = mysqli_query($db,$sql);
$output="";
if(mysqli_num_rows($result)>0){
  

    while($row=mysqli_fetch_assoc($result)){
        $output .="<tr><td align='center'>{$row["reg_no"]}</td><td>{$row["first_name"]}</td> </tr>";
    }
    
   
    echo $output;


}

?>