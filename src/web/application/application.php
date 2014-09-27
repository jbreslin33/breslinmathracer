<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>
<head>
<title>ABC AND YOU</title>

<!-- mootools -->
<script type="text/javascript" src="/src/raphael/raphael-min.js"></script>
<script type="text/javascript" src="/src/raphael/g.raphael-min.js"></script>
<script type="text/javascript" src="/src/raphael/g.bar-min.js"></script>
<script type="text/javascript" src="/src/raphael/g.line-min.js"></script>
<script type="text/javascript" src="/src/raphael/raphalytics.js"></script>
<script type="text/javascript" src="/src/mootools/mootools-core-1.4.5-full-compat.js"></script>

<style type="text/css"> 
.chartWrapper {
  margin: 15px auto;
  width: 500px;
  height: 200px;
  text-align: center;
}
</style> 
 
<div id="simpleExample" class="chartWrapper"></div> 
<?php
//include(getenv("DOCUMENT_ROOT") . "/web/php/check_login.php");
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_game_includes.php");
?>

<style>
body 
{
background-color:#848484;
}
</style>
</head>

<script language="javascript">
var APPLICATION;

window.addEvent('domready', function()
{
	APPLICATION = new CoreApplication();
}
);

window.onresize = function(event)
{
        APPLICATION.mWindow = window.getSize();
}
</script>

</body>
</html>
