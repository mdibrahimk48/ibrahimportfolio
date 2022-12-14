<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix_my_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Custom Theme Options',
  'menu_slug'  => 'csf-demo',
) );

//
// Create a section Social Icon
//
CSF::createSection( $prefix, array(
  'title'  => 'Social Icon Options',
  'icon'   => 'fas fa-barcode',
  'fields' => array(

//
// Field: group Social Icon
//
    array(
      'id'     => 'opt-social',
      'type'   => 'group',
      'title'  => __('Social Link Group', 'ibrahimportfolio'),
      'button_title'  => __('Add New Social Field', 'ibrahimportfolio'),
      'fields' => array(
        array(
          'id'        => 'opt-social-title',
          'type'      => 'text',
          'title'     => __('Social Link Title', 'ibrahimportfolio'),
        ),
        array(
          'id'    => 'opt-social-icon',
          'type'  => 'text',
          'title'  => __('Social Link Icon Class', 'ibrahimportfolio'),
        ),
        array(
          'id'    => 'opt-social-url',
          'type'  => 'text',
          'title'  => __('Social Link URL', 'ibrahimportfolio'),
        ),
      ),
      'default' => array(
        array(
          'opt-social-title'     => 'Facebook',
          'opt-social-icon'      => 'ti-facebook',
          'opt-social-url'       => '#',
        ),
        array(
          'opt-social-title'     => 'Twitter',
          'opt-social-icon'      => 'ti-twitter',
          'opt-social-url'       => '#',
        ),
        array(
          'opt-social-title'     => 'Google',
          'opt-social-icon'      => 'ti-google',
          'opt-social-url'       => '#',
        ),
        array(
          'opt-social-title'     => 'Instagram',
          'opt-social-icon'      => 'ti-instagram',
          'opt-social-url'       => '#',
        ),
        array(
          'opt-social-title'     => 'Github',
          'opt-social-icon'      => 'ti-github',
          'opt-social-url'       => '#',
        ),
      )
    ),

  )
) );


//
// Create Hero Section
//

CSF::createSection( $prefix, array(
  'title'  => 'Hero Section',
  'icon'   => 'fas fa-code',
  'fields' => array(

    array(
      'id'     => 'opt-hero',
      'type'   => 'fieldset',
      'title'  => 'Hero Section',
      'fields' => array(
        array(
          'id'      => 'opt-wlctitle',
          'type'    => 'text',
          'title'   => 'Welcome Title',
        ),
        array(
          'id'      => 'opt-heroname',
          'type'    => 'text',
          'title'   => 'Name',
        ),
        array(
          'id'      => 'opt-herodesignation',
          'type'    => 'text',
          'title'   => 'Designation',
        ),
        array(
          'id'      => 'opt-btntitle',
          'type'    => 'text',
          'title'   => 'Button Text',
        ),
        array(
          'id'      => 'opt-heroimage2',
          'type'    => 'media',
          'title'   => 'Insert Hero Image',
          'button_title' => 'Upload Image'
        ),
      ),
      'default' => array(
        'opt-wlctitle'              => 'Hello, this is',
        'opt-heroname'              => 'Md. Ibrahim Khalil',
        'opt-herodesignation'       => 'Full Stack WordPress Developer',
        'opt-btntitle'              => 'My Resume',
      )
    ),

  )
) );


