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

<script type="text/javascript" src="/src/game/dungeon.php"></script>
<script type="text/javascript" src="/src/game/compare.php"></script>
<script type="text/javascript" src="/src/question/question_compare.php"></script>
<script type="text/javascript" src="/src/shape/shape_compare.php"></script>


<!-- HUD VARIABLES    -->
<script language="javascript">
var curDate = "<?php echo $curDate; ?>";
var username = "<?php echo $username; ?>";
var next_level = "<?php echo $next_level; ?>";
//extra game vars
var kidsRedShirt = 6;
var kidsGreenShirt = 6;
</script>

</head>

<body bgcolor="grey">

<script language="javascript">

var mGame;
var mApplication;

window.addEvent('domready', function()
{
	//APPLICATION
        mApplication = new Application();
       
	//GAME
	mGame = new Compare();
 
        //KEYS
        document.addEvent("keydown", mApplication.keyDown);
        document.addEvent("keyup", mApplication.keyUp);

<?php
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_bottom.php");
?>

