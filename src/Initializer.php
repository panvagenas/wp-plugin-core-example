<?php
/**
 * Project: pan-wp-core
 * File: Initializer.php
 * User: Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Date: 3/9/2015
 * Time: 5:27 πμ
 * Since: TODO ${VERSION}
 * Copyright: 2015 Panagiotis Vagenas
 */

namespace PanWPCoreExample;

use PanWPCore\Redux;

/**
 * Class Initializer
 * @package PanWPCoreExample
 * @author Panagiotis Vagenas <pan.vagenas@gmail.com>
 * @since TODO ${VERSION}
 *
 * @property Redux $Redux
 */
class Initializer extends \PanWPCore\Initializer {
	protected function init() {
		$this->Redux->addSection( 'Basic Field', 'basic', false, 'Basic field with no subsections', array(
			'fields' => array(
				array(
					'id'       => 'opt-text',
					'type'     => 'text',
					'title'    => __( 'Example Text', 'redux-framework-demo' ),
					'desc'     => __( 'Example description.', 'redux-framework-demo' ),
					'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
					'hint'     => array(
						'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
					)
				)
			)
		) );

		$this->Redux->addSection( 'Basic Fields', 'basics' );

		$this->Redux->addSection( 'Text', 'opt-text-subsection', true,
			'For full documentation on this field, visit: <a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>' );

		$this->Redux->addField( 'opt-text-subsection',
			array(
				'id'       => 'text-example',
				'type'     => 'text',
				'title'    => __( 'Text Field', 'redux-framework-demo' ),
				'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
				'desc'     => __( 'Field Description', 'redux-framework-demo' ),
				'default'  => 'Default Text',
			)
		);

		$this->Redux->addSection( 'Text Area', 'opt-textarea-subsection', true,
			'For full documentation on this field, visit: <a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>' );

		$this->Redux->addField( 'opt-textarea-subsection',
			array(
				'id'       => 'textarea-example',
				'type'     => 'textarea',
				'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
				'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
				'desc'     => __( 'Field Description', 'redux-framework-demo' ),
				'default'  => 'Default Text',
			)
		);

		$this->Redux->setArg('menu_type', 'submenu');
	}
}