//
// Create About Section
//
CSF::createSection( $prefix, array(
  'title'  => 'About Section',
  'icon'   => 'fab fa-servicestack',
  'fields' => array(

    array(
      'id'     => 'opt-about-details',
      'type'   => 'fieldset',
      'title'  => 'About Info',
      'fields' => array(
        array(
          'id'      => 'opt-detailstitle',
          'type'    => 'text',
          'title'   => 'About Title',
        ),
        array(
          'id'      => 'opt-detailsheading',
          'type'    => 'text',
          'title'   => 'About Heading',
        ),
        array(
          'id'      => 'opt-detailsdesc',
          'type'    => 'textarea',
          'title'   => 'About Description',
        ),
        array(
          'id'      => 'opt-detailsbuttontitle',
          'type'    => 'text',
          'title'   => 'About Button Title',
        ),
      ),
      'default' => array(
        'opt-detailstitle'              => 'Who am I ?',
        'opt-detailsheading'            => 'A Web Designer / Developer Located In Our Lovely Earth',
        'opt-detailsdesc'               => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.sit amet, Qui deserunt consequatur fugit repellendusillo voluptas? Update',
        'opt-detailsbuttontitle'        => 'Click to Download',
      )
    ),


    //
    // Field: Create Personal Info & Group
    //

    array(
      'id'     => 'opt-personal-info',
      'type'   => 'fieldset',
      'title'  => 'Personal Info',
      'fields' => array(
        array(
          'id'      => 'opt-personalinfotitle',
          'type'    => 'text',
          'title'   => 'Personal Info Title',
          'default' => 'Personal Details',
        ),
        array(
          'id'     => 'opt-personalinfogroup',
          'type'   => 'group',
          'title'  => __('Personal Info Group', 'ibrahimportfolio'),
          'button_title'  => __('Add New Info', 'ibrahimportfolio'),
          'fields' => array(
            array(
              'id'        => 'opt-info-title',
              'type'      => 'text',
              'title'     => __('Info Title', 'ibrahimportfolio'),
            ),
            array(
              'id'    => 'opt-info-details',
              'type'  => 'text',
              'title'  => __('Info Details', 'ibrahimportfolio'),
            )
          ),
          'default' => array(
            array(
              'opt-info-title'        => 'Birthdate',
              'opt-info-details'      => '04/10/1996',
            ),
            array(
              'opt-info-title'        => 'Email',
              'opt-info-details'      => 'mdibrahimk48@gmail.com',
            ),
            array(
              'opt-info-title'        => 'Mobile',
              'opt-info-details'      => '01737328916',
            ),
            array(
              'opt-info-title'        => 'Skype',
              'opt-info-details'      => 'ibrahim.khalil6446',
            ),
            array(
              'opt-info-title'        => 'Github',
              'opt-info-details'      => 'mdibrahimk48',
            ),
            array(
              'opt-info-title'        => 'Address',
              'opt-info-details'      => 'Basudebpur, Godagari, Rajshahi',
            ),
          )
        ),
      )
    ),


    //
    // Field: Expertise Area group 
    //

    array(
      'id'     => 'opt-expertise-area',
      'type'   => 'fieldset',
      'title'  => 'Expertise Area',
      'fields' => array(
          array(
            'id'      => 'opt-expertisetitle',
            'type'    => 'text',
            'title'   => 'Expertise Area Title',
            'default' => 'My Expertise',
          ),
        array(
          'id'     => 'opt-expertise',
          'type'   => 'group',
          'title'  => __('Expertise Area Group', 'ibrahimportfolio'),
          'button_title'  => __('Add New Area', 'ibrahimportfolio'),
          'fields' => array(
            array(
              'id'    => 'opt-exp-heading',
              'type'  => 'text',
              'title'  => __('Expertise Heading', 'ibrahimportfolio'),
            ),
            array(
              'id'        => 'opt-exp-icon-class',
              'type'      => 'text',
              'title'     => __('Icon Class', 'ibrahimportfolio'),
            ),
            array(
              'id'    => 'opt-exp-description',
              'type'  => 'text',
              'title'  => __('Expertise Description', 'ibrahimportfolio'),
            ),
          ),
          'default' => array(
            array(
              'opt-exp-heading'           => 'UX Design',
              'opt-exp-icon-class'        => 'ti-widget icon-lg',
              'opt-exp-description'       => 'exercitat Repellendus,  corrupt.',
            ),
            array(
              'opt-exp-heading'           => 'Web Development',
              'opt-exp-icon-class'        => 'ti-paint-bucket icon-lg',
              'opt-exp-description'       => 'exercitat Repellendus,  corrupt.',
            ),
            array(
              'opt-exp-heading'           => 'Digital Marketing',
              'opt-exp-icon-class'        => 'ti-stats-up icon-lg',
              'opt-exp-description'       => 'exercitat Repellendus,  corrupt.',
            ),
            array(
              'opt-exp-heading'           => 'UI/UX Design',
              'opt-exp-icon-class'        => 'ti-widget icon-lg',
              'opt-exp-description'       => 'exercitat Repellendus,  corrupt.',
            ),
          )
        ),
      )
    ),

  )
));

