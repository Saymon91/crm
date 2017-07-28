<div class="modal" style="display: {{{ isset($modal) ? 'block' : 'none' }}} ">
    <div class="background"></div>
    <div class="central-height">
        <div class="central-width">
            <fieldset class="{{{ isset($modal) ? $modal['type'] : '' }}}">
                <legend>{{{ isset($modal) ? $modal['title'] : '' }}}</legend>
                <div class="content">{{ isset($modal) ? $modal['content'] : '' }}</div>
            </fieldset>
        </div>
    </div>
</div>