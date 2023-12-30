<?php
include 'header.php';
include 'dbcon.php';
   
   $dis="SELECT * FROM registration ORDER BY id ASC";
   $result = mysqli_query($con, $dis);
   if(mysqli_num_rows($result)>0){
	while($row= mysqli_fetch_array($result)){
		$link= $row["Img"];
?>
<main>
<div class="container">
    <div class="row">
    <div class="col-md-12" style=" margin-bottom: 0;">
	<div class="blog-card" style="background-color:rgb(255, 250, 250);border: 2px solid #07f918;border: 2px solid #07f918;border-radius: 10px 10px 10px 0px;padding:1rem;margin-top:1rem;color:green;"  >
	<div class="writer">
	<div class="w_name"><h4><?php echo $row["Email"]?></h4><p6><?php echo $row["Name"]?></p6></div></div>
                <div class="blog-card-body">
				<img style="border-radius: 10px; height: 12rem; width: 12rem; margin-right:10px; float:left;"class="card-img-top" src="<?php echo $link;?>" alt=" Post Image">
	               <h3 class="card-title"><?php echo $row["Title"]?></h3>
                    <p class="card-text"><?php echo $row["Comment"]?></p>
		   
        </div>
	    </div>
	   <ul class="like" style= "margin-top: 0;">
	   <li>Like</li>
	   <li>Dislike</li>
	   <li>wowww</li>
   </ul>
   </div>
</div>
</div>
<?php
	 }
	}
	?>
</main>

