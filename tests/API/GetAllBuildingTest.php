<?php
namespace Gueststream\PMS\IQWare\API;

/**
 * GetAllBuildingTest
 */
class GetAllBuildingTest extends \PHPUnit_Framework_TestCase {

	public function testSetGetIntGUID() {
		$getAllBuildingRequest = new GetAllBuilding( 1 );
		$this->assertTrue( is_int( $getAllBuildingRequest->getIntGUID() ) );

		$getAllBuildingRequest->setIntGUID( 1 );
		$this->assertTrue( is_int( $getAllBuildingRequest->getIntGUID() ) );

		$getAllBuildingRequest->setIntGUID( "1" );
		$this->assertTrue( is_int( $getAllBuildingRequest->getIntGUID() ) );
	}

	public function testDefaultLang() {
		$getAllBuildingRequest = new GetAllBuilding( 1 );
		$this->assertSame( "en", $getAllBuildingRequest->getStrISOLanguageCode() );
	}

	public function testSetGetLang() {
		$spanishLang           = "es";
		$getAllBuildingRequest = new GetAllBuilding( 1, $spanishLang );
		$this->assertSame( $spanishLang, $getAllBuildingRequest->getStrISOLanguageCode() );

		$hebrewLang = "he";
		$getAllBuildingRequest->setStrISOLanguageCode( $hebrewLang );
		$this->assertSame( $hebrewLang, $getAllBuildingRequest->getStrISOLanguageCode() );
	}
}
