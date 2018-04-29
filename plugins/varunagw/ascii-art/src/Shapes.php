<?php

namespace VarunAgw\AsciiArt;

abstract class Shapes {

    protected $_size;

    public function __construct($size) {
        $this->_size = $size;
    }

    /**
     * Convert shape data structure to a string
     */
    public function getShape() {
        $shape = [];

        foreach ($this->generateShape() as $row) {
            $shape[] = str_repeat(' ', $row['spacing']) . $row['pattern'];
        }
        return implode("\n", $shape);
    }

}
