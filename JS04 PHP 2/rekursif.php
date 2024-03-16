<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama"=> "Berita",
        "SubMenu" => [
            [
                "nama" => "Wisata",
                "SubMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama"=> "Gunung"
                    ]
                ]
            ],
            [
                "nama"=> "Kuliner"
            ],
            [
                "nama"=> "Hiburan"
            ]
        ]
    ],
    [
        "nama"=> "Tentang"
    ],
    [
        "nama"=> "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['SubMenu'])) {
            tampilkanMenuBertingkat($item['SubMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);

?>