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

interface UtilRendererType {}

class UtilHelper {
  public static function trycatch($code, $exception){
    return sprintf("try{\n%s\n} catch (e) {\n%s\n}", $code, $exception);
  }
}
/**
 * Array Helper class
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
/**
 * Array Helper class
 * Used to create and update deep nested arrays.
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class UtilArray {
  /**
	 * holder of values
	 * @var array $properties
	 */
	private $properties = array();

	private $flat_properties = array();

	/**
	 * @var string $_delimiter
	*/
	private $_delimiter = '/';

	/**
	 * @return void
	 */
	public function __construct($delim = null) {
		if ($delim)
			$this->_delimiter = $delim;
	}

	public function __clone() {
	}

	public function setProperties(array $data) {
		$this->properties = $data;
		return $this;
	}

	/**
	 * @return UtilArray
	 */
	public static function init() {
		return new UtilArray();
	}

	/**
	 * check for key
	 * @param string $path
	 * @return bool
	 */
	public function has($path) {
		if (strstr($path, $this->getDelimiter()))
		{
			if (substr($path, -1, 1) == $this->getDelimiter())
			{
				$path = substr($path, 0, -1);
			}
			$path = explode($this->getDelimiter(), $path);
			$key = array_shift($path);
			$path = implode($this->getDelimiter(), $path);

			return $this->hasElement($path, $this->get($key));
		}
		else
		{
			return array_key_exists($path, $this->properties);
		}
	}

	/**
	 * returns hidden keys
	 * @return array
	 */
	public function getKeys() {
		return array_keys($this->properties);
	}

	/**
	 * get values by path
	 * @param string $path
	 * @return mixed
	 */
	public function get($path = null) {
		if (empty($path))
			return $this->properties;

		if (strstr($path, $this->getDelimiter()))
		{
			if (substr($path, -1, 1) == $this->getDelimiter())
			{
				$path = substr($path, 0, -1);
			}
			$path = explode($this->getDelimiter(), $path);
			$key = array_shift($path);
			$path = implode($this->getDelimiter(), $path);
			return $this->getElement($path, $this->get($key));
		}
		if (is_array($this->properties) and array_key_exists($path, $this->properties))
		{
			return $this->properties[$path];
		}
		return array();
	}

	/**
	 * internal element getter
	 * @access protected
	 * @param string $path
	 * @param mixed $data
	 * @return mixed
	 */
	protected function getElement($path, $data) {
		if (!is_array($path)and strstr($path, $this->getDelimiter()))
		{
			$path = explode($this->getDelimiter(), $path);
		}
		if (is_array($path))
		{
			$key = array_shift($path);
			$path = implode($this->getDelimiter(), $path);
			return $this->getElement($path, $data[$key]);
		}
		else
		{
			if (is_array($data) and array_key_exists($path, $data))
			{
				return $data[$path];
			}
			else
			{
				return $data;
			}
		}
	}

	/**
	 * internal check for element key
	 * @param string $path
	 * @param mixed $data
	 * @return bool
	 */
	protected function hasElement($path, $data) {
		if (substr($path, -1, 1) == $this->getDelimiter())
		{
			$path = substr($path, 0, -1);
		}
		if (!is_array($path) and strstr($path, $this->getDelimiter()))
		{
			$path = explode($this->getDelimiter(), $path);
		}
		if (is_array($path))
		{
			$key = array_shift($path);
			$path = implode($this->getDelimiter(), $path);
			if (array_key_exists($key, $data))
			{
				$dat = $this->hasElement($path, $data[$key]);
			}
			else
			{
				$dat = false;
			}

			if (is_array($dat))
			{
				return $dat;
			}
			elseif (!empty($dat))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return (is_array($data) and array_key_exists($path, $data) ? true : false);
		}
	}

	/**
	 * first level setter (fluent design)
	 * overwrites key
	 * @param string $name
	 * @param mixed $value
	 * @return UtilArray
	 */
	public function add($name, $value) {
		if (!array_key_exists($name, $this->flat_properties))
		{
			$this->prepareFlatProperty($name);
			$this->flat_properties[$name] = $value;
		}
		if (strstr($name, $this->getDelimiter()))
		{
			$values = $this->insertElements($name, $value);
			$k = key($values);
			if (array_key_exists($k, $this->properties))
			{
				$this->properties = self::array_merge_recursive_distinct($this->properties, $values);
			}
			else
			{
				$this->properties[$k] = $values[$k];
			}
		}
		else
		{
			$this->properties[$name] = $value;
		}
		return $this;
	}

	private function prepareFlatProperty($name){
		if(strstr($name, $this->getDelimiter())){
			$c = substr_count($name, $this->getDelimiter());
			for($i=0;$i<$c;$i++){
				$name = substr($name, 0, strrpos($name, $this->getDelimiter()));
				if(!array_key_exists($name, $this->flat_properties)){
					$this->flat_properties[$name] = null;
				}
			}
		}
	}

	public function set($name, $value) {
		if (!array_key_exists($name, $this->flat_properties))
		{
			$this->prepareFlatProperty($name);
			$this->flat_properties[$name] = $value;
		}
		$data = $this->properties;
		$a = new UtilArray($this->getDelimiter());
		$a->add($name, $value);
		$a = $a->getAll();
		$this->properties = self::array_merge_recursive_distinct($data, $a);
		unset($a);
		return $this;
	}

	public function find($value) {
		if (($x = array_search($value, $this->flat_properties)))
			return $x;
		return false;
	}

	/**
	 * Flatten an array so that resulting array is of depth 1.
	 * If any value is an array itself, it is merged by parent array, and so on.
	 *
	 * @param array $array
	 * @param bool $preserver_keys OPTIONAL When true, keys are preserved when mergin nested arrays (=> values with same key get overwritten)
	 * @return array
	 */
	public function flatten($array, $preserve_keys = false) {
		if (!$preserve_keys)
		{
			// ensure keys are numeric values to avoid overwritting when array_merge gets called
			$array = array_values($array);
		}

		$flattened_array = array();
		foreach ($array as $k => $v)
		{
			if (is_array($v))
			{
				$flattened_array = array_merge($flattened_array, $this->flatten($v, $preserve_keys));
			}
			elseif ($preserve_keys)
			{
				$flattened_array[$k] = $v;
			}
			else
			{
				$flattened_array[] = $v;
			}
		}
		return $flattened_array;
	}

	public static function array_merge_recursive_distinct(&$array1, &$array2) {
		$merged = $array1;
		foreach ($array2 as $key => &$value)
		{
			if (is_array($value) and isset ($merged[$key]) and (is_array($merged[$key]) or $merged[$key] instanceof ArrayObject))
			{
				$merged [$key] = self::array_merge_recursive_distinct($merged [$key], $value);
			}
			else
			{
				$merged [$key] = $value;
			}
		}
		return $merged;
	}

	/**
	 * check for existance of value
	 * @param string $name
	 * @param mixed $value
	 * @return bool
	 */
	public function isIn($name, $value) {
		if (strstr($name, $this->getDelimiter()))
		{
			$path = explode($this->getDelimiter(), $name);
			$key = array_shift($path);
			$path = implode($this->getDelimiter(), $path);
			$data = $this->getElement($path, $this->properties[$key]);
			if (is_array($data))
			{
				return (in_array($value, $data));
			}
			else
			{
				return false;
			}
		}
		else
		{
			$data = $this->properties[$name];
			if (is_array($data))
			{
				return (in_array($value, $data));
			}
			else
			{
				return false;
			}
		}
	}

	/**
	 * change delimiter sign
	 * @param string $delimiter used to split path levels
	 * @return string
	 */
	public function setDelimiter($delimiter = '/') {
		if (0 == strlen($delimiter) || empty($delimiter))
		{
			return $this;
		}
		$this->_delimiter = $delimiter;
	}

	/**
	 * @return string
	 */
	public function getDelimiter() {
		return $this->_delimiter;
	}

	/**
	 * @static
	 * @param string|array $path
	 * @param mixed $data
	 * @return mixed
	 */
	private function insertElements($path, $data) {
		if (is_array($path) and count($path) == 1)
		{
			$path = array_shift($path);
		}
		elseif (is_array($path) and count($path) == 1)
		{
			return $path;
		}
		if (is_string($path) and substr($path, -1, 1) == $this->getDelimiter())
		{
			$path = substr($path, 0, -1);
		}
		if (!is_array($path))
		{
			$path = explode($this->getDelimiter(), $path);
		}
		// take last and add as key to properties
		if (true==($key = array_pop($path)))
		{
			return $this->insertElements($path, array($key => $data));
		}
		return $data;
	}

	/**
	 * @return array
	 */
	public function getFlatProperties() {
		return $this->flat_properties;
	}

	/**
	 * returns properties
	 * @return array
	 */
	public function getAll($clear = true, $clean=false) {
		$return = $this->properties;
		if($clean){
			$return = $this->cleanUp($return);
		}
		if ($clear)
			$this->properties = null;
		return $return;
	}

	protected function cleanUp($data){
		$a = array();
		if(is_array($data)){
			foreach ($data as $index => $row){
				if(is_numeric($index)){
					$a[] = $this->cleanUp($row);
				} else {
					if(is_array($row)){
						if($index == "childs" or $index == "menu" or $index == "items"){
							$c = $a;
							$a = array();
							$a[$index] = $this->cleanUp($row);
							$a = array_merge($a, $c);
						} else {
							$a[$index] = $this->cleanUp($row);
						}
					} else {
						$a[$index] = $row;
					}
				}
			}
		}
		return $a;
	}


	public function fetchAll() {
		$return = $this->properties;
		return $return;
	}

	/**
	 * unset properties
	 * @return UtilArray
	 */
	public function clear() {
		$this->properties = null;
		return $this;
	}

	/**
	 * return internal properties as xml
	 * @return string
	 */
	public function getXML() {
		$root_element_name = 'data';
		$xml = new SimpleXMLElement("<?xml version=\"1.0\"?><{$root_element_name}></{$root_element_name}>");
		$f = create_function('$f,$c,$a','
            foreach($a as $k=>$v) {
                if(is_array($v)) {
                    $ch=$c->addChild((is_numeric($k)?"item":$k));
                    $f($f,$ch,$v);
                } else {
                    $c->addChild($k,$v);
                }
            }');
		$f($f,$xml,$this->properties);
		return $xml->asXML();
	}
	/**
	 * convert SimpleXMLElement tree to array
	 * @param SimpleXMLElement $xmlObject
	 * @param array $out
	 * @return array
	 */
	protected static function xml2array($xmlObject, $out = array())
	{
		foreach ((array) $xmlObject as $index => $node) {
			$out[$index] = (is_object($node)) ? self::xml2array($node) : $node;
		}
		return $out;
	}

	/**
	 * search in properties using xpath
	 * @param string $path xpath query
	 * @return array|boolean
	 */
	public function search($path){
		$xmlObject  = simplexml_load_string($this->getXML());
		$res = $xmlObject->xpath($path);
		if(count($res)) {
			return self::xml2array($res);
		}
		return false;
	}

}

