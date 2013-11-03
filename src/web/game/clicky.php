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

var mGame;
var mApplication;

window.addEvent('domready', function()
{
        //APPLICATION
        mApplication = new Application();

        //HUD
        hud = new Hud();
        hud.mScoreNeeded.setText('<font size="2"> Needed : ' + scoreNeeded + '</font>');
        hud.mGameName.setText('<font size="2">DUNGEON</font>');
        
	//GAME
	game = new Dungeon();

        //set hud
        game.setHud(hud);

	//QUIZ	
       	quiz = new Quiz(scoreNeeded);
       	game.mQuiz = quiz;
	quiz.mGame = game;

        //create questions
        game.createQuestions();

        //create control object
        game.createControlObject();

        //create question shapes
        game.createQuestionShapes();

        //create key
        game.createKey("/images/key/key_dungeon.gif");

        //create door
        game.createDoor("/images/doors/door_closed.png","/images/doors/door_open.png");


        //KEYS
        document.addEvent("keydown", mApplication.keyDown);
        document.addEvent("keyup", mApplication.keyUp);

	//MOUSE
        //document.addEvent("keydown", mApplication.keyDown);
        //document.addEvent("keyup", mApplication.keyUp);
	

<?php

include(getenv("DOCUMENT_ROOT") . "/web/game/standard_bottom.php");
?>
