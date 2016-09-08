<?php
/**
 * Class SampleTest
 *
 * @package Wcct16
 */

namespace WCCT;

/**
 * Sample test case.
 */
class IntegrationTests extends \WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	function test_sample() {
		// Replace this with some actual testing code.
		$this->assertTrue( true );
	}

	function test_wcct_save_option() {
		$expected = 'river-club';

		wcct_save_option('venue', $expected);

		$actual = get_option('wcct_venue');

		$this->assertEquals(
				$expected,
				$actual,
				'Option expected to be equal '.$expected.' but instead was '.$actual
		);

	}

}
