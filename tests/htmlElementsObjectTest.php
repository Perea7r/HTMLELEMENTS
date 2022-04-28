<?php

use ITEC\DAW\PROG\HTMLELEMENTSOBJECT\HTMLELEMENTS;
use PHPUnit\Framework\TestCase;
final class htmlElementsObjectTest extends TestCase{

    function DPHtmlElementsObjectTest(){
        $p = new HTMLELEMENTS ("p",["class" => "Normal", "id" => "ParrafoIntroduccion"],"Hola",false);
        return [
            "p" => [
                '<p>',
                "p",
                [],
                "Hola",
                false
            ],
            "Texto" => [
                '<p class="Normal" id="ParrafoIntroduccion">Hola</p>',
                "p",
                [
                    "class" => "Normal",
                    "id" => "ParrafoIntroduccion"
                ],
                "Hola",
                false
            ],
            "Elemento con p" => [
                '<div id="parrafo"><p class="Normal" id="ParrafoIntroduccion">Hola</p></div>',
                "div" ,
                ["id" => "parrafo"],
                [$p],
                false
            ]
        ];
    }
    /**
     * @dataProvider DPHtmlElementsObjectTest
     */
    public function testHtmlElementsObject($esperado, $nameTag, $attributes, $content, $isEmpty){
        $Tag = new HTMLELEMENTS($nameTag, $attributes, $content, $isEmpty);
        $this-> assertEquals($esperado, $Tag->getHtml());
    }
}