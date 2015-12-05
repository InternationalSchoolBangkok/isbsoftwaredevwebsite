<?php
	$week = $_GET["week"];//This is the week to EDIT not the week to display
	if($week==""){
		header("Location: ../editor/");
	}
?>
<script src="../jquery.min2.js"></script>
<script>
function setCookie(cname, cvalue) {
	var d = new Date();
	d.setTime(d.getTime() + 3000);
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	}
	return "";
}
$(document).ready(function() {
	var cookie = getCookie("scroll");
	if(cookie != ""){
		setTimeout(function(){$(document).scrollTop(cookie);},100);
	}
});
$(document).click(function (event) {
	setCookie("scroll",$(document).scrollTop())
});
</script>
<?php if($_COOKIE["magic_word"]=="softdev1234"): ?>
	<style>
	img{
		width:100px;
	}

	</style>
	<?php
	$foodArray = ["asian","continental","noodle","japanese","veggies","live"];
	$dayArray = ["Monday","Tuesday","Wednesday","Thursday","Friday"];
	$lDayArray = ["monday","tuesday","wednesday","thursday","friday"];
	$cache = array();
	if(file_exists("phpcache")){
		$cache = unserialize(file_get_contents("phpcache"));//array associating filename to extension
	}
	echo "<a>This page will edit week ".$week."</a><br><a href='../editor/'>Click here to return to the week select page</a>";
	?>
	<div class="section" id="section1">
		<?php
		for($day=0;$day<5;$day++){
			echo "<div class='slide' id='slide".($day+1)."' data-anchor='slide".($day+1)."'>".
			"\n<h1>".$dayArray[$day]."</h1>
			<div class='menu'>
			<table>
			<tr>
			<td>Asian</td>
			<td>Continental</td>
			<td>Noodle</td>
			<td>Japanese</td>
			<td>Vegetarian/Salads</td>
			<td>Live Station</td>
			</tr>";
			for($row=0;$row<4;$row++){
				echo "<tr>\n";
				for($col=0;$col<6;$col++){
					$img = "week".$week.$lDayArray[$day].$foodArray[$col].($row+1);
					$extension = ".".$cache[$img];
					/*if($cache[$img]!=""){
					$extension = ".".$cache[$img];
				}else{
				$img =  "blank";
				$extension = ".png";
			}*/
			echo "<td class='tdhover'><img class='imghover' src='images/".$img.$extension."'>".
			"\n<form action='upload.php' method='post' enctype='multipart/form-data'>".
			"\n<input type='file' name='".$img."'>".
			"\n<input value='Submit Image' type='submit'>".
			"\n</form>".
			/*Delete Picture Form*/
			"\n<form action='delete.php' method='post'>".
			"\n<input type='submit' name='".$img."' value='Delete Image'/>".
			"\n</form>".
			/*Description Form*/
			"\n<form action='upload.php' method='post'>".
			"\n<textarea cols='20' rows ='3' name='".$img."'>".$cache["descriptions"][$img]."</textarea><br>".
			"\n<input value='Submit Description' type='submit'>".
			"\n</form>".
			"\n</td>";
		}
		echo "</tr>\n";
	}
	echo "</table>".
	"\n</div>".
	"\n</div>";
}
?>
</div>
<?php else: ?><?php header("Location: pass.php"); ?>
<?php endif ?>
