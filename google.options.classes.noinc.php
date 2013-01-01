<?php 

// only needed for IDE autocompletion
// DO NOT USE THESE CLASSES IN SCRIPTS 

class GoogleAnimation {
  /**
	 * @var $duration integer
	 */
	public $duration;
	/**
	 * @var string $easing linear|in|out|inAndOut
	 */
	public $easing;
}
class GoogleColor {
	public $stroke;
	public $strokeWidth;
	public $fill;
}
class GoogleColorAxis {
	public $minValue;
	public $maxValue;
	public $values;
	public $colors;
	/**
	 * @var GoogleLegendColorAxis
	 */
	public $legend;
}
class GoogleCssClassNames {
	/** 
	 * @var string */
	public $headerRow;
	/** 
	 * @var string */
	public $tableRow;
	/** 
	 * @var string */
	public $oddTableRow;
	/** 
	 * @var string */
	public $selectedTableRow;
	/** 
	 * @var string */
	public $hoverTableRow;
	/** 
	 * @var string */
	public $headerCell;
	/**
	 *  @var string */
	public $tableCell;
	/** 
	 * @var string */
	public $rowNumberCell;
}
class GoogleMagnifyingGlass {
	public $enable;
	public $zoomFactor;	
}
class GoogleSizeAxis {	
	/** 
	 * @var integer */
	public $maxSize;
	/** 
	 * @var integer */
	public $maxValue;
	/** 
	 * @var integer */
	public $minSize;
	/** 
	 * @var integer */
	public $minValue;
}
class GoogleTextColor{
	public $color;
	public $fontName;
	public $fontSize;
}
class GoogleChartArea{
	public $top;
	public $left;
	public $width;
	public $height;
}
class GoogleGridlines{
	public $color;
	public $count;
}
class GoogleViewWindow {
	public $max;
	public $min;
}
class GoogleLegend{
	public $position;
	/**
	 * @var GoogleTextColor
	 */
	public $textStyle;
	public $alignment;	
}
class GoogleLegendColorAxis {
	public $position;
	/**
	 * @var GoogleTextColor
	 */
	public $textStyle;
	/**
	 * @var string
	 */
	public $numberFormat;
}
class GoogleAxis{
	public $baseline;
	public $baselineColor;
	public $direction;
	public $format;
	/**
	 * @var GoogleGridlines
	 */
	public $gridlines;
	/**
	 * @var GoogleGridlines
	 */
	public $minorGridLines;
	public $logScale;
	public $textStyle;
	public $textPosition;
	public $title;
	public $titleTextStyle;
	public $maxValue;
	public $minValue;
	public $viewWindowModule;
	/**
	 * @var GoogleViewWindow $viewWindow 
	 */
	public $viewWindow;
}	

class GoogleAxisAreaChart extends GoogleAxis{
	/**
	 * @var boolean $slantedText
	 */
	public $allowContainerBoundaryTextCufoff;
	/**
	 * @var boolean $slantedText
	 */
	public $slantedText;
	/**
	 * @var integer $slantedTextAngle
	 */
	public $slantedTextAngle;
	/**
	 * @var integer $maxAlternation
	 */
	public $maxAlternation;
	/**
	 * @var integer $maxTextLines
	 */
	public $maxTextLines;
	/**
	 * @var integer $minTextSpacing
	 */
	public $minTextSpacing;
	/**
	 * @var integer $showTextEvery
	 */
	public $showTextEvery;
}

class GoogleToolTip{
	/**
	 * @var GoogleTextColor
	 */
	public $textStyle;
	/**
	 * @var boolean
	 */
	public $showColorCode;
	/**
	 * @var string
	 */
	public $trigger;
}
class GoogleBar{
	/**
	 * @var integer|string $groupWidth
	 */
	public $groupWidth;
}

class GoogleChartOptions {
	/**
	 * @var GoogleAnimation $animation
	 */
	public $animation;
	/**
	 * @var string $axisTitlesPosition in|out|none
	 */
	public $axisTitlesPosition;
	/**
	 * @var GoogleColor|string $backgroundColor
	 */
	public $backgroundColor;

