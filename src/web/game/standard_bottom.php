  	//RESET GAME TO START
        GAME.resetGame();

        //START UPDATING
        var t=setInterval("GAME.update()",32)

        //brian - update score in database
        var t=setInterval("GAME.updateScore()",1000)
				
	//check if game has gone on too long
        var t=setInterval("GAME.checkTime()",1000)
}
);

window.onresize = function(event)
{
        GAME.mWindow = window.getSize();
}
</script>

</body>
</html>

