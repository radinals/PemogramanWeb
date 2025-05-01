<!DOCTYPE html>

<html>

    <head>

    </head>

    <style>

        table,tr,td {
        border: 1px solid;
        }

        tr td:first-child,tr:first-child {
        background:lightgreen;
        }

        tr:first-child td:first-child {
        background:white;
        }

        tr:nth-child(2n+3) td:nth-child(2n+3) {
            background:yellow;
        }

        tr:nth-child(2n+3) td:nth-child(2n+2) {
            background:cyan;
        }

        tr:nth-child(2n+2) td:nth-child(2n+3) {
            background:cyan;
        }

        tr:nth-child(2n+2) td:nth-child(2n+2) {
            background:yellow;
        }


    </style>

    <body>

        <ol>
            <li>
                <?php

                    for($i=0; $i < 10; $i++) {
                        if ($i % 2 == 0)
                            echo "$i,";
                    }
                    echo "<br><br>";

                ?>
            </li>

            <li>
                <table>

                <?php
                    echo "<tr>";
                    echo "<td>bilangan</td>";
                    for($i = 1; $i <= 10; $i++) echo "<td>".$i."</td>";
                    echo "</tr>";

                        for($i=1; $i <= 10; $i++) {
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            for($j = 1; $j <= 10; $j++) {
                                echo "<td>".($i * $j)."</td>";
                            }
                            echo "</tr>";
                        }
                ?>

                </table>


            </li>

        </ol>

</body>

</html>
