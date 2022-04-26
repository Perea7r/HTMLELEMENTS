<?php
namespace ITEC\DAW\PROG\HTMLELEMENTSOBJECT;
    class HTMLELEMENTS{
        private string $nameTag;
        private array $attributes;
        private array $content;
        private bool $isEmpty;

        public function __construct(string $nameTag, array $attributes,array $content, bool $isEmpty){
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

        public function addContent(array $HTMLElement){
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
    }
?>