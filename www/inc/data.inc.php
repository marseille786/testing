<?php

define('PATH_CSS', '/css/');
define('PATH_JS', '/js/');

$menu = array(
    'languages' => array(
        'category' => 'Иностранный',
        'href' => '/',
        'sub_menu' => array(
            array('page' => 'Английский', 'sub_link' => '/'),
            array('page' => 'Английский (Петров)', 'sub_link' => 'index.php?category=languages&page=ln_en_petrov'),
            array('page' => 'Французский', 'sub_link' => 'index.php?category=languages&page=ln_fr'),
            array('page' => 'Французский (Петров)', 'sub_link' => 'index.php?category=languages&page=ln_fr_petrov')
        )
    ),
    'programing' => array(
        'category' => 'Программирование',
        'href' => 'index.php?category=programing&page=pr_javascript',
        'sub_menu' => array(
            array('page' => 'JavaScript', 'sub_link' => 'index.php?category=programing&page=pr_javascript'),
            array('page' => 'PHP', 'sub_link' => 'index.php?category=programing&page=pr_php'),
            array('page' => 'Frontend', 'sub_link' => 'index.php?category=programing&page=pr_frontend'),
            array('page' => 'CMS', 'sub_link' => 'index.php?category=programing&page=pr_cms'),
            array('page' => 'HTML', 'sub_link' => 'index.php?category=programing&page=pr_html')
        )
    ),
    'tanks' => array(
        'category' => 'Танки',
        'href' => 'index.php?category=tanks&page=tk_ussr',
        'sub_menu' => array(
            array('page' => 'СССР', 'sub_link' => 'index.php?category=tanks&page=tk_ussr')
        )
    ),
    'chess' => array(
        'category' => 'Шахматы',
        'href' => 'index.php?category=chess&page=ch_italian',
        'sub_menu' => array(
            array('page' => 'JavaScript', 'sub_link' => 'index.php?category=chess&page=ch_italian')
        )
    )
);

$list_response = array(
    'ln_en' => array(
        array('text' => 'Правильные глаголы', 'value' => 'regular_verbs'),
        array('text' => 'Неправильные глаголы', 'value' => 'irregular_verbs'),
        array('text' => 'Местоимения', 'value' => 'pronouns'),
        array('text' => 'Предоги и союзы', 'value' => 'excuse'),
        array('text' => 'Вопросительные слова', 'value' => 'questions'),
        array('text' => 'Указательные слова', 'value' => 'demonstrativeWords'),
        array('text' => 'Этикет', 'value' => 'etiquette'),
        array('text' => 'Слова-паразиты', 'value' => 'wordWeeds'),
        array('text' => 'Другие слова', 'value' => 'otherWords')
    ),
    'ln_en_petrov' => array(
        array('text' => 'Правильные глаголы', 'value' => 'regular_verbs_petrov'),
        array('text' => 'Неправильные глаголы', 'value' => 'irregular_verbs_petrov'),
        array('text' => 'Упражнения 1', 'value' => 'exsercice_1_petrov'),
        array('text' => 'Упражнения 2', 'value' => 'en_2_petrov'),
        array('text' => 'Упражнения 3', 'value' => 'en_3_petrov'),
        array('text' => 'Упражнения 4', 'value' => 'en_4_petrov'),
        array('text' => 'Упражнения 5', 'value' => 'en_5_petrov'),
        array('text' => 'Упражнения 6', 'value' => 'en_6_petrov'),
        array('text' => 'Упражнения 7', 'value' => 'en_7_petrov'),
        array('text' => 'tower 1', 'value' => 'tower1'),
        array('text' => 'tower Hello', 'value' => 'tower_hello'),
        array('text' => 'tower 1_3 (Вещи)', 'value' => 'tower1_3'),
        array('text' => 'tower 1_4_5 (Дом)', 'value' => 'tower1_4_5')
    ),
//    'ln_fr' => array(),
    'ln_fr_petrov' => array(
        array('text' => 'Урок 1', 'value' => 'fr_1_petrov')
    ),
    'pr_javascript' => array(
        array('text' => 'JavaScript (Уровень 1)', 'value' => 'js_1'),
        array('text' => 'JavaScript (Уровень 2)', 'value' => 'js_2'),
        array('text' => 'Ajax', 'value' => 'ajax'),
        array('text' => 'Underscore', 'value' => 'undescore')
    ),
    'pr_php' => array(
        array('text' => 'PHP (Уровень 1)', 'value' => 'php_1'),
        array('text' => 'PHP (Уровень 2)', 'value' => 'php_2')
    ),
    'pr_frontend' => array(
        array('text' => 'Bootstrap', 'value' => 'bt_1')
    ),
    'pr_cms' => array(
        array('text' => 'WordPress', 'value' => 'wp_1')
    ),
    'pr_html' => array(
        array('text' => 'HTML5 API', 'value' => 'api')
    )
);