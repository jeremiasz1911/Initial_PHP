<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="./assets/css/global.css">

<script src="./assets/js/main.js"></script>
<body>  
    <section>
    <h3>Order status</h3>
       <?php 
        $donuts = $_POST['donuts'];
        $bread = $_POST['bread'];
        echo  "Zamówiono pączków: $donuts" ;
        echo  "Zamówiono chleba: $bread" ;
       ?>
    </section>    
</body>
</html>