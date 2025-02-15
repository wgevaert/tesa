<?php

namespace Onoi\Tesa\Tests\Synonymizer;

use Onoi\Tesa\Synonymizer\NullSynonymizer;

/**
 * @covers \Onoi\Tesa\Synonymizer\NullSynonymizer
 * @group onoi-tesa
 *
 * @license GNU GPL v2+
 * @since 0.1
 *
 * @author mwjames
 */
class NullSynonymizerTest extends \PHPUnit\Framework\TestCase {

	public function testCanConstruct() {

		$this->assertInstanceOf(
			'\Onoi\Tesa\Synonymizer\NullSynonymizer',
			new NullSynonymizer()
		);
	}

	public function testSynonymize() {

		$instance = new NullSynonymizer();

		$this->assertEquals(
			'Foo',
			$instance->synonymize( 'Foo' )
		);
	}

}
