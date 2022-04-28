<?php

use ITEC\DAW\PROG\HTMLELEMENTSOBJECT\HtmlElementsObject;
use PHPUnit\Framework\TestCase;
final class htmlElementsObjectTest extends TestCase{

    function DPHtmlElementsObjectTest(){
        return [
            "p" => [
                '<p >Hola</p>',
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
                '<div ></div>',
                "div" ,
                [],
                "",
                false
            ]
        ];
    }
    /**
     * @dataProvider DPHtmlElementsObjectTest
     */
    public function testHtmlElementsObject($esperado, $nameTag, $attributes, $content, $isEmpty){
        $Tag = new HtmlElementsObject($nameTag, $attributes, $content, $isEmpty);
        $this-> assertEquals($esperado, $Tag->getHtml());
    }
}