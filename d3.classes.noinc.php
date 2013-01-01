<?php 

class d3Math {
  const PI = "PI";
	const E = "E";
	const LN10 = "LN10";
	const LN2 = "LN2";
	const LOG10E = "LOG10E";
	const LOG2E = "LOG2E";
	const SQRT1_2 = "SQRT1_2";
	const SQRT2 = "SQRT2";
	
	public function abs(){}	
	public function acos(){}	
	public function asin(){}	
	public function atan(){}	
	public function atan2(){}	
	public function ceil(){}	
	public function cos(){}	
	public function exp(){}	
	public function floor(){}	
	public function hasOwnProperty(){}	
	public function isPrototypeOf(){}	
	public function log(){}	
	public function max(){}	
	public function min(){}	
	public function pow(){}	
	public function random(){}	
	public function round(){}	
	public function sin(){}	
	public function sqrt(){}	
	public function tan(){}	
	public function valueOf(){}	
	public function toString(){}	
}

// do not use this file 
// it is only for supports of autocompletion in modern IDE.
class d3AutoCompletion_Time{

	/**
	 * @var d3AutoCompletion_Time_Scale $scale
	 */
	public $scale;
	
	/**
	 * @var class d3AutoCompletion_Time_Intervals $day 
	 */
	public $day;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $second 
	 */
	public $second;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $minute
	 */
	public $minute;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $hour 
	 */
	public $hour;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $week 
	 */
	public $week;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $sunday 
	 */
	public $sunday;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $monday 
	 */
	public $monday;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $tuesday
	 */
	public $tuesday;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $wednesday 
	 */
	public $wednesday;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $thursday
	 */
	public $thursday;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $friday 
	 */
	public $friday;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $saturday 
	 */
	public $saturday;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $month 
	 */
	public $month;
	/**
	 * @var class d3AutoCompletion_Time_Intervals $year
	 */
	public $year;
	
	public function sunday($date);
	public function monday($date);
	public function tuesday($date);
	public function wednesday($date);
	public function thursday($date);
	public function friday($date);
	public function saturday($date);
	public function month($date);
	public function year($date);
	
	public function seconds($start, $stop, $step){}
	public function minutes($start, $stop, $step){}
	public function hours($start, $stop, $step){}
	public function days($start, $stop, $step){}
	public function weeks($start, $stop, $step){}
	public function months($start, $stop, $step){}
	public function years($start, $stop, $step){}
	
	public function dayOfYear($date){}
	public function weekOfYear($date){}
	public function sundayOfYear($date){}
	public function mondayOfYear($date){}
	public function tuesdayOfYear($date){}
	public function wednesdayOfYear($date){}
	public function thursdayOfYear($date){}
	public function fridayOfYear($date){}
	public function saturdayOfYear($date){}
	
	/**
	 * @var class d3AutoCompletion_Time_Intervals $utc
	 */
	public $utc;
}
class d3AutoCompletion_Time_Scale{
	
}


class d3AutoCompletion_Time_Intervals {
	public function floor($date){}
	public function round($date){}
	public function ceil($date){}
	public function range($start, $stop, $step){}
	public function offset($data, $step){}
}


class d3AutoCompletion_SVG{
	/**
	 * Constructs a new area generator with the default x-, y0- and y1-accessor functions (that assume the input data is a two-element array of numbers; see below for details), and linear interpolation. 
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function area($data, $index){}
	/**
	 * @var d3AutoCompletion_SVG_LineRadial $line
	 */	
	public $line;
	/**
	 * @var d3AutoCompletion_SVG_Diagonal
	 */
	public $diagonal;
	/**
	 * Constructs a new line generator with the default x- and y-accessor functions (that assume the input data is a two-element array of numbers; see below for details), and linear interpolation. The returned function generates path data for an open piecewise linear curve, or polyline, as in a line chart:
	 * @return d3AutoCompletion_SVG_Line
	 */
	/**
	 * Constructs a new line generator with the default x- and y-accessor functions (that assume the input data is a two-element array of numbers; see below for details), and linear interpolation. The returned function generates path data for an open piecewise linear curve, or polyline, as in a line chart:
	 * @return d3AutoCompletion_SVG_Line
	 */
	public function line(){}
	/**	
	 * Constructs a new arc generator with the default innerRadius-, outerRadius-, startAngle- and endAngle-accessor functions (that assume the input data is an object with named attributes matching the accessors; see below for details). While the default accessors assume that the arc dimensions are all specified dynamically, it is very common to set one or more of the dimensions as a constant, such as setting the inner radius to zero for a pie chart. 
	 * @return d3AutoCompletion_SVG_Arc
	 */
	public function arc($data, $index);
	/**
	 * @var d3AutoCompletion_SVG_Chord $chord
	 */
	public $chord;
	/**
	 * Returns the path data string for the specified datum. An optional index may be specified, which is passed through to the symbol's accessor functions.
	 * @return d3AutoCompletion_SVG_Symbol
	 */
	public function symbol($datum, $index);
	/**
	 * @var d3AutoCompletion_SVG_Axis $axis
	 */	
	public $axis;
	/**
	 * @var d3AutoCompletion_SVG_Brush $brush
	 */
	public $brush;
	/**
	 * Draws or redraws this brush into the specified selection of elements. The brush may be drawn into multiple elements simultaneously, but not that these brushes would share the same backing extent; typically, a brush is drawn into only one element at a time.
	 * The selection can also be a transition; however, the brush does not yet support automatic transitions, so the redraw will happen instantaneously. In a subsequent release, the brush will smoothly transition to the new extent when redrawn after the extent is set.
	 * @return d3AutoCompletion_SVG_Brush
	 */
	public function brush($selection){}
}

class d3AutoCompletion_SVG_Axis{
	/**
	 * 
	 * @param unknown_type $scale
	 */
	public function scale($scale){}
	public function orient($orientation){}
	public function ticks($arguments){}
	public function tickValues($values){}
	public function tickSubdivide($count){}
	public function tickSize($major, $minor, $end){}
	public function tickPadding($padding){}
	public function tickFormat($format){}
}
class d3AutoCompletion_SVG_Brush{
	/**
	 * Gets or sets the x-scale associated with the brush. If scale is specified, sets the x-scale to the specified scale and returns the brush; if scale is not specified, returns the current x-scale, which defaults to null. The scale is typically defined as a quantitative scale, in which case the extent is in data space from the scale's domain; however, it may instead be defined as an ordinal scale, where the extent is in pixel space from the scale's range extent.
	 * @param unknown_type $scale
	 */
	public function x($scale){}
	/**
	 * Gets or sets the y-scale associated with the brush. If scale is specified, sets the y-scale to the specified scale and returns the brush; if scale is not specified, returns the current y-scale, which defaults to null. The scale is typically defined as a quantitative scale, in which case the extent is in data space from the scale's domain; however, it may instead be defined as an ordinal scale, where the extent is in pixel space from the scale's range extent.
	 * @param d3AutoCompletion $scale
	 */
	public function y($scale){}
	/**
	 * Gets or sets the current brush extent. If values is specified, sets the extent to the specified values and returns the brush; if values is not specified, returns the current extent. The definition of the extent depends on the associated scales. If both an x- and y-scale are available, then the extent is the two-dimensional array [‍[*x0*, y0], [*x1*, y1]], where x0 and y0 are the lower bounds of the extent, and x1 and y1 are the upper bounds of the extent. If only the x-scale is available, then the extent is defined as the one-dimensional array [*x0*, x1]; likewise, if only the y-scale is available, then the extent is [*y0*, y1]. In neither scale is available, then the extent is null.
	 * When the extent is set to values, the resulting extent is preserved exactly. However, as soon as the brush is moved by the user (on mousemove following a mousedown), then the extent must be recomputed by calling scale.invert. Note that the values may be slightly imprecise due to the limited precision of pixels.
	 * Note that this does not automatically redraw the brush or dispatch any events to listeners. To redraw the brush, call brush on a selection or transition.
	 * @param array $values
	 */
	public function extent($values){}
	/**
	 * Clears the extent, making the brush extent empty.
	 */
	public function clear(){}
	/**
	 * Returns true if and only if the brush extent is empty. When a brush is created, it is initially empty; the brush may also become empty with a single click on the background without moving, or if the extent is cleared. A brush is considered empty if it has zero-width or zero-height. When the brush is empty, its extent is not strictly defined.
	 */
	public function _empty(){}
	/**
	 * Gets or sets the listener for the specified event type. Brushes support three types of events:
	 * brushstart - on mousedown
	 * brush - on mousemove, if the brush extent has changed
	 * brushend - on mouseup
	 * Note that when clicking on the background, a mousedown also triggers a brushmove, since the brush extent is immediately cleared to start a new extent.
	 * @param string $type
	 * @param Closure|f3 $listener
	 */
	public function on($type, $listener){}
}
class d3AutoCompletion_SVG_DiagonalRadial{
	/**
	 * @param mixed $source
	 * @return d3AutoCompletion_SVG_DiagonalRadial
	 */
	public function source($source){}
	/**
	 * @param mixed $target
	 * @return d3AutoCompletion_SVG_DiagonalRadial
	 */
	public function target($target){}
	/**
	 * @param mixed $projection
	 * @return d3AutoCompletion_SVG_DiagonalRadial
	 */
	public function projection($projection){}
		
}
class d3AutoCompletion_SVG_Diagonal{
	/**
	 * @return d3AutoCompletion_SVG_DiagonalRadial
	 */
	public function radial($datum, $index);
		
