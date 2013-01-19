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
 * raphael source writer class
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class raphael extends UtilRenderer implements UtilRendererType {
	protected static $APIKEY = "";
	protected $which;
	protected $context="raphael";	
	protected $namespaces = array(
		"raphael" => array(
			"customAttributes"
		),
		"customAttributes" => array(
			"segment"
		)
	);

	protected static $search = array(
			"Raphael()",
			"\$",
			"->"
	);

	protected static $replace = array (
			"Raphael",
			"",
			"."
	);

	
	/**
	 *
	 * @param bool $colon
	 * @param UtilVar $obj
	*/
	public function __construct($name = false, $obj = null, $colon = false) {
		
	    UtilClosure::addSearchReplace("Raphael()", "Raphael");
		$this->which = new UtilArray();
		$this->which->setProperties($this->namespaces);
		$this->context = "raphael";
		$this->colon = $colon;
		if ($name) {
			if($name instanceof UtilRendererType){
				$this->add(sprintf('Raphael(%s)', $name));
			} elseif(is_string($name)){
				$this->add(sprintf('Raphael(%s)', self::escape($name)));				
			} elseif(is_array($name)){
				$this->add(sprintf('Raphael(%s)', implode(",", $name)));				
			} else {
				$this->add( $name );
			}			
		} else if ($obj and $obj instanceof UtilVar) {
			$this->add( $obj->getData () );
		} elseif ($obj and is_string ( $obj )) {
			$this->add( $obj );
		} else {
			$this->add( "Raphael" );
		}
	}

	protected $lastNamespace = '';

	/**
	 * @param string $name
	 * @return raphael_autocompletion
	 */
	public function __get($name) {
		if($this->which->has($this->lastNamespace.$name)){
			$this->lastNamespace .= $name."/";
			return $this->{$name}(self::property);
		}
		return $this;
	}
	
	public function createVar($name, $newOperator = false, $default = true){
		$return = self::variable($this, $name, $default, $newOperator, "raphael");
		return $return;
	}
	
	/**
	 * raphael lib
	 * @return string
	 */
	public static function script($which=null){
		// not implemented because there is no CDN file available for Extjs 4
	}
	/**
	 * @return UtilVar
	 */
	public function createNew(){
		array_unshift($this->stack, " ");
		array_unshift($this->stack, "new");
		return $this;
	}

	/**
	 * @param string $name
	 * @param mixed $params
	 * @throws InvalidArgumentException
	 * @throws Exception
	 */
	public function __call($name, $params) {
		if (isset ( $params[0] ) and $params[0] === self::property) {

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
					$params[$key] = self::escape ( $val );
					$this->escaping = false;
				} elseif ($this->unescaping) {
					$params[$key] = self::unescape ( $val );
					$this->unescaping = false;
				} else {
					$params[$key] = self::escape ( $val );
				}
			} elseif (is_bool ( $val )) {
				$params[$key] = $val ? 'true' : 'false';
			} elseif (gettype ( $val ) == "array") {
				foreach ( $val as $k => $v ) {
					if ($v instanceof self)
						$v->colon = false;
				}
				$params[$key] = new UtilJson($val);
			} elseif (gettype ( $val ) == "object" and $val instanceof Closure) {
				$s = new UtilClosure ( $val );
				$params[$key] = $s;
			} elseif (gettype ( $val ) == "object" and $val instanceof UtilVar) {
				$params[$key] = $val;
			}
		}
		$this->add( sprintf( "%s(%s)", $name, implode ( ",", $params ) ), true, false );
		return $this;
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
		if($this->escaping) {
			return self::escape($str . ($this->colon ? PHP_EOL : ""));
		}
		return $str . ($this->colon ? PHP_EOL : "");
	}

}


/**
 * short cut function
 * @param string $name
 * @param raphael $obj
 * @return raphael_base
 */
function raphael($name=null, $obj=null) {
	return new raphael($name, $obj);
}

if(!function_exists("func")) {
	function func($def="") {
		if (func_num_args ()) {
			$args = func_get_args ();
			$rc = new ReflectionClass ( 'UtilFunctionStack' );
			return $rc->newInstanceArgs ( $args );
		}
		return raphael::F( $def );
	}
}
if(!function_exists("obj")) {
	function obj($data) {
		return new UtilJson($data);
	}
} 
