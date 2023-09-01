<!DOCTYPE html>
<html>
<head>
    <title>MacMedia Orders</title>
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon">
    <style>
        html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.scrollable-div {
    width: 1200px;
    max-height: 800px; /* Adjust this as needed */
    overflow-y: auto;
}

table {
	width: 100%;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead th {
    background-color: #55608f;
    border-radius: 1%;
}

tbody tr:hover {
    background-color: rgba(255,255,255,0.3);
}

tbody td {
    position: relative;
}

tbody td:hover::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: -9999px;
    bottom: -9999px;
    background-color: rgba(255,255,255,0.2);
    z-index: -1;
}

/* For Firefox */
.scrollable-div {
    scrollbar-width: thin;
    scrollbar-color: #888 #f2f2f2;
}

/* For Chrome, Safari, and Opera */
.scrollable-div::-webkit-scrollbar {
    width: 12px;
}

.scrollable-div::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}

.scrollable-div::-webkit-scrollbar-thumb {
    background: #888; 
    border-radius: 10px;
}

.scrollable-div::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

    </style>
</head>
<body>
    <div class='container'>
        <div class="scrollable-div">
            <table>
            <thead>
            <tr>
            <th><strong>Order ID:</strong></th>
            <th><strong>Fish Burger Quantity:</strong></th>
            <th><strong>Chicken Burger Quantity:</strong> </th>
            <th><strong>Cheese Burger Quantity:</strong></th>
            <th><strong>French Fries Quantity:</strong></th>
            <th><strong>Milkshake Quantity:</strong></th>
            <th><strong>Hamburger Quantity:</strong></th>
            <th><strong>Total Amount:</strong></th>
            </tr>
            </thead>
            <tbody>
            <?php
        //Connect to database
        $db = new SQLite3("dbMacMedia.db");
        $db->busyTimeout(5000);
        
        //Create query and execute query
        $query = "SELECT * FROM orders WHERE status = 'bezig'";
        $result = $db->query($query);

        while($order = $result->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
            echo "<td>" .$order['id'] . "</td>";
            echo "<td>" . ($order['fishburgerant'] > 0 ? $order['fishburgerant'] : '0') . "</td>";
            echo "<td>" . ($order['chickenburgerant'] > 0 ? $order['chickenburgerant'] : '0') . "</td>";
            echo "<td>" . ($order['cheeseburgerant'] > 0 ? $order['cheeseburgerant'] : '0') . "</td>";
            echo "<td>" . ($order['frenchfriesant'] > 0 ? $order['frenchfriesant'] : '0') . "</td>";
            echo "<td>" . ($order['milkshakeant'] > 0 ? $order['milkshakeant'] : '0') . "</td>";
            echo "<td>" . ($order['hamburgerant'] > 0 ? $order['hamburgerant'] : '0') . "</td>";
            echo "<td>" . "$" . $order['totalAmount'] . "</td>";
            echo "<td><form action='delete_order.php' method='post'>
                    <input type='hidden' name='orderId' value='".$order['id']."'/>
                    <input type='submit' value='Delete'/>
                    </form></td>";
            echo "</tr>";
        }
    ?>

            </tbody>
            </table>
        </div>
    </div>
    <script src="./refresh.js" async defer></script>
</body>
</html>
