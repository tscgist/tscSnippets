<?php
/**
 * created in 2012-12-12T19:02:00+00:00
*/

/**
  *This class extends MVCObject.
 * 
 */
class google_maps_Map {
  /**
   * Additional controls to attach to the map. To add a control to the map, add the c
   * ontrol's <div> to the MVCArray corresponding to the ControlPosition where it sho
   * uld be rendered.
   * 
   * @var array $controls
   */
  public $controls;
  /**
   * A registry of MapType instances by string ID.
   * 
   * @var google_maps_MapTypeRegistry $mapTypes
   */
  public $mapTypes;
  /**
   * Additional map types to overlay.
   * 
   * @var array $overlayMapTypes
   */
  public $overlayMapTypes;
  /**
   * Sets the viewport to contain the given bounds.
   * 
   * @var google_maps_LatLngBounds $bounds
   * @return void
   */
  public function fitBounds(google_maps_LatLngBounds $bounds){}
  /**
   * Returns the lat/lng bounds of the current viewport. If more than one copy of the
   *  world is visible, the bounds range in longitude from -180 to 180 degrees inclus
   * ive. If the map is not yet initialized (i.e. the mapType is still null), or cent
   * er and zoom have not been set then the result is null or undefined.
   * 
   * @return google_maps_LatLngBounds
   */
  public function getBounds(){}
  /**
   * Returns the position displayed at the center of the map. Note that this LatLng o
   * bject is not wrapped. See LatLng for more information.
   * 
   * @return google_maps_LatLng
   */
  public function getCenter(){}
  /**
   * 
   * 
   * @return document
   */
  public function getDiv(){}
  /**
   * Returns the compass heading of aerial imagery. The heading value is measured in 
   * degrees (clockwise) from cardinal direction North.
   * 
   * @return integer
   */
  public function getHeading(){}
  /**
   * 
   * 
   * @return google_maps_MapTypeId|string
   */
  public function getMapTypeId(){}
  /**
   * Returns the current Projection. If the map is not yet initialized (i.e. the mapT
   * ype is still null) then the result is null. Listen to projection_changed and che
   * ck its value to ensure it is not null.
   * 
   * @return google_maps_Projection
   */
  public function getProjection(){}
  /**
   * Returns the default StreetViewPanorama bound to the map, which may be a default 
   * panorama embedded within the map, or the panorama set using setStreetView(). Cha
   * nges to the map's streetViewControl will be reflected in the display of such a b
   * ound panorama.
   * 
   * @return google_maps_StreetViewPanorama
   */
  public function getStreetView(){}
  /**
   * Returns the angle of incidence for aerial imagery (available for SATELLITE and H
   * YBRID map types) measured in degrees from the viewport plane to the map plane. A
   *  value of 0 indicates no angle of incidence (no tilt) while 45° imagery will re
   * turn a value of 45.
   * 
   * @return integer
   */
  public function getTilt(){}
  /**
   * 
   * 
   * @return integer
   */
  public function getZoom(){}
  /**
   * Changes the center of the map by the given distance in pixels. If the distance i
   * s less than both the width and height of the map, the transition will be smoothl
   * y animated. Note that the map coordinate system increases from west to east (for
   *  x values) and north to south (for y values).
   * 
   * @var integer $x
   * @var integer $y
   * @return void
   */
  public function panBy(integer $x, integer $y){}
  /**
   * Changes the center of the map to the given LatLng. If the change is less than bo
   * th the width and height of the map, the transition will be smoothly animated.
   * 
   * @var google_maps_LatLng $latLng
   * @return void
   */
  public function panTo(google_maps_LatLng $latLng){}
  /**
   * Pans the map by the minimum amount necessary to contain the given LatLngBounds. 
   * It makes no guarantee where on the map the bounds will be, except that as much o
   * f the bounds as possible will be visible. The bounds will be positioned inside t
   * he area bounded by the map type and navigation (pan, zoom, and Street View) cont
   * rols, if they are present on the map. If the bounds is larger than the map, the 
   * map will be shifted to include the northwest corner of the bounds. If the change
   *  in the map's position is less than both the width and height of the map, the tr
   * ansition will be smoothly animated.
   * 
   * @var google_maps_LatLngBounds $latLngBounds
   * @return void
   */
  public function panToBounds(google_maps_LatLngBounds $latLngBounds){}
  /**
   * 
   * 
   * @var google_maps_LatLng $latlng
   * @return void
   */
  public function setCenter(google_maps_LatLng $latlng){}
  /**
   * Sets the compass heading for aerial imagery measured in degrees from cardinal di
   * rection North.
   * 
   * @var integer $heading
   * @return void
   */
  public function setHeading(integer $heading){}
  /**
   * 
   * 
   * @var google_maps_MapTypeId $mapTypeId
   * @return void
   */
  public function setMapTypeId(google_maps_MapTypeId $mapTypeId){}
  /**
   * 
   * 
   * @var google_maps_MapOptions $options
   * @return void
   */
  public function setOptions(google_maps_MapOptions $options){}
  /**
   * Binds a StreetViewPanorama to the map. This panorama overrides the default Stree
   * tViewPanorama, allowing the map to bind to an external panorama outside of the m
   * ap. Setting the panorama to null binds the default embedded panorama back to the
   *  map.
   * 
   * @var google_maps_StreetViewPanorama $panorama
   * @return void
   */
  public function setStreetView(google_maps_StreetViewPanorama $panorama){}
  /**
   * Sets the angle of incidence for aerial imagery (available for SATELLITE and HYBR
   * ID map types) measured in degrees from the viewport plane to the map plane. The 
   * only supported values are 0, indicating no angle of incidence (no tilt), and 45 
   * indicating a tilt of 45deg;.
   * 
   * @var integer $tilt
   * @return void
   */
  public function setTilt(integer $tilt){}
  /**
   * 
   * 
   * @var integer $zoom
   * @return void
   */
  public function setZoom(integer $zoom){}
}
/**

 */
class google_maps_MapOptions {
  /**
   * Color used for the background of the Map div. This color will be visible when ti
   * les have not yet loaded as the user pans. This option can only be set when the m
   * ap is initialized.
   * 
   * @var string $backgroundColor
   */
  public $backgroundColor;
  /**
   * The initial Map center. Required.
   * 
   * @var google_maps_LatLng $center
   */
  public $center;
  /**
   * Enables/disables all default UI. May be overridden individually.
   * 
   * @var boolean $disableDefaultUI
   */
  public $disableDefaultUI;
  /**
   * Enables/disables zoom and center on double click. Enabled by default.
   * 
   * @var boolean $disableDoubleClickZoom
   */
  public $disableDoubleClickZoom;
  /**
   * If false, prevents the map from being dragged. Dragging is enabled by default.
   * 
   * @var boolean $draggable
   */
  public $draggable;
  /**
   * The name or url of the cursor to display when mousing over a draggable map.
   * 
   * @var string $draggableCursor
   */
  public $draggableCursor;
  /**
   * The name or url of the cursor to display when the map is being dragged.
   * 
   * @var string $draggingCursor
   */
  public $draggingCursor;
  /**
   * The heading for aerial imagery in degrees measured clockwise from cardinal direc
   * tion North. Headings are snapped to the nearest available angle for which imager
   * y is available.
   * 
   * @var integer $heading
   */
  public $heading;
  /**
   * If false, prevents the map from being controlled by the keyboard. Keyboard short
   * cuts are enabled by default.
   * 
   * @var boolean $keyboardShortcuts
   */
  public $keyboardShortcuts;
  /**
   * True if Map Maker tiles should be used instead of regular tiles.
   * 
   * @var boolean $mapMaker
   */
  public $mapMaker;
  /**
   * The initial enabled/disabled state of the Map type control.
   * 
   * @var boolean $mapTypeControl
   */
  public $mapTypeControl;
  /**
   * The initial display options for the Map type control.
   * 
   * @var google_maps_MapTypeControlOptions $mapTypeControlOptions
   */
  public $mapTypeControlOptions;
  /**
   * The initial Map mapTypeId. Required.
   * 
   * @var google_maps_MapTypeId $mapTypeId
   */
  public $mapTypeId;
  /**
   * The maximum zoom level which will be displayed on the map. If omitted, or set to
   *  null, the maximum zoom from the current map type is used instead.
   * 
   * @var integer $maxZoom
   */
  public $maxZoom;
  /**
   * The minimum zoom level which will be displayed on the map. If omitted, or set to
   *  null, the minimum zoom from the current map type is used instead.
   * 
   * @var integer $minZoom
   */
  public $minZoom;
  /**
   * If true, do not clear the contents of the Map div.
   * 
   * @var boolean $noClear
   */
  public $noClear;
  /**
   * The enabled/disabled state of the Overview Map control.
   * 
   * @var boolean $overviewMapControl
   */
  public $overviewMapControl;
  /**
   * The display options for the Overview Map control.
   * 
   * @var google_maps_OverviewMapControlOptions $overviewMapControlOptions
   */
  public $overviewMapControlOptions;
  /**
   * The enabled/disabled state of the Pan control.
   * 
   * @var boolean $panControl
   */
  public $panControl;
  /**
   * The display options for the Pan control.
   * 
   * @var google_maps_PanControlOptions $panControlOptions
   */
  public $panControlOptions;
  /**
   * The enabled/disabled state of the Rotate control.
   * 
   * @var boolean $rotateControl
   */
  public $rotateControl;
  /**
   * The display options for the Rotate control.
   * 
   * @var google_maps_RotateControlOptions $rotateControlOptions
   */
  public $rotateControlOptions;
  /**
   * The initial enabled/disabled state of the Scale control.
   * 
   * @var boolean $scaleControl
   */
  public $scaleControl;
  /**
   * The initial display options for the Scale control.
   * 
   * @var google_maps_ScaleControlOptions $scaleControlOptions
   */
  public $scaleControlOptions;
  /**
   * If false, disables scrollwheel zooming on the map. The scrollwheel is enabled by
   *  default.
   * 
   * @var boolean $scrollwheel
   */
  public $scrollwheel;
  /**
   * A StreetViewPanorama to display when the Street View pegman is dropped on the ma
   * p. If no panorama is specified, a default StreetViewPanorama will be displayed i
   * n the map's div when the pegman is dropped.
   * 
   * @var google_maps_StreetViewPanorama $streetView
   */
  public $streetView;
  /**
   * The initial enabled/disabled state of the Street View Pegman control. This contr
   * ol is part of the default UI, and should be set to false when displaying a map t
   * ype on which the Street View road overlay should not appear (e.g. a non-Earth ma
   * p type).
   * 
   * @var boolean $streetViewControl
   */
  public $streetViewControl;
  /**
   * The initial display options for the Street View Pegman control.
   * 
   * @var google_maps_StreetViewControlOptions $streetViewControlOptions
   */
  public $streetViewControlOptions;
  /**
   * Styles to apply to each of the default map types. Note that styles will apply on
   * ly to the labels and geometry in Satellite/Hybrid and Terrain modes.
   * 
   * @var array $styles
   */
  public $styles;
  /**
   * The angle of incidence of the map as measured in degrees from the viewport plane
   *  to the map plane. The only currently supported values are 0, indicating no angl
   * e of incidence (no tilt), and 45, indicating a tilt of 45deg;. 45deg; imagery is
   *  only available for SATELLITE and HYBRID map types, within some locations, and a
   * t some zoom levels.
   * 
   * @var integer $tilt
   */
  public $tilt;
  /**
   * The initial Map zoom level. Required.
   * 
   * @var integer $zoom
   */
  public $zoom;
  /**
   * The enabled/disabled state of the Zoom control.
   * 
   * @var boolean $zoomControl
   */
  public $zoomControl;
  /**
   * The display options for the Zoom control.
   * 
   * @var google_maps_ZoomControlOptions $zoomControlOptions
   */
  public $zoomControlOptions;
}
/**
  *Identifiers for common MapTypes.
 * 
 */
class google_maps_MapTypeId {
  /**
   * This map type displays a transparent layer of major streets on satellite images.
   * 
   */
  const HYBRID="HYBRID";
  /**
   * This map type displays a normal street map.
   * 
   */
  const ROADMAP="ROADMAP";
  /**
   * This map type displays satellite images.
   * 
   */
  const SATELLITE="SATELLITE";
  /**
   * This map type displays maps with physical features such as terrain and vegetatio
   * n.
   * 
   */
  const TERRAIN="TERRAIN";
  /**
   * IDs of map types to show in the control.
   * 
   * @var array|array $mapTypeIds
   */
  public $mapTypeIds;
  /**
   * Position id. Used to specify the position of the control on the map. The default
   *  position is TOP_RIGHT.
   * 
   * @var google_maps_ControlPosition $position
   */
  public $position;
  /**
   * Style id. Used to select what style of map type control to display.
   * 
   * @var google_maps_MapTypeControlStyle $style
   */
  public $style;
}
/**
  *Options for the rendering of the map type control.
 * 
 */
class google_maps_MapTypeControlOptions {
  /**
   * IDs of map types to show in the control.
   * 
   * @var array|array $mapTypeIds
   */
  public $mapTypeIds;
  /**
   * Position id. Used to specify the position of the control on the map. The default
   *  position is TOP_RIGHT.
   * 
   * @var google_maps_ControlPosition $position
   */
  public $position;
  /**
   * Style id. Used to select what style of map type control to display.
   * 
   * @var google_maps_MapTypeControlStyle $style
   */
  public $style;
}
/**
  *Identifiers for common MapTypesControls.
 * 
 */
class google_maps_MapTypeControlStyle {
  /**
   * Uses the default map type control. The control which DEFAULT maps to will vary a
   * ccording to window size and other factors. It may change in future versions of t
   * he API.
   * 
   */
  const DEFAULT="DEFAULT";
  /**
   * A dropdown menu for the screen realestate conscious.
   * 
   */
  const DROPDOWN_MENU="DROPDOWN_MENU";
  /**
   * The standard horizontal radio buttons bar.
   * 
   */
  const HORIZONTAL_BAR="HORIZONTAL_BAR";
  /**
   * Whether the control should display in opened mode or collapsed (minimized) mode.
   *  By default, the control is closed.
   * 
   * @var boolean $opened
   */
  public $opened;
}
/**
  *Options for the rendering of the Overview Map control.
 * 
 */
class google_maps_OverviewMapControlOptions {
  /**
   * Whether the control should display in opened mode or collapsed (minimized) mode.
   *  By default, the control is closed.
   * 
   * @var boolean $opened
   */
  public $opened;
}
/**
  *Options for the rendering of the rotate control.
 * 
 */
class google_maps_RotateControlOptions {
  /**
   * Position id. Used to specify the position of the control on the map. The default
   *  position is TOP_LEFT.
   * 
   * @var google_maps_ControlPosition $position
   */
  public $position;
}
/**
  *Options for the rendering of the scale control.
 * 
 */
class google_maps_ScaleControlOptions {
  /**
   * Position id. Used to specify the position of the control on the map. The default
   *  position is BOTTOM_LEFT.
   * 
   * @var google_maps_ControlPosition $position
   */
  public $position;
  /**
   * Style id. Used to select what style of scale control to display.
   * 
   * @var google_maps_ScaleControlStyle $style
   */
  public $style;
}
/**
  *Options for the rendering of the Street View pegman control on the map.
 * 
 */
class google_maps_StreetViewControlOptions {
  /**
   * Position id. Used to specify the position of the control on the map. The default
   *  position is embedded within the navigation (zoom and pan) controls. If this pos
   * ition is empty or the same as that specified in the zoomControlOptions or panCon
   * trolOptions, the Street View control will be displayed as part of the navigation
   *  controls. Otherwise, it will be displayed separately.
   * 
   * @var google_maps_ControlPosition $position
   */
  public $position;
}
/**
  *Options for the rendering of the zoom control.
 * 
 */
class google_maps_ZoomControlOptions {
  /**
   * Position id. Used to specify the position of the control on the map. The default
   *  position is TOP_LEFT.
   * 
   * @var google_maps_ControlPosition $position
   */
  public $position;
  /**
   * Style id. Used to select what style of zoom control to display.
   * 
   * @var google_maps_ZoomControlStyle $style
   */
  public $style;
}
/**
  *This class extends MVCObject.
 * 
 */
class google_maps_Marker {
  /**
   * 
   * 
   * @return google_maps_Animation
   */
  public function getAnimation(){}
  /**
   * 
   * 
   * @return boolean
   */
  public function getClickable(){}
  /**
   * 
   * 
   * @return string
   */
  public function getCursor(){}
  /**
   * 
   * 
   * @return boolean
   */
  public function getDraggable(){}
  /**
   * 
   * 
   * @return boolean
   */
  public function getFlat(){}
  /**
   * 
   * 
   * @return string|GoogleIcon|GoogleSymbol
   */
  public function getIcon(){}
  /**
   * 
   * 
   * @return google_maps_Map|google_maps_StreetViewPanorama
   */
  public function getMap(){}
  /**
   * 
   * 
   * @return google_maps_LatLng
   */
  public function getPosition(){}
  /**
   * 
   * 
   * @return string|GoogleIcon|GoogleSymbol
   */
  public function getShadow(){}
  /**
   * 
   * 
   * @return google_maps_MarkerShape
   */
  public function getShape(){}
  /**
   * 
   * 
   * @return string
   */
  public function getTitle(){}
  /**
   * 
   * 
   * @return boolean
   */
  public function getVisible(){}
  /**
   * 
   * 
   * @return integer
   */
  public function getZIndex(){}
  /**
   * Start an animation. Any ongoing animation will be cancelled. Currently supported
   *  animations are: BOUNCE, DROP. Passing in null will cause any animation to stop.
   * 
   * @var google_maps_Animation $animation
   * @return void
   */
  public function setAnimation(google_maps_Animation $animation){}
  /**
   * 
   * 
   * @var boolean $flag
   * @return void
   */
  public function setClickable(boolean $flag){}
  /**
   * 
   * 
   * @var string $cursor
   * @return void
   */
  public function setCursor(string $cursor){}
  /**
   * 
   * 
   * @var boolean $flag
   * @return void
   */
  public function setDraggable(boolean $flag){}
  /**
   * 
   * 
   * @var boolean $flag
   * @return void
   */
  public function setFlat(boolean $flag){}
  /**
   * 
   * 
   * @var string $icon
   * @return void
   */
  public function setIcon(string $icon){}
  /**
   * Renders the marker on the specified map or panorama. If map is set to null, the 
   * marker will be removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * 
   * 
   * @var google_maps_MarkerOptions $options
   * @return void
   */
  public function setOptions(google_maps_MarkerOptions $options){}
  /**
   * 
   * 
   * @var google_maps_LatLng $latlng
   * @return void
   */
  public function setPosition(google_maps_LatLng $latlng){}
  /**
   * 
   * 
   * @var string $shadow
   * @return void
   */
  public function setShadow(string $shadow){}
  /**
   * 
   * 
   * @var google_maps_MarkerShape $shape
   * @return void
   */
  public function setShape(google_maps_MarkerShape $shape){}
  /**
   * 
   * 
   * @var string $title
   * @return void
   */
  public function setTitle(string $title){}
  /**
   * 
   * 
   * @var boolean $visible
   * @return void
   */
  public function setVisible(boolean $visible){}
  /**
   * 
   * 
   * @var integer $zIndex
   * @return void
   */
  public function setZIndex(integer $zIndex){}
}
/**

 */
