<?php 


if(!class_exists("d3")){
  throw new Exception("d3 library is missing. @see http://www.phpclasses.org/package/7801-PHP-Output-charts-using-D3-js-JavaScript-library.html");
}


/**
 * jquery source writer class
 * @author tschaefer
 */
class jquery extends UtilRenderer implements UtilRendererType {
	
	protected static $APIKEY = "";
		
	protected $namespaces = array(
			"visualization" => true,
			"maps" => true,
	);
	
	protected static $search = array(
		"jquery()",
		"\$",
		"->"
	);
	
	protected static $replace = array (
		"jQuery",
		"",
		"."
	);
		
	/**
	 *
	 * @param bool $colon        	
	 * @param UtilVar $obj        	
	 */
	public function __construct($name = false, $obj = null, $colon = true) {
		UtilClosure::addSearchReplace("jquery()", "jQuery");
		
		$this->colon = $colon;
		if ($name) {
			if($name instanceof UtilRendererType){
				$this->add(sprintf('jQuery(%s)', $name));
			} elseif(is_string($name)){
				$this->add(sprintf('jQuery(%s)', self::escape($name)));				
			} else {
				$this->add( $name );
			}
		} else if ($obj and $obj instanceof UtilVar) {
			$this->add( $obj->getData () );
		} elseif ($obj and is_string ( $obj )) {
			$this->add( $obj );
		} else {
			$this->add( "jQuery" );
		}
	}

	
	/**
	 * @return jqueryOptions
	 */
	public static function options(){
		return new jquery_options();
	}
	
	
	/**
	 * @param string $name
	 * @return jquery_autocompleter
	 */
	public function __get($name) {
		if(array_key_exists($name, $this->namespaces)){
			$this->which = $name;
			return $this->{$name}(self::property);
		}
		return $this;
	}
	
	/**
	 * jquery lib
	 * @return string
	 */
	public static function script($which=null){
		$which = !$which ? 1 : $which;
		switch ($which){
			case 1:
				return sprintf('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>')."\n";		
		}
	}
	
	protected static $noConflict = false;
	
	public function __call($name, $params){
		if($name=='noConflict'){
			self::$noConflict = true;
		}
		return parent::__call($name, $params);
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
		if(!self::$noConflict){			
			return str_replace("jQuery", '$', $str) . ($this->colon ? PHP_EOL : "");
		}
		return $str . ($this->colon ? PHP_EOL : "");
	}
	
	
}


class jquery_options extends UtilRenderer {

	protected $namespaces = array(
	);
	
	private $dataArray;
	
	protected $path = array();
	protected $depth = 0;
		
	public function __construct(){
		$this->dataArray = new UtilArray();
	}
	
	/**
	 * @param string $name
	 */
	public function __get($name) {
		if(array_key_exists($name, $this->namespaces)){
			return $this->{$name}(self::property);
		}
		
		$this->path[] = $name;
		$this->depth++;

		return $this;
	}
	
	public function __set($name, $value){
		$this->dataArray->set(implode("/", $this->path) . "/" .$name, $value);
		$this->path = array();
		$this->depth = 0;
		return $this;
	}
	
	
	public function __toString() {
		$data = $this->dataArray->getAll();
		if(!count($data)){
			return (string) json_encode(new stdclass);
		}
		return (string) new UtilJson($data);
	}
}


/**
 * short cut function
 * @param jquery $obj        	
 * @return jquery_autocompleter
 */
function jquery($obj=null) {
	return new jquery($obj);
}

if(!function_exists("func")) {
function func($def="") {
	if (func_num_args ()) {
		$args = func_get_args ();
		$rc = new ReflectionClass ( 'UtilFunctionStack' );
		return $rc->newInstanceArgs ( $args );
	}
	return jquery::F( $def );
}
}
if(!function_exists("obj")) {
function obj($data) {
	return new UtilJson($data);
}
}
