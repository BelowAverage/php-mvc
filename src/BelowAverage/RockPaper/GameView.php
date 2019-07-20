<?php


namespace BelowAverage\RockPaper;


use BelowAverage\Common\Template;

class GameView {

    /** @var GameModel */
    private $model;

    /** @var GameController */
    private $controller;

    /**
     * GameView constructor.
     * @param GameController $gameController
     * @param GameModel $model
     */
    public function __construct(GameController $gameController, GameModel $model) {
        $this->controller = $gameController;
        $this->model = $model;
    }

    /**
     *
     */
    public function display() {
        // In traditional GUI programming, it is quite common that controllers will bind an actionListener to UI components,
        // but in request/response -world where object lifecycle is within one request/response, that seems like
        // pointless extra work. Still, it's the view that knows something happened.
        // View just isn't interested in details, controller will work on it.
        if (isset($_GET['selection'])) {
            $this->controller->userMadeSelection();
        }

        // Usually in MVC, View also listens to Model using Observer pattern. But Controller can also tell view
        // to change it's own state - e.g. select what view user should actually see. The data is fetched from
        // the model by view, not by controller

        $template = new Template();

        echo $template->render(__DIR__ . DIRECTORY_SEPARATOR . "layout.php");
    }

}
