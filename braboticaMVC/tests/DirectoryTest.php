<?php
Class DirectoryExistsTest extends PHPUnit\Framework\TestCase
{
    public function testFailure(): void
    {
    	$this->assertDirectoryExists('Controllers');
        $this->assertDirectoryExists('css');
        $this->assertDirectoryExists('css\toufik');
        $this->assertDirectoryExists('img');
        $this->assertDirectoryExists('js');
        $this->assertDirectoryExists('js\imgs');
        $this->assertDirectoryExists('js\toufik');
        $this->assertDirectoryExists('Models');
        $this->assertDirectoryExists('results');
        $this->assertDirectoryExists('taal');
        $this->assertDirectoryExists('tests');
        $this->assertDirectoryExists('vendor');
        $this->assertDirectoryExists('Views');
        $this->assertDirectoryExists('Views\partials');
    }
}
Class DirectoryIsReadableTest extends PHPUnit\Framework\TestCase
{
    public function testFailure(): void
    {
        $this->assertDirectoryIsReadable('results');
    }
}
Class FileExistsTest extends PHPUnit\Framework\TestCase
{
    public function testFailure(): void
    {
    	$this->assertFileExists('Controllers\BeheerCategorieController.php');
    	$this->assertFileExists('Controllers\BeheerController.php');
    	$this->assertFileExists('Controllers\BeheerLoginController.php');
    	$this->assertFileExists('Controllers\ContactController.php');
    	$this->assertFileExists('Controllers\DownloadsController.php');
    	$this->assertFileExists('Controllers\GebruikerController.php');
    	$this->assertFileExists('Controllers\HomeController.php');
    	$this->assertFileExists('Controllers\LoginController.php');
    	$this->assertFileExists('Controllers\OverOnsController.php');
    	$this->assertFileExists('Controllers\PortfolioController.php');
    	$this->assertFileExists('Controllers\ProductenController.php');
    	$this->assertFileExists('Controllers\WinkelwagenController.php');
    	$this->assertFileExists('Controllers\ZoektermController.php');

    	$this->assertFileExists('css\toufik\toufik-styleSheet.css');
    	$this->assertFileExists('css\beheer.css');
    	$this->assertFileExists('css\contact.css');
    	$this->assertFileExists('css\gebruiker.css');
    	$this->assertFileExists('css\openstreetmap.css');
    	$this->assertFileExists('css\overOns.css');
    	$this->assertFileExists('css\portfolio.css');
    	$this->assertFileExists('css\product.css');
    	$this->assertFileExists('css\producten.css');
    	$this->assertFileExists('css\productUpdaten.css');
    	$this->assertFileExists('css\style.css');
    	$this->assertFileExists('css\winkelwagen.css');

    	$this->assertFileExists('js\imgs\marker.png');
    	$this->assertFileExists('js\toufik\carousel.js');
    	$this->assertFileExists('js\toufik\toufik-javascript.js');
    	$this->assertFileExists('js\contact.js');
    	$this->assertFileExists('js\nav.js');
    	$this->assertFileExists('js\OpenLayers.js');
    	$this->assertFileExists('js\overOns.js');
    	$this->assertFileExists('js\portfolio.js');
    	$this->assertFileExists('js\producten.js');

    	$this->assertFileExists('Models\Adres.php');
    	$this->assertFileExists('Models\Beheer.php');
    	$this->assertFileExists('Models\BeheerCategorie.php');
    	$this->assertFileExists('Models\BeheerLogin.php');
    	$this->assertFileExists('Models\Categorie.php');
    	$this->assertFileExists('Models\Gebruiker.php');
    	$this->assertFileExists('Models\Login.php');
    	$this->assertFileExists('Models\Model.php');
    	$this->assertFileExists('Models\Order.php');
    	$this->assertFileExists('Models\OrderRegel.php');
    	$this->assertFileExists('Models\Product.php');
    	$this->assertFileExists('Models\Winkelwagen.php');
    	$this->assertFileExists('Models\Zoekterm.php');
        
        $this->assertFileExists('taal\EN.php');
    	$this->assertFileExists('taal\NL.php');

    	$this->assertFileExists('Views\partials\footer.php');
    	$this->assertFileExists('Views\partials\header.php');
    	$this->assertFileExists('Views\partials\nav.php');
		$this->assertFileExists('Views\Beheer.php');
		$this->assertFileExists('Views\BeheerCategorie.php');
		$this->assertFileExists('Views\BeheerLogin.php');
		$this->assertFileExists('Views\Categorie.add.php');
		$this->assertFileExists('Views\Contact.php');
		$this->assertFileExists('Views\Downloads.php');
		$this->assertFileExists('Views\Gebruiker.add.php');
		$this->assertFileExists('Views\Gebruiker.php');
		$this->assertFileExists('Views\Home.php');
		$this->assertFileExists('Views\Login.php');
		$this->assertFileExists('Views\logout.php');
		$this->assertFileExists('Views\OverOns.php');
		$this->assertFileExists('Views\Portfolio.php');
		$this->assertFileExists('Views\Product.php');
		$this->assertFileExists('Views\ProductBeheer.php');
		$this->assertFileExists('Views\Producten.php');
		$this->assertFileExists('Views\ProductUpdaten.php');
		$this->assertFileExists('Views\Registreren.php');
		$this->assertFileExists('Views\View.php');
		$this->assertFileExists('Views\Winkelwagen.php');
		$this->assertFileExists('Views\ZoektermBeheer.php');

		$this->assertFileExists('composer.json');
		$this->assertFileExists('composer.lock');
        $this->assertFileExists('DB.php');
        $this->assertFileExists('index.php');
        $this->assertFileExists('phpunit.xml');
    }
}