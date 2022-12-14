<?php

/**
 * Icon Shortcode Handler
 *
 * @author NYC Opportunity
 */

namespace Shortcode;

/**
 * Class
 */
class Icon extends Shortcode {
  /** The shortcode tag */
  public $tag = 'icon';

  /** The shortcode hint for the selector dropdown */
  public $hint = 'name=""';

  /**
   * Add Shortcode Callback
   *
   * @param   Array   $atts           Attributes added to the shortcode
   * @param   String  $content        Content within shortcode tags
   * @param   String  $shortcode_tag  The full shortcode tag
   *
   * @return  String                  A compiled component string
   */
  public function shortcode($atts, $content, $shortcode_tag) {
    $atts = shortcode_atts(array(
      'name' => null,
      'class' => ''
    ), $atts);

    // If name is missing, don't return anything
    if (empty($atts['name'])) {
      return;
    }

    // Swap out feather icon class for custom icon class
    $atts['class'] = ($atts['name'] === 'icon-wnyc-accessible') ?
      'icon ' . $atts['class'] : 'icon-wnyc-ui ' . $atts['class'];

    return '<svg aria-hidden="true" class="'. $atts['class'] . '">' .
      '<use href="#' . $atts['name'] . '"></use>' .
    '</svg>';
  }
}