//
// Create Resume Section
//
CSF::createSection( $prefix, array(
  'title'  => 'Resume Section',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    //Section Heading
    array(
      'id'     => 'opt-resume-heading',
      'type'   => 'fieldset',
      'title'  => 'Resume Section Heading',
      'fields' => array(
        array(
          'id'      => 'opt-detailstitle1',
          'type'    => 'text',
          'default' => 'My',
        ),
        array(
          'id'      => 'opt-detailstitle2',
          'type'    => 'text',
          'default' => 'Resume',
        ),
      )
    ),


    //
    // Field: Expertise Area group Details
    //

    array(
      'id'     => 'opt-heading-title-expertise',
      'type'   => 'fieldset',
      'title'  => 'Expertise Area Session',
      'fields' => array(
          array(
            'id'      => 'opt-expertisetitle',
            'type'    => 'text',
            'title'   => 'Main Area Title',
            'default' => 'Expertise',
          ),
        array(
          'id'     => 'opt-expertise-group',
          'type'   => 'group',
          'title'  => __('Expertise Group Area', 'ibrahimportfolio'),
          'button_title'  => __('Add New Area', 'ibrahimportfolio'),
          'fields' => array(
            array(
              'id'        => 'opt-exp-duration',
              'type'      => 'text',
              'title'     => __('Working Duration', 'ibrahimportfolio'),
            ),
            array(
              'id'        => 'opt-exp-designation',
              'type'      => 'text',
              'title'     => __('Designation/Role', 'ibrahimportfolio'),
            ),
            array(
              'id'    => 'opt-exp-description-part',
              'type'  => 'textarea',
              'title'  => __('Expertise Description', 'ibrahimportfolio'),
            ),
          ),
          'default' => array(
            array(
              'opt-exp-duration'                => '2017 - Present',
              'opt-exp-designation'             => 'UX Developer',
              'opt-exp-description-part'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.',
            ),
            array(
              'opt-exp-duration'                => '2016 - 2017',
              'opt-exp-designation'             => 'Front-end Developer',
              'opt-exp-description-part'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.',
            ),
            array(
              'opt-exp-duration'                => '2015 - 2016',
              'opt-exp-designation'             => 'PHP Developer',
              'opt-exp-description-part'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.',
            ),
          )
        ),
      )
    ),


    //
    // Field: Create Personal Info & Group
    //

    array(
      'id'     => 'opt-heading-title-education',
      'type'   => 'fieldset',
      'title'  => 'Education Area Session',
      'fields' => array(
          array(
            'id'      => 'opt-educationtitle',
            'type'    => 'text',
            'title'   => 'Main Area Title',
            'default' => 'Education',
          ),
        array(
          'id'     => 'opt-education-group',
          'type'   => 'group',
          'title'  => __('Education Group Area', 'ibrahimportfolio'),
          'button_title'  => __('Add New Area', 'ibrahimportfolio'),
          'fields' => array(
            array(
              'id'        => 'opt-edu-duration',
              'type'      => 'text',
              'title'     => __('Period', 'ibrahimportfolio'),
            ),
            array(
              'id'        => 'opt-edu-degree',
              'type'      => 'text',
              'title'     => __('Degree Name', 'ibrahimportfolio'),
            ),
            array(
              'id'    => 'opt-edu-description-part',
              'type'  => 'textarea',
              'title'  => __('Education Description', 'ibrahimportfolio'),
            ),
          ),
          'default' => array(
            array(
              'opt-edu-duration'                => '2017 - Present',
              'opt-edu-degree'                  => 'B.E Computer Engineering',
              'opt-edu-description-part'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error corrupti recusandae obcaecati odit repellat ducimus cum, minus tempora aperiam at.',
            ),
            array(
              'opt-edu-duration'                => '2016 - 2017',
              'opt-edu-degree'                  => 'Diploma in Computer Engineering',
              'opt-edu-description-part'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error corrupti recusandae obcaecati odit repellat ducimus cum, minus tempora aperiam at.',
            ),
            array(
              'opt-edu-duration'                => '2015 - 2016',
              'opt-edu-degree'                  => 'High School Degree',
              'opt-edu-description-part'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error corrupti recusandae obcaecati odit repellat ducimus cum, minus tempora aperiam at.',
            ),
          )
        ),
      )
    ),


    //
    // Field: Skills Info & Group
    //

    array(
      'id'     => 'opt-skills',
      'type'   => 'fieldset',
      'title'  => 'Skills Area',
      'fields' => array(
          array(
            'id'      => 'opt-skillstitle',
            'type'    => 'text',
            'title'   => 'Main Area Title',
            'default' => 'Skills',
          ),
        array(
          'id'            => 'opt-skills-group',
          'type'          => 'group',
          'title'         => __('Skills Group Area', 'ibrahimportfolio'),
          'button_title'  => __('Add New Skills', 'ibrahimportfolio'),
          'fields' => array(
            array(
              'id'        => 'opt-skills-title',
              'type'      => 'text',
              'title'     => __('Skills Title', 'ibrahimportfolio'),
            ),
            array(
              'id'        => 'opt-skills-measurement',
              'type'      => 'text',
              'title'     => __('Skills Measurement (In Percentage)', 'ibrahimportfolio'),
            ),
          ),
            'default' => array(
              array(
                'opt-skills-title'          => 'HTML5 & CSS3',
                'opt-skills-measurement'    => '95%',
              ),
              array(
                'opt-skills-title'          => 'WordPress Development',
                'opt-skills-measurement'    => '85%',
              ),
              array(
                'opt-skills-title'          => 'Theme Development',
                'opt-skills-measurement'    => '80%',
              ),
              array(
                'opt-skills-title'          => 'Plugin Development',
                'opt-skills-measurement'    => '90%',
              ),
              array(
                'opt-skills-title'          => 'Speed Optimization',
                'opt-skills-measurement'    => '90%',
              ),
              array(
                'opt-skills-title'          => 'PHP',
                'opt-skills-measurement'    => '98%',
              ),
              array(
                'opt-skills-title'          => 'Technical Support',
                'opt-skills-measurement'    => '90%',
              ),
          )
        ),
      )
    ),

    //
    // Field: Languages Info & Group
    //

    array(
      'id'     => 'opt-languages',
      'type'   => 'fieldset',
      'title'  => 'Languages Area',
      'fields' => array(
          array(
            'id'      => 'opt-laguagestitle',
            'type'    => 'text',
            'title'   => 'Main Area Title',
            'default' => 'Languages',
          ),
        array(
          'id'            => 'opt-languages-group',
          'type'          => 'group',
          'title'         => __('Lanhuages Group Area', 'ibrahimportfolio'),
          'button_title'  => __('Add New languages', 'ibrahimportfolio'),
          'fields' => array(
            array(
              'id'        => 'opt-languages-title',
              'type'      => 'text',
              'title'     => __('Languges Title', 'ibrahimportfolio'),
            ),
            array(
              'id'        => 'opt-languages-measurement',
              'type'      => 'text',
              'title'     => __('Languges Measurement (In Percentage)', 'ibrahimportfolio'),
            ),
          ),
            'default' => array(
              array(
                'opt-languges-title'          => 'Bangla',
                'opt-languges-measurement'    => '100%',
              ),
              array(
                'opt-languges-title'          => 'English',
                'opt-languges-measurement'    => '90%',
              ),
              array(
                'opt-languges-title'          => 'Hindi',
                'opt-languges-measurement'    => '75%',
              ),
          )
        ),
      )
    ),
  
  )
));


