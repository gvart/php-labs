<!DOCTYPE html>
<?php
$dayofweek = date('w', strtotime($date));
$color;

if ($dayofweek <= 3) {
    $color = "green";
} else if ($dayofweek > 3 && $dayofweek <= 5) {
    $color = "blue";
} else {
    $color = "white";
}
?>
<html>

<head>
    <title>Lab1 - Background Color</title>
    <link rel="stylesheet" href="../shared/css/bootstrap.min.css">
    <style>
        div.card {
            height: 250px;
            background-color: <?php echo $color ?>;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detalii Sarcina:</h1>
                <table class="table table-striped table-bordered table-sm">
                    <tbody>
                        <tr>
                            <th>Nr. Laborator</td>
                            <td>Laborator nr. 1</td>
                        </tr>
                        <tr>
                            <th>Text</td>
                            <td>
                            Să se determine ziua curentă a săptămânii. Dacă ziua este în primele trei zile ale săptămânii,
                             culoarea paginii să fie <strong>verde</strong> Dacă ziua este în următoarele două zile ale săptămânii, culoarea 
                             paginii să fie <strong>albastră</strong> În celelalte cazuri, culoarea paginii va fi <strong>albă</strong>.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1>Rezultat:</h1>
                <div class="card">
                   
                </div>
            </div>
        </div>
    </div>
</body>

</html>