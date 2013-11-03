<?php
//------------standard top of file
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_title_mootools.php");

//-----------------database
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//db connection
$conn = dbConnect();


include(getenv("DOCUMENT_ROOT") . "/web/game/standard_sessions.php");
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_games_query.php");
//question_query????
//don't need games_attempts...
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_game_includes.php");
?>

<script type="text/javascript" src="/src/game/game_quiz.php"></script>
<script type="text/javascript" src="/src/game/chooser.php"></script>
<script type="text/javascript" src="/web/game/standard_game_hud.php"></script>

</head>

<body bgcolor="grey">

<script language="javascript">

var GAME;
//var mApplication;
var mHud;

window.addEvent('domready', function()
{

        //APPLICATION
        //mApplication = new Application();
               
	//HUD 
	hud = new Hud();
        hud.mScoreNeeded.setText('<font size="2"> Needed : 1</font>');
        hud.mGameName.setText('<font size="2">DUNGEON</font>');

	//GAME
	GAME = new Chooser("Chooser");

	//set hud
	GAME.setHud(hud);

        //QUIZ
        quiz = new Quiz(1);
        GAME.mQuiz = quiz;
	quiz.mGame = GAME;

        //create questions
        GAME.createQuestions();

        //create control object
        GAME.createControlObject();

        //create doors
        GAME.createPortals();

        //KEYS
	GAME.mKeysOn = true;
        document.addEvent("keydown", GAME.keyDown);
        document.addEvent("keyup", GAME.keyUp);

        //MOUSE
	GAME.mMouseOn     = true;
	GAME.mMouseMoveOn = true;
	//GAME.mMouseDownOn = true;

<?php
include(getenv("DOCUMENT_ROOT") . "/web/game/standard_bottom.php");
?>