//
// Field: fieldset Details
//

CSF::createSection( $prefix, array(
  'title'  => 'Details Section',
  'icon'   => 'far fa-clone',
  'fields' => array(

    array(
      'id'     => 'opt-working-details-fields',
      'type'   => 'fieldset',
      'title'  => 'Working Details',
      'fields' => array(
        array(
          'id'      => 'opt-working-count',
          'type'    => 'text',
          'title'   => 'Count',
        ),
        array(
          'id'      => 'opt-working-details',
          'type'    => 'text',
          'title'   => 'Details',
        ),
      ),
      'default' => array(
        'opt-working-count'          => '500',
        'opt-working-details'        => 'Hours Worked',
      )
    ),

    array(
      'id'     => 'opt-project-details-fields',
      'type'   => 'fieldset',
      'title'  => 'Project Details',
      'fields' => array(
        array(
          'id'      => 'opt-project-count',
          'type'    => 'text',
          'title'   => 'Count',
        ),
        array(
          'id'      => 'opt-project-details',
          'type'    => 'text',
          'title'   => 'Details',
        ),
      ),
      'default' => array(
        'opt-project-count'      => '50K',
        'opt-project-details'     => 'Project Finished',
      )
    ),

    array(
      'id'     => 'opt-client-details-fields',
      'type'   => 'fieldset',
      'title'  => 'Client Details',
      'fields' => array(
        array(
          'id'      => 'opt-client-count',
          'type'    => 'text',
          'title'   => 'Count',
        ),
        array(
          'id'      => 'opt-client-details',
          'type'    => 'text',
          'title'   => 'Details',
        ),
      ),
      'default' => array(
        'opt-client-count'      => '200K',
        'opt-client-details'     => 'Happy Clients',
      )
    ),

    array(
      'id'     => 'opt-sclient-details-fields',
      'type'   => 'fieldset',
      'title'  => 'Satisfied Clients Details',
      'fields' => array(
        array(
          'id'      => 'opt-sclient-count',
          'type'    => 'text',
          'title'   => 'Count',
        ),
        array(
          'id'      => 'opt-sclient-details',
          'type'    => 'text',
          'title'   => 'Details',
        ),
      ),
      'default' => array(
        'opt-sclient-count'      => '2K',
        'opt-sclient-details'     => 'Project Loved',
      )
    ),

  )
  ));

