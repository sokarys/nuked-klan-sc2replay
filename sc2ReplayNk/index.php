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
		$(".buttons2").button();
		$(".buttons").button();
		
		$( "#replayList" ).accordion({
			active: true,
			collapsible: true,
			alwaysOpen: false,
			autoHeight: false,
			navigation: true
		});
		
		$( ".apmImg" ).button().click(function(){
			$('#' + $(this).attr('idimgscr')).show().dialog({
														height: 300,
														width: 400,
														modal: true
													});
		});
		
		$( ".commentaires" ).accordion({
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
		
		$(".hide").hide();
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
					<td><label for="userfile">Choisir un replay à upload : </label></td><td><input name="userfile" type="file" /></td>
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
if(isset($_POST['idreplayCom']) && $_POST['addcomment'] != ""){
	$time = time();
	$sql1 = mysql_query("INSERT INTO _replayComment SET comment='".$_POST['addcomment']."', username='".$_POST['userCom']."', idreplay='".$_POST['idreplayCom']."', time='".$time."'");
	echo "Commentaire rajouté<br/>";
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

if(isset($_POST['delcomment'])){
	deleteComment($_POST['delcomment']);
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
					
					//$bool = $a->insertChatLogMessage("testing testing", "testguy", 1);
					//$bool = $a->insertChatLogMessage("testing 2", 1, 5);
					
					//$a->saveAs("modules/sc2Replay/replay/".$name, true);
					//$a = new MPQFile("testfile.SC2Replay", true, 2);
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
				// echo sprintf("Version: %s<br />\n",$a->getVersionString());
				$b = $a->parseReplay();
				$parseDurationString .= sprintf("Parsed replay in %d ms.<br />\n",((microtime_float() - $start)*1000));
				$players = $b->getPlayers();
				$recorder = $b->getRecorder();
				// echo sprintf("Map name: %s, Game length: %s<br />\n",$b->getMapName(),$b->getFormattedGameLength());
				// echo sprintf("Team size: %s, Game speed: %s<br />\n",$b->getTeamSize(), $b->getGameSpeedText());
				// echo sprintf("Real team size: %s<br />\n",$b->getRealTeamSize());
				// echo sprintf("Realm: %s<br />\n",$b->getRealm());
				// echo sprintf("Date and time played: %s<br />\n",date('jS \of F Y \a\t H:i' ,$b->getCtime()));
				
				$realrecorder = "";
				if ($recorder != null)
					$realrecorder =  $recorder['name'];
				//UPDATE DB
				$commenaires = "";
				if(isset($_POST['commentaire'])){
					$commenaires = $_POST['commentaire'];
				}
				$time = time();
				$sql = mysql_query("INSERT INTO _replay SET version='".$a->getVersionString()."', dateupload='".$time."', commentaire='".mysql_real_escape_string($commenaires)."', recordby='".utf8_decode(mysql_real_escape_string($realrecorder))."', mapname='".utf8_decode(mysql_real_escape_string($b->getMapName()))."',gamelength='".$b->getFormattedGameLength()."', date='".date('d/m/Y \a\t H:i' ,$b->getCtime())."', gamespeed='".$b->getGameSpeedText()."', replayname='".$name."', teamsize='".$b->getRealTeamSize()."'");
				// echo "<br /><br /><br /><br />RESPONNNNNNNNNNNNNNSE<br />";
				$response =mysql_insert_id();
				// echo $response;
				// echo "<br />END RESPONNNNNNNNNNNNNNSE<br /><br /><br /><br />";
				if($response>0){
					if ($recorder != null){
						// echo sprintf("Replay recorded by: %s (EXPERIMENTAL!)<br />\n",$recorder['name']);
					}
					$apmString = "<b>APM graphs</b><br />\n";
					$obsString = "";
					$obsCount = 0;
					// echo "<table border=\"1\"><tr><th>Player name</th><th>Race</th><th>Color</th><th>Team</th><th>Average APM<br />(experimental)</th><th>Winner?</th></tr>\n";
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
						// echo sprintf("<tr><td>%s</td><td>%s</td><td><font color=\"#%s\">%s</font></td><td>%s</td><td style=\"text-align: center\">%d</td><td style=\"background-color: #%06X; text-align: center\">%d</td></tr>\n",
										// $value['name'].$difficultyString,
										// $value['race'],
										// $value['color'],
										// $value['sColor'],
										// ($value['team'] > 0)?"Team ".$value['team']:"-",
										// ($value['team'] > 0)?(round($value['apmtotal'] / ($b->getGameLength() / 60))):0,
										// ((isset($value['won']))?$wincolor:0xFFFFFF),
										// (isset($value['won']))?$value['won']:(($value['team'] > 0)?"Unknown":"-")
									// );
						if (!$value['isObs'] && $value['ptype'] != 'Comp') {
							$apmFileName = $value['id']."_".md5($name).".png";
							createAPMImage($value['apm'],$b->getGameLength(),"modules/sc2Replay/apm/".$apmFileName);
							$apmString .= sprintf("%s:<br /><img src=\"modules/sc2Replay/apm/$apmFileName\" /><br />\n",$value['name']);
						}
						if(!$value['isObs'] && $value['ptype'] != 'Comp'){
							$apm = ($value['team'] > 0)?(round($value['apmtotal'] / ($b->getGameLength() / 60))):0;
							$winner = (isset($value['won']))?$value['won']:(($value['team'] > 0)?"Unknown":"-");
							
							$sql = mysql_query("INSERT INTO _replayPlayer SET idreplay='".$response."', nomplayer='".utf8_decode(mysql_real_escape_string($value['name']))."', team='".$value['team']."', apm='".$apm."', race='".$value['race']."', color='".$value['color']."', winner='".$winner."', apmpicture='".$apmFileName."'");
							// echo "<br />Myslq".$value['name']."<br />";
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
				// echo "</table><br />";
				// if ($obsCount > 0) {
					// echo "Observers ($obsCount): $obsString<br />\n";
				// }
				// $messages = $b->getMessages();
				// if (count($messages) > 0) {
					// echo "<b>Messages:</b><br /><table border=\"1\"><tr><th>Time</th><th>Player</th><th>Target</th><th>Message</th></tr>\n";
					// foreach ($messages as $val){
						// echo sprintf("<tr><td>%d sec</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",$val['time'],
									  // $val['name'], ($val['target'] == 2)?"Alliance":"All",$val['message']);
					// }
					// echo "</table><br />\n";
				// }
				// echo $apmString;

				// $temp = $b->getUnits();
				// if (count($temp) > 0) {
					// echo "<table border=\"1\"><tr><th>Unit type</th><th>Unique unit IDs</th></tr>\n";
					// foreach ($temp['units'] as $uType => $uId) {	
						// echo sprintf("<tr><td>0x%06X</td><td>%d</td></tr>\n",$uType,count($uId));
					// }
					// echo "</table>";
				// }
				
				// $t = $b->getEvents();
				// if (class_exists('SC2ReplayUtils')) {
				?>
				
				<!--<div>
				<span><b>Click on the following links to show/hide events</b></span><br />
				<span><a href="#" onClick="return toggleVisible('allevents');">All events</a></span>
				<span><a href="#" onClick="return toggleVisible('buildingevents');">Building events</a></span>
				<span><a href="#" onClick="return toggleVisible('unitevents');">Unit events</a></span>
				<span><a href="#" onClick="return toggleVisible('upgradeevents');">Upgrade events</a></span>
				</div>
				<div>-->		
				<?php
					//create table of all events
					// echo "<div id=\"allevents\" style=\"display: block\" class=\"events\"><h2>All events:</h2><table class=\"events\"><tr><th>Timecode</th>\n";
					// $pNum = count($players);
					// foreach ($players as $value) {
					  // if (!$value['isObs'] && $value['ptype'] != 'Comp'){
						// echo sprintf("<th>%s (%s)</th>",$value['name'],$value['race']);
						// }
					// }
					// echo "</tr>\n";
					// if (count($t) > 0)
						// foreach ($t as $value) {
							// $eventarray = $b->getAbilityArray($value['a']);
							// setting rally points or issuing move/attack move or other commands does not tell anything
							// if ($eventarray['type'] == SC2_TYPEGEN && !isset($_POST['debug'])) continue;
							// echo sprintf("<tr><td>%d sec</td>",$value['t'] / 16);
							// foreach ($players as $value2) {
								// if ($value2['isObs'] || $value2['ptype'] == 'Comp') continue;
								// if ($value['p'] == $value2['id']){
									// echo sprintf("<td>%s%s</td>",$eventarray['desc'],(isset($_POST['debug']))?sprintf(" (%06X)",$value['a']):"");
									// }
								// else{
									// echo "<td>&nbsp;</td>";
									// }
							// }
							// echo "</tr>\n";
						// }
					// echo "</table></div>";
					// $buildingDiv = "<div id=\"buildingevents\" style=\"display: none\" class=\"events\"><h2>Buildings:</h2>";
					// $unitDiv = "<div id=\"unitevents\" style=\"display: none\" class=\"events\"><h2>Units:</h2>";
					// $upgradeDiv = "<div id=\"upgradeevents\" style=\"display: none\" class=\"events\"><h2>Upgrades:</h2>";
					
					// create ability breakdown tables
					// foreach ($players as $value) {
						// $buildingTable = "";
						// if ($value['isComp'] || $value['isObs']) continue;
						// $buildingTable = sprintf("<table class=\"events\"><tr><th><font color=\"#%s\">%s</font></th><th>First seen</th><th>Total</th></tr>\n",
									  // $value['color'],
									  // $value['name']);
						// $unitTable = sprintf("<table class=\"events\"><tr><th><font color=\"#%s\">%s</font></th><th>First seen</th><th>Total</th></tr>\n",
									  // $value['color'],
									  // $value['name']);
						// $upgradeTable = sprintf("<table class=\"events\"><tr><th><font color=\"#%s\">%s</font></th><th>First seen</th><th>Total</th></tr>\n",
									  // $value['color'],
									  // $value['name']);
						// foreach ($value['firstevents'] as $eventid => $time) {
							// $eventarray = $b->getAbilityArray($eventid);
							// $str = sprintf("<tr><td>%s</td><td>%s</td><td>%d</td></tr>\n",
										// $eventarray['name'],
										// $b->getFormattedSecs($time),
										// $value['numevents'][$eventid]);
							// switch ($eventarray['type']) {
								// case SC2_TYPEBUILDING:
								// case SC2_TYPEBUILDINGUPGRADE:
									// $buildingTable .= $str;
									// break;
								// case SC2_TYPEUNIT:
								// case SC2_TYPEWORKER:
									// $unitTable .= $str;
									// break;
								// case SC2_TYPEUPGRADE:
									// $upgradeTable .= $str;
									// break;
								// default:
							// }
						// }
						// $buildingTable .= "</table>";
						// $unitTable .= "</table>";
						// $upgradeTable .= "</table>";
						// $buildingDiv .= $buildingTable;
						// $unitDiv .= $unitTable;
						// $upgradeDiv .= $upgradeTable;
					// }
					// echo $buildingDiv . "</div>";
					// echo $unitDiv . "</div>";
					// echo $upgradeDiv . "</div>";
					// echo "</div>";
				// }
			}
			// else if ($a->getFileSize("DocumentHeader") > 0 && $a->getFileSize("Minimap.tga") > 0) { // possibly SC2 map file
				// if (class_exists("SC2Map") || (include 'sc2map.php')) {
					// $sc2map = new SC2Map();
					// $sc2map->parseMap($a);
					// echo "<table>";
					// echo sprintf("<tr><td>Map name:</td><td>%s</td></tr>\n",$sc2map->getMapName());
					// echo sprintf("<tr><td>Author:</td><td>%s</td></tr>\n",$sc2map->getAuthor());
					// echo sprintf("<tr><td>Short description:</td><td>%s</td></tr>\n",preg_replace('/<[^>]+>/','',$sc2map->getShortDescription()));
					// echo sprintf("<tr><td>Long description:</td><td>%s</td></tr>\n",preg_replace('/<[^>]+>/','',$sc2map->getLongDescription()));
					// $minimapfilename = md5($sc2map->getMapName()).".png";
					// imagepng($sc2map->getMiniMapData(),$minimapfilename);
					// echo sprintf("</table>Minimap:<br /><img src=\"$minimapfilename\" /><br />\n");
				// }
			// }
			// echo sprintf("<p>Peak memory usage: %d bytes<br /></p>\n",memory_get_peak_usage(true));
			// $parseDurationString .= sprintf("Page generated in %d ms.<br />\n",((microtime_float() - $start)*1000));
			// echo "<p>$parseDurationString</p>";
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
		$sql3 = mysql_query("DELETE FROM _replayComment WHERE idreplay='".$id."'");
		$sql = mysql_query("DELETE FROM _replayPlayer WHERE idreplay='".$id."'");
		if($reponse[6]){
			unlink("modules/sc2Replay/replay/".$reponse[6]);
		}
	}
}

function deleteComment($id){
	$sql3 = mysql_query("DELETE FROM _replayComment WHERE id='".$id."'");
	echo "Commentaire supprimé<br/>";
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
			$sql4 = mysql_query("SELECT count(*) FROM _replayComment WHERE idreplay='".$value['id']."' ORDER BY time DESC");
			$repons4 =  mysql_fetch_row($sql4);
			echo "<h3><a href=\"#\">".$value['teamsize']." - ".$getRaceTeam." - ".($value['mapname'])." - ".$value['recordby']." - ".$value['date']." - ".$repons4[0]." commentaires</a></h3>";
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
			echo "Durée : ".$value['gamelength']."<br/>";
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
					echo "Apm moyen: ".$value2['apm']."&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<span class=\"apmImg\" idimgscr=\"".$value2['nomplayer'].substr($value['replayname'],0,strlen($value['replayname'])-10)."\" >";
					echo "Voir le graphique";
					echo "</span><br/>";
					
					echo "<div class=\"hide\" title=\"Apm de ".$value2['nomplayer']." - Moyenne : ".$value2['apm']."\" id=\"".$value2['nomplayer'].substr($value['replayname'],0,strlen($value['replayname'])-10)."\">";
					echo "<center><img src=\"modules/sc2Replay/apm/".$value2['apmpicture']."\"/></center>";
					echo "</div>";
					echo "<br/>";
					echo "<br/>";
				}
			}
			
			
			$sql3 = mysql_query("SELECT * FROM _replayComment WHERE idreplay='".$value['id']."' ORDER BY time DESC");
			$repons3 = mysql_fetch_all($sql3);
			
			echo "<div class=\"commentaires\">";
			echo "<h3><a href=\"#\">Commentaires</a></h3>";
			echo "<div>";
			echo "<table width=\"100%\">";
			foreach($repons3 as $value3){
				if($value3['username'] != ''){
					echo "<tr>";
					echo "<td>".date('d/m/Y \a\t H:i' ,$value3['time'])."</td><td>";
					echo $value3['username'];
					echo "</td>";
					
					if ($visiteur >= 9)
					{
						echo "<td>";
						echo "<form width=\"100%\" method=\"post\" action=\"index.php?file=sc2Replay\">";
						echo "<input type=\"text\" name=\"delcomment\" style=\"display:none\" value=\"".$value3['id']."\" />";
						echo "<input type=\"submit\" value=\"Remove\" />";
						echo "</form>";
						echo "</td>";
					}
					echo "</tr>";
					echo "<tr><td colspan=\"3\">";
					echo $value3['comment'];
					echo "</td>";
					echo "</tr>";
										
				}
			}
			echo "</table>";
			echo "<br/>";
			echo "<br/>";
			if ($visiteur >= 1)
			{
				echo "<form width=\"100%\" id=\"addcomment\" method=\"post\" action=\"index.php?file=sc2Replay\">";
				echo "<label for=\"addcomment\">Rajouter un commentaire en tant que ".$user[2]." : </label><br/>";
				echo "<input type=\"text\" name=\"idreplayCom\" style=\"display:none\" value=\"".$value['id']."\" />";
				echo "<input type=\"text\" name=\"userCom\" style=\"display:none\" value=\"".$user[2]."\" />";
				echo "<textarea cols=\"90\" row=\"4\" name=\"addcomment\"></textarea><br/>";
				echo "<input type=\"submit\" value=\"Add\" />";
				echo "</form>";
			}
			echo "</div>";
			echo "</div>";
			
			
			if ($visiteur >= 9)
			{
				echo "<br/>";
				echo "<br/>";
				echo "<form id=\"remove\" method=\"post\" action=\"index.php?file=sc2Replay\">";
				echo "<input type=\"text\" name=\"deletereplayid\" style=\"display:none\" value=\"".$value['id']."\" />";
				echo "<input type=\"submit\" value=\"Remove this replay\" />";
				echo "</form>";
			}
			echo "</div>";
		}
	}
	echo "</div>";
}
?>