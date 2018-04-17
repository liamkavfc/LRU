<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link type="stylesheet" href="/assets/style.css" />
</head>
<body>

<div id="container">
	<h1>Add to the list!</h1>
	<form method="post" action="/welcome/postList">
		<input type="text" name="item" />
		<input class="btn" type="submit" />
	</form>
	<h2>The list</h2>
	<div>
		<table>
			<thead>
				<th>Item</th>
				<th>Time</th>
			</thead>
			<tbody>
				<?php
					foreach($_SESSION['items'] as $item) {
						echo '<tr><td>' . $item['item'] . '</td><td>' . date('h:i:s d-m-y',$item['time']) . '</td></tr>';
					}
				?>
			</tbody>
		</table>
</div>

</body>
</html>
