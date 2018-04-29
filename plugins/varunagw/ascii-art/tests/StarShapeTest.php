<?php

declare(strict_types = 1);

namespace VarunAgw\AsciiArt;

use PHPUnit\Framework\TestCase;

final class StarShapeTest extends TestCase {

    public function testSize5() {
        $shape = <<<EOF
   +
   X
+XXXXX+
   X
   +
EOF;
        $this->assertSame((new StarShape(5))->getShape(), $shape);
    }

    public function testSize7() {
        $shape = <<<EOF
     +
     X
   XXXXX
+XXXXXXXXX+
   XXXXX
     X
     +
EOF;
        $this->assertSame((new StarShape(7))->getShape(), $shape);
    }

    public function testSize11() {
        $shape = <<<EOF
        +
        X
       XXX
     XXXXXXX
   XXXXXXXXXXX
+XXXXXXXXXXXXXXX+
   XXXXXXXXXXX
     XXXXXXX
       XXX
        X
        +
EOF;
        $this->assertSame((new StarShape(11))->getShape(), $shape);
    }

}
