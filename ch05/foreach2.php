<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table { border-collapse: collapse; }
        table, th, td { border: 1px solid #000; }
        th, td { padding: 10px; text-align: center; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>이름</th>
            <th>키</th>
        </tr>
        <?php
            $array = array(                
                "Hong" => 182.2,
                "Hwang" => 180.4,
                "Kim" => 176.3,
                "Park" => 174.1,
            );

            foreach($array as $name => $height) {
                print "<tr><td>" . $name . "</td><td>" . 
                $height . "</td></tr>";
            }
        ?>
    </table>
</body>
</html>