	/**
	 * @param mixed $source
	 * @return d3AutoCompletion_SVG_Diagonal
	 */
	public function source($source){}
	/**
	 * @param mixed $target
	 * @return d3AutoCompletion_SVG_Diagonal
	 */
	public function target($target){}
	/**
	 * @param mixed $projection
	 * @return d3AutoCompletion_SVG_Diagonal
	 */
	public function projection($projection){}
}
class d3AutoCompletion_SVG_LineRadial{
	/**
	 * Constructs a new radial line generator with the default radius- and angle-accessor functions (that assume the input data is a two-element array of numbers; see below for details), and linear interpolation. The returned function generates path data for an open piecewise linear curve, or polyline, as with the Cartesian line generator.
	 * @return d3AutoCompletion_SVG_LineRadial
	 */	
	public function radial(){}
	/**
	 * Returns the path data string for the specified array of data elements. An optional index may be specified, which is passed through to the line's accessor functions.
	 * @param array $data
	 * @param integer $index
	 * @return string
	 */
	public function line($data, $index){}
	/**
	 * If radius is specified, sets the radius-accessor to the specified function or constant. If radius is not specified, returns the current radius-accessor. This accessor is invoked for each element in the data array passed to the line generator. The default accessor assumes that each input element 
	 * @param mixed $radius
	 * @return d3AutoCompletion_SVG_LineRadial
	 */
	public function radius($radius=null){}
	/**
	 * If angle is specified, sets the angle-accessor to the specified function or constant in radians. If angle is not specified, returns the current angle-accessor. This accessor is invoked for each element in the data array passed to the line generator.
	 * @param mixed $angle
	 * @return d3AutoCompletion_SVG_LineRadial
	 */
	public function angle($angle=null){}
}
class d3AutoCompletion_SVG_Line{
	/**
	 * If x is specified, sets the x-accessor to the specified function or constant. If x is not specified, returns the current x-accessor. This accessor is invoked for each element in the data array passed to the line generator.
	 * @param integer|Closure $x
	 * @return d3AutoCompletion_SVG_Line
	 */
	public function x($x){}
	/**
	 * If y is specified, sets the y-accessor to the specified function or constant. If y is not specified, returns the current y-accessor. This accessor is invoked for each element in the data array passed to the line generator. 
	 * @param integer|Closure $y
	 * @return d3AutoCompletion_SVG_Line
	 */
	public function y($y){}
	/**
	 * If interpolate is specified, sets the interpolation mode to the specified string. If interpolate is not specified, returns the current interpolation mode. The following modes are supported:
	 * linear - piecewise linear segments, as in a polyline.
	 * step-before - alternate between vertical and horizontal segments, as in a step function.
	 * step-after - alternate between horizontal and vertical segments, as in a step function.
	 * basis - a B-spline, with control point duplication on the ends.
	 * basis-open - an open B-spline; may not intersect the start or end.
	 * basis-closed - a closed B-spline, as in a loop.
	 * bundle - equivalent to basis, except the tension parameter is used to straighten the spline.
	 * cardinal - a Cardinal spline, with control point duplication on the ends.
	 * cardinal-open - an open Cardinal spline; may not intersect the start or end, but will intersect other control points.
	 * cardinal-closed - a closed Cardinal spline, as in a loop.
	 * monotone - cubic interpolation that preserves monotonicity in y.
	 * The behavior of some of these interpolation modes may be further customized by specifying a tension.	 * 
	 * @param string $interpolate
	 * @return d3AutoCompletion_SVG_Line
	 */
	public function interpolate($interpolate){}
	/**
	 * If tension is specified, sets the Cardinal spline interpolation tension to the specified number in the range [0, 1]. If tension is not specified, returns the current tension. The tension only affects the Cardinal interpolation modes: cardinal, cardinal-open and cardinal-closed. The default tension is 0.7. In some sense, this can be interpreted as the length of the tangent; 1 will yield all zero tangents, and 0 yields a Catmull-Rom spline.
	 * @param mixed $tension
	 * @return d3AutoCompletion_SVG_Line
	 */
	public function tension($tension){}
	/**
	 * Gets or sets or sets the accessor function that controls where the line is defined. If defined is specified, sets the new accessor function and returns the line. If defined is not specified, returns the current accessor which defaults to function() { return true; }. The defined accessor can be used to define where the line is defined and undefined, which is typically useful in conjunction with missing data; the generated path data will automatically be broken into multiple distinct subpaths, skipping undefined data. For example, if you want to ignore y-values that are not a number (or undefined), you can say:
	 * @param mixed $defined
	 * @return d3AutoCompletion_SVG_Line
	 */
	public function defined($defined){}
	
}
class d3AutoCompletion_SVG_Area{
	/**
	 * @param integer|Closure $x
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function x($x){}
	/**
	 * @param integer|Closure $x
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function x0($x0){}
	/**
	 * @param integer|Closure $x
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function x1($x1){}
	/**
	 * @param integer|Closure $y
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function y($y){}
	/**
	 * @param integer|Closure $y
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function y0($y){}
	/**
	 * @param integer|Closure $y
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function y1($y){}
	/**
	 * @param string $interpolate
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function interpolate($interpolate){}
	/**
	 * @param mixed $tension
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function tension($tension){}
	/**
	 * @param mixed $defined
	 * @return d3AutoCompletion_SVG_Area
	 */
	public function defined($defined){}
	
}
class d3AutoCompletion_SVG_Arc{
	/**
	 * If radius is specified, sets the innerRadius-accessor to the specified function or constant. If radius is not specified, returns the current innerRadius-accessor. This accessor is invoked on the argument passed to the arc generator. 
	 * @param mixed $radius
	 * @return d3AutoCompletion_SVG_Arc
	 */
	public function innerRadius($radius){}
	/**
	 * If radius is specified, sets the outerRadius-accessor to the specified function or constant. If radius is not specified, returns the current outerRadius-accessor. This accessor is invoked on the argument passed to the arc generator.  
	 * @param mixed $radius
	 * @return d3AutoCompletion_SVG_Arc
	 */
	public function outerRadius($radius){}
	/**
	 * If angle is specified, sets the startAngle-accessor to the specified function or constant. If angle is not specified, returns the current startAngle-accessor. Angles are specified in radians, even though SVG typically uses degrees. The angle 0 corresponds to 12 o'clock (negative y) and continues clockwise repeating at 2π. This accessor is invoked on the argument passed to the arc generator. 
	 * @param mixed $angle
	 * @return d3AutoCompletion_SVG_Arc
	 */
	public function startAngle($angle){}
	/**
	 * If angle is specified, sets the endAngle-accessor to the specified function or constant. If angle is not specified, returns the current startAngle-accessor. Angles are specified in radians, even though SVG typically uses degrees. This accessor is invoked on the argument passed to the arc generator.  
	 * @param mixed $angle
	 * @return d3AutoCompletion_SVG_Arc
	 */
	public function endAngle($angle){}
	/**
	 * Computes the centroid of the arc that would be generated from the specified input arguments; typically, the arguments are the current datum (d), and optionally the current index (i). The centroid is defined as the midpoint in polar coordinates of the inner and outer radius, and the start and end angle. 
	 * @param mixed $arguments
	 * @return d3AutoCompletion_SVG_Arc
	 */
	public function centroid($arguments){}
}
class d3AutoCompletion_SVG_Chord{
	/**
	 * If source is specified, sets the source-accessor to the specified function or constant. If source is not specified, returns the current source-accessor. The purpose of the source accessor is to return an object that describes the starting arc of the chord. The returned object is subsequently passed to the radius, startAngle and endAngle accessors. This allows these other accessors to be reused for both the source and target arc descriptions. 
	 * @param mixed $source
	 * @return d3AutoCompletion_SVG_Chord
	 */
	public function source($source){}
	/**
	 * If target is specified, sets the target-accessor to the specified function or constant. If target is not specified, returns the current target-accessor. The purpose of the target accessor is to return an object that describes the ending arc of the chord. The returned object is subsequently passed to the radius, startAngle and endAngle accessors. This allows these other accessors to be reused for both the source and target arc descriptions. 
	 * @param mixed $target
	 * @return d3AutoCompletion_SVG_Chord
	 */
	public function target($target){}
	/**
	 * If radius is specified, sets the radius-accessor to the specified function or constant. If radius is not specified, returns the current radius-accessor. 
	 * @param mixed $radius
	 * @return d3AutoCompletion_SVG_Chord
	 */
	public function radius($radius){}
	/**
	 * If startAngle is specified, sets the startAngle-accessor to the specified function or constant. If startAngle is not specified, returns the current startAngle-accessor. Angles are specified in radians, even though SVG typically uses degrees.
	 * @param mixed $angle
	 * @return d3AutoCompletion_SVG_Chord
	 */
	public function startAngle($angle){}
	/**
	 * If endAngle is specified, sets the endAngle-accessor to the specified function or constant. If endAngle is not specified, returns the current endAngle-accessor. Angles are specified in radians, even though SVG typically uses degrees. 
	 * @param mixed $angle
	 * @return d3AutoCompletion_SVG_Chord
	 */
	public function endAngle($angle){}
	
}
class d3AutoCompletion_SVG_Symbol{
	/**
	 * If type is specified, sets the type-accessor to the specified function or constant. If type is not specified, returns the current type-accessor. The default accessor is the constant "circle", and the following types are supported:
	 * circle - a circle.
	 * cross - a Greek cross or plus sign
	 * diamond - a rhombus.
	 * square - an axis-aligned square.
	 * triangle-down - a downward-pointing equilateral triangle.
	 * triangle-up - an upward-pointing equilateral triangle.
	 * @param string $type
	 * @return AutoCompletion_SVG_Symbol
	 */
	public function type($type){}
	/**
	 * @param mixed $size
	 * @return AutoCompletion_SVG_Symbol
	 */
	public function size($size){}
}
class d3AutoCompletion_Scale{
	/**
	 * Constructs a new linear scale with the default domain [0,1] and the default range [0,1]. Thus, the default linear scale is equivalent to the identity function for numbers; for example linear(0.5) returns 0.5.
	 * @param integer $x
	 * @return d3AutoCompletion_Scale_Linear
	 */
	public function linear($x=null){}
	/**
	 * Identity scales are a special case of linear scales where the domain and range are identical; the scale and its invert method are both the identity function. These scales are occasionally useful when working with pixel coordinates, say in conjunction with the axis and brush components.
	 * Constructs a new identity scale with the default domain [0, 1] and the default range [0, 1]. An identity scale is always equivalent to the identity function.
	 * @return d3AutoCompletion_Scale_Identity
	 * @param integer $x
	 */
	public function identity($x=null){}
	/**
	 * Constructs a new power scale with the default domain [0,1], the default range [0,1], and the exponent .5. This method is shorthand for:
	 * d3.scale.pow().exponent(.5)
	 * The returned scale is a function that takes a single argument x representing a value in the input domain; the return value is the corresponding value in the output range. Thus, the returned scale is equivalent to the sqrt function for numbers; for example sqrt(0.25) returns 0.5.
	 * @return d3AutoCompletion_Scale_Pow
	 */
	public function sqrt(){}
	/**
	 * Constructs a new power scale with the default domain [0,1], the default range [0,1], and the default exponent 1. Thus, the default power scale is equivalent to the identity function for numbers; for example pow(0.5) returns 0.5.
	 * @param integer $x
	 * @return d3AutoCompletion_Scale_Pow
	 */
	public function pow($x=null){}
	/**
	 * Constructs a new log scale with the default domain [1,10], the default range [0,1], and the base 10.
	 * @param integer $x
	 * @return d3AutoCompletion_Scale_Log
	 */
	public function log($x=null){}
	/**
	 * Quantize scales are a variant of linear scales with a discrete rather than continuous range. The input domain is still continuous, and divided into uniform segments based on the number of values in (the cardinality of) the output range. The mapping is linear in that the output range value y can be expressed as a linear function of the input domain value x: y = mx + b. The input domain is typically a dimension of the data that you want to visualize, such as the height of students (measured in meters) in a sample population. The output range is typically a dimension of the desired output visualization, such as the height of bars (measured in pixels) in a histogram.
	 * Constructs a new quantize scale with the default domain [0,1] and the default range [0,1]. Thus, the default quantize scale is equivalent to the round function for numbers; for example quantize(0.49) returns 0, and quantize(0.51) returns 1.
	 * @param integer $x
	 * @return d3AutoCompletion_Scale_Quantize
	 */
	public function quantize($x=null){}
	/**
	 * Quantile scales map an input domain to a discrete range. Although the input domain is continuous and the scale will accept any reasonable input value, the input domain is specified as a discrete set of values. The number of values in (the cardinality of) the output range determines the number of quantiles that will be computed from the input domain. To compute the quantiles, the input domain is sorted, and treated as a population of discrete values. The input domain is typically a dimension of the data that you want to visualize, such as the daily change of the stock market. The output range is typically a dimension of the desired output visualization, such as a diverging color scale.
	 * Constructs a new quantile scale with an empty domain and an empty range. The quantile scale is invalid until both a domain and range is specified.
	 * @param integer $x
	 * @return d3AutoCompletion_Scale_Quantile
	 */
	public function quantile($x=null){}
	/**
	 * Threshold scales are similar to quantize scales, except they allow you to map arbitrary subsets of the domain to discrete values in the range. The input domain is still continuous, and divided into slices based on a set of threshold values. The input domain is typically a dimension of the data that you want to visualize, such as the height of students (measured in meters) in a sample population. The output range is typically a dimension of the desired output visualization, such as a set of colors (represented as strings).
	 * Constructs a new threshold scale with the default domain [.5] and the default range [0,1]. Thus, the default quantize scale is equivalent to the round function for numbers; for example threshold(0.49) returns 0, and threshold(0.51) returns 1.
	 * @param integer $x
	 * @return d3AutoCompletion_Scale_Threshold
	 */
	public function threshold($x=null){}
}
class d3AutoCompletion_Scale_Threshold{
	public function domain($numbers){}
	public function range($numbers){}
	/**
	 * Returns an exact copy of this scale. Changes to this scale will not affect the returned scale, and vice versa.
	 * @return d3AutoCompletion_Scale_Threshold
	 */
	public function copy(){}	
}
class d3AutoCompletion_Scale_Quantile{
	public function domain($numbers){}
	public function range($numbers){}
	public function quantiles(){}
	/**
	 * Returns an exact copy of this scale. Changes to this scale will not affect the returned scale, and vice versa.
	 * @return d3AutoCompletion_Scale_Quantile
	 */
	public function copy(){}	
}
class d3AutoCompletion_Scale_Quantize{
	public function domain($numbers){}
	public function range($numbers){}
	/**
	 * Returns an exact copy of this scale. Changes to this scale will not affect the returned scale, and vice versa.
	 * @return d3AutoCompletion_Scale_Quantize
	 */
	public function copy(){}	
}
class d3AutoCompletion_Scale_Log{
	public function invert($x){}
	public function domain($numbers){}
	public function range($numbers){}
	public function rangeRound($values){}
	public function interpolate($interpolate){}
	public function clamp($boolean){}
	public function nice(){}
	public function ticks($count){}
	public function tickFormat($count){}
	/**
	 * Returns an exact copy of this scale. Changes to this scale will not affect the returned scale, and vice versa.
	 * @return d3AutoCompletion_Scale_Log
	 */	
	public function copy(){}	
}
class d3AutoCompletion_Scale_Pow{
	public function invert($x){}
	public function domain($numbers){}
	public function range($numbers){}
	public function rangeRound($values){}
	public function exponent($k){}
	public function interpolate($interpolate){}
	public function clamp($boolean){}
	public function nice(){}
	public function ticks($count){}
	public function tickFormat($count){}
	/**
	 * Returns an exact copy of this scale. Changes to this scale will not affect the returned scale, and vice versa.
	 * @return d3AutoCompletion_Scale_Pow
	 */
	public function copy(){}	
}
class d3AutoCompletion_Scale_Identity{
	/**
	 * Returns the given value x.
	 * @param integer $x
	 * @return integer
	 */
	public function invert($x){}
	public function domain($numbers){}
	/**
	 * If numbers is specified, sets the scale's input domain and output range to the specified array of numbers. The array must contain two or more numbers. If the elements in the given array are not numbers, they will be coerced to numbers; this coercion happens similarly when the scale is called. If numbers is not specified, returns the scale's current input domain (or equivalently, output range).
	 * @param array $numbers
	 * @return d3AutoCompletion_Scale_Identity
	 */
	public function range($numbers){}
	/**
	 * Returns approximately count representative values from the scale's input domain (or equivalently, output range). The returned tick values are uniformly spaced, have human-readable values (such as multiples of powers of 10), and are guaranteed to be within the extent of the input domain. Ticks are often used to display reference lines, or tick marks, in conjunction with the visualized data. The specified count is only a hint; the scale may return more or fewer values depending on the input domain.
	 * @param integer $count
	 */
	public function ticks($count){}
	/**
	 * Returns a number format function suitable for displaying a tick value. The specified count should have the same value as the count that is used to generate the tick values. You don't have to use the scale's built-in tick format, but it automatically computes the appropriate precision based on the fixed interval between tick values.
	 * @param integer $count
	 * @return Closure
	 */
	public function tickFormat($count){}
	/**
	 * Returns an exact copy of this scale. Changes to this scale will not affect the returned scale, and vice versa.
	 * @return d3AutoCompletion_Scale_Identity
	 */
	public function copy(){}
}
class d3AutoCompletion_Scale_Linear{
	/**
     * Given a value x in the input domain, returns the corresponding value in the output range.
     * @return d3AutoCompletion_Scale_Linear
	 */
	public function invert($y){}
	/**
	 * If numbers is specified, sets the scale's input domain to the specified array of numbers. The array must contain two or more numbers. If the elements in the given array are not numbers, they will be coerced to numbers; this coercion happens similarly when the scale is called. Thus, a linear scale can be used to encode types such as date objects that can be converted to numbers; however, it is often more convenient to use d3.time.scale for dates. (You can implement your own convertible number objects using valueOf.) If numbers is not specified, returns the scale's current input domain.
	 * Although linear scales typically have just two numeric values in their domain, you can specify more than two values for a polylinear scale. In this case, there must be an equivalent number of values in the output range. A polylinear scale represents multiple piecewise linear scales that divide a continuous domain and range. This is particularly useful for defining diverging quantitative scales.
	 * @param array $numbers
     * @return d3AutoCompletion_Scale_Linear
	 */
	public function domain($numbers){}
	/**
	 * If values is specified, sets the scale's output range to the specified array of values. The array must contain two or more values, to match the cardinality of the input domain. The elements in the given array need not be numbers; any value that is supported by the underlying interpolator will work. However, numeric ranges are required for the invert operator. If values is not specified, returns the scale's current output range.
	 * @param array $values
     * @return d3AutoCompletion_Scale_Linear
	 */
	public function range($values){}
	/**
	 * Sets the scale's output range to the specified array of values, while also setting the scale's interpolator to d3.interpolateRound. This is a convenience routine for when the values output by the scale should be exact integers, such as to avoid antialiasing artifacts. It is also possible to round the output values manually after the scale is applied.
	 * @param array $values
     * @return d3AutoCompletion_Scale_Linear
	 */
	public function rangeRound($values){}
	/**
	 * If factory is specified, sets the scale's output interpolator using the specified factory. The interpolator factory defaults to d3.interpolate, and is used to map the normalized domain parameter t in [0,1] to the corresponding value in the output range. The interpolator factory will be used to construct interpolators for each adjacent pair of values from the output range. If factory is not specified, returns the scale's interpolator factory.
	 * @param array $factory
     * @return d3AutoCompletion_Scale_Linear
	 */
	public function interpolate($factory){}
	/**
	 * If boolean is specified, enables or disables clamping accordingly. By default, clamping is disabled, such that if a value outside the input domain is passed to the scale, the scale may return a value outside the output range through linear extrapolation. For example, with the default domain and range of [0,1], an input value of 2 will return an output value of 2. If clamping is enabled, the normalized domain parameter t is clamped to the range [0,1], such that the return value of the scale is always within the scale's output range. If boolean is not specified, returns whether or not the scale currently clamps values to within the output range.
	 * @param array $boolean
     * @return d3AutoCompletion_Scale_Linear
	 */
	public function clamp($boolean){}
	/**
	 * Extends the domain so that it starts and ends on nice round values. This method typically modifies the scale's domain, and may only extend the bounds to the nearest round value. The precision of the round value is dependent on the extent of the domain dx according to the following formula: exp(round(log(*dx*)) - 1). Nicing is useful if the domain is computed from data and may be irregular. For example, for a domain of [0.20147987687960267, 0.996679553296417], the nice domain is [0.2, 1]. If the domain has more than two values, nicing the domain only affects the first and last value.
     * @return d3AutoCompletion_Scale_Linear
	 */
	public function nice(){}
	/**
	 * Returns approximately count representative values from the scale's input domain. The returned tick values are uniformly spaced, have human-readable values (such as multiples of powers of 10), and are guaranteed to be within the extent of the input domain. Ticks are often used to display reference lines, or tick marks, in conjunction with the visualized data. The specified count is only a hint; the scale may return more or fewer values depending on the input domain.
	 * @param integer $count
	 * @return array
	 */
	public function ticks($count){}
	/**
	 * Returns a number format function suitable for displaying a tick value. The specified count should have the same value as the count that is used to generate the tick values. You don't have to use the scale's built-in tick format, but it automatically computes the appropriate precision based on the fixed interval between tick values.
	 * @param integer $count
	 * @return Closure
	 */
	public function tickFormat($count){}
	/**
	 * Returns an exact copy of this linear scale. Changes to this scale will not affect the returned scale, and vice versa.
	 * @return d3AutoCompletion_Scale_Linear
	 */
	public function copy(){}
	
}


