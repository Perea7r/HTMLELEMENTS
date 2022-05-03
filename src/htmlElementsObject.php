<?php
namespace ITEC\DAW\PROG\HTMLELEMENTSOBJECT;

use function PHPUnit\Framework\returnSelf;

    class HtmlElementsObject{
        const EMPTY_TAGS = [
            "area",
            "base",
            "br",
            "col",
            "embed",
            "hr",
            "img",
            "input",
            "keygen",
            "link",
            "meta",
            "param",
            "source",
            "track",
            "wbr"
        ];
        
        const ATTRIBUTES_TAG = [
            "accept" => ["form", "input"],
            "accept-charset" => ["form"],
            "accesskey" => "global",
            "action" => ["form"],
            "align" => ["applet", "caption", "col", "colgroup", "hr", "iframe", "img", "table", "tbody", "td", "tfoot", "tr"],
            "allow" => ["iframe"],
            "alt" => ["applet", "area", "img", "input"],
            "async" => ["script"],
            "autocapitalize" => "global",
            "autocomplete" => ["form", "input"],
            "autofocus" => ["button", "input", "keygen", "select", "textarea"],
            "autoplay" => ["audio", "video"],
            "autosave" => ["input"],
            "bgcolor" => ["body", "col", "colgroup", "marquee", "table", "tbody", "tfoot", "td", "th", "tr"],
            "border" => ["img", "object", "table"],
            "buffered" => ["audio", "video"],
            "challenge" => ["keygen"],
            "charset" => ["meta", "script"],
            "checked" => ["command", "input"],
            "cite" => ["blockquote", "del", "ins", "q"],
            "class" => "global",
            "code" => ["applet"],
            "codebase" => ["applet"],
            "color" => ["basefont", "font", "hr"],
            "cols" => ["textarea"],
            "colspan" => ["td", "th"],
            "content" => ["meta"],
            "contenteditable" => "global",
            "contextmenu" => "global",
            "controls" => ["audio", "video"],
            "coords" => ["area"],
            "crossorigin" => ["audio", "img", "link", "script", "video"],
            "data" => ["object"],
            "data-*" => "global",
            "datetime" => ["del", "ins", "time"],
            "default" => ["track"],
            "defer" => ["script"],
            "dir" => "global",
            "dirname" => ["input", "textarea"],
            "disabled" => ["button", "command", "fieldset", "input", "keygen", "optgroup", "option", "select", "textarea"],
            "download" => ["a", "area"],
            "draggable" => "global",
            "dropzone" => "global",
            "enctype" => ["form"],
            "for" => ["label", "output"],
            "form" => ["button", "fieldset", "input", "keygen", "label", "meter", "object", "output", "progress", "select", "textarea"],
            "formaction" => ["input", "button"],
            "headers" => ["td", "th"],
            "height" => ["canvas", "embed", "iframe", "img", "input", "object", "video"],
            "hidden" => "global",
            "high" => ["meter"],
            "href" => ["a", "area", "base", "link"],
            "hreflang" => ["a", "area", "link"],
            "http-equiv" => ["meta"],
            "icon" => ["command"],
            "id" => "global",
            "ismap" => ["img"],
            "itemprop" => "global",
            "keytype" => ["keygen"],
            "kind" => ["track"],
            "label" => ["track"],
            "lang" => "global",
            "language" => ["script"],
            "list" => ["input"],
            "loop" => ["audio", "bgsound", "marquee", "video"],
            "low" => ["meter"],
            "manifest" => ["html"],
            "max" => ["input", "meter", "progress"],
            "maxlength" => ["input", "textarea"],
            "media" => ["a", "area", "link", "source", "style"],
            "method" => ["form"],
            "min" => ["input", "meter"],
            "multiple" => ["input", "select"],
            "muted" => ["video"],
            "name" => ["button", "form", "fieldset", "iframe", "input", "keygen", "object", "output", "select", "textarea", "map", "meta", "param"],
            "novalidate" => ["form"],
            "open" => ["details"],
            "optimum" => ["meter"],
            "pattern" => ["input"],
            "ping" => ["a", "area"],
            "placeholder" => ["input", "textarea"],
            "poster" => ["video"],
            "preload" => ["audio", "video"],
            "pubdate" => ["time"],
            "radiogroup" => ["command"],
            "readonly" => ["input", "textarea"],
            "rel" => ["a", "area", "link"],
            "required" => ["input", "select", "textarea"],
            "reversed" => ["ol"],
            "rows" => ["textarea"],
            "rowspan" => ["td", "th"],
            "sandbox" => ["iframe"],
            "scope" => ["th"],
            "scoped" => ["style"],
            "seamless" => ["iframe"],
            "selected" => ["option"],
            "shape" => ["a", "area"],
            "size" => ["input", "select"],
            "sizes" => ["link", "img", "source"],
            "span" => ["col", "colgroup"],
            "spellcheck" => "global",
            "src" => ["audio", "embed", "iframe", "img", "input", "script", "source", "track", "video"],
            "srcdoc" => ["iframe"],
            "srclang" => ["track"],
            "srcset" => ["img"],
            "start" => ["ol"],
            "step" => ["input"],
            "style" => "global",
            "summary" => ["table"],
            "tabindex" => "global",
            "target" => ["a", "area", "base", "form"],
            "title" => "global",
            "type" => ["button", "input", "command", "embed", "object", "script", "source", "style", "menu"],
            "usemap" => ["img", "input", "object"],
            "value" => ["button", "option", "input", "li", "meter", "progress", "param"],
            "width" => ["canvas", "embed", "iframe", "img", "input", "object", "video"],
            "wrap" => ["textarea"]
        ];
        
        const ATTRIBUTE_VALUES = [
            "accept" => null,
            "accept-charset" => null,
            "accesskey" => null,
            "action" => null,
            "align" => ["left", "right", "center", "justify"],
            "allow" => null,
            "alt" => null,
            "async" => null,
            "autocapitalize" => ["off", "none", "on", "sentences", "words", "characters"],
            "autocomplete" => [
                "off",
                "on",
                "name",
                "honorific-prefix",
                "given-name",
                "additional-name",
                "family-name",
                "honorific-suffix",
                "nickname",
                "email",
                "username",
                "new-password",
                "current-password",
                "one-time-code",
                "organization-title",
                "organization",
                "street-address",
                "address-line1",
                "address-line2",
                "address-line3",
                "address-level4",
                "address-level3",
                "address-level2",
                "address-level1",
                "country",
                "country-name",
                "postal-code",
                "cc-name",
                "cc-given-name",
                "cc-additional-name",
                "cc-family-name",
                "cc-number",
                "cc-exp",
                "cc-exp-month",
                "cc-exp-year",
                "cc-csc",
                "cc-type",
                "transaction-currency",
                "transaction-amount",
                "language",
                "bday",
                "bday-day",
                "bday-month",
                "bday-year",
                "sex",
                "tel",
                "tel-country-code",
                "tel-national",
                "tel-area-code",
                "tel-local",
                "tel-extension",
                "impp",
                "url",
                "photo"
            ],
            "autofocus" => null,
            "autoplay" => null,
            "autosave" => null,
            "bgcolor" => null,
            "border" => null,
            "buffered" => null,
            "challenge" => null,
            "charset" => null,
            "checked" => null,
            "cite" => null,
            "class" => null,
            "code" => null,
            "codebase" => null,
            "color" => null,
            "cols" => null,
            "colspan" => null,
            "content" => null,
            "contenteditable" => ["true", "false"],
            "contextmenu" => null,
            "controls" => null,
            "coords" => null,
            "crossorigin" => ["", "anonymous", "use-credentials"],
            "data" => null,
            "data-*" => null,
            "datetime" => null,
            "default" => null,
            "defer" => null,
            "dir" => ["ltr", "rtl", "auto"],
            "dirname" => null,
            "disabled" => null,
            "download" => null,
            "draggable" => ["true", "false"],
            "dropzone" => null,
            "enctype" => ["application/x-www-form-urlencoded", "multipart/form-data", "text/plain"],
            "for" => null,
            "form" => null,
            "formaction" => null,
            "headers" => null,
            "height" => null,
            "hidden" => null,
            "high" => null,
            "href" => null,
            "hreflang" => null,
            "http-equiv" => null,
            "icon" => null,
            "id" => null,
            "ismap" => null,
            "itemprop" => null,
            "keytype" => ["RSA", "DSA", "EC"],
            "kind" => ["subtitles", "captions", "descriptions", "chapters", "metadata"],
            "label" => null,
            "lang" => null,
            "language" => null,
            "list" => null,
            "loop" => null,
            "low" => null,
            "manifest" => null,
            "max" => null,
            "maxlength" => null,
            "media" => null,
            "method" => ["GET", "POST", "dialog"],
            "min" => null,
            "multiple" => null,
            "muted" => null,
            "name" => null,
            "novalidate" => null,
            "open" => null,
            "optimum" => null,
            "pattern" => null,
            "ping" => null,
            "placeholder" => null,
            "poster" => null,
            "preload" => null,
            "pubdate" => null,
            "radiogroup" => null,
            "readonly" => null,
            "rel" => [
                "alternate",
                "author",
                "bookmark",
                "canonical",
                "external",
                "help",
                "icon",
                "license",
                "manifest",
                "me",
                "modulepreload",
                "next",
                "nofollow",
                "noopener",
                "noreferrer",
                "opener",
                "pingback",
                "preconnect",
                "prefetch",
                "preload",
                "prerender",
                "prev",
                "search",
                "stylesheet",
                "tag",
                "dns-prefetch"
            ],
            "required" => null,
            "reversed" => null,
            "rows" => null,
            "rowspan" => null,
            "sandbox" => null,
            "scope" => null,
            "scoped" => null,
            "seamless" => null,
            "selected" => null,
            "shape" => null,
            "size" => null,
            "sizes" => null,
            "span" => null,
            "spellcheck" => ["true", "false"],
            "src" => null,
            "srcdoc" => null,
            "srclang" => null,
            "srcset" => null,
            "start" => null,
            "step" => null,
            "style" => null,
            "summary" => null,
            "tabindex" => null,
            "target" => ["_blank", "_self", "_parent", "_top"],
            "title" => null,
            "type" => null,
            "usemap" => null,
            "value" => null,
            "width" => null,
            "wrap" => ["hard", "soft", "off"]
        ];
        private string $nameTag;
        private array $attributes; 
        private string $content;
        private bool $isEmpty;

        public function __construct(string $nameTag, array $attributes,string $content, bool $isEmpty){
            $this->nameTag = $nameTag;
            $this->attributes = $attributes;
            $this->content = $isEmpty?null:$content;
            $this->isEmpty = $isEmpty;
        }

        public function getNameTag():string {
            return $this->nameTag;
        }

        public function isEmpty():bool {
            return $this->isEmpty;
        }

        public function addContent(string $HTMLElement){
            $this->content[] = $HTMLElement;
            
        }
        
        public function addAtribbute(string $attName, string $attValue){
            $this->attributes[$attName] = $attValue;
        }

        public function removeAttribute(string $attName){
            unset($this->attributes[$attName]);
        }

        public function isSameTag($HTMLElement):bool{
            return $this->nameTag == $HTMLElement->getNameTag;
        }

        public function getHtml(){
            $htmlCode = "";
            foreach ($this->attributes as $key => $value){
                $htmlCode .= $key . '="' . $value . '" ';
            }
            $attributesToString = rtrim($htmlCode);
            $code = "<" . $this->nameTag." ".$attributesToString.">";
            if(!$this->isEmpty)
                $code .= $this->content . "</". $this->nameTag.">";
            return $code;
        }

        private function validateTag($nameTag, $attributes, $isEmpty){
            return !($this-> isCorrectEmpty($nameTag, $isEmpty) || $this ->isCorrectAttributes($nameTag, $attributes));
        }

        private function isCorrectEmpty($nameTag , $isEmpty){
            return in_array($nameTag, self::EMPTY_TAGS) && $isEmpty;
        }

        private function isCorrectAttributes($nameTag, $attributes){
            foreach ($attributes as $key => $value){
                if (!array_key_exists($key, self::ATTRIBUTES_TAG)){
                    return false;
                }

                if (!(self::ATTRIBUTES_TAG[$key] != "global" && is_array(self::ATTRIBUTE_VALUES[$key])))
                return false;

                if (in_array($nameTag, self::ATTRIBUTE_VALUES[$key]) || $this -> isCorrectAttributesValues($key, $value)
            );
            return false;
            }
        return true;
        }

        private function isCorrectAttributesValues($attributes, $value){
            if (is_array(self::ATTRIBUTE_VALUES[$attributes])) {
                if (in_array($value, self::ATTRIBUTE_VALUES[$attributes]))
                return false;
            } else {
                if ($value != self::ATTRIBUTE_VALUES[$attributes])
                return false;
            }
            return true;
        }
    }
?>