	/**
	 * @var GoogleChartArea $chartArea
	 */
	public $chartArea;
	/**
	 * @var array $colors
	 */
	public $colors;
	/**
	 * @var boolean $enableInteractivity
	 */
	public $enableInteractivity;
	/**
	 * @var string $focusTarget
	 */
	public $focusTarget;
	/**
	 * @var string $fontSize
	 */	
	public $fontSize;
	/**
	 * @var string $fontName
	 */
	public $fontName;
	/**
	 * @var array $hAxes
	 */
	public $hAxes;
	/**
	 * @var integer $height
	 */
	public $height;
	/**
	 * @var boolean $isHtml
	 */
	public $isHtml;
	/**
	 * @var boolean $isStacked
	 */
	public $isStacked;
	/**
	 * @var GoogleLegend $legend
	 */
	public $legend;
	/**
	 * @var boolean $reverseCategories
	 */
	public $reverseCategories;
	/**
	 * @var array|object $series
	 */
	public $series;
	/**
	 * @var string $theme
	 */
	public $theme;
	/**
	 * @var string $title
	 */
	public $title;
	/**
	 * @var string $titlePosition
	 */
	public $titlePosition;
	/**
	 * @var GoogleTextColor $titleTextStyle
	 */
	public $titleTextStyle;
	/**
	 * @var GoogleToolTip $tooltip
	 */
	public $tooltip;
	/**
	 * @var GoogleAxisAreaChart $vAxis
	 */
	public $vAxis;
	/**
	 * @var GoogleAxisAreaChart $hAxis
	 */
	public $hAxis;
	/**
	 * @var integer $width
	 */
	public $width;
}

class GoogleBarchartOptions extends GoogleChartOptions{
	/**
	 * @var GoogleBar $bar
	 */
	public $bar;	
}

class GoogleAreachartOptions extends GoogleChartOptions {
	/**
	 * @var integer $areaOpacity
	 */
	public $areaOpacity;
	/**
	 * @var integer
	 */
	public $lineWidth;
	/**
	 * @var integer
	 */
	public $pointSize;
	/**
	 * @var boolean
	 */
	public $reverseCategories;
	/**
	 * @var array
	 */
	public $vAxes;
}

class GoogleBubbleProperties{
	/**
	 * @var float
	 */
	public $opacity;
	/**
	 * @var string
	 */
	public $stroke;
	/**
	 * @var GoogleTextColor
	 */
	public $textStyle;
	
}
class GoogleBubblechartOptions extends GoogleChartOptions {
	/**
	 * @var GoogleBubbleProperties $bubble
	 */
	public $bubble;
	/**
	 * @var GoogleColorAxis $colorAxis
	 */
	public $colorAxis;
	/**
	 * @var GoogleSizeAxis $sizeAxis
	 */
	public $sizeAxis;
	/** 
	 * @var boolean $sortBubbleSize */
	public $sortBubbleSize;
}
class GoogleCandlestickProperties {
	/** 
	 * @var boolean $hollowIsRising */
	public $hollowIsRising;
	/** 
	 * @var GoogleColor $fallingColor
	 */
	public $fallingColor;
	/** 
	 * @var GoogleColor $risingColor */
	public $risingColor;
}

class GoogleCandlestickchartOptions extends GoogleChartOptions {
	/**
	 * @var GoogleBar $bar
	 */
	public $bar;
	/**
	 * @var GoogleCandlestickProperties $candlestick
	 */
	public $candlestick;
}
class GoogleColumnchartOptions extends GoogleChartOptions {
	/**
	 * @var GoogleBar $bar
	 */
	public $bar;
}

class GoogleCombochartOptions extends GoogleChartOptions {
	/**
	 * @var GoogleBar $bar
	 */
	public $bar;
	/**
	 * @var GoogleCandlestickProperties $candlestick
	 */
	public $candlestick;
	/**
	 * @var string $curveType
	 */
	public $curveType;
	/**
	 * @var boolean $interpolateNulls
	 */
	public $interpolateNulls;
	/**
	 * @var integer
	 */
	public $lineWidth;
	/**
	 * @var integer
	 */
	public $pointSize;
	/**
	 * The default line type for any series not specified in the series property. Available values are 'line', 'area', 'bars', 'candlesticks' and 'steppedArea'.
	 * @var string $seriesType
	 */
	public $seriesType;
}

class GoogleGaugechartOptions {
	/** 
	 * @var GoogleAnimation $animation */
	public $animation;	
	/** 
	 * @var string $greenColor */
	public $greenColor;
	/** 
	 * @var integer */
	public $greenFrom;
	/** 
	 * @var integer */
	public $greenTo;
	/** 
	 * @var integer */
	public $height;	
	/** 
	 * @var array */
	public $majorTicks;
	/** 
	 * @var integer */
	public $max;
	/** 
	 * @var integer */
	public $min;
	/** 
	 * @var integer */
	public $minorTicks;
	/** 
	 * @var string */
	public $redColor;
	/** 
	 * @var integer */
	public $redFrom;
	/** 
	 * @var integer */
	public $redTo;
	/** 
	 * @var integer
	 */
	public $width;
	/** 
	 * @var string
	 */
	public $yellowColor;
	/** 
	 * @var integer */
	public $yellowFrom;
	/** 
	 * @var integer */
	public $yellowTo;
}


