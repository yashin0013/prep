<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">

   
    <h1>Nubmer Table</h1>
<form action="" method="POST">
      <div class="mb-3">
<label class="form-label">Enter a number</label>
  <input type="text" name="number" class="form-control" >
      
      <div class="mt-3 form-check">
    
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
if(isset($_POST["number"])){
     $num = (int) $_POST["number"];
    //  echo gettype($num);
     if(empty($num) || $num == null){
       echo "<p>Please Enter a number</p>";
     }elseif (is_float($num) || !is_numeric($num) || is_nan($num)) {
            echo "<p>Please Enter a valid number</p>";
     }elseif ($num<=0) {
        echo "<p>Please Enter a positive number</p>";
     }else{
         echo "<h4>Table of $num </h4>";
    
         for($i=1; $i<=10;$i++){
           echo "$num * $i = ". $i*$num ."<br>";
         }
     }
   }

?>
         </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

