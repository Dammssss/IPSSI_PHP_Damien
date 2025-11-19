<?php
require_once("config.php");

$sort = "nom";
if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
}

$order = "desc";
if (isset($_GET['order'])) {
    $order = $_GET['order'];
}

$sth = $dbh->prepare(query:'SELECT * FROM jo.`100` ORDER BY '.$sort.' '.$order );
$sth->execute();

$data = $sth->fetchAll(mode:PDO::FETCH_ASSOC);
echo "<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Pays</th>
            <th>Course</th>
            <th>Temps</th>
        </tr>
     </thead>";
     foreach ($data as $value) {
        echo "<tr>
            <td>".$value["nom"]."</td>
            <td>".$value["pays"]."</td>
            <td>".$value["course"]."</td>
            <td>".$value["temps"]."</td>
            </tr>";
     }
?>