<?php
    namespace ITEC\DAW\PROG\HTMLELEMENTS;

    $htmlElements = [
        "p" => [
            "nameTag" => "p",
            "attributes" => [
                "class" => "text2", "id" => "text2"
            ],
            "content" => "texto",
            "isEmpty" => false
        ]
    ];
    function CreateHTMLELEMENTS($nameTag, $attributes, $content, $isEmpty){
        return [
            "nameTag" => $nameTag,
            "attributes" => $attributes,
            "content" => $content,
            "isEmpty" => $isEmpty
        ];
        
    }

    function AttHTML($att){
        $htmlCode = "";
        foreach ($att as $key => $value){
            $htmlCode .= $key . '="' . $value . '" ';
        }
        return rtrim($htmlCode);
    }

    function toHTML($htmlelement){
        $attributes = AttHTML($htmlelement["attributes"]);
        $code = "<" . $htmlelement["nameTag"]."".$attributes.">";
        if(!$htmlelement["isEmpty"])
            $code .= $htmlelement["content"] . "</". $htmlelement["nameTag"].">";
            return $code;
    }
?>