<?php
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_title_mootools.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//db connection
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/game/standard_sessions.php");
//don't need games_query
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_question_query.php");
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_games_attempts.php");
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_game_includes.php");
?>

<script type="text/javascript" src="/src/shape/shape_ai.php"></script>
<script type="text/javascript" src="/src/shape/shape_chaser.php"></script>

<script type="text/javascript" src="/src/game/game_quiz.php"></script>
<script type="text/javascript" src="/src/game/dungeon.php"></script>

<!-- HUD VARIABLES    -->
<script language="javascript">
var curDate = "<?php echo $curDate; ?>";
var username = "<?php echo $username; ?>";
var next_level = "<?php echo $next_level; ?>";
</script>

</head>

<body bgcolor="grey">

<script language="javascript">

var GAME;

window.addEvent('domready', function()
{
	//GAME
	GAME = new Dungeon(scoreNeeded);

        //KEYS
        GAME.mKeysOn = true;
        document.addEvent("keydown", GAME.keyDown);
        document.addEvent("keyup", GAME.keyUp);

        //MOUSE
        GAME.mMouseOn     = true;
        GAME.mMouseMoveOn = true;
        GAME.mMouseDownOn = true;

<?php

include(getenv("DOCUMENT_ROOT") . "/web/game/standard_bottom.php");
?>
