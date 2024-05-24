<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $waga = floatval($_POST["waga"]);
    $wzrost = floatval($_POST["wzrost"]);

    if ($wzrost > 0) {
        $bmi = $waga / ($wzrost * $wzrost);
        $bmi = round($bmi, 2);
        echo "<h2>Twoje BMI wynosi: $bmi</h2>";

        if ($bmi < 18.5) {
            echo "<p>Masz niedowagę.</p>";
        } elseif ($bmi < 24.9) {
            echo "<p>Twoja waga jest prawidłowa.</p>";
        } elseif ($bmi < 29.9) {
            echo "<p>Masz nadwagę.</p>";
        } else {
            echo "<p>Masz otyłość.</p>";
        }
    } else {
        echo "<h2>Podano nieprawidłowy wzrost!</h2>";
    }
} else {
    echo "<h2>Proszę wypełnić formularz.</h2>";
}
?>