/**
 * class to build json object trees from model path strings
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class UtilJson {
	private static $jsonReplaces = array (
			array (
					"\\",
					"/",
					"\n",
					"\t",
					"\r",
					'\b',
					"\f",
					'"'
			),
			array (
					'\\\\',
					'\\/',
					'\\n',
					'\\t',
					'\\r',
					'\\b',
					'\\f',
					'\"'
			)
	);

	/**
	 *
	 * @var Data_Array $data
	*/
	protected $data;

	/**
	 *
	 * @return void
	 */
	public function __construct($data = false) {
		$this->data = $data;
	}

	public function createVar($name, $newOperator = true, $default = true){
		return d3::variable($this, $name, $default, false, false);
	}

	public function has($name){
		return array_key_exists($name, $this->data);
	}

	/**
	 * returns json object tree
	 *
	 * @return mixed null string
	 */
	public function __toString() {
		return $this->toJSON ( $this->data );
	}

	/**
	 * @return Data_Array
	 */
	public function getData(){
	  return $this->data;  
	}
	
	/**
	 * - compensates some json_encode lacks
	 * - optimized to work with Data_Array for easy object tree building
	 *
	 * @param null|mixed $data
	 * @param bool $escape
	 * @return mixed null string
	 */
	protected function toJSON($data = null, $escape = true) {
		
	    if($data instanceof Closure){
			return (string) new UtilClosure ( $data );
		} elseif($data instanceof UtilRendererType){
			return $data;
		} elseif($data instanceof UtilFunctionStack){
			return $data;
		} elseif($data instanceof UtilJson){
			return $data;
		} elseif($data instanceof Date){
			return $data;
		} else if (is_bool ( $data ) and $data == false) {
			return 'false';
		} elseif (is_bool ( $data ) and $data === true) {
			return 'true';
		} elseif (is_null ( $data )) {
			return 'null';
		} elseif ($data instanceof UtilVar) {
			return ( string ) $data;
		} elseif (is_scalar ( $data )) {
			if (is_float ( $data )) {
				$data = str_replace ( ",", ".", strval ( $data ) );
			}
			if (is_string ( $data )) {
				if (is_numeric ( $data ) or is_bool ( $data )) {
					return str_replace ( self::$jsonReplaces [0], self::$jsonReplaces [1], $data );
				} elseif (false == $escape and ! strstr ( $data, "-" )) {
					return str_replace ( self::$jsonReplaces [0], self::$jsonReplaces [1], $data );
				} else {
					return '"' . str_replace ( self::$jsonReplaces [0], self::$jsonReplaces [1], $data ) . '"';
				}
			} else {
				return $data;
			}
		}

		$isList = true;
		for($i = 0, reset ( $data ); $i < count ( $data ); $i ++, next ( $data )) {
			if (is_numeric ( key ( $data ) )) {
			} elseif (key ( $data ) !== $i) {
				$isList = false;
				break;
			}
		}

		$result = array ();
		if ($isList) {
			foreach ( $data as $value ) {
			  if($value instanceof UtilJson) {
				$result [] = $this->toJSON ( $value->getData() );
			  } else {			    
				$result [] = $this->toJSON ( $value );
			  }
			}
			return '[' . join ( ',', $result ) . ']';
		} else {
			return $this->processList ( $data );
		}
	}
	protected function processList($data) {
		$result = array ();
		foreach ( $data as $key => $value ) {
			if (! empty ( $value )) {
				if ($key == 'listeners') {
					if (substr ( $value, 0, 1 ) == '"') {
						$value = substr ( $value, 1, - 1 );
					}
					$result [] = $this->toJSON ( $key, false ) . ':' . $this->toJSON ( $value, false );
				} else {
					$result [] = $this->toJSON ( $key, false ) . ':' . $this->toJSON ( $value );
				}
			}
		}
		return '{' . join ( ',', $result ) . '}';
	}
}


