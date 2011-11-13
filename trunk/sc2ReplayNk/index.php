<?php
if (!defined("INDEX_CHECK"))
{
    die ("<div style=\"text-align: center;\">You cannot open this page directly</div>");
} 

global $nuked, $language, $query, $autor, $do, $into, $searchtype, $id_forum, $limit, $date_max, $p, $user;




if (!$user)
{
    $visiteur = 0;
} 
else
{
    $visiteur = $user[1];
} 

$level_access = 0;

if ($visiteur >= $level_access && $level_access > -1)
{
	opentable();
 ?>
 <?php
/*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>

 <?php
 $MAX_FILE_SIZE = 4000000;
 ?>
<html>
<head>
<style type="text/css">
table.events {
	float: left;
}
table.events td {
	border: solid #000 1px;
}
table.events th {
	border: solid #000 1px;
}
div.events {
	float: left;
}

</style>
<link type="text/css" href="modules/sc2Replay/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="Stylesheet" />
<script type="text/javascript" src="modules/sc2Replay/js/jquery-ui-1.8.16.custom.min.js"></script>
<script language="JavaScript">
<!--
function toggleVisible(id) {
   var a = document.getElementById?document.getElementById(id):document.all[id];
   if (a) {
	 if (a.style.display == 'block') a.style.display = 'none';
	 else a.style.display = 'block';
   }
   return false;
}

$(function() {

		$(".buttons").button();
		$( "#replayList" ).accordion({
			active: true,
			collapsible: true,
			alwaysOpen: false,
			autoHeight: false,
			navigation: true
		});
		$( ".apmImg" ).accordion({
			active: true,
			collapsible: true,
			alwaysOpen: false,
			autoHeight: false,
			navigation: true
		});
		
		$( "#filtre" ).accordion({
			active: true,
			collapsible: true,
			alwaysOpen: false,
			autoHeight: false,
			navigation: true
		});
		
		$( "#upload" ).accordion({
			active: true,
			collapsible: true,
			alwaysOpen: false,
			autoHeight: false,
			navigation: true
		});
	});
//-->
</script>
</head>
<body>
	<?php
	if ($visiteur >= 2){
	?>
		<div id="upload">
		<h3><a href="#">Upload Replay</a></h3>
			<div>
				<form enctype="multipart/form-data" action="index.php?file=sc2Replay" method="POST">
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $MAX_FILE_SIZE;?>" />
					<table>
					<tr>
					<td><label for="userfile">Choisir un replay � upload : </label></td><td><input name="userfile" type="file" /></td>
					</tr><tr>
					<td><label for="commentaire">Commentaire : </label></td><td><textarea  name="commentaire" rows="4" cols="30"></textarea></td>
					</tr>
					<tr><td>
					<input type="submit" value="Upload Replay" />
					<label for="debug"></label><input type="checkbox" name="debug" value="1" style="display:none;"/>
					<label for="test"></label><input type="checkbox" name="test" value="1" style="display:none;"/>
					</td>
					</tr>
					</table>
				</form>
			</div>
		</div>
	<?php
	}
	?>
	

<?php
function createAPMImage($vals, $length, $fn) {
	$width = 300;
	$height = 200;
	$pixelsPerSecond = $width/ $length;
	$pic = imagecreatetruecolor($width,$height);
	$lineColor = imagecolorallocate($pic,0,0,0);
	$lineColorGrey = imagecolorallocate($pic,192,192,192);
	$bgColor = imagecolorallocate($pic,255,255,255);
	$bgColorT = imagecolorallocatealpha($pic,255,255,255,127);
	imagefill($pic,0,0,$bgColorT);
	// first create x/y pairs
	// do this by adding up the actions of the 60 seconds before the pixel
	// if there are less than 60 seconds, extrapolate by multiplying with 60/$secs
	// the time index corresponding to a pixel can be calculated using the $pixelsPerSecond variable,
	// it should always be 0 < $pixelsPerSecond < 1
	$xypair = array();
	$maxapm = 0;
	for ($x = 1;$x <= $width;$x++) {
		$secs = ceil($x / $pixelsPerSecond);
		$apm = 0;
		if ($secs < 60) {
			for ($tmp = 0;$tmp < $secs;$tmp++)
				if (isset($vals[$tmp]))
					$apm += $vals[$tmp];
			$apm = $apm / $secs * 60;
		} else {
			for ($tmp = $secs - 60;$tmp < $secs;$tmp++)
				if (isset($vals[$tmp]))
					$apm += $vals[$tmp];
			$apm = $apm;
		}
		if ($apm > $maxapm)
			$maxapm = $apm;
		$xypair[$x] = $apm;

	}

	// draw the pixels
	if ($maxapm <= 0)
		return;
	for ($i = 2;$i <= $width;$i++) {
		imageline($pic,$i - 1,$height - $xypair[$i - 1] / $maxapm * $height, $i,$height - $xypair[$i] / $maxapm * $height,$lineColor);
	}
	// build a seperate container image 
	$frame = imagecreatetruecolor($width +50,$height+50);
	imagefill($frame,0,0,$bgColor);
	
	imagerectangle($frame,40,0,$width + 40,$height,$lineColor);
	imageline($frame,40,$height / 2,$width + 40,$height / 2, $lineColorGrey);


	imagestringup($frame,4,5,$height - 15,"APM -->",$lineColor);
	imagestring($frame,4,55,$height + 20,"Time (minutes)",$lineColor);
	imagestring($frame,2,25,$height - 15,"0",$lineColor);
	imagestring($frame,2,20,($height / 2),floor($maxapm / 2),$lineColor);
	imagestring($frame,2,20,0,floor($maxapm),$lineColor);
	$lengthMins = ($length / 60);
	for ($i = 0;$i < $lengthMins;$i+=5) {
		imagestring($frame,2,40+($width / ($lengthMins / 5) * ($i / 5)),$height + 5,$i,$lineColor);
		if ($i > 0)
			imageline($frame,40+($width / ($lengthMins / 5) * ($i / 5)),0,40+($width / ($lengthMins / 5) * ($i / 5)),$height, $lineColorGrey);		
	}
	// copy the graph onto the container image and save it
	imagecopy($frame,$pic,40,0,0,0,$width,$height);
	imagepng($frame,$fn);
	imagedestroy($frame);
	imagedestroy($pic);
}

if(isset($_POST['deletereplayid'])){
	$idreplay = $_POST['deletereplayid'];
	global $user;
	if (!$user)
	{ $visiteur = 0; } 
	else { $visiteur = $user[1];} 
	if ($visiteur >= 9) {
		removeReplay($idreplay);
		$sql = mysql_query("DELETE FROM _replay WHERE id='".$idreplay."'");
	}
	
	echo "Replay removed<br/>";
}

if (isset($_FILES['userfile'])) {
	$error = $_FILES['userfile']['error'];
	$type = $_FILES['userfile']['type'];
	$name = $_FILES['userfile']['name'];
	$tmpname = $_FILES['userfile']['tmp_name'];
	$size = $_FILES['userfile']['size'];
	$err = false;
	

	if ($size >= $MAX_FILE_SIZE) {
		echo "Error: The uploaded file was too large. The maximum size is ".$MAX_FILE_SIZE." bytes.<br />";
		$err = true;
	}
	if ($error == UPLOAD_ERR_PARTIAL) {
		echo "Error: The upload was not completed successfully. Please try again.<br />";
		$err = true;
	}
	if ($error == UPLOAD_ERR_NO_FILE) {
		echo "Error: No file was selected for uploading.<br />";
		$err = true;
	}
	if (!is_uploaded_file($tmpname)) {
		echo "Error: Uploaded filename doesn't point to an uploaded file.<br />";
		$err = true;
	}
	if ($err !== true) {
		if(isset($_POST['debug'])){
			if ($_POST['debug'] == 1) {
				error_reporting(-1);
			}
		}
		if (class_exists("MPQFile") || (include 'mpqfile.php')) {
			$start = microtime_float();
			$parseDurationString = "";
			$debug = 0;
			if(isset($_POST['debug'])){
				if ($_POST['debug'] == 1 ) {
					echo sprintf("<b>Debugging is on.</b><br />\n");
					$debug = 2;
				}
			}
			if(isset($_POST['test'])){
				if ($_POST['test'] == 1 ) {
					echo sprintf("<b>Debugging is on.</b><br />\n");
					$debug = 2;
				}
			}
			$a = new MPQFile($tmpname,true,$debug);
			$init = $a->getState();
			
			if (isset($_POST['test']) && $_POST['test'] == 1) {
				if (class_exists("SC2Replay") || (include 'sc2replay.php')) {
					
					$byte = 0;
					$b = new SC2Replay($a);		
					$b->setDebug(true);
					$tmp = $b->parseDetailsValue($a->readFile("replay.details"),$byte);
					echo "<pre>";
					var_dump($tmp);
					echo "</pre>";
					die();
				}
			}
			if ($init == false)
				echo "Error parsing uploaded file, make sure it is a valid MPQ archive!<br />\n";
			else if ($a->getFileType() == "SC2replay") {

				$b = $a->parseReplay();
				$parseDurationString .= sprintf("Parsed replay in %d ms.<br />\n",((microtime_float() - $start)*1000));
				$players = $b->getPlayers();
				$recorder = $b->getRecorder();

				$realrecorder = "";
				if ($recorder != null)
					$realrecorder =  $recorder['name'];
				//UPDATE DB
				$commenaires = "";
				if(isset($_POST['commentaire'])){
					$commenaires = $_POST['commentaire'];
				}
				$time = time();
				$sql = mysql_query("INSERT INTO _replay SET version='".$a->getVersionString()."', dateupload='".$time."', commentaire='".mysql_real_escape_string($commenaires)."', recordby='".$realrecorder."', mapname='".utf8_decode(mysql_real_escape_string($b->getMapName()))."',gamelength='".$b->getFormattedGameLength()."', date='".date('d/m/Y \a\t H:i' ,$b->getCtime())."', gamespeed='".$b->getGameSpeedText()."', replayname='".$name."', teamsize='".$b->getRealTeamSize()."'");

				$response =mysql_insert_id();

				if($response>0){
					$apmString = "<b>APM graphs</b><br />\n";
					$obsString = "";
					$obsCount = 0;
					foreach($players as $value) {
						if ($value['isObs']) {
							if ($obsString == "")
								$obsString = $value['name'];
							else
								$obsString .= ', '.$value['name'];
							$obsCount++;
							continue;
						}
						if ($b->isWinnerKnown())
							$wincolor = (isset($value['won']) && $value['won'] == 1)?0x00FF00:0xFF0000;
						else
							$wincolor = 0xFFFFFF;
						if ($value['isComp'] && $b->getTeamSize() !== null)
							$difficultyString = sprintf(" (%s)",SC2Replay::$difficultyLevels[$value['difficulty']]);
						else
							$difficultyString = "";
						if (!$value['isObs'] && $value['ptype'] != 'Comp') {
							$apmFileName = $value['id']."_".md5($name).".png";
							createAPMImage($value['apm'],$b->getGameLength(),"modules/sc2Replay/apm/".$apmFileName);
							$apmString .= sprintf("%s:<br /><img src=\"modules/sc2Replay/apm/$apmFileName\" /><br />\n",$value['name']);
						}
						if(!$value['isObs'] && $value['ptype'] != 'Comp'){
							$apm = ($value['team'] > 0)?(round($value['apmtotal'] / ($b->getGameLength() / 60))):0;
							$winner = (isset($value['won']))?$value['won']:(($value['team'] > 0)?"Unknown":"-");
							
							$sql = mysql_query("INSERT INTO _replayPlayer SET idreplay='".$response."', nomplayer='".$value['name']."', team='".$value['team']."', apm='".$apm."', race='".$value['race']."', color='".$value['color']."', winner='".$winner."', apmpicture='".$apmFileName."'");
						}
					}
					if ($name != '') { 
						$target_path = "modules/sc2Replay/replay/";
						$target_path = $target_path . $name; 
						if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target_path)) {
							echo "The replay has been uploaded";
						} else{
							echo "There was an error uploading the replay, please try again or contact an admin!";
						} 
					}   
				}
?>	
<?php

			}
		}
	}
}
?>

</body>
</html>

<?php

drawReplay();

closetable();
}

?>


<?php
function removeReplay($id){
	if(isset($id)){
		$sql = mysql_query("SELECT * FROM _replay where id='".$id."'");
		$reponse = mysql_fetch_row($sql);
		$sql2 = mysql_query("SELECT * FROM _replayPlayer WHERE idreplay='".$id."'");
		$reponse2 = mysql_fetch_all($sql2);
		foreach($reponse2 as $value){
			if($value['nomplayer'] != ''){
				unlink("modules/sc2Replay/apm/".$value['apmpicture']);
			}
		}
		$sql = mysql_query("DELETE FROM _replayPlayer WHERE idreplay='".$id."'");
		if($reponse[6]){
			unlink("modules/sc2Replay/replay/".$reponse[6]);
		}
	}
}

function getRace($id){
	$sql2 = mysql_query("SELECT team,race FROM _replayPlayer WHERE idreplay='".$id."'");
	$reponse2 = mysql_fetch_all($sql2);
	$list = array();
	foreach ($reponse2 as $value){
		if($value){
			$list[$value['team']] .= getRaceIcon($value['race']);
		}
	}
	$result = "";
	foreach ($list as $value){
		$result .= $value." vs ";
	}
	if($result != ""){
		return substr($result,0,strlen($string)-3);
	}
}

function getRaceIcon($race){
		return "<img width=\"15px\" height=\"15px\" alt=\"".$race[0]."\" src=\"modules/sc2Replay/images/".$race.".png\"/>";	
}

function drawReplay(){
	$sqlFiltreTeam = mysql_query("SELECT DISTINCT teamsize FROM _replay ORDER BY teamsize");
	$reponseFiltreTeam = mysql_fetch_all($sqlFiltreTeam);
	echo "<div id=\"filtre\">";
	echo "<h3><a href=\"#\">Filtres";
	if(isset($_POST['teamsize']) && $_POST['teamsize']!="All"){
		echo " - ".$_POST['teamsize'];
	}
	
	if(isset($_POST['mapname']) && $_POST['mapname']!="All"){
		echo " - ".$_POST['mapname'];
	}
	echo "</a></h3>";
	echo "<div>";
	echo "<form method=\"POST\" action=\"index.php?file=sc2Replay\">";
	echo "<label for=\"teamsize\">Team :&nbsp;</label>";
	echo "<select name=\"teamsize\">";
	echo "<option name=\"All\">All</option>";
	foreach ($reponseFiltreTeam as $value){
		if($value){
			echo "<option name=\"".$value['teamsize']."\"";
			if(isset($_POST['teamsize']) && $_POST['teamsize'] == $value['teamsize']){
				echo " selected=\"selected\" ";
			}
			echo ">".$value['teamsize']."</option>";
		}
	}
	echo "</select><br/>";
	
	$sqlFiltreMap = mysql_query("SELECT DISTINCT mapname FROM _replay ORDER BY teamsize");
	$reponseFiltreMap = mysql_fetch_all($sqlFiltreMap);
	
	echo "<label for=\"mapname\">Map :&nbsp;</label>";
	echo "<select name=\"mapname\">";
	echo "<option name=\"All\">All</option>";
	foreach ($reponseFiltreMap as $value){
		if($value){
			echo "<option name=\"".$value['mapname']."\"";
			if(isset($_POST['mapname']) && $_POST['mapname'] == $value['mapname']){
				echo " selected=\"selected\" ";
			}
			echo ">".$value['mapname']."</option>";
		}
	}
	echo "</select><br/>";
	echo "<input type=\"submit\" value=\"Filtrer\" />";
	echo "</form>";
	echo "</div>";
	echo "</div>";
	
	$where = "WHERE ";
	if(isset($_POST['teamsize']) && $_POST['teamsize']!="All"){
		$where .= " teamsize='".$_POST['teamsize']."' ";
	}
	
	if(isset($_POST['mapname']) && $_POST['mapname']!="All"){
		if($where == "WHERE "){
			$where .= " mapname='".$_POST['mapname']."' ";
		}else{
			$where .= " and mapname='".$_POST['mapname']."' ";
		}
	}
	
	
	if($where == "WHERE "){
		$sql = mysql_query("SELECT * FROM _replay ORDER BY dateupload DESC");
	}else{
		$sql = mysql_query("SELECT * FROM _replay ".$where." ORDER BY dateupload DESC");
	}
	$reponse = mysql_fetch_all($sql);
	echo "<br/>";echo "<br/>";
	echo "<div id=\"replayList\">";
	foreach($reponse as $value){
		if($value['id'] != ''){
			$getRaceTeam = getRace($value['id']);
			echo "<h3><a href=\"#\">".$value['teamsize']." - ".$getRaceTeam." - ".($value['mapname'])." - ".$value['recordby']." (".$value['date'].")</a></h3>";
			echo "<div>";
			$sql2 = mysql_query("SELECT * FROM _replayPlayer WHERE idreplay='".$value['id']."'");
			$reponse2 = mysql_fetch_all($sql2);
			echo "<table class=\"buttons\" border=\"0\"><tr><td><img width=\"15px\" height=\"15px\" src=\"modules/sc2Replay/download-icon.png\"/></td><td>";
			echo "<span><a href=\"modules/sc2Replay/replay/".$value['replayname']."\">Download replay</a></span></td></tr></table><br/><br/><br/>";
			global $user;
			if (!$user)
			{
				$visiteur = 0;
			} 
			else
			{
				$visiteur = $user[1];
			} 
			echo "Version : ".$value['version']."<br/>";
			echo "Type : ".$value['teamsize']."<br/>";
			echo "Dur�e : ".$value['gamelength']."<br/>";
			echo "Vitesse : ".$value['gamespeed']."<br/>";
			echo "Commentaire : ".$value['commentaire']."<br/><br/>";
			foreach($reponse2 as $value2){
				if($value2['nomplayer'] != ''){
					echo "<table border=\"0\"><tr><td width=\"10px\" height=\"10px\" style=\"background-color:#".$value2['color'].";\"></td><td>";
					if( $value2['winner'] == '1'){
						echo $value2['nomplayer']." gagne";
					}else{
						echo $value2['nomplayer']." perd";
					}
					echo "</td></tr></table><br/>";
					echo "Team : ".$value2['team']."<br/>";
					echo "Race : ".getRaceIcon($value2['race'])." ".$value2['race']."<br/>";
					echo "<div class=\"apmImg\">";
					echo "<h3><a href=\"#\">"."Apm : ".$value2['apm']."</a></h3>";
					echo "<div>";
					echo "<img src=\"modules/sc2Replay/apm/".$value2['apmpicture']."\"/>";
					echo "</div>";
					echo "</div>";
					echo "<br/>";
				}
			}
			if ($visiteur >= 9)
			{
				echo "<form id=\"remove\" method=\"post\" action=\"index.php?file=sc2Replay\">";
				echo "<input type=\"text\" name=\"deletereplayid\" style=\"display:none\" value=\"".$value['id']."\" />";
				echo "<input type=\"submit\" value=\"Remove\" />";
				echo "</form>";
			}
			echo "</div>";
		}
	}
	echo "</div>";
}
?>