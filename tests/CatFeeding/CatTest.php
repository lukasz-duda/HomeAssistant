<?php
namespace Assistant\CatFeeding;

require __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CatTest extends TestCase {

    public function testCanCreateNamedCat() {
        $expectedName = 'Mruczek';

        $result = Cat::create($expectedName);

        $cat = $result->value();
        $this->assertNotNull($cat);
        $this->assertEquals($expectedName, $cat->name());
    }

}
