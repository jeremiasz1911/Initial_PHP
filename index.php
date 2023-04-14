<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Order bakery</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="./assets/css/global.css">

<script src="./assets/js/main.js"></script>
<body>  
   
    <section>
    <h3>Order bakery</h3>
        <form action="order.php" class="center" method="post">
            <div class="block"> 
                <div class="form-group">
                    <label for="donuts">Donuts (0.99/one donut)</label>
                    <input name="donuts" type="number"></input>
                </div>
                <div class="form-group">
                    <label for="bread">Bread (2.99/one bread)</label>
                    <input name="bread" type="number"></input>
                </div>
                <input type="submit">Order</input>
            </div>
        </form>

    </section>    
</body>
</html>