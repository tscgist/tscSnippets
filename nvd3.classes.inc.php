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


if(!class_exists("d3")){
  throw new Exception("d3 library is missing. @see http://www.phpclasses.org/package/7801-PHP-Output-charts-using-D3-js-JavaScript-library.html");
}

class nvd3 extends d3 {
	
	protected $context="nvd3";
	public $domain = 'http://nvd3.org/';
	protected $namespaces = array(
			"models" => true,
	);
	protected $which;
	
	protected $plugins = array(
		"axis" => "models/axis",
		"bullet" => "models/bullet",
		"bulletChart" => "models/bulletChart",
		"cumulativeLine" => "models/cumulativeLine",
		"cumulativeLineChart" => "models/cumulativeLineHart",
		"discreteBar" => "models/discreteBar",
		"discreteBarChart" => "models/discreteBarChart",
		"historicalBar" => "models/historicalBar",
		"indentedTree" => "models/indentedTree",
		"legend" => "models/legend",
		"line" => "models/line",
		"line" => "models/lineChart",
		"linePlusBarChart" => "models/linePlusBarChart",
		"linePlusBarWithFocusChart" => "models/linePlusBarWithFocusChart",
		"multiBar" => "models/multiBar",
		"multiBarChart" => "models/multiBarChart",
		"multiBarTimeSeries" => "models/multiBarTimeSeries",
		"multiBarTimeSeriesChart" => "models/multiBarTimeSeriesChart",
		"multiBarHorizontal" => "models/multiBarHorizontal",
		"multiChart" => "models/multiChart",
		"ohlcBar" => "models/ohlcBar",
		"pie" => "models/pie",
		"pieChart" => "models/pieChart",
		"scatter" => "models/scatter",
		"scatterChart" => "models/scatterChart",
		"scatterPlusLineChart" => "models/scatterPlusLineChart",
		"sparkline" => "models/sparkline",
		"sparklinePlus" => "models/sparklinePlus",
		"stackedArea" => "models/stackedArea",
		"stackedAreaChart" => "models/stackedAreaChart",
		"tooltip" => "tooltip",
		"utils" => "utils",
	);
	
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
			$this->add ( "nv" );
		}
	}
	
	public static function script($isLocal=true){
		$nv = nvd3();
		$d3Domain = null;
		if(class_exists("config") and config::has("nvd3.library.path")){			
			$path = config::has("nvd3.library.path");
			$nv->setDomain(config::get("nvd3.webpath"));
			$d3Domain = config::get("d3.webpath"); 
		} 
		elseif($isLocal){
			$path = dirname(dirname(dirname($_SERVER["REQUEST_URI"])));
			$nv->setDomain("http://".$_SERVER["SERVER_NAME"]. $path . "/nvd3-master/" );
			$d3Domain = "http://".$_SERVER["SERVER_NAME"]. $path . "/d3-master/"; 
		} 
		$str = d3::script(2, $d3Domain);
		$str .= '<link href="'.$nv->getDomain().'src/nv.d3.css" rel="stylesheet" type="text/css">'."\n";
		return $str.'<script src="'.$nv->getDomain().'nv.d3.js"></script>'."\n";
	}
	
	public function setDomain($domain){
		$this->domain = $domain;
		return $this;
	}
	
	public function getDomain(){
		return $this->domain;
	}	

	public function getPlugin($name, $isLocal=true, $pluginBase="src/"){
		$d3Domain = null;
		if(class_exists("config") and config::has("nvd3.library.path")){			
			$path = config::has("nvd3.library.path");
			$this->setDomain(config::get("nvd3.webpath"));
			$d3Domain = config::get("d3.webpath"); 
		} 
		elseif($isLocal){
			$path = dirname(dirname(dirname($_SERVER["REQUEST_URI"])));
			$this->setDomain("http://".$_SERVER["SERVER_NAME"]. $path . "/nvd3-master/" );
			$d3Domain = "http://".$_SERVER["SERVER_NAME"]. $path . "/d3-master/"; 
		} 
		$plugin = array_key_exists($name, $this->plugins) ? $this->plugins[$name]: false;
		if(!$plugin) return "";
		return $this->getDomain() . $pluginBase . $plugin . ".js";
	}
	
	public function plugin($name){		
		$plugin = array_key_exists($name, $this->plugins) ? $this->plugins[$name]: false;
		if(!$plugin) return "";
		return '<script src="'.$this->getDomain() . $plugin.'.js"></script>'."\n";		
	}
	
	public function plugins($names){
		$plugins = array();
		foreach($names as $name){
			$plugins[] = $this->plugin($name);
		}		
		return implode("", $plugins);
	}
	
	public static function js($type){
		return d3::variable("", $type)->get();
	}
	
	/**
	 * @param string $name
	 * @return $this
	 */
	public function __get($name) {
		if(array_key_exists($name, $this->namespaces)){
			$this->which = $name;
			return $this->{$name}(self::property);
		}
		return $this;
	}
	/**
	 * resolves each nv function
	 * @see http://mbostock.github.com/d3
	 * @param string $name
	 * @param mixed $params
	 * @throws InvalidArgumentException
	 * @throws Exception
	 * @return nvAutoCompletion
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
				$s = new UtilClosure ( $val );
				$params [$key] = str_replace ( array (
						"\\\"",
						".",
						"nvd3()",
						"\$",
						"->",
						"Math()",
						"console+"
				), array (
						"\"",
						"+",
						"nv",
						"",
						".",
						"Math",
						"console-"
				), $s );
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
	
	public function returnVar($name){
		return d3::variable($this, $name);
	}
	
	/**
	 * finally render nv js source
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


function nvd3(){
	return new nvd3();
}


