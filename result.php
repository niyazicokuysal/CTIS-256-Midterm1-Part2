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
	.tst{
		top: 650px !important;
        right: 700px; 
	}
</style>
<script>
	$(function(){
		M.toast({html: 'New Bookmark Added!', displayLength: 2000, classes: "rounded tst blue"});
	});
</script>
<body>
	<?php
		require "./header.php" ;
	?>
	
    <table class="highlight">
        <tr>
            <th>Title</th>
            <td><?= $out["title"] ?></td>
        </tr>
        <tr>
            <th>URL</th>
            <td><?= $out["url"] ?></td>
        </tr>
        <tr>
            <th>Protocol</th>
            <td><?= $out["protocol"] ?></td>
        </tr>
        <tr>
            <th>Domain</th>
             <td><?= $out["domain"] ?></td>
        </tr>
        <tr>
            <th>Share</th>
            <td><?= $out["share"] == 1 ? '<i class="material-icons">check</i>' : '<i class="material-icons">clear</i>'  ?></td>
		</tr>
	</table>
	

</body>
</html>
