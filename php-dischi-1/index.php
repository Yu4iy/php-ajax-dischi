<?php
	require_once __DIR__ . '/data.php';
	require_once __DIR__ . '/my-func.php';
?>



<div class="container">
<?php
    $test = map($database,  function($userProfile)
    {
?>  

	<div class="card">      
		<img src="<?php echo $userProfile['poster'] ?>" alt="">
		<h3><?php echo $userProfile['title'] ?></h3>
		<p class="text"><?php echo $userProfile['year'] ?></p>
		<p class="text"><?php echo $userProfile['genre'] ?></p>
	</div>	
            
<?php    
    });
?>
</div>
<style>
	.container{
		display: flex;
		flex-wrap: wrap;
	}
	.card{
		padding: 10px;
		text-align: center;
	}
	img{
		width: 250px;
		height: 250px;
	}
</style>