class d3AutoCompletion_Selection{
	public $event;
	/**
	 * For each element in the current selection, selects the first descendant element that matches the specified selector string. If no element matches the specified selector for the current element, the element at the current index will be null in the returned selection; operators (with the exception of data) automatically skip null elements, thereby preserving the index of the existing selection. If the current element has associated data, this data is inherited by the returned subselection, and automatically bound to the newly selected elements. If multiple elements match the selector, only the first matching element in document traversal order will be selected.
	 * The selector may also be specified as a function that returns an element, or null if there is no matching element. In this case, the specified selector is invoked in the same manner as other operator functions, being passed the current datum d and index i, with the this context as the current DOM element.
	 * @see https://github.com/mbostock/d3/wiki/Selections#wiki-select
	 * @param string|document $selector
	 * @return d3AutoCompletion_Selection
	 */
	public function select($selector){}
	/**
	 * For each element in the current selection, selects descendant elements that match the specified selector string. The returned selection is grouped by the ancestor node in the current selection. If no element matches the specified selector for the current element, the group at the current index will be empty in the returned selection. The subselection does not inherit data from the current selection; however, if the data value is specified as a function, this function will be based the data d of the ancestor node and the group index i.
	 * Grouping by selectAll also affects subsequent entering placeholder nodes. Thus, to specify the parent node when appending entering nodes, use select followed by selectAll:
	 * @see https://github.com/mbostock/d3/wiki/Selections#wiki-selectAll
	 * @param string|document $selector
	 * @return d3AutoCompletion_Selection
	 */
	public function selectAll($selector){}
	/**
	 * If value is specified, sets the attribute with the specified name to the specified value on all selected elements. If value is a constant, then all elements are given the same attribute value; otherwise, if value is a function, then the function is evaluated for each selected element (in order), being passed the current datum d and the current index i, with the this context as the current DOM element. The function's return value is then used to set each element's attribute. A null value will remove the specified attribute.
	 * If value is not specified, returns the value of the specified attribute for the first non-null element in the selection. This is generally useful only if you know that the selection contains exactly one element.
	 * The specified name may have a namespace prefix, such as xlink:href, to specify an "href" attribute in the XLink namespace. By default, D3 supports svg, xhtml, xlink, xml, and xmlns namespaces. Additional namespaces can be registered by adding to d3.ns.prefix.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-attr
	 * @param string $name
	 * @param mixed $value [optional]
	 * @return d3AutoCompletion_Selection
	 */
	public function attr($name, $value=null){}
	/**
	 * This operator is a convenience routine for setting the "class" attribute; it understands that the "class" attribute is a set of tokens separated by spaces. Under the hood, it will use the classList if available, for convenient adding, removing and toggling of CSS classes.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-classed
	 * @param string $name
	 * @param mixed $value
	 * @return d3AutoCompletion_Selection
	 */
	public function classed($name, $value=null){}
	/**
	 * If value is specified, sets the CSS style property with the specified name to the specified value on all selected elements. If value is a constant, then all elements are given the same style value; otherwise, if value is a function, then the function is evaluated for each selected element (in order), being passed the current datum d and the current index i, with the this context as the current DOM element. The function's return value is then used to set each element's style property. A null value will remove the style property. An optional priority may also be specified, either as null or the string "important" (without the exclamation point).
	 * If value is not specified, returns the current computed value of the specified style property for the first non-null element in the selection. This is generally useful only if you know the selection contains exactly one element. Note that the computed value may be different than the value that was previously set, particularly if the style property was set using a shorthand property (such as the "font" style, which is shorthand for "font-size", "font-face", etc.).
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-style
	 * @param string $name
	 * @param mixed $value
	 * @param bool $priority
	 * @return d3AutoCompletion_Selection
	 */
	public function style($name, $value=null, $priority=null){}
	/**
	 * Some HTML elements have special properties that are not addressable using standard attributes or styles. For example, form text fields have a value string property, and checkboxes have a checked boolean property. You can use the property operator to get or set these properties, or any other addressable field on the underlying element, such as className.
	 * If value is specified, sets the property with the specified name to the specified value on all selected elements. If value is a constant, then all elements are given the same property value; otherwise, if value is a function, then the function is evaluated for each selected element (in order), being passed the current datum d and the current index i, with the this context as the current DOM element. The function's return value is then used to set each element's property. A null value will delete the specified attribute.
	 * If value is not specified, returns the value of the specified property for the first non-null element in the selection. This is generally useful only if you know the selection contains exactly one element.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-property
	 * @param string $name
	 * @param mixed $value
	 * @return d3AutoCompletion_Selection
	 */
	public function property($name, $value=null){}
	/**
	 * Some HTML elements have special properties that are not addressable using standard attributes or styles. For example, form text fields have a value string property, and checkboxes have a checked boolean property. You can use the property operator to get or set these properties, or any other addressable field on the underlying element, such as className.
	 * If value is specified, sets the property with the specified name to the specified value on all selected elements. If value is a constant, then all elements are given the same property value; otherwise, if value is a function, then the function is evaluated for each selected element (in order), being passed the current datum d and the current index i, with the this context as the current DOM element. The function's return value is then used to set each element's property. A null value will delete the specified attribute.
	 * If value is not specified, returns the value of the specified property for the first non-null element in the selection. This is generally useful only if you know the selection contains exactly one element.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-text
	 * @param mixed $value
	 * @return string
	 * @return d3AutoCompletion_Selection
	 */
	public function text($value){}
	/**
	 * he html operator is based on the innerHTML property; setting the inner HTML content will replace any existing child elements. Also, you may prefer to use the append or insert operators to create HTML content in a data-driven way; this operator is intended for when you want a little bit of HTML, say for rich formatting.
	 * If value is specified, sets the inner HTML content to the specified value on all selected elements. If value is a constant, then all elements are given the same inner HTML content; otherwise, if value is a function, then the function is evaluated for each selected element (in order), being passed the current datum d and the current index i, with the this context as the current DOM element. The function's return value is then used to set each element's inner HTML content. A null value will clear the content.
	 * If value is not specified, returns the inner HTML content for the first non-null element in the selection. This is generally useful only if you know the selection contains exactly one element.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-html
	 * @param mixed $value
	 * @return d3AutoCompletion_Selection
	 */
	public function html($value){}
	/**
	 * Appends a new element with the specified name as the last child of each element in the current selection. Returns a new selection containing the appended elements. Each new element inherits the data of the current elements, if any, in the same manner as select for subselections. The name must be specified as a constant, though in the future we might allow appending of existing elements or a function to generate the name dynamically.
	 * The element's tag name may have a namespace prefix, such as "svg:text" to create a "text" element in the SVG namespace. By default, D3 supports svg, xhtml, xlink, xml and xmlns namespaces. Additional namespaces can be registered by adding to d3.ns.prefix.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-html
	 * @param string $name
	 * @return d3AutoCompletion_Selection
	 */
	public function append($name){}
	/**
	 * Inserts a new element with the specified name before the element matching the specified before selector, for each element in the current selection. Returns a new selection containing the inserted elements. If the before selector does not match any elements, then the new element will be the last child as with append. Each new element inherits the data of the current elements (if any), in the same manner as select for subselections. The name and before selector must be specified as constants, though in the future we might allow inserting of existing elements or a function to generate the name or selector dynamically.
	 * For instance, insert("div", ":first-child") will prepend child div nodes to the current selection.
	 * The element's tag name may have a namespace prefix, such as "svg:text" to create a "text" element in the SVG namespace. By default, D3 supports svg, xhtml, xlink, xml and xmlns namespaces. Additional namespaces can be registered by adding to d3.ns.prefix.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-insert
	 * @param string $name
	 * @param string|document $before
	 * @return d3AutoCompletion_Selection
	 */
	public function insert($name, $before=null){}
	/**
	 * Removes the elements in the current selection from the current document. Generally speaking, you should stop using selections once you've removed them, because there's not currently a way to add them back to the document. (See the append and insert operators above for details.)
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-remove
	 * @return d3AutoCompletion_Selection
	 */
	public function remove(){}
	