class google_maps_MarkerOptions {
  /**
   * The offset from the marker's position to the tip of an InfoWindow that has been 
   * opened with the marker as anchor.
   * 
   * @var google_maps_Point $anchorPoint
   */
  public $anchorPoint;
  /**
   * Which animation to play when marker is added to a map.
   * 
   * @var google_maps_Animation $animation
   */
  public $animation;
  /**
   * If true, the marker receives mouse and touch events. Default value is true.
   * 
   * @var boolean $clickable
   */
  public $clickable;
  /**
   * Mouse cursor to show on hover
   * 
   * @var string $cursor
   */
  public $cursor;
  /**
   * If true, the marker can be dragged. Default value is false.
   * 
   * @var boolean $draggable
   */
  public $draggable;
  /**
   * If true, the marker shadow will not be displayed.
   * 
   * @var boolean $flat
   */
  public $flat;
  /**
   * Icon for the foreground
   * 
   * @var string|GoogleIcon|GoogleSymbol $icon
   */
  public $icon;
  /**
   * Map on which to display Marker.
   * 
   * @var google_maps_Map|google_maps_StreetViewPanorama $map
   */
  public $map;
  /**
   * Optimization renders many markers as a single static element. Optimized renderin
   * g is enabled by default. Disable optimized rendering for animated GIFs or PNGs, 
   * or when each marker must be rendered as a separate DOM element (advanced usage o
   * nly).
   * 
   * @var boolean $optimized
   */
  public $optimized;
  /**
   * Marker position. Required.
   * 
   * @var google_maps_LatLng $position
   */
  public $position;
  /**
   * If false, disables raising and lowering the marker on drag. This option is true 
   * by default.
   * 
   * @var boolean $raiseOnDrag
   */
  public $raiseOnDrag;
  /**
   * Shadow image
   * 
   * @var string|GoogleIcon|GoogleSymbol $shadow
   */
  public $shadow;
  /**
   * Image map region definition used for drag/click.
   * 
   * @var google_maps_MarkerShape $shape
   */
  public $shape;
  /**
   * Rollover text
   * 
   * @var string $title
   */
  public $title;
  /**
   * If true, the marker is visible
   * 
   * @var boolean $visible
   */
  public $visible;
  /**
   * All markers are displayed on the map in order of their zIndex, with higher value
   * s displaying in front of markers with lower values. By default, markers are disp
   * layed according to their vertical position on screen, with lower markers appeari
   * ng in front of markers further up the screen.
   * 
   * @var integer $zIndex
   */
  public $zIndex;
}
/**

 */
class google_maps_MarkerImage {
  /**
   * The position at which to anchor an image in correspondance to the location of th
   * e marker on the map. By default, the anchor is located along the center point of
   *  the bottom of the image.
   * 
   * @var google_maps_Point $anchor
   */
  public $anchor;
  /**
   * The position of the image within a sprite, if any. By default, the origin is loc
   * ated at the top left corner of the image (0, 0).
   * 
   * @var google_maps_Point $origin
   */
  public $origin;
  /**
   * The size of the entire image after scaling, if any. Use this property to stretch
   * /shrink an image or a sprite.
   * 
   * @var google_maps_Size $scaledSize
   */
  public $scaledSize;
  /**
   * The display size of the sprite or image. When using sprites, you must specify th
   * e sprite size. If the size is not provided, it will be set when the image loads.
   * 
   * @var google_maps_Size $size
   */
  public $size;
  /**
   * The URL of the image or sprite sheet.
   * 
   * @var string $url
   */
  public $url;
}
/**

 */
class google_maps_Icon {
  /**
   * The position at which to anchor an image in correspondance to the location of th
   * e marker on the map. By default, the anchor is located along the center point of
   *  the bottom of the image.
   * 
   * @var google_maps_Point $anchor
   */
  public $anchor;
  /**
   * The position of the image within a sprite, if any. By default, the origin is loc
   * ated at the top left corner of the image (0, 0).
   * 
   * @var google_maps_Point $origin
   */
  public $origin;
  /**
   * The size of the entire image after scaling, if any. Use this property to stretch
   * /shrink an image or a sprite.
   * 
   * @var google_maps_Size $scaledSize
   */
  public $scaledSize;
  /**
   * The display size of the sprite or image. When using sprites, you must specify th
   * e sprite size. If the size is not provided, it will be set when the image loads.
   * 
   * @var google_maps_Size $size
   */
  public $size;
  /**
   * The URL of the image or sprite sheet.
   * 
   * @var string $url
   */
  public $url;
}
/**
  *This object defines the clickable region of a marker image for browsers other th
 * an Internet Explorer. The shape consists of two properties — type and coord �
 * � which define the non-transparent region of an image. A MarkerShape object is n
 * ot required on Internet Explorer since the browser does not fire events on the t
 * ransparent region of an image by default.
 * 
 */
class google_maps_MarkerShape {
  /**
   * The format of this attribute depends on the value of the type and follows the w3
   *  AREA coords specification found at http://www.w3.org/TR/REC-html40/struct/objec
   * ts.html#adef-coords.  The coords attribute is an array of integers that specify 
   * the pixel position of the shape relative to the top-left corner of the target im
   * age. The coordinates depend on the value of type as follows:   - circle: coord
   * s is [x1,y1,r] where x1,y2 are the coordinates of the center of the circle, and 
   * r is the radius of the circle.   - poly: coords is [x1,y1,x2,y2...xn,yn] where
   *  each x,y pair contains the coordinates of one vertex of the polygon.   - rect
   * : coords is [x1,y1,x2,y2] where x1,y1 are the coordinates of the upper-left corn
   * er of the rectangle and x2,y2 are the coordinates of the lower-right coordinates
   *  of the rectangle.
   * 
   * @var array $coords
   */
  public $coords;
  /**
   * Describes the shape's type and can be circle, poly or rect.
   * 
   * @var string $type
   */
  public $type;
}
/**

 */
class google_maps_Symbol {
  /**
   * The position of the symbol relative to the marker or polyline. The coordinates o
   * f the symbol's path are translated left and up by the anchor's x and y coordinat
   * es respectively. By default, a symbol is anchored at (0, 0). The position is exp
   * ressed in the same coordinate system as the symbol's path.
   * 
   * @var google_maps_Point $anchor
   */
  public $anchor;
  /**
   * The symbol's fill color. All CSS3 colors are supported except for extended named
   *  colors. For symbol markers, this defaults to 'black'. For symbols on polylines,
   *  this defaults to the stroke color of the corresponding polyline.
   * 
   * @var string $fillColor
   */
  public $fillColor;
  /**
   * The symbol's fill opacity. Defaults to 0.
   * 
   * @var integer $fillOpacity
   */
  public $fillOpacity;
  /**
   * The symbol's path, which is a built-in symbol path, or a custom path expressed u
   * sing SVG path notation. Required.
   * 
   * @var google_maps_SymbolPath|string $path
   */
  public $path;
  /**
   * The angle by which to rotate the symbol, expressed clockwise in degrees. Default
   * s to 0. A symbol in an IconSequence where fixedRotation is false is rotated rela
   * tive to the angle of the edge on which it lies.
   * 
   * @var integer $rotation
   */
  public $rotation;
  /**
   * The amount by which the symbol is scaled in size. For symbol markers, this defau
   * lts to 1; after scaling the symbol may be of any size. For symbols on a polyline
   * , this defaults to the stroke weight of the polyline; after scaling, the symbol 
   * must lie inside a square 22 pixels in size centered at the symbol's anchor.
   * 
   * @var integer $scale
   */
  public $scale;
  /**
   * The symbol's stroke color. All CSS3 colors are supported except for extended nam
   * ed colors. For symbol markers, this defaults to 'black'. For symbols on a polyli
   * ne, this defaults to the stroke color of the polyline.
   * 
   * @var string $strokeColor
   */
  public $strokeColor;
  /**
   * The symbol's stroke opacity. For symbol markers, this defaults to 1. For symbols
   *  on a polyline, this defaults to the stroke opacity of the polyline.
   * 
   * @var integer $strokeOpacity
   */
  public $strokeOpacity;
  /**
   * The symbol's stroke weight. Defaults to the scale of the symbol.
   * 
   * @var integer $strokeWeight
   */
  public $strokeWeight;
}
/**
  *Built-in symbol paths.
 * 
 */
class google_maps_SymbolPath {
  /**
   * A backward-pointing closed arrow.
   * 
   */
  const BACKWARD_CLOSED_ARROW="BACKWARD_CLOSED_ARROW";
  /**
   * A backward-pointing open arrow.
   * 
   */
  const BACKWARD_OPEN_ARROW="BACKWARD_OPEN_ARROW";
  /**
   * A circle.
   * 
   */
  const CIRCLE="CIRCLE";
  /**
   * A forward-pointing closed arrow.
   * 
   */
  const FORWARD_CLOSED_ARROW="FORWARD_CLOSED_ARROW";
  /**
   * A forward-pointing open arrow.
   * 
   */
  const FORWARD_OPEN_ARROW="FORWARD_OPEN_ARROW";
}
/**
  *Animations that can be played on a marker. Use the setAnimation method on Marker
 *  or the animation option to play an animation.
 * 
 */
class google_maps_Animation {
  /**
   * Marker bounces until animation is stopped.
   * 
   */
  const BOUNCE="BOUNCE";
  /**
   * Marker falls from the top of the map ending with a small bounce.
   * 
   */
  const DROP="DROP";
}
/**
  *An overlay that looks like a bubble and is often connected to a marker.
 * 
 */
class google_maps_InfoWindow {
  /**
   * Closes this InfoWindow by removing it from the DOM structure.
   * 
   * @return void
   */
  public function close(){}
  /**
   * 
   * 
   * @return string|document
   */
  public function getContent(){}
  /**
   * 
   * 
   * @return google_maps_LatLng
   */
  public function getPosition(){}
  /**
   * 
   * 
   * @return integer
   */
  public function getZIndex(){}
  /**
   * Opens this InfoWindow on the given map. Optionally, an InfoWindow can be associa
   * ted with an anchor. In the core API, the only anchor is the Marker class. Howeve
   * r, an anchor can be any MVCObject that exposes a LatLng position property and op
   * tionally a Point anchorPoint property for calculating the pixelOffset (see InfoW
   * indowOptions). The anchorPoint is the offset from the anchor's position to the t
   * ip of the InfoWindow.
   * 
   * @var google_maps_Map $map
   * @var MVC $anchor
   * @return void
   */
  public function open(google_maps_Map $map, MVC $anchor){}
  /**
   * 
   * 
   * @var string $content
   * @return void
   */
  public function setContent(string $content){}
  /**
   * 
   * 
   * @var google_maps_InfoWindowOptions $options
   * @return void
   */
  public function setOptions(google_maps_InfoWindowOptions $options){}
  /**
   * 
   * 
   * @var google_maps_LatLng $position
   * @return void
   */
  public function setPosition(google_maps_LatLng $position){}
  /**
   * 
   * 
   * @var integer $zIndex
   * @return void
   */
  public function setZIndex(integer $zIndex){}
}
/**
  *A polyline is a linear overlay of connected line segments on the map.
 * 
 */
class google_maps_Polyline {
  /**
   * Returns whether this shape can be edited by the user.
   * 
   * @return boolean
   */
  public function getEditable(){}
  /**
   * Returns the map on which this shape is attached.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Retrieves the first path.
   * 
   * @return array
   */
  public function getPath(){}
  /**
   * Returns whether this poly is visible on the map.
   * 
   * @return boolean
   */
  public function getVisible(){}
  /**
   * If set to true, the user can edit this shape by dragging the control points show
   * n at the vertices and on each segment.
   * 
   * @var boolean $editable
   * @return void
   */
  public function setEditable(boolean $editable){}
  /**
   * Renders this shape on the specified map. If map is set to null, the shape will b
   * e removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * 
   * 
   * @var google_maps_PolylineOptions $options
   * @return void
   */
  public function setOptions(google_maps_PolylineOptions $options){}
  /**
   * Sets the first path. See PolylineOptions for more details.
   * 
   * @var array $path
   * @return void
   */
  public function setPath(array $path){}
  /**
   * Hides this poly if set to false.
   * 
   * @var boolean $visible
   * @return void
   */
  public function setVisible(boolean $visible){}
}
/**
  *Describes how icons are to be rendered on a line. If your polyline is geodesic, 
 * then the distances specified for both offset and repeat are calculated in meters
 *  by default. Setting either offset or repeat to a pixel value will cause the dis
 * tances to be calculated in pixels on the screen.
 * 
 */
class google_maps_IconSequence {
  /**
   * If true, each icon in the sequence has the same fixed rotation regardless of the
   *  angle of the edge on which it lies. Defaults to false, in which case each icon 
   * in the sequence is rotated to align with its edge.
   * 
   * @var boolean $fixedRotation
   */
  public $fixedRotation;
  /**
   * The icon to render on the line.
   * 
   * @var GoogleSymbol $icon
   */
  public $icon;
  /**
   * The distance from the start of the line at which an icon is to be rendered. This
   *  distance may be expressed as a percentage of line's length (e.g. '50%') or in p
   * ixels (e.g. '50px'). Defaults to '100%'.
   * 
   * @var string $offset
   */
  public $offset;
  /**
   * The distance between consecutive icons on the line. This distance may be express
   * ed as a percentage of the line's length (e.g. '50%') or in pixels (e.g. '50px').
   *  To disable repeating of the icon, specify '0'. Defaults to '0'.
   * 
   * @var string $repeat
   */
  public $repeat;
}
/**
  *A polygon (like a polyline) defines a series of connected coordinates in an orde
 * red sequence; additionally, polygons form a closed loop and define a filled regi
 * on.
 * 
 */
class google_maps_Polygon {
  /**
   * Returns whether this shape can be edited by the user.
   * 
   * @return boolean
   */
  public function getEditable(){}
  /**
   * Returns the map on which this shape is attached.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Retrieves the first path.
   * 
   * @return array
   */
  public function getPath(){}
  /**
   * Retrieves the paths for this polygon.
   * 
   * @return array
   */
  public function getPaths(){}
  /**
   * Returns whether this poly is visible on the map.
   * 
   * @return boolean
   */
  public function getVisible(){}
  /**
   * If set to true, the user can edit this shape by dragging the control points show
   * n at the vertices and on each segment.
   * 
   * @var boolean $editable
   * @return void
   */
  public function setEditable(boolean $editable){}
  /**
   * Renders this shape on the specified map. If map is set to null, the shape will b
   * e removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * 
   * 
   * @var google_maps_PolygonOptions $options
   * @return void
   */
  public function setOptions(google_maps_PolygonOptions $options){}
  /**
   * Sets the first path. See PolylineOptions for more details.
   * 
   * @var array $path
   * @return void
   */
  public function setPath(array $path){}
  /**
   * Sets the path for this polygon.
   * 
   * @var array $paths
   * @return void
   */
  public function setPaths(array $paths){}
  /**
   * Hides this poly if set to false.
   * 
   * @var boolean $visible
   * @return void
   */
  public function setVisible(boolean $visible){}
}
/**

 */
class google_maps_PolygonOptions {
  /**
   * Indicates whether this Polygon handles mouse events. Defaults to true.
   * 
   * @var boolean $clickable
   */
  public $clickable;
  /**
   * If set to true, the user can edit this shape by dragging the control points show
   * n at the vertices and on each segment. Defaults to false.
   * 
   * @var boolean $editable
   */
  public $editable;
  /**
   * The fill color. All CSS3 colors are supported except for extended named colors.
   * 
   * @var string $fillColor
   */
  public $fillColor;
  /**
   * The fill opacity between 0.0 and 1.0
   * 
   * @var integer $fillOpacity
   */
  public $fillOpacity;
  /**
   * When true, render each edge as a geodesic (a segment of a "great circle"). A geo
   * desic is the shortest path between two points along the surface of the Earth. Wh
   * en false, render each edge as a straight line on screen. Defaults to false.
   * 
   * @var boolean $geodesic
   */
  public $geodesic;
  /**
   * Map on which to display Polygon.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * The ordered sequence of coordinates that designates a closed loop. Unlike polyli
   * nes, a polygon may consist of one or more paths. As a result, the paths property
   *  may specify one or more arrays of LatLng coordinates. Paths are closed automati
   * cally; do not repeat the first vertex of the path as the last vertex. Simple pol
   * ygons may be defined using a single array of LatLngs. More complex polygons may 
   * specify an array of arrays. Any simple arrays are converted into MVCArrays. Inse
   * rting or removing LatLngs from the MVCArray will automatically update the polygo
   * n on the map.
   * 
   * @var array|array|array|array $paths
   */
  public $paths;
  /**
   * The stroke color. All CSS3 colors are supported except for extended named colors
   * .
   * 
   * @var string $strokeColor
   */
  public $strokeColor;
  /**
   * The stroke opacity between 0.0 and 1.0
   * 
   * @var integer $strokeOpacity
   */
  public $strokeOpacity;
  /**
   * The stroke position. Defaults to CENTER. This property is not supported on Inter
   * net Explorer 8 and earlier.
   * 
   * @var google_maps_StrokePosition $strokePosition
   */
  public $strokePosition;
  /**
   * The stroke width in pixels.
   * 
   * @var integer $strokeWeight
   */
  public $strokeWeight;
  /**
   * Whether this polygon is visible on the map. Defaults to true.
   * 
   * @var boolean $visible
   */
  public $visible;
  /**
   * The zIndex compared to other polys.
   * 
   * @var integer $zIndex
   */
  public $zIndex;
}
/**
  *This object is returned from mouse events on polylines and polygons.
 * 
 */
