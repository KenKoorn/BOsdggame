<?php
/* create a statement */
$sql = 'SELECT * 
        FROM sdg 
        WHERE id=?
        ORDER BY titel';

/* create a prepared statement */
$stmt = $mysqli->prepare($sql);

/* Bind the slug */
$stmt->bind_param('i', $id);

/* execute query */
$stmt->execute();

/* bind result variables */
$result = $stmt->get_result();

/* Nu wil ik mijn data in een array plaatsen */
$sdgItem = mysqli_fetch_assoc($result);

?>
<article>
    <h2>
        <?= $sdgItem['titel'] ?>
    </h2>
    <img src="<?= $sdgItem['img'] ?>">
    <p>
        <?= $sdgItem['beschrijving'] ?>
    </p>
</article>