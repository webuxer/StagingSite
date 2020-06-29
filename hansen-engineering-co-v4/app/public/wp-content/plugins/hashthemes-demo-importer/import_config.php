<?php

/*
 * Config file with each demo data
 */

$square = array(
    'main' => array(
        'name' => 'Square',
        'external_url' => 'https://hashthemes.com/import-files/square/main.zip',
        'image' => 'https://i0.wp.com/themes.svn.wordpress.org/square/1.6.9/screenshot.png',
        'preview_url' => 'https://demo.hashthemes.com/square',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home-page',
        'blog_slug' => 'blog'
    )
);

$squarepress = array(
    'main' => array(
        'name' => 'SquarePress',
        'external_url' => 'https://hashthemes.com/import-files/squarepress/main.zip',
        'image' => 'https://i0.wp.com/themes.svn.wordpress.org/squarepress/1.0.6/screenshot.png',
        'preview_url' => 'https://demo.hashthemes.com/squarepress',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home-page',
        'blog_slug' => 'blog'
    )
);

$total = array(
    'main' => array(
        'name' => 'Total',
        'external_url' => 'https://hashthemes.com/import-files/total/main.zip',
        'image' => 'https://i0.wp.com/themes.svn.wordpress.org/total/1.2.39/screenshot.png',
        'preview_url' => 'https://demo.hashthemes.com/total',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home',
        'blog_slug' => 'blog'
    )
);

$totally = array(
    'main' => array(
        'name' => 'Totally',
        'external_url' => 'https://hashthemes.com/import-files/totally/main.zip',
        'image' => 'https://i0.wp.com/themes.svn.wordpress.org/totally/1.1.2/screenshot.png',
        'preview_url' => 'https://demo.hashthemes.com/totally',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home-page',
        'blog_slug' => 'blog'
    )
);

$hashone = array(
    'main' => array(
        'name' => 'HashOne',
        'external_url' => 'https://hashthemes.com/import-files/hashone/main.zip',
        'image' => 'https://i0.wp.com/themes.svn.wordpress.org/hashone/1.2.7/screenshot.png',
        'preview_url' => 'https://demo.hashthemes.com/hashone',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home-page',
        'blog_slug' => 'blog'
    )
);

$viral = array(
    'main' => array(
        'name' => 'Viral',
        'external_url' => 'https://hashthemes.com/import-files/viral/main.zip',
        'image' => 'https://i0.wp.com/themes.svn.wordpress.org/viral/1.4.2/screenshot.png',
        'preview_url' => 'https://demo.hashthemes.com/viral',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home-page',
        'blog_slug' => 'blog'
    )
);

$viral_news = array(
    'demo1' => array(
        'name' => 'Viral News - Demo One',
        'external_url' => 'https://hashthemes.com/import-files/viral-news/demo1.zip',
        'image' => 'https://hashthemes.com/import-files/viral-news/screen/demo1-screenshot.jpg',
        'preview_url' => 'https://demo.hashthemes.com/viral-news/demo1',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home',
        'blog_slug' => 'blog'
    ),
    'demo2' => array(
        'name' => 'Viral News - Demo Two',
        'external_url' => 'https://hashthemes.com/import-files/viral-news/demo2.zip',
        'image' => 'https://hashthemes.com/import-files/viral-news/screen/demo2-screenshot.jpg',
        'preview_url' => 'https://demo.hashthemes.com/viral-news/demo2',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home',
        'blog_slug' => 'blog'
    ),
    'demo3' => array(
        'name' => 'Viral News - Demo Three',
        'external_url' => 'https://hashthemes.com/import-files/viral-news/demo3.zip',
        'image' => 'https://hashthemes.com/import-files/viral-news/screen/demo3-screenshot.jpg',
        'preview_url' => 'https://demo.hashthemes.com/viral-news/demo3',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home',
        'blog_slug' => 'blog'
    ),
    'demo4' => array(
        'name' => 'Viral News - Demo Four',
        'external_url' => 'https://hashthemes.com/import-files/viral-news/demo4.zip',
        'image' => 'https://hashthemes.com/import-files/viral-news/screen/demo4-screenshot.jpg',
        'preview_url' => 'https://demo.hashthemes.com/viral-news/demo4',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home',
        'blog_slug' => 'blog'
    ),
    'demo5' => array(
        'name' => 'Viral News - Demo Five',
        'external_url' => 'https://hashthemes.com/import-files/viral-news/demo5.zip',
        'image' => 'https://hashthemes.com/import-files/viral-news/screen/demo5-screenshot.jpg',
        'preview_url' => 'https://demo.hashthemes.com/viral-news/demo5',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        ),
        'home_slug' => 'home',
        'blog_slug' => 'blog'
    ),
    'demo6' => array(
        'name' => 'Viral News - Demo Six',
        'external_url' => 'https://hashthemes.com/import-files/viral-news/demo6.zip',
        'image' => 'https://hashthemes.com/import-files/viral-news/screen/demo6-screenshot.jpg',
        'preview_url' => 'https://demo.hashthemes.com/viral-news/demo6',
        'menu_array' => array(
            'primary' => 'Primary Menu'
        )
    )
);

$active_theme = str_replace('-', '_', get_option('stylesheet'));

if (isset($$active_theme)) {
    $demo_array = $$active_theme;
} else {
    $demo_array = array();
}

return apply_filters('hdi_import_files', $demo_array);
