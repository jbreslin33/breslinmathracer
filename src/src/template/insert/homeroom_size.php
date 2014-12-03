<?php 
//standard header for most games i hope. it handles some basic html and level db call
include("../headers/header.php");
include("../links/links.php");

?>
</head>

<body>

<h2>Enter Homeroom Size:</h2>
<ul>
<form name="insert" action="homeroom.php" method="POST" >
<input type="text" value="35" name="number_of_students" />
<br>
<input type="submit" value="Create Home Room" />
</form>
</ul>

</body>
</html>
