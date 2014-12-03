<html>
<body>

<style>
DIV.movable { position:absolute; }
</style>

<div id="wizard" class="movable"><img src="wizard_north.png" /></div>

<script language=javascript>

var int=self.setInterval("update()",3);

//positions
x = 0; 
y = 200;

document.getElementById("wizard").style.left = x + 'px';
document.getElementById("wizard").style.top  = y + 'px';

function update()
{
	// update position
	x++;

	//render	
	document.getElementById("wizard").style.left = x + 'px';
	document.getElementById("wizard").style.top  = y + 'px';
}

</script>

</body>
</html> 
