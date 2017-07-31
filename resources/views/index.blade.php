@extends('layouts/portal')

<?php
$title = 'PORTAL';

/*$modal = [
    'title' => 'Тестовый заголовок',
    'type' => 'notify',
    'content' => '<p>Какое-то сообщение и трататата твлдвап олп жлдофыв ывл</p>'
]*/

?>

@section('content')
    <div class="screen">
        <div class="content">
            <h1>Business developer</h1>
        </div>
    </div>
    <div class="screen">
        <a name="what"></a>
        <div class="content">
            <h1>Что это?</h1>
            <p>Каждый бизнесмен, самостоятельно построивший свой бизнес, вложивший в него множество сил и времени не
                понаслышке знает цену планирования. Будь то бизнес-план или бюджет на следующий год - не важно. И в том
                и в другом случае необходим постоянный контроль и максимальное прогружение. Для акул бизнеса это уже
                привычное дело, для начинающих окрылённых идеей бизнесменов это может стать сущей головной болью...</p>
        </div>
    </div>
    <div class="screen">
        <a name="what_for"></a>
        <div class="content">
            <h1>Зачем?</h1>
            <p>Множество рутинных задач можно автоматизировать...</p>
        </div>
    </div>
    <div class="screen">
        <a name="how"></a>
        <div class="content">
            <h1>Как?</h1>
            <p>Все начинается с проектирования...</p>
        </div>
    </div>
    <div class="screen">
        <a name="how_many"></a>
        <div class="content">
            <h1>Сколько?</h1>
            <p>Деловые люди всегда смогут найти компромисс интересов...</p>
        </div>
    </div>
@endsection