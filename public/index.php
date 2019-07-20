<?php
/**
 * php-mvc entry point
 */

use BelowAverage\RockPaper\GameController;
use BelowAverage\RockPaper\GameModel;
use BelowAverage\RockPaper\GameView;

require_once('../bootstrap.php');

$model = new GameModel();
$controller = new GameController($model);
$view  = new GameView($controller, $model);

$view->display();
