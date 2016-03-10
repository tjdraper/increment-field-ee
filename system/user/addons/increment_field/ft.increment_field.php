<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Increment Field field type
 *
 * @package simpletag
 * @author TJ Draper <tj@buzzingpixel.com>
 * @link
 * @copyright Copyright (c) 2016, BuzzingPixel, LLC
 */

class Increment_field_ft extends EE_Fieldtype
{
	// Set EE fieldtype info
	public $info = array(
		'version' => INCREMENT_FIELD_VER
	);

	/**
	 * Display field
	 *
	 * @param mixed $data Existing field data
	 * @return string
	 */
	public function display_field($data)
	{
		$name = "field_id_{$this->field_id}";

		if ($data) {
			$val = $data;
			$input = "{$val}<input type=\"hidden\" name=\"field_id_{$this->field_id}\" value=\"{$val}\">";
			return $input;
		}

		// Get previous entry count
		$prevEntry = ee('Model')->get('ChannelEntry')
			->filter($name, '!=', '')
			->order($name, 'DESC')
			->first();

		if (! $prevEntry) {
			return "1<input type=\"hidden\" name=\"field_id_{$this->field_id}\" value=\"1\">";
		}

		$val = $prevEntry->{$name} + 1;

		return "{$val}<input type=\"hidden\" name=\"field_id_{$this->field_id}\" value=\"{$val}\">";
	}
}
