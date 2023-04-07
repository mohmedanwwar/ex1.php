<?php 

$welcomeMessage = "Welcom Mohmed Aanwr";

function getAge($c , $b){
    $age = $c - $b;
    return $age;
}

$realAge = getAge(2023,1980);

//   $_GET using data with URL
print_r($_GET) 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

year 
<select> 
    <option selected disabled> Select Year</option>
<?php for($i = 1980 ; $i <=2023 ; $i++) { ?>
    <option>  <?php echo $i; ?>  </option> 
<?php } ?>
</select>

Month 
<select>
<option selected disabled> Select Month</option> 
<?php for($i = 1 ; $i <=12 ; $i++) { ?>
    <option>  <?php echo $i; ?>  </option> 
<?php } ?>
</select>

Day 
<select> 
<option selected disabled> Select Day</option>
<?php for($i = 1 ; $i <=31 ; $i++) { ?>
    <option>  <?php echo $i; ?>  </option> 
<?php } ?>
</select>





<h1 class="display-6 text-center"><?php  echo $welcomeMessage ; ?></h1>






<div class="container col-6">

          <?php  if($realAge > 18 ) :?>
    <div class="alert alert-success">
               welcome Adimn 
         
    </div>
    <?php  else :
        
        ?>
      <div class="alert alert-danger">
        Sorry cant use this site 
      </div>
         <?php endif?>
</div>




<div class="container ">
    <div class="row">
        <?php  for($i = 0 ; $i<3; $i++) { ?> 
      <div class="col-4">
        <div class="card" >
           <img src="./mo presonal.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
               <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
          </div> 
        </div>
      </div>
<?php  } ?>
    </div>
</div>

 <form action="./Server.php">
    <label for=""> Number 1 </label>
    <input type="text" name="n1">
    <label for=""> Number 2 </label>
    <input type="text" name="n2">
    <label for=""> Sign </label>
    <select name="sign" id="">
        <option value="+"> + </option>
        <option value="-"> - </option>
        <option value="/"> / </option>
        <option value="*"> * </option>
    </select>
    <button> Submit </button>
 </form>




    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>