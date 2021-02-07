<html>
	<head>
		
		<p>problem:1</p>
		
	</head>
		<body>
		 <span> A quick brown </span> <?php echo "<b>Fox</b>";?> <span> jumps over the lazy </span> 
		 <?php echo "<b>Dog</b>";
		?>
		<br>
		
		
		</body>
</html> 


<html>
<head>
<p>problem:2</p>	
</head>
<body>
	
<?php
$marks=75;

if ($marks>=90) {
           echo " the grade is A+";
          }
 else if($marks>80 && $marks<90 ){
           echo "the grade is A";
         }
         else if($marks>70 && $marks<80 ){
           echo "the grade is B";
         }
         else if($marks>60 && $marks<70 ){
           echo "the grade is C";
         }
         else{
         	echo "the grade is F";
         }

?>

</body>
</html>
<html>
	<head>
		
		<p>problem:3</p>
		
	</head>
		<body>
		<?php
		$a=4;
		$b=5;
		$Area=$a*$b;
		$perimeter= 2*($a+$b);
		if($a==$b)
		echo "the shape is a square";
		else
			{echo"area is $Area","<br>"; 
		echo"perimetet is $perimeter";}
		?>
		
		
		</body>
</html>

<html>
<head>
<p>problem:4</p>	
</head>
<body>
	
<?php
$name="razu";
//$name="mina";
//$name="mithu";

if ($name="razu"&&$name="mina"&&$name="mithu") {
           echo " hello";
          }
		  //else if ($name="mina")
			 // {
           //echo " hello";
          //}
		   //else if ($name="mithu")
			//  {
           //echo " hello";
          //}
		  else
			  echo "you are not recognized";

?>



<html>
	<head>
		
		<p>problem:5</p>
		
	</head>
		<body>
		<?php
$backColor="green"; $fontColor="red"; $imageWidth="80px"; $imageHeight="80px";
?>
<img src="aiub_logo.jpg" width="$imageWidth" height="$imageHeight" />
<h2>American International University -<span style="background-color:$backColor;color:$fontColor">
Bangladesh</h2>
</span>

		
		</body>
</html>