class GoogleGeochartOptions {
	/**
	 * @var GoogleColor|string $backgroundColor
	 */
	public $backgroundColor;
	/**
	 * @var GoogleColorAxis $colorAxis
	 */
	public $colorAxis;
	/**
	 * @var string
	 */
	public $datalessRegionColor;
	/**
	 * @var string
	 */
	public $displayMode;
	/**
	 * @var boolean $enableInteractivity
	 */	
	public $enableInteractivity;
	/**
	 * @var integer
	 */
	public $height;
	/**
	 * @var boolean
	 */
	public $keepAspectRatio;
	/**
	 * @var GoogleLegend $legend
	 */
	public $legend;
	/**
	 * @var string $region
	 */
	public $region;
	/**
	 * @var GoogleMagnifyingGlass $magnifyingGlass
	 */
	public $magnifyingGlass;
	/**
	 * @var integer $markerOpacity
	 */
	public $markerOpacity;
	/**
	 * @var string $resolution
	 */
	public $resolution;
	/**
	 * @var GoogleSizeAxis $sizeAxis
	 */
	public $sizeAxis;
	/**
	 * @var GoogleToolTip $tooltip
	 */
	public $tooltip;
	/**
	 * @var integer $width
	 */
	public $width;
}


class GoogleLinechartOptions extends GoogleChartOptions {
	/**
	 * @var string $curveType
	 */
	public $curveType;
	/**
	 * @var boolean $interpolateNulls
	 */
	public $interpolateNulls;
	/**
	 * @var integer
	 */
	public $lineWidth;
	/**
	 * @var integer
	 */
	public $pointSize;
	/**
	 * The default line type for any series not specified in the series property. Available values are 'line', 'area', 'bars', 'candlesticks' and 'steppedArea'.
	 * @var string $seriesType
	 */
	public $seriesType;
}


class GooglePiechartOptions extends GoogleChartOptions {
	/**
	 * @var boolean $is3D
	 */
	public $is3D;
	/**
	 * @var array $slices
	 */
	public $slices;
	/**
	 * @var string $pieSliceBorderColor
	 */
	public $pieSliceBorderColor;
	/**
	 * @var string $pieSliceText
	 */
	public $pieSliceText;
	/**
	 * @var GoogleTextColor $pieSliceTextStyle
	 */
	public $pieSliceTextStyle;
	/**
	 * @var integer $sliceVisibilityThreshold
	 */
	public $sliceVisibilityThreshold;
	/**
	 * @var string $pieResidueSliceColor
	 */
	public $pieResidueSliceColor;
	/**
	 * @var string $pieResidueSliceLabel
	 */
	public $pieResidueSliceLabel;
}


class GoogleScatterchartOptions extends GoogleChartOptions {
	/**
	 * @var string $curveType
	 */
	public $curveType;
	/**
	 * @var boolean $interpolateNulls
	 */
	public $interpolateNulls;
	/**
	 * @var integer
	 */
	public $lineWidth;
	/**
	 * @var integer
	 */
	public $pointSize;
	/**
	 * The default line type for any series not specified in the series property. Available values are 'line', 'area', 'bars', 'candlesticks' and 'steppedArea'.
	 * @var string $seriesType
	 */
	public $seriesType;
}


class GoogleSteppedAreachartOptions extends GoogleChartOptions {
}


class GoogleTablechartOptions {
	/** 
	 * @var boolean */
	public $allowHtml;
	/** 
	 * @var boolean */
	public $alternatingRowStyle;
	/** 
	 * @var GoogleCssClassNames $cssClassNames */
	public $cssClassNames;
	/** 
	 * @var integer */
	public $firstRowNumber;
	/** 
	 * @var string */
	public $height;
	/** 
	 * @var string */
	public $page;
	/** 
	 * @var integer */
	public $pageSize;
	/** 
	 * @var boolean */
	public $rtlTable;
	/** 
	 * @var integer */
	public $scrollLeftStartPosition;
	/** 
	 * @var boolean */
	public $showRowNumber;
	/** 
	 * @var string */
	public $sort;
	/** 
	 * @var boolean */
	public $sortAscending;
	/** 
	 * @var integer */
	public $sortColumn;
	/** 
	 * @var integer */
	public $startPage;
	/** 
	 * @var string */
	public $width;
}


