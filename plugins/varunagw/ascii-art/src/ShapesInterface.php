<?php

namespace VarunAgw\AsciiArt;

interface ShapesInterface {

    /**
     * height of the shape
     * Implemented by abstract class
     * @param int $size
     */
    public function __construct($size);

    /**
     * Generate the shape and return the data structure
     * @todo Better data structure for shape
     */
    public function generateShape();

    /**
     * Convert shape data structure to a string
     * Implemented by abstract class
     */
    public function getShape();
}
