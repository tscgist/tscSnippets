<?php 
/**
 * @see http://www.wunderground.com/weather/api/
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
interface wundergroundWeatherAPI {
	/**
	 * @return string
	 */
	public function getApplicationString();
}

interface wundergroundWeatherDateAPI {}

/**
 * wunderground weather api base class 
 * @author tschaefer
 *
 */
abstract class WundergroundWeatherAbstract implements wundergroundWeatherAPI {
	public static $iso2wgrcode = array(
		"AF" => "AH",
		"AL" => "AB",
		"DZ" => "AL",
		"AS" => "AS",
		"AD" => "AD",
		"AO" => "AN",
		"AI" => "A1",
		"AQ" => "AA",
		"AG" => "AT",
		"AR" => "AG",
		"AM" => "AM",
		"AW" => "AW",
		"AU" => "AU",
		"AU" => "AU",
		"AT" => "OS",
		"AZ" => "A2",
		"BS" => "BS",
		"BH" => "BN",
		"BD" => "BW",
		"BB" => "BR",
		"BY" => "BY",
		"BE" => "BX",
		"BZ" => "BH",
		"BJ" => "BJ",
		"BM" => "BE",
		"BT" => "B2",
		"BO" => "BO",
		"BA" => "BA",
		"BW" => "BC",
		"BV" => "BV",
		"BR" => "BZ",
		"IO" => "BT",
		"BN" => "BF",
		"BG" => "BU",
		"BF" => "HV",
		"BI" => "BI",
		"KH" => "KH",
		"CM" => "CM",
		"CA" => "CA",
		"CV" => "CV",
		"KY" => "GC",
		"CF" => "CE",
		"TD" => "CD",
		"CL" => "CH",
		"CN" => "CI",
		"CX" => "CX",
		"CC" => "CC",
		"CO" => "CO",
		"KM" => "IC",
		"CG" => "CG",
		"CD" => "CD",
		"CK" => "KU",
		"CR" => "CS",
		"CI" => "IV",
		"HR" => "RH",
		"CU" => "CU",
		"CY" => "CY",
		"CZ" => "CZ",
		"DK" => "DN",
		"DJ" => "DJ",
		"DM" => "DO",
		"DO" => "DR",
		"EC" => "EQ",
		"EG" => "EG",
		"SV" => "ES",
		"GQ" => "GQ",
		"ER" => "E1",
		"EE" => "EE",
		"ET" => "ET",
		"FK" => "FK",
		"FO" => "FA",
		"FJ" => "FJ",
		"FI" => "FI",
		"FR" => "FR",
		"GF" => "FG",
		"PF" => "PF",
		"TF" => "TF",
		"GA" => "GO",
		"GM" => "GB",
		"GE" => "GE",
		"DE" => "DL",
		"GH" => "GH",
		"GI" => "GI",
		"GR" => "GR",
		"GL" => "GL",
		"GD" => "GD",
		"GP" => "GP",
		"GU" => "GU",
		"GT" => "GU",
		"GN" => "GN",
		"GW" => "GW",
		"GY" => "GY",
		"HT" => "HA",
		"HM" => "HM",
		"VA" => "VA",
		"HN" => "HO",
		"HK" => "HK",
		"HU" => "HU",
		"IS" => "IL",
		"IN" => "IN",
		"ID" => "ID",
		"IR" => "IR",
		"IQ" => "IQ",
		"IE" => "IE",
		"IL" => "IS",
		"IT" => "IY",
		"JM" => "JM",
		"JP" => "JP",
		"JO" => "JD",
		"KZ" => "KZ",
		"KE" => "KN",
		"KI" => "KB",
		"KP" => "KR",
		"KR" => "KO",
		"KW" => "KW",
		"KG" => "KG",
		"LA" => "LA",
		"LV" => "LV",
		"LB" => "LB",
		"LS" => "LS",
		"LR" => "LI",
		"LY" => "LY",
		"LI" => "LT",
		"LT" => "L1",
		"LU" => "LU",
		"MO" => "MU",
		"MK" => "MK",
		"MG" => "MG",
		"MW" => "MW",
		"MY" => "MS",
		"MV" => "MV",
		"ML" => "MI",
		"MT" => "ML",
		"MH" => "MH",
		"MP" => "MP",
		"MQ" => "MR",
		"MR" => "MT",
		"MX" => "MX",
		"MU" => "MA",
		"YT" => "YT",
		"FM" => "US_FM",
		"MD" => "M1",
		"MC" => "M3",
		"MN" => "MO",
		"MS" => "M2",
		"MA" => "MC",
		"MZ" => "MZ",
		"MM" => "BM",
		"NA" => "NM",
		"NR" => "NW",
		"NP" => "NP",
		"NL" => "NL",
		"AN" => "AN",
		"NZ" => "NZ",
		"NC" => "NC",
		"NI" => "NK",
		"NE" => "NR",
		"NG" => "NI",
		"NU" => "N1",
		"NF" => "XX_NF",
		"MP" => "US_MP",
		"NO" => "NO",
		"OM" => "OM",
		"PK" => "PK",
		"PW" => "PW",
		"PS" => "PS",
		"PA" => "PM",
		"PG" => "NG",
		"PY" => "PY",
		"PE" => "PR",
		"PH" => "PH",
		"PN" => "P2",
		"PL" => "PL",
		"PT" => "PO",
		"PR" => "PR",
		"QA" => "QT",
		"RE" => "RE",
		"RO" => "RO",
		"RU" => "RS",
		"RW" => "RW",
		"SH" => "HE",
		"KN" => "K1",
		"LC" => "LC",
		"PM" => "P1",
		"VC" => "VC",
		"WS" => "ZM",
		"SM" => "SM",
		"ST" => "TP",
		"SA" => "SD",
		"SN" => "SG",
		"SC" => "SC",
		"SL" => "SL",
		"SG" => "SR",
		"SK" => "S1",
		"SI" => "LJ",
		"SB" => "SO",
		"SO" => "SI",
		"ZA" => "ZA",
		"GS" => "GS",
		"ES" => "SP",
		"LK" => "SB",
		"SD" => "SU",
		"SR" => "SM",
		"SJ" => "SJ",
		"SZ" => "SV",
		"SE" => "SN",
		"CH" => "SW",
		"SY" => "SY",
		"TW" => "TW",
		"TJ" => "TJ",
		"TZ" => "TN",
		"TH" => "TH",
		"TL" => "EA",
		"TG" => "TG",
		"TK" => "TK",
		"TO" => "TO",
		"TT" => "TD",
		"TN" => "TS",
		"TR" => "TU",
		"TM" => "TM",
		"TC" => "TI",
		"TV" => "TV",
		"TB" => "TB",
		"UG" => "UG",
		"UA" => "UR",
		"AE" => "ER",
		"UK" => "UK",
		"US" => "US",
		"UM" => "US_UM",
		"UY" => "UY",
		"UZ" => "UZ",
		"VU" => "NH",
		"VE" => "VN",
		"VN" => "VS",
		"VG" => "VG",
		"VI" => "VI",
		"WF" => "FW",
		"EH" => "EH",
		"YE" => "YE",
		"RS" => "RB",
		"KV" => "KV",
		"ME" => "M4",
		"ZM" => "ZB",
		"ZW" => "ZW"
	);
	
