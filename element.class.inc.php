<?php
/**
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 *
 * The MIT License (MIT)
 * Copyright (c) 2012 Thomas Schäfer <thomas.schaefer@query4u.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
 * of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 */

/**
 * element class
 */
class element {
  protected $doctype;
  protected $useNamePrefix = false;

  protected $namePrefix;

  /**
   * @var string $element
   */
  protected $element = '';

  /**
   * @var array $attributes stack for holding element attributes
   */
  private $attributes = array();
  /**
   * @var array $nodes stack for holding child elements
   */
  private $nodes = array();

  protected $nodespace = null;

  protected $nodeoffset = 0;
  
  protected $doctypes = array(
  	"strict4" => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',
  	"trans4"  => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',
  	"frame4"  => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">',
  	"xstrict4" => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',
  	"xtrans4" => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',
  	"xframe4" => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">',
  	"x11" => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">'
  );

  /**
   * @param array $attributes
   * @param array $nodes
   */
  public function __construct($name, array $attributes = array(), $nodes = array()) {
    if($name=='html'){
    	if(array_key_exists("doctype", $attributes)) {
    		$type = $attributes["doctype"];
    		$this->doctype = $this->doctypes[$type];
    	} else {		    		
    		$this->doctype = '<!DOCTYPE html>';
    	}
    } else {
    	$this->doctype = '';
    }
    $this->attributes = $attributes;
    $this->setNodes($nodes);
    $this->element = $name;
  }

  public function setElementName($name) {
    $this->element = (string)$name;
    return $this;
  }
  protected function getNodeSpace() {
    return $this->nodespace;
  }

  protected function getNodeOffset() {
    return $this->nodeoffset;
  }

  protected function getElementName() {
    return $this->element;
  }


  public function withNamePrefix($bool = true) {
    $this->useNamePrefix = $bool;
  }

  public function hasNamePrefix() {
    return $this->useNamePrefix;
  }

  public function setNamePrefix($name) {
    $this->namePrefix = $name;
    return $this;
  }

  /**
   * adding stack of child elements
   * @param array $nodes
   * @return element
   */
  public function setNodes(array $nodes) {
    foreach ($nodes as $node)
    {
      if ($node instanceof element or is_string($node) or is_numeric($node))
      {
        $this->nodes[] = $node;
      }
    }
    return $this;
  }

  public function addLine($int = 1) {
    for ($i = 0; $i < $int; ++$i)
    {
      $this->addNode(new Element("br"));
    }
    return $this;
  }
  
  public function linebreak($int=1){
  	for ($i = 0; $i < $int; ++$i)
  	{
  		$this->addNode(PHP_EOL);
  	}
  	return $this;
  }

  public function addSpace($int = 1) {
    for ($i = 0; $i < $int; ++$i)
    {
      $this->addNode("&nbsp;");
    }
    return $this;
  }
  
  /**
   * add a single node
   * @param mixed $node
   * return element
   */
  public function add($node) {
   return $this->addNode($node);
  }

  /**
   * add a single node
   * @param mixed $node
   * @return element
   */
  public function addNode($node) {
     $this->nodes[] = $node;
    return $this;
  }

  public function hasNode($offset) {
    return isset($this->nodes[$offset]);
  }

  /**
   *
   * @param integer $offset
   * @return Element
   */
  public function getNode($offset) {
    if (count($this->nodes)
        and isset($this->nodes[$offset])
        and ($this->nodes[$offset] instanceof element or empty($this->nodes[$offset]) === false
    ))
    {
      return $this->nodes[$offset];
    }
    else
    {
      throw new Exception("Only an instance of element may be returned.");
    }
  }

  /**
   * return number of nodes
   * @return integer
   */
  public function numNodes() {
    return count($this->nodes);
  }

  public function getOffset() {
    return count($this->nodes);
  }

  /**
   * @param string $attribute
   * @return mixed false, if not exists
   */
  public function getAttribute($attribute) {
    if ($this->hasAttribute($attribute))
    {
      return $this->attributes[$attribute];
    }

    return false;
  }

  /**
   * @param string $attribute
   * @return boolean
   */
  public function hasAttribute($attribute) {
    return (array_key_exists($attribute, $this->attributes));
  }

  /**
   * @param array $attributes
   * @return Proteus_Element
   */
  public function setAttributes(array $attributes) {
    foreach ($attributes as $attributeName => $attributeValue)
    {
      $this->addAttribute($attributeName, $attributeValue);
    }
    return $this;
  }

