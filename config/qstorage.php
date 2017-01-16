<?php

return [
//======================================================================================================================
//-- Блоки использующиеся на всем сайте --
//======================================================================================================================
    'static_all_site'   => [
        'images'       => ['logo'],
        'stringfields' => ['phone', 'mob_phone', 'map_link', 'copy', 'slog']
    ],
//======================================================================================================================
//-- Главная страница --
//======================================================================================================================
    'static_index_page' => [
        'images'       => ['background'],
        'stringfields' => ['seo_title', 'seo_description', 'seo_keywords', 'seo_text', 'page_name'],
        'textfields'   => ['page_content']

    ],
    'static_facts'      => [
        'groups' => [
            'fact' => [
                'images'       => ['fact_pict'],
                'stringfields' => ['fact_title']
            ]
        ]
    ],
//======================================================================================================================
//-- Страницы обучения --
//======================================================================================================================
    'dom_study'         => [
        'images'       => ['background', 'index_preview'],
        'stringfields' => ['seo_title', 'seo_description', 'seo_keywords', 'seo_text', 'page_name', 'preview_text'],
        'textfields'   => ['page_content','preview_content'],
        'groups'       => [
            'course'       => [
                'stringfields' => ['seo_title', 'seo_description', 'seo_keywords', 'seo_text', 'page_name', 'preview_text','cost'],
                'textfields'   => ['page_content','preview_content'],
                'images'       => ['background', 'preview'],
            ],
            'course_image' => [
                'owner'  => 'course',
                'images' => ['course_pict']
            ]
        ]
    ],
//======================================================================================================================
//-- Страницы услуг --
//======================================================================================================================
    'dom_service'         => [
        'images'       => ['background', 'index_preview'],
        'stringfields' => ['seo_title', 'seo_description', 'seo_keywords', 'seo_text', 'page_name', 'preview_text'],
        'textfields'   => ['page_content','preview_content'],
        'groups'       => [
            'service'       => [
                'stringfields' => ['seo_title', 'seo_description', 'seo_keywords', 'seo_text', 'page_name', 'preview_text','cost'],
                'textfields'   => ['page_content','preview_content'],
                'images'       => ['background', 'preview'],
            ],
            'service_image' => [
                'owner'  => 'service',
                'images' => ['service_pict']
            ]
        ]
    ],
//======================================================================================================================
//-- Экипировка --
//======================================================================================================================
    'equipment'=>[
        'images' => ['index_preview'],
        'stringfields' => ['preview_text','link'],
        'textfields'   => ['preview_content']
    ],
//======================================================================================================================
//-- Новости --
//======================================================================================================================
    'dom_news'          => [
        'title'  => 'news',
        'images' => ['head'],
        'groups' => [
            'news' => [
                'stringfields' => ['link', 'news_title', 'news_date', 'agregator'],
                'textfields'   => ['about_news'],
            ]
        ]
    ],
//======================================================================================================================
//-- Служебные блоки --
//======================================================================================================================
    'dom_all_images'    => [
        'groups' => [
            'images_set' => [
                'images' => ['text_pict']
            ]
        ]
    ],
//======================================================================================================================
//-- Контакты --
//======================================================================================================================

    'contacts' => [
        'stringfields' => ['seo_title', 'seo_description', 'seo_keywords', 'seo_text', 'page_name', 'adress'],
        'images'       => ['background']
    ],
//======================================================================================================================
//-- О компании --
//======================================================================================================================
    'about' => [
        'stringfields' => ['seo_title', 'seo_description', 'seo_keywords', 'seo_text', 'page_name'],
        'images'       => ['background'],
        'textfields'   => ['page_content']
    ],
//======================================================================================================================
//-- Формы обратной связи --
//======================================================================================================================
    'fidback'         => [
        'stringfields' => ['mail_rec', 'mail_username', 'site_name'],
        'groups'       => [
            'join'        => [
                'stringfields' => ['fio', 'email', 'phone', 'program'],
                'bools'        => ['mailed']
            ],
            'ask'         => [
                'stringfields' => ['fio', 'email', 'question'],
                'bools'        => ['mailed']
            ],
            'buy_service' => [
                'stringfields' => ['fio', 'email', 'phone', 'service'],
                'bools'        => ['mailed']
            ]
        ]
    ]


];
