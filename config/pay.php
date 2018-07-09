<?php

return [
    'alipay' => [
        'app_id'         => '2016091900544559',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuM4Lvwz5CXdjLseLaljJCEoAQE/vvYcvuKk7N59+6bS+NJZeJvo1Rq5/abZhQAMVHEXCWWAtljuKdEJu8nazogl7Lvt0M2s3JJAkjk8x5nZEmIybrDa1JiBa5pSN8DoPLVpXrKf8FmzXIcxYhjnQk66feYM7McU+L4gVyqM8PbVeTKFa9iz2xsDr4sZnaha/I3E5ZZidvfOmI+UFaKcxNExZSoOgM/XqwVyjhiGBo1L9z2OXIqRe8/0qrql0UvyUi6ghtDD0J6nSwhWlZgfwaC9lwC85xJ3PCjHTbMtXUS13c8wtPYkODyNEJfYVhFUzHelur3Y6BP4K/ea3In6YyQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEApSbiBhM/v27yLyUIWjmdIqkAQYUOUxuyyq8UTAFQ2td5RU0H5gioPChllDo+JflGVtZbAhEofPN8iMBejW5i+XWOgkqlSTzXE/dfLHgycr3Y0woyFV/tbDe+ZCDuXkQEhXmox3vYnci5a7iwkSTp8U7GJ0A45UhaDlaq5/ViU9AnSg7kDrrTUUh8OJjuCteB/z1CgRp/V1mJA2yg+Hr0RaPxKJW5RqJ27c9uW0IiMkhyfn6bU59U9f+pPBaP0sUy1VdlUYrfzOpRpviNxMCE5ZN/CM+rcFiWDJ1y86tSak+NsECzDZxxLkbWRbYYn02ptWSYTqX5NNtmHhYYiHdaYwIDAQABAoIBAE1204Wt+bS9QXPDlwtbAs2DH8+brYBl+ZMAVDDiXR6I+yT6YL4RSXgOKrdAKm59YfTRTpbFnYweWUd7k94a7Om9rj6G7MhRdUC0QzwElQUk71Lt8Vf9Ssv7yZ4FpEkq9kP1MKmA+bXotLBGTOuHuQOqw18dzJIfQb6AAGIUwy40L5L80p3DnYMH1c+h9AtKxg+cX9GztXVkPQdlnd3tnJvaKJxb1VZg4p2RzxOflIz2k6vhPN0TJxy9rwk3TWZUWcHaKNAklAStDYn+/PQrH2EZYMTWiIyPLPZEI4k9U6OXuGsfis7Ud/7MsHuPuRDQXhlLG0rJoVn4q5UigY3rU0ECgYEAz4UWr0SGBb1GTAbeTp0TtK1EmjzXH4Q6Vukg9te+vg+S3u9jhJ2yOwidxJSGCoAApy8mCvtZYjfzaX2Kpak+SIuyyvwooqGfkFkjbcO4x1A8ZZyy61/yc+o/b73R32aB/CmDJBOYRfHfAczN4vbzB4h8jFFDH+GlP+k4eo5bzCkCgYEAy7vwVNBqvZmPdLiCh1WGGPwByhgQA8aEE5egENTbCYcw2L1oBfBGANA0QZDH8zczgInEWqkWT526mqCuCY++8dTAy66luhxTf2NheckzBCK1Y5bBzEOAVkFFcmSlJIZj1lMTDayjrMH6xgvX0Kb58FgRe00xclQpJQ8SqP/lg6sCgYBUZ61yXEymyPVuttx03S7GrjLZCSX2i7Gu5+Oggt/yLiNuya+QoRN9L2P8MOzUGHwrg+HVVaZlbJx0q7tY5h2PJEL0jNt6SoK8E4V1f8YIS3pFWhbr5XqX6w8iQ/K5CtiT186fPdkRme86rDKRvh/bUIhYCjVjIkQ0Woe+UWjFAQKBgCvtyyVOhyV4nfEJ88MgkriCZhRgWdumi0X6NJ5Mdyo3xzWEqZBWPZHhUtMsV6C+r1Ew43C08sWZ+elraftPzlkwiZ2he8SEZRCbqiHrWx+yKDBgCktz5pEyo7nFr8IPZCmLYhlZtzUB4oOffBpWVqAXLTXL8DR5pyGBfYGJI8DfAoGBAKuRg9FLUNIF++wrWSmUcLExat+zI/7uuG0NpUfxALYhZCtdmlySPA5s4KY/su57J84qwhNCgUZkt3NJVtfm8LYUJRc8yWomdUsCi1lokexYoPQBlK0lnLaD6VzYcH+GeDA+U+iW7CaXiiKk0rE0lJLLFpPykG5+ReuRCSFd1ux8',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];