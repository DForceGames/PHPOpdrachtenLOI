<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php   
    include("includes/design-top.php");
    include("includes/navigation.php");
    include("Mens.php");
?>

<div class="container" id="main-content">
    <?php 
        $m1 = new Mens("90","2"); // eerst Gewicht, daarna Lengte.
        $m2 = new Mens("60","1.50");
        $m3 = new Mens("75","1.75");
        
        $m1->bmi();
        $m2->bmi();
        $m3->bmi();
    ?>        
    
    <form method="post" action"<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="lengte" placeholder="Lengte in meters"><br>
        <input type="text" name="gewicht" placeholder="Gewicht in kilo's"><br>
        <input type="submit" name="submit" value="Bereken BMI"><br>
    </form>
    
</div>

<?php include("includes/footer.php");?>

</body>
</html>