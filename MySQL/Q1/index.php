<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'mysql');
define('DB_PASS', 'mysql');
define('DB_NAME', 'ivideon');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_errno) {
    printf('Подключение не удалось. Ошибка: %s', $mysqli->connect_error);
    die();
}

$dbQuery = "SELECT * FROM `events` WHERE YEARWEEK(begin_date) <= YEARWEEK(NOW()) AND YEARWEEK(end_date) >= YEARWEEK(NOW())";

if ($dbResult = $mysqli->query($dbQuery)) {
    ?>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Дата начала события</th>
            <th>Дата окончания события</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = $dbResult->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['begin_date'] ?></td>
                <td><?php echo $row['end_date'] ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
} else {
    echo '<p>Нет результатов</p>';
}

$mysqli->close();

?>