	public static $codes = array(
		"AF" => "Afrikaans",
		"AL" => "Albanian",
		"AR" => "Arabic",
		"HY" => "Armenian",
		"AZ" => "Azerbaijani",
		"EU" => "Basque",
		"BY" => "Belarusian",
		"BU" => "Bulgarian",
		"LI" => "British English",
		"MY" => "Burmese",
		"CA" => "Catalan",
		"CN" => "Chinese - Simplified",
		"TW" => "Chinese - Traditional",
		"CR" => "Croatian",
		"CZ" => "Czech",
		"DK" => "Danish",
		"DV" => "Dhivehi",
		"NL" => "Dutch",
		"EN" => "English",
		"EO" => "Esperanto",
		"ET" => "Estonian",
		"FA" => "Farsi",
		"FI" => "Finnish",
		"FR" => "French",
		"FC" => "French Canadian",
		"GZ" => "Galician",
		"DL" => "German",
		"KA" => "Georgian",
		"GR" => "Greek",
		"GU" => "Gujarati",
		"HT" => "Haitian Creole",
		"IL" => "Hebrew",
		"HI" => "Hindi",
		"HU" => "Hungarian",
		"IS" => "Icelandic",
		"IO" => "Ido",
		"ID" => "Indonesian",
		"IR" => "Irish Gaelic",
		"IT" => "Italian",
		"JP" => "Japanese",
		"JW" => "Javanese",
		"KM" => "Khmer",
		"KR" => "Korean",
		"KU" => "Kurdish",
		"LA" => "Latin",
		"LV" => "Latvian",
		"LT" => "Lithuanian",
		"ND" => "Low German",
		"MK" => "Macedonian",
		"MT" => "Maltese",
		"GM" => "Mandinka",
		"MI" => "Maori",
		"MR" => "Marathi",
		"MN" => "Mongolian",
		"NO" => "Norwegian",
		"OC" => "Occitan",
		"PS" => "Pashto",
		"GN" => "Plautdietsch",
		"PL" => "Polish",
		"BR" => "Portuguese",
		"PA" => "Punjabi",
		"RO" => "Romanian",
		"RU" => "Russian",
		"SR" => "Serbian",
		"SK" => "Slovak",
		"SL" => "Slovenian",
		"SP" => "Spanish",
		"SI" => "Swahili",
		"SW" => "Swedish",
		"CH" => "Swiss",
		"TL" => "Tagalog",
		"TT" => "Tatarish",
		"TH" => "Thai",
		"TR" => "Turkish",
		"TK" => "Turkmen",
		"UA" => "Ukrainian",
		"UZ" => "Uzbek",
		"VU" => "Vietnamese",
		"CY" => "Welsh",
		"SN" => "Wolof",
		"JI" => "Yiddish - transliterated",
		"YI" => "Yiddish - unicode"
		);
	
