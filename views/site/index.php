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

    .spoiler-wrap{background:#fff;margin: 0 0 8px;border:1px solid #efefef}
    .spoiler-head{background:#efefef;cursor:pointer;padding:5px;}
    .spoiler-body{padding:10px}
    .spoiler-wrap.disabled .spoiler-body{display:none}
    .spoiler-wrap.active{border-color:#4CAF50}
    .spoiler-wrap.active .spoiler-head{background:#4CAF50;color:#fff}

    .web-api{
        width: 100%;
        height: 100%;
        border: 1px solid blue;
    }
    .web-api_item {
        border: 1px solid red;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.spoiler-head').click(function(){
            $(this).parents('.spoiler-wrap').toggleClass("active").find('.spoiler-body').slideToggle();
        })
    })
</script>

<div class="site-index">

    <div class="body-content lead">
        <h2><b>Привет!</b></h2>

        <p>На данной странице отображается содержимое базы данных<br>
            Если хочешь узнать о том как работать с API, перейди на вкладку API</p>

        <div class="spoiler-wrap disabled">
            <div class="spoiler-head" onselectstart="return false">Описание полей таблицы</div>
            <div class="spoiler-body">
                <ul>
                    <li><b>id</b> - Первичный ключ</li>
                    <li><b>date</b> - Дата и время игры (устанавливается автоматически)</li>
                    <li><b>name</b> - Никнейм игрока (может быть NULL)</li>
                    <li><b>score</b> - Количество очков (может быть NULL)</li>
                    <li><b>info</b> - Текстовая строка длиной до 500 символов, можешь хранить в ней все что захочешь,
                        например длительность матча или сделаные ходы (может быть NULL)</li>
                </ul>
            </div>
        </div>

        <div class="spoiler-wrap disabled">
            <div class="spoiler-head" onselectstart="return false">Web API</div>
            <div class="spoiler-body">
                <div class="web-api">
                    <div class="web-api_item">
                        Вставить
                    </div>
                    <div class="web-api_item">
                        Удалить
                    </div>
                </div>
            </div>
        </div>

        <table class="player_table">
            <tr>
                <th>id</th>
                <th>date</th>
                <th>name</th>
                <th>score</th>
                <th>info</th>
            </tr>
            <?php
                foreach ($games as $game) {
                    echo '<tr>';
                    echo '<td>' . $game['id'] . '</td>';
                    echo '<td>' . $game['date'] . '</td>';
                    echo '<td>' . htmlentities($game['name']) . '</td>';
                    echo '<td>' . $game['score'] . '</td>';
                    echo '<td>' . htmlentities($game['info']) . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>

    </div>
</div>
