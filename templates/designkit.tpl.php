
/**
 * This template should be overridden by implementing themes to establish
 * the styles they would like to use with DesignKit settings. The following
 * template is provided as a simple example of how you can generate CSS
 * styles from DesignKit settings.
 *
 * .designkit-color { color: [?php print $foreground ?]; }
 * .designkit-bg { background-color: [?php print $background ?]; }
 */

#header {
      background: <?php print $header ?>;
}

#main {
      background: <?php print $main ?>;
}

#navigation {
      background: <?php print $navigation ?>;
}

#footer {
      background: <?php print $footer ?>;
}

.sidebar {
      background: <?php print $sidebars?>;
}

.not-front footer{
  border-top:5px solid <?php print $footer_top?>;
}
/*In this case, `designkit_colorshift` is used to darken the background color
(e.g. 10% black fill) when used for `#page-title` and the text color is set to
either white or black based on the lightness of `$background`.*/