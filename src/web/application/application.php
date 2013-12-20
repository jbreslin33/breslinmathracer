<?php
//------------standard top of file
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_title_mootools.php");

//-----------------database
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//db connection
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/game/standard_sessions.php");
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_game_includes.php");
?>

</head>

<body bgcolor="grey">

<!-- HUD VARIABLES    -->
<script language="javascript">
var curDate   = "<?php echo $curDate; ?>";
var username  = "<?php echo $username; ?>";
var firstname = "<?php echo $first_name; ?>";
var lastname  = "<?php echo $last_name; ?>";
var ref_id    = "<?php echo $ref_id; ?>";
var level     = "<?php echo $level; ?>";

var APPLICATION;

window.addEvent('domready', function()
{
	APPLICATION = new Application();
<?php
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_bottom.php");
?>