	/**
	 * Joins the specified array of data with the current selection. The specified values is an array of data values, such as an array of numbers or objects, or a function that returns an array of values. If a key function is not specified, then the first datum in the specified array is assigned to the first element in the current selection, the second datum to the second selected element, and so on. When data is assigned to an element, it is stored in the property __data__, thus making the data "sticky" so that the data is available on re-selection.
	 * The values array specifies the data for each group in the selection. Thus, if the selection has multiple groups (such as a d3.selectAll followed by a selection.selectAll), then data should be specified as a function that returns an array (assuming that you want different data for each group). For example, you may bind a two-dimensional array to an initial selection, and then bind the contained inner arrays to each subselection. The values function in this case is the identity function: it is invoked for each group of child elements, being passed the data bound to the parent element, and returns this array of data.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-data
	 * @param array $values
	 * @param Closure|f3 $key
	 * @return d3AutoCompletion_Selection
	 */
	public function data($values, $key=null){}
	/**
	 * Returns the entering selection: placeholder nodes for each data element for which no corresponding existing DOM element was found in the current selection. This method is only defined on a selection returned by the data operator. In addition, the entering selection only defines append, insert and select operators; you must use these operators to instantiate the entering nodes before modifying any content. (Enter selections also support empty to check if they are empty.) Note that the enter operator merely returns a reference to the entering selection, and it is up to you to add the new nodes.
	 * @see https://github.com/mbostock/d3/wiki/Selections#wiki-enter
	 * @return d3AutoCompletion
	 */
	public function enter(){}
	/**
	 * Returns the exiting selection: existing DOM elements in the current selection for which no new data element was found. This method is only defined on a selection returned by the data operator. The exiting selection defines all the normal operators, though typically the main one you'll want to use is remove; the other operators exist primarily so you can define an exiting transition as desired. Note that the exit operator merely returns a reference to the exiting selection, and it is up to you to remove the new nodes.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-exit
	 * @return d3AutoCompletion
	 */
	public function exit(){}
	/**
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-filter
	 * @param string|document $selector
	 * @return d3AutoCompletion_Selection
	 */
	public function filter($selector){}
	/**
	 * Gets or sets the bound data for each selected element. Unlike the selection.data method, this method does not compute a join (and thus does not compute enter and exit selections). This method is implemented on top of selection.property.
	 * https://github.com/mbostock/d3/wiki/Selections#wiki-datum
	 * @param Closure|Date $value
	 * @return d3AutoCompletion_Selection
	 */
	public function datum($value){}
	/**
	 * Sorts the elements in the current selection according to the specified comparator function. The comparator function is passed two data elements a and b to compare, returning either a negative, positive, or zero value. If negative, then a should be before b; if positive, then a should be after b; otherwise, a and b are considered equal and the order is arbitrary. Note that the sort is not guaranteed to be stable; however, it is guaranteed to have the same behavior as your browser's built-in sort method on arrays.
	 * @param document|HTMLElement $comparator
	 * @return d3AutoCompletion_Selection
	 */
	public function sort($comparator){}
	/**
	 * Re-inserts elements into the document such that the document order matches the selection order. This is equivalent to calling sort() if the data is already sorted, but much faster.
	 * @return d3AutoCompletion_Selection
	 */
	public function order(){}
	/**
	 * Adds or removes an event listener to each element in the current selection, for the specified type. The type is a string event type name, such as "click", "mouseover", or "submit". The specified listener is invoked in the same manner as other operator functions, being passed the current datum d and index i, with the this context as the current DOM element. To access the current event, use the global d3.event.
	 * @param string $type
	 * @param Closure|f3 $listener
	 * @param bool $capture
	 * @return d3AutoCompletion_Selection
	 */
	public function on($type, $listener, $capture){}
	/**
	 * Returns the x and y coordinates of the current d3.event, relative to the specified container. The container may be an HTML or SVG container element, such as an svg:g or svg:svg. The coordinates are returned as a two-element array [*x*, y].
	 * @param mixed $container
	 * @return array
	 * @return d3AutoCompletion_Selection
	 */
	public function mouse($container){}
	/**
	 * Returns the x and y coordinates of each touch associated with the current d3.event, based on the touches attribute, relative to the specified container. The container may be an HTML or SVG container element, such as an svg:g or svg:svg. The coordinates are returned as an array of two-element arrays [ [*x1*, y1], [*x2*, y2], … ].
	 * @param mixed $container
	 * @return array
	 * @return d3AutoCompletion_Selection
	 */
	public function touches($container){}
	/**
	 * Starts a transition for the current selection. Transitions behave much like selections, except operators animate smoothly over time rather than applying instantaneously.
	 * @return d3AutoCompletion_Selection
	 */
	public function transition(){}

