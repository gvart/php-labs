<!DOCTYPE html>
<?php
$dayofweek = date('w', strtotime($date));
$message;

switch ($dayofweek) {
    case 1:
        $message = "A inceput o saptamina noua. Spor la lucru!";
        break;
    case 2:
        $message = "Trebuie sa rezolv exemplele la PHP";
        break;
    case 3:
        $message = "Azi trebuie sa studiem platforma MOODLE";
        break;
    case 4:
        $message = "Azi este Joi";
        break;
    case 5:
        $message = "Zi libera? Sau studiem ceva?";
        break;
    default:
        $message = "Ne distram sau?...";
        break;
}
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
    <title>Lab2 - Day of Week Message</title>
    <link rel="stylesheet" href="../shared/css/bootstrap.min.css">
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
                            <td>Laborator nr. 2</td>
                        </tr>
                        <tr>
                            <th>Text</td>
                            <td>
                                Să se afișeze pe ecran diferite mesaje în dependență de ziua săptămînii: pentru luni –
                                „A inceput o saptamina noua. Spor la lucru!”, pentru marti – „Trebuie sa rezolv exemplele la PHP”,
                                pentru miercuri – „Azi trebuie sa studiem platforma MOODLE”, pentru joi – „Azi este Joi”; pentru vineri –
                                „Zi libera? Sau studiem ceva?”, pentru simbata si duminica –” Ne distram sau?...”. Sa se utilizeze tablouri.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>

            <div class="row">
                <div class="col-md-12">
                    <h1>Rezultat:</h1>
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center"><?php echo $message ?></h1>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>