/**
 * reflect closure to extract its source code
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class UtilClosure {
	protected $closure = NULL;
	protected $reflection = NULL;
	protected $code = NULL;
	protected $used_variables = array ();

	protected static $search = array("\\\"",
			"->",
			".",
			"nvd3()",
			"d3()",
			"\$",
			"=>",
			"Math()",
			"console+",
			"@@@");

	protected static $replace = array (
			"\"",
			"@@@",
			"+",
			"nv",
			"d3",
			"",
			":",
			"Math",
			"console-",
			"."
	);

	public function __construct($function) {
		if (! $function instanceof Closure)
			throw new InvalidArgumentException ();
		$this->closure = $function;
		$this->reflection = new ReflectionFunction ( $function );
		$this->code = $this->_fetchCode ();
		$this->used_variables = $this->_fetchUsedVariables ();
	}

	public static function addSearchReplace($search, $replace) {
		self::$search[] = $search;
		self::$replace[] = $replace;
	}

	public function __invoke() {
		$args = func_get_args ();
		return $this->reflection->invokeArgs ( $args );
	}
	public function getClosure() {
		return $this->closure;
	}
	protected function _fetchCode() {
		// Open file and seek to the first line of the closure
		$file = new SplFileObject ( $this->reflection->getFileName () );
		$file->seek ( $this->reflection->getStartLine () - 1 );

		// Retrieve all of the lines that contain code for the closure
		$code = '';

		$s = '';
		while ( $file->key () < $this->reflection->getEndLine () ) {
			$s .= $file->current ();
			$file->next ();
		}

		if (preg_match ( '|o3\(array\(([^\)].*)\)\)|s', $s, $n )) {
			$s = str_replace ( $n[0], sprintf ( '{%s}', $n[1] ), $s );
		}
		elseif (preg_match ( '|obj\(array\(([^\)].*)\)\)|s', $s, $n )) {
			$s = str_replace ( $n[0], sprintf ( '{%s}', $n[1] ), $s );
		}
		
		$pattern = '#\{((?>[^\{\}]+)|(?R))*\}#';
		if (preg_match ( $pattern, $s, $m )) {
			if (preg_match ( '|array\(([^\)].*)\)|s', $m[0], $n )) {
				$s = str_replace ( $n[0], sprintf ( '[%s]', $n[1] ), $s );
			}
		}
		elseif (preg_match ( '|array\(([^\)].*)\)|s', $s, $m )) {
			$s = str_replace ( $m [0], sprintf ( '[%s]', $m [1] ), $s );
		}

		$code .= $s;


		// Only keep the code defining that closure
		$begin = strpos ( $code, 'function' );
		$end = strrpos ( $code, '}' );
		$code = substr ( $code, $begin, $end - $begin + 1 );
		$code = str_replace ( self::$search, self::$replace, $code );

		return $code;
	}
	public function getCode() {
		return $this->code;
	}
	public function __toString() {
		return (string)$this->code;
	}
	public function getParameters() {
		return $this->reflection->getParameters ();
	}
	protected function _fetchUsedVariables() {
		// Make sure the use construct is actually used
		$use_index = stripos ( $this->code, 'use' );
		if (! $use_index)
			return array ();
			
		// Get the names of the variables inside the use statement
		$begin = strpos ( $this->code, '(', $use_index ) + 1;
		$end = strpos ( $this->code, ')', $begin );
		$vars = explode ( ',', substr ( $this->code, $begin, $end - $begin ) );

		// Get the static variables of the function via reflection
		$static_vars = $this->reflection->getStaticVariables ();

		// Only keep the variables that appeared in both sets
		$used_vars = array ();
		foreach ( $vars as $var ) {
			$var = trim ( $var, ' $&amp;' );
			$used_vars [$var] = $static_vars [$var];
		}

		return $used_vars;
	}
	public function getUsedVariables() {
		return $this->used_variables;
	}
	public function __sleep() {
		return array (
				'code',
				'used_variables'
		);
	}
	public function __wakeup() {
		extract ( $this->used_variables );

		eval ( '$_function = ' . $this->code . ';' );
		if (isset ( $_function ) and $_function instanceof Closure) {
			$this->closure = $_function;
			$this->reflection = new ReflectionFunction ( $_function );
		} else
			throw new Exception ();
	}
}
/**
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class UtilVarStack {
	protected $stack = array ();
	protected $lines = false;
	protected $defaults = array ();
	public function __construct($lines = false) {
		$this->lines = $lines;
	}
	public function add(UtilVar $var, $default = false) {
		$this->stack [$var->getName ()] [] = $var;
		$this->defaults [$var->getName ()] [] = $default;
		return $this;
	}

	/**
	 * return array of variable names
	 */
	public function getVarNames() {
		return array_keys ( $this->stack );
	}
	public function __call($name, $params) {
		if (array_key_exists ( $name, $this->stack )) {
			return $this->stack [$name] [0];
		} else {
			throw new Exception ( "Missing name. $name does not exist in stack." );
		}
	}
	public function render() {
		$str = array ();
		foreach ( $this->stack as $key => $values ) {
			foreach ( $values as $index => $value ) {
				$d = $value->getData ();
				if ($d instanceof UtilRendererType) {
				} elseif ($d instanceof UtilStr) {
				} elseif (is_bool ( $d )) {
					return ($d ? 'true' : 'false');
				} elseif (is_string ( $d )) {
					$d = d3::escape ( $d );
				} elseif (gettype ( $d ) == "array") {
					$d = json_encode ( $d );
				} elseif (gettype ( $d ) == "object" and $d instanceof Closure) {
					$d = (string) new UtilClosure ( $d );
				} elseif (gettype ( $d ) == "object" and $d instanceof UtilVar) {
					$d = $value;
				} elseif (gettype ( $d ) == "object" and $d instanceof UtilJson) {
				} elseif (gettype ( $d ) == "object" and ! $d instanceof UtilRendererType) {
					$d = json_encode ( $d );
				}
				if ($index > 0) {
					$str [] = sprintf ( "%s", $d );
				} else {
					$str [] = sprintf ( "%s=%s", ($this->defaults [$key] [$index] ? 'var ' : '') . $key, $d );
				}
			}
		}
		if ($this->lines) {
			return sprintf ( "%s;%s", implode ( ";" . PHP_EOL . "  ", $str ), PHP_EOL );
		}
		return sprintf ( "var %s;%s", implode ( ",", $str ), PHP_EOL );
	}
	public function __toString() {
		return $this->render ();
	}
}
class UtilStack {
	protected $stack = array();
	protected $register = array();
	private static $instance;
	private function __construct() {}
	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new UtilStack;
		}
		return self::$instance;
	}

	protected function has($name){
		return array_key_exists($name, $this->register);
	}

	public function __get($name){

		if($this->has($name)){
			return $this->get($name);
		}
		throw new Exception($name . " does not exist.");
	}

	public function get($name){
		return $this->register[$name];
	}

	public function set($name, $value){
		$this->register[$name] = $value;
		return $this;
	}
	public function add($data){
		$this->stack[] = $data;
		return $this;
	}
	public function line(){
		$this->stack[] = PHP_EOL;
		return $this;
	}
	public function colon(){
		$this->stack[] = ";";
		return $this;
	}
	public function __toString() {
		$return = implode("", $this->stack);
		$this->stack = array();
		return $return;
	}
}
/**
 * build javascript variables
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class UtilVar extends ArrayObject
{
	protected $data;
	protected $name;
	protected $default = true;
	protected $const = false;
	protected $context;
	protected $newOperator = false;
	protected $enclose = false;
	protected $autoexec = false;

	public function __construct($data, $name = false, $default = true, $newoperator = false, $context="d3") {
		$this->data = $data;
		$this->name = $name;
		$this->default = $default;
		$this->context = $context;
		$this->newOperator = $newoperator;
	}
	public function getData() {
		if(func_num_args()==1){
			$arg = func_get_arg(0);
			if($this->data instanceof UtilJson and $this->data->has($arg)) {
				return $arg;
			}
			return false;
		}
		return $this->data;
	}

	public function toStack($name=null, $colon=false){
		if($name){
			stack()->set($name, $this);
			stack()->add(stack()->get($name));
			if($colon) stack()->add(";");
			stack()->line();
			return $this;
		}
		stack()->add($this);
		if($colon) stack()->add(";");
		return $this;
	}
	
	public function registerStack(){
	  stack()->set($this->getName(), $this);	   
	  return $this;
	}

	public function __get($name){
		return $this->getName().".".$this->getData($name);
	}
	public function __set($key, $value) {
		if($this->data instanceof UtilRendererType and empty($this->name)){
			$this->name = (string)$this->data.".".$key;
			$this->data = $value;
			$this->newOperator = false;
			$this->default = false;
		}
	}

	public function getName() {
		return $this->name;
	}
	public function unescape(){
		return UtilRenderer::unescape($this);
	}
	public function hasConstant() {
		return isset ( $this->const );
	}
	protected function setConstant($const) {
		$this->const = self::prepareConstant ( $const );
	}
	protected function prepareConstant($const) {
		switch ($const) {
			case d3::negative :
			case nvd3::negative :
				return '-';
		}
		return '';
	}
	public function getConstant() {
		return $this->const;
	}
	public function enclose(){
	  $this->enclose = true;
	  return $this;
	}
	public function autoexec(array $overload=null){
	  $this->autoexec = ($overload?$overload:true);
	  return $this;
	}
	public function get($context="d3") {
		return new $context( false, null, $this->name );
	}
	public function getVar($const = false, $context="d3") {
		if ($const and $const === constant ( $context."::$const" )) {
			$v = new UtilVar ( $this->name );
			$v->setConstant ( $const );
			return $v;
		}
		elseif ($const and $const === constant ( $const )) {
			$v = new UtilVar ( $this->name );
			$v->setConstant ( $const );
			return $v;
		}
		return new UtilVar ( $this->name );
	}
	public function newInstance(){
	  return new UtilStr(sprintf("new %s()", $this->data));
	}
	public function getFunction() {
		$v = new UtilVar ( $this->name );
		return $v . '();';
	}
	protected $stack = array();
	/**
	 * @param integer $lines
	 * @return UtilRenderer
	*/
	public function linebreak($lines=1){
		for($i=0;$i<$lines;$i++){
			$this->stack[] = PHP_EOL;
		}
		return $this;
	}
	/**
	 * @return UtilRenderer
	 */
	public function colon(){
		$this->stack[] = ";";
		return $this;
	}
	public function tab(){
		$this->stack[] = "\t";
		return $this;
	}

	public function __toString() {
		return $this->render ();
	}
	public function render() {
	   
		if ($this->name) {
			if($this->count()>0){
				$output = array();
				foreach($this->getIterator() as $key => $val){
					foreach($val as $k => $v){
						$output[] = sprintf('%s["%s"].%s=%s;', $this->name, $key, $k, $v);
					}
				}
				return implode(PHP_EOL, $output);
			} elseif($this->data instanceof UtilRendererType){
				$d = $this->data;
			} elseif ($this->data instanceof UtilJson) {
				$d = $this->data;
			} elseif (is_bool ( $this->data )) {
				$d = $this->data ? 'true' : 'false';
			} elseif (is_string ( $this->data )) {
				$d = d3::escape ( $this->data );
			} elseif (gettype ( $this->data ) == "array") {
				$d = json_encode ( $this->data );
			} elseif (gettype ( $this->data ) == "object" and $this->data instanceof Closure) {
				$d = (string) new UtilClosure ( $this->data );
			} elseif (gettype ( $this->data ) == "object" and $this->data instanceof UtilVar) {
				$d = $this->data;
			} elseif (gettype ( $this->data ) == "object" and $this->data instanceof UtilFor) {
				$d = $this->data;
			} elseif (gettype ( $this->data ) == "object" and $this->data instanceof UtilFunctionStack) {
				$d = $this->data;
			} elseif (gettype ( $this->data ) == "object") {
				$d = json_encode ( $this->data );
			}
				
			if (true == $this->default) {
			  if(true == $this->newOperator and !empty($this->data)){
					return sprintf ( "var %s=new %s;%s", str_replace ( '$', '', $this->name ), (empty ( $d ) ? $this->data : $d), PHP_EOL, PHP_EOL );
				} else {

					if(is_null($this->data)){
						return sprintf ( "var %s;", str_replace ( '$', '', $this->name ), (empty ( $d ) ? $this->data : $d), PHP_EOL );
					}
					return sprintf ( "var %s=%s;", str_replace ( '$', '', $this->name ), (empty ( $d ) ? $this->data : $d), PHP_EOL );
				}
			} else {
			  if($this->newOperator){
					return sprintf ( "%s=new %s", str_replace ( '$', '', $this->name ), $d );
				}
  			    if($this->autoexec){
				  return sprintf ( "(%s=%s)(%s);", str_replace ( '$', '', $this->name ), $d, (is_array($this->autoexec)?implode(", ", $this->autoexec):"") );  			      
			    }
				return sprintf ( "%s=%s", str_replace ( '$', '', $this->name ), $d );
			}

		}

		if (gettype ( $this->data ) == "object" and $this->data instanceof Closure) {
			$s = (string)new UtilClosure ( $this->data );
			if($this->enclose){
				return sprintf('(%s)', $s.implode("", $this->stack));
			}
			return $s.implode("", $this->stack);
		}

		if ($this->const) {
			// returns negative var name
		    if($this->enclose){
		  	  return sprintf('(%s)', $this->const . $this->data.implode("", $this->stack));
		    }
			return $this->const . $this->data.implode("", $this->stack);
		}
				
        if($this->enclose){
          return sprintf('(%s)', ($this->newOperator?"new ":"").$this->data.implode("", $this->stack));          
        }
		return $this->data.implode("", $this->stack);
	}

}
class UtilFunctionStack {
	protected $properties = array ();
	protected $afterstack = array();
	protected $stack = array();
	protected $isReturnable = false;
	protected $innerReturn = false;
	protected $isNamed = false;
	protected $autoexec = false;
	public function __construct() {
		if (func_num_args ()) {
			$args = func_get_args();
			foreach ( $args as $arg ) {
				if (is_string ( $arg )) {
					$n = str_replace ( '$', "", $arg );
					$this->properties [$n] = new UtilVar ( null, $n );
				} else {
					$this->properties [$arg] = new UtilVar ( null, $arg );
				}
			}
		}
	}
	public function createVar($name, $default = false){
		return d3::variable($this, $name, $default, false);
	}	
	public function linebreak(){
		$this->afterstack[] = PHP_EOL;
		return $this;
	}
	public function colon($linebreak=false){
		$this->afterstack[] = ";";
		if($linebreak) $this->linebreak();
		return $this;
	}
	public function getName(){
		return $this->isNamed;
	}
	public function getVar($name=null){
		if(array_key_exists($name, $this->properties)) {
			return d3::unescape( $this->properties[$name]->getName() );
		} else {
			return d3::variable($this, $name?$name:$this->isNamed);
		}
		return false;
	}
	public function autoexec(){
	  $this->autoexec = true;
	  return $this;
	}
	public function toStack($name=null, $colon=false){
		if($name){
			stack()->set($name, $this);
			stack()->add(stack()->get($name));
			if($colon) stack()->add(";");
			stack()->line();
			return $this;
		}
		stack()->add($this);
		if($colon) stack()->add(";");
		return $this;
	}
	
