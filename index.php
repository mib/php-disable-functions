<?php
define('PHP_MANUAL_PREFIX', 'http://php.net/manual/en/');

$data = include __DIR__ . '/data.php';
?>
<!DOCTYPE html>

<meta charset="UTF-8">
<meta http-equiv="Content-Language" content="en">

<title>PHP: disable_functions</title>

<meta name="description" content="List of recommended functions to disable (disable_functions) in PHP">

<link rel="stylesheet" type="text/css" media="screen,projection" href="design.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">


<h1>PHP: disable_functions</h1>

<p>
	<textarea id="disable_functions" rows="10" cols="60" wrap="hard" onfocus="this.select();">disable_functions = <?php
if(!empty($_POST)) {
	$all = explode(',', $data['all']);
	$selected = array_intersect($_POST['functions'], $all);
	echo implode(',', $selected);
}
else {
	echo htmlspecialchars($data['all'], ENT_QUOTES);
	$selected = [];
}
?></textarea>
</p>


<h2>Customize</h2>

<form action="" method="post">
	<p id="update-1">
	 	<input type="submit" value="Update" name="update-1">
	</p>
	
	<ul>
<?php
foreach($data['groups'] as $group) {
	echo '		<li>', "\n";
	echo '			<a href="#', htmlspecialchars($group['id'], ENT_QUOTES), '">', htmlspecialchars($group['name'], ENT_QUOTES), '</a>', "\n";
	echo '		</li>', "\n";
}
?>
	</ul>
	
	<table id="functions">
		<thead id="thead-all" style="display: none;">
			<th colspan="3"><label><input type="checkbox" id="all"<?php echo (!$selected || count($selected) === count($all) ? ' checked="checked"' : ''); ?> value="" onchange="toggleAll(this.checked); return true;"> Toggle All</label></th>
		</thead>
<?php
$selected = array_flip($selected);

foreach($data['groups'] as $group) {
	echo '		<thead id="', htmlspecialchars($group['id'], ENT_QUOTES), '">', "\n";
	echo '			<tr>', "\n";
	echo '				<th colspan="2"><label><input type="checkbox" id="header-', htmlspecialchars($group['id'], ENT_QUOTES), '"', (!$selected || count(array_intersect_key($selected, $group['functions'])) === count($group['functions']) ? ' checked="checked"' : ''), ' value="" onchange="toggleGroup(\'', htmlspecialchars($group['id'], ENT_QUOTES), '\', this.checked); return true;" style="display: none;"> ', htmlspecialchars($group['name'], ENT_QUOTES), '</label></th>', "\n";
	echo '				<th><a href="', PHP_MANUAL_PREFIX, htmlspecialchars($group['link'], ENT_QUOTES), '">PHP&nbsp;manual&nbsp;»</a></th>', "\n";
	echo '			</tr>', "\n";
	echo '		</thead>', "\n";
	echo '		<tbody id="group-', htmlspecialchars($group['id'], ENT_QUOTES), '">', "\n";
	
	$even = false;
	foreach($group['functions'] as $function) {
		echo '			<tr', ($even ? ' class="even"' : ''), '>', "\n";
		echo '				<td><label><input type="checkbox"', (!$selected || isset($selected[$function['name']]) ? ' checked="checked"' : ''), ' name="functions[]" value="', htmlspecialchars($function['name'], ENT_QUOTES), '" onchange="toggleGroupHeader(\'', htmlspecialchars($group['id'], ENT_QUOTES), '\'); return true;"> ', htmlspecialchars($function['name'], ENT_QUOTES), '</label></td>', "\n";
		echo '				<td>', htmlspecialchars($function['desc'], ENT_QUOTES), '</td>', "\n";
		echo '				<td><a href="', PHP_MANUAL_PREFIX, htmlspecialchars($function['link'], ENT_QUOTES), '">PHP&nbsp;manual&nbsp;»</a></td>', "\n";
		echo '			</tr>', "\n";
		
		$even = !$even;
	}
	
	echo '		</tbody>', "\n";
}
?>
	</table>
	
	<p id="update-2">
	 	<input type="submit" value="Update" name="update-2">
	</p>
</form>


<p id="footer">
	Created in 2014 by <a href="http://www.michalbalda.cz/">Michal Balda</a>. Last updated on 2015-06-24. The source code is on <a href="https://github.com/mib/php-disable-functions">GitHub</a>.
</p>


<script type="text/javascript" src="script.js"></script>