class google_maps_PolyMouseEvent {
  /**
   * The index of the edge within the path beneath the cursor when the event occurred
   * , if the event occurred on a mid-point on an editable polygon.
   * 
   * @var integer $edge
   */
  public $edge;
  /**
   * The index of the path beneath the cursor when the event occurred, if the event o
   * ccurred on a vertex and the polygon is editable. Otherwise undefined.
   * 
   * @var integer $path
   */
  public $path;
  /**
   * The index of the vertex beneath the cursor when the event occurred, if the event
   *  occurred on a vertex and the polyline or polygon is editable. If the event does
   *  not occur on a vertex, the value is undefined.
   * 
   * @var integer $vertex
   */
  public $vertex;
}
/**
  *A rectangle overlay.
 * 
 */
class google_maps_Rectangle {
  /**
   * Returns the bounds of this rectangle.
   * 
   * @return google_maps_LatLngBounds
   */
  public function getBounds(){}
  /**
   * Returns whether this rectangle can be edited by the user.
   * 
   * @return boolean
   */
  public function getEditable(){}
  /**
   * Returns the map on which this rectangle is displayed.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Returns whether this rectangle is visible on the map.
   * 
   * @return boolean
   */
  public function getVisible(){}
  /**
   * Sets the bounds of this rectangle.
   * 
   * @var google_maps_LatLngBounds $bounds
   * @return void
   */
  public function setBounds(google_maps_LatLngBounds $bounds){}
  /**
   * If set to true, the user can edit this rectangle by dragging the control points 
   * shown at the corners and on each edge.
   * 
   * @var boolean $editable
   * @return void
   */
  public function setEditable(boolean $editable){}
  /**
   * Renders the rectangle on the specified map. If map is set to null, the rectangle
   *  will be removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * 
   * 
   * @var google_maps_RectangleOptions $options
   * @return void
   */
  public function setOptions(google_maps_RectangleOptions $options){}
  /**
   * Hides this rectangle if set to false.
   * 
   * @var boolean $visible
   * @return void
   */
  public function setVisible(boolean $visible){}
}
/**
  *A circle on the Earth's surface; also known as a "spherical cap".
 * 
 */
class google_maps_Circle {
  /**
   * Gets the LatLngBounds of this Circle.
   * 
   * @return google_maps_LatLngBounds
   */
  public function getBounds(){}
  /**
   * Returns the center of this circle.
   * 
   * @return google_maps_LatLng
   */
  public function getCenter(){}
  /**
   * Returns whether this circle can be edited by the user.
   * 
   * @return boolean
   */
  public function getEditable(){}
  /**
   * Returns the map on which this circle is displayed.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Returns the radius of this circle (in meters).
   * 
   * @return integer
   */
  public function getRadius(){}
  /**
   * Returns whether this circle is visible on the map.
   * 
   * @return boolean
   */
  public function getVisible(){}
  /**
   * Sets the center of this circle.
   * 
   * @var google_maps_LatLng $center
   * @return void
   */
  public function setCenter(google_maps_LatLng $center){}
  /**
   * If set to true, the user can edit this circle by dragging the control points sho
   * wn at the center and around the circumference of the circle.
   * 
   * @var boolean $editable
   * @return void
   */
  public function setEditable(boolean $editable){}
  /**
   * Renders the circle on the specified map. If map is set to null, the circle will 
   * be removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * 
   * 
   * @var google_maps_CircleOptions $options
   * @return void
   */
  public function setOptions(google_maps_CircleOptions $options){}
  /**
   * Sets the radius of this circle (in meters).
   * 
   * @var integer $radius
   * @return void
   */
  public function setRadius(integer $radius){}
  /**
   * Hides this circle if set to false.
   * 
   * @var boolean $visible
   * @return void
   */
  public function setVisible(boolean $visible){}
}
/**

 */
class google_maps_CircleOptions {
  /**
   * The center
   * 
   * @var google_maps_LatLng $center
   */
  public $center;
  /**
   * Indicates whether this Circle handles mouse events. Defaults to true.
   * 
   * @var boolean $clickable
   */
  public $clickable;
  /**
   * If set to true, the user can edit this circle by dragging the control points sho
   * wn at the center and around the circumference of the circle. Defaults to false.
   * 
   * @var boolean $editable
   */
  public $editable;
  /**
   * The fill color. All CSS3 colors are supported except for extended named colors.
   * 
   * @var string $fillColor
   */
  public $fillColor;
  /**
   * The fill opacity between 0.0 and 1.0
   * 
   * @var integer $fillOpacity
   */
  public $fillOpacity;
  /**
   * Map on which to display Circle.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * The radius in meters on the Earth's surface
   * 
   * @var integer $radius
   */
  public $radius;
  /**
   * The stroke color. All CSS3 colors are supported except for extended named colors
   * .
   * 
   * @var string $strokeColor
   */
  public $strokeColor;
  /**
   * The stroke opacity between 0.0 and 1.0
   * 
   * @var integer $strokeOpacity
   */
  public $strokeOpacity;
  /**
   * The stroke position. Defaults to CENTER. This property is not supported on Inter
   * net Explorer 8 and earlier.
   * 
   * @var google_maps_StrokePosition $strokePosition
   */
  public $strokePosition;
  /**
   * The stroke width in pixels.
   * 
   * @var integer $strokeWeight
   */
  public $strokeWeight;
  /**
   * Whether this circle is visible on the map. Defaults to true.
   * 
   * @var boolean $visible
   */
  public $visible;
  /**
   * The zIndex compared to other polys.
   * 
   * @var integer $zIndex
   */
  public $zIndex;
}
/**
  *The possible positions of the stroke on a polygon.
 * 
 */
class google_maps_StrokePosition {
  /**
   * The stroke is centered on the polygon's path, with half the stroke inside the po
   * lygon and half the stroke outside the polygon.
   * 
   */
  const CENTER="CENTER";
  /**
   * The stroke lies inside the polygon.
   * 
   */
  const INSIDE="INSIDE";
  /**
   * The stroke lies outside the polygon.
   * 
   */
  const OUTSIDE="OUTSIDE";
}
/**
  *This object defines the properties that can be set on a GroundOverlay object.
 * 
 */
class google_maps_GroundOverlayOptions {
  /**
   * If true, the ground overlay can receive mouse events.
   * 
   * @var boolean $clickable
   */
  public $clickable;
  /**
   * The map on which to display the overlay.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * The opacity of the overlay, expressed as a number between 0 and 1. Optional. Def
   * aults to 1.
   * 
   * @var integer $opacity
   */
  public $opacity;
}
/**
  *You can implement this class if you want to display custom types of overlay obje
 * cts on the map.
 * 
 */
