<?php


function banner_sec(){

	vc_map( array(
		'name' => __( 'Top Header', 'INDUSTRIOUS' ),
		'description' => __( 'Top Header Info', 'INDUSTRIOUS' ),
		'base' => 'topheaderindustrio',
		'icon' => 'fa fa-facebook',
		'show_settings_on_create' => true,
		'category' => __( 'Industrious', 'INDUSTRIOUS'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'admin_label' => true,
				'heading' => __( 'Site Name', 'INDUSTRIOUS' ),
				'param_name' => 'site_name',
				'value' => 'fa fa-google',
				'description' => __( 'This is a site Name', 'INDUSTRIOUS' )
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Choose Menu', 'woodmart' ),
				'param_name' => 'nav_menu',
				'value' => industrious_get_menus_array(),
				'edit_field_class' => 'vc_col-sm-6 vc_column',
			),
		)
	) );

vc_map(array(

      'name' => __('Banner section','industrious'),
      'description' => 'This is Banner Section',
      'base' => 'banner_section',
      'category' => 'Industrious',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'banner_title',
            'type' => 'textfield',
            'heading'=> 'Title',
            'value' => ''
        ),

        array(

            'param_name' => 'banner_des',
            'type' => 'textarea',
            'heading'=> 'Description',
            'value' => ''
        ),
      )

  ));


  //Section Two

  vc_map(array(

      'name' => __('Section Two','industrious'),
      'description' => 'This is a Section Two',
      'base' => 'section_two',
      'category' => 'Industrious',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'header_title',
            'type' => 'textfield',
            'heading'=> 'the banner section',
            'value' => ''
        ),

        array(

            'param_name' => 'header_des',
            'type' => 'textarea',
            'heading'=> 'the banner description',
            'value' => ''
        ),

        array(

                'type' => 'param_group',
                'heading' => 'Group Cards',
                'param_name' => 'card_section_two_group',
                'params' => array(

                    
                    array(
        
                        'param_name' => 'icon',
                        'type' => 'iconpicker',
                        'heading' => 'icon section'
                       
                    ),
        
        
                    array(
        
                        'param_name' => 'title',
                        'type' => 'textfield',
                        'heading' => 'Title',
                        'value' => '',
                 
                    ),
        
                    array(
        
                        'param_name' => 'description',
                        'type' => 'textarea',
                        'heading' => 'Description',
                        'value' => '',
                    ),

                )
            ),


      )

  ));


//Section Three With Parallex


vc_map(array(

      'name' => __('Section Three','industrious'),
      'description' => 'This is a Section Three',
      'base' => 'section_three',
      'category' => 'Industrious',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> 'Title',
            'value' => ''
        ),

        array(

            'param_name' => 'description',
            'type' => 'textarea',
            'heading'=> 'Description',
            'value' => ''
        ),
      )

  ));


  //Testimonials : Section Four


  vc_map(array(

      'name' => __('Section Four','industrious'),
      'description' => 'This is a Section Four',
      'base' => 'section_four',
      'category' => 'Industrious',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> 'Title',
            'value' => ''
        ),

        array(

            'param_name' => 'description',
            'type' => 'textarea',
            'heading'=> 'Description',
            'value' => ''
        ),


        array(

            'type' => 'param_group',
            'heading' => 'Group Testimonials',
            'param_name' => 'testiomonial_section_three_group',
            'params' => array(
                array(

                    'param_name' => 'info',
                    'type' => 'textarea',
                    'heading'=> 'Description',
                    'value' => ''
                ),
        
                 array(
        
                    'param_name' => 'image',
                    'type' => 'attach_image',
                    'heading'=> 'Image',
                   
                ),
                array(

                    'param_name' => 'author_name',
                    'type' => 'textfield',
                    'heading'=> 'Author Name',
                    'value' => ''
                ),
                
                array(

                    'param_name' => 'author_designation',
                    'type' => 'textfield',
                    'heading'=> 'Author Designation',
                    'value' => ''
                ),
                

            ),

        ),

         

      )

  ));

 }
add_action("vc_before_init","banner_sec");



?>