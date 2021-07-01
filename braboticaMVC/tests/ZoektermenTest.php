<?php
require_once ( __DIR__ . '\..\Models\ZoekTerm.php' );
require_once ( __DIR__ . '\..\DB.php' );

class ZoektermenTest extends PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $zoekterm = new Zoekterm("testzoekterm");
        
        $this->assertInstanceOf('zoekterm', $zoekterm);
        $this->assertEquals("testzoekterm", $zoekterm->get('zoekterm'));
    }
    
    public function testCreateZoekTerm()
    {
        $zoekterm = new Zoekterm("testzoekterm");
        
        $zoektermenVoor = $zoekterm->alleZoektermen();
        $zoekterm->create();
        $zoektermenNa = $zoekterm->alleZoektermen();
        
        $this->assertCount(count($zoektermenVoor) + 1, $zoektermenNa);
    }
}
?>