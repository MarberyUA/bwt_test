<?php
if($_SESSION['user']){
    echo '<h3 style="text-align: center">Here is today`s weather</h3>';

    include('libs/simple_html_dom.php');

    $url = "https://www.gismeteo.ua/weather-zaporizhia-5093/";

    $html = file_get_html($url);

    $elements = $html->find('.tab-content');
    $dat = $elements[1]->find('.date');
    echo '<div class="todays-weather card">';
    echo '<p class="card-header weather-day">' . $dat[0]->plaintext . '</p>';
    $els =$elements[1]->find('.unit_temperature_c');
    echo '<div class="card-bod weather-temperature">';
    echo '<span>' . 'From: ' . $els[0]->plaintext . '</span>';
    echo '<span>' . 'To: ' . $els[1]->plaintext . '</span>';
    echo "</div>";
    echo '</div>';

    $i = 0;
    $day_times = ['2:00', '5:00', '8:00', '11:00', '14:00', '17:00', '20:00', '23:00'];
    $others = $html->find('.chart__temperature');
    foreach ($others as $temperature){
        $others_temperature = $temperature->find('.unit_temperature_c');
        echo '<div class="temperature alert alert-secondary">';
        foreach ($others_temperature as $arr){
            echo('<div class="day-temperature card">');
            echo '<p class="card-header">' . $day_times[$i] . '</p>';
            echo '<p class="card-body">' . $arr->plaintext . '</p>';
            echo('</div>');
            $i += 1;
        }
        echo '</div>';
    }
}
else {
    echo '<p class="alert alert-danger error-message">You have to sign in to see the today`s weather</p>';
}