	protected $str_geolookup;
	protected $application;	
	protected $culture;
	public function __construct(){}
	
	/**
	 * Language Support with auto-mapping
	 * To modify the language that the API returns add the setting /lang:XY/, where XY is a two letter language code.
	 * @see http://www.wunderground.com/weather/api/d/docs?d=language-support
	 * @param string $culture
	 * @return WundergroundWeatherLayer
	 */
	public function culture($culture=null){
		if(array_key_exists($culture, WundergroundWeatherGeolookup::$codes)) {
			$this->culture = $culture;
		} elseif(array_key_exists($culture, WundergroundWeatherGeolookup::$iso2wgrcode)){
			$this->culture = WundergroundWeatherGeolookup::$iso2wgrcode[$culture];
		}
		return $this;
	}
	
	protected function getLookUp(){
		return sprintf($this->str_geolookup, ($this->culture?"/lang:".$this->culture:""));
	}
	
	/**
	 * (non-PHPdoc)
	 * @see wundergroundWeatherAPI::getApplicationString()
	 */
	public function getApplicationString(){
		return $this->application;
	}
	
	public function CityUSA($state, $city){
		$this->application = sprintf($this->getLookUp() . '%s/%s.json', $state, $city);
		return $this;
	}

	public function CityCountry($country, $city){
		$this->application = sprintf($this->getLookUp() . '%s/%s.json', $country, $city);
		return $this;
	}

	public function PostalCode($postalcode){
		$this->application = sprintf($this->getLookUp() . '%s.json', $postalcode);
		return $this;
	}

	public function AirportCode($code){
		$this->application = sprintf($this->getLookUp() . '%s.json', $code);
		return $this;
	}

	public function LatLng($lat, $lng){
		$this->application = sprintf($this->getLookUp() . '%s,%s.json', $lat, $lng);
		return $this;
	}

	public function PWS($code){
		$this->application = sprintf($this->getLookUp() . 'pws:%s.json', $code);
		return $this;
	}

