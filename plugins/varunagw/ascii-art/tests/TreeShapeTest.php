<?php

declare(strict_types = 1);

namespace VarunAgw\AsciiArt;

use PHPUnit\Framework\TestCase;

final class TreeShapeTest extends TestCase {

    public function testSize5() {
        $shape = <<<EOF
   +
   X
  XXX
 XXXXX
XXXXXXX
EOF;
        $this->assertSame((new TreeShape(5))->getShape(), $shape);
    }

    public function testSize7() {
        $shape = <<<EOF
     +
     X
    XXX
   XXXXX
  XXXXXXX
 XXXXXXXXX
XXXXXXXXXXX
EOF;
        $this->assertSame((new TreeShape(7))->getShape(), $shape);
    }

    public function testSize11() {
        $shape = <<<EOF
         +
         X
        XXX
       XXXXX
      XXXXXXX
     XXXXXXXXX
    XXXXXXXXXXX
   XXXXXXXXXXXXX
  XXXXXXXXXXXXXXX
 XXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXX
EOF;
        $this->assertSame((new TreeShape(11))->getShape(), $shape);
    }

}