//
// Field: fieldset Services
//

CSF::createSection( $prefix, array(
  'title'  => 'Services Section',
  'icon'   => 'far fa-clone',
  'fields' => array(

    array(
      'id'     => 'opt-services-heading',
      'type'   => 'fieldset',
      'title'  => 'Services Heading',
      'fields' => array(
        array(
          'id'      => 'opt-services-heading1',
          'type'    => 'text',
        ),
        array(
          'id'      => 'opt-services-heading2',
          'type'    => 'text',
        ),
      ),
      'default' => array(
        'opt-services-heading1'        => 'My',
        'opt-services-heading2'        => 'Services',
      )
    ),


    //
    // Field: Services Area group Details
    //

    array(
      'id'            => 'opt-services-group',
      'type'          => 'group',
      'title'         => __('Services Group Area', 'ibrahimportfolio'),
      'button_title'  => __('Add New Services', 'ibrahimportfolio'),
      'fields' => array(
        array(
          'id'        => 'opt-services-icon-class',
          'type'      => 'text',
          'title'     => __('Services Icon Class', 'ibrahimportfolio'),
        ),
        array(
          'id'        => 'opt-services-title',
          'type'      => 'text',
          'title'     => __('Services Title', 'ibrahimportfolio'),
        ),
        array(
          'id'        => 'opt-services-details',
          'type'      => 'textarea',
          'title'     => __('Services Details', 'ibrahimportfolio'),
        ),
      ),
        'default' => array(
          array(
            'opt-services-icon-class'     => 'ti-vector text-danger',
            'opt-services-title'          => 'Ullam',
            'opt-services-details'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.',
          ),
          array(
            'opt-services-icon-class'     => 'ti-write text-danger',
            'opt-services-title'          => 'Asperiores',
            'opt-services-details'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.',
          ),
          array(
            'opt-services-icon-class'     => 'ti-package text-danger',
            'opt-services-title'          => 'Tempora',
            'opt-services-details'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.',
          ),
          array(
            'opt-services-icon-class'     => 'ti-map-alt text-danger',
            'opt-services-title'          => 'Provident',
            'opt-services-details'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.',
          ),
          array(
            'opt-services-icon-class'     => 'ti-bar-chart text-danger',
            'opt-services-title'          => 'Consectetur',
            'opt-services-details'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.',
          ),
          array(
            'opt-services-icon-class'     => 'ti-support text-danger',
            'opt-services-title'          => 'Veritatis',
            'opt-services-details'        => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.',
          ),
      )
    ),
  
  )
  ));



//
// Field: fieldset Footer
//


CSF::createSection( $prefix, array(
  'title'  => 'Footer Options',
  'icon'   => 'far fa-clone',
  'fields' => array(

    array(
      'id'     => 'opt-footer-copyright',
      'type'   => 'fieldset',
      'title'  => 'Site Title',
      'fields' => array(
        array(
          'id'      => 'opt-sitename',
          'type'    => 'text',
          'title'   => 'Site Name',
        ),
        array(
          'id'      => 'opt-year',
          'type'    => 'text',
          'title'   => 'Year',
        ),
        array(
          'id'      => 'opt-url',
          'type'    => 'text',
          'title'   => 'Site URL',
        ),
      ),
      'default' => array(
        'opt-sitename'    => 'Medinova',
        'opt-year'        => '2022',
        'opt-url'         => '#',
      )
    ),

    array(
      'id'     => 'opt-footer-team',
      'type'   => 'fieldset',
      'title'  => 'Developer Team',
      'fields' => array(
        array(
          'id'      => 'opt-devteamname',
          'type'    => 'text',
          'title'   => 'Developer Team Name',
        ),
        array(
          'id'      => 'opt-devteamurl',
          'type'    => 'text',
          'title'   => 'Developer Team Site URL',
        ),
      ),
      'default' => array(
        'opt-devteamname'    => 'Team Medinova',
        'opt-devteamurl'     => '#',
      )
    ),

  )
  ));

