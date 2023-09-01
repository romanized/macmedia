<!DOCTYPE html>
<html>
<head>
    <title>MacMedia Cash Register</title>
    <link rel="stylesheet" href="./cash_register.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"  ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon">

</head>

<body>
    <div class="box">
    <h1><strong>Welcome to MacMedia</strong></h1>
    </div>
    
    <?php
        //Connect to database
        $db = new SQLite3("dbMacMedia.db");
        $db->busyTimeout(5000);
        
        //Create query and execute query
        $query = "SELECT * FROM snacks";
        $result = $db->query($query);
    ?>
     <form action="insert_order.php" method="post">
    <table>
    <?php
        //Read results from query and create the button, number and price field for each result
        while($snack = $result->fetchArray(SQLITE3_ASSOC)) {?>
            <tr>
            <td class="snackName"><?= $snack['snackName'] ?> $<?php echo $snack['snackPrice']; ?></td>
                <td>
                    <button type="button" class="button" onclick="addSnack('<?php echo $snack['snackName']?>', <?php echo $snack['snackPrice']?>)"><span>Add</span></button>

                    <button type="button" class="button" onclick="removeSnack('<?php echo $snack['snackName']?>', <?php echo $snack['snackPrice']?>)"><span>Remove<br></span></button>
                </td>
                <td>Amount: <input class="begin" name="snackmany<?php echo $snack['snackName'] ?>" value="0" type="text" placeholder="0" id="howMany<?php echo $snack['snackName']?>" readonly></td>
                <td>Price: <input class="begin"  type="text" placeholder="0" id="totalPrice<?php echo $snack['snackName']?>" value="0" readonly></td>
            </tr>
        <?php }; ?>
    </table>
    <div class="maddox">
    <strong>Total order price: </strong>
        <input class="begin" name="totalAmount" type="text" id="totalOrderAmount" placeholder="0.00" readonly>
        </div>
    <p class="end"> 
        <button type="submit" class="Btn">Checkout</button>
    </p>
        </form>
 </body>
<script src="./cash_register.js" defer async></script>
</html>