class google_maps_OverlayView {
  /**
   * Implement this method to draw or update the overlay. This method is called after
   *  onAdd() and when the position from projection.fromLatLngToPixel() would return 
   * a new value for a given LatLng. This can happen on change of zoom, center, or ma
   * p type. It is not necessarily called on drag or resize.
   * 
   * @return void
   */
  public function draw(){}
  /**
   * 
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Returns the panes in which this OverlayView can be rendered. The panes are not i
   * nitialized until onAdd is called by the API.
   * 
   * @return google_maps_MapPanes
   */
  public function getPanes(){}
  /**
   * Returns the MapCanvasProjection object associated with this OverlayView. The pro
   * jection is not initialized until onAdd is called by the API.
   * 
   * @return google_maps_MapCanvasProjection
   */
  public function getProjection(){}
  /**
   * Implement this method to initialize the overlay DOM elements. This method is cal
   * led once after setMap() is called with a valid map. At this point, panes and pro
   * jection will have been initialized.
   * 
   * @return void
   */
  public function onAdd(){}
  /**
   * Implement this method to remove your elements from the DOM. This method is calle
   * d once following a call to setMap(null).
   * 
   * @return void
   */
  public function onRemove(){}
  /**
   * Adds the overlay to the map or panorama.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
}
/**
  *This object contains the DOM elements in which overlays are rendered. They are l
 * isted below with 'Pane 0' at the bottom and 'Pane 6' at the top.
 * 
 */
class google_maps_MapPanes {
  /**
   * This pane contains the info window. It is above all map overlays. (Pane 6).
   * 
   * @var document $floatPane
   */
  public $floatPane;
  /**
   * This pane contains the info window shadow. It is above the overlayImage, so that
   *  markers can be in the shadow of the info window. (Pane 4).
   * 
   * @var document $floatShadow
   */
  public $floatShadow;
  /**
   * This pane is the lowest pane and is above the tiles. It may not receive DOM even
   * ts. (Pane 0).
   * 
   * @var document $mapPane
   */
  public $mapPane;
  /**
   * This pane contains the marker foreground images. (Pane 3).
   * 
   * @var document $overlayImage
   */
  public $overlayImage;
  /**
   * This pane contains polylines, polygons, ground overlays and tile layer overlays.
   *  It may not receive DOM events. (Pane 1).
   * 
   * @var document $overlayLayer
   */
  public $overlayLayer;
  /**
   * This pane contains elements that receive DOM mouse events, such as the transpare
   * nt targets for markers. It is above the floatShadow, so that markers in the shad
   * ow of the info window can be clickable. (Pane 5).
   * 
   * @var document $overlayMouseTarget
   */
  public $overlayMouseTarget;
  /**
   * This pane contains the marker shadows. It may not receive DOM events. (Pane 2).
   * 
   * @var document $overlayShadow
   */
  public $overlayShadow;
  /**
   * Computes the geographical coordinates from pixel coordinates in the map's contai
   * ner.
   * 
   * @var google_maps_Point $pixel
   * @var boolean $nowrap
   * @return google_maps_LatLng
   */
  public function fromContainerPixelToLatLng(google_maps_Point $pixel, boolean $nowrap){}
  /**
   * Computes the geographical coordinates from pixel coordinates in the div that hol
   * ds the draggable map.
   * 
   * @var google_maps_Point $pixel
   * @var boolean $nowrap
   * @return google_maps_LatLng
   */
  public function fromDivPixelToLatLng(google_maps_Point $pixel, boolean $nowrap){}
  /**
   * Computes the pixel coordinates of the given geographical location in the map's c
   * ontainer element.
   * 
   * @var google_maps_LatLng $latLng
   * @return google_maps_Point
   */
  public function fromLatLngToContainerPixel(google_maps_LatLng $latLng){}
  /**
   * Computes the pixel coordinates of the given geographical location in the DOM ele
   * ment that holds the draggable map.
   * 
   * @var google_maps_LatLng $latLng
   * @return google_maps_Point
   */
  public function fromLatLngToDivPixel(google_maps_LatLng $latLng){}
  /**
   * The width of the world in pixels in the current zoom level. For projections with
   *  a heading angle of either 90 or 270 degress, this corresponds to the pixel span
   *  in the Y-axis.
   * 
   * @return integer
   */
  public function getWorldWidth(){}
}
/**
  *This object is made available to the OverlayView from within the draw method. It
 *  is not guaranteed to be initialized until draw is called.
 * 
 */
class google_maps_MapCanvasProjection {
  /**
   * Computes the geographical coordinates from pixel coordinates in the map's contai
   * ner.
   * 
   * @var google_maps_Point $pixel
   * @var boolean $nowrap
   * @return google_maps_LatLng
   */
  public function fromContainerPixelToLatLng(google_maps_Point $pixel, boolean $nowrap){}
  /**
   * Computes the geographical coordinates from pixel coordinates in the div that hol
   * ds the draggable map.
   * 
   * @var google_maps_Point $pixel
   * @var boolean $nowrap
   * @return google_maps_LatLng
   */
  public function fromDivPixelToLatLng(google_maps_Point $pixel, boolean $nowrap){}
  /**
   * Computes the pixel coordinates of the given geographical location in the map's c
   * ontainer element.
   * 
   * @var google_maps_LatLng $latLng
   * @return google_maps_Point
   */
  public function fromLatLngToContainerPixel(google_maps_LatLng $latLng){}
  /**
   * Computes the pixel coordinates of the given geographical location in the DOM ele
   * ment that holds the draggable map.
   * 
   * @var google_maps_LatLng $latLng
   * @return google_maps_Point
   */
  public function fromLatLngToDivPixel(google_maps_LatLng $latLng){}
  /**
   * The width of the world in pixels in the current zoom level. For projections with
   *  a heading angle of either 90 or 270 degress, this corresponds to the pixel span
   *  in the Y-axis.
   * 
   * @return integer
   */
  public function getWorldWidth(){}
}
/**
  *A service for converting between an address and a LatLng.
 * 
 */
class google_maps_Geocoder {
  /**
   * Geocode a request.
   * 
   * @var google_maps_GeocoderRequest $request
   * @var UtilFunc|Closure $callback(google_maps_GeocoderResult $GeocoderResult, google_maps_GeocoderStatus $GeocoderStatus)
   * @return void
   */
  public function geocode(google_maps_GeocoderRequest $request, $callback){}
}
/**
  *A single geocoder result retrieved from the geocode server. A geocode request ma
 * y return multiple result objects. Note that though this result is "JSON-like," i
 * t is not strictly JSON, as it indirectly includes a LatLng object.
 * 
 */
class google_maps_GeocoderResult {
  /**
   * An array of GeocoderAddressComponents
   * 
   * @var array $address_components
   */
  public $address_components;
  /**
   * A string containing the human-readable address of this location.
   * 
   * @var string $formatted_address
   */
  public $formatted_address;
  /**
   * A GeocoderGeometry object
   * 
   * @var google_maps_GeocoderGeometry $geometry
   */
  public $geometry;
  /**
   * An array of strings denoting the type of the returned geocoded element. For a li
   * st of possible strings, refer to the Address Component Types section of the Deve
   * loper's Guide.
   * 
   * @var array $types
   */
  public $types;
}
/**
  *A single address component within a GeocoderResult. A full address may consist o
 * f multiple address components.
 * 
 */
class google_maps_GeocoderAddressComponent {
  /**
   * The full text of the address component
   * 
   * @var string $long_name
   */
  public $long_name;
  /**
   * The abbreviated, short text of the given address component
   * 
   * @var string $short_name
   */
  public $short_name;
  /**
   * An array of strings denoting the type of this address component. A list of valid
   *  types can be found here
   * 
   * @var array $types
   */
  public $types;
}
/**
  *Describes the type of location returned from a geocode.
 * 
 */
class google_maps_GeocoderLocationType {
  /**
   * The returned result is approximate.
   * 
   */
  const APPROXIMATE="APPROXIMATE";
  /**
   * The returned result is the geometric center of a result such a line (e.g. street
   * ) or polygon (region).
   * 
   */
  const GEOMETRIC_CENTER="GEOMETRIC_CENTER";
  /**
   * The returned result reflects an approximation (usually on a road) interpolated b
   * etween two precise points (such as intersections). Interpolated results are gene
   * rally returned when rooftop geocodes are unavailable for a street address.
   * 
   */
  const RANGE_INTERPOLATED="RANGE_INTERPOLATED";
  /**
   * The returned result reflects a precise geocode.
   * 
   */
  const ROOFTOP="ROOFTOP";
}
/**
  *Renders directions retrieved in the form of a DirectionsResult object retrieved 
 * from the DirectionsService.
 * 
 */
class google_maps_DirectionsRenderer {
  /**
   * Returns the renderer's current set of directions.
   * 
   * @return google_maps_DirectionsResult
   */
  public function getDirections(){}
  /**
   * Returns the map on which the DirectionsResult is rendered.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Returns the panel <div> in which the DirectionsResult is rendered.
   * 
   * @return document
   */
  public function getPanel(){}
  /**
   * Returns the current (zero-based) route index in use by this DirectionsRenderer o
   * bject.
   * 
   * @return integer
   */
  public function getRouteIndex(){}
  /**
   * Set the renderer to use the result from the DirectionsService. Setting a valid s
   * et of directions in this manner will display the directions on the renderer's de
   * signated map and panel.
   * 
   * @var google_maps_DirectionsResult $directions
   * @return void
   */
  public function setDirections(google_maps_DirectionsResult $directions){}
  /**
   * This method specifies the map on which directions will be rendered. Pass null to
   *  remove the directions from the map.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * Change the options settings of this DirectionsRenderer after initialization.
   * 
   * @var google_maps_DirectionsRendererOptions $options
   * @return void
   */
  public function setOptions(google_maps_DirectionsRendererOptions $options){}
  /**
   * This method renders the directions in a <div>. Pass null to remove the content f
   * rom the panel.
   * 
   * @var document $panel
   * @return void
   */
  public function setPanel(document $panel){}
  /**
   * Set the (zero-based) index of the route in the DirectionsResult object to render
   * . By default, the first route in the array will be rendered.
   * 
   * @var integer $routeIndex
   * @return void
   */
  public function setRouteIndex(integer $routeIndex){}
}
/**
  *This object defines the properties that can be set on a DirectionsRenderer objec
 * t.
 * 
 */
class google_maps_DirectionsRendererOptions {
  /**
   * The directions to display on the map and/or in a <div> panel, retrieved as a Dir
   * ectionsResult object from DirectionsService.
   * 
   * @var google_maps_DirectionsResult $directions
   */
  public $directions;
  /**
   * If true, allows the user to drag and modify the paths of routes rendered by this
   *  DirectionsRenderer.
   * 
   * @var boolean $draggable
   */
  public $draggable;
  /**
   * This property indicates whether the renderer should provide UI to select amongst
   *  alternative routes. By default, this flag is false and a user-selectable list o
   * f routes will be shown in the directions' associated panel. To hide that list, s
   * et hideRouteList to true.
   * 
   * @var boolean $hideRouteList
   */
  public $hideRouteList;
  /**
   * The InfoWindow in which to render text information when a marker is clicked. Exi
   * sting info window content will be overwritten and its position moved. If no info
   *  window is specified, the DirectionsRenderer will create and use its own info wi
   * ndow. This property will be ignored if suppressInfoWindows is set to true.
   * 
   * @var google_maps_InfoWindow $infoWindow
   */
  public $infoWindow;
  /**
   * Map on which to display the directions.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * Options for the markers. All markers rendered by the DirectionsRenderer will use
   *  these options.
   * 
   * @var google_maps_MarkerOptions $markerOptions
   */
  public $markerOptions;
  /**
   * The <div> in which to display the directions steps.
   * 
   * @var document $panel
   */
  public $panel;
  /**
   * Options for the polylines. All polylines rendered by the DirectionsRenderer will
   *  use these options.
   * 
   * @var google_maps_PolylineOptions $polylineOptions
   */
  public $polylineOptions;
  /**
   * By default, the input map is centered and zoomed to the bounding box of this set
   *  of directions. If this option is set to true, the viewport is left unchanged, u
   * nless the map's center and zoom were never set.
   * 
   * @var boolean $preserveViewport
   */
  public $preserveViewport;
  /**
   * The index of the route within the DirectionsResult object. The default value is 
   * 0.
   * 
   * @var integer $routeIndex
   */
  public $routeIndex;
  /**
   * Suppress the rendering of the BicyclingLayer when bicycling directions are reque
   * sted.
   * 
   * @var boolean $suppressBicyclingLayer
   */
  public $suppressBicyclingLayer;
  /**
   * Suppress the rendering of info windows.
   * 
   * @var boolean $suppressInfoWindows
   */
  public $suppressInfoWindows;
  /**
   * Suppress the rendering of markers.
   * 
   * @var boolean $suppressMarkers
   */
  public $suppressMarkers;
  /**
   * Suppress the rendering of polylines.
   * 
   * @var boolean $suppressPolylines
   */
  public $suppressPolylines;
}
/**
  *The valid travel modes that can be specified in a DirectionsRequest as well as t
 * he travel modes returned in a DirectionsStep.
 * 
 */
class google_maps_TravelMode {
  /**
   * Specifies a bicycling directions request.
   * 
   */
  const BICYCLING="BICYCLING";
  /**
   * Specifies a driving directions request.
   * 
   */
  const DRIVING="DRIVING";
  /**
   * Specifies a transit directions request.
   * 
   */
  const TRANSIT="TRANSIT";
  /**
   * Specifies a walking directions request.
   * 
   */
  const WALKING="WALKING";
}
/**
  *The valid unit systems that can be specified in a DirectionsRequest.
 * 
 */
class google_maps_UnitSystem {
  /**
   * Specifies that distances in the DirectionsResult should be expressed in imperial
   *  units.
   * 
   */
  const IMPERIAL="IMPERIAL";
  /**
   * Specifies that distances in the DirectionsResult should be expressed in metric u
   * nits.
   * 
   */
  const METRIC="METRIC";
  /**
   * The desired arrival time for the route, specified as a Date object. The Date obj
   * ect measures time in milliseconds since 1 January 1970. If arrival time is speci
   * fied, departure time is ignored.
   * 
   * @var Date $arrivalTime
   */
  public $arrivalTime;
  /**
   * The desired departure time for the route, specified as a Date object. The Date o
   * bject measures time in milliseconds since 1 January 1970. If neither departure t
   * ime nor arrival time is specified, the time is assumed to be "now".
   * 
   * @var Date $departureTime
   */
  public $departureTime;
}
/**
  *The TransitOptions object to be included in a DirectionsRequest when the travel 
 * mode is set to TRANSIT.
 * 
 */
class google_maps_TransitOptions {
  /**
   * The desired arrival time for the route, specified as a Date object. The Date obj
   * ect measures time in milliseconds since 1 January 1970. If arrival time is speci
   * fied, departure time is ignored.
   * 
   * @var Date $arrivalTime
   */
  public $arrivalTime;
  /**
   * The desired departure time for the route, specified as a Date object. The Date o
   * bject measures time in milliseconds since 1 January 1970. If neither departure t
   * ime nor arrival time is specified, the time is assumed to be "now".
   * 
   * @var Date $departureTime
   */
  public $departureTime;
}
/**
  *A DirectionsWaypoint represents a location between origin and destination throug
 * h which the trip should be routed.
 * 
 */
class google_maps_DirectionsWaypoint {
  /**
   * Waypoint location. Can be an address string or LatLng. Optional.
   * 
   * @var google_maps_LatLng|string $location
   */
  public $location;
  /**
   * If true, indicates that this waypoint is a stop between the origin and destinati
   * on. This has the effect of splitting the route into two. This value is true by d
   * efault. Optional.
   * 
   * @var boolean $stopover
   */
  public $stopover;
}
/**
  *A single leg consisting of a set of steps in a DirectionsResult. Some fields in 
 * the leg may not be returned for all requests. (This object was formerly known as
 *  "DirectionsRoute".) Note that though this result is "JSON-like," it is not stri
 * ctly JSON, as it directly and indirectly includes LatLng objects.
 * 
 */
class google_maps_DirectionsLeg {
  /**
   * An estimated arrival time for this leg. Only applicable for TRANSIT requests.
   * 
   * @var google_maps_Time $arrival_time
   */
  public $arrival_time;
  /**
   * An estimated departure time for this leg. Only applicable for TRANSIT requests.
   * 
   * @var google_maps_Time $departure_time
   */
  public $departure_time;
  /**
   * The total distance covered by this leg. This property may be undefined as the di
   * stance may be unknown.
   * 
   * @var google_maps_Distance $distance
   */
  public $distance;
  /**
   * The total duration of this leg. This property may be undefined as the duration m
   * ay be unknown.
   * 
   * @var google_maps_Duration $duration
   */
  public $duration;
  /**
   * The address of the destination of this leg.
   * 
   * @var string $end_address
   */
  public $end_address;
  /**
   * The DirectionsService calculates directions between locations by using the neare
   * st transportation option (usually a road) at the start and end locations. end_lo
   * cation indicates the actual geocoded destination, which may be different than th
   * e end_location of the last step if, for example, the road is not near the destin
   * ation of this leg.
   * 
   * @var google_maps_LatLng $end_location
   */
  public $end_location;
  /**
   * The address of the origin of this leg.
   * 
   * @var string $start_address
   */
  public $start_address;
  /**
   * The DirectionsService calculates directions between locations by using the neare
   * st transportation option (usually a road) at the start and end locations. start_
   * location indicates the actual geocoded origin, which may be different than the s
   * tart_location of the first step if, for example, the road is not near the origin
   *  of this leg.
   * 
   * @var google_maps_LatLng $start_location
   */
  public $start_location;
  /**
   * An array of DirectionsSteps, each of which contains information about the indivi
   * dual steps in this leg.
   * 
   * @var array $steps
   */
  public $steps;
  /**
   * An array of waypoints along this leg that were not specified in the original req
   * uest, either as a result of a user dragging the polyline or selecting an alterna
   * te route.
   * 
   * @var array $via_waypoints
   */
  public $via_waypoints;
}
/**
  *A single DirectionsStep in a DirectionsResult. Some fields may be undefined. Not
 * e that though this object is "JSON-like," it is not strictly JSON, as it directl
 * y includes LatLng objects.
 * 
 */
class google_maps_DirectionsStep {
  /**
   * The distance covered by this step. This property may be undefined as the distanc
   * e may be unknown.
   * 
   * @var google_maps_Distance $distance
   */
  public $distance;
  /**
   * The typical time required to perform this step in seconds and in text form. This
   *  property may be undefined as the duration may be unknown.
   * 
   * @var google_maps_Duration $duration
   */
  public $duration;
  /**
   * The ending location of this step.
   * 
   * @var google_maps_LatLng $end_location
   */
  public $end_location;
  /**
   * Instructions for this step.
   * 
   * @var string $instructions
   */
  public $instructions;
  /**
   * A sequence of LatLngs describing the course of this step.
   * 
   * @var array $path
   */
  public $path;
  /**
   * The starting location of this step.
   * 
   * @var google_maps_LatLng $start_location
   */
  public $start_location;
  /**
   * Sub-steps of this step. Specified for non-transit sections of transit routes.
   * 
   * @var google_maps_DirectionsStep $steps
   */
  public $steps;
  /**
   * Transit-specific details about this step. This property will be undefined unless
   *  the travel mode of this step is TRANSIT.
   * 
   * @var google_maps_TransitDetails $transit
   */
  public $transit;
  /**
   * The mode of travel used in this step.
   * 
   * @var google_maps_TravelMode $travel_mode
   */
  public $travel_mode;
}
/**
  *A representation of distance as a numeric value and a display string.
 * 
 */
class google_maps_Distance {
  /**
   * A string representation of the distance value, using the UnitSystem specified in
   *  the request.
   * 
   * @var string $text
   */
  public $text;
  /**
   * The distance in meters.
   * 
   * @var integer $value
   */
  public $value;
}
/**
  *A representation of duration as a numeric value and a display string.
 * 
 */
class google_maps_Duration {
  /**
   * A string representation of the duration value.
   * 
   * @var string $text
   */
  public $text;
  /**
   * The duration in seconds.
   * 
   * @var integer $value
   */
  public $value;
}
/**

 */
class google_maps_Time {
  /**
   * A string representing the time's value. The time is displayed in the time zone o
   * f the transit stop.
   * 
   * @var string $text
   */
  public $text;
  /**
   * The time zone in which this stop lies. The value is the name of the time zone as
   *  defined in the IANA Time Zone Database, e.g. "America/New_York".
   * 
   * @var string $time_zone
   */
  public $time_zone;
  /**
   * The time of this departure or arrival, specified as a JavaScript Date object.
   * 
   * @var Date $value
   */
  public $value;
}
/**

 */
class google_maps_TransitDetails {
  /**
   * The arrival stop of this transit step.
   * 
   * @var google_maps_TransitStop $arrival_stop
   */
  public $arrival_stop;
  /**
   * The arrival time of this step, specified as a Time object.
   * 
   * @var google_maps_Time $arrival_time
   */
  public $arrival_time;
  /**
   * The departure stop of this transit step.
   * 
   * @var google_maps_TransitStop $departure_stop
   */
  public $departure_stop;
  /**
   * The departure time of this step, specified as a Time object.
   * 
   * @var google_maps_Time $departure_time
   */
  public $departure_time;
  /**
   * The direction in which to travel on this line, as it is marked on the vehicle or
   *  at the departure stop.
   * 
   * @var string $headsign
   */
  public $headsign;
  /**
   * The expected number of seconds between equivalent vehicles at this stop.
   * 
   * @var integer $headway
   */
  public $headway;
  /**
   * Details about the transit line used in this step.
   * 
   * @var google_maps_TransitLine $line
   */
  public $line;
  /**
   * The number of stops on this step. Includes the arrival stop, but not the departu
   * re stop.
   * 
   * @var integer $num_stops
   */
  public $num_stops;
}
/**

 */
class google_maps_TransitStop {
  /**
   * The location of this stop.
   * 
   * @var google_maps_LatLng $location
   */
  public $location;
  /**
   * The name of this transit stop.
   * 
   * @var string $name
   */
  public $name;
}
/**

 */
class google_maps_TransitLine {
  /**
   * The transit agency that operates this transit line.
   * 
   * @var array $agencies
   */
  public $agencies;
  /**
   * The color commonly used in signage for this transit line, represented as a hex s
   * tring.
   * 
   * @var string $color
   */
  public $color;
  /**
   * The URL for an icon associated with this line.
   * 
   * @var string $icon
   */
  public $icon;
  /**
   * The full name of this transit line, e.g. "8 Avenue Local".
   * 
   * @var string $name
   */
  public $name;
  /**
   * The short name of this transit line, e.g. "E".
   * 
   * @var string $short_name
   */
  public $short_name;
  /**
   * The text color commonly used in signage for this transit line, represented as a 
   * hex string.
   * 
   * @var string $text_color
   */
  public $text_color;
  /**
   * The agency's URL which is specific to this transit line.
   * 
   * @var string $url
   */
  public $url;
  /**
   * The type of vehicle used, e.g. train or bus.
   * 
   * @var google_maps_TransitVehicle $vehicle
   */
  public $vehicle;
}
/**

 */
class google_maps_TransitAgency {
  /**
   * The name of this transit agency.
   * 
   * @var string $name
   */
  public $name;
  /**
   * The transit agency's phone number.
   * 
   * @var string $phone
   */
  public $phone;
  /**
   * The transit agency's URL.
   * 
   * @var string $url
   */
  public $url;
}
/**

 */
class google_maps_TransitVehicle {
  /**
   * A URL for an icon that corresponds to the type of vehicle used on this line.
   * 
   * @var string $icon
   */
  public $icon;
  /**
   * A URL for an icon that corresponds to the type of vehicle used in this region in
   * stead of the more general icon.
   * 
   * @var string $local_icon
   */
  public $local_icon;
  /**
   * A name for this type of TransitVehicle, e.g. "Train" or "Bus".
   * 
   * @var string $name
   */
  public $name;
  /**
   * The type of vehicle used, e.g. train, bus, or ferry.
   * 
   * @var google_maps_VehicleType $type
   */
  public $type;
}
/**
  *Possible values for vehicle types. These values are specifed as strings, i.e. 'B
 * US' or 'TRAIN'.
 * 
 */
class google_maps_VehicleType {
  /**
   * Bus.
   * 
   */
  const BUS="BUS";
  /**
   * A vehicle that operates on a cable, usually on the ground. Aerial cable cars may
   *  be of the type GONDOLA_LIFT.
   * 
   */
  const CABLE_CAR="CABLE_CAR";
  /**
   * Commuter rail.
   * 
   */
  const COMMUTER_TRAIN="COMMUTER_TRAIN";
  /**
   * Ferry.
   * 
   */
  const FERRY="FERRY";
  /**
   * A vehicle that is pulled up a steep incline by a cable.
   * 
   */
  const FUNICULAR="FUNICULAR";
  /**
   * An aerial cable car.
   * 
   */
  const GONDOLA_LIFT="GONDOLA_LIFT";
  /**
   * Heavy rail.
   * 
   */
  const HEAVY_RAIL="HEAVY_RAIL";
  /**
   * High speed train.
   * 
   */
  const HIGH_SPEED_TRAIN="HIGH_SPEED_TRAIN";
  /**
   * Intercity bus.
   * 
   */
  const INTERCITY_BUS="INTERCITY_BUS";
  /**
   * Light rail.
   * 
   */
  const METRO_RAIL="METRO_RAIL";
  /**
   * Monorail.
   * 
   */
  const MONORAIL="MONORAIL";
  /**
   * Other vehicles.
   * 
   */
  const OTHER="OTHER";
  /**
   * Rail.
   * 
   */
  const RAIL="RAIL";
  /**
   * Share taxi is a sort of bus transport with ability to drop off and pick up passe
   * ngers anywhere on its route. Generally share taxi uses minibus vehicles.
   * 
   */
  const SHARE_TAXI="SHARE_TAXI";
  /**
   * Underground light rail.
   * 
   */
  const SUBWAY="SUBWAY";
  /**
   * Above ground light rail.
   * 
   */
  const TRAM="TRAM";
  /**
   * Trolleybus.
   * 
   */
  const TROLLEYBUS="TROLLEYBUS";
}
/**
  *An elevation request sent by the ElevationService containing the list of discret
 * e coordinates (LatLngs) for which to return elevation data.
 * 
 */
class google_maps_LocationElevationRequest {
  /**
   * The discrete locations for which to retrieve elevations.
   * 
   * @var array $locations
   */
  public $locations;
}
/**
  *An elevation query sent by the ElevationService containing the path along which 
 * to return sampled data. This request defines a continuous path along the earth a
 * long which elevation samples should be taken at evenly-spaced distances. All pat
 * hs from vertex to vertex use segments of the great circle between those two poin
 * ts.
 * 
 */
class google_maps_PathElevationRequest {
  /**
   * The path along which to collect elevation values.
   * 
   * @var array $path
   */
  public $path;
  /**
   * Required. The number of equidistant points along the given path for which to ret
   * rieve elevation data, including the endpoints. The number of samples must be a v
   * alue between 2 and 512 inclusive.
   * 
   * @var integer $samples
   */
  public $samples;
}
/**
  *A MaxZoom result in JSON format retrieved from the MaxZoomService.
 * 
 */
class google_maps_MaxZoomResult {
  /**
   * Status of the request.
   * 
   * @var google_maps_MaxZoomStatus $status
   */
  public $status;
  /**
   * The maximum zoom level found at the given LatLng.
   * 
   * @var integer $zoom
   */
  public $zoom;
}
/**
  *A service for computing distances between multiple origins and destinations.
 * 
 */
class google_maps_DistanceMatrixService {
  /**
   * Issues a distance matrix request.
   * 
   * @var google_maps_DistanceMatrixRequest $request
   * @var UtilFunc|Closure $callback(google_maps_DistanceMatrixStatus $DistanceMatrixStatus)
   * @return void
   */
  public function getDistanceMatrix(google_maps_DistanceMatrixRequest $request, $callback){}
}
/**
  *A distance matrix query sent by the DistanceMatrixService containing arrays of o
 * rigin and destination locations, and various options for computing metrics.
 * 
 */
class google_maps_DistanceMatrixRequest {
  /**
   * If true, instructs the Distance Matrix service to avoid highways where possible.
   *  Optional.
   * 
   * @var boolean $avoidHighways
   */
  public $avoidHighways;
  /**
   * If true, instructs the Distance Matrix service to avoid toll roads where possibl
   * e. Optional.
   * 
   * @var boolean $avoidTolls
   */
  public $avoidTolls;
  /**
   * An array containing destination address strings and/or LatLngs, to which to calc
   * ulate distance and time. Required.
   * 
   * @var array|array $destinations
   */
  public $destinations;
  /**
   * An array containing origin address strings and/or LatLngs, from which to calcula
   * te distance and time. Required.
   * 
   * @var array|array $origins
   */
  public $origins;
  /**
   * Region code used as a bias for geocoding requests. Optional.
   * 
   * @var string $region
   */
  public $region;
  /**
   * Type of routing requested. Required.
   * 
   * @var google_maps_TravelMode $travelMode
   */
  public $travelMode;
  /**
   * Preferred unit system to use when displaying distance. Optional; defaults to met
   * ric.
   * 
   * @var google_maps_UnitSystem $unitSystem
   */
  public $unitSystem;
}
/**
  *The response to a DistanceMatrixService request, consisting of the formatted ori
 * gin and destination addresses, and a sequence of DistanceMatrixResponseRows, one
 *  for each corresponding origin address.
 * 
 */
class google_maps_DistanceMatrixResponse {
  /**
   * The formatted destination addresses.
   * 
   * @var array $destinationAddresses
   */
  public $destinationAddresses;
  /**
   * The formatted origin addresses.
   * 
   * @var array $originAddresses
   */
  public $originAddresses;
  /**
   * The rows of the matrix, corresponding to the origin addresses.
   * 
   * @var array $rows
   */
  public $rows;
}
/**
  *A row of the response to a DistanceMatrixService request, consisting of a sequen
 * ce of DistanceMatrixResponseElements, one for each corresponding destination add
 * ress.
 * 
 */
class google_maps_DistanceMatrixResponseRow {
  /**
   * The row's elements, corresponding to the destination addresses.
   * 
   * @var array $elements
   */
  public $elements;
}
/**
  *A single element of a response to a DistanceMatrixService request, which contain
 * s the duration and distance from one origin to one destination.
 * 
 */
class google_maps_DistanceMatrixResponseElement {
  /**
   * The distance for this origin-destination pairing. This property may be undefined
   *  as the distance may be unknown.
   * 
   * @var google_maps_Distance $distance
   */
  public $distance;
  /**
   * The duration for this origin-destination pairing. This property may be undefined
   *  as the duration may be unknown.
   * 
   * @var google_maps_Duration $duration
   */
  public $duration;
  /**
   * The status of this particular origin-destination pairing.
   * 
   * @var google_maps_DistanceMatrixElementStatus $status
   */
  public $status;
}
/**
  *The top-level status about the request in general returned by the DistanceMatrix
 * Service upon completion of a distance matrix request.
 * 
 */
class google_maps_DistanceMatrixStatus {
  /**
   * The provided request was invalid.
   * 
   */
  const INVALID_REQUEST="INVALID_REQUEST";
  /**
   * The request contains more than 25 origins, or more than 25 destinations.
   * 
   */
  const MAX_DIMENSIONS_EXCEEDED="MAX_DIMENSIONS_EXCEEDED";
  /**
   * The product of origins and destinations exceeds the per-query limit.
   * 
   */
  const MAX_ELEMENTS_EXCEEDED="MAX_ELEMENTS_EXCEEDED";
  /**
   * The response contains a valid result.
   * 
   */
  const OK="OK";
  /**
   * Too many elements have been requested within the allowed time period. The reques
   * t should succeed if you try again after a reasonable amount of time.
   * 
   */
  const OVER_QUERY_LIMIT="OVER_QUERY_LIMIT";
  /**
   * The service denied use of the Distance Matrix service by your web page.
   * 
   */
  const REQUEST_DENIED="REQUEST_DENIED";
  /**
   * A Distance Matrix request could not be processed due to a server error. The requ
   * est may succeed if you try again.
   * 
   */
  const UNKNOWN_ERROR="UNKNOWN_ERROR";
}
/**
  *The element-level status about a particular origin-destination pairing returned 
 * by the DistanceMatrixService upon completion of a distance matrix request.
 * 
 */
class google_maps_DistanceMatrixElementStatus {
  /**
   * The origin and/or destination of this pairing could not be geocoded.
   * 
   */
  const NOT_FOUND="NOT_FOUND";
  /**
   * The response contains a valid result.
   * 
   */
  const OK="OK";
  /**
   * No route could be found between the origin and destination.
   * 
   */
  const ZERO_RESULTS="ZERO_RESULTS";
  /**
   * Returns a tile for the given tile coordinate (x, y) and zoom level. This tile wi
   * ll be appended to the given ownerDocument. Not available for base map types.
   * 
   * @var google_maps_Point $tileCoord
   * @var integer $zoom
   * @var google_maps_Document $ownerDocument
   * @return document
   */
  public function getTile(google_maps_Point $tileCoord, integer $zoom, google_maps_Document $ownerDocument){}
  /**
   * Releases the given tile, performing any necessary cleanup. The provided tile wil
   * l have already been removed from the document. Optional.
   * 
   * @var document $tile
   * @return void
   */
  public function releaseTile(document $tile){}
}
/**
  *This interface defines the map type, and is typically used for custom map types.
 *  Immutable.
 * 
 */
class google_maps_MapType {
  /**
   * Alt text to display when this MapType's button is hovered over in the MapTypeCon
   * trol. Optional.
   * 
   * @var string $alt
   */
  public $alt;
  /**
   * The maximum zoom level for the map when displaying this MapType. Required for ba
   * se MapTypes, ignored for overlay MapTypes.
   * 
   * @var integer $maxZoom
   */
  public $maxZoom;
  /**
   * The minimum zoom level for the map when displaying this MapType. Optional; defau
   * lts to 0.
   * 
   * @var integer $minZoom
   */
  public $minZoom;
  /**
   * Name to display in the MapTypeControl. Optional.
   * 
   * @var string $name
   */
  public $name;
  /**
   * The Projection used to render this MapType. Optional; defaults to Mercator.
   * 
   * @var google_maps_Projection $projection
   */
  public $projection;
  /**
   * Radius of the planet for the map, in meters. Optional; defaults to Earth's equat
   * orial radius of 6378137 meters.
   * 
   * @var integer $radius
   */
  public $radius;
  /**
   * The dimensions of each tile. Required.
   * 
   * @var google_maps_Size $tileSize
   */
  public $tileSize;
  /**
   * Returns a tile for the given tile coordinate (x, y) and zoom level. This tile wi
   * ll be appended to the given ownerDocument. Not available for base map types.
   * 
   * @var google_maps_Point $tileCoord
   * @var integer $zoom
   * @var google_maps_Document $ownerDocument
   * @return document
   */
  public function getTile(google_maps_Point $tileCoord, integer $zoom, google_maps_Document $ownerDocument){}
  /**
   * Releases the given tile, performing any necessary cleanup. The provided tile wil
   * l have already been removed from the document. Optional.
   * 
   * @var document $tile
   * @return void
   */
  public function releaseTile(document $tile){}
}
/**

 */
class google_maps_Projection {
}
/**
  *This class implements the MapType interface and is provided for rendering image 
 * tiles.
 * 
 */
class google_maps_ImageMapType {
  /**
   * Returns the opacity level (0 (transparent) to 1.0) of the ImageMapType tiles.
   * 
   * @return integer
   */
  public function getOpacity(){}
  /**
   * Sets the opacity level (0 (transparent) to 1.0) of the ImageMapType tiles.
   * 
   * @var integer $opacity
   * @return void
   */
  public function setOpacity(integer $opacity){}
}
/**
  *This class is used to create a MapType that renders image tiles.
 * 
 */
class google_maps_ImageMapTypeOptions {
  /**
   * Alt text to display when this MapType's button is hovered over in the MapTypeCon
   * trol.
   * 
   * @var string $alt
   */
  public $alt;
  /**
   * Returns a string (URL) for given tile coordinate (x, y) and zoom level. This fun
   * ction should have a signature of: getTileUrl(Point, number):string
   * 
   * @var google_maps_Function(Point,
number):string $getTileUrl
   */
  public $getTileUrl;
  /**
   * The maximum zoom level for the map when displaying this MapType.
   * 
   * @var integer $maxZoom
   */
  public $maxZoom;
  /**
   * The minimum zoom level for the map when displaying this MapType. Optional.
   * 
   * @var integer $minZoom
   */
  public $minZoom;
  /**
   * Name to display in the MapTypeControl.
   * 
   * @var string $name
   */
  public $name;
  /**
   * The opacity to apply to the tiles. The opacity should be specified as a float va
   * lue between 0 and 1.0, where 0 is fully transparent and 1 is fully opaque.
   * 
   * @var integer $opacity
   */
  public $opacity;
  /**
   * The tile size.
   * 
   * @var google_maps_Size $tileSize
   */
  public $tileSize;
}
/**
  *This class is used to specify options when creating a StyledMapType. These optio
 * ns cannot be changed after the StyledMapType is instantiated.
 * 
 */
class google_maps_StyledMapTypeOptions {
  /**
   * Text to display when this MapType's button is hovered over in the map type contr
   * ol.
   * 
   * @var string $alt
   */
  public $alt;
  /**
   * The maximum zoom level for the map when displaying this MapType. Optional.
   * 
   * @var integer $maxZoom
   */
  public $maxZoom;
  /**
   * The minimum zoom level for the map when displaying this MapType. Optional.
   * 
   * @var integer $minZoom
   */
  public $minZoom;
  /**
   * The name to display in the map type control.
   * 
   * @var string $name
   */
  public $name;
}
/**
  *The MapTypeStyle is a collection of selectors and stylers that define how the ma
 * p should be styled. Selectors specify what map elements should be affected and s
 * tylers specify how those elements should be modified.
 * 
 */
class google_maps_MapTypeStyle {
  /**
   * Selects the element type to which a styler should be applied. An element type di
   * stinguishes between the different representations of a feature. Optional; if ele
   * mentType is not specified, the value is assumed to be 'all'.
   * 
   * @var google_maps_MapTypeStyleElementType $elementType
   */
  public $elementType;
  /**
   * Selects the feature, or group of features, to which a styler should be applied. 
   * Optional; if featureType is not specified, the value is assumed to be 'all'.
   * 
   * @var google_maps_MapTypeStyleFeatureType $featureType
   */
  public $featureType;
  /**
   * The style rules to apply to the selectors. The rules are applied to the map's el
   * ements in the order they are listed in this array.
   * 
   * @var array $stylers
   */
  public $stylers;
}
/**
  *Possible values for feature types. Specify these values as strings, i.e. 'admini
 * strative' or 'poi.park'. Stylers applied to a parent feature type automatically 
 * apply to all child feature types. Note however that parent features may include 
 * some additional features that are not included in one of their child feature typ
 * es.
 * 
 */
class google_maps_MapTypeStyleFeatureType {
  /**
   * Apply the rule to administrative areas.
   * 
   */
  const administrative="administrative";
  /**
   * Apply the rule to countries.
   * 
   */
  const administrative_country="administrative.country";
  /**
   * Apply the rule to land parcels.
   * 
   */
  const administrative_land_parcel="administrative.land_parcel";
  /**
   * Apply the rule to localities.
   * 
   */
  const administrative_locality="administrative.locality";
  /**
   * Apply the rule to neighborhoods.
   * 
   */
  const administrative_neighborhood="administrative.neighborhood";
  /**
   * Apply the rule to provinces.
   * 
   */
  const administrative_province="administrative.province";
  /**
   * Apply the rule to all selector types.
   * 
   */
  const all="all";
  /**
   * Apply the rule to landscapes.
   * 
   */
  const landscape="landscape";
  /**
   * Apply the rule to man made structures.
   * 
   */
  const landscape_man_made="landscape.man_made";
  /**
   * Apply the rule to natural features.
   * 
   */
  const landscape_natural="landscape.natural";
  /**
   * Apply the rule to landcover.
   * 
   */
  const landscape_natural_landcover="landscape.natural.landcover";
  /**
   * Apply the rule to terrain.
   * 
   */
  const landscape_natural_terrain="landscape.natural.terrain";
  /**
   * Apply the rule to points of interest.
   * 
   */
  const poi="poi";
  /**
   * Apply the rule to attractions for tourists.
   * 
   */
  const poi_attraction="poi.attraction";
  /**
   * Apply the rule to businesses.
   * 
   */
  const poi_business="poi.business";
  /**
   * Apply the rule to government buildings.
   * 
   */
  const poi_government="poi.government";
  /**
   * Apply the rule to emergency services (hospitals, pharmacies, police, doctors, et
   * c).
   * 
   */
  const poi_medical="poi.medical";
  /**
   * Apply the rule to parks.
   * 
   */
  const poi_park="poi.park";
  /**
   * Apply the rule to places of worship, such as church, temple, or mosque.
   * 
   */
  const poi_place_of_worship="poi.place_of_worship";
  /**
   * Apply the rule to schools.
   * 
   */
  const poi_school="poi.school";
  /**
   * Apply the rule to sports complexes.
   * 
   */
  const poi_sports_complex="poi.sports_complex";
  /**
   * Apply the rule to all roads.
   * 
   */
  const road="road";
  /**
   * Apply the rule to arterial roads.
   * 
   */
  const road_arterial="road.arterial";
  /**
   * Apply the rule to highways.
   * 
   */
  const road_highway="road.highway";
  /**
   * Apply the rule to controlled-access highways.
   * 
   */
  const road_highway_controlled_access="road.highway.controlled_access";
  /**
   * Apply the rule to local roads.
   * 
   */
  const road_local="road.local";
  /**
   * Apply the rule to all transit stations and lines.
   * 
   */
  const transit="transit";
  /**
   * Apply the rule to transit lines.
   * 
   */
  const transit_line="transit.line";
  /**
   * Apply the rule to all transit stations.
   * 
   */
  const transit_station="transit.station";
  /**
   * Apply the rule to airports.
   * 
   */
  const transit_station_airport="transit.station.airport";
  /**
   * Apply the rule to bus stops.
   * 
   */
  const transit_station_bus="transit.station.bus";
  /**
   * Apply the rule to rail stations.
   * 
   */
  const transit_station_rail="transit.station.rail";
  /**
   * Apply the rule to bodies of water.
   * 
   */
  const water="water";
}
/**
  *Each MapTypeStyleElementType distinguishes between the different representations
 *  of a feature.
 * 
 */
class google_maps_MapTypeStyleElementType {
  /**
   * Apply the rule to all elements of the specified feature.
   * 
   */
  const all="all";
  /**
   * Apply the rule to the feature's geometry.
   * 
   */
  const geometry="geometry";
  /**
   * Apply the rule to the fill of the feature's geometry.
   * 
   */
  const geometry_fill="geometry.fill";
  /**
   * Apply the rule to the stroke of the feature's geometry.
   * 
   */
  const geometry_stroke="geometry.stroke";
  /**
   * Apply the rule to the feature's labels.
   * 
   */
  const labels="labels";
  /**
   * Apply the rule to icons within the feature's labels.
   * 
   */
  const labels_icon="labels.icon";
  /**
   * Apply the rule to the text in the feature's label.
   * 
   */
  const labels_text="labels.text";
  /**
   * Apply the rule to the fill of the text in the feature's labels.
   * 
   */
  const labels_text_fill="labels.text.fill";
  /**
   * Apply the rule to the stroke of the text in the feature's labels.
   * 
   */
  const labels_text_stroke="labels.text.stroke";
  /**
   * Sets the color of the feature. Valid values: An RGB hex string, i.e. '#ff0000'.
   * 
   * @var string $color
   */
  public $color;
  /**
   * Modifies the gamma by raising the lightness to the given power. Valid values: Fl
   * oating point numbers, [0.01, 10], with 1.0 representing no change.
   * 
   * @var integer $gamma
   */
  public $gamma;
  /**
   * Sets the hue of the feature to match the hue of the color supplied. Note that th
   * e saturation and lightness of the feature is conserved, which means that the fea
   * ture will not match the color supplied exactly. Valid values: An RGB hex string,
   *  i.e. '#ff0000'.
   * 
   * @var string $hue
   */
  public $hue;
  /**
   * A value of true will invert the lightness of the feature while preserving the hu
   * e and saturation.
   * 
   * @var boolean $invert_lightness
   */
  public $invert_lightness;
  /**
   * Shifts lightness of colors by a percentage of the original value if decreasing a
   * nd a percentage of the remaining value if increasing. Valid values: [-100, 100].
   * 
   * @var integer $lightness
   */
  public $lightness;
  /**
   * Shifts the saturation of colors by a percentage of the original value if decreas
   * ing and a percentage of the remaining value if increasing. Valid values: [-100, 
   * 100].
   * 
   * @var integer $saturation
   */
  public $saturation;
  /**
   * Sets the visibility of the feature. Valid values: 'on', 'off' or 'simplifed'.
   * 
   * @var string $visibility
   */
  public $visibility;
  /**
   * Sets the weight of the feature, in pixels. Valid values: Integers greater than o
   * r equal to zero.
   * 
   * @var integer $weight
   */
  public $weight;
}
/**
  *A styler affects how a map's elements will be styled. Each MapTypeStyler should 
 * contain one and only one key. If more than one key is specified in a single MapT
 * ypeStyler, all but one will be ignored. For example: var rule = {hue: '#ff0000'}
 * .
 * 
 */
class google_maps_MapTypeStyler {
  /**
   * Sets the color of the feature. Valid values: An RGB hex string, i.e. '#ff0000'.
   * 
   * @var string $color
   */
  public $color;
  /**
   * Modifies the gamma by raising the lightness to the given power. Valid values: Fl
   * oating point numbers, [0.01, 10], with 1.0 representing no change.
   * 
   * @var integer $gamma
   */
  public $gamma;
  /**
   * Sets the hue of the feature to match the hue of the color supplied. Note that th
   * e saturation and lightness of the feature is conserved, which means that the fea
   * ture will not match the color supplied exactly. Valid values: An RGB hex string,
   *  i.e. '#ff0000'.
   * 
   * @var string $hue
   */
  public $hue;
  /**
   * A value of true will invert the lightness of the feature while preserving the hu
   * e and saturation.
   * 
   * @var boolean $invert_lightness
   */
  public $invert_lightness;
  /**
   * Shifts lightness of colors by a percentage of the original value if decreasing a
   * nd a percentage of the remaining value if increasing. Valid values: [-100, 100].
   * 
   * @var integer $lightness
   */
  public $lightness;
  /**
   * Shifts the saturation of colors by a percentage of the original value if decreas
   * ing and a percentage of the remaining value if increasing. Valid values: [-100, 
   * 100].
   * 
   * @var integer $saturation
   */
  public $saturation;
  /**
   * Sets the visibility of the feature. Valid values: 'on', 'off' or 'simplifed'.
   * 
   * @var string $visibility
   */
  public $visibility;
  /**
   * Sets the weight of the feature, in pixels. Valid values: Integers greater than o
   * r equal to zero.
   * 
   * @var integer $weight
   */
  public $weight;
}
/**
  *This object defines the properties that can be set on a FusionTablesLayer object
 * .
 * 
 */
class google_maps_FusionTablesLayerOptions {
  /**
   * If true, the layer receives mouse events. Default value is true.
   * 
   * @var boolean $clickable
   */
  public $clickable;
  /**
   * Options which define the appearance of the layer as a heatmap.
   * 
   * @var google_maps_FusionTablesHeatmap $heatmap
   */
  public $heatmap;
  /**
   * The map on which to display the layer.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * Options defining the data to display.
   * 
   * @var google_maps_FusionTablesQuery $query
   */
  public $query;
  /**
   * An array of up to 5 style specifications, which control the appearance of featur
   * es within the layer.
   * 
   * @var array $styles
   */
  public $styles;
  /**
   * Suppress the rendering of info windows when layer features are clicked.
   * 
   * @var boolean $suppressInfoWindows
   */
  public $suppressInfoWindows;
}
/**
  *Specifies the appearance for a FusionTablesLayer when rendered as a heatmap.
 * 
 */
class google_maps_FusionTablesHeatmap {
  /**
   * If true, render the layer as a heatmap.
   * 
   * @var boolean $enabled
   */
  public $enabled;
}
/**
  *Options which control the appearance of point features in a FusionTablesLayer.
 * 
 */
class google_maps_FusionTablesMarkerOptions {
  /**
   * The name of a Fusion Tables supported icon
   * 
   * @var string $iconName
   */
  public $iconName;
}
/**
  *Options which control the appearance of polygons in a FusionTablesLayer.
 * 
 */
class google_maps_FusionTablesPolygonOptions {
  /**
   * The fill color, defined by a six-digit hexadecimal number in RRGGBB format (e.g.
   *  #00AAFF).
   * 
   * @var string $fillColor
   */
  public $fillColor;
  /**
   * The fill opacity between 0.0 and 1.0.
   * 
   * @var integer $fillOpacity
   */
  public $fillOpacity;
  /**
   * The fill color, defined by a six-digit hexadecimal number in RRGGBB format (e.g.
   *  #00AAFF).
   * 
   * @var string $strokeColor
   */
  public $strokeColor;
  /**
   * The stroke opacity between 0.0 and 1.0.
   * 
   * @var integer $strokeOpacity
   */
  public $strokeOpacity;
  /**
   * The stroke width in pixels, between 0 and 10.
   * 
   * @var integer $strokeWeight
   */
  public $strokeWeight;
}
/**
  *Options which control the appearance of polylines in a FusionTablesLayer.
 * 
 */
class google_maps_FusionTablesPolylineOptions {
  /**
   * The fill color, defined by a six-digit hexadecimal number in RRGGBB format (e.g.
   *  #00AAFF).
   * 
   * @var string $strokeColor
   */
  public $strokeColor;
  /**
   * The stroke opacity between 0.0 and 1.0.
   * 
   * @var integer $strokeOpacity
   */
  public $strokeOpacity;
  /**
   * The stroke width in pixels.
   * 
   * @var integer $strokeWeight
   */
  public $strokeWeight;
}
/**
  *The properties of a mouse event on a FusionTablesLayer.
 * 
 */
class google_maps_FusionTablesMouseEvent {
  /**
   * Pre-rendered HTML content, as placed in the infowindow by the default UI.
   * 
   * @var string $infoWindowHtml
   */
  public $infoWindowHtml;
  /**
   * The position at which to anchor an infowindow on the clicked feature.
   * 
   * @var google_maps_LatLng $latLng
   */
  public $latLng;
  /**
   * The offset to apply to an infowindow anchored on the clicked feature.
   * 
   * @var google_maps_Size $pixelOffset
   */
  public $pixelOffset;
  /**
   * A collection of FusionTablesCell objects, indexed by column name, representing t
   * he contents of the table row which included the clicked feature.
   * 
   * @var GoogleFusionTablesCell $row
   */
  public $row;
}
/**
  *A KmlLayer adds geographic markup to the map from a KML, KMZ or GeoRSS file that
 *  is hosted on a publicly accessible web server. A KmlFeatureData object is provi
 * ded for each feature when clicked.
 * 
 */
class google_maps_KmlLayer {
  /**
   * Get the default viewport for the layer being displayed.
   * 
   * @return google_maps_LatLngBounds
   */
  public function getDefaultViewport(){}
  /**
   * Get the map on which the KML Layer is being rendered.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Get the metadata associated with this layer, as specified in the layer markup.
   * 
   * @return google_maps_KmlLayerMetadata
   */
  public function getMetadata(){}
  /**
   * Get the status of the layer, set once the requested document has loaded.
   * 
   * @return google_maps_KmlLayerStatus
   */
  public function getStatus(){}
  /**
   * The URL of the KML file being displayed.
   * 
   * @return string
   */
  public function getUrl(){}
  /**
   * Renders the KML Layer on the specified map. If map is set to null, the layer is 
   * removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * Set the URL of the KML file to display.
   * 
   * @var string $url
   * @return void
   */
  public function setUrl(string $url){}
}
/**
  *The properties of a click event on a KML/KMZ or GeoRSS document.
 * 
 */
class google_maps_KmlMouseEvent {
  /**
   * A KmlFeatureData object, containing information about the clicked feature.
   * 
   * @var google_maps_KmlFeatureData $featureData
   */
  public $featureData;
  /**
   * The position at which to anchor an infowindow on the clicked feature.
   * 
   * @var google_maps_LatLng $latLng
   */
  public $latLng;
  /**
   * The offset to apply to an infowindow anchored on the clicked feature.
   * 
   * @var google_maps_Size $pixelOffset
   */
  public $pixelOffset;
}
/**
  *Data for a single KML feature in JSON format, returned when a KML feature is cli
 * cked. The data contained in this object mirrors that associated with the feature
 *  in the KML or GeoRSS markup in which it is declared.
 * 
 */
class google_maps_KmlFeatureData {
  /**
   * The feature's <atom:author>, extracted from the layer markup (if specified).
   * 
   * @var GoogleKmlAuthor $author
   */
  public $author;
  /**
   * The feature's <description>, extracted from the layer markup.
   * 
   * @var string $description
   */
  public $description;
  /**
   * The feature's <id>, extracted from the layer markup. If no <id> has been specifi
   * ed, a unique ID will be generated for this feature.
   * 
   * @var string $id
   */
  public $id;
  /**
   * The feature's balloon styled text, if set.
   * 
   * @var string $infoWindowHtml
   */
  public $infoWindowHtml;
  /**
   * The feature's <name>, extracted from the layer markup.
   * 
   * @var string $name
   */
  public $name;
  /**
   * The feature's <Snippet>, extracted from the layer markup.
   * 
   * @var string $snippet
   */
  public $snippet;
}
/**
  *Contains details of the author of a KML document or feature.
 * 
 */
class google_maps_KmlAuthor {
  /**
   * The author's e-mail address, or an empty string if not specified.
   * 
   * @var string $email
   */
  public $email;
  /**
   * The author's name, or an empty string if not specified.
   * 
   * @var string $name
   */
  public $name;
  /**
   * The author's home page, or an empty string if not specified.
   * 
   * @var string $uri
   */
  public $uri;
}
/**
  *A traffic layer.
 * 
 */
class google_maps_TrafficLayer {
  /**
   * Returns the map on which this layer is displayed.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Renders the layer on the specified map. If map is set to null, the layer will be
   *  removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
}
/**
  *A transit layer.
 * 
 */
class google_maps_TransitLayer {
  /**
   * Returns the map on which this layer is displayed.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Renders the layer on the specified map. If map is set to null, the layer will be
   *  removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
}
/**
  *Displays the panorama for a given LatLng or panorama ID. A StreetViewPanorama ob
 * ject provides a Street View "viewer" which can be stand-alone within a separate 
 * <div> or bound to a Map.
 * 
 */
class google_maps_StreetViewPanorama {
  /**
   * Additional controls to attach to the panorama. To add a control to the panorama,
   *  add the control's <div> to the MVCArray corresponding to the ControlPosition wh
   * ere it should be rendered.
   * 
   * @var array $controls
   */
  public $controls;
  /**
   * Returns the set of navigation links for the Street View panorama.
   * 
   * @return array
   */
  public function getLinks(){}
  /**
   * Returns the current panorama ID for the Street View panorama. This id is stable 
   * within the browser's current session only.
   * 
   * @return string
   */
  public function getPano(){}
  /**
   * Returns the current LatLng position for the Street View panorama.
   * 
   * @return google_maps_LatLng
   */
  public function getPosition(){}
  /**
   * Returns the current point of view for the Street View panorama.
   * 
   * @return google_maps_StreetViewPov
   */
  public function getPov(){}
  /**
   * Returns true if the panorama is visible. It does not specify whether Street View
   *  imagery is available at the specified position.
   * 
   * @return boolean
   */
  public function getVisible(){}
  /**
   * Set the custom panorama provider called on pano change to load custom panoramas.
   * 
   * @var $provider
   * @return void
   */
  public function registerPanoProvider(Closure $provider){}
  /**
   * Sets the current panorama ID for the Street View panorama.
   * 
   * @var string $pano
   * @return void
   */
  public function setPano(string $pano){}
  /**
   * Sets the current LatLng position for the Street View panorama.
   * 
   * @var google_maps_LatLng $latLng
   * @return void
   */
  public function setPosition(google_maps_LatLng $latLng){}
  /**
   * Sets the point of view for the Street View panorama.
   * 
   * @var google_maps_StreetViewPov $pov
   * @return void
   */
  public function setPov(google_maps_StreetViewPov $pov){}
  /**
   * Sets to true to make the panorama visible. If set to false, the panorama will be
   *  hidden whether it is embedded in the map or in its own <div>.
   * 
   * @var boolean $flag
   * @return void
   */
  public function setVisible(boolean $flag){}
}
/**
  *Options defining the properties of a StreetViewPanorama object.
 * 
 */
class google_maps_StreetViewPanoramaOptions {
  /**
   * The enabled/disabled state of the address control.
   * 
   * @var boolean $addressControl
   */
  public $addressControl;
  /**
   * The display options for the address control.
   * 
   * @var google_maps_StreetViewAddressControlOptions $addressControlOptions
   */
  public $addressControlOptions;
  /**
   * The enabled/disabled state of click-to-go.
   * 
   * @var boolean $clickToGo
   */
  public $clickToGo;
  /**
   * Enables/disables zoom on double click. Disabled by default.
   * 
   * @var boolean $disableDoubleClickZoom
   */
  public $disableDoubleClickZoom;
  /**
   * If true, the close button is displayed. Disabled by default.
   * 
   * @var boolean $enableCloseButton
   */
  public $enableCloseButton;
  /**
   * The enabled/disabled state of the imagery acquisition date control.
   * 
   * @var boolean $imageDateControl
   */
  public $imageDateControl;
  /**
   * The enabled/disabled state of the links control.
   * 
   * @var boolean $linksControl
   */
  public $linksControl;
  /**
   * The enabled/disabled state of the pan control.
   * 
   * @var boolean $panControl
   */
  public $panControl;
  /**
   * The display options for the pan control.
   * 
   * @var google_maps_PanControlOptions $panControlOptions
   */
  public $panControlOptions;
  /**
   * The panorama ID, which should be set when specifying a custom panorama.
   * 
   * @var string $pano
   */
  public $pano;
  /**
   * Custom panorama provider, which takes a string pano id and returns an object def
   * ining the panorama given that id. This function must be defined to specify custo
   * m panorama imagery.
   * 
   * @var google_maps_Function(string):StreetViewPanoramaData $panoProvider
   */
  public $panoProvider;
  /**
   * The LatLng position of the Street View panorama.
   * 
   * @var google_maps_LatLng $position
   */
  public $position;
  /**
   * The camera orientation, specified as heading, pitch, and zoom, for the panorama.
   * 
   * @var google_maps_StreetViewPov $pov
   */
  public $pov;
  /**
   * If false, disables scrollwheel zooming in Street View. The scrollwheel is enable
   * d by default.
   * 
   * @var boolean $scrollwheel
   */
  public $scrollwheel;
  /**
   * If true, the Street View panorama is visible on load.
   * 
   * @var boolean $visible
   */
  public $visible;
  /**
   * The enabled/disabled state of the zoom control.
   * 
   * @var boolean $zoomControl
   */
  public $zoomControl;
  /**
   * The display options for the zoom control.
   * 
   * @var google_maps_ZoomControlOptions $zoomControlOptions
   */
  public $zoomControlOptions;
}
/**
  *Options for the rendering of the Street View address control.
 * 
 */
class google_maps_StreetViewAddressControlOptions {
  /**
   * Position id. This id is used to specify the position of the control on the map. 
   * The default position is TOP_LEFT.
   * 
   * @var google_maps_ControlPosition $position
   */
  public $position;
}
/**
  *A collection of references to adjacent Street View panos.
 * 
 */
class google_maps_StreetViewLink {
  /**
   * A localized string describing the link.
   * 
   * @var string $description
   */
  public $description;
  /**
   * The heading of the link.
   * 
   * @var integer $heading
   */
  public $heading;
  /**
   * A unique identifier for the panorama. This id is stable within a session but uns
   * table across sessions.
   * 
   * @var string $pano
   */
  public $pano;
}
/**
  *A point of view object which specifies the camera's orientation at the Street Vi
 * ew panorama's position. The point of view is defined as heading, pitch and zoom.
 * 
 */
class google_maps_StreetViewPov {
  /**
   * The camera heading in degrees relative to true north. True north is 0°, east is
   *  90°, south is 180°, west is 270°.
   * 
   * @var integer $heading
   */
  public $heading;
  /**
   * The camera pitch in degrees, relative to the street view vehicle. Ranges from 90
   * ° (directly upwards) to -90° (directly downwards).
   * 
   * @var integer $pitch
   */
  public $pitch;
  /**
   * The zoom level. Fully zoomed-out is level 0, zooming in increases the zoom level
   * .
   * 
   * @var integer $zoom
   */
  public $zoom;
}
/**
  *The representation of a panorama returned from the provider defined using regist
 * erPanoProvider.
 * 
 */
class google_maps_StreetViewPanoramaData {
  /**
   * Specifies the copyright text for this panorama.
   * 
   * @var string $copyright
   */
  public $copyright;
  /**
   * Specifies the year and month in which the imagery in this panorama was acquired.
   *  The date string is in the form YYYY-MM.
   * 
   * @var string $imageDate
   */
  public $imageDate;
  /**
   * Specifies the navigational links to adjacent panoramas.
   * 
   * @var array $links
   */
  public $links;
  /**
   * Specifies the location meta-data for this panorama.
   * 
   * @var google_maps_StreetViewLocation $location
   */
  public $location;
  /**
   * Specifies the custom tiles for this panorama.
   * 
   * @var google_maps_StreetViewTileData $tiles
   */
  public $tiles;
}
/**
  *A representation of a location in the Street View panorama.
 * 
 */
class google_maps_StreetViewLocation {
  /**
   * A localized string describing the location.
   * 
   * @var string $description
   */
  public $description;
  /**
   * The latlng of the panorama.
   * 
   * @var google_maps_LatLng $latLng
   */
  public $latLng;
  /**
   * A unique identifier for the panorama. This is stable within a session but unstab
   * le across sessions.
   * 
   * @var string $pano
   */
  public $pano;
  /**
   * Gets the tile image URL for the specified tile.pano is the panorama ID of the St
   * reet View tile.tileZoom is the zoom level of the tile.tileX is the x-coordinate 
   * of the tile.tileY is the y-coordinate of the tile. Returns the URL for the tile 
   * image.
   * 
   * @var string $pano
   * @var integer $tileZoom
   * @var integer $tileX
   * @var integer $tileY
   * @return string
   */
  public function getTileUrl(string $pano, integer $tileZoom, integer $tileX, integer $tileY){}
}
/**
  *The properties of the tile set used in a Street View panorama.
 * 
 */
class google_maps_StreetViewTileData {
  /**
   * The heading (in degrees) at the center of the panoramic tiles.
   * 
   * @var integer $centerHeading
   */
  public $centerHeading;
  /**
   * The size (in pixels) at which tiles will be rendered. This may not be the native
   *  tile image size.
   * 
   * @var google_maps_Size $tileSize
   */
  public $tileSize;
  /**
   * The size (in pixels) of the whole panorama's "world".
   * 
   * @var google_maps_Size $worldSize
   */
  public $worldSize;
  /**
   * Gets the tile image URL for the specified tile.pano is the panorama ID of the St
   * reet View tile.tileZoom is the zoom level of the tile.tileX is the x-coordinate 
   * of the tile.tileY is the y-coordinate of the tile. Returns the URL for the tile 
   * image.
   * 
   * @var string $pano
   * @var integer $tileZoom
   * @var integer $tileX
   * @var integer $tileY
   * @return string
   */
  public function getTileUrl(string $pano, integer $tileZoom, integer $tileX, integer $tileY){}
}
/**
  *This object is returned from various mouse events on the map and overlays, and c
 * ontains all the fields shown below.
 * 
 */
class google_maps_MouseEvent {
  /**
   * The latitude/longitude that was below the cursor when the event occurred.
   * 
   * @var google_maps_LatLng $latLng
   */
  public $latLng;
  /**
   * Prevents this event from propagating further.
   * 
   * @return void
   */
  public function stop(){}
}
/**
  *A LatLng is a point in geographical coordinates: latitude and longitude.
 * 
 */
class google_maps_LatLng {
}
/**
  *A LatLngBounds instance represents a rectangle in geographical coordinates, incl
 * uding one that crosses the 180 degrees longitudinal meridian.
 * 
 */
class google_maps_LatLngBounds {
  /**
   * Returns true if the given lat/lng is in this bounds.
   * 
   * @var google_maps_LatLng $latLng
   * @return boolean
   */
  public function contains(google_maps_LatLng $latLng){}
  /**
   * Returns true if this bounds approximately equals the given bounds.
   * 
   * @var google_maps_LatLngBounds $other
   * @return boolean
   */
  public function equals(google_maps_LatLngBounds $other){}
  /**
   * Extends this bounds to contain the given point.
   * 
   * @var google_maps_LatLng $point
   * @return google_maps_LatLngBounds
   */
  public function extend(google_maps_LatLng $point){}
  /**
   * Computes the center of this LatLngBounds
   * 
   * @return google_maps_LatLng
   */
  public function getCenter(){}
  /**
   * Returns the north-east corner of this bounds.
   * 
   * @return google_maps_LatLng
   */
  public function getNorthEast(){}
  /**
   * Returns the south-west corner of this bounds.
   * 
   * @return google_maps_LatLng
   */
  public function getSouthWest(){}
  /**
   * Returns true if this bounds shares any points with this bounds.
   * 
   * @var google_maps_LatLngBounds $other
   * @return boolean
   */
  public function intersects(google_maps_LatLngBounds $other){}
  /**
   * Returns if the bounds are empty.
   * 
   * @return boolean
   */
  public function isEmpty(){}
  /**
   * Converts the given map bounds to a lat/lng span.
   * 
   * @return google_maps_LatLng
   */
  public function toSpan(){}
  /**
   * Converts to string.
   * 
   * @return string
   */
  public function toString(){}
  /**
   * Returns a string of the form "lat_lo,lng_lo,lat_hi,lng_hi" for this bounds, wher
   * e "lo" corresponds to the southwest corner of the bounding box, while "hi" corre
   * sponds to the northeast corner of that box.
   * 
   * @var integer $precision
   * @return string
   */
  public function toUrlValue(integer $precision){}
  /**
   * Extends this bounds to contain the union of this and the given bounds.
   * 
   * @var google_maps_LatLngBounds $other
   * @return google_maps_LatLngBounds
   */
  public function union(google_maps_LatLngBounds $other){}
}
/**

 */
class google_maps_Point {
  /**
   * The X coordinate
   * 
   * @var integer $x
   */
  public $x;
  /**
   * The Y coordinate
   * 
   * @var integer $y
   */
  public $y;
  /**
   * Compares two Points
   * 
   * @var google_maps_Point $other
   * @return boolean
   */
  public function equals(google_maps_Point $other){}
  /**
   * Returns a string representation of this Point.
   * 
   * @return string
   */
  public function toString(){}
}
/**

 */
class google_maps_Size {
  /**
   * The height along the y-axis, in pixels.
   * 
   * @var integer $height
   */
  public $height;
  /**
   * The width along the x-axis, in pixels.
   * 
   * @var integer $width
   */
  public $width;
  /**
   * Compares two Sizes.
   * 
   * @var google_maps_Size $other
   * @return boolean
   */
  public function equals(google_maps_Size $other){}
  /**
   * Returns a string representation of this Size.
   * 
   * @return string
   */
  public function toString(){}
}
/**

 */
class google_maps_MVCObject {
  /**
   * Adds the given listener function to the given event name. Returns an identifier 
   * for this listener that can be used with google.maps.event.removeListener.
   * 
   * @var string $eventName
   * @var google_maps_Function $handler
   * @return google_maps_MapsEventListener
   */
  public function addListener(string $eventName, google_maps_Function $handler){}
  /**
   * Binds a View to a Model.
   * 
   * @var string $key
   * @var MVC $target
   * @var string $targetKey
   * @var boolean $noNotify
   * @return void
   */
  public function bindTo(string $key, MVC $target, string $targetKey, boolean $noNotify){}
  /**
   * Generic handler for state changes. Override this in derived classes to handle ar
   * bitrary state changes.
   * 
   * @var string $key
   * @return void
   */
  public function changed(string $key){}
  /**
   * Gets a value.
   * 
   * @var string $key
   * @return mixed
   */
  public function get(string $key){}
  /**
   * Notify all observers of a change on this property. This notifies both objects th
   * at are bound to the object's property as well as the object that it is bound to.
   * 
   * @var string $key
   * @return void
   */
  public function notify(string $key){}
  /**
   * Sets a value.
   * 
   * @var string $key
   * @var mixed $value
   * @return void
   */
  public function set(string $key, mixed $value){}
  /**
   * Sets a collection of key-value pairs.
   * 
   * @var  $values
   * @return void
   */
  public function setValues( $values){}
  /**
   * Removes a binding. Unbinding will set the unbound property to the current value.
   *  The object will not be notified, as the value has not changed.
   * 
   * @var string $key
   * @return void
   */
  public function unbind(string $key){}
  /**
   * Removes all bindings.
   * 
   * @return void
   */
  public function unbindAll(){}
}
/**
  *This class extends MVCObject.
 * 
 */
class google_maps_MVCArray {
  /**
   * Removes all elements from the array.
   * 
   * @return void
   */
  public function clear(){}
  /**
   * Iterate over each element, calling the provided callback. The callback is called
   *  for each element like: callback(element, index).
   * 
   * @var UtilFunc|Closure $callback(google_maps_number $number)
   * @return void
   */
  public function forEach($callback){}
  /**
   * Returns a reference to the underlying Array. Warning: if the Array is mutated, n
   * o events will be fired by this object.
   * 
   * @return array
   */
  public function getArray(){}
  /**
   * Returns the element at the specified index.
   * 
   * @var integer $i
   * @return mixed
   */
  public function getAt(integer $i){}
  /**
   * Returns the number of elements in this array.
   * 
   * @return integer
   */
  public function getLength(){}
  /**
   * Inserts an element at the specified index.
   * 
   * @var integer $i
   * @var mixed $elem
   * @return void
   */
  public function insertAt(integer $i, mixed $elem){}
  /**
   * Removes the last element of the array and returns that element.
   * 
   * @return mixed
   */
  public function pop(){}
  /**
   * Adds one element to the end of the array and returns the new length of the array
   * .
   * 
   * @var mixed $elem
   * @return integer
   */
  public function push(mixed $elem){}
  /**
   * Removes an element from the specified index.
   * 
   * @var integer $i
   * @return mixed
   */
  public function removeAt(integer $i){}
  /**
   * Sets an element at the specified index.
   * 
   * @var integer $i
   * @var mixed $elem
   * @return void
   */
  public function setAt(integer $i, mixed $elem){}
}
/**
  *Implements AdSense for Content advertising on an associated map. To use an AdUni
 * t, you must obtain and specify an AdSense for Content publisher ID within the Ad
 * Unit's constructor options.
 * 
 */
class google_maps_adsense_AdUnit {
  /**
   * Returns the AdUnit's background color.
   * 
   * @return string
   */
  public function getBackgroundColor(){}
  /**
   * Returns the AdUnit's border color.
   * 
   * @return string
   */
  public function getBorderColor(){}
  /**
   * Returns the channel number in use by this AdUnit.
   * 
   * @return string
   */
  public function getChannelNumber(){}
  /**
   * Returns the containing element of the AdUnit.
   * 
   * @return document
   */
  public function getContainer(){}
  /**
   * Returns the format in use by this AdUnit.
   * 
   * @return google_maps_AdFormat
   */
  public function getFormat(){}
  /**
   * Returns the map to which this AdUnit's ads are targeted.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Returns the ControlPosition at which this AdUnit is displayed on the map.
   * 
   * @return google_maps_ControlPosition
   */
  public function getPosition(){}
  /**
   * Returns the specified AdSense For Content publisher ID.
   * 
   * @return string
   */
  public function getPublisherId(){}
  /**
   * Returns the AdUnit's text color.
   * 
   * @return string
   */
  public function getTextColor(){}
  /**
   * Returns the AdUnit's title color.
   * 
   * @return string
   */
  public function getTitleColor(){}
  /**
   * Returns the AdUnit's URL color.
   * 
   * @return string
   */
  public function getUrlColor(){}
  /**
   * Sets the AdUnit's background color.
   * 
   * @return string
   */
  public function setBackgroundColor(){}
  /**
   * Sets the AdUnit's border color.
   * 
   * @return string
   */
  public function setBorderColor(){}
  /**
   * Specifies the channel number for this AdUnit. Channel numbers are optional and c
   * an be created for Google AdSense tracking.
   * 
   * @var string $channelNumber
   * @return void
   */
  public function setChannelNumber(string $channelNumber){}
  /**
   * Specifies the display format for this AdUnit.
   * 
   * @var google_maps_AdFormat $format
   * @return void
   */
  public function setFormat(google_maps_AdFormat $format){}
  /**
   * Associates this AdUnit with the specified map. Ads will be targeted to the map's
   *  viewport. The map must be specified in order to display ads.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * Sets the ControlPosition at which to display the AdUnit on the map. If the posit
   * ion is set to null, the AdUnit is removed from the map.
   * 
   * @var google_maps_ControlPosition $position
   * @return void
   */
  public function setPosition(google_maps_ControlPosition $position){}
  /**
   * Sets the AdUnit's text color.
   * 
   * @return string
   */
  public function setTextColor(){}
  /**
   * Sets the AdUnit's title color.
   * 
   * @return string
   */
  public function setTitleColor(){}
  /**
   * Sets the AdUnit's URL color.
   * 
   * @return string
   */
  public function setUrlColor(){}
}
/**
  *Identifiers used to specify an AdSense For Content format. See https://google.co
 * m/adsense/adformats.
 * 
 */
class google_maps_adsense_AdFormat {
}
/**
  *A PanoramioLayer displays photos from Panoramio as a rendered layer.
 * 
 */
class google_maps_panoramio_PanoramioLayer {
  /**
   * Returns the map on which this layer is displayed.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * 
   * 
   * @return string
   */
  public function getTag(){}
  /**
   * 
   * 
   * @return string
   */
  public function getUserId(){}
  /**
   * Renders the layer on the specified map. If map is set to null, the layer will be
   *  removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * 
   * 
   * @var google_maps_PanoramioLayerOptions $options
   * @return void
   */
  public function setOptions(google_maps_PanoramioLayerOptions $options){}
  /**
   * 
   * 
   * @var string $tag
   * @return void
   */
  public function setTag(string $tag){}
  /**
   * 
   * 
   * @var string $userId
   * @return void
   */
  public function setUserId(string $userId){}
}
/**
  *This object defines the properties that can be set on a PanoramioLayer object.
 * 
 */
class google_maps_panoramio_PanoramioLayerOptions {
  /**
   * If true, the layer receives mouse events. Default value is true.
   * 
   * @var boolean $clickable
   */
  public $clickable;
  /**
   * The map on which to display the layer.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * Suppress the rendering of info windows when layer features are clicked.
   * 
   * @var boolean $suppressInfoWindows
   */
  public $suppressInfoWindows;
  /**
   * A panoramio tag used to filter the photos which are displayed. Only photos which
   *  have been tagged with the supplied string will be shown.
   * 
   * @var string $tag
   */
  public $tag;
  /**
   * A Panoramio user ID. If provided, only photos by this user will be displayed on 
   * the map. If both a tag and user ID are provided, the tag will take precedence.
   * 
   * @var string $userId
   */
  public $userId;
}
/**
  *Describes a single Panoramio feature.
 * 
 */
class google_maps_panoramio_PanoramioFeature {
  /**
   * The username of the user who uploaded this photo.
   * 
   * @var string $author
   */
  public $author;
  /**
   * The unique identifier for this photo, as used in the Panoramio API (see http://w
   * ww.panoramio.com/api/widget/api.html).
   * 
   * @var string $photoId
   */
  public $photoId;
  /**
   * The title of the photo.
   * 
   * @var string $title
   */
  public $title;
  /**
   * The URL of the photo.
   * 
   * @var string $url
   */
  public $url;
  /**
   * The unique identifier for the user who uploaded this photo, as used in the Panor
   * amio API (see http://www.panoramio.com/api/widget/api.html).
   * 
   * @var string $userId
   */
  public $userId;
}
/**
  *The properties of a mouse event on a PanoramioLayer.
 * 
 */
class google_maps_panoramio_PanoramioMouseEvent {
  /**
   * A PanoramioFeature object containing information about the clicked feature.
   * 
   * @var google_maps_PanoramioFeature $featureDetails
   */
  public $featureDetails;
  /**
   * Pre-rendered HTML content to display within a feature's InfoWindow when clicked.
   * 
   * @var string $infoWindowHtml
   */
  public $infoWindowHtml;
  /**
   * The position at which to anchor an info window on the clicked feature.
   * 
   * @var google_maps_LatLng $latLng
   */
  public $latLng;
  /**
   * The offset to apply to an info window anchored on the clicked feature.
   * 
   * @var google_maps_Size $pixelOffset
   */
  public $pixelOffset;
}
/**
  *The options that can be set on an Autocomplete object.
 * 
 */
class google_maps_places_AutocompleteOptions {
  /**
   * The area in which to search for places. Results are biased towards, but not rest
   * ricted to, places contained within these bounds.
   * 
   * @var google_maps_LatLngBounds $bounds
   */
  public $bounds;
  /**
   * The component restrictions. Component restrictions are used to restrict predicti
   * ons to only those within the parent component. E.g., the country.
   * 
   * @var google_maps_ComponentRestrictions $componentRestrictions
   */
  public $componentRestrictions;
  /**
   * The types of predictions to be returned. Four types are supported: 'establishmen
   * t' for businesses, 'geocode' for addresses, '(regions)' for administrative regio
   * ns and '(cities)' for localities. If nothing is specified, all types are returne
   * d.
   * 
   * @var array $types
   */
  public $types;
}
/**

 */
class google_maps_places_AutocompletePrediction {
  /**
   * This is the unformatted version of the query suggested by the Places service.
   * 
   * @var string $description
   */
  public $description;
  /**
   * A stable ID for this place, intended to be interoperable with those returned by 
   * the place search service.
   * 
   * @var string $id
   */
  public $id;
  /**
   * A set of substrings in the place's description that match elements in the user's
   *  input, suitable for use in highlighting those substrings. Each substring is ide
   * ntified by an offset and a length, expressed in unicode characters.
   * 
   * @var array $matched_substrings
   */
  public $matched_substrings;
  /**
   * A reference that can be used to retrieve details about this place using the plac
   * e details service (see PlacesService.getDetails()).
   * 
   * @var string $reference
   */
  public $reference;
  /**
   * Information about individual terms in the above description, from most to least 
   * specific. For example, "Taco Bell", "Willitis", and "CA".
   * 
   * @var array $terms
   */
  public $terms;
  /**
   * An array of types that the prediction belongs to, for example 'establishment' or
   *  'geocode'.
   * 
   * @var array $types
   */
  public $types;
}
/**

 */
class google_maps_places_PredictionSubstring {
  /**
   * The length of the substring.
   * 
   * @var integer $length
   */
  public $length;
  /**
   * The offset to the substring's start within the description string.
   * 
   * @var integer $offset
   */
  public $offset;
}
/**
  *Contains methods related to retrieving Autocomplete predictions.
 * 
 */
class google_maps_places_AutocompleteService {
  /**
   * Retrieves place autocomplete predictions based on the supplied autocomplete requ
   * est.
   * 
   * @var google_maps_AutocompletionRequest $request
   * @var UtilFunc|Closure $callback(google_maps_AutocompletePrediction $AutocompletePrediction, google_maps_PlacesServiceStatus $PlacesServiceStatus)
   * @return void
   */
  public function getPlacePredictions(google_maps_AutocompletionRequest $request, $callback){}
  /**
   * Retrieves query autocomplete predictions based on the supplied query autocomplet
   * e request.
   * 
   * @var google_maps_QueryAutocompletionRequest $request
   * @var UtilFunc|Closure $callback(google_maps_QueryAutocompletePrediction $QueryAutocompletePrediction, google_maps_PlacesServiceStatus $PlacesServiceStatus)
   * @return void
   */
  public function getQueryPredictions(google_maps_QueryAutocompletionRequest $request, $callback){}
}
/**
  *An Autocompletion request to be sent to the AutocompleteService.
 * 
 */
class google_maps_places_AutocompletionRequest {
  /**
   * Bounds for prediction biasing. Predictions will be biased towards, but not restr
   * icted to, the given bounds. Both location and radius will be ignored if bounds i
   * s set.
   * 
   * @var google_maps_LatLngBounds $bounds
   */
  public $bounds;
  /**
   * The component restrictions. Component restrictions are used to restrict predicti
   * ons to only those within the parent component. E.g., the country.
   * 
   * @var google_maps_ComponentRestrictions $componentRestrictions
   */
  public $componentRestrictions;
  /**
   * The user entered input string.
   * 
   * @var string $input
   */
  public $input;
  /**
   * Location for prediction biasing. Predictions will be biased towards the given lo
   * cation and radius. Alternatively, bounds can be used.
   * 
   * @var google_maps_LatLng $location
   */
  public $location;
  /**
   * The character position in the input term at which the service uses text for pred
   * ictions (the position of the cursor in the input field).
   * 
   * @var integer $offset
   */
  public $offset;
  /**
   * The radius of the area used for prediction biasing. The radius is specified in m
   * eters, and must always be accompanied by a location property. Alternatively, bou
   * nds can be used.
   * 
   * @var integer $radius
   */
  public $radius;
  /**
   * The types of predictions to be returned. Four types are supported: 'establishmen
   * t' for businesses, 'geocode' for addresses, '(regions)' for administrative regio
   * ns and '(cities)' for localities. If nothing is specified, all types are returne
   * d.
   * 
   * @var array $types
   */
  public $types;
}
/**
  *Defines the component restrictions that can be used with the autocomplete servic
 * e.
 * 
 */
class google_maps_places_ComponentRestrictions {
  /**
   * Restricts predictions to the specified country (ISO 3166-1 Alpha-2 country code,
   *  case insensitive). E.g., us, br, au.
   * 
   * @var string $country
   */
  public $country;
}
/**
  *Defines information about an aspect of the place that users have reviewed.
 * 
 */
class google_maps_places_PlaceAspectRating {
  /**
   * The rating of this aspect. For individual reviews this is an integer from 0 to 3
   * . For aggregated ratings of a place this is an integer from 0 to 30.
   * 
   * @var integer $rating
   */
  public $rating;
  /**
   * The aspect type, e.g. "food", "decor", "service", "overall".
   * 
   * @var string $type
   */
  public $type;
}
/**
  *A Place details query to be sent to the PlacesService.
 * 
 */
class google_maps_places_PlaceDetailsRequest {
  /**
   * The reference of the Place for which details are being requested.
   * 
   * @var string $reference
   */
  public $reference;
}
/**
  *An object used to fetch additional pages of Places results.
 * 
 */
class google_maps_places_PlaceSearchPagination {
  /**
   * Indicates if further results are available. true when there is an additional res
   * ults page.
   * 
   * @var boolean $hasNextPage
   */
  public $hasNextPage;
  /**
   * Fetches the next page of results. Uses the same callback function that was provi
   * ded to the first search request.
   * 
   * @return void
   */
  public function nextPage(){}
}
/**
  *A Place search query to be sent to the PlacesService.
 * 
 */
class google_maps_places_PlaceSearchRequest {
  /**
   * The bounds within which to search for Places. Both location and radius will be i
   * gnored if bounds is set.
   * 
   * @var google_maps_LatLngBounds $bounds
   */
  public $bounds;
  /**
   * A term to be matched against all available fields, including but not limited to 
   * name, type, and address, as well as customer reviews and other third-party conte
   * nt.
   * 
   * @var string $keyword
   */
  public $keyword;
  /**
   * The location around which to search for Places.
   * 
   * @var google_maps_LatLng $location
   */
  public $location;
  /**
   * Restricts the Place search results to Places that include this text in the name.
   * 
   * @var string $name
   */
  public $name;
  /**
   * The distance from the given location within which to search for Places, in meter
   * s. The maximum allowed value is 50 000.
   * 
   * @var integer $radius
   */
  public $radius;
  /**
   * Specifies the ranking method to use when returning results.
   * 
   * @var google_maps_RankBy $rankBy
   */
  public $rankBy;
  /**
   * Restricts the Place search results to Places with a type matching at least one o
   * f the specified types in this array. Valid types are given here.
   * 
   * @var array $types
   */
  public $types;
}
/**
  *The status returned by the PlacesService on the completion of its searches.
 * 
 */
class google_maps_places_PlacesServiceStatus {
}
/**
  *Represents a single Query Autocomplete prediction.
 * 
 */
class google_maps_places_QueryAutocompletePrediction {
  /**
   * This is the unformatted version of the query suggested by the Places service.
   * 
   * @var string $description
   */
  public $description;
  /**
   * A set of substrings in the place's description that match elements in the user's
   *  input, suitable for use in highlighting those substrings. Each substring is ide
   * ntified by an offset and a length, expressed in unicode characters.
   * 
   * @var array $matched_substrings
   */
  public $matched_substrings;
  /**
   * Information about individual terms in the above description. Categorical terms c
   * ome first (e.g., "restaurant"). Address terms appear from most to least specific
   * . For example, "San Francisco", and "CA".
   * 
   * @var array $terms
   */
  public $terms;
}
/**
  *An QueryAutocompletion request to be sent to the QueryAutocompleteService.
 * 
 */
class google_maps_places_QueryAutocompletionRequest {
  /**
   * Bounds for prediction biasing. Predictions will be biased towards, but not restr
   * icted to, the given bounds. Both location and radius will be ignored if bounds i
   * s set.
   * 
   * @var google_maps_LatLngBounds $bounds
   */
  public $bounds;
  /**
   * The user entered input string.
   * 
   * @var string $input
   */
  public $input;
  /**
   * Location for prediction biasing. Predictions will be biased towards the given lo
   * cation and radius. Alternatively, bounds can be used.
   * 
   * @var google_maps_LatLng $location
   */
  public $location;
  /**
   * The character position in the input term at which the service uses text for pred
   * ictions (the position of the cursor in the input field).
   * 
   * @var integer $offset
   */
  public $offset;
  /**
   * The radius of the area used for prediction biasing. The radius is specified in m
   * eters, and must always be accompanied by a location property. Alternatively, bou
   * nds can be used.
   * 
   * @var integer $radius
   */
  public $radius;
}
/**
  *Ranking options for a PlaceSearchRequest.
 * 
 */
class google_maps_places_RankBy {
}
/**
  *The options that can be set on a SearchBox object.
 * 
 */
class google_maps_places_SearchBoxOptions {
}
/**
  *A text search request to be sent to the PlacesService.
 * 
 */
class google_maps_places_TextSearchRequest {
  /**
   * Bounds used to bias results when searching for Places (optional). Both location 
   * and radius will be ignored if bounds is set. Results will not be restricted to t
   * hose inside these bounds; but, results inside it will rank higher.
   * 
   * @var google_maps_LatLngBounds $bounds
   */
  public $bounds;
  /**
   * The center of the area used to bias results when searching for Places.
   * 
   * @var google_maps_LatLng $location
   */
  public $location;
  /**
   * The request's query term. e.g. the name of a place ('Eiffel Tower'), a category 
   * followed by the name of a location ('pizza in New York'), or the name of a place
   *  followed by a location disambiguator ('Starbucks in Sydney').
   * 
   * @var string $query
   */
  public $query;
  /**
   * The radius of the area used to bias results when searching for Places, in meters
   * .
   * 
   * @var integer $radius
   */
  public $radius;
  /**
   * Restricts the Place search results to Places with a type matching at least one o
   * f the specified types in this array. Valid types are given here.
   * 
   * @var array $types
   */
  public $types;
}
/**
  *Allows users to draw markers, polygons, polylines, rectangles, and circles on th
 * e map. The DrawingManager's drawing mode defines the type of overlay that will b
 * e created by the user. Adds a control to the map, allowing the user to switch dr
 * awing mode.
 * 
 */
class google_maps_drawing_DrawingManager {
  /**
   * Returns the DrawingManager's drawing mode.
   * 
   * @return google_maps_OverlayType
   */
  public function getDrawingMode(){}
  /**
   * Returns the Map to which the DrawingManager is attached, which is the Map on whi
   * ch the overlays created will be placed.
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Changes the DrawingManager's drawing mode, which defines the type of overlay to 
   * be added on the map. Accepted values are MARKER, POLYGON, POLYLINE, RECTANGLE, C
   * IRCLE, or null. A drawing mode of null means that the user can interact with the
   *  map as normal, and clicks do not draw anything.
   * 
   * @var google_maps_OverlayType $drawingMode
   * @return void
   */
  public function setDrawingMode(google_maps_OverlayType $drawingMode){}
  /**
   * Attaches the DrawingManager object to the specified Map.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
  /**
   * Sets the DrawingManager's options.
   * 
   * @var google_maps_DrawingManagerOptions $options
   * @return void
   */
  public function setOptions(google_maps_DrawingManagerOptions $options){}
}
/**
  *Options for the drawing manager.
 * 
 */
class google_maps_drawing_DrawingManagerOptions {
  /**
   * Options to apply to any new circles created with this DrawingManager. The center
   *  and radius properties are ignored, and the map property of a new circle is alwa
   * ys set to the DrawingManager's map.
   * 
   * @var google_maps_CircleOptions $circleOptions
   */
  public $circleOptions;
  /**
   * The enabled/disabled state of the drawing control. Defaults to true.
   * 
   * @var boolean $drawingControl
   */
  public $drawingControl;
  /**
   * The display options for the drawing control.
   * 
   * @var google_maps_DrawingControlOptions $drawingControlOptions
   */
  public $drawingControlOptions;
  /**
   * The DrawingManager's drawing mode, which defines the type of overlay to be added
   *  on the map. Accepted values are MARKER, POLYGON, POLYLINE, RECTANGLE, CIRCLE, o
   * r null. A drawing mode of null means that the user can interact with the map as 
   * normal, and clicks do not draw anything.
   * 
   * @var google_maps_OverlayType $drawingMode
   */
  public $drawingMode;
  /**
   * The Map to which the DrawingManager is attached, which is the Map on which the o
   * verlays created will be placed.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * Options to apply to any new markers created with this DrawingManager. The positi
   * on property is ignored, and the map property of a new marker is always set to th
   * e DrawingManager's map.
   * 
   * @var google_maps_MarkerOptions $markerOptions
   */
  public $markerOptions;
  /**
   * Options to apply to any new polygons created with this DrawingManager. The paths
   *  property is ignored, and the map property of a new polygon is always set to the
   *  DrawingManager's map.
   * 
   * @var google_maps_PolygonOptions $polygonOptions
   */
  public $polygonOptions;
  /**
   * Options to apply to any new polylines created with this DrawingManager. The path
   *  property is ignored, and the map property of a new polyline is always set to th
   * e DrawingManager's map.
   * 
   * @var google_maps_PolylineOptions $polylineOptions
   */
  public $polylineOptions;
  /**
   * Options to apply to any new rectangles created with this DrawingManager. The bou
   * nds property is ignored, and the map property of a new rectangle is always set t
   * o the DrawingManager's map.
   * 
   * @var google_maps_RectangleOptions $rectangleOptions
   */
  public $rectangleOptions;
}
/**
  *Options for the rendering of the drawing control.
 * 
 */
class google_maps_drawing_DrawingControlOptions {
  /**
   * The drawing modes to display in the drawing control, in the order in which they 
   * are to be displayed. The hand icon (which corresponds to the null drawing mode) 
   * is always available and is not to be specified in this array. Defaults to [MARKE
   * R, POLYLINE, RECTANGLE, CIRCLE, POLYGON].
   * 
   * @var array $drawingModes
   */
  public $drawingModes;
  /**
   * Position id. Used to specify the position of the control on the map. The default
   *  position is TOP_LEFT.
   * 
   * @var google_maps_ControlPosition $position
   */
  public $position;
}
/**
  *The properties of an overlaycomplete event on a DrawingManager.
 * 
 */
class google_maps_drawing_OverlayCompleteEvent {
  /**
   * The completed overlay.
   * 
   * @var google_maps_Marker|google_maps_Polygon|google_maps_Polyline|google_maps_Rectangle|google_maps_Circle $overlay
   */
  public $overlay;
  /**
   * The completed overlay's type.
   * 
   * @var google_maps_OverlayType $type
   */
  public $type;
}
/**
  *This object defines the properties that can be set on a WeatherLayer object.
 * 
 */
class google_maps_weather_WeatherLayerOptions {
  /**
   * If true, the layer receives mouse events. Default value is true.
   * 
   * @var boolean $clickable
   */
  public $clickable;
  /**
   * The color of labels on the weather layer. If this is not explicitly set, the lab
   * el color is chosen automatically depending on the map type.
   * 
   * @var google_maps_LabelColor $labelColor
   */
  public $labelColor;
  /**
   * The map on which to display the layer.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * Suppress the rendering of info windows when weather icons are clicked.
   * 
   * @var boolean $suppressInfoWindows
   */
  public $suppressInfoWindows;
  /**
   * The units to use for temperature.
   * 
   * @var google_maps_TemperatureUnit $temperatureUnits
   */
  public $temperatureUnits;
  /**
   * The units to use for wind speed.
   * 
   * @var google_maps_WindSpeedUnit $windSpeedUnits
   */
  public $windSpeedUnits;
}
/**
  *The temperature unit displayed by the weather layer.
 * 
 */
class google_maps_weather_TemperatureUnit {
}
/**
  *The properties of a mouse event on a WeatherLayer.
 * 
 */
class google_maps_weather_WeatherMouseEvent {
  /**
   * A WeatherFeature object containing information about the clicked feature.
   * 
   * @var google_maps_WeatherFeature $featureDetails
   */
  public $featureDetails;
  /**
   * Pre-rendered HTML content to display within a feature's InfoWindow when clicked.
   * 
   * @var string $infoWindowHtml
   */
  public $infoWindowHtml;
  /**
   * The position at which to anchor an info window on the clicked feature.
   * 
   * @var google_maps_LatLng $latLng
   */
  public $latLng;
  /**
   * The offset to apply to an info window anchored on the clicked feature.
   * 
   * @var google_maps_Size $pixelOffset
   */
  public $pixelOffset;
}
/**
  *Describes a single Weather feature.
 * 
 */
class google_maps_weather_WeatherFeature {
  /**
   * The current weather conditions at this location.
   * 
   * @var google_maps_WeatherConditions $current
   */
  public $current;
  /**
   * A forecast of weather conditions over the next four days. The forecast array is 
   * always in chronological order.
   * 
   * @var array $forecast
   */
  public $forecast;
  /**
   * The location name of this feature, e.g. "San Francisco, California".
   * 
   * @var string $location
   */
  public $location;
  /**
   * The temperature units being used.
   * 
   * @var google_maps_TemperatureUnit $temperatureUnit
   */
  public $temperatureUnit;
  /**
   * The wind speed units being used.
   * 
   * @var google_maps_WindSpeedUnit $windSpeedUnit
   */
  public $windSpeedUnit;
}
/**
  *Describes a single weather feature.
 * 
 */
class google_maps_weather_WeatherConditions {
  /**
   * The current day of the week in long form, e.g. "Monday".
   * 
   * @var string $day
   */
  public $day;
  /**
   * A description of the conditions, e.g. "Partly Cloudy".
   * 
   * @var string $description
   */
  public $description;
  /**
   * The highest temperature reached during the day.
   * 
   * @var integer $high
   */
  public $high;
  /**
   * The current humidity, expressed as a percentage.
   * 
   * @var integer $humidity
   */
  public $humidity;
  /**
   * The lowest temperature reached during the day.
   * 
   * @var integer $low
   */
  public $low;
  /**
   * The current day of the week in short form, e.g. "M".
   * 
   * @var string $shortDay
   */
  public $shortDay;
  /**
   * The current temperature, in the specified temperature units.
   * 
   * @var integer $temperature
   */
  public $temperature;
  /**
   * The current wind direction.
   * 
   * @var string $windDirection
   */
  public $windDirection;
  /**
   * The current wind speed, in the specified wind speed units.
   * 
   * @var integer $windSpeed
   */
  public $windSpeed;
}
/**
  *Describes a single day's weather forecast.
 * 
 */
class google_maps_weather_WeatherForecast {
  /**
   * The day of the week in long form, e.g. "Monday".
   * 
   * @var string $day
   */
  public $day;
  /**
   * A description of the conditions, e.g. "Partly Cloudy".
   * 
   * @var string $description
   */
  public $description;
  /**
   * The highest temperature reached during the day.
   * 
   * @var integer $high
   */
  public $high;
  /**
   * The lowest temperature reached during the day.
   * 
   * @var integer $low
   */
  public $low;
  /**
   * The day of the week in short form, e.g. "M".
   * 
   * @var string $shortDay
   */
  public $shortDay;
}
/**
  *A layer that provides a client-side rendered heatmap, depicting the intensity of
 *  data at geographical points.
 * 
 */
class google_maps_visualization_HeatmapLayer {
  /**
   * Returns the data points currently displayed by this heatmap.
   * 
   * @return array|google_maps_WeightedLocation>
   */
  public function getData(){}
  /**
   * 
   * 
   * @return google_maps_Map
   */
  public function getMap(){}
  /**
   * Sets the data points to be displayed by this heatmap.
   * 
   * @var array $data
   * @return void
   */
  public function setData(array $data){}
  /**
   * Renders the heatmap on the specified map. If map is set to null, the heatmap wil
   * l be removed.
   * 
   * @var google_maps_Map $map
   * @return void
   */
  public function setMap(google_maps_Map $map){}
}
/**
  *This object defines the properties that can be set on a HeatmapLayer object.
 * 
 */
class google_maps_visualization_HeatmapLayerOptions {
  /**
   * The data points to display. Required.
   * 
   * @var array $data
   */
  public $data;
  /**
   * Specifies whether heatmaps dissipate on zoom. By default, the radius of influenc
   * e of a data point is specified by the radius option only. When dissipating is di
   * sabled, the radius option is intepreted as a radius at zoom level 0.
   * 
   * @var boolean $dissipating
   */
  public $dissipating;
  /**
   * The color gradient of the heatmap, specified as an array of CSS color strings. A
   * ll CSS3 colors are supported except for extended named colors.
   * 
   * @var array $gradient
   */
  public $gradient;
  /**
   * The map on which to display the layer.
   * 
   * @var google_maps_Map $map
   */
  public $map;
  /**
   * The maximum intensity of the heatmap. By default, heatmap colors are dynamically
   *  scaled according to the greatest concentration of points at any particular pixe
   * l on the map. This property allows you to specify a fixed maximum.
   * 
   * @var integer $maxIntensity
   */
  public $maxIntensity;
  /**
   * The opacity of the heatmap, expressed as a number between 0 and 1. Defaults to 0
   * .6.
   * 
   * @var integer $opacity
   */
  public $opacity;
  /**
   * The radius of influence for each data point, in pixels.
   * 
   * @var integer $radius
   */
  public $radius;
}
/**
  *A data point entry for a heatmap. This is a geographical data point with a weigh
 * t attribute.
 * 
 */
class google_maps_visualization_WeightedLocation {
  /**
   * The location of data point.
   * 
   * @var google_maps_LatLng $location
   */
  public $location;
  /**
   * The weighting value of the data point.
   * 
   * @var integer $weight
   */
  public $weight;
}
