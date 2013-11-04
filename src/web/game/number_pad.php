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

<script type="text/javascript" src="/src/game/game_simple.php"></script>
<script type="text/javascript" src="/src/game/number_pad.php"></script>

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
        //HUD
        //hud = new Hud();
        //hud.mScoreNeeded.setText('<font size="2"> Needed : ' + scoreNeeded + '</font>');
        //hud.mGameName.setText('<font size="2">Math Racer</font>');
        
	//GAME
	GAME = new NumberPad();

        //set hud
        //GAME.setHud(hud);

	//QUIZ	
       	//quiz = new Quiz(scoreNeeded);
       	//GAME.mQuiz = quiz;
	//quiz.mGame = GAME;

        //create questions
        //GAME.createQuestions();
<?php

include(getenv("DOCUMENT_ROOT") . "/web/game/standard_bottom.php");
?>