class GoogleTreeMapchartOptions extends GoogleChartOptions {
	/** 
	 * @var string */
	public $headerColor;
	/** 
	 * @var integer */
	public $headerHeight;
	/** 
	 * @var string */
	public $headerHighlightColor;
	/** 
	 * @var string */
	public $maxColor;
	/** 
	 * @var integer */
	public $maxDepth;
	/** 
	 * @var string */
	public $maxHighlightColor;
	/** 
	 * @var integer */
	public $maxPostDepth;
	/** 
	 * @var integer */
	public $maxColorValue;
	/** 
	 * @var string */
	public $midColor;
	/** 
	 * @var string */
	public $midHighlightColor;
	/** 
	 * @var string */
	public $minColor;
	/** 
	 * @var string */
	public $minHighlightColor;
	/** 
	 * @var integer */
	public $minColorValue;
	/** 
	 * @var string */
	public $noColor;
	/** 
	 * @var string */
	public $noHighlightColor;
	/** 
	 * @var boolean */
	public $showScale;
	/** 
	 * @var boolean */
	public $showTooltips;
	/** 
	 * @var string */
	public $fontColor;
	/** 
	 * @var string */
	public $fontFamily;
	/** 
	 * @var integer */
	public $fontSize;
	
}

/**
 * An interactive time series line chart with optional annotations. 
 * The chart is rendered within the browser using Flash. 
 * @tutorial http://code.google.com/apis/ajax/playground/?type=visualization
 * @see https://developers.google.com/chart/interactive/docs/gallery/annotatedtimeline?hl=de-DE
 */
class GoogleAnnotatedTimelineOptions {
	/**
	 * If set to true, any annotation text that includes HTML tags will be rendered as HTML.
	 * @var boolean 
	 */
	public $allowHtml;
	/**
	 * Enables a more efficient redrawing technique for the second and later calls to draw() on this visualization. It only redraws the chart area. To use this option, you must fulfill the following requirements:
	 * <ul><li>allowRedraw must be true</li>
	 * <li>displayAnnotations must be false (that is, you cannot show annotations)</li>
	 * <li>you must pass in the same options and values (except for the allowRedraw and displayAnnotations) as in your first call to draw().</li>
	 * </ul>
	 * @var bool
	 */
	public $allowRedraw;
	/**
	 * A suffix to be added to all values in the scales and the legend.
	 * @var string
	 */
	public $allValuesSuffix;
	/**
	 * The width (in percent) of the annotations area, out of the entire chart area. Must be a number in the range 5-80.
	 * @var integer
	 */
	public $annotationsWidth;
	/**
	 * The colors to use for the chart lines and labels. An array of strings. Each element is a string in a valid HTML color format. For example 'red' or '#00cc00'.
	 * @var array
	 */
	public $colors;
	/**
	 * The format used to display the date information in the top right corner. The format of this field is as specified by the java SimpleDateFormat class.
	 * @var string
	 */
	public $dateFormat;
	/**
	 * If set to true, the chart will show annotations on top of selected values. When this option is set to true, after every numeric column, two optional annotation string columns can be added, one for the annotation title and one for the annotation text.
	 * @var boolean $displayAnnotations
	 */
	public $displayAnnotations;
	/**
	 * If set to true, the chart will display a filter contol to filter annotations. Use this option when there are many annotations.
	 * @var boolean
	 */
	public $displayAnnotationsFilter;
	/**
	 * Whether to display a small bar separator ( | ) between the series values and the date in the legend, where true means yes.
	 * @var boolean
	 */
	public $displayDateBarSeparator;
	/**
	 * Whether to display a shortened, rounded version of the values on the top of the graph, to save space; false indicates that it may. For example, if set to false, 56123.45 might be displayed as 56.12k.
	 * @var boolean
	 */
	public $displayExactValues;
	/**
	 * Whether to display dots next to the values in the legend text, where true means yes.
	 * @var boolean
	 */
	public $displayLegendDots;
	/**
	 * Whether to display the highlighted values in the legend, where true means yes.
	 * @var boolean
	 */
	public $displayLegendValues;
	/**
	 * Whether to show the zoom range selection area (the area at the bottom of the chart), where false means no.
	 * The outline in the zoom selector is a log scale version of the last series in the chart, scaled to fit the height of the zoom selector.
	 * @var boolean
	 */
	public $displayRangeSelector;
	/**
	 * Whether to show the zoom links ("1d 5d 1m" and so on), where false means no.
	 * @var boolean
	 */
	public $displayZoomButtons;
	/**
	 * A number from 0—100 (inclusive) specifying the alpha of the fill below each line in the line graph. 100 means 100% opaque fill, 0 means no fill at all. The fill color is the same color as the line above it.
	 * @var string
	 */
	public $fill;
	/**
	 * Which dot on the series to highlight, and corresponding values to show in the legend. Select from one of these values:
	 * 'nearest' - The values closest along the X axis to the mouse.
	 * 'last' - The next set of values to the left of the mouse.
	 * @var string
	 */
	public $highlightDot;
	/**
	 * Whether to put the colored legend on the same row with the zoom buttons and the date ('sameRow'), or on a new row ('newRow').
	 * @var string
	 */
	public $legendPosition;
	/**
	 * The maximum value to show on the Y axis. If the maximum data point exceeds this value, this setting will be ignored, and the chart will be adjusted to show the next major tick mark above the maximum data point. This will take precedence over the Y axis maximum determined by scaleType.
	 * @var integer
	 */	
	public $max;
	/**
	 * The minimum value to show on the Y axis. If the minimum data point is less than this value, this setting will be ignored, and the chart will be adjusted to show the next major tick mark below the minimum data point. This will take precedence over the Y axis minimum determined by scaleType.
	 * @var integer
	 */
	public $min;
	/**
	 * Specifies the number format patterns to be used to format the values at the top of the graph.
	 * @var string|map
	 */
	public $numberFormats;
	/**
	 * Specifies which values to show on the Y axis tick marks in the graph. The default is to have a single scale on the right side, which applies to both series; but you can have different sides of the graph scaled to different series values.
	 * @var array
	 */
	public $scaleColumns;
	/**
	 * Sets the maximum and minimum values shown on the Y axis. The following options are available:
	 * @var string
	 */
	public $scaleType;
	/**
	 * A number from 0—10 (inclusive) specifying the thickness of the lines, where 0 is the thinnest.
	 * @var integer
	 */
	public $thickness;
	/**
	 * The Window Mode (wmode) parameter for the Flash chart. Available values are: 'opaque', 'window' or 'transparent'.
	 * @var string
	 */
	public $wmode;
	/**
	 * Sets the end date/time of the selected zoom range.
	 * @var Date
	 */
	public $zoomEndTime;
	/**
	 * Sets the start date/time of the selected zoom range.
	 * @var Date
	 */
	public $zoomStartTime;
	
}