	public function __call($name, $params) {
		if (array_key_exists ( $name, $this->properties )) {
			return $this->properties [$name];
		} else {
			throw new Exception ( "Missing name. $name does not exist in stack." );
		}
	}
	public function add($data) {
		if (is_object ( $data ) and method_exists ( $data, "render" )) {
			$string = $data->render ();
		} else {
		    if(is_array($data)){
		      $string = new UtilJson($data);
		    } else {
			  $string = ( string ) $data;
		    }
		}

		$d = explode ( PHP_EOL, $string );
		if(count($d)>1){
			array_unshift ( $d, "" );
		}
		foreach( $d as $k => $line ) {
			$d[$k] = "  " . $line;
		}
		$this->stack[] = implode( PHP_EOL, $d );
		return $this;
	}
	public function name($name){
		$this->isNamed = $name;
		return $this;
	}
	public function isReturnable(){
		$this->isReturnable = true;
		return $this;
	}
	public function getReturn(){
      $this->innerReturn = true;
	  return $this;
	}
	
	protected function render(){
	  if($this->autoexec){
	  	echo "###################";
	  }
	   
	  $prestack = array();
	  $innerstack = '';
	  $innercolon = '';
	  if($this->innerReturn){	    
        $innerstack = "return";
        $innercolon = ";";
	  }	 else {  
	    $prestack[] = $this->isNamed ? sprintf('function %s(', $this->isNamed) : 'function(';
	  }
	  $stack = array(implode ( "", $prestack ) . implode ( ", ", array_keys ( $this->properties ) ) . '){', $innerstack);
	  $stack = array_merge($stack, $this->stack);
	  $stack [] = $innercolon.'}'.implode ( "", $this->afterstack );
	  return ($this->isReturnable?"return ":"") . implode ( PHP_EOL, $stack );
	}
	
