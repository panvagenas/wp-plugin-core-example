<?php
/**
 * Project: pan-wp-core
 * File: Options.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 4/9/2015
 * Time: 2:25 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace PanWPCoreExample;


class Options extends \PanWPCore\Options{
	/**
	 * @var string
	 */
	protected $optName = 'example_options';
	/**
	 * @var array
	 */
	protected $reduxArgs = array('menu_type' => 'menu');

	/**
	 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
	 * @since  TODO ${VERSION}
	 */
	public function setup(){
		$this->Redux->setArg('menu_type', 'submenu');

		$this->Redux->addSection( $this->I18n->__('Basic Field'), 'basic', false, 'Basic field with no subsections', array(
			'fields' => array(
				array(
					'id'       => 'opt-text',
					'type'     => 'text',
					'title'    => $this->I18n->__( 'Example Text' ),
					'desc'     => $this->I18n->__( 'Example description.' ),
					'subtitle' => $this->I18n->__( 'Example subtitle.' ),
					'hint'     => array(
						'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
					)
				)
			)
		) );

		$this->Redux->addSection( $this->I18n->__('Basic Fields'), 'basics' );

		$this->Redux->addSection( $this->I18n->__('Text'), 'opt-text-subsection', true,
			'For full documentation on this field, visit: <a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>' );

		$this->Redux->addField( 'opt-text-subsection',
			array(
				'id'       => 'text-example',
				'type'     => 'text',
				'title'    => $this->I18n->__( 'Text Field' ),
				'subtitle' => $this->I18n->__( 'Subtitle' ),
				'desc'     => $this->I18n->__( 'Field Description' ),
				'default'  => 'Default Text',
			)
		);

		$this->Redux->addSection( $this->I18n->__('Text Area'), 'opt-textarea-subsection', true,
			'For full documentation on this field, visit: <a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>' );

		$this->Redux->addField( 'opt-textarea-subsection',
			array(
				'id'       => 'textarea-example',
				'type'     => 'textarea',
				'title'    => $this->I18n->__( 'Text Area Field'),
				'subtitle' => $this->I18n->__( 'Subtitle'),
				'desc'     => $this->I18n->__( 'Field Description'),
				'default'  => 'Default Text',
			)
		);
	}
}