	/**
	 * nvokes the specified function for each element in the current selection, passing in the current datum d and index i, with the this context of the current DOM element. This operator is used internally by nearly every other operator, and can be used to invoke arbitrary code for each selected element. The each operator can be used to process selections recursively, by using d3.select(this) within the callback function.
	 * @param Closure|f3 $function
	 * @return d3AutoCompletion_Selection
	 */
	public function each($function){}
	/**
	 * Invokes the specified function once, passing in the current selection along with any optional arguments. The call operator always returns the current selection, regardless of the return value of the specified function. The call operator is identical to invoking a function by hand; but it makes it easier to use method chaining. For example, say we want to set a number of attributes the same way in a number of different places.
	 * @param Closure|f3 $function
	 * @param mixed $arguments
	 * @return d3AutoCompletion_Selection
	 */
	public function call($function, $arguments=null){}
	/**
	 * Returns true if the current selection is empty; a selection is empty if it contains no non-null elements.
	 * @return d3AutoCompletion_Selection
	 */
	public function empty(){}
	/**
	 * Returns the first non-null element in the current selection. If the selection is empty, returns null.
	 * @return d3AutoCompletion_Selection
	 */
	public function node(){}
	
	/**
	 * Returns the root selection, equivalent to d3.select(document.documentElement). This function can also be used to check if an object is a selection: o instanceof d3.selection. You can also add new methods to the selection prototype. 
	 */
	public function selection(){}


}