//
// Dependencies
//
CSF::createSection( $prefix, array(
  'title'       => 'Dependencies',
  'icon'        => 'fas fa-code-branch',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/faq?id=how-to-use-dependency" target="_blank">How to use dependencies</a>',
  'fields'      => array(

    array(
      'type'    => 'subheading',
      'content' => 'Basic Dependencies',
    ),

    //
    // Dependency example 1
    array(
      'id'         => 'opt-depend-switcher',
      'type'       => 'switcher',
      'title'      => 'If switched to (ON)',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Switched to (ON).',
      'dependency' => array( 'opt-depend-switcher', '==', 'true' ),
    ),

    //
    // Dependency example 2
    array(
      'id'         => 'opt-depend-text',
      'type'       => 'text',
      'title'      => 'If typed something to field',
    ),

    array(
      'type'        => 'notice',
      'style'       => 'success',
      'content'     => 'Success: You typed something.',
      'dependency'  => array( 'opt-depend-text', '!=', '' ),
    ),

    //
    // Dependency example 3
    array(
      'id'          => 'opt-depend-select',
      'type'        => 'select',
      'title'       => 'If selected to (Blue) or (Black)',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Blue) or (Black).',
      'dependency' => array( 'opt-depend-select', 'any', 'blue,black' ),
    ),

    //
    // Dependency example 4
    array(
      'id'      => 'opt-depend-radio',
      'type'    => 'radio',
      'title'   => 'If selected to (Yes, Please)',
      'inline'  => true,
      'options' => array(
        'no'    => 'No, Thanks',
        'yes'   => 'Yes, Please',
        'any'   => 'I am not sure!',
      ),
      'default' => 'no'
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Yes, Please).',
      'dependency' => array( 'opt-depend-radio', '==', 'yes' ),
    ),

    //
    // Dependency example 5
    array(
      'id'       => 'opt-depend-checkbox',
      'type'     => 'checkbox',
      'title'    => 'If selected to (Green) or (Black)',
      'inline'   => true,
      'options'  => array(
        'blue'   => 'Blue',
        'yellow' => 'Yellow',
        'green'  => 'Green',
        'black'  => 'Black',
        'white'  => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Green).',
      'dependency' => array( 'opt-depend-checkbox', 'any', 'green,black' ),
    ),

    //
    // Dependency example 6
    array(
      'id'       => 'opt-depend-image-select',
      'type'     => 'image_select',
      'title'    => 'If selected to (Blue) box',
      'options'  => array(
        'green'  => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'    => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'   => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'   => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default'  => 'green',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Blue) box.',
      'dependency' => array( 'opt-depend-image-select', '==', 'blue' ),
    ),

    //
    // Dependency example 6
    array(
      'id'       => 'opt-depend-image-select-any',
      'type'     => 'image_select',
      'title'    => 'If selected to (Red) or (Blue) box',
      'options'  => array(
        'green'  => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'    => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'   => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'   => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default'  => 'green',
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Selected to (Red) or (Blue) box.',
      'dependency' => array( 'opt-depend-image-select-any', 'any', 'red,blue' ),
    ),

    array(
      'type'    => 'subheading',
      'content' => 'Visible Dependencies',
    ),

    //
    // Dependency example 7
    array(
      'id'          => 'opt-depend-visible-switcher',
      'type'        => 'switcher',
      'title'       => 'Switched to (ON)',
      'label'       => 'Below fields are visibling instead of hiding. Switched to (ON) for use them.',
    ),

    array(
      'id'          => 'opt-depend-visible-text',
      'type'        => 'text',
      'title'       => 'Visible Text',
      'dependency'  => array( 'opt-depend-visible-switcher', '==', 'true', '', 'visible' ),
    ),

    array(
      'id'          => 'opt-depend-visible-select',
      'type'        => 'select',
      'title'       => 'Visible Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
      'dependency'  => array( 'opt-depend-visible-switcher', '==', 'true', '', 'visible' ),
    ),

    //
    // Dependency example 8
    array(
      'type'    => 'subheading',
      'content' => 'Nested Dependencies',
    ),

    array(
      'id'    => 'opt-depend-switcher-1',
      'type'  => 'switcher',
      'title' => 'If switched to (ON) --->',
    ),

    array(
      'id'          => 'opt-depend-select-1',
      'type'        => 'select',
      'title'       => '---> and selected to (Blue)',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Success: Switched to (ON) and selected to (Blue).',
      'dependency' => array( 'opt-depend-switcher-1|opt-depend-select-1', '==|==', 'true|blue' ),
    ),

    //
    // Dependency example 9
    array(
      'type'    => 'subheading',
      'content' => 'Another Nested Dependencies',
    ),

    array(
      'id'          => 'opt-nested-select-1',
      'type'        => 'select',
      'title'       => 'If selected to (Black) or (White) --->',
      'placeholder' => 'Select a color',
      'options'     => array(
        'blue'      => 'Blue',
        'yellow'    => 'Yellow',
        'green'     => 'Green',
        'black'     => 'Black',
        'white'     => 'White',
      ),
    ),

    array(
      'id'          => 'opt-nested-select-2',
      'type'        => 'select',
      'title'       => '---> and selected to (Large) --->',
      'placeholder' => 'Select a size',
      'options'     => array(
        'small'     => 'Small',
        'middle'    => 'Middle',
        'large'     => 'Large',
        'xlage'     => 'XLarge',
        'xxlage'    => 'XXLarge',
      ),
      'dependency'  => array( 'opt-nested-select-1', 'any', 'black,white' ),
    ),

    array(
      'id'          => 'opt-nested-select-3',
      'type'        => 'select',
      'title'       => '---> and selected to (Hello)',
      'placeholder' => 'Select a word',
      'options'     => array(
        'hello'     => 'Hello',
        'world'     => 'World',
      ),
      'dependency'  => array( 'opt-nested-select-1|opt-nested-select-2', 'any|==', 'black,white|large' ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Congratulations, You are here now!',
      'dependency' => array( 'opt-nested-select-1|opt-nested-select-2|opt-nested-select-3', 'any|==|==', 'black,white|large|hello' ),
    ),

    //
    // Dependency example 10
    array(
      'type'    => 'subheading',
      'content' => 'Contains Dependencies',
    ),

    array(
      'id'       => 'opt-depend-checkbox-1',
      'type'     => 'checkbox',
      'title'    => 'Select a color or more.',
      'inline'   => true,
      'options'  => array(
        'blue'   => 'Blue',
        'yellow' => 'Yellow',
        'green'  => 'Green',
      ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'info',
      'content'    => 'Selected (blue) color.',
      'dependency' => array( 'opt-depend-checkbox-1', 'contains', 'blue' ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'warning',
      'content'    => 'Selected (yellow) color.',
      'dependency' => array( 'opt-depend-checkbox-1', 'contains', 'yellow' ),
    ),

    array(
      'type'       => 'notice',
      'style'      => 'success',
      'content'    => 'Selected (green) color.',
      'dependency' => array( 'opt-depend-checkbox-1', 'contains', 'green' ),
    ),

  )
) );

//
// Sanitize
//
CSF::createSection( $prefix, array(
  'title'       => 'Sanitize',
  'icon'        => 'fas fa-redo',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/faq?id=how-to-use-sanitize" target="_blank">How to use sanitize</a>',
  'fields'      => array(

    array(
      'id'       => 'opt-sanitize-1',
      'type'     => 'text',
      'title'    => 'Sanitize (a) to (b)',
      'subtitle' => 'Replacing letter (a) to letter (b). for eg. apple to bpple',
      'sanitize' => 'csf_sanitize_replace_a_to_b'
    ),

    array(
      'id'       => 'opt-sanitize-2',
      'type'     => 'text',
      'title'    => 'Sanitize Title',
      'subtitle' => 'Converting (space) to (-) and (uppercase) letters to (lowercase) letters. for eg. Hello World to hello-world',
      'sanitize' => 'csf_sanitize_title'
    ),

  )
) );

//
// Field: backup
//
CSF::createSection( $prefix, array(
  'title'       => 'Backup',
  'icon'        => 'fas fa-shield-alt',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=backup" target="_blank">Field: backup</a>',
  'fields'      => array(

    array(
      'type' => 'backup',
    ),

  )
) );
