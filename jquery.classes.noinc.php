<?php 


class jquery_autocompleter {

  /**
	 * Holds or releases the execution of jQuery's ready event.
	 */
	public function holdReady(){}
	/**
	 * Relinquish jQuery's control of the $ variable.
	 */
	public function noConflict(){}
	/**
	 * Add elements to the set of matched elements.
	 */
	public function add(){}
	/**
	 * Add the previous set of elements on the stack to the current set.
	 */
	public function andSelf(){}
	/**
	 * Get the children of each element in the set of matched elements, including text and comment nodes.
	 */
	public function contents(){}
	/**
	 * End the most recent filtering operation in the current chain and return the set of matched elements to its previous state.
	 */
	public function end(){}
	/**
	 * Remove elements from the set of matched elements.
	 */
	public function not(){}
	/**
	 * Adds the specified class(es) to each of the set of matched elements.
	 * @param Closure|string $className
	 * @example
	 * <pre>
jquery("ul li:last")->addClass(function($index) {
  return "item-" + $index;
});
	 * </pre>
	 */
	public function addClass($className){}
	/**
	 * Insert content, specified by the parameter, after each element in the set of matched elements.
	 * @param Closure|jquery|string|UtilFunctionStack
	 * @example
	 *  
	 */
	public function after($closure){}
	/**
	 * Perform an asynchronous HTTP (Ajax) request.
	 * @see http://api.jquery.com/jQuery.ajax/
	 */
	public function ajax($settings_or_url, $settings=null){}
	/**
	 * Register a handler to be called when Ajax requests complete. This is an Ajax Event.
	 * @see http://api.jquery.com/ajaxComplete/
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function ajaxComplete($closure){}
	/**
	 * Register a handler to be called when Ajax requests complete with an error. This is an Ajax Event.
	 * @see http://api.jquery.com/ajaxError/
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function ajaxError($closure){}
	/**
	 * Handle custom Ajax options or modify existing options before each request is sent and before they are processed by $.ajax().
	 * @see http://api.jquery.com/jQuery.ajaxPrefilter/
	 * @param mixed $closure_or_mixed
	 * @param Closure|UtilFunctionStack $closure [optional]
	 */	
	public function ajaxPrefilter($closure_or_mixed, $closure=null){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function ajaxSend($closure){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function ajaxStart($closure){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function ajaxStop($closure){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function ajaxSuccess($closure){}
	/**
	 * Get the value of an attribute for the first element in the set of matched elements.
	 * @param string $attributeName
	 * @param mixed $value [optional]
	 */
	public function attr($attributeName, $value = null){}
	/**
	 * @param obj $obj
	 */	
	public function animate($obj){}
	/**
	 * Insert content, specified by the parameter, to the end of each element in the set of matched elements.
	 * @params mixed $target
	 */	
	public function append($target){}
	/**
	 * Insert content, specified by the parameter, to the end of each element in the set of matched elements.
	 * @params mixed $target
	 */	
	public function appendTo($target){}
	/**
	 * Insert content, specified by the parameter, to the end of each element in the set of matched elements.
	 * @params mixed $target
	 */	
	public function prepend($target){}
	/**
	 * Insert content, specified by the parameter, to the end of each element in the set of matched elements.
	 * @params mixed $target
	 */	
	public function prependTo($target){}
	/**
	 * @params mixed $content
	 */	
	public function html($content){}
	/**
	 * @params mixed $content
	 */	
	public function text($content){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function before($closure){}
	
	/**
	 * Insert content, specified by the parameter, before each element in the set of matched elements.
	 * @param string $eventType
	 * @param Closure|UtilFunctionStack|object $closure_or_object
	 * @param Closure|UtilFunctionStack|object $closure [optional]
	 */
	public function bind($eventType, $closure_or_object, $closure=null){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function blur($closure){}

	/**
	 * 
	 * @param string $eventType
	 * @param Closure|string $closure_or_string
	 * @param Closure $closure
	 */
	public function on($eventType, $closure_or_string, $closure=null){}
	
	/**
	 * @var jquery_browser $browser
	 */
	public $browser;
	
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function change($closure){}
	/**
	 * Get the children of each element in the set of matched elements, optionally filtered by a selector.
	 * @param string $selector
	 */
	public function children($selector){}
	/**
	 * Get the descendants of each element in the current set of matched elements, filtered by a selector, jQuery object, or element
	 * @param string $selector
	 */
	public function find($selector){}
	/**
	 * Reduce the set of matched elements to the first in the set.
	 */
	public function first($selector){}
	public function clearQueue(){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function click($closure){}	
	public function closest(){}	
	/**
	 * Check to see if a DOM element is within another DOM element.
	 * @param mixed $container
	 * @param mixed $contained
	 */
	public function contains($container, $contained){}
	/**
	 * Store arbitrary data associated with the matched elements.
	 * @param string $key
	 * @param mixed $value
	 */
	public function data($key, $value=null){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function dblclick($closure){}
	/**
	 * @param Closure|UtilFunctionStack $closure
	 */
	public function focus($closure){}
	/**
	 * @param string $duration
	 * @param Closure|UtilFunctionStack $easing
	 * @param Closure|UtilFunctionStack $callback
	 */
	public function fadeIn($duration, $closure, $callback){}
	/**
	 * @param string $duration
	 * @param Closure|UtilFunctionStack $easing
	 * @param Closure|UtilFunctionStack $callback
	 */
	public function fadeOut($duration, $closure, $callback){}
	/**
	 * @param string $duration
	 * @param Closure|UtilFunctionStack $easing
	 * @param Closure|UtilFunctionStack $callback
	 */
	public function fadeTo($duration, $closure, $callback){}
	/**
	 * @param string $duration
	 * @param Closure|UtilFunctionStack $easing
	 * @param Closure|UtilFunctionStack $callback
	 */
	public function fadeToggle($duration, $closure, $callback){}
	public function get($index){}
	public function getJSON($url, $data, $success){}
	public function getScript($url, $data, $success){}
	public function has($selector){}
	public function hasClass($selector){}
	public function height(){}
	public function hide(){}
	/**
	 * @param Closure $in
	 * @param Closure $out
	 */
	public function hover($in, $out){}
	public function innerHeight(){}
	public function innerWidth(){}
	public function outerHeight(){}
	public function outerWidth(){}
	public function insertAfter($target){}
	public function insertBefore($target){}
	public function load($url, $data, $success){}
	
	
	
			
}

class jquery_browser {
	public $webkit;
	public $msie;
	public $chrome;
	public $mozilla;
	public $safari;
	public $opera;
	public $version;	
}
