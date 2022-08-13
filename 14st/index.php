<?php 
 
if ( isset($_POST['sortit']) ) {
    $string = $_POST['string'];
 
    //convert string to array
    $str_arr = str_split($string);
 
    //sort into alphabetical order using sort() php function
    sort($str_arr);
 
    $result = implode($str_arr);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>PHP program to Sort a String in Alphabetical Order</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      <div class="row">
          <div class="col">
              <form method="post" action="">
              <br><h2>PHP program to sort a string in Alphabetical order</h2><br>
              <div class="form-group">
                  <label for="string"><h4>Enter String</h4></label>
                  <input type="text" min="0" value="<?=(isset($string)) ? $string : 'sapreet';?>" name="string" class="form-control" pattern="[a-zA-Z]*" title="Please enter only alphabets">
                  <small id="helpId" class="text-muted">Put a string and click the button to sort it</small>
              </div>
              <div class="form-group">
                  <h5>Result:<span id="res"> <?=(isset($result)) ? $result : '';?></span></h5>
              </div> 
              <div class="form-group">
                  <button type="submit" name="sortit" class="btn btn-primary">Sort it</button>
              </div>
              </form>
          </div>
      </div>
    </div>
  </body>
</html>