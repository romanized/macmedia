    <?php

        // Get POST data
        $orderSummary = isset($_POST['orderSummary']) ? $_POST['orderSummary'] : 0;
        $totalAmount = isset($_POST['totalAmount']) ? $_POST['totalAmount'] : 0;
        $fishburgerant = isset($_POST['snackmanyFishburger']) ? $_POST['snackmanyFishburger'] : 0;
        $chickenburgerant = isset($_POST['snackmanyChickenburger']) ? $_POST['snackmanyChickenburger'] : 0;
        $cheeseburgerant = isset($_POST['snackmanyCheeseburger']) ? $_POST['snackmanyCheeseburger'] : 0;
        $frenchfriesant = isset($_POST['snackmanyFrenchfries']) ? $_POST['snackmanyFrenchfries'] : 0;
        $milkshakeant = isset($_POST['snackmanyMilkshake']) ? $_POST['snackmanyMilkshake'] : 0;
        $hamburgerant = isset($_POST['snackmanyHamburger']) ? $_POST['snackmanyHamburger'] : 0;
        print_r($_POST);


        // Connect to the database
        $db = new SQLite3("dbMacMedia.db");
        $db->busyTimeout(5000);
        

        // Prepare your SQL statement
        $stmt = $db->prepare('INSERT INTO orders (fishburgerant, chickenburgerant, cheeseburgerant, frenchfriesant, milkshakeant, hamburgerant, totalAmount) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->bindValue(1, $fishburgerant);
        $stmt->bindValue(2, $chickenburgerant);
        $stmt->bindValue(3, $cheeseburgerant);
        $stmt->bindValue(4, $frenchfriesant);
        $stmt->bindValue(5, $milkshakeant);
        $stmt->bindValue(6, $hamburgerant);
        $stmt->bindValue(7, $totalAmount);

        $stmt->bindValue(':orderSummary', $orderSummary, SQLITE3_TEXT);
        $stmt->bindValue(':totalAmount', $totalAmount, SQLITE3_FLOAT);
        

        // Execute the statement
        if($stmt->execute()) {
            header("Location: cash_register.php");
        }
        
    ?>