class d3AutoCompletion_Transitions {
	/**
	 * Specifies the transition delay in milliseconds. If delay is a constant, then all elements are given the same delay; otherwise, if delay is a function, then the function is evaluated for each selected element (in order), being passed the current datum d and the current index i, with the this context as the current DOM element. The function's return value is then used to set each element's delay. The default delay is 0.
	 * @param mixed $delay
	 * @return d3AutoCompletion_Transitions
	 */
	public function delay($delay){}
	/**
	 * Specifies per-element duration in milliseconds. If duration is a constant, then all elements are given the same duration; otherwise, if duration is a function, then the function is evaluated for each selected element (in order), being passed the current datum d and the current index i, with the this context as the current DOM element. The function's return value is then used to set each element's duration. The default duration is 250ms.
	 * @param mixed $duration
	 * @return d3AutoCompletion_Transitions
	 */
	public function duration($duration){}
	/**
	 * Specifies the transition easing function. If value is a function, it is used to ease the current parametric timing value t in the range [0,1]; otherwise, value is assumed to be a string and the arguments are passed to the d3.ease method to generate an easing function. The default easing function is "cubic-in-out". Note that it is not possible to customize the easing function per-element or per-attribute; however, if you use the "linear" easing function, you can apply custom easing inside your interpolator using attrTween or styleTween.
	 * @param mixed $value
	 * @param mixed $arguments
	 * @return d3AutoCompletion_Transitions
	 */
	public function ease($value, $arguments){}
	
	/**
	 * @param mixed $name
	 * @param mixed $value
	 * @return d3AutoCompletion_Transitions
	 */
	public function attr($name, $value){}
	/**
	 * @param mixed $name
	 * @param mixed $value
	 * @return d3AutoCompletion_Transitions
	 */
	public function attrTween($name, $value){}
	/**
	 * @param mixed $name
	 * @param mixed $value
	 * @return d3AutoCompletion_Transitions
	 */
	public function style($name, $value, $priority){}
	/**
	 * @param mixed $name
	 * @param mixed $value
	 * @return d3AutoCompletion_Transitions
	 */
	public function styleTween($name, $value, $priority){}
	/**
	 * @param mixed $text
	 * @return d3AutoCompletion_Transitions
	 */
	public function text($text){}
	/**
	 * @param mixed $name
	 * @param mixed $tween
	 * @return d3AutoCompletion_Transitions
	 */
	public function tween($name, $tween){}
	/**
	 * @param mixed $name
	 * @return d3AutoCompletion_Transitions
	 */
	public function select($name){}
	/**
	 * @param mixed $name
	 * @return d3AutoCompletion_Transitions
	 */
	public function selectAll($name){}
	/**
	 * @return d3AutoCompletion_Transitions
	 */
	public function transition(){}
	/**
	 * @return d3AutoCompletion_Transitions
	 */
	public function remove(){}
}

class d3AutoCompletion_Layout_Chord{
	/**
	 * If matrix is specified, sets the input data matrix used by this layout. If matrix is not specified, returns the current data matrix, which defaults to undefined. 
	 * @param mixed $matrix
	 * @return d3AutoCompletion_Layout_Chord
	 */
	public function matrix($matrix){}	
	/**
	 * If padding is specified, sets the angular padding between groups to the specified value in radians. If padding is not specified, returns the current padding, which defaults to zero. You may wish to compute the padding as a function of the number of groups (the number of rows or columns in the associated matrix). 
	 * @param padding $padding
	 * @return d3AutoCompletion_Layout_Chord
	 */
	public function padding($padding){}	
	/**
	 * f comparator is specified, sets the sort order of groups (rows) for the layout using the specified comparator function. The comparator function is invoked for pairs of rows, being passed the sum of row i and row j. Typically, the comparator should be specified as either d3.ascending or d3.descending. If comparator is not specified, returns the current group sort order, which defaults to null for no sorting.
	 * @param mixed $comparator
	 * @return d3AutoCompletion_Layout_Chord
	 */
	public function sortGroups($comparator){}
	/**
	 * If comparator is specified, sets the sort order of subgroups (columns within rows) for the layout using the specified comparator function. The comparator function is invoked for pairs of cells, being passed the value of each cell. Typically, the comparator should be specified as either ascending or descending. If comparator is not specified, returns the current subgroup sort order, which defaults to null for no sorting.
	 * @param mixed $comparator
	 * @return d3AutoCompletion_Layout_Chord
	 */
	public function sortSubgroups($comparator){}	
	/**
	 * If comparator is specified, sets the sort order of chords (z-order) for the layout using the specified comparator function. The comparator function is invoked for pairs of chords, being passed the minimum value of the associated source and target cells. Typically, the comparator should be specified as either ascending or descending. If comparator is not specified, returns the current chord sort order, which defaults to null for no sorting.
	 * @param mixed $choords
	 * @return d3AutoCompletion_Layout_Chord
	 */
	public function sortChords($choords){}	
	/**
	 * Returns the computed chord objects, given the layout's current configuration and associated matrix. If the chord objects were previously-computed, this method returns the cached value. Changing any attribute of the layout implicitly clears the previously-computed chords, if any, such that the next call to this method will recompute the layout. The returned objects have the following properties:
	 * source - an object describing the source.
	 * target - an object describing the target.
	 * These objects, in turn, describe the underlying entity:
	 * 
	 * index - the row index, i.
	 * subindex - the column index, j.
	 * startAngle - the start angle of the arc, in radians.
	 * endAngle - the end angle of the arc, in radians.
	 * value - the value of the associated cell ij, a number.
	 * 
	 * Note that these objects conveniently match the default accessors for the chord generator; however, you can still override the accessors to tweak the layout, or simply manipulate the returned objects.
	 * @return d3AutoCompletion_Layout_Chord
	 */
	public function choords(){}	
	/**
	 * Returns the computed group objects, given the layout's current configuration and associated matrix. If the group objects were previously-computed, this method returns the cached value. Changing any attribute of the layout implicitly clears the previously-computed groups, if any, such that the next call to this method will recompute the layout. The returned objects have the following properties:
	 * 
	 * index - the row index, i.
	 * startAngle - the start angle of the arc, in radians.
	 * endAngle - the end angle of the arc, in radians.
	 * value - the sum of the associated row i, a number.

	 * Note that these objects conveniently match the default accessors for the arc generator; however, you can still override the accessors to tweak the layout, or simply manipulate the returned objects.
	 * @return d3AutoCompletion_Layout_Chord
	 */
	public function groups(){}	
}

class d3AutoCompletion_Layout_Cluster {
	/**
	 * If comparator is specified, sets the sort order of sibling nodes for the layout using the specified comparator function. If comparator is not specified, returns the current group sort order, which defaults to null for no sorting. The comparator function is invoked for pairs of nodes, being passed the input data for each node. The default comparator is null, which disables sorting and uses tree traversal order.
	 * @param mixed $comparator
	 * @return d3AutoCompletion_Layout_Cluster
	 */
	public function sort($comparator){}
	/**
	 * If children is specified, sets the specified children accessor function. 
	 * @param mixed $children
	 * @return d3AutoCompletion_Layout_Cluster
	 */
	public function children($children){}
	/**
	 * @param unknown_type $root
	 * @return d3AutoCompletion_Layout_Cluster
	 */
	public function nodes($root){}
	/**
	 * @param unknown_type $links
	 * @return d3AutoCompletion_Layout_Cluster
	 */
	public function links($links){}
	/**
	 * @param unknown_type $separation
	 * @return d3AutoCompletion_Layout_Cluster
	 */
	public function separation($separation){}
	/**
	 * @param unknown_type $size
	 * @return d3AutoCompletion_Layout_Cluster
	 */
	public function size($size){}
}

