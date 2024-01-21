<?php
function ocdi_import_files() {
    return [
      [
        'import_file_name'             => 'Demo Import',
        // 'categories'                   => [ 'Category 1', 'Category 2' ],
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/content.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/widget.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/customizer.dat',

        // 'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
        // 'preview_url'                  => trailingslashit( get_template_directory() ) .'screenshot.png',
      ],
    ];
  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );