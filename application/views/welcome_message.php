<?=include_once('layouts/header.php');?>
	<div class="container">
		<h3>View All Posts</h3>
		<?php 
			if($msg = $this->session->flashdata('msg')):
				echo $msg;
			endif
		?>
		<?=anchor('welcome/create', 'Add Post', ['class' => 'btn btn-primary']);?>
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Creation Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($posts)): ?>
					<?php foreach ($posts as $post): ?>
						<tr>
							<td><?=$post->title;?></td>
							<td><?=$post->description;?></td>
							<td><?=$post->date_created;?></td>
							<td>
								<?=anchor("welcome/view/{$post->id}", 'View', ['class'=>'label label-primary']);?>
								<?=anchor("welcome/update/{$post->id}", 'Update', ['class'=>'label label-success']);?>
								<?=anchor("welcome/delete/{$post->id}", 'Delete', ['class'=>'label label-danger']);?>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php else: ?>
				<tr>
					<td>No Records Found!</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table> 
	</div>
<?=include_once('layouts/footer.php');?>