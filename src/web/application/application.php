<?php
//------------standard top of file
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_title_mootools.php");

//-----------------database
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//db connection
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/game/standard_sessions.php");
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_games_query.php");
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_game_includes.php");
?>


<script type="text/javascript" src="/src/game/game_quiz.php"></script>
<script type="text/javascript" src="/src/game/chooser.php"></script>
<script type="text/javascript" src="/src/game/dungeon.php"></script>
<script type="text/javascript" src="/src/game/game_simple.php"></script>
<script type="text/javascript" src="/src/game/number_pad.php"></script>
<script type="text/javascript" src="/web/game/standard_game_hud.php"></script>

</head>

<body bgcolor="grey">
<script language="javascript">

var GAME;

window.addEvent('domready', function()
{
	APPLICATION = new Application("Application");
	GAME = APPLICATION.mGame;

<?php
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_bottom.php");
?>

