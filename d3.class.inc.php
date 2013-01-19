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

if(!class_exists("UtilRenderer")){
  throw new Exception("UtilRenderer class is missing.");
}
/**
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class d3 extends UtilRenderer implements UtilRendererType {
	protected $context="d3";
	protected $namespaces = array(
			"svg" => true,
			"diagonal" => true,
			"time" => true,
			"layout" => true,
			"transition" => true,
			"random" => true,
			"layout" => true,
			"scale" => true,
			"geo" => true,
			"geom" => true,
			"behavior" => true,
	);
	protected $which;

	/**
	 *
	 * @param bool $colon
	 * @param UtilVar $obj
	 */
	public function __construct($colon = true, $obj = null, $name = false) {
		$this->colon = $colon;
		if ($name) {
			$this->add ( $name );
		} else if ($obj and $obj instanceof UtilVar) {
			$this->add ( $obj->getData () );
		} elseif ($obj and is_string ( $obj )) {
			$this->add ( $obj );
		} else {
			$this->add ( get_class ( $this ) );
		}
	}

	public static function js($type){
		return self::variable("", $type)->get();
	}

	/**
	 * @param string $name
	 * @return d3
	 */
	public function __get($name) {
		if(array_key_exists($name, $this->namespaces)){
			$this->which = $name;
			return $this->{$name}(self::property);
		}
		return $this;
	}
	/**
	 * resolves each d3 function
	 * @see http://mbostock.github.com/d3
	 * @param string $name
	 * @param mixed $params
	 * @throws InvalidArgumentException
	 * @throws Exception
	 * @return d3AutoCompletion
	 */
	public function __call($name, $params) {

		if (isset ( $params [0] ) and $params [0] === self::property) {
			$this->add ( sprintf ( "%s", $name ) );
			return $this;
		} elseif (in_array($name, array("unescaping", "escaping", "unesc", "esc") ) ) {
			$this->{$name} = true;
			return $this;
		} elseif (in_array($name, array("concat") ) ) {
			$this->{$name} = true;
			foreach($params as $param){
				$this->add($param,false,false,true);
			}
			$this->unescaping = true;
			return $this;
		}

		foreach ( $params as $key => $val ) {
			if (is_string ( $val )) {
				if ($this->escaping) {
					$params [$key] = self::escape ( $val );
					$this->escaping = false;
				} elseif ($this->unescaping) {
					$params [$key] = self::unescape ( $val );
					$this->unescaping = false;
				} else {
					$params [$key] = self::escape ( $val );
				}
			} elseif (is_bool ( $val )) {
				$params [$key] = $val ? 'true' : 'false';
			} elseif (gettype ( $val ) == "array") {
				foreach ( $val as $k => $v ) {
					if ($v instanceof self)
						$v->colon = false;
				}
				$params [$key] = sprintf ( "[%s]", implode ( ",", $val ) );
			} elseif (gettype ( $val ) == "object" and $val instanceof Closure) {
				$params [$key] =  (string) new UtilClosure ( $val );
			} elseif (gettype ( $val ) == "object" and $val instanceof UtilVar) {
				$params [$key] = $val;
			}
		}
		$this->add( sprintf( "%s(%s)", $name, implode ( ",", $params ) ), true, false );
		return $this;
	}

	public static function setTimeout($code, $timeout = 100){
		return sprintf('setTimeout(%s, %d);', f3()->add($code), $timeout);
	}

	/**
	 * d3 lib
	 * @return string
	 */
	public static function script($version=3, $domain = null){
		return '<script src="'.d3()->setDomain($version, $domain)->getDomain().'"></script>'."\n";
	}

	protected $domain;

	public function setDomain($version=3, $domain=null){
		$this->domain = ($domain!=null ? $domain . 'd3.v'.$version.'.min.js' : 'http://d3js.org/d3.v'.$version.'.min.js');
		return $this;
	}

	public function getDomain(){
		return $this->domain;
	}

	/**
	 * create export utility function
	 * @param string $targetid
	 * @param string $sourceid
	 * @return UtilFunctionStack
	 */
	public function createExportFunction($targetid, $sourceid){
		$f = f3("output_format")->name("submit_download_form");
		$svg = document()->getElementById($targetid)->createVar("svg");
		$svg_format = XMLSerializer()->serializeToString($svg->getVar());
		$v = self::variable(self::unescape((string)$svg_format), "svg_format");
		$f->add($svg);
		$f->add($v);
		$form = document()->getElementById($sourceid)->createVar("form");
		$f->add($form);
		$form["output_format"]->value = $f->getVar("output_format");
		$form["data"]->value = $v->getVar();
		$f->add($form);
		$f->add($form->get()->submit()->colon());
		return $f;
	}

	/**
	 * finally render js source
	 *
	 * @return string
	 */
	public function __toString() {
		$str = array_shift ( $this->stack );
		$str .= implode ("", $this->stack );
		if (!stristr ( $str, ";" ) and $this->colon){
			$str .= ';';
		}
		return $str . ($this->colon ? PHP_EOL : "");
	}
}

/**
 * short cut function
 *
 * @param d3 $obj
 * @return d3AutoCompletion|d3
 */
function d3($obj = null, $colon = false) {
	return new d3( $colon, $obj );
}
