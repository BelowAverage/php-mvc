<?php


namespace BelowAverage\RockPaper;


class GameController {

    /** @var GameModel */
    private $model;

    /**
     * GameController constructor.
     * @param GameModel $model
     */
    public function __construct(GameModel $model) {
        $this->model = $model;
    }

    /**
     * This method is called by View when user takes action.
     */
    public function userMadeSelection() {
        $this->model->play(filter_input(INPUT_GET, 'selection', FILTER_SANITIZE_STRING));
    }
}
