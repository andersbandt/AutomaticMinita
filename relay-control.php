<?php 
if(isset($_POST['button1'])) 
{ 
    $command = "say -v Carly what is up";
    echo exec($command); 
} 
if(isset($_POST['button2'])) 
{ 
    $command = "say hello bitch";
    shell_exec($command); 
} 
if(isset($_POST['button3'])) 
{ 
    $command = "say hello hello";
    shell_exec($command); 
} 
if(isset($_POST['button4'])) 
{ 
    $command = "say -v Good tit tit tit tit tit tit tit tit tit tit tit tit tit tit tit tit tit";
    echo exec($command); 
} 

?>

<html>
<head>
<style>
.myButton {
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:150px;
	padding:70px 30%;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
	-webkit-appearance: none;
	text-align: center;
}
 
form {
	text-align: center;
}

#button1 {
	background-color:#44c767;
}
#button1:hover {
	background-color:blue;
}

#button2 {
	background-color: green;
}
#button2:hover {
	background-color:blue;
}

#button3 {
	background-color:yellow;
}
#button3:hover {
	background-color:blue;
}

#button4 {
	background-color:blue;
}
#button4:hover {
	background-color:green;
}


</style>
</head>

<body style="background-color:red">
	<form method="post"> 
<input class="myButton" id="button1" type='submit' name='button1' value='Hello'/> 
</form>

<form method="post"> 
<input class="myButton" id="button2" type='submit' name='button2' value='Hello'/> 
</form>

<form method="post"> 
<input class="myButton" type='submit' id="button3" name='button3' value='Hello'/> 
</form>

<form method="post"> 
<input class="myButton" type='submit' id="button4" name='button4' value='Hello'/> 
</form>





</body>
</html>

