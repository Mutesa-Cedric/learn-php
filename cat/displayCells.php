<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            margin: 2em auto;
        }

        table,
        tr,
        td,
        th {
            border: 2px solid green;
            border-collapse: collapse;
            font-size: 24px;
            padding: 2px;

        }

        th {
            background-color: rgba(0, 0, 200, 0.7);
            color: white;
            font-weight: lighter;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <?php

    include_once 'connection.php';

    $selectQuery = "select
    provinces.provinceName as Province,
    districts.districtName as District,
    sectors.sectorName as Sector,
    cells.cellid as CellId,
    cells.cellName as Cell,
  (
        select
            count(villageId)
        from
            villages
    ) as NumberOfVillages
from
    provinces join districts using(provinceId)
    join sectors using(districtId)
    join cells using(sectorId)
group by
    cells.cellId;
";

    $select = mysqli_query($connection, $selectQuery);

    echo "<table>
<tr>
<th>Province</th>
<th>District</th>
<th>Sector</th>
<th>CellId</th>
<th>Cell</th>
<th>NumberOfVillages</th>
</tr>
";
    while ($row = mysqli_fetch_assoc($select)) {
        echo "<tr>";
        echo "<td>" . $row['Province'] . "</td>";
        echo "<td>" . $row['District'] . "</td>";
        echo "<td>" . $row['Sector'] . "</td>";
        echo "<td>" . $row['CellId'] . "</td>";
        echo "<td>" . $row['Cell'] . "</td>";
        echo "<td>" . $row['NumberOfVillages'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    ?>
</body>

</html>