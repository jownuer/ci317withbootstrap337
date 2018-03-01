<?=include_once('layouts/header.php');?>

	<div class="container">
		<h3>View Post</h3>
		<h4><?=$post->title;?></h4>
		<p><?=$post->description;?></p>
		<h5><?=$post->date_created;?></h5>
		<?=anchor('welcome', 'Back', ['class' => 'btn btn-default']);?>
	</div>

<?=include_once('layouts/footer.php');?>