	public function AutoIP(){
		$this->application = $this->getLookUp() . 'autoip.json';
		return $this;
	}
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/geolookup
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherGeolookup extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'geolookup%s/conditions/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/forecast
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherForecast extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'forecast%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/forecast10day
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherForecast10Day extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'forecast10day%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/hourly
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherHourly extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'hourly%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/hourly10day
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherHourly10Day extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'hourly10day%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/rawtide
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherRawtide extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'rawtide%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/tide
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherTide extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'tide%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/satellite
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherSatellite extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'satellite%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/webcams
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherWebcams extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'webcams%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/yesterday
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherYesterday extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'yesterday%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/conditions
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherConditions extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'conditions%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/astronomy
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherAstronomy extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'astronomy%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/almanac
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherAlmanac extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'almanac%s/q/';
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/alerts
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherAlerts extends WundergroundWeatherAbstract {
	protected $str_geolookup = 'alerts%s/q/';
}

/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/history
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherHistory extends WundergroundWeatherAbstract implements wundergroundWeatherDateAPI{
	protected $str_geolookup = 'history_%s%s/q/';
	public function __construct($date){
		$this->str_geolookup = sprintf($this->str_geolookup, $date, '%s');
	}
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=data/planner
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherPlanner extends WundergroundWeatherAbstract implements wundergroundWeatherDateAPI{
	protected $str_geolookup = 'planner_%s%s/q/';
	public function __construct($date){
		$this->str_geolookup = sprintf($this->str_geolookup, $date, '%s');
	}
}

/**
 * layer wrapper
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherLayers {
	protected $type;
	public function __construct(){}	
	/**
	 * @var array $params
	 * @return WundergroundWeatherLayerRadar
	 */
	public function Radar($params=array()){
		$this->type = new WundergroundWeatherLayerRadar();
		$this->type->params($params);
		return $this;
	}
	/**
	 * @var array $params
	 * @return WundergroundWeatherLayerSatellite
	 */
	public function Satellite($params=array()){
		$this->type = new WundergroundWeatherLayerSatellite();
		$this->type->params($params);
		return $this;
	}
	/**
	 * @var array $params
	 * @return WundergroundWeatherLayerRadarSatellite
	 */
	public function RadarSatellite($params=array()){
		$this->type = new WundergroundWeatherLayerRadarSatellite();
		$this->type->params($params);
		return $this;
	}
	
	public function getType(){
		return $this->type;
	}
}
/**
 * layer base class
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
abstract class WundergroundWeatherLayer {	
	protected $application;
	protected $culture;
	protected $isAnimated = false;
	protected $register = array();
	protected $param;
	protected $format = "gif";
	protected $defaults = array();

	/**
	 * Language Support with auto-mapping
	 * To modify the language that the API returns add the setting /lang:XY/, where XY is a two letter language code.
	 * @see http://www.wunderground.com/weather/api/d/docs?d=language-support
	 * @param string $culture
	 * @return WundergroundWeatherLayer
	 */
	public function culture($culture=null){
		if(array_key_exists($culture, WundergroundWeatherGeolookup::$codes)) {
			$this->culture = $culture;
		} elseif(array_key_exists($culture, WundergroundWeatherGeolookup::$iso2wgrcode)){
			$this->culture = WundergroundWeatherGeolookup::$iso2wgrcode[$culture];
		}
		return $this;
	}
	
	protected function getLookUp(){
		return sprintf($this->str_geolookup, ($this->culture?"/lang:".$this->culture:""));
	}
	/**
	 * @param string $state
	 * @param string $city
	 */
	public function CityUSA($state, $city){
		$this->application = sprintf($this->getLookUp() . '%s/%s.'.$this->format, $state, $city);
		return $this;
	}
	
	public function CityCountry($country, $city){
		$this->application = sprintf($this->getLookUp() . '%s/%s.'.$this->format, $country, $city);
		return $this;
	}
	
	public function PostalCode($postalcode){
		$this->application = sprintf($this->getLookUp() . '%s.'.$this->format, $postalcode);
		return $this;
	}
	
	public function AirportCode($code){
		$this->application = sprintf($this->getLookUp() . '%s.'.$this->format, $code);
		return $this;
	}
	
	public function LatLng($lat, $lng){
		$this->application = sprintf($this->getLookUp() . '%s,%s.'.$this->format, $lat, $lng);
		return $this;
	}
	
	public function PWS($code){
		$this->application = sprintf($this->getLookUp() . 'pws:%s.'.$this->format, $code);
		return $this;
	}
	
