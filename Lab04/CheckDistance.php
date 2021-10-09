<html>
    <head>
        <title>Distance and Time Calculation</title>
    </head>
    <body>
        <?php
            $cities = array('Dallas' => 803, 'Boston' => 848, 'Miami' => 1189, 'Nashville' => 406, 'Las Vegas' => 1526, 'Pittsburgh' => 409, 'Toronto' => 435);
            $choice = $_GET['destination'];
        ?>
        <table>
            <tr>
                <th>No.</th>
                <th>Destination</th>
                <th>Distance</th>
                <th>Driving time</th>
                <th>Walking time</th>
            </tr>
            <tr>
                <?php
                if (isset($_GET["submit"]))
                {
                        $distance = $cities[$choice];
                        $time = round(($distance/60), 2);
                        $walktime = round(($distance/5), 2);
                        // foreach ($choice as $des)
                            print "<td>$distance</td>";
                            print "<td>$time</td>";
                            print "<td>$walktime</td>";
                    
                }
                    // foreach ($des as $item) {
                    //     $distance = $cities[$des];
                    //     $time = round(($distance/60), 2);
                    //     $walktime = round(($distance/5), 2);
                    //     print "<td>$distance[$item]</td>";
                    //     print "<td>$time[$item]</td>";
                    //     print "<td>$walktime[$item]</td>";
                    // }
                ?>
            </tr>
        </table>
    </body>
</html>