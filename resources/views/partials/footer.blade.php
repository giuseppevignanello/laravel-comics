<?php
$footerMenuItems = [
    [
        'title' => "DC COMIC",
        'items' => [
            [
                "title" => "Characthers",
            ],
            [
                "title" => "Comics",
            ],
            [
                " title" => "Movies",
            ],
            [
                "title" => "TV",
            ],
            [
                "title" => "Games",
            ],
            [
                "title" => "Video",
            ],
            [
                "title" => "News",
            ]
        ]
    ],
    [
        "title" => "DC",
        "items" => [
            [
                "title" => "Terms of Use",
            ],
            [
                "title" => "Privacy policy(New)",
            ],
            [
                "title" => "Ad Choices",
            ],
            [
                "title" => "Advertising",
            ],
            [
                "title" => "Jobs",
            ],
            [
                "title" => "Subscription",
            ],
            [
                "title" => "Talent Workshops",
            ],
            [
                "title" => "CPSC Certificates",
            ],
            [
                "title" => "Shop Help",
            ],
            [
                "title" => "Contact Us",
            ]
        ]
    ],
    [
        "title" => "SITES",
        "items" => [
            [
                "title" => "DC",
            ],
            [
                "title" => "MAD MAGAZINE",
            ],
            [
                "title" => "DC Kids",
            ],
            [
                "title" => "DC Universe",
            ],
            [
                "title" => "DC Power VISA",
            ]
        ]
    ],
    [
        "title" => "Shop",
        "items" => [
            [
                "title" => "Shop DC",
            ],
            [
                "title" => "Shop DC Collectibles",
            ]

        ]
    ],
]



?>

<div class="top_footer py-5 text-white">
    <div class="container d-flex">
        <div class="menu d-flex flex-wrap row-cols-3">

            <ul>
                @foreach ($footerMenuItems as $item)
                <li>
                    <h5 class="title">{{$item['title']}}</h5>
                </li>
                <li>
                </li>
                @endforeach



            </ul>


        </div>
    </div>
</div>