<?php
    // Assuming you have session start here if you are using sessions

    //Connect to database
    $db = new SQLite3("dbMacMedia.db");
    $db->busyTimeout(5000);

    // Get order ID from form data
    $orderId = $_POST['orderId'];

    // Create and execute deletion query
    $deleteQuery = $db->prepare("UPDATE orders SET status = 'klaar' WHERE id = :id");
    $deleteQuery->bindValue(':id', $orderId, SQLITE3_INTEGER);
    $deleteQuery->execute();

    // Redirect back to the orders page
    header("Location: view_orders.php");
?>
