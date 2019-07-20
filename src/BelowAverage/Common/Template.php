<?php


namespace BelowAverage\Common;

/**
 * Simple, barebone templating implementation
 *
 * @package BelowAverage\Common
 */
class Template {

    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name] ?? null;
    }

    public function render($template) {
        ob_start();
        extract($this->data, EXTR_SKIP);
        include $template;
        return ob_get_clean();
    }

}
