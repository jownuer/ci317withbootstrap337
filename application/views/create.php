<?=include_once('layouts/header.php');?>

	<div class="container">
			<?=form_open('welcome/save', ['class' => 'form-horizontal']);?>
			<fieldset>
				<legend>Add Post</legend>
				<div class="form-group">
					<label for="inputEmail" class="col-md-2 control-label">Title</label>
					<div class="col-md-5">
						<?=form_input(['name' => 'title', 'placeholder' => 'Title', 'class' => 'form-control']);?>
					</div>
					<div class="col-md-5">
						<?=form_error('title', '<div class="text-danger">', '</div>');?>
					</div>
				</div>

				<div class="form-group">
					<label for="textArea" class="col-md-2 control-label">Description</label>
					<div class="col-md-5">
						<?=form_textarea(['name' => 'description', 'placeholder' => 'Description', 'class' => 'form-control']);?>
					</div>
					<div class="col-md-5">
						<?=form_error('description', '<div class="text-danger">', '</div>');?>
					</div>
				</div>		

				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
					<?=form_submit(['name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-default']);?>
					<?=anchor('welcome', 'Back', ['class' => 'btn btn-default']);?>
					</div>
				</div>
			</fieldset>
			<?=form_close();?>
		</form>
	</div>

<?=include_once('layouts/footer.php');?>