<?php

namespace VarunAgw\AsciiArt;

class StarShape extends Shapes implements ShapesInterface {

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
        $size = $this->_size - 2;

        $shape = [];
        // Generate the star shape
        for ($i = 0; $i < $size; $i++) {
            $N = $i;
            if ($N > ($size - 1) / 2) {
                $N = $size - 1 - $N;
            }

            $shape[] = [
                'spacing' => ($size / 2 - $N ) * 2 - 1,
                'pattern' => str_repeat('X', $N * 4 + 1)
            ];
        }
        return $shape;
    }

    /**
     * Add enhancement to the shape
     * @param type $shape byref shape
     */
    protected function _addDecorations(&$shape) {
        // Add unique design to big stars
        if (count($shape) >= 9) {
            foreach ($shape as $key => &$row) {

                switch ($key) {
                    case 1:
                    case count($shape) - 2:
                        $row['pattern'] = substr($row['pattern'], 2);
                        break;
                    case 0:
                    case count($shape) - 1 :
                        $row['spacing'] -= 1;
                        break;
                    default:
                        $row['pattern'] = substr($row['pattern'], 2);
                }
            }
        }

        // Add little decoration in 4 centers
        array_unshift($shape, ['spacing' => $shape[0]['spacing'], 'pattern' => '+']);
        array_push($shape, ['spacing' => $shape[0]['spacing'], 'pattern' => '+']);
        foreach ($shape as $key => &$row) {
            if ($key != (count($shape) - 1 ) / 2) {
                $row['spacing'] += 1;
            } else {
                $row['pattern'] = '+' . $row['pattern'] . '+';
            }
        }
    }

}