class d3AutoCompletion_Layout_Force{	
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function on($type, $listener){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function size($size){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function linkDistance($distance){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function linkStrength($strength){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function friction($friction){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function charge($charge){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function theta($theta){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function gravity($gravity){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function nodes($nodes){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function links($links){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function start(){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function alpha($value){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function resume(){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function stop(){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function tick(){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function drag(){}
}
class d3AutoCompletion_Layout_Hierarchy{
	/**
	 * @return d3AutoCompletion_Layout_Hierarchy
	 */
	public function sort($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Hierarchy
	 */
	public function children($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Hierarchy
	 */
	public function nodes($root){}
	/**
	 * @return d3AutoCompletion_Layout_Hierarchy
	 */
	public function links($nodes){}
	/**
	 * @return d3AutoCompletion_Layout_Hierarchy
	 */
	public function value($value){}
	/**
	 * @return d3AutoCompletion_Layout_Hierarchy
	 */
	public function revalue($value){}
	
}
class d3AutoCompletion_Layout_Histogram{
	/**
	 * @return d3AutoCompletion_Layout_Histogram
	 */
	public function value($accessor){}
	/**
	 * @return d3AutoCompletion_Layout_Histogram
	 */
	public function range($range){}
	/**
	 * @return d3AutoCompletion_Layout_Histogram
	 */
	public function bins($bins){}
	/**
	 * @return d3AutoCompletion_Layout_Histogram
	 */
	public function frequency($frequency){}
	
}
class d3AutoCompletion_Layout_Pack{
	/**
	 * @return d3AutoCompletion_Layout_Pack
	 */
	public function sort($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Pack
	 */
	public function children($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Pack
	 */
	public function nodes($root){}
	/**
	 * @return d3AutoCompletion_Layout_Pack
	 */
	public function links($nodes){}
	/**
	 * @return d3AutoCompletion_Layout_Pack
	 */
	public function value($value){}
	/**
	 * @return d3AutoCompletion_Layout_Pack
	 */
	public function size($size){}
	/**
	 * @return d3AutoCompletion_Layout_Pack
	 */
	public function padding($padding){}
	
}
class d3AutoCompletion_Layout_Partition{
	/**
	 * @return d3AutoCompletion_Layout_Partition
	 */
	public function sort($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Partition
	 */
	public function children($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Partition
	 */
	public function nodes($root){}
	/**
	 * @return d3AutoCompletion_Layout_Partition
	 */
	public function links($nodes){}
	/**
	 * @return d3AutoCompletion_Layout_Partition
	 */
	public function value($value){}
	/**
	 * @return d3AutoCompletion_Layout_Partition
	 */
	public function size($size){}
	
}
class d3AutoCompletion_Layout_Pie{
	/**
	 * @return d3AutoCompletion_Layout_Pie
	 */
	public function pie($values, $index){}
	/**
	 * @return d3AutoCompletion_Layout_Pie
	 */
	public function value($accessor){}
	/**
	 * @return d3AutoCompletion_Layout_Pie
	 */
	public function sort($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Pie
	 */
	public function startAngle($angle){}
	/**
	 * @return d3AutoCompletion_Layout_Pie
	 */
	public function endAngle($angle){}
	
}
class d3AutoCompletion_Layout_Stack{
	/**
	 * @return d3AutoCompletion_Layout_Stack
	 */
	public function stack($layers, $index){}
	/**
	 * @return d3AutoCompletion_Layout_Stack
	 */
	public function values($accessor){}
	/**
	 * @return d3AutoCompletion_Layout_Stack
	 */
	public function offset($offset){}
	/**
	 * @return d3AutoCompletion_Layout_Stack
	 */
	public function order($order){}
	/**
	 * @return d3AutoCompletion_Layout_Stack
	 */
	public function x($accessor){}
	/**
	 * @return d3AutoCompletion_Layout_Stack
	 */
	public function y($accessor){}
	/**
	 * @return d3AutoCompletion_Layout_Stack
	 */
	public function out($setter){}
	
}
class d3AutoCompletion_Layout_Tree{
	/**
	 * @return d3AutoCompletion_Layout_Tree
	 */
	public function sort($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Tree
	 */
	public function children($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Tree
	 */
	public function nodes($root){}
	/**
	 * @return d3AutoCompletion_Layout_Tree
	 */
	public function links($nodes){}
	/**
	 * @return d3AutoCompletion_Layout_Tree
	 */
	public function separation($separation){}
	/**
	 * @return d3AutoCompletion_Layout_Tree
	 */
	public function size($size){}
}
class d3AutoCompletion_Layout_Treemap{
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function sort($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function children($comparator){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function nodes($root){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function links($nodes){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function value($value){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function size($size){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function padding($padding){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function round($round){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function sticky($sticky){}
}

class d3AutoCompletion_Layout{
	/**
	 * @param mixed $links
	 * @return d3AutoCompletion_Layout
	 */
	public function bundle($links){}
	/**
	 * Constructs a new chord layout. By default, the input data is not sorted, and there is no padding between groups. Unlike some of the other layouts, the chord layout is not a function to be applied to data; instead, data is specified by setting the associated matrix, and retrieved using the chords and groups accessors.
	 * @return d3AutoCompletion_Layout_Chord
	 */
	public function chord(){}
	/**
	 * Creates a new cluster layout with the default settings: the default sort order is null; the default children accessor assumes each input data is an object with a children array; the default separation function uses one node width for siblings, and two node widths for non-siblings; the default size is 1×1.
	 * @return d3AutoCompletion_Layout_Cluster
	 */
	public function cluster(){}
	/**
	 * @return d3AutoCompletion_Layout_Force
	 */
	public function force(){}
	/**
	 * @return d3AutoCompletion_Layout_Hierarchy
	 */
	public function hierarchy(){}
	/**
	 * @return d3AutoCompletion_Layout_Histogram
	 */
	public function histogram(){}
	/**
	 * @return d3AutoCompletion_Layout_Pack
	 */
	public function pack(){}
	/**
	 * @return d3AutoCompletion_Layout_Partition
	 */
	public function partition(){}
	/**
	 * @return d3AutoCompletion_Layout_Pie
	 */
	public function pie(){}
	/**
	 * @return d3AutoCompletion_Layout_Stack
	 */
	public function stack(){}
	/**
	 * @return d3AutoCompletion_Layout_Tree
	 */
	public function tree(){}
	/**
	 * @return d3AutoCompletion_Layout_Treemap
	 */
	public function treemap(){}

}
class d3AutoCompletion_Geo_GreatArc{
	/**
	 * @return d3AutoCompletion_Geo_GreatArc
	 */
	public function distance(){}
	/**
	 * @return d3AutoCompletion_Geo_GreatArc
	 */
	public function source(){}
	/**
	 * @return d3AutoCompletion_Geo_GreatArc
	 */
	public function target(){}
	/**
	 * @return d3AutoCompletion_Geo_GreatArc
	 */
	public function precision(){}
}
class d3AutoCompletion_Geo_GreatCircle{
	/**
	 * @return d3AutoCompletion_Geo_GreatCircle
	 */
	public function origin(){}
	/**
	 * @return d3AutoCompletion_Geo_GreatCircle
	 */
	public function angle(){}
	/**
	 * @return d3AutoCompletion_Geo_GreatCircle
	 */
	public function precision(){}
	/**
	 * @return d3AutoCompletion_Geo_GreatCircle
	 */
	public function clip(){}

}
class d3AutoCompletion_Geo_Path{
	/**
	 * @return d3AutoCompletion_Geo_Path
	 */
	public function pointRadius(){}
	/**
	 * @return d3AutoCompletion_Geo_Path
	 */
	public function projection(){}
	/**
	 * @return d3AutoCompletion_Geo_Path
	 */
	public function area(){}
	/**
	 * @return d3AutoCompletion_Geo_Path
	 */
	public function centroid(){}
	
}
class d3AutoCompletion_Geo_Mercator{
	/**
	 * @return d3AutoCompletion_Geo_Mercator
	 */
	public function scale(){}
	/**
	 * @return d3AutoCompletion_Geo_Mercator
	 */
	public function translate(){}
	
}
class d3AutoCompletion_Geo_Albers{
	/**
	 * @return d3AutoCompletion_Geo_Albers
	 */
	public function scale(){}
	/**
	 * @return d3AutoCompletion_Geo_Albers
	 */
	public function translate(){}
	/**
	 * @return d3AutoCompletion_Geo_Albers
	 */
	public function parallels(){}
	/**
	 * @return d3AutoCompletion_Geo_Albers
	 */
	public function origin(){}
	
}
class d3AutoCompletion_Geo_AlbersUsa{
	/**
	 * @return d3AutoCompletion_Geo_AlbersUsa
	 */
	public function scale(){}
	/**
	 * @return d3AutoCompletion_Geo_AlbersUsa
	 */
	public function translate(){}
	
}
class d3AutoCompletion_Geo_Azimuthal{
	/**
	 * @return d3AutoCompletion_Geo_Azimuthal
	 */
	public function mode(){}
	/**
	 * @return d3AutoCompletion_Geo_Azimuthal
	 */
	public function origin(){}
	/**
	 * @return d3AutoCompletion_Geo_Azimuthal
	 */
	public function scale(){}
	/**
	 * @return d3AutoCompletion_Geo_Azimuthal
	 */
	public function translate(){}
}
class d3AutoCompletion_Geo{
	/**
	 * @var d3AutoCompletion_Geo_Path $path
	 */
	public $path;
	/**
	 * @var d3AutoCompletion_Geo $bounds
	 */
	public function bounds();
	/**
	 * @var d3AutoCompletion_Geo_GreatArc $greatArc
	 */
	public $greatArc;
	/**
	 * @var d3AutoCompletion_Geo_GreatCircle $greatCircle
	 */
	public $greatCircle;
	/**
	 * @var d3AutoCompletion_Geo_Mercator $mercator
	 */
	public $mercator;
	/**
	 * @var d3AutoCompletion_Geo_Albers $albers
	 */
	public $albers;
	/**
	 * @var d3AutoCompletion_Geo_AlbersUsa $albersUsa
	 */
	public $albersUsa;
	/**
	 * @var d3AutoCompletion_Geo_Azimuthal $azimuthal
	 */
	public $azimuthal;
}

class d3AutoCompletion_Geom_Voronoi{}
class d3AutoCompletion_Geom_Delaunay{}
class d3AutoCompletion_Geom_QuadTree{}
class d3AutoCompletion_Geom_Polygon{}
class d3AutoCompletion_Geom_Hull{}
class d3AutoCompletion_Geom_Contour{}
class d3AutoCompletion_Geom{
	/**
	 * @var d3AutoCompletion_Geom_Voronoi $voronoi
	 */
	public $voronoi;
	/**
	 * @var d3AutoCompletion_Geom_Delaunay $delaunay
	 */
	public $delaunay;
	/**
	 * @var d3AutoCompletion_Geom_QuadTree $quadtree
	 */
	public $quadtree;
	/**
	 * @var d3AutoCompletion_Geom_Polygon $polygon
	 */
	public $polygon;
	/**
	 * @var d3AutoCompletion_Geom_Hull $hull
	 */
	public $hull;
	/**
	 * @var d3AutoCompletion_Geom_Contour $contour
	 */
	public $contour;
}

class d3AutoCompletion_CSV{
	/**
	 * parse a CSV string into objects using the header row.
	 * @param string $string
	 * @return d3AutoCompletion_CSV
	 */
	public function parse($string){}
	/**
	 * Parses the specified string, which is the contents of a CSV file, returning an array of arrays representing the parsed rows. The string is assumed to be RFC4180-compliant. Unlike the parse method, this method treats the header line as a standard row, and should be used whenever the CSV file does not contain a header. Each row is represented as an array rather than an object. Rows may have variable length. 
	 * @param string $string
	 * @param mixed $accessor
	 * @return d3AutoCompletion_CSV
	 */
	public function parseRows($string, $accessor){}
	/**
	 * Converts the specified array of rows into comma-separated values format, returning a string. This operation is the reverse of parseRows. Each row will be separated by a newline (\n), and each column within each row will be separated by a comma (,). Values that contain either commas, double-quotes (") or newlines will be escaped using double-quotes. 
	 * @param array $rows
	 * @return d3AutoCompletion_CSV
	 */
	public function format($rows){}
	
}

class d3AutoCompletion_RGB{
	/**
	 * Returns a brighter copy of this color. 
	 * @param mixed $k
	 * @return color
	 */
	public function brighter($k){}
	/**
	 * Returns a darker copy of this color. 
	 * @param mixed $k
	 * @return color
	 */
	public function darker($k){}
	/**
	 * @return d3AutoCompletion_HCL
	 */
	public function hsl(){}
	public function toString(){}
}
class d3AutoCompletion_LAB{
	/**
	 * Returns a brighter copy of this color. 
	 * @param mixed $k
	 * @return color
	 */
	public function brighter($k){}
	/**
	 * Returns a darker copy of this color. 
	 * @param mixed $k
	 * @return color
	 */
	public function darker($k){}
	/**
	 * @return d3AutoCompletion_RGB
	 */
	public function rgb(){}
	public function toString(){}
}
class d3AutoCompletion_HCL{
	/**
	 * Returns a brighter copy of this color.
	 * @param mixed $k
	 * @return color
	 */
	public function brighter($k){}
	/**
	 * Returns a darker copy of this color.
	 * @param mixed $k
	 * @return color
	 */
	public function darker($k){}
	/**
	 * @return d3AutoCompletion_RGB
	 */
	public function rgb(){}
	public function toString(){}
	
}
class d3AutoCompletion_HSL{
	/**
	 * Returns a brighter copy of this color. 
	 * @param mixed $k
	 * @return color
	 */
	public function brighter($k){}
	/**
	 * Returns a darker copy of this color. 
	 * @param mixed $k
	 * @return color
	 */
	public function darker($k){}
	/**
	 * @return d3AutoCompletion_RGB
	 */
	public function rgb(){}
	public function toString(){}
}

class d3AutoCompletion {
	
	/**
	 * @param integer $r
	 * @param integer $g
	 * @param integer $b
	 * or
	 * @param string $color
	 * @return d3AutoCompletion_RGB
	 */
	public function rgb(){}
	/**
	 * @param integer $h
	 * @param integer $s
	 * @param integer $l
	 * or
	 * @param string $color
	 * @return d3AutoCompletion_HSL
	 */
	public function hsl(){}
	/**
	 * @param integer $h
	 * @param integer $c
	 * @param integer $l
	 * or
	 * @param string $color
	 * @return d3AutoCompletion_HCL
	 */
	public function hcl(){}
	/**
	 * @param integer $l
	 * @param integer $a
	 * @param integer $b
	 * or
	 * @param string $color
	 * @return d3AutoCompletion_LAB
	 */
	public function lab(){}
	
	/**
	 * Selects the first element that matches the specified selector string, returning a single-element selection. If no elements in the current document match the specified selector, returns the empty selection. If multiple elements match the selector, only the first matching element (in document traversal order) will be selected.
	 * @param document|string $selector
	 * @return d3AutoCompletion_Selection
	 */
	public function select($selector){}
	/**
	 * 
	 * @param string|document $selector
	 * @return d3AutoCompletion_Selection
	 */
	public function selectAll($selector){}
	
	/**
	 * @var d3AutoCompletion_SVG $svg;
	 */
	public $svg;
	/**
	 * Create an animated transition. This is equivalent to d3.select(document).transition(). This method is used rarely, as it is typically easier to derive a transition from an existing selection, rather than deriving a selection from an existing transition.
	 * When called with an optional selection, this method typically returns the specified selection; i.e., it is a no-op. However, within the context of transition.each, this method will create a new transition for the specified selection that inherits the delay, duration and other properties of the parent transition. This is useful for implementing reusable components that can be called either on selections or on transitions, in the latter case supporting deriving concurrent transitions. An example of this is D3’s axis component.
	 * @return d3AutoCompletion_Transitions
	 */
	public function transition($selection);
	/**
	 * @var d3AutoCompletion_Layout
	 */	
	public $layout;
	/**
	 * @return d3AutoCompletion_Layout
	 */	
	public function layout();
	/**
	 * @return d3AutoCompletion_Geo
	 */	
	public $geo;
	/**
	 * @return d3AutoCompletion_Geom
	 */	
	public $geom;
	/**
	 * @var d3AutoCompletion_CSV
	 */
	public $csv;
	/**
	 * Issues an HTTP GET request for the comma-separated values (CSV) file at the specified url. The file contents are assumed to be RFC4180-compliant. The mime type of the request will be "text/csv". The request is processed asynchronously, such that this method returns immediately after opening the request. When the CSV data is available, the specified callback will be invoked with the parsed rows as the argument. If an error occurs, the callback function will instead be invoked with null.
	 * @param string $url
	 * @param Closure|f3 $callback
	 * @return d3AutoCompletion_CSV
	 */
	public function csv($url, $callback){}
	/**
	 * @var d3AutoCompletion_CSV
	 */
	public $tsv;
	/**
	 * Issues an HTTP GET request for the tab-separated values (TSV) file at the specified url. The file contents are assumed to be RFC4180-compliant. The mime type of the request will be "text/csv". The request is processed asynchronously, such that this method returns immediately after opening the request. When the CSV data is available, the specified callback will be invoked with the parsed rows as the argument. If an error occurs, the callback function will instead be invoked with null.
	 * @param string $url
	 * @param Closure|f3 $callback
	 * @return d3AutoCompletion_CSV
	 */
	public function tsv($url, $callback){}
	/**
	 * @param string $url
	 * @param string $mime
	 * @param Closure $callback
	 */
	public function xhr($url, $mime, $callback){}
	/**
	 * @param string $url
	 * @param Closure $callback
	 */
	public function json($url, $callback){}
	/**
	 * @param string $url
	 * @param Closure $callback
	 */
	public function html($url, $callback){}
	/**
	 * @param string $url
	 * @param string $mime
	 * @param Closure $callback
	 */
	public function text($url, $mime, $callback){}
	/**
	 * @param string $url
	 * @param string $mime
	 * @param Closure $callback
	 */
	public function xml($url, $mime, $callback){}
	/**
	 * Returns a new format function with the given string specifier. A format function takes a number as the only argument, and returns a string representing the formatted number.
	 * @param string $specifier
	 */
	public function format($specifier){}
	/**
	 * Returns a quoted (escaped) version of the specified string such that the string may be embedded in a regular expression as a string literal.
	 * @param string $string
	 */
	public function requote($string){}
	/**
	 * Returns the value x rounded to n digits after the decimal point. If n is omitted, it defaults to zero. The result is a number. 
	 * @param mixed $n
	 * @param integer $n
	 */
	public function round($x, $n){}
}

