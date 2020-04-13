<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
	.formp{ width: 600px; margin: 0 auto; }
	h5{ text-align: center; }
	.error{color: red; font-style: italic; display: none; margin:0;}
	.share{margin-top: 30px; margin-right: 440px;padding: 5px 25px 5px 25px; background: #b7bdc7; border-radius: 50px; color: #58595c;}
	.switch{display: inline-block;}
	.btn{ margin-top: 50px; }
</style>
<body>
	<?php
		require "./header.php" ;
	?>
	<form class="formp" method="post" action="index.php">
		<h5>New Bookmark</h5>

		<div class="input-field"> 
			<i class="material-icons prefix">create</i>
			<input  id="title" name="title" type="text" value="<?= $p_title ?? '' ?>">
			<label for="title">Title</label>
			<div class="error count-error"<?= isset($error) && in_array("title", $error) ? ' style="display:block"' : '' ?>>Title cannot be empty!</div>
		</div>

		<div class="input-field">
			<i class="material-icons prefix">insert_link</i>
			<input  id="url" name="url" type="text" value="<?= $p_url ?? "" ?>">
			<label for="url">URL</label>
			<div class="error count-error"<?= isset($error) && in_array("url", $error) ? ' style="display:block"' : '' ?> >URL is not valid!</div>
		</div>

		<a class="share">Share</a>

		<div class="switch"><label>
			<input type="checkbox" name="share" <?= isset($p_share) ? "checked" : "" ?> >
			<span class="lever"></span>
			</label>	
		</div>

		<button class="waves-effect waves-light btn" type="submit" name="btnSubmit"><i class="material-icons right">send</i>Submit</button>
	</form>

</body>
</html>
