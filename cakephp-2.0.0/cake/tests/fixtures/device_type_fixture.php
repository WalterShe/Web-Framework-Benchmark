<?php
/**
 * Short description for file.
 *
 * PHP 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/view/1196/Testing>
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/view/1196/Testing CakePHP(tm) Tests
 * @package       cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.4667
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Short description for class.
 *
 * @package       cake.tests.fixtures
 */
class DeviceTypeFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'DeviceType'
 * @access public
 */
	public $name = 'DeviceType';

/**
 * fields property
 *
 * @var array
 * @access public
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'device_type_category_id' => array('type' => 'integer', 'null' => false),
		'feature_set_id' => array('type' => 'integer', 'null' => false),
		'exterior_type_category_id' => array('type' => 'integer', 'null' => false),
		'image_id' => array('type' => 'integer', 'null' => false),
		'extra1_id' => array('type' => 'integer', 'null' => false),
		'extra2_id' => array('type' => 'integer', 'null' => false),
		'name' => array('type' => 'string', 'null' => false),
		'order' => array('type' => 'integer', 'null' => false)
	);

/**
 * records property
 *
 * @var array
 * @access public
 */
	public $records = array(
		array('device_type_category_id' => 1, 'feature_set_id' => 1, 'exterior_type_category_id' => 1, 'image_id' => 1, 'extra1_id' => 1, 'extra2_id' => 1, 'name' => 'DeviceType 1', 'order' => 0)
	);
}