	public function __toString() {
	  return $this->render();
	}
}
class UtilFunction {
  protected $name;
  protected $stack = array();
  
  public function __construct(){
    if(func_num_args()==1){      
      $args = func_get_args();
      $args = array_shift($args);
      $this->name = array_shift($args);
      $this->stack = $args;
    }
  }
  
  public function toStack($name=null, $colon=false){
  	if($name){
  		stack()->set($name, $this);
  		stack()->add(stack()->get($name));
  		if($colon) stack()->add(";");
  		stack()->line();
  		return $this;
  	}
  	stack()->add($this);
  	if($colon) stack()->add(";");
  	return $this;
  }
  
  public function __toString(){
    return sprintf('%s(%s)', $this->name, implode(", ", $this->stack));
  }
}
class UtilStr {
	protected $val;
	public function __construct($val) {
		$this->val = $val;
	}
	public function __toString() {
		return $this->val;
	}
}
class UtilFor {
	protected $var;
	protected $obj;
	protected $stack;
	public function __construct($var, $obj) {
		$this->var = new UtilVar ( null, $var );
		$this->obj = new UtilVar ( null, $obj );
		$this->stack = new UtilVarStack ( true );
	}
	public function add($key, $value = null, $default = false) {
		$this->stack->add ( new UtilVar ( $value, $key, $default ), $default );
		return $this;
	}
	public function getVar() {
		return $this->var->getVar ();
	}
	public function getValue() {
		return sprintf ( "%s[%s]", $this->obj->getVar (), $this->var->getVar () );
	}
	public function __toString() {
		return sprintf ( 'for(var %s in %s){%s%s};', $this->var->getVar (), $this->obj->getVar (), PHP_EOL . "  ", ( string ) $this->stack );
	}
}
/**
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class UtilRenderer {
	const negative = "negative";
	const property = "property";
	protected $context;
	public $colon = true;
	protected $unescaping = false;
	protected $escaping = false;
	protected $stack = array ();
	protected $which;

	protected static $search = array();
	protected static $replace = array();

	/**
	 * escapes a string
	 *
	 * @param string $name
	 * @return stirng
	*/
	public static function escape($name) {
		return sprintf ( '"%s"', $name );
	}
	/**
	 * @param string $name
	 * @return string
	 */
	public static function returns($name) {
		return sprintf ( 'return %s', $name );
	}

	public static function ternary($test, $success, $default){
		return d3::unescape( sprintf('%s?%s:%s', new UtilVar($test), $success, $default) );
	}

	/**
	 * convert php source string to js
	 *
	 * @param string $name
	 * @return UtilVar
	 */
	public static function unescape($name) {
		if (func_num_args()==1){
			return new UtilVar(str_replace(self::$search, self::$replace, $name));
		} else {
			$a = func_get_args();
			$names = '';
			foreach($a as $k => $v){
				$names.= d3::unescape($v);
			}
			return new UtilVar(str_replace(self::$search, self::$replace, $names));
		}
	}

	public static function consolelog($var){
		return d3::unescape("console.log($var)");
	}

    public function jsfunc(){
      $args = func_get_args();
      $r = new ReflectionClass("UtilFunction");
      $inst = $r->newInstance($args);
      return $inst;      
    }
	/**
	 * setup js variable
	 *
	 * @param mixed $value
	 * @param string $name
	 * @return UtilVar
	 */
	public static function variable($value, $name = null, $default = true, $newOperator = false, $context="d3") {
		return new UtilVar ( $value, $name, $default, $newOperator, $context);
	}

	public static function concat(){
		$a = func_get_args();
		$names = '';
		foreach($a as $k => $v){
			$names.= d3::unescape($v);
		}
		return new UtilVar(str_replace(self::$search, self::$replace, $names));
	}

	public static function minus(){
		$a = func_get_args();
		return self::mathoperation($a, "-");
	}
	public static function plus(){
		$a = func_get_args();
		return self::mathoperation($a, "+");
	}
	public static function multiply(){
		$a = func_get_args();
		return self::mathoperation($a, "*");
	}
	public static function divide(){
		$a = func_get_args();
		return self::mathoperation($a, "/");
	}

	protected static function mathoperation($data, $op="-"){
		$names = array();
		foreach($data as $k => $v){
			$names[] = d3::unescape($v);
		}
		return new UtilVar(str_replace(self::$search, self::$replace, implode($op, $names)));
	}

	public function trycatch($code, $exception){
	  return UtilHelper::trycatch($code, $exception);
	}
	
	/**
	 *
	 * @param array $values
	 *        	array("w" => 200, "h" => 400)
	 * @return UtilVarStack
	 */
	public static function variables(array $values) {
		$stack = new UtilVarStack ();
		foreach ( $values as $key => $value ) {
			$stack->add ( new UtilVar ( $value, $key, false ), false, false );
		}
		return $stack;
	}

	public function createVar($name, $newOperator = false, $default = true){
		return self::variable($this, $name, $default, $newOperator, $this->context);
	}

	public function assignValue($data){
		return self::variable($data, $this->name, false, false);
	}

	public static function str($value) {
		return new UtilStr ( $value );
	}

	/**
	 * init function writer
	 *
	 * @throws InvalidArgumentException
	 * @throws Exception
	 * @return UtilFunctionStack
	 */
	public static function F() {
		if (func_num_args ()) {
			$args = func_get_args ();
			$rc = new ReflectionClass ( 'UtilFunctionStack' );
			return $rc->newInstanceArgs ( $args );
		}
		return new UtilFunctionStack ();
	}
	public static function loop($var, $obj) {
		return new UtilFor ( $var, $obj );
	}
	/**
	 * put data to stack
	 *
	 * @param
	 *        	$value
	 */
	protected function add($value, $dot=true, $linebreak=false, $pad=false) {
		if($dot and count($this->stack)>0){
			$this->stack[] = ($linebreak?PHP_EOL:"").'.';
		} else {
			if($pad){
				$this->stack[] = ' ';
			}
		}
		$this->stack[] = self::unescape ( $value );
	}
	/**
	 * @param integer $lines
	 * @return UtilRenderer
	 */
	public function linebreak($lines=1){
		for($i=0;$i<$lines;$i++){
			$this->stack[] = PHP_EOL;
		}
		return $this;
	}
	/**
	 * @return UtilRenderer
	 */
	public function colon($linebreaks=0){
		$this->stack[] = ";";
		if($linebreaks>0)
			$this->linebreak($linebreaks);
		return $this;
	}
	/**
	 * @return UtilRenderer
	 */
	public function tab($n=1){
		for($i=0;$i<$n;$i++){
			$this->stack[] = "  ";
		}
		return $this;
	}
	/**
	 * @param unknown_type $type
	 * @return UtilRenderType
	 */
	public static function js($type){
		return self::variable("", $type)->get();
	}
	/**
	 * convenience function for returning a variable's left and right side
	 * @param string $name
	 * @return UtilVar
	 */
	public function returnVar($name=null){
		return self::variable($this, ($this->isNamed ? $this->isNamed : $name));
	}
	/**
	 * @return UtilRenderer
	 */
	public function toStack($name=null, $colon=false){
		if($name){
			stack()->set($name, $this);
			stack()->add(stack()->get($name));
			if($colon) stack()->add(";");
			stack()->line();
			return $this;
		}
		stack()->add($this);
		if($colon) stack()->add(";");
		return $this;
	}

	/**
	 * @param string $name
	 * @param mixed $params
	 * @throws InvalidArgumentException
	 * @throws Exception
	 */
	public function __call($name, $params){
		$args = func_get_args();
		return call_user_func_array(array($this, "processor"), $args);
	}

	protected function processor($name, $params) {

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
				$params[$key] = str_replace( $this->closureSearch, $this->closureReplace, $s );
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
		return $str . ($this->colon ? PHP_EOL : "");
	}

}


