<?php
/**
 * @package   CodeIgniter
 * @author    Emmanuel CAMPAIT
 * @copyright Copyright (c) 2013 - 2018, domProjects (https://domprojects.com)
 * @license   http://opensource.org/licenses/MIT	MIT License
 * @link      https://domprojects.com
 * @since     Version 1.0.2
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * HTML Menu Generating Class
 *
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    HTML Menu
 * @author      Emmanuel CAMPAIT
 * @link        https://domprojects.com
 */
class Menu
{
	private $CI;

	/**
	 * Menu layout template
	 *
	 * @var array
	 */
	public $template = NULL;

	/**
	 * Newline setting
	 *
	 * @var string
	 */
	public $newline = "\n";

	/**
	 * Set the template from the menu config file if it exists
	 *
	 * @param	array	$config	(default: array())
	 * @return	void
	 */
	public function __construct($config = array())
	{	
		// initialize config
		foreach ($config as $key => $val)
		{
			$this->template[$key] = $val;
		}

		$this->CI =& get_instance();

		log_message('info', 'Menu Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * Generate the menu
	 *
	 * @param	mixed	$menu_data
	 * @return	string
	 */
	public function generate()
	{
		// Load url function
		$this->CI->load->helper('url');

		// Compile and validate the template date
		$this->_compile_template();

		// Build the menu!

		$out  = $this->template['menu_open'] . $this->newline;
		$out .= $this->_fetch_menu($this->_get_categories());
		$out .= $this->template['menu_close'] . $this->newline;

		return $out;
	}

	// --------------------------------------------------------------------

	/**
	 * Set the template
	 *
	 * @param	array	$template
	 * @return	bool
	 */
	public function set_template($template)
	{
		if ( ! is_array($template))
		{
			return FALSE;
		}

		$this->template = $template;
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Categories get class
	 *
	 * @return	void
	 */
	protected function _get_categories($id = 0)
	{
		$i = 0;

		$this->CI->load->database();

		$query = $this->CI->db->get_where('categories', array('parent_id' => $id));
		$this->CI->db->order_by('order', 'ASC');
		$result = $query->result();

		foreach($result as $key)
		{
			$result[$i]->sub = $this->_get_categories($key->id);
			$i++;
		}

		return $result;
	}

	// --------------------------------------------------------------------

	/**
	 * Menu fetch class
	 *
	 * @return	void
	 */
	protected function _fetch_menu($args)
	{
		if ( ! is_array($args))
		{
			return FALSE;
		}
		else
		{
			$out = NULL;

			foreach($args as $key)
			{
				$out .= $this->template['menu_item_open'];
				$out .= anchor(site_url($key->url), $key->name);

				if ( ! empty($key->sub))
				{
					$out .= $this->newline . $this->template['menu_open'] . $this->newline;
					$out .= $this->_fetch_menu($key->sub);
					$out .= $this->template['menu_close'] . $this->newline;
				}

				$out .= $this->template['menu_item_close'] . $this->newline;
			}

			return $out;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Compile Template
	 *
	 * @return	void
	 */
	protected function _compile_template()
	{
		if ($this->template === NULL)
		{
			$this->template = $this->_default_template();
			return;
		}

		$this->temp = $this->_default_template();

		foreach (array('menu_open', 'menu_close', 'menu_item_open', 'menu_item_close') as $val)
		{
			if ( ! isset($this->template[$val]))
			{
				$this->template[$val] = $this->temp[$val];
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Default Template
	 *
	 * @return	array
	 */
	protected function _default_template()
	{
		return array(
			'menu_open'       => '<ul>',
			'menu_close'      => '</ul>',
			'menu_item_open'  => '<li>',
			'menu_item_close' => '</li>'
		);
	}
}
