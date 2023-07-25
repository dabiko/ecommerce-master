<?php
{{ Form::open(array('url' => 'foo/bar')) }}
echo Form::token();

{{ Form::close() }}

