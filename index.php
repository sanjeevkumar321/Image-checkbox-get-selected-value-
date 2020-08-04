<!DOCTYPE html>
<html lang="en" >
    <?php
        if(isset($_POST['submit']))
        { ?>

<div class="alert alert-success" role="alert">
         <?php echo(json_encode($_POST['img'])); ?>
</div>
           
<?php
        }
    ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>CodePen - An Anonymous Pen on CodePen</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<!-- partial:index.partial.html -->
<p class="text-center display-1">Selected images</p>
<form method="POST" action="">
<ul>
<?php
$img=100;
for($i=1;$i<=70;$i++)
{ $img++; ?>
 <li><input type="checkbox" id="cb<?php echo $i; ?>" name="img[]" value="<?php echo $i; ?>" />
    <label for="cb<?php echo $i; ?>"><img src="http://lorempixel.com/100/<?php echo $img; ?>" /></label>
  </li>

<?php
}
?>
  
</ul>
<button class="btn btn-success" name="submit">submit</button>
</form>
<!-- partial -->
  
</body>
</html>
