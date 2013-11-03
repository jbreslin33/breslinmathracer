
<html>
<head>

<title>ABC AND YOU</title>

<!-- mootools -->
<script type="text/javascript" src="/src/mootools/mootools-core-1.4.5-full-compat.js"></script>

<?php

include(getenv("DOCUMENT_ROOT") . "/web/login/check_login.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//game variables to fill from db
$username = $_SESSION["username"];
$next_level = $_SESSION["next_level"];

?>

<script language="javascript">

var username = "<?php echo $username; ?>";
var next_level = "<?php echo $next_level; ?>";
var scoreNeeded = 1;
var kids = 10;
var numberOfKidsToPutOnBus = Math.floor(Math.random()*10);

</script>

<script type="text/javascript" src="/src/math/point2D.php"></script>
<script type="text/javascript" src="/src/bounds/bounds.php"></script>
<script type="text/javascript" src="/src/game/game.php"></script>
<script type="text/javascript" src="/src/game/put_kids_on_the_bus.php"></script>
<script type="text/javascript" src="/src/application/application.php"></script>
<script type="text/javascript" src="/src/animation/animation.php"></script>
<script type="text/javascript" src="/src/animation/animation_advanced.php"></script>
<script type="text/javascript" src="/src/shape/shape.php"></script>
<script type="text/javascript" src="/src/shape/bus_seat.php"></script>
<script type="text/javascript" src="/src/shape/shape_player.php"></script>
<script type="text/javascript" src="/src/shape/shape_busdriver.php"></script>
<script type="text/javascript" src="/src/shape/shape_bus.php"></script>
<script type="text/javascript" src="/src/shape/shape_dropbox.php"></script>
<script type="text/javascript" src="/src/shape/shape_dropbox_count.php"></script>
<script type="text/javascript" src="/src/shape/shape_ai.php"></script>
<script type="text/javascript" src="/src/shape/shape_key.php"></script>
<script type="text/javascript" src="/src/div/div.php"></script>
<script type="text/javascript" src="/src/question/question.php"></script>
<script type="text/javascript" src="/src/quiz/quiz.php"></script>
<script type="text/javascript" src="/src/hud/hud.php"></script>

</head>

<body bgcolor="grey">

<script language="javascript">
var mGame;
var mApplication;

window.addEvent('domready', function()
{
	//APPLICATION
        mApplication = new Application();
 
        //KEYS
        document.addEvent("keydown", mApplication.keyDown);
        document.addEvent("keyup", mApplication.keyUp);
	
	//BOUNDS AND HUD COMBO
        mBounds = new Bounds(60,735,380,35);

       	mHud = new Hud();
        mHud.mScoreNeeded.setText('<font size="2"> Needed : ' + scoreNeeded + '</font>');
	mHud.mGameName.setText('<font size="2">DUNGEON</font>');	
	
	//GAME
        mGame = new PutKidsOnTheBus("hardcode",numberOfKidsToPutOnBus);

	//QUIZ 
	mQuiz = new Quiz(scoreNeeded);
	mGame.mQuiz = mQuiz;

       	//QUESIONS	
	mQuiz.mQuestionArray.push(new Question('Put ' + numberOfKidsToPutOnBus + ' kids on the bus. Then put the key in the front of the bus.', numberOfKidsToPutOnBus));      
	
	//CONTROL OBJECT
        mGame.mControlObject = new BusDriver(50,50,400,300,mGame,'',"/images/characters/wizard.png","","controlObject");
	mGame.mControlObject.createMountPoint(0,-5,-41);

        //set animation instance
        mGame.mControlObject.mAnimation = new AnimationAdvanced(mGame.mControlObject);

 	mGame.mControlObject.mAnimation.addAnimations('/images/characters/wizard_','.png');

 	mGame.addToShapeArray(mGame.mControlObject);
        mGame.mControlObject.showQuestionObject(false);

	//KIDS
        for (i = 0; i < kids; i++)
        {
       		var openPoint = mGame.getOpenPoint2D(40,735,75,275,50,7);
                var shape;
               	mGame.addToShapeArray(shape = new Shape(50,50,openPoint.mX,openPoint.mY,mGame,'',"/images/bus/kid.png","","kid"));
                shape.showQuestion(false);
		shape.mMountable = true;
        }

	//KEY
      	openPoint = mGame.getOpenPoint2D(40,735,75,275,50,7);
        key = new ShapeKey(50,50,openPoint.mX,openPoint.mY,mGame,mQuiz.getSpecificQuestion(0),"/images/key/key_dungeon.gif","","key");
	key.mMountable = true;
	mGame.addToShapeArray(key);

	//BUS
	var bus = new ShapeBus(50,50,30,350,mGame,mQuiz.getSpecificQuestion(0),"/images/bus/bus.png","","question","/images/bus/bus.png");
        bus.createMountPoint(0,-5,-41);
	mGame.addToShapeArray(bus);

	//BUS SEAT
	for (i = 0; i < 14; i++)
        {
                var shape = new BusSeat(50,50,80 + (i * 50),350,mGame,'',"/images/bus/bus_segment.png","","bus_seat");
                shape.createMountPoint(0,-5,20);
		mGame.addToShapeArray(shape);
        }

	//BUS WHEELS
	var front_wheel = new Shape(50,50,30,400,mGame,'',"/images/bus/wheel.png","","wheel");
	mGame.addToShapeArray(front_wheel);

	var back_wheel = new Shape(50,50,750,400,mGame,'',"/images/bus/wheel.png","","wheel");
	mGame.addToShapeArray(back_wheel);

	//RESET GAME TO START
	mGame.resetGame();

        //START UPDATING
        var t=setInterval("mGame.update()",32)
}
);

window.onresize = function(event)
{
        mApplication.mWindow = window.getSize();
}
</script>

</body>
</html>
