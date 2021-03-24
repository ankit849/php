<?php
if(isset($_POST['sub']))
{
	$txt1=$_POST['n1'];
	$txt2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$res=$txt1+$txt2;
	else if($oprnd=="-")
		$res=$txt1-$txt2;
	else if($oprnd=="x")
		$res=$txt1*$txt2;
	else if($oprnd=="cos")
		$res=cos($txt1);
	else if($oprnd=="sin")
		$res=sin($txt1);
	else if($oprnd=="tan")
		$res=tan($txt1);
	else if($oprnd=="e")
		$res=exp($txt1);
	else if($oprnd=="log")
		$res=log($txt1);
	else if($oprnd=="pi")
		$res=pi($txt1);
	else if($oprnd=="pow")
		$res=pow($txt1,$txt2);
	else if($oprnd=="sqrt")
		$res=sqrt($txt1);
	else if($oprnd=="max")
		$res=max($txt1,$txt2);
	else if($oprnd=="min")
		$res=min($txt1,$txt2);
}
?>
<html>
<head>
	<style type="text/css">
		.body{
			overflow:hidden;
		}
		.container
		{
			overflow:hidden;
			left: 25%;
			text-align: center;
			border: 1px solid green;
			
		}
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 10%;
 		 	background-color:red;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
       }
       input[type=submit]:hover{
          background-color:green;

       }
	</style>
</head>
<body>
<div class="container">
<form method="post" action="">
<h1>Arithmetic and scientific Calculator</h1>
<p><b>NOTE: </b>1. For arithmetic operation use both text boxes like all arithmetic opreators and max, min pow.</p>
<p>2. for <i>cos sin tan e log pi sqrt /i> use first txt box</p>
<br>
First Number:<input name="n1" value="<?php if(isset($_POST['n1'])) {echo $_POST['n1'];}?>" placeholder="Enter first number">
<br>
Second Number:<input name="n2" value="<?php if(isset($_POST['n2'])) {echo $_POST['n2'];}?>" placeholder="Enter second number">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/"><br>
<input type="submit" name="sub" value="cos">
<input type="submit" name="sub" value="sin">
<input type="submit" name="sub" value="tan">
<input type="submit" name="sub" value="e"><br>
<input type="submit" name="sub" value="log">
<input type="submit" name="sub" value="pi">
<input type="submit" name="sub" value="pow">
<input type="submit" name="sub" value="sqrt">
<br>
<input type="submit" name="sub" value="max">
<input type="submit" name="sub" value="min">
<br>
<br>Result: <input type='text' value="<?php echo $res; ?>"><br>
</form>
	</div>
</body>
</html>