	public function AutoIP(){
		$this->application = $this->getLookUp() . 'autoip.'.$this->format;
		return $this;
	}
	
	
	/**
	 * (non-PHPdoc)
	 * @see wundergroundWeatherAPI::getApplicationString()
	 */
	public function getApplicationString(){
		$culture = $this->culture;

		if($this->isAnimated){
			if($this instanceof WundergroundWeatherLayerRadar){
				$this->str_geolookup = sprintf('animatedradar%s/q/', ($culture?"/lang:".$culture:""));
			}
			else if($this instanceof WundergroundWeatherLayerSatellite){
				$this->str_geolookup = sprintf('animatedsatellite%s/q/', ($culture?"/lang:".$culture:""));
			}
			else if($this instanceof WundergroundWeatherLayerRadarSatellite){
				$this->str_geolookup = sprintf('animatedradar/animatedsatellite%s/q/', ($culture?"/lang:".$culture:""));
			}
		}
		return $this->application . ($this->param?sprintf('?%s', $this->param):'');
	}
	
	public function params($params = array()){
		$params = array_merge($this->defaults, $params);
		$param_string = array();
		foreach($params as $key => $val){
			if(array_key_exists($key, $this->register)){
				$key = (is_bool($this->register[$key])?$key:$this->register[$key]);
				$param_string[] = sprintf("%s=%s", $key, $val);
			}
		}
		$this->param = implode("&", $param_string);
		return $this;
	}
	
	/**
	 * @return WundergroundWeatherLayer
	 */
	public function isAnimated(){
		$this->isAnimated = true;
		return $this;
	}
	/**
	 * @return WundergroundWeatherLayer
	 */
	public function asPNG(){
		$this->format = "png";
		return $this;
	}
	/**
	 * @return WundergroundWeatherLayer
	 */
	public function asGIF(){
		$this->format = "gif";
		return $this;
	}
	/**
	 * @return WundergroundWeatherLayer
	 */
	public function asSWF(){
		$this->format = "swf";
		return $this;
	}
	
