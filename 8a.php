<!DOCTYPE HTML>
<html> 
<head>
	<style>
			body{
				text-align:center;
			}
			table{ 
		
    				border: 1px solid black;
				width: 33%;
				text-align: center;
				background-image: repeating-linear-gradient(90deg,white,grey);
				animation-name:hel;
				animation-duration:1000ms;
				animation-iteration-count:infinite;
				animation-delay:0s;
			}
			td, th{
				border: 1px solid black;
				width: 33%;
				text-align: center;
				background-color:darkgrey;
			}
			#ww{
				height:18px;
				width:18px;
				align:center;
				background-image: repeating-linear-gradient(90deg,white,grey);
				animation-name:hello;
				animation-duration:1000ms;
				animation-iteration-count:infinite;
				animation-delay:0s;
				border:solid 2px;
				border-radius:50%;
				display:inline-block;
				text-align:center;
				
			}
			#xx{
			height:5px;
			width:5px;
			padding:10%;
			background-color:white;
			border:solid 2px;
			border-radius:50%;
			display:inline-block;
			}
			@keyframes hello{
			10%{
				background-image:repeating-linear-gradient(0deg,white,blue);
			}
			20%{
				background-image:repeating-linear-gradient(36deg,white,blue);
			}
			30%{
				background-image:repeating-linear-gradient(72deg,white,blue);
			}
			40%{
				background-image:repeating-linear-gradient(108deg,white,blue);
			}
			50%{
				background-image:repeating-linear-gradient(144deg,white,blue);
			}
			60%{
				background-image:repeating-linear-gradient(180deg,white,blue);
			}
			70%{
				background-image:repeating-linear-gradient(216deg,white,blue);
			}
			80%{
				background-image:repeating-linear-gradient(252deg,white,blue);
			}
			90%{
				background-image:repeating-linear-gradient(288deg,white,blue);
			}
			100%{
				background-image:repeating-linear-gradient(324deg,white,blue);
			}
			0%{
				background-image:repeating-linear-gradient(360deg,white,blue);
			}
			}
			table { margin: auto;
				border:solid 5px;
				border-radius:30%;
				padding:5% } 
			input,p { text-align:right; }
	</style> 
</head>
<body>  
    
    <form method="post"> 
    	<table> 
    	<caption><h2> SIMPLE CALCULATOR </h2></caption>
	<tr><td>Value 1:</td><td><input type="text" name="num1"/></td>
	    <td rowspan="2"><input type="submit" name="submit" value="calculate">  </td></tr> 
	<tr><td>Value 2:</td><td> <input type="text" name="num2"/> </td> </tr>
    </form>  
    
    <?php  
        if(isset($_POST['submit'])) // it checks if the input submit is filled 
        {  

            $num1 = $_POST['num1'];  
            $num2 = $_POST['num2'];  

            if(is_numeric($num1) and is_numeric($num2)) {
                echo "<tr><td colspan='2'> Addition       :</td><td><p>".($num1+$num2)."</p></td></tr>";
                echo "<tr><td colspan='2'> Subtraction    :</td><td><p>".($num1-$num2)."</p></td></tr>";
                echo "<tr><td colspan='2'> Multiplication :</td><td><p>".($num1*$num2)."</p></td></tr>";
                echo "<tr><td colspan='2'> Division       :</td><td><p>".($num1/$num2)."</p></td></tr>";
                echo "</table>"; 
            }
            else{
                    echo "<script type='text/javascript'>alert(' ENTER VALID NUMBERS');</script>";          
            } 
        }
 
             
    ?> 
	<div id="ww"><div id="xx"></div></div> 
</body>
</html>  


