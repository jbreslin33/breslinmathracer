<html>
<head>

<title>ABC AND YOU</title>

<!-- mootools -->
<script type="text/javascript" src="/src/mootools/mootools-core-1.4.5-full-compat.js"></script>

<?php
include(getenv("DOCUMENT_ROOT") . "/web/login/check_login.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_games_attempts.php");

//game variables to fill from db
$username = $_SESSION["username"];
$next_level = $_SESSION["next_level"];

//db connection
$conn = dbConnect();

//brian - get current date
$curDate = date('Y-m-d H:i:s');

//brian - attempt a game - still hardcoding game_id = 1
insertIntoGamesAttempts($conn,$curDate,1,$_SESSION["user_id"],$_SESSION["next_level"]);

?>

<script language="javascript">

var curDate = "<?php echo $curDate; ?>";
var username = "<?php echo $username; ?>";
var next_level = "<?php echo $next_level; ?>";
var scoreNeeded = 1;

//brian - update score in games_attempts table
function updateScore()
{

<?php 
//insertScoreIntoGamesAttempts($conn,$_SESSION["user_id"],6,$curDate);
 ?>
}

</script>


<script type="text/javascript" src="/src/math/point2D.php"></script>
<script type="text/javascript" src="/src/bounds/bounds.php"></script>
<script type="text/javascript" src="/src/game/game.php"></script>
<script type="text/javascript" src="/src/application/application.php"></script>
<script type="text/javascript" src="/src/animation/animation.php"></script>
<script type="text/javascript" src="/src/animation/animation_advanced.php"></script>
<script type="text/javascript" src="/src/shape/shape.php"></script>
<script type="text/javascript" src="/src/shape/shape_player.php"></script>
<script type="text/javascript" src="/src/shape/shape_door.php"></script>
<script type="text/javascript" src="/src/shape/shape_ai.php"></script>
<script type="text/javascript" src="/src/shape/shape_chaser.php"></script>
<script type="text/javascript" src="/src/shape/shape_key.php"></script>
<script type="text/javascript" src="/src/shape/shape_key_quiz_complete.php"></script>
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
        mGame = new Game("hardcode");

	//QUIZ 
	mQuiz = new Quiz(scoreNeeded);
	mGame.mQuiz = mQuiz;
	
	//QUESTIONS FOR QUIZ
       	mQuiz.mQuestionArray.push(new Question('What is zero plus one?', 'one'));      
       	mQuiz.mQuestionArray.push(new Question('What is one plus one?', 'two'));      
       	mQuiz.mQuestionArray.push(new Question('What is two plus one?', 'three'));      
       	mQuiz.mQuestionArray.push(new Question('What is three plus one?', 'four'));      
       	mQuiz.mQuestionArray.push(new Question('What is four plus one?', 'five'));      
       	mQuiz.mQuestionArray.push(new Question('What is five plus one?', 'six'));      
       	mQuiz.mQuestionArray.push(new Question('What is six plus one?', 'seven'));      
       	mQuiz.mQuestionArray.push(new Question('What is seven plus one?', 'eight'));      
       	mQuiz.mQuestionArray.push(new Question('What is eight plus one?', 'nine'));      
       	mQuiz.mQuestionArray.push(new Question('What is nine plus one?', 'ten'));      
       	mQuiz.mQuestionArray.push(new Question('What is ten plus one?', 'eleven'));      
       	mQuiz.mQuestionArray.push(new Question('What is eleven plus one?', 'twelve'));      
       	mQuiz.mQuestionArray.push(new Question('What is twelve plus one?', 'thirteen'));      
       	mQuiz.mQuestionArray.push(new Question('What is thirteen plus one?', 'fourteen'));      
       	mQuiz.mQuestionArray.push(new Question('What is fourteen plus one?', 'fifteen'));      
       	mQuiz.mQuestionArray.push(new Question('What is fifteen plus one?', 'sixteen'));      
       	mQuiz.mQuestionArray.push(new Question('What is sixteen plus one?', 'seventeen'));      
       	mQuiz.mQuestionArray.push(new Question('What is seventeen plus one?', 'eighteen'));      
       	mQuiz.mQuestionArray.push(new Question('What is eighteen plus one?', 'nineteen'));      
       	mQuiz.mQuestionArray.push(new Question('What is nineteen plus one?', 'twenty'));      

       	mQuiz.mQuestionArray.push(new Question('', 'Open door with key'));      

	//CONTROL OBJECT
        mGame.mControlObject = new Player(50,50,400,300,mGame,mQuiz.getSpecificQuestion(0),"/images/characters/wizard.png","","controlObject");
	mGame.mControlObject.createMountPoint(0,-5,-41);

        //set animation instance
        mGame.mControlObject.mAnimation = new AnimationAdvanced(mGame.mControlObject);

 	mGame.mControlObject.mAnimation.addAnimations('/images/characters/wizard_','.png');

 	mGame.addToShapeArray(mGame.mControlObject);
        mGame.mControlObject.showQuestionObject(false);

        //numberMount to go on top let's make it small and draw it on top
        var numberMountee = new Shape(100,50,300,300,mGame,mQuiz.getSpecificQuestion(0),"","orange","numberMountee");
        mGame.addToShapeArray(numberMountee);

        //do the mount
        mGame.mControlObject.mount(numberMountee,0);

        numberMountee.setBackgroundColor("transparent");

 	//DOOR
        var openPoint = mGame.getOpenPoint2D(40,735,75,375,50,7);
        var door = new ShapeDoor(50,50,openPoint.mX,openPoint.mY,mGame,mQuiz.getSpecificQuestion(20),"/images/doors/door_closed.png","","question","/images/doors/door_open.png");
        door.createMountPoint(0,-5,-41);

        mGame.addToShapeArray(door);

        //numberMount to go on top let's make it small and draw it on top
        var numberMountee = new Shape(1,1,100,100,mGame,mQuiz.getSpecificQuestion(20),"","orange","numberMountee");
        mGame.addToShapeArray(numberMountee);
        numberMountee.showQuestion(false);

        //do the mount
        door.mount(numberMountee,0);

        numberMountee.setBackgroundColor("transparent");

	 //KEY
        openPoint = mGame.getOpenPoint2D(40,735,75,375,50,7);
        key = new ShapeKeyQuizComplete(50,50,openPoint.mX,openPoint.mY,mGame,mQuiz.getSpecificQuestion(20),"/images/key/key_dungeon.gif","","key");
        mGame.addToShapeArray(key);

     
	//QUESTION SHAPES 
        for (i = 0; i < scoreNeeded; i++)
        {
       		var openPoint = mGame.getOpenPoint2D(40,735,75,375,50,7);
                var shape;
               	mGame.addToShapeArray(shape = new Shape(50,50,openPoint.mX,openPoint.mY,mGame,mQuiz.getSpecificQuestion(i),"/images/treasure/gold_coin_head.png","","question"));
		shape.createMountPoint(0,-5,-41);
                shape.showQuestion(false);

		//numberMount to go on top let's make it small and draw it on top 
                var numberMountee = new Shape(1,1,100,100,mGame,mQuiz.getSpecificQuestion(i),"","orange","numberMountee");       
                mGame.addToShapeArray(numberMountee); 
                numberMountee.showQuestion(false);
                
		//do the mount  
		shape.mount(numberMountee,0);

		numberMountee.setBackgroundColor("transparent");

        }
	
	//CHASERS
	chasers = 0;
	for (i = 0; i < chasers; i++)
        {
       		var openPoint = mGame.getOpenPoint2D(40,735,75,375,50,7);
                var shape = new ShapeChaser(50,50,openPoint.mX,openPoint.mY,mGame,"","/images/monster/red_monster.png","","chaser");
		mGame.addToShapeArray(shape);
        }

	//RESET GAME TO START
	mGame.resetGame();

        //START UPDATING
        var t=setInterval("mGame.update()",32)
		
		//brian - update score for teacher to see
		//var k = setInterval("updateScore()",500)

}
);

window.onresize = function(event)
{
        mApplication.mWindow = window.getSize();
}
</script>

</body>
</html>
