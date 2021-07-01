<?php
require_once ( __DIR__ . '\..\Models\Winkelwagen.php' );
require_once ( __DIR__ . '\..\DB.php' );

class WinkelwagenTest extends PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $winkelwagen = new Winkelwagen(1, 5, 2);
        
        $this->assertInstanceOf('Winkelwagen', $winkelwagen);
        $this->assertEquals(1, $winkelwagen->get('gebruikerId'));
        $this->assertEquals(5, $winkelwagen->get('productId'));
        $this->assertEquals(2, $winkelwagen->get('aantal'));
    }
    
    public function testCreateWinkelwagen()
    {
       $winkelwagen = new Winkelwagen(1, 5, 2);
        
        $winkelwagensKlantVoor = $winkelwagen->winkelwagenKlant();
        $winkelwagen->save();
        $winkelwagensKlantNa = $winkelwagen->winkelwagenKlant();
        
        $this->assertCount(count($winkelwagensKlantVoor) + 1, $winkelwagensKlantNa);
    }
    
    public function testDeleteWinkelwagen()
    {
       $winkelwagen = new Winkelwagen(1, 5);
        
        $winkelwagensKlantVoor = $winkelwagen->winkelwagenKlant();
        $winkelwagen->delete();
        $winkelwagensKlantNa = $winkelwagen->winkelwagenKlant();
        
        $this->assertCount(count($winkelwagensKlantVoor) - 1, $winkelwagensKlantNa);
    }

}
?>