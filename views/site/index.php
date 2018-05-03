<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style type="text/css">
    .player_table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .player_table td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .player_table tr:nth-child(even){background-color: #f2f2f2;}

    /*.player_table tr:hover {background-color: #ddd;} */

    .player_table th {
        padding: 8px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
<div class="site-index">

    <div class="body-content">
        <h2><b>Привет!</b></h2>

        <p class="lead">На данной странице отображается содержимое базы данных<br>
            Если хочешь узнать о том как работать с API, перейди на вкладку API</p>


        <table class="player_table">
            <tr>
                <th>id</th>
                <th>date</th>
                <th>player_name</th>
                <th>score</th>
                <th>data</th>
            </tr>
            <?php
                foreach ($games as $game) {
                    echo '<tr>';
                    echo '<td>' . $game['id'] . '</td>';
                    echo '<td>' . $game['date'] . '</td>';
                    echo '<td>' . $game['player_name'] . '</td>';
                    echo '<td>' . $game['score'] . '</td>';
                    echo '<td>' . $game['data'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>

    </div>
</div>