class GoogleOptions {
	/**
	 * An interactive time series line chart with optional annotations.
	 * @var GoogleAnnotatedTimelineOptions $AnnotatedTimeline 
	 * @see https://developers.google.com/chart/interactive/docs/gallery/annotatedtimeline?hl=de-DE&csw=1
	 */
	public $AnnotatedTimeline;
	/**
	 * @var GoogleAreachartOptions $Areachart
	 */
	public $Areachart;
	/**
	 * @var GoogleBarchartOptions $Barchart
	 */
	public $Barchart;
		/**
	 * @var GoogleBubblechartOptions $Bubblechart
	 */
	public $Bubblechart;
	/**
	 * @var GoogleCandlestickchartOptions $Candlestickchart
	 */
	public $Candlestickchart;
	/**
	 * @var GoogleColumnchartOptions $Columnchart
	 */
	public $Columnchart;
	/**
	 * @var GoogleCombochartOptions $Combochart
	 */
	public $Combochart;
	/**
	 * @var GoogleGaugechartOptions $Gaugechart
	 */
	public $Gaugechart;
	/**
	 * @var GoogleGeochartOptions $Geochart
	 */
	public $Geochart;
	/**
	 * @var GoogleLinechartOptions $Linechart
	 */
	public $Linechart;
	/**
	 * @var GooglePiechartOptions $Piechart
	 */
	public $Piechart;
	/**
	 * @var GoogleScatterchartOptions $Scatterchart
	 */
	public $Scatterchart;
	/**
	 * @var GoogleSteppedAreachartOptions $SteppedAreachart
	 */
	public $SteppedAreachart;
	/**
	 * @var GoogleTablechartOptions $Tablechart
	 */
	public $Tablechart;
	/**
	 * @var GoogleTreeMapchartOptions $TreeMapchart
	 */
	public $TreeMapchart;
}