/**
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class Date {
	protected $y, $m, $d, $h, $n, $s;
	public function __construct($y, $m, $d, $h = null, $n = null, $s = null){
		$this->y = $y;
		$this->m = $m;
		$this->d = $d;
		$this->h = $h;
		$this->n = $n;
		$this->s = $s;
	}

	private function __getDate(){
		if($this->y and $this->m and $this->d and $this->h and $this->m and $this->s) {
			return array($this->y, $this->m, $this->d, $this->h, $this->m, $this->s);
		} elseif($this->y and $this->m and $this->d and $this->h and $this->m) {
			return array($this->y, $this->m, $this->d, $this->h, $this->m);
		} elseif($this->y and $this->m and $this->d and $this->h) {
			return array($this->y, $this->m, $this->d, $this->h);
		} elseif($this->y and $this->m and $this->d) {
			return array($this->y, $this->m, $this->d);
		} elseif ($this->y and $this->m and $this->d) {
			return array($this->y, $this->m, $this->d);
		} elseif ($this->y and $this->m) {
			return array($this->y, $this->m);
		} elseif ($this->y) {
			return array($this->y);
		}
		return date("Y");
	}

	public function __toString(){
		return sprintf('new Date(%s)', implode(", ", $this->__getDate()));
	}
}
/**
 * 
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 *
 */
