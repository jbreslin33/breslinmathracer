<?php
//------------standard top of file
include(getenv("DOCUMENT_ROOT") . "/web/application/standard_title_mootools.php");

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
