<?php
 
    if ( isset($_POST['submit']) ) {
        
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
 
        $opt = $_POST['opt'];
 
        $result = simple_calculator($val1, $val2, $opt);
    }
 
    function simple_calculator($val1, $val2, $opt) {
        //use switch case to do the mathematical operations
        switch($opt) {            
            case '+':
                $value = $val1 + $val2;
                break;
            case '-':
                $value = $val1 - $val2;
                break;
            case '*':
                $value = $val1 * $val2;
                break;
            case '/':
                $value = $val1 / $val2;
                break;       
        }
        return $value;
    }
 
?>
<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Addtion, Substraction, Divide &amp; Multiplication using PHP!</title>
	</head>
	<body>
		<div class="container">
            <form action="" method="post">
                <div class="row">
                    <h3>Addition, Subtraction, Multiplication &amp; Division using PHP!</h3>
                    <hr />
                    <div class="col-lg-1">
                        <label for="desc">Value 1:</label> 
                    </div>
                    <div class="col-lg-1">
                        <input type="number" name="val1" class="form-control" id="val1" min=0 value="<?=( isset($val1) ) ? $val1 : 50;?>" required>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-1">
                        <label for="desc">Value 2:</label> 
                    </div>
                    <div class="col-lg-1">
                        <input type="number" name="val2" class="form-control" id="val2" min=0 value="<?=( isset($val1) ) ? $val2 : 40;?>" required>
                    </div>
                    <div class="col-lg-1">
                        <select id="opt" name="opt" class="form-control" required>
                            <option></option>
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                    </div>
    
                </div>
                <br />
                <div class="row">                    
                    <div class="col-lg-1">
                        <label for="desc">Answer:</label> 
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" id="ans" value="<?=( isset($result) ) ? $result : ''; ?>" readonly>
                    </div>
                    <div class="col-lg-1">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
		</div>
	</body>
</html>