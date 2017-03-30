<?php

/**
 * @file
 * Omega's implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div class="site-name__container">
  <div class="site-name__icon">
    <svg version="1.1"
       id="svg2" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" sodipodi:docname="CompassRose.svg" inkscape:version="0.91 r13725"
       xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="401.293px"
       height="401.293px" viewBox="0 0 401.293 401.293" enable-background="new 0 0 401.293 401.293" xml:space="preserve">
    <defs>

      <inkscape:path-effect  is_visible="true" id="path-effect4491" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-8" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-8" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-2" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-8-2" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-8-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-6" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-8-0" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-8-6" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-9-0" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-2-8" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-8-2-1" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-8-7-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-8" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-2" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-2" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-7-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-7-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-9-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-8-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-98" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-0" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-97" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-7-1" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-7-43" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-9-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-8-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-98-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-0-1" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-97-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-4-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-7-1-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-7-43-6" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-9-9-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-8-3-7" effect="spiro"></inkscape:path-effect>
    </defs>
    <sodipodi:namedview  units="px" inkscape:cy="197.63978" inkscape:cx="200.6298" inkscape:zoom="1" borderopacity="1.0" bordercolor="#666666" pagecolor="#ffffff" id="base" fit-margin-left="0" fit-margin-top="0" showgrid="true" inkscape:window-maximized="1" inkscape:window-y="-8" inkscape:window-x="-8" inkscape:window-height="837" inkscape:window-width="1600" fit-margin-bottom="0" fit-margin-right="0" inkscape:current-layer="layer1" inkscape:document-units="px" inkscape:pageshadow="2" inkscape:pageopacity="0.0">
      </sodipodi:namedview>
    <g id="layer1" transform="translate(100.66583,-852.27527)" inkscape:label="Layer 1" inkscape:groupmode="layer">
      <g id="g4850">
        <g id="g4615-4" transform="matrix(0.41543529,-0.17207893,0.17207893,0.41543529,-122.74025,632.70587)">
          <path id="path4489-0" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M99.999,852.363l-30,170l30,30L99.999,852.363
            L99.999,852.363z"/>
          <path id="path4489-4-1" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M99.962,852.363l30.002,170l-30.001,30
            L99.962,852.363L99.962,852.363z"/>
          <path id="path4489-9-8" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M99.961,1253.483l30.001-169.999
            l-29.999-30.001L99.961,1253.483z"/>
          <path id="path4489-4-0-5" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M99.999,1253.482l-29.999-169.998
            L100,1053.483L99.999,1253.482z"/>
          <path id="path4489-8-3" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M300.541,1052.942l-170-29.999l-30.001,30
            L300.541,1052.942z"/>
          <path id="path4489-4-00-8" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M300.541,1052.904l-169.999,30.002
            l-30.001-30.002L300.541,1052.904z"/>
          <path id="path4489-9-3-3" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M-100.579,1052.903l169.999,30l30-30
            L-100.579,1052.903z"/>
          <path id="path4489-4-0-2-2" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M-100.579,1052.941l170-30l30,30
            L-100.579,1052.941z"/>
        </g>
        <g id="g4615-4-3" transform="matrix(0.17207893,-0.41543529,0.41543529,0.17207893,-354.64453,913.27227)">
          <path id="path4489-0-8" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M100,852.363l-30.002,170l30.001,30
            L100,852.363L100,852.363z"/>
          <path id="path4489-4-1-9" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M99.963,852.363l30,170l-30,30
            L99.963,852.363L99.963,852.363z"/>
          <path id="path4489-9-8-2" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M99.964,1253.482l29.999-169.998l-30-30.001
            L99.964,1253.482z"/>
          <path id="path4489-4-0-5-2" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M100.001,1253.483l-30-169.999l30-30.001
            L100.001,1253.483z"/>
          <path id="path4489-8-3-1" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M300.541,1052.941l-169.999-29.999
            l-30,29.999L300.541,1052.941z"/>
          <path id="path4489-4-00-8-9" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M300.541,1052.903l-169.999,30l-30-30
            L300.541,1052.903z"/>
          <path id="path4489-9-3-3-3" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M-100.579,1052.904l169.999,30.002
            l30-30.002L-100.579,1052.904z"/>
          <path id="path4489-4-0-2-2-5" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M-100.579,1052.942l170-30l30.001,30
            L-100.579,1052.942z"/>
        </g>
        <path id="path4688-3" inkscape:connector-curvature="0" fill="#2F2B27" stroke="#2F2B27" d="M100,889.513
          c-89.939,0-162.85,72.91-162.85,162.85c0,89.939,72.91,162.849,162.85,162.849c89.939,0,162.85-72.91,162.85-162.849
          C262.85,962.423,189.939,889.513,100,889.513z M100,917.862c74.282,0,134.5,60.218,134.5,134.5c0,74.283-60.219,134.5-134.5,134.5
          l0,0c-74.283,0-134.5-60.217-134.5-134.5C-34.5,978.08,25.717,917.862,100,917.862z"/>
        <g id="g4698">
          <path id="path4489-6" fill="#2F2B27" stroke="#2F2B27" d="M185.055,967.864l-84.829,59.38v25.449L185.055,967.864
            L185.055,967.864z"/>
          <path id="path4489-4-9" fill="#897C71" stroke="#2F2B27" d="M185.04,967.849l-59.381,84.828h-25.448L185.04,967.849
            L185.04,967.849z"/>
          <path id="path4489-9-2" fill="#2F2B27" stroke="#2F2B27" d="M14.907,1137.981l84.828-59.381v-25.448L14.907,1137.981z"/>
          <path id="path4489-4-0-26" fill="#897C71" stroke="#2F2B27" d="M14.923,1137.997l59.379-84.829h25.449L14.923,1137.997z"/>
          <path id="path4489-8-0" fill="#2F2B27" stroke="#2F2B27" d="M185.04,1137.997l-59.381-84.829h-25.448L185.04,1137.997z"/>
          <path id="path4489-4-00-4" fill="#897C71" stroke="#2F2B27" d="M185.055,1137.981l-84.829-59.381v-25.448L185.055,1137.981z"/>
          <path id="path4489-9-3-0" fill="#2F2B27" stroke="#2F2B27" d="M14.923,967.849l59.38,84.828h25.449L14.923,967.849
            L14.923,967.849z"/>
          <path id="path4489-4-0-2-6" fill="#897C71" stroke="#2F2B27" d="M14.907,967.864l84.828,59.38v25.449L14.907,967.864
            L14.907,967.864z"/>
        </g>
        <g id="g4615">
          <path id="path4489" fill="#2F2B27" stroke="#2F2B27" d="M100,852.362l-30,170l30,30V852.362L100,852.362z"/>
          <path id="path4489-4" fill="#897C71" stroke="#2F2B27" d="M99.963,852.362l30,170l-30,30V852.362L99.963,852.362z"/>
          <path id="path4489-9" fill="#2F2B27" stroke="#2F2B27" d="M99.963,1253.483l30-170l-30-30V1253.483z"/>
          <path id="path4489-4-0" fill="#897C71" stroke="#2F2B27" d="M100,1253.483l-30-170l30-30V1253.483z"/>
          <path id="path4489-8" fill="#2F2B27" stroke="#2F2B27" d="M300.542,1052.941l-170-30l-30,30H300.542z"/>
          <path id="path4489-4-00" fill="#897C71" stroke="#2F2B27" d="M300.542,1052.903l-170,30l-30-30H300.542z"/>
          <path id="path4489-9-3" fill="#2F2B27" stroke="#2F2B27" d="M-100.579,1052.903l170,30l30-30H-100.579z"/>
          <path id="path4489-4-0-2" fill="#897C71" stroke="#2F2B27" d="M-100.579,1052.941l170-30l30,30H-100.579z"/>
        </g>
      </g>
    </g>
    </svg>
  </div>

      <?php print $content; ?>

  <div class="site-name__icon">
    <svg version="1.1"
       id="svg2" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" sodipodi:docname="CompassRose.svg" inkscape:version="0.91 r13725"
       xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="401.293px"
       height="401.293px" viewBox="0 0 401.293 401.293" enable-background="new 0 0 401.293 401.293" xml:space="preserve">
    <defs>

      <inkscape:path-effect  is_visible="true" id="path-effect4491" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-8" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-8" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-2" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-8-2" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-8-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-6" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-8-0" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-8-6" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-9-0" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-2-8" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-8-2-1" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4140-4-8-7-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-8" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-2" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-2" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-7-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-7-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-9-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-8-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-98" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-0" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-97" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-7-1" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-7-43" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-9-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-8-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-98-3" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-0-1" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-97-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-4-9" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-7-1-4" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-7-43-6" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-3-9-9-7" effect="spiro"></inkscape:path-effect>
      <inkscape:path-effect  is_visible="true" id="path-effect4491-6-5-8-3-7" effect="spiro"></inkscape:path-effect>
    </defs>
    <sodipodi:namedview  units="px" inkscape:cy="197.63978" inkscape:cx="200.6298" inkscape:zoom="1" borderopacity="1.0" bordercolor="#666666" pagecolor="#ffffff" id="base" fit-margin-left="0" fit-margin-top="0" showgrid="true" inkscape:window-maximized="1" inkscape:window-y="-8" inkscape:window-x="-8" inkscape:window-height="837" inkscape:window-width="1600" fit-margin-bottom="0" fit-margin-right="0" inkscape:current-layer="layer1" inkscape:document-units="px" inkscape:pageshadow="2" inkscape:pageopacity="0.0">
      </sodipodi:namedview>
    <g id="layer1" transform="translate(100.66583,-852.27527)" inkscape:label="Layer 1" inkscape:groupmode="layer">
      <g id="g4850">
        <g id="g4615-4" transform="matrix(0.41543529,-0.17207893,0.17207893,0.41543529,-122.74025,632.70587)">
          <path id="path4489-0" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M99.999,852.363l-30,170l30,30L99.999,852.363
            L99.999,852.363z"/>
          <path id="path4489-4-1" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M99.962,852.363l30.002,170l-30.001,30
            L99.962,852.363L99.962,852.363z"/>
          <path id="path4489-9-8" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M99.961,1253.483l30.001-169.999
            l-29.999-30.001L99.961,1253.483z"/>
          <path id="path4489-4-0-5" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M99.999,1253.482l-29.999-169.998
            L100,1053.483L99.999,1253.482z"/>
          <path id="path4489-8-3" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M300.541,1052.942l-170-29.999l-30.001,30
            L300.541,1052.942z"/>
          <path id="path4489-4-00-8" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M300.541,1052.904l-169.999,30.002
            l-30.001-30.002L300.541,1052.904z"/>
          <path id="path4489-9-3-3" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M-100.579,1052.903l169.999,30l30-30
            L-100.579,1052.903z"/>
          <path id="path4489-4-0-2-2" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M-100.579,1052.941l170-30l30,30
            L-100.579,1052.941z"/>
        </g>
        <g id="g4615-4-3" transform="matrix(0.17207893,-0.41543529,0.41543529,0.17207893,-354.64453,913.27227)">
          <path id="path4489-0-8" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M100,852.363l-30.002,170l30.001,30
            L100,852.363L100,852.363z"/>
          <path id="path4489-4-1-9" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M99.963,852.363l30,170l-30,30
            L99.963,852.363L99.963,852.363z"/>
          <path id="path4489-9-8-2" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M99.964,1253.482l29.999-169.998l-30-30.001
            L99.964,1253.482z"/>
          <path id="path4489-4-0-5-2" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M100.001,1253.483l-30-169.999l30-30.001
            L100.001,1253.483z"/>
          <path id="path4489-8-3-1" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M300.541,1052.941l-169.999-29.999
            l-30,29.999L300.541,1052.941z"/>
          <path id="path4489-4-00-8-9" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M300.541,1052.903l-169.999,30l-30-30
            L300.541,1052.903z"/>
          <path id="path4489-9-3-3-3" fill="#2F2B27" stroke="#2F2B27" stroke-width="2.2239" d="M-100.579,1052.904l169.999,30.002
            l30-30.002L-100.579,1052.904z"/>
          <path id="path4489-4-0-2-2-5" fill="#897C71" stroke="#2F2B27" stroke-width="2.2239" d="M-100.579,1052.942l170-30l30.001,30
            L-100.579,1052.942z"/>
        </g>
        <path id="path4688-3" inkscape:connector-curvature="0" fill="#2F2B27" stroke="#2F2B27" d="M100,889.513
          c-89.939,0-162.85,72.91-162.85,162.85c0,89.939,72.91,162.849,162.85,162.849c89.939,0,162.85-72.91,162.85-162.849
          C262.85,962.423,189.939,889.513,100,889.513z M100,917.862c74.282,0,134.5,60.218,134.5,134.5c0,74.283-60.219,134.5-134.5,134.5
          l0,0c-74.283,0-134.5-60.217-134.5-134.5C-34.5,978.08,25.717,917.862,100,917.862z"/>
        <g id="g4698">
          <path id="path4489-6" fill="#2F2B27" stroke="#2F2B27" d="M185.055,967.864l-84.829,59.38v25.449L185.055,967.864
            L185.055,967.864z"/>
          <path id="path4489-4-9" fill="#897C71" stroke="#2F2B27" d="M185.04,967.849l-59.381,84.828h-25.448L185.04,967.849
            L185.04,967.849z"/>
          <path id="path4489-9-2" fill="#2F2B27" stroke="#2F2B27" d="M14.907,1137.981l84.828-59.381v-25.448L14.907,1137.981z"/>
          <path id="path4489-4-0-26" fill="#897C71" stroke="#2F2B27" d="M14.923,1137.997l59.379-84.829h25.449L14.923,1137.997z"/>
          <path id="path4489-8-0" fill="#2F2B27" stroke="#2F2B27" d="M185.04,1137.997l-59.381-84.829h-25.448L185.04,1137.997z"/>
          <path id="path4489-4-00-4" fill="#897C71" stroke="#2F2B27" d="M185.055,1137.981l-84.829-59.381v-25.448L185.055,1137.981z"/>
          <path id="path4489-9-3-0" fill="#2F2B27" stroke="#2F2B27" d="M14.923,967.849l59.38,84.828h25.449L14.923,967.849
            L14.923,967.849z"/>
          <path id="path4489-4-0-2-6" fill="#897C71" stroke="#2F2B27" d="M14.907,967.864l84.828,59.38v25.449L14.907,967.864
            L14.907,967.864z"/>
        </g>
        <g id="g4615">
          <path id="path4489" fill="#2F2B27" stroke="#2F2B27" d="M100,852.362l-30,170l30,30V852.362L100,852.362z"/>
          <path id="path4489-4" fill="#897C71" stroke="#2F2B27" d="M99.963,852.362l30,170l-30,30V852.362L99.963,852.362z"/>
          <path id="path4489-9" fill="#2F2B27" stroke="#2F2B27" d="M99.963,1253.483l30-170l-30-30V1253.483z"/>
          <path id="path4489-4-0" fill="#897C71" stroke="#2F2B27" d="M100,1253.483l-30-170l30-30V1253.483z"/>
          <path id="path4489-8" fill="#2F2B27" stroke="#2F2B27" d="M300.542,1052.941l-170-30l-30,30H300.542z"/>
          <path id="path4489-4-00" fill="#897C71" stroke="#2F2B27" d="M300.542,1052.903l-170,30l-30-30H300.542z"/>
          <path id="path4489-9-3" fill="#2F2B27" stroke="#2F2B27" d="M-100.579,1052.903l170,30l30-30H-100.579z"/>
          <path id="path4489-4-0-2" fill="#897C71" stroke="#2F2B27" d="M-100.579,1052.941l170-30l30,30H-100.579z"/>
        </g>
      </g>
    </g>
    </svg>
  </div>
</div>