	/**
	 * gif|png
	 * @return string
	 */
	public function getFormat(){
		return $this->format;
	}
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=layers/radar
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherLayerRadar extends WundergroundWeatherLayer implements wundergroundWeatherAPI {
	protected $defaults = array("newmaps"=>1);
	protected $str_geolookup = 'radar%s/q/';	
	protected $register = array(
		"minlat"=>true, "maxlat" => true, "minlon" => true, "maxlon" => true, "centerlat" => true, "centerlon" => true,
		"radius" => true, "radunits" => true, "width" => true, "height" => true, "newmaps" => true,
		"rainsnow" => true, "smooth" => true, "reprojAutomerc"=>"reproj.automerc",
		"frame" => true, "num" => true, "delay" => true, "timelabel" => true, "timelabelX"=>"timelabel.x",
		"timelabelY" => "timelabel.y"
		
	);
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=layers/satellite
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherLayerSatellite extends WundergroundWeatherLayer implements wundergroundWeatherAPI {
	protected $str_geolookup = 'satellite%s/q/';	
	protected $register = array(
		"minlat"=>true, "maxlat" => true, "minlon" => true, "maxlon" => true, "lat" => true, "lon" => true,
		"radius" => true, "radunits" => true, "width" => true, "height" => true, "key" => true, "gtt" => true,
		"basemap" => true, "borders" => true, "smooth" => true, "proj"=> true,
		"frame" => true, "num" => true, "delay" => true, "timelabel" => true, "timelabelX"=>"timelabel.x",
		"timelabelY" => "timelabel.y"
		
	);
}
/**
 * @see http://www.wunderground.com/weather/api/d/docs?d=layers/radar-satellite
 * @author Thomas Schäfer <thomas.schaefer@query4u.de>
 */
class WundergroundWeatherLayerRadarSatellite extends WundergroundWeatherLayer implements wundergroundWeatherAPI {
	
	protected $str_geolookup = 'radar/satellite%s/q/';	
	protected $register = array(
		"delay"=>true, "num" => true, "interval" => true,
		"satMinlat"=>"sat.minlat", "satmMaxlat" => "sat.maxlat", "satMinlon" => "sat.minlon", "satMaxlon" => "sat.maxlon", 
		"satLat" => "sat.lat", "satLon" => "sat.lon",
		"satRadius" => "sat.radius", "satRadunits" => "sat.satRadunits", "satWidth" => "sat.width", "satHeight" => "sat.height", 
		"satKey" => "sat.key", "satGtt" => "sat.gtt",
		"satBasemap" => "sat.basemap", "satBorders" => "sat.Borders", "sat.Smooth" => "sat.Smooth", "satProj"=> "sat.proj",
		"satFrame" => "sat.frame", "satNum" => "sat.num", "satDelay" => "sat.delay", "satTimelabel" => "sat.timelabel", 
		"satTimelabelX"=>"sat.timelabel.x", "satTimelabelY" => "sat.timelabelY",
		"radMinlat"=>"rad.minlat", "radMaxlat" => "rad.maxlat", "radMinlon" => "rad.minlin", "radMaxlon" => "radMaxlon",
		"radCenterlat" => "rad.centerlat", "radCenterlon" => "rad.centerlon",
		"radRadius" => "rad.radius", "radRadunits" => "rad.radunits", "radRidth" => "rad.width", "radHeight" => "rad.height", 
		"radNewmaps" => "rad.newmaps",
		"radRainsnow" => "rad.rainsnow", "radSmooth" => "rad.smooth", "radReprojAutomerc"=>"rad.reproj.automerc",
		"radFrame" => "rad.frame", "radNum" => "rad.num", "radDelay" => "rad.delay", "radTimelabel" => "rad.timelabel",
		"radTimelabelX"=>"rad.timelabel.x",
		"radTimelabelY" => "rad.timelabel.y"
	
	);
}

class WundergroundWeather {
	
	protected static $instance;
	
	protected $apikey = "";
	protected $path;
	protected $application;
	protected $format = '%s/%s/%s';
	protected $culture = '%s/%s/%s';
	
	/**
	 * @var WundergroundWeatherAPI $subClass
	 */
	protected $subClass;

	/**
	 * @param string $culture
	 */
	public function __construct($culture=null){
		$this->culture = $culture;
	}
	
	/**
	 * @param string $culture
	 * @return WundergroundWeather
	 */
	public function getInstance($culture=null){
		if(!self::$instance){
			self::$instance = new WundergroundWeather($culture);
		}
		return self::$instance;
	}
	
	/**
	 * set api key
	 * @param string $key
	 * @return WundergroundWeather
	 */
	public function apikey($key){
		$this->apikey = $key;
		return $this;
	}
	
	/**
	 * @return WundergroundWeatherGeolookup
	 */
	public function Geolookup(){
		$this->subClass = new WundergroundWeatherGeolookup();
		return $this;
	}	
	/**
	 * @return WundergroundWeatherForecast10Day
	 */
	public function Forecast10Day(){
		$this->subClass = new WundergroundWeatherForecast10Day();
		return $this;
	}
	/**
	 * @return WundergroundWeatherForecast
	 */
	public function Forecast(){
		$this->subClass = new WundergroundWeatherForecast();
		return $this;
	}
	/**
	 * @return WundergroundWeatherHourly
	 */
	public function Hourly(){
		$this->subClass = new WundergroundWeatherHourly();
		return $this;
	}
	/**
	 * @return WundergroundWeatherHourly10Day
	 */
	public function Hourly10Day(){
		$this->subClass = new WundergroundWeatherHourly10Day();
		return $this;
	}
	/**
	 * @return WundergroundWeatherAlerts
	 */
	public function Alerts(){
		$this->subClass = new WundergroundWeatherAlerts();
		return $this;
	}
	/**
	 * @return WundergroundWeatherAlmanac
	 */
	public function Almanac(){
		$this->subClass = new WundergroundWeatherAlmanac();
		return $this;
	}
	/**
	 * @return WundergroundWeatherAstronomy
	 */
	public function Astronomy(){
		$this->subClass = new WundergroundWeatherAstronomy();
		return $this;
	}
	/**
	 * @return WundergroundWeatherConditions
	 */
	public function Conditions(){
		$this->subClass = new WundergroundWeatherConditions();
		return $this;
	}
	/**
	 * @return WundergroundWeatherSatellite
	 */
	public function Satellite(){
		$this->subClass = new WundergroundWeatherSatellite();
		return $this;
	}
	/**
	 * @return WundergroundWeatherTide
	 */
	public function Tide(){
		$this->subClass = new WundergroundWeatherTide();
		return $this;
	}
	/**
	 * @return WundergroundWeatherWebcams
	 */
	public function Webcams(){
		$this->subClass = new WundergroundWeatherWebcams();
		return $this;
	}
	/**
	 * @return WundergroundWeatherYesterday
	 */
	public function Yesterday(){
		$this->subClass = new WundergroundWeatherYesterday();
		return $this;
	}
	/**
	 * @var string $date YYMMDD
	 * @return WundergroundWeatherHistory
	 */
	public function History($date){
		$this->subClass = new WundergroundWeatherHistory($date);
		return $this;
	}
	/**
	 * @var string $datehour YYMMDDHH
	 * @return WundergroundWeatherPlanner
	 */
	public function Planner($datehour){
		$this->subClass = new WundergroundWeatherPlanner($datehour);
		return $this;
	}
	/**
	 * @return WundergroundWeatherRawtide
	 */
	public function Rawtide(){
		$this->subClass = new WundergroundWeatherRawtide();
		return $this;
	}
	/**
	 * @return WundergroundWeatherLayers
	 */
	public function Layers(){
		$this->subClass = new WundergroundWeatherLayers();
		return $this;
	}
	
	protected function preparePath($path=null) {
		if(!$path){
			$this->path = 'http://api.wunderground.com/api';
		} else {
			$this->path = $path;
		}
	}
	
	/**
	 * @param string $name
	 * @param array $params
	 * @return WundergroundWeather
	 */
	public function __call($name, $params){
		if($this->subClass instanceof wundergroundWeatherAPI){
			if(method_exists($this->subClass, $name)) {				
				$this->subClass->culture($this->culture);
				$o = new ReflectionMethod(get_class($this->subClass), $name);
				$m = $o->invokeArgs($this->subClass, $params);
				$m->culture($this->culture);	
				$this->application = $m->getApplicationString();
			}
		} elseif($this->subClass instanceof WundergroundWeatherLayers) {
			if(method_exists($this->subClass, $name)) {				
				$o = $this->subClass->{$name}((count($params)?$params[0]:array()));
				$o->getType()->culture($this->culture);
				$this->subClass = $o->getType();
			}
		}
		return $this;
	}

	protected $result;
	
	protected function isBinary($str){
		return (0 or substr_count($str, "\x00") > 0);
	}
	
	protected function fetchData(){
		$url = $this->buildQueryString();
		try {
			
			$ch = curl_init();
			$timeout = 10; // 0 wenn kein Timeout
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$content = curl_exec($ch);			
			if($content){
				if($this->isBinary($content)){
					$this->result = $content;
				} else {
					$this->result = json_decode($content);
				}
			}
			curl_close($ch);
		} catch (Exception $e) {
			try {
				$content = file_get_contents($url);
				if($content){
					if($this->isBinary($content)){
						$this->result = $content;
					} else {
						$this->result = json_decode($content);
					}
				}
			} catch (Exception $e) {
				$this->result = $e->getMessage();
			}
		}
	}
	
	/**
	 * @return mixed
	 */
	public function getResult(){
		return $this->result;
	}
		
	public function doRequest(){
		$this->init();
		$this->fetchData();
		return $this;
	}
	
	public function getImage(){
		$format = $this->subClass->getFormat();
		switch($format){
			case "gif": case "png":
			return sprintf("<img src=\"data:image/%s;base64,%s\" />", $format, base64_encode($this->result));
		}
		return "--flash objects have to be loaded as embedded object or by javascript (swf object) -- ";
	}
	
	/**
	 * @param string $key
	 * @return WundergroundWeather
	 */
	public function setApiKey($key){
		$this->apikey = $key;
		return $this;
	}
	
	protected function init(){
		$this->preparePath();
	}
	
	protected function buildQueryString(){
		return sprintf($this->format, $this->path, $this->apikey, $this->application);
	}
	
}
