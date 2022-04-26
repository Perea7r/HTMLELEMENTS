<?php

use PHPUnit\Framework\TestCase;
use function ITEC\DAW\PROG\HTMLELEMENTS\toHTML;
use function ITEC\DAW\PROG\HTMLELEMENTSOBJECT\class\getHtml;

final class htmlElementsTest extends TestCase
{
    public function DPcreateHtmlElementTest()
    {
        $br = [
            "nameTag" => "br",
            "attributes" => [],
            "content" => "",
            "isEmpty" => true
        ];
        $p = [
            "nameTag" => "p",
            "attributes" => [
                "id" => "ParrafoIntroduccion",
                "class" => "Normal"
            ],
            "content" => "texto",
            "isEmpty" => false
        ];
        $h1 = [
            "nameTag" => "h1",
            "attributes" => [
                "id" => "Titulo",
                "class" => "Normal"
            ],
            "content" => "texto",
            "isEmpty" => false
        ];
        return [
            "TEST br" => [
                $br,
                "br",
                [],
                "",
                true
            ],
            "TEST p" => [
                $p,
                "p",
                [
                    "id" => "ParrafoIntroduccion",
                    "class" => "Normal"
                ],
                "texto",
                false
            ],
            "TEST h1" => [
                $h1,
                "h1",
                [
                    "id" => "Titulo",
                    "class" => "Normal"
                ],
                "texto",
                false
            ]
        ];
    }
    /**
     * @dataProvider DPcreateHtmlElementTest
     */
    public function testcreateHTMLelements(
        $esperado,
        $nameTag,
        $attributes,
        $content,
        $isEmpty
    ) {
        $htmlElement = ITEC\DAW\PROG\HTMLELEMENTS\CreateHTMLELEMENTS(
            $nameTag,
            $attributes,
            $content,
            $isEmpty
        );
        $this->assertEquals(
            $esperado,
            $htmlElement
        );
        return $htmlElement;
    }
    public function DPtestToHTML()
    {
        return [
            "TEST br" => ["<br>"]
        ];
    }

    /**
     * @depends testcreateHTMLelements
     * @dataProvider DPTestToHTML
     */
    public function testGetHtml($esperado, $htmlElement)
    {
        $this->assertEquals($esperado, toHTML($htmlElement));
    }

    public function DPAtt()
    {
        $att1 = [
            "id" => "ParrafoIntroduccion",
            "class" => "Normal"
        ];
        $esperado1 = 'id="ParrafoIntroduccion" class="Normal"';
        $att2 = [
            "id" => "elementoBloque",
            "class" => "Normal"
        ];
        $esperado2 = 'id="elementoBloque" class="Normal"';
        $att3 = [
            "id" => "noticias",
            "class" => "Normal"
        ];
        $esperado3 = 'id="noticias" class="Normal"';
        return [
            "ATT Vacio" => [$esperado1, $att1],
            "ATT ID CLASS" => [$esperado2, $att2],
            "ATT ID CLASS STYLE" => [$esperado3, $att3]
        ];
    }
    /**
     * @dataProvider DPAtt
     */
    public function testHtmlElements(
        $esperado,
        $att
    ) {
        $this->assertEquals(
            $esperado,
            ITEC\DAW\PROG\HTMLELEMENTS\AttHTML($att)
        );
    }
}

final class htmlElementsObjectTest extends TestCase
{
    public function DPtestHtmlElementsObject()
    {
        $br = [
            "nameTag" => "br",
            "attributes" => [],
            "content" => "",
            "isEmpty" => true
        ];
        $p = [
            "nameTag" => "p",
            "attributes" => [
                "id" => "ParrafoIntroduccion",
                "class" => "Normal"
            ],
            "content" => "texto",
            "isEmpty" => false
        ];
        return [
            "TEST br" => [
                $br,
                "br",
                [],
                "",
                true
            ],
            "TEST p" => [
                $p,
                "p",
                [
                    "id" => "ParrafoIntroduccion",
                    "class" => "Normal"
                ],
                "texto",
                false
            ]
        ];
    }
    /**
     * @dataProvider DPtestHtmlElementsObject
     */
    public function testcreateHtmlElements($esperado,$nameTag,$attributes,$content,$isEmpty)
    {
        $htmlElement = getHtml(
            $nameTag,
            $attributes,
            $content,
            $isEmpty
        );
        $this->assertEquals(
            $esperado,
            $htmlElement
        );
        return $htmlElement;
    }
}
