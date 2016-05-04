<?php

return [

   'static_all_site' => [
       'images' => ['logo'],
       'stringfields' => ['phone','mob_phone','map_link','copy']
   ],
    'slider_block' => [
        'groups' => [
            'slider' => [
                'images' => ['slider'],
                'stringfields' => ['slide_name','slide_text']
            ]
        ]
    ],
    'static_company' => [
        'title' => 'CPA',
        'textfields' => ['about_company','say_text'],
        'stringfields' => ['people_name','iqsa'],
        'images'       => ['people_photo','iqsa_logo']
    ],

    'static_service' => [
        'images' => ['head'],
        'title' => '',
        'textfields' => ['about_services','about_service_page']
    ],
    'static_facts' => [
        'groups' => [
            'fact' => [
                'images' => ['fact_pict'],
                'stringfields' => ['fact_title']
            ]
        ]
    ],
    'static_clients' => [
        'groups' => [
            'client' => [
                'images' => ['client_pict'],
                'stringfields' => ['client_link']
            ]
        ]
    ],
    'static_study' => [
        'title' => 'study',
        'images' => ['head'],
        'textfields' => ['about_study']
    ],
    'safety_rules' => [
        'title' => 'safety',
        'textfields' => ['rules_text']
    ],


//    dom elements
    'dom_news' => [
        'title' => 'news',
        'groups' => [
            'news'=> [
                'stringfields' => ['news_title','news_date','agregator'],
                'textfields'   => ['about_news'],
            ]
        ]
    ],
    'dom_service' => [
        'groups'=> [
            'service' => [
                'stringfields' => ['service_name','name'],
                'textfields'   => ['about_service']
            ],
            'service_image' => [
                'owner' => 'service',
                'images' => ['serv_pict']
            ]
        ]
    ],
    'dom_all_images' => [
        'groups' => [
            'images_set' => [
                'images'    => ['text_pict']
            ]
        ]
    ],
    'dom_study' => [
        'groups' => [
            'course'=> [
                'stringfields' => ['course_title','cost_course', 'name'],
                'textfields' => ['about_course'],
            ],
            'docs' => [
                'owner' => 'course',
                'stringfields'=> ['docs_name']
            ],
            'course_image'=> [
                'owner' => 'course',
                'images' => ['course_pict']
            ]
        ]
    ]


];
