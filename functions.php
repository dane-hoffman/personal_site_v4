<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $fname = $POST["firstName"];
                    $lname = $POST["lastName];
                    $email = $POST["eMail"];
                    $interest = $POST["pointOfInterest"];

                    echo "Name: " . $fname . "<br>";
                    echo "Email: " . $email . "<br>";
                    echo "Interest" . $interest . "<br>";
                }
                ?>
