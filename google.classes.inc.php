<?php 


if(!class_exists("d3")){
  throw new Exception("d3 library is missing. @see http://www.phpclasses.org/package/7801-PHP-Output-charts-using-D3-js-JavaScript-library.html");
}


/**
 * google source writer class
 * @author tschaefer
 */
class google extends UtilRenderer implements UtilRendererType {
	
	protected static $APIKEY = "";
		
	protected $namespaces = array(
			"visualization" => true,
			"maps" => true,
	);
	
	protected static $search = array(
		"google()",
		"\$",
		"->"
	);
	
	protected static $replace = array (
		"google",
		"",
		"."
	);
		
	/**
	 *
	 * @param bool $colon        	
	 * @param UtilVar $obj        	
	 */
	public function __construct($colon = true, $obj = null, $name = false) {
		UtilClosure::addSearchReplace("google()", "google");
		
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
	 * @return GoogleOptions
	 */
	public static function options(){
		return new google_options();
	}
	
	
	/**
	 * @param string $name
	 * @return google_visualization
	 */
	public function __get($name) {
		if(array_key_exists($name, $this->namespaces)){
			$this->which = $name;
			return $this->{$name}(self::property);
		}
		return $this;
	}
	
	/**
	 * google lib
	 * @return string
	 */
	public static function script($which=null){
		$which = !$which ? 1 : $which;
		switch ($which){
			case "visualization";
			case 1:
				return sprintf('<script src="//www.google.com/jsapi"></script>')."\n";		
			case "maps":
			case 2:
				return sprintf('<script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>')."\n";				
		}
	}
	
}


class google_options extends UtilRenderer {

	protected $namespaces = array(
		"AnnotatedTimeline" => true,
		"Areachart" => true,
		"Barchart" => true,
		"Bubblechart" => true,		
		"Candlestickchart" => true,		
		"Columnchart" => true,		
		"Combochart" => true,		
		"Gaugechart" => true,		
		"Geochart" => true,		
		"Linechart" => true,		
		"Piechart" => true,		
		"Scatterchart" => true,		
		"SteppedAreachart" => true,		
		"Tablechart" => true,		
		"TreeMapchart" => true,		
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
 * @param bool $colon
 * @param google $obj        	
 * @return google_base
 */
function google($colon = false, $obj=null) {
	return new google($colon, $obj);
}

if(!function_exists("func")) {
function func($def="") {
	if (func_num_args ()) {
		$args = func_get_args ();
		$rc = new ReflectionClass ( 'UtilFunctionStack' );
		return $rc->newInstanceArgs ( $args );
	}
	return google::F( $def );
}
}
if(!function_exists("obj")) {
function obj($data) {
	return new UtilJson($data);
}
}
