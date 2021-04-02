<?php

namespace Aquila_Theme\Inc\Traits;

trait Singleton {
    public function _construct() {
    }
    public function _clone() {
    }

    final public static function get_instance() {
        static $instance = [];

        $called_class = get_called_class();

        if (!isset($instance[$called_class])) {
            $instance[$called_class] = new $called_class();
            do_action(sprintf('aquila_theme_scheleton_init%s', $called_class));
        }

        return $instance[$called_class];
    }
}
