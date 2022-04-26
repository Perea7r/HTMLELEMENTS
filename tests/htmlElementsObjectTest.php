<?php

use PHPUnit\Framework\TestCase;
use ITEC\DAW\PROG\HTMLELEMENTSOBJECT\HTMLELEMENTS;
final class htmlElementsObjectTest extends TestCase{

    function DPHtmlElementsObjectTest(){
        $p = new HTMLELEMENTS ("p",[],"Hola",false);
        return [
            "TEST p" => [
                '<p id="p1" class="parrafo">Hola"',
                "p",
                [
                    "id" => "ParrafoIntroduccion",
                    "class" => "Normal"
                ],
                "Hola",
                false
            ]
        ];
    }
    /**
     * @dataProvider DPHtmlElementsObjectTest
     */
    public function testGetHtml($esperado, $nameTag, $attributes, $content, $isEmpty){
        $Tag = new HTMLELEMENTS($nameTag, $attributes, $content, $isEmpty);
        $this-> assertEquals($esperado, $Tag->getHtml());
    }
}
