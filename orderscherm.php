<?php
$db = new SQLite3("dbMacMedia.db");
$db->busyTimeout(5000);
?>

<!DOCTYPE html>
<html>

<head>
    <title>MacMedia Orders</title>
    <link rel="stylesheet" href="./orderscherm.css">
    <script src="./cash_register.js" defer async></script>
    <link rel="shortcut icon" href="./logo.png" type="image/x-icon">
    <style>
        body {
  margin: 0;
  padding: 0;
  display: flex;
  font-family: Phantomsans;
  font-size: 18px;
  color: black;
  background-color: white;
}

table {
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  width: 50%;
  margin-bottom: 20px;
}

th,
td {
  padding: 16px;
  text-align: left;
  text-align: center;
  border: 1px solid darkblue;
}

th {
  background-color: cyan;
}
    </style>
</head>

<body>
    <table class="half-width">
        <thead>
            <th>Bezig</th>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM orders WHERE status = 'bezig'";
            $result = $db->query($query);
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $orderid = $row['id']; ?>
                <tr>
                    <td><?= $orderid ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <table class="half-width">
        <thead>
            <th>Klaar</th>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM orders WHERE status = 'klaar'";
            $result = $db->query($query);
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $orderid = $row['id']; ?>
                <tr>
                    <td><?= $orderid ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



</body>
<script src="./refresh.js"></script>

</html>