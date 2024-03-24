<?php
// function tampilkanHaloDunia()
// {
//     echo "Halo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();




// function tampilAngka(int $jumlah, int $indeks = 1)
// {
//     echo "Perulangan ke-{$indeks} <br>";

//     if ($indeks < $jumlah) {
//         tampilAngka($jumlah, $indeks + 1);
//     }
// }

// tampilAngka(20);




$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],

];

function tampilMenuBertingkat(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
        if (isset($item['subMenu'])) {
            tampilMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}

tampilMenuBertingkat($menu);
?>