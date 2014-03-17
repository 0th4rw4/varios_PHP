<?php
function miLoader($class) {
    include_once(__DIR__.'/'.$class.'.php');
}
spl_autoload_register('miLoader');