class Math {

	const negative = "negative";
	const property = "property";

	private $constants = array(
			"PI", "E", "LN10", "LN2", "LOG10E", "LOG2E", "SQRT1_2", "SQRT2"
	);

	private $stack = array();
	private $constant = false;

	public $colon = false;
	protected $unescaping = false;
	protected $escaping = false;

	protected static $search = array();
	protected static $replace = array();

	public function __construct(){
		$this->stack[] = 'Math';
	}
	/**
	 * put data to stack
	 * @param $value
	 */
	/**
	 * escapes a string
	 *
	 * @param string $name
	 * @return stirng
	 */
	public static function escape($name) {
		return sprintf ( '"%s"', $name );
	}
	/**
	 * @param string $name
	 * @return string
	 */
	public static function returns($name) {
		return sprintf ( 'return %s', $name );
	}

	/**
	 * convert php source string to js
	 *
	 * @param string $name
	 * @return UtilVar
	 */
	public static function unescape($name) {
		return new UtilVar(str_replace(self::$search, self::$replace, $name));
	}

	protected function add($value, $dot=true, $linebreak=false, $pad=false) {
		if($dot and count($this->stack)>0){
			$this->stack[] = ($linebreak?PHP_EOL:"").'.';
		} else {
			if($pad){
				$this->stack[] = ' ';
			}
		}
		$this->stack[] = self::unescape ( $value );
	}

	public function __get($name){
		if(in_array($name, $this->constants) and false==$this->constant){
			$this->stack[] = $name;
			$this->constant = true;
		}
	}

	public function __call($name, $params) {

		if (isset ( $params [0] ) and $params [0] === d3::property) {
			$this->add ( sprintf ( "%s", $name ) );
			return $this;
		}
		elseif (in_array($name, array("unescaping", "escaping", "unesc", "esc") ) ) {
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
					$params [$key] = d3::escape ( $val );
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
				$params[$key] = (string) new UtilClosure ( $val );
			} elseif (gettype ( $val ) == "object" and $val instanceof UtilVar) {
				$params [$key] = $val;
			}
		}
		$this->add( sprintf( "%s(%s)", $name, implode ( ",", $params ) ), true, false );
		return $this;
	}

	public function __toString(){
		if($this->constant){
			return implode(".", $this->stack);
		}

		$str = array_shift ( $this->stack );
		$str .= implode ("", $this->stack );
		if (!stristr ( $str, ";" ) and $this->colon){
			$str .= ';';
		}
		return $str . ($this->colon ? PHP_EOL : "");
	}
}
/**
 * @return d3Math
 */
function Math(){
	return new Math;
}
/**
 * 
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class XMLSerializer extends UtilRenderer {
	/**
	 *
	 * @param bool $colon
	 * @param UtilVar $obj
	 */
	public function __construct($colon = true, $escape = true, $name = false) {
		$this->colon = $colon;
		if ($name) {
			$this->add( $name );
		} else {
			if($escape)
				$this->add( '(new '. get_class ( $this ) . ')' );
			else
				$this->add( get_class ( $this ));
		}
	}
	/**
	 * finally render xmlserialize js source
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
function XMLSerializer(){
	return new XMLSerializer();
}


/**
 * short cut
 *
 * @return UtilFunctionStack
 */
