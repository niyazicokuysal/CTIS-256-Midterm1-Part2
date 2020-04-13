<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST") {
	$error = [] ;
    extract($_POST, EXTR_PREFIX_ALL, "p");
	
    if($p_title == ""){
		$error[] = "title";
	}
	
	$re = '/^https?\:\/\/(?:\w+\.){1,3}\w+$/';
	if (preg_match($re, trim($p_url)) === 0) {
		$error[] = "url";
	}
	
	
    if ( empty($error)) {
		
		$out["title"] = $p_title;
		$out["url"] = $p_url;
		$comp = explode("://", $p_url);
		$out["protocol"] = $comp[0];
		$out["domain"] = $comp[1];
		if(isset($p_share)){
			$out["share"] = 1;
		}else{
			$out["share"] = 0;
		}
		
        require "result.php" ; 
	}else{
		require "form.php";
	}
}

if ( $_SERVER["REQUEST_METHOD"] == "GET") {
    require "./header.php" ;
	
	echo 
		'<a class="wlc">Welcome to Bookmark Managment System</a>
		<a href="form.php" class="btn-floating btn-large red pulse"><i class="large material-icons">add</i></a>
	';
}