<?php
namespace app\model;
class ProductModel
{
    const dataProduct=[
        ["id"=>1,
        "image"=>"https://dummyimage.com/450x300/dee2e6/6c757d.jpg",
        "name"=>"Fancy Product",
        "price"=>1000,
        "sale_price"=>800,
        "stare"=>5,
        "sale"=>1
        ],
        ["id"=>2,
        "image"=>"https://dummyimage.com/450x300/dee2e6/6c757d.jpg",
        "name"=>"Special Item",
        "price"=>5000,
        "sale_price"=>200,
        "stare"=>7,
        "sale"=>1

        ],
        ["id"=>3,
        "image"=>"https://dummyimage.com/450x300/dee2e6/6c757d.jpg",
        "name"=>"Special Item",
        "price"=>5000,
        "sale_price"=>null,
        "stare"=>3,
        "sale"=>0

        ],
        ["id"=>4,
        "image"=>"https://dummyimage.com/450x300/dee2e6/6c757d.jpg",
        "name"=>"Popular Item",
        "price"=>5000,
        "sale_price"=>null,
        "stare"=>5,
        "sale"=>0
            
        ],
        ["id"=>5,
        "image"=>"https://dummyimage.com/450x300/dee2e6/6c757d.jpg",
        "name"=>"Sale Item",
        "price"=>1000,
        "sale_price"=>null,
        "stare"=>4,
        "sale"=>0

        ],
        ["id"=>6,
        "image"=>"https://dummyimage.com/450x300/dee2e6/6c757d.jpg",
        "name"=>"Sale Item",
        "price"=>1000,
        "sale_price"=>null,
        "stare"=>4,
        "sale"=>0

        ],
        ["id"=>7,
        "image"=>"https://dummyimage.com/450x300/dee2e6/6c757d.jpg",
        "name"=>"Sale Item",
        "price"=>1000,
        "sale_price"=>null,
        "stare"=>5,
        "sale"=>0

        ],
        ["id"=>8,
        "image"=>"https://dummyimage.com/450x300/dee2e6/6c757d.jpg",
        "name"=>"Sale Item",
        "price"=>1000,
        "sale_price"=>100,
        "stare"=>1,
        "sale"=>1

        ]
    ];
    public function getallDataProduct(){
        return self::dataProduct;
    }
}