function f3($def = "") {
	$args = func_get_args ();
	$rc = new ReflectionClass ( 'UtilFunctionStack' );
	return $rc->newInstanceArgs ( $args );
  }

function o3($data) {
	return new UtilJson ( $data );
}
function stack(){
	return UtilStack::getInstance();
}


if(!function_exists("func")) {
	function func($def="") {
		$args = func_get_args ();
		$rc = new ReflectionClass ( 'UtilFunctionStack' );
		return $rc->newInstanceArgs ( $args );
	}
}
if(!function_exists("obj")) {
	function obj($data) {
		return new UtilJson($data);
	}
}

/**
 * 
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class document extends UtilRenderer implements UtilRendererType {

	protected static $search = array(
			"document()",
			"\$",
			"->"
	);

	protected static $replace = array (
			"document",
			"",
			"."
	);

	protected $closureSearch = array (
			"\\\"",
			".",
			"document()",
			"\$",
			"->",
			"=>",
			"Math()",
			"console+"
	);

	protected $closureReplace = array (
			"\"",
			"+",
			"document",
			"",
			".",
			":",
			"Math",
			"console-"
	);

	/**
	 *
	 * @param bool $colon
	 * @param UtilVar $obj
	*/
	public function __construct($colon = true, $obj = null, $name = false) {
		$this->colon = $colon;
		if ($name) {
			$this->add( $name );
		} else if ($obj and $obj instanceof UtilVar) {
			$this->add( $obj->getData () );
		} elseif ($obj and is_string ( $obj )) {
			$this->add( $obj );
		} else {
			$this->add( get_class ( $this ) );
		}
	}

	/**
	 * @return UtilVar
	 */
	public function createVar($name, $newOperator = true, $default = true){
		return self::variable($this, $name, $default, $newOperator);
	}

}

/**
 * short cut function
 *
 * @param bool $colon
 * @return document_autocompleter
 */
function document($colon = false) {
	return new document($colon);
}


class console extends UtilRenderer implements UtilRendererType {
	protected static $search = array(
			"console()",
			"\$",
			"->"
	);

	protected static $replace = array (
			"console",
			"",
			"."
	);

	protected $closureSearch = array (
			"\\\"",
			".",
			"console()",
			"\$",
			"->",
			"=>",
			"Math()",
			"console+"
	);

	protected $closureReplace = array (
			"\"",
			"+",
			"console",
			"",
			".",
			":",
			"Math",
			"console-"
	);

	/**
	 *
	 * @param bool $colon
	 * @param UtilVar $obj
	*/
	public function __construct($colon = true, $obj = null, $name = false) {
		$this->colon = $colon;
		if ($name) {
			$this->add( $name );
		} else if ($obj and $obj instanceof UtilVar) {
			$this->add( $obj->getData () );
		} elseif ($obj and is_string ( $obj )) {
			$this->add( $obj );
		} else {
			$this->add( get_class ( $this ) );
		}
	}
	/**
	 * (non-PHPdoc)
	 * @see UtilRenderer::log()
	 */
	public function log(){
		$args = func_get_args();
		$this->processor(__FUNCTION__, $args);
		return $this;
	}

	/**
	 * @return UtilVar
	 */
	public function createVar($name, $newOperator = true, $default = true){
		return self::variable($this, $name, $default, $newOperator);
	}

}
/**
 * @return console
 */
function console() {
	return new console(true);
}

/**
 *
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class window extends UtilRenderer implements UtilRendererType {

	protected static $search = array(
			"window()",
			"\$",
			"->"
	);

	protected static $replace = array (
			"window",
			"",
			"."
	);

	protected $closureSearch = array (
			"\\\"",
			".",
			"window()",
			"\$",
			"->",
			"=>",
			"Math()",
			"console+"
	);

	protected $closureReplace = array (
			"\"",
			"+",
			"window",
			"",
			".",
			":",
			"Math",
			"console-"
	);

	/**
	 *
	 * @param bool $colon
	 * @param UtilVar $obj
	*/
	public function __construct($colon = true, $obj = null, $name = false) {
		$this->colon = $colon;
		if ($name) {
			$this->add( $name );
		} else if ($obj and $obj instanceof UtilVar) {
			$this->add( $obj->getData () );
		} elseif ($obj and is_string ( $obj )) {
			$this->add( $obj );
		} else {
			$this->add( get_class ( $this ) );
		}
	}

	/**
	 * @return UtilVar
	 */
	public function createVar($name, $newOperator = true, $default = true){
		return self::variable($this, $name, $default, $newOperator);
	}

}

/**
 * short cut function
 *
 * @param bool $colon
 * @return window_autocompleter
 */
function window($colon = false) {
	return new window($colon);
}


/**
 *
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class f extends UtilRenderer implements UtilRendererType {

	protected static $search = array(
			"Function()",
			"\$",
			"->"
	);

	protected static $replace = array (
			"Function",
			"",
			"."
	);

	protected $closureSearch = array (
			"\\\"",
			".",
			"Function()",
			"\$",
			"->",
			"=>",
			"Math()",
			"console+"
	);

	protected $closureReplace = array (
			"\"",
			"+",
			"Function",
			"",
			".",
			":",
			"Math",
			"console-"
	);

	public function __construct($name = false, $obj = null, $colon = false) {
		
	    UtilClosure::addSearchReplace("Function()", "Function");
		$this->which = new UtilArray();
		$this->which->setProperties(array());
		$this->context = "Function";
		$this->colon = $colon;
		if ($name) {
			if($name instanceof UtilRendererType){
				$this->add(sprintf('Function(%s)', $name));
			} elseif(is_string($name)){
				$this->add(sprintf('Function(%s)', self::escape($name)));				
			} elseif(is_array($name)){
				$this->add(sprintf('Function(%s)', implode(",", $name)));				
			} else {
				$this->add( $name );
			}			
		} else if ($obj and $obj instanceof UtilVar) {
			$this->add( $obj->getData () );
		} elseif ($obj and is_string ( $obj )) {
			$this->add( $obj );
		} else {
			$this->add( "Function" );
		}
	}
	
	/**
	 * @return UtilVar
	 */
	public function createVar($name, $newOperator = true, $default = true){
		return self::variable($this, $name, $default, $newOperator);
	}

}

/**
 * short cut function
 *
 * @param bool $colon
 * @return Function_autocompleter
 */
function f($name = null, $colon = false) {
	return new f($name, $colon);
}
