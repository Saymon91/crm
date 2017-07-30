<?php
$buttons = (isset($modal) && isset($modal['buttons'])) ? $modal['buttons'] : [
    'success' => [
        'content' => 'Success',
        'class' => 'btn btn-success',
        'title' => 'Success'
    ],
    'cancel' => [
        'content' => 'Cancel',
        'class' => 'btn btn-cancel',
        'title' => 'Cancel'
    ]
];
?>

<div class="modal" style="display: {{ isset($modal) ? 'block' : 'none' }} ">
    <div class="background"></div>
    <div class="central-height">
        <div class="central-width">
            <fieldset class="{{ isset($modal) ? $modal['type'] : '' }}">
                <legend>{{{ isset($modal) ? $modal['title'] : '' }}}</legend>
                <div class="content">{!! isset($modal) ? $modal['content'] : '' !!}</div>
                <div class="buttons">
                    @foreach($buttons as $button)
                    <button title="{{ $button['title'] }}" class="{{ $button['class'] }}">{{ $button['content'] }}</button>
                    @endforeach
                </div>
            </fieldset>
        </div>
    </div>
</div>