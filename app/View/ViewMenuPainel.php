<?php

$menuPainel = [
    "item0" => [
                "info"=>"Operações",
                "class"=>"",
                "link"=>"/"
                ],
    "item1" => [
                "info"=>"Pacientes",
                "class"=>"fa-user",
                "link"=>"/pacientes"
                ],
    "item2" => [
                "info"=>"Alimentos",
                "class"=>"fa-apple",
                "link"=>"/alimentos"
                ],
    "item3" => [
                "info"=>"Modelos Alimentares",
                "class"=>"fa-coffee",
                "link"=>"/modelos"
                ],
    "item4" => [
                "info"=>"Lista de Substituições",
                "class"=>"fa-list",
                "link"=>"/substituicoes"
                ],
    "item5" => [
                "info"=>"Receitas",
                "class"=>"fa-list",
                "link"=>"/receitas"
                ],
    "item6" => [
                "info"=>"Agendas",
                "class"=>"fa-calendar",
                "link"=>"/agenda"
                ],
    "item7" => [
                "info"=>"Financeiro",
                "class"=>"fa-dollar",
                "link"=>"/financeiro"
    ],
    "item8" => [
                "info"=>"Secretárias",
                "class"=>"fa-laptop",
                "link"=>"/secretarias"
    ],
    "item9" => [
        "info"=>"Configurações",
        "class"=>"fa-wrench",
        "link"=>"",
        "subitem" => [
            "subItem2"=>"Importação",
            "subItem3"=>"Exportação"
        ]
    ],
    "item10" => [
                "info"=>"Sobre",
                "class"=>"fa-info",
                "link"=>""
                ]
];

foreach($menuPainel as $item):
    echo"
    <li class='menu-painel-item'>
      <a href={$item['link']}>
        <i class='fa {$item['class']}'></i>
        <span>{$item['info']}</span>
      </a>
    </li>
    ";
endforeach;