  /**
   * add a single element attribute
   * @param string $name
   * @param mixed $value
   * @return element
   */
  public function addAttribute($name, $value) {
    if (!array_key_exists($name, $this->attributes))
    {
      switch ($name)
      {
        case "style": // style element needs special treatment due to its syntax
          $styles = array();
          if (is_array($value))
          {
            foreach ($value as $attrName => $attrVal)
            {
              $styles[$attrName] = $attrName . ':' . $attrVal;
            }
            $this->attributes["style"] = implode(";", array_values($styles));
          }
          else
          {
            $this->attributes["style"] = (string)$value;
          }
          break;
        default:
          $this->attributes[$name] = (string)$value;
          break;
      }
    }
    else if ("class" == $name and array_key_exists($name, $this->attributes))
    {
      // enable array-based concatenation of class names
      $classes = $this->attributes["class"];
      if (is_array($classes))
      {
        $classes[] = $value;
      }
      else
      {
        $classes = array($classes);
        $classes[] = $value;
      }
      $this->attributes["class"] = array_unique($classes);
    }
    else if ("style" == $name and array_key_exists($name, $this->attributes))
    {
      $styles = array();
      if (is_array($value))
      {
        foreach ($value as $attrName => $attrVal)
        {
          $styles[$attrName] = $attrName . ':' . $attrVal;
        }
      }
      else
      {
        $styles[$name] = array($value);
      }
      $this->attributes["style"] = array_unique($styles);
    }
    else
    {
      // default
      $this->attributes[$name] = (string)$value;
    }
    return $this;
  }

  /**
   * return node stack
   * @return array
   */
  public function getNodes() {
    return $this->nodes;
  }

  /**
   * return node stack
   * @return array
   */
  public function setNode($value, $offset = 0) {
    return $this->nodes[$offset] = $value;
  }

  /**
   * @return string
   */
  public function render() {
    $ignore = array(
      "flat" => true
    );
    $close = false;
    $output = '';
    if ($this->element != "container")
    {
      $output .= '<' . $this->element;
      foreach ($this->attributes as $attrName => $attrVal)
      {
        if (!array_key_exists($attrName, $ignore))
        {

          switch ($attrName)
          {
            case "style":
              $output .= ' ' . $attrName . '="' . (is_array($attrVal) ? self::joinValues($attrVal) : $attrVal) . ';"';
              break;
            default:
              if ($attrName == "name" and in_array($this->element, array("input", "textarea", "button", "select")))
              {
                  $output .= ' ' . $attrName . '="' . $attrVal . '"';
              }
              else
              {
                $output .= ' ' . $attrName . '="' . (is_array($attrVal) ? implode(' ', $attrVal) : $attrVal) . '"';
              }
              break;
          }
        }
      }

      switch ($this->element)
      {
        case "br":
        case "hr":
        case "link":
        case "meta":
        case "input":
          $close = true;
          $output .= '/>';
          break;
        default:
          $output .= '>';
          break;
      }

    }

    foreach ($this->nodes as $node)
    {
        $output .= $node;
    }

    if ($this->element != "container" and empty($close))
    {
      $output .= '</' . $this->element . '>';
    }
    return $this->doctype . $output;

  }

  private static function joinValues($values) {
    $array = array();

    foreach ($values as $name => $value)
    {
      $array[] = $name . ":" . $value;
    }
    return implode(";", $array);
  }

  /**
   * @return $this
   */
  public function head(){
  	if($this->element=='html'){
	  	$this->setNode(new Element("head"), 0);
	  	return $this->getNode(0);
  	}
  	return $this;
  }
  /**
   * @return $this
   */
  public function body(){
  	if($this->element=='html'){
	  	$this->setNode(new Element("body"),1);
	  	return $this->getNode(1);
  	}
  	return $this;
  }
  
  /**
   * @param array $attr
   * @return $this
   */
  public function script($attr = array()) {
  	$e = new Element("script", $attr);
  	$this->add($e);
  	return $this->getNode(count($this->nodes)-1);
  }
  
  public function toBody($name, $attr=array()){
  	if($this->element=='body'){
		return $this->append($name, $attr);
  	}
  	return $this;
  }
  
  public function toHead($name, $attr=array()){
  	if($this->element=='head'){
		return $this->append($name, $attr);
  	}
  	return $this;
  }

  public function link($href, $attr = array()){
  	$attr = array_merge(array("href"=>$href, "type"=>"text/css", "rel"=>"stylesheet"), $attr);
  	$this->add(new Element("link", $attr));
  	return $this;
  }
  
  public function append($name, $attr = array(), $nodes = array()){
  	$e = new Element($name, $attr, $nodes);
  	$this->add($e);
  	return $e;
  }
  
  public function thead($attr=array()){
  	return $this->append("thead", $attr);
  }
  public function tbody($attr=array()){
  	return $this->append("tbody", $attr);
  }
  public function tfoot($attr=array()){
  	return $this->append("tfoot", $attr);
  }
  public function tr($attr=array()){
  	return $this->append("tr", $attr);
  }
  public function th($nodes=array(), $attr=array()){
  	return $this->append("th", $attr, $nodes);
  }
  public function td($nodes=array(), $attr=array()){
  	return $this->append("td", $attr, $nodes);
  }
  
  public function css($key, $value=null){
  	if(is_array($key) and !$value){
  		$this->addAttribute("style", $key);
  	} else {
  		$this->addAttribute("style", array($key => $value));
  	}
  	return $this;
  }
  
  
  /**
   * @return string
   */
  public function __toString() {
    return $this->render();
  }

}

/**
 * @param string $name
 * @param array $attributes
 * @return Element
 */
function E($name, $attributes = array()){
	return new Element($name, $attributes);
}
