<?php
//------------standard top of file
include(getenv("DOCUMENT_ROOT") . "/web/application/standard_title_mootools.php");

//-----------------database
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//db connection
$conn = dbConnect();

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
<?php
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_bottom.php");
?>

