<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>


<p style="color:red;background-color:black;padding:10px 50px 20px">
<?php
// prints something like: Wednesday the 15th
	echo date('l \t\h\e jS');
?></p>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "<p>$i</p>";
}
?>
</body>
</html>

