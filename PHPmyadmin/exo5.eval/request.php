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

$sth = $dbh->prepare( query: 'INSERT INTO `100` (`nom`, `pays`, `course`, `temps`) VALUES (:nom, :pays, :course, :temps)');
$sth->execute([
'nom' => $_POST['nom'],
'pays' => $_POST[ 'pays' ],
'course' => $_POST['course'],
'temps' => $_POST['temps']
]);

$data = $sth->fetchAll(mode:PDO::FETCH_ASSOC);
echo "<table>
    <thead>
        <tr>
            <th>Nom <a href='./request.php?sort=nom&order=asc'>🔼</a><a href='./request.php?sort=nom&order=desc'>🔽</a></th>
            <th>Pays <a href='./request.php?sort=pays&order=asc'>🔼</a><a href='./request.php?sort=pays&order=desc'>🔽</a></th>
            <th>Course <a href='./request.php?sort=course&order=asc'>🔼</a><a href='./request.php?sort=course&order=desc'>🔽</a></th>
            <th>Temps <a href='./request.php?sort=temps&order=asc'>🔼</a><a href='./request.php?sort=temps&order=desc'>🔽</a></th>
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