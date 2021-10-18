<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </link>

    <title>addition de 2 valeurs</title>
</head>
<body style="margin:3em;">  
<form>  
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">nombre 1</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="number1" placeholder="value">
    </div>
	</div>
	  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">nombre 2</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="number2" placeholder="value">
    </div>
	</div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit" >ADD</button>
    </div>
  </div>
</div>
</form>  
<p style=" border-radius: 10px;
    background-color: #dee9fa;
    color: 2px solid #B295E2;
    padding: 20px;
    border: 10px solid;">
<?php      
@$number1=$_GET['number1'];   
@$number2=$_GET['number2'];   
    if(isset($_GET['submit']))  
    {  
        $number1 = $_GET['number1'];  
        $number2 = $_GET['number2'];  
        $sum =  $number1+$number2;     
		echo "The sum of $number1 and $number2 is: <span style='font-size: 250%'>".$sum;   
}  
?>  
</span>
</p>
</body>  
</html>  
