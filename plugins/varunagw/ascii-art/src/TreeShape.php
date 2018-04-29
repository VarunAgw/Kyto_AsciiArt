<?php

namespace VarunAgw\AsciiArt;

class TreeShape extends Shapes implements ShapesInterface {

    public function generateShape() {
        $shape = $this->_generateShape();
        $this->_addDecorations($shape);
        return $shape;
    }

    /**
     * Create the basic shape
     * @return shape
     */
    protected function _generateShape() {
        $size = $this->_size - 1;

        $shape = [];
        // Design the tree shape
        for ($i = 0; $i < $size; $i++) {
            $shape[] = [
                'spacing' => $size - $i - 1,
                'pattern' => str_repeat('X', $i * 2 + 1)
            ];
        }
        return $shape;
    }

    /**
     * Add enhancement to the shape
     * @param type $shape byref shape
     */
    protected function _addDecorations(&$shape) {
        // Add a decoration on top
        $decoration = $shape[0];
        $decoration['pattern'] = '+';
        array_unshift($shape, ['spacing' => $shape[0]['spacing'], 'pattern' => '+']);
    }

}
