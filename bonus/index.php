<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
$selected_vote = $_GET['vote']

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <form action='index.php' method="GET">
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">Cerca hotel in base al numero di stelle</label><br>
                <input type="radio" id="vote1" name="vote" value="1">
                <label for="vote1">1</label>
                <input type="radio" id="vote2" name="vote" value="2">
                <label for="vote2">2</label>
                <input type="radio" id="vote3" name="vote" value="3">
                <label for="vote3">3</label>
                <input type="radio" id="vote4" name="vote" value="4">
                <label for="vote4">4</label>
                <input type="radio" id="vote5" name="vote" value="5">
                <label for="vote5">5</label>
            </div>
            <button type="submit" class="btn btn-primary">Cerca</button>
        </form>
    </div>
    <div class="container my-5">
        <table class='table'>
            <thead>
                <?php foreach ($hotels[0] as $key => $value) { ?>
                    <th class='border'>
                        <?php echo strtoupper($key); ?>
                    </th>
                <?php
                }
                ?>
            </thead>
            <tbody>
                <?php foreach ($hotels as $item) {
                    if ($selected_vote == $item['vote']) {
                ?>
                        <tr>
                            <?php foreach ($item as $key => $value) { ?>
                                <td>
                                    <?php
                                    if ($key == 'parking') {
                                        if ($value == true) {
                                            $value = 'sì';
                                        } else {
                                            $value = 'no';
                                        }
                                    }
                                    echo $value;
                                    ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>