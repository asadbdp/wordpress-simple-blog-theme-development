<?php 
	add_action('cmb2_admin_init', 'custommetabox');

	function custommetabox(){
		$metabox = new_cmb2_box(array(
			'object_types' => array('post'),
			'title' => 'Additional Infromation',
			'id' => 'additional',
		));

		$metabox->add_field(array(
			'name'=>'Subtitle',
			'id'=>'subtitle',
			'type'=>'text',
			'default'=>'please insert the subtitle',
			'desc'=>'please insert the subtitle description',

		));


		$testmonial = new_cmb2_box(array(
			'object_types' => array('testmonial'),
			'title' => 'Additional Infromation',
			'id' => 'testmonial',

		));

		$testmonial->add_field(array(
			'name' => 'Designation',
			'id' => 'designation',
			'type' => 'text',
			'desc' => 'Please insert the Designation',

		));

		$testmonial->add_field(array(
			'name' => 'Description',
			'id' => 'description',
			'type' => 'wysiwyg',
			'desc' => 'Please insert the Description',
			'options' => array(
				'textarea_rows' => get_option('default_post_edit_rows', 4)


			),

		));

	}

?>