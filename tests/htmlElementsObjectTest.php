<?php

use PHPUnit\Framework\TestCase;
use ITEC\DAW\PROG\HTMLELEMENTSOBJECT\HTMLELEMENTS;
final class htmlElementsTest extends TestCase{

    function DPHtmlElementsObjectTest(){
        $br = new ();
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
