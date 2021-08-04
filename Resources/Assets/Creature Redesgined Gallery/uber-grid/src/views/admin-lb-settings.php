<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<?php
$path_site2             = plugins_url( "../images", __FILE__ );
$lightbox_options_nonce = wp_create_nonce( 'pfhub_portfolio_nonce_save_lightbox_options' );
$pfhub_portfolio_get_option=\PfhubPortfolio\Helpers\GridHelper::getSettings();
?>
<div id="post-body-heading">
    <h3 class="gen-option-title"><?php echo __( 'Lightbox Options', 'portfolio-gallery' ); ?></h3>
</div>
<form
        action="admin.php?page=Options_portfolio_lightbox_styles&task=save&pfhub_portfolio_nonce_save_lightbox_options=<?php echo $lightbox_options_nonce; ?>"
        method="post" id="adminForm" name="adminForm">
    <ul id="lightbox_type">
        <li>
            <label for="modern" <?php if ( get_option('pfhub_portfolio_lightbox_type') == 'modern' ) {	echo 'class="active"';	} ?>>Modern
                <input type="checkbox" name="params[pfhub_portfolio_lightbox_type]" id="modern" <?php if ( get_option('pfhub_portfolio_lightbox_type') == 'modern' ) {	echo 'checked="checked"';	} ?> value="modern">
            </label>
        </li>
        <li>
            <label for="classic" <?php if ( get_option('pfhub_portfolio_lightbox_type') == 'classic' ) {	echo 'class="active"';	} ?>>Classic
                <input type="checkbox" name="params[pfhub_portfolio_lightbox_type]" id="classic" <?php if ( get_option('pfhub_portfolio_lightbox_type') == 'classic' ) {echo 'checked="checked"';} ?>  value="classic">
            </label>
        </li>
        <a onclick="document.getElementById('adminForm').submit()" style="margin-left: 20px;"
           class="pfhub_portfolio_button  save-portfolio-options"><?php echo __( 'Save', 'pfhub_portfolio' ); ?></a>
    </ul>
    <div id="new-lightbox-options-list"
         class="unique-type-options-wrapper <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_type'] == 'modern' ) {
             echo "active";
         } ?>">
        <div class="lightbox-options-block">
            <h3>General Options</h3>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_lightboxView">Lightbox style
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Choose the style of your popup</p>
                        </div>
                    </div>
                </label>
                <select id="pfhub_portfolio_lightbox_lightboxView"
                        name="params[pfhub_portfolio_lightbox_lightboxView]">
                    <option <?php selected( 'view1', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_lightboxView'] ); ?>
                            value="view1">1
                    </option>
                    <option <?php selected( 'view2', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_lightboxView'] ); ?>
                            value="view2">2
                    </option>
                    <option <?php selected( 'view3', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_lightboxView'] ); ?>
                            value="view3">3
                    </option>
                    <option <?php selected( 'view4', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_lightboxView'] ); ?>
                            value="view4">4
                    </option>
                    <option <?php selected( 'view5', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_lightboxView'] ); ?>
                            value="view5">5
                    </option>
                    <option <?php selected( 'view6', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_lightboxView'] ); ?>
                            value="view6">6
                    </option>
                </select>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_speed_new">Lightbox open speed
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set lightbox opening speed</p>
                        </div>
                    </div>
                </label>
                <input type="number" name="params[pfhub_portfolio_lightbox_speed_new]"
                       id="pfhub_portfolio_lightbox_speed_new"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_speed_new']; ?>"
                       class="text">
                <span>ms</span>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_overlayClose_new">Overlay close
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to enable closing lightbox by clicking outside the picture.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_overlayClose_new]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_overlayClose_new" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_overlayClose_new'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_overlayClose_new]" value="true"/>
            </div>
            <div>
                <label for="light_box_style">Loop content
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to enable repeating images after one cycle.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_loop_new]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_loop_new" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_loop_new'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_loop_new]" value="true"/>
            </div>
            <div class="has-background">
                <label for="light_box_style">EscKey close
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to enable close by Esc key.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_escKey_new]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_escKey_new" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_escKey_new'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_escKey_new]" value="true"/>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_keyPress_new">Keyboard navigation
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to enable navigation by keyboard.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_keyPress_new]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_keyPress_new" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_keyPress_new'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_keyPress_new]" value="true"/>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_arrows">Show Arrows
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to display arrow symbols.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_arrows]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_arrows" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_arrows'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_arrows]" value="true"/>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_mouseWheel">Mouse Wheel Navigation
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to enable navigation by mouse scrolling.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_mouseWheel]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_mouseWheel" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_mouseWheel'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_mouseWheel]" value="true"/>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_download">Show Download Button
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to display download button for the images.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_download]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_download" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_download'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_download]" value="true"/>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_showCounter">Show Counter
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to display the image sequence numbers.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_showCounter]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_showCounter" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_showCounter'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_showCounter]" value="true"/>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_sequence_info">Sequence Info text
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Write the texts of the sequence (e.g. Image 5 of 10).</p>
                        </div>
                    </div>
                </label>
                <input type="text" name="params[pfhub_portfolio_lightbox_sequence_info]"
                       id="pfhub_portfolio_lightbox_sequence_info" style="width: 13%"
                       value="<?php echo esc_attr( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_sequence_info'] ); ?>"
                       class="text">
                X <input type="text" name="params[pfhub_portfolio_lightbox_sequenceInfo]"
                         id="pfhub_portfolio_lightbox_sequenceInfo" style="width: 13%"
                         value="<?php echo esc_attr( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_sequenceInfo'] ); ?>"
                         class="text">
                XX
            </div>
            <div class="">
                <label for="pfhub_portfolio_lightbox_slideAnimationType">Transition type
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Choose the changing effect of the images.</p>
                        </div>
                    </div>
                </label>
                <select id="pfhub_portfolio_lightbox_slideAnimationType"
                        name="params[pfhub_portfolio_lightbox_slideAnimationType]">
                    <option <?php selected( 'effect_1', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_1">Effect 1
                    </option>
                    <option <?php selected( 'effect_2', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_2">Effect 2
                    </option>
                    <option <?php selected( 'effect_3', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_3">Effect 3
                    </option>
                    <option <?php selected( 'effect_4', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_4">Effect 4
                    </option>
                    <option <?php selected( 'effect_5', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_5">Effect 5
                    </option>
                    <option <?php selected( 'effect_6', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_6">Effect 6
                    </option>
                    <option <?php selected( 'effect_7', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_7">Effect 7
                    </option>
                    <option <?php selected( 'effect_8', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_8">Effect 8
                    </option>
                    <option <?php selected( 'effect_9', $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideAnimationType'] ); ?>
                            value="effect_9">Effect 9
                    </option>
                </select>
            </div>
        </div>
        <div class="lightbox-options-block">
            <h3>Dimensions</h3>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_width_new">Lightbox Width
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the width of the popup in percentages.</p>
                        </div>
                    </div>
                </label>
                <input type="number" name="params[pfhub_portfolio_lightbox_width_new]"
                       id="pfhub_portfolio_lightbox_width_new"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_width_new']; ?>"
                       class="text">
                <span>%</span>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_height_new">Lightbox Height
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the height of the popup in percentages.</p>
                        </div>
                    </div>
                </label>
                <input type="number" name="params[pfhub_portfolio_lightbox_height_new]"
                       id="pfhub_portfolio_lightbox_height_new"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_height_new']; ?>"
                       class="text">
                <span>%</span>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_videoMaxWidth">Lightbox Video maximum width
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the maximum width of the popup in pixels, the height will be fixed automatically.</p>
                        </div>
                    </div>
                </label>
                <input type="number" name="params[pfhub_portfolio_lightbox_videoMaxWidth]"
                       id="pfhub_portfolio_lightbox_videoMaxWidth"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_videoMaxWidth']; ?>"
                       class="text">
                <span>px</span>
            </div>
        </div>
        <div class="lightbox-options-block">
            <h3>Slideshow</h3>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_slideshow_new">Slideshow
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to enable slideshow button for images.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_slideshow_new]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_slideshow_new" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideshow_new'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_slideshow_new]" value="true"/>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_slideshow_auto_new">Slideshow autostart
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to start slideshow automatically.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_slideshow_auto_new]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_slideshow_auto_new" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideshow_auto_new'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_slideshow_auto_new]" value="true"/>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_slideshow_speed_new">Slideshow interval
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the time between the sliding in milliseconds.</p>
                        </div>
                    </div>
                </label>
                <input type="number" name="params[pfhub_portfolio_lightbox_slideshow_speed_new]"
                       id="pfhub_portfolio_lightbox_slideshow_speed_new"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_slideshow_speed_new']; ?>"
                       class="text">
                <span>ms</span>
            </div>
        </div>
        <div class="lightbox-options-block">
            <h3>Lightbox Watermark styles</h3>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_watermark">Watermark
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to set an image or text overlay on all images in popup.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_watermark]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_watermark" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_watermark]" value="true"/>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_watermark_text">Watermark Text
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Write the text of the watermark.</p>
                        </div>
                    </div>
                </label>
                <input type="text" name="params[pfhub_portfolio_lightbox_watermark_text]"
                       id="pfhub_portfolio_lightbox_watermark_text"
                       value="<?php echo esc_attr( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_text'] ); ?>"
                       class="text">
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_watermark_textColor">Watermark Text Color
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the color of the text.</p>
                        </div>
                    </div>
                </label>
                <input name="params[pfhub_portfolio_lightbox_watermark_textColor]"
                       type="text" class="color" id="pfhub_portfolio_lightbox_watermark_textColor"
                       value="#<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_textColor']; ?>"
                       size="10"/>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_watermark_textFontSize">Watermark Text Font Size
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the size of the text.</p>
                        </div>
                    </div>
                </label>
                <input type="number" name="params[pfhub_portfolio_lightbox_watermark_textFontSize]"
                       id="pfhub_portfolio_lightbox_watermark_textFontSize"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_textFontSize']; ?>"
                       class="text">
                <span>px</span>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_watermark_containerBackground">Watermark Background Color
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the background color of the text.</p>
                        </div>
                    </div>
                </label>
                <input name="params[pfhub_portfolio_lightbox_watermark_containerBackground]"
                       type="text" class="color" id="pfhub_portfolio_lightbox_watermark_containerBackground"
                       value="#<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_containerBackground']; ?>"
                       size="10"/>
            </div>
            <div>
                <label for="pfhub_portfolio_lightbox_watermark_containerOpacity">Watermark Opacity
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the opacity of the watermark</p>
                        </div>
                    </div>
                </label>
                <div class="slider-container">
                    <input name="params[pfhub_portfolio_lightbox_watermark_containerOpacity]"
                           id="pfhub_portfolio_lightbox_watermark_containerOpacity" data-slider-highlight="true"
                           data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true"
                           value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_containerOpacity']; ?>"/>
                    <span><?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_containerOpacity']; ?>
						%</span>
                </div>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_watermark_containerWidth">Watermark Width
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set the size of the watermark in pixels.</p>
                        </div>
                    </div>
                </label>
                <input type="number" name="params[pfhub_portfolio_lightbox_watermark_containerWidth]"
                       id="pfhub_portfolio_lightbox_watermark_containerWidth"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_containerWidth']; ?>"
                       class="text">
                <span>px</span>
            </div>
            <div class="has-height">
                <label for="pfhub_portfolio_lightbox_watermark_containerWidth">Watermark Position
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Choose the position to display the watermark.</p>
                        </div>
                    </div>
                </label>
                <div>
                    <table class="bws_position_table">
                        <tbody>
                        <tr>
                            <td><input type="radio" value="1" id="watermark_top-left"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '1' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="2" id="watermark_top-center"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '2' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="3" id="watermark_top-right"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '3' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                        </tr>
                        <tr>
                            <td><input type="radio" value="4" id="watermark_middle-left"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '4' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="5" id="watermark_middle-center"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '5' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="6" id="watermark_middle-right"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '6' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                        </tr>
                        <tr>
                            <td><input type="radio" value="7" id="watermark_bottom-left"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '7' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="8" id="watermark_bottom-center"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '8' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="9" id="watermark_bottom-right"
                                       name="params[pfhub_portfolio_lightbox_watermark_position_new]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_position_new'] == '9' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_watermark_margin">Watermark Margin
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Watermark distance from image sides.</p>
                        </div>
                    </div>
                </label>
                <input type="number" name="params[pfhub_portfolio_lightbox_watermark_margin]"
                       id="pfhub_portfolio_lightbox_watermark_margin"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_margin']; ?>"
                       class="text">
                <span>px</span>
            </div>
            <div class="has-background" style="display: none">
                <label for="pfhub_portfolio_lightbox_watermark_opacity">Watermark Text Opacity
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Choose the style of your popup</p>
                        </div>
                    </div>
                </label>
                <div class="slider-container">
                    <input name="params[pfhub_portfolio_lightbox_watermark_opacity]"
                           id="pfhub_portfolio_lightbox_watermark_opacity" data-slider-highlight="true"
                           data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true"
                           value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_opacity']; ?>"/>
                    <span><?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_opacity']; ?>
						%</span>
                </div>
            </div>
            <div style="height:auto;">
                <label for="watermark_image_btn">Select Watermark Image
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Set image for the watermark; leave the ‘Watermark text’ box empty to display the
                                image</p>
                        </div>
                    </div>
                </label>
                <img
                        src="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_img_src_new']; ?>"
                        id="watermark_image_new" style="width:120px;height:auto;">
                <input type="button" class="button wp-media-buttons-icon"
                       style="margin-left: 63%;width: auto;display: inline-block;" id="watermark_image_btn_new"
                       value="Change Image">
                <input type="hidden" id="img_watermark_hidden_new"
                       name="params[pfhub_portfolio_lightbox_watermark_img_src_new]"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_watermark_img_src_new']; ?>">
            </div>
        </div>
        <div class="lightbox-options-block" style="margin-top: -385px;">
            <h3>Social Share Buttons</h3>
            <div class="has-background">
                <label for="pfhub_portfolio_lightbox_socialSharing">Social Share Buttons
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to activate social sharing buttons.</p>
                        </div>
                    </div>
                </label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_lightbox_socialSharing]"/>
                <input type="checkbox"
                       id="pfhub_portfolio_lightbox_socialSharing" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_socialSharing'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_lightbox_socialSharing]" value="true"/>
            </div>
            <div class="social-buttons-list">
                <label>Social Share Buttons List
                    <div class="help">?
                        <div class="help-block">
                            <span class="pnt"></span>
                            <p>Check to activate your preferable ones.</p>
                        </div>
                    </div>
                </label>
                <div>
                    <table>
                        <tr>
                            <td>
                                <label for="pfhub_portfolio_lightbox_facebookButton">Facebook
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_facebookButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_facebookButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_facebookButton]"
                                           value="true"/></label>
                            </td>
                            <td>
                                <label for="pfhub_portfolio_lightbox_twitterButton">Twitter
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_twitterButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_twitterButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_twitterButton]"
                                           value="true"/></label>
                            </td>
                            <td>
                                <label for="pfhub_portfolio_lightbox_googleplusButton">Google Plus
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_googleplusButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_googleplusButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_googleplusButton]" value="true"/></label>
                            </td>
                            <td>
                                <label for="pfhub_portfolio_lightbox_pinterestButton">Pinterest
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_pinterestButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_pinterestButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_pinterestButton]" value="true"/></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pfhub_portfolio_lightbox_linkedinButton">Linkedin
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_linkedinButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_linkedinButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_linkedinButton]"
                                           value="true"/></label>
                            </td>
                            <td>
                                <label for="pfhub_portfolio_lightbox_tumblrButton">Tumblr
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_tumblrButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_tumblrButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_tumblrButton]"
                                           value="true"/></label>
                            </td>
                            <td>
                                <label for="pfhub_portfolio_lightbox_redditButton">Reddit
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_redditButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_redditButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_redditButton]"
                                           value="true"/></label>
                            </td>
                            <td>
                                <label for="pfhub_portfolio_lightbox_bufferButton">Buffer
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_bufferButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_bufferButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_bufferButton]"
                                           value="true"/></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pfhub_portfolio_lightbox_vkButton">Vkontakte
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_vkButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_vkButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_vkButton]" value="true"/></label>
                            </td>
                            <td>
                                <label for="pfhub_portfolio_lightbox_yummlyButton">Yumly
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_yummlyButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_yummlyButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_yummlyButton]"
                                           value="true"/></label>
                            </td>
                            <td>
                                <label for="pfhub_portfolio_lightbox_diggButton">Digg
                                    <input type="checkbox"
                                           id="pfhub_portfolio_lightbox_diggButton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_diggButton'] == 'true' ) {
                                        echo 'checked="checked"';
                                    } ?> name="share_params[pfhub_portfolio_lightbox_diggButton]"
                                           value="true"/></label>
                            </td>
                            <td>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="lightbox-options-list"
         class="unique-type-options-wrapper <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_lightbox_type'] == 'classic' ) {
             echo "active";
         } ?>">
        <div class="lightbox-options-block">
            <h3><?php echo __( 'Internationalization', 'portfolio-gallery' ); ?></h3>
            <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
            ?>
            <div class="has-background">
                <label for="light_box_style"><?php echo __( 'Lightbox style', 'portfolio-gallery' ); ?></label>
                <select id="light_box_style" name="params[pfhub_portfolio_light_box_style]">
                    <option <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_style'] == '1' ) {
                        echo 'selected="selected"';
                    } ?> value="1">1
                    </option>
                    <option <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_style'] == '2' ) {
                        echo 'selected="selected"';
                    } ?> value="2">2
                    </option>
                    <option <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_style'] == '3' ) {
                        echo 'selected="selected"';
                    } ?> value="3">3
                    </option>
                    <option <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_style'] == '4' ) {
                        echo 'selected="selected"';
                    } ?> value="4">4
                    </option>
                    <option <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_style'] == '5' ) {
                        echo 'selected="selected"';
                    } ?> value="5">5
                    </option>
                </select>
            </div>
            <?php ?>
            <div>
                <label for="light_box_transition"><?php echo __( 'Transition type', 'portfolio-gallery' ); ?></label>
                <select id="light_box_transition" name="params[pfhub_portfolio_light_box_transition]">
                    <option <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_transition'] == 'elastic' ) {
                        echo 'selected="selected"';
                    } ?> value="elastic"><?php echo __( 'Elastic', 'portfolio-gallery' ); ?></option>
                    <option <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_transition'] == 'fade' ) {
                        echo 'selected="selected"';
                    } ?> value="fade"><?php echo __( 'Fade', 'portfolio-gallery' ); ?></option>
                    <option <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_transition'] == 'none' ) {
                        echo 'selected="selected"';
                    } ?> value="none"><?php echo __( 'None', 'portfolio-gallery' ); ?></option>
                </select>
            </div>
            <div class="has-background">
                <label for="light_box_speed"><?php echo __( 'Opening speed', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_speed]" id="light_box_speed"
                       value="<?php echo $pfhub_portfolio_get_option["pfhub_portfolio_light_box_speed"]; ?>"
                       class="text">
                <span>ms</span>
            </div>
            <div>
                <label for="light_box_fadeout"><?php echo __( 'Closing speed', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_fadeout]" id="light_box_fadeout"
                       value="<?php echo $pfhub_portfolio_get_option["pfhub_portfolio_light_box_fadeout"]; ?>"
                       class="text">
                <span>ms</span>
            </div>
            <div class="has-background">
                <label for="light_box_title"><?php echo __( 'Show the title', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_title]"/>
                <input type="checkbox"
                       id="light_box_title" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_title'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_title]" value="true"/>
            </div>
            <div>
                <label for="light_box_opacity"><?php echo __( 'Overlay transparency', 'portfolio-gallery' ); ?></label>
                <div class="slider-container">
                    <input name="params[pfhub_portfolio_light_box_opacity]" id="light_box_opacity"
                           data-slider-highlight="true" data-slider-values="0,10,20,30,40,50,60,70,80,90,100"
                           type="text"
                           data-slider="true"
                           value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_opacity']; ?>"/>
                    <span><?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_opacity']; ?>%</span>
                </div>
            </div>
            <div class="has-background">
                <label for="light_box_open"><?php echo __( 'Auto open', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_open]"/>
                <input type="checkbox"
                       id="light_box_open" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_open'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_open]" value="true"/>
            </div>
            <div>
                <label
                        for="light_box_overlayclose"><?php echo __( 'Overlay close', 'portfolio-gallery' ); ?><?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_overlayclose'] ) {
                        echo "true";
                    } ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_overlayclose]"/>
                <input type="checkbox"
                       id="light_box_overlayclose" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_overlayclose'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_overlayclose]" value="true"/>
            </div>
            <div class="has-background">
                <label for="light_box_esckey"><?php echo __( 'EscKey close', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_esckey]"/>
                <input type="checkbox"
                       id="light_box_esckey" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_esckey'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_esckey]" value="true"/>
            </div>
            <div>
                <label for="light_box_arrowkey"><?php echo __( 'Keyboard navigation', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_arrowkey]"/>
                <input type="checkbox"
                       id="light_box_arrowkey" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_arrowkey'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_arrowkey]" value="true"/>
            </div>
            <div class="has-background">
                <label for="light_box_loop"><?php echo __( 'Loop content', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_loop]"/>
                <input type="checkbox"
                       id="light_box_loop" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_loop'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_loop]" value="true"/>
            </div>
            <div>
                <label for="light_box_closebutton"><?php echo __( 'Show close button', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_closebutton]"/>
                <input type="checkbox"
                       id="light_box_closebutton" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_closebutton'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_closebutton]" value="true"/>
            </div>
        </div>
        <div class="lightbox-options-block">
            <h3><?php echo __( 'Dimensions', 'portfolio-gallery' ); ?></h3>

            <div class="has-background">
                <label for="light_box_size_fix"><?php echo __( 'Popup size fix', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_size_fix]"/>
                <input type="checkbox"
                       id="light_box_size_fix" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_size_fix'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_size_fix]" value="true"/>
            </div>

            <div class="fixed-size">
                <label for="light_box_width"><?php echo __( 'Popup width', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_width]" id="light_box_width"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_width']; ?>"
                       class="text">
                <span>px</span>
            </div>

            <div class="has-background fixed-size">
                <label for="light_box_height"><?php echo __( 'Popup height', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_height]" id="light_box_height"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_height']; ?>"
                       class="text">
                <span>px</span>
            </div>

            <div class="not-fixed-size">
                <label for="light_box_maxwidth"><?php echo __( 'Popup maxWidth', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_maxwidth]" id="light_box_maxwidth"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_maxwidth']; ?>"
                       class="text">
                <span>px</span>
            </div>
            <div class="has-background not-fixed-size">
                <label for="light_box_maxheight"><?php echo __( 'Popup maxHeight', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_maxheight]" id="light_box_maxheight"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_maxheight']; ?>"
                       class="text">
                <span>px</span>
            </div>
            <div>
                <label
                        for="light_box_initialwidth"><?php echo __( 'Popup initial width', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_initialwidth]" id="light_box_initialwidth"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_initialwidth']; ?>"
                       class="text">
                <span>px</span>
            </div>
            <div class="has-background">
                <label
                        for="light_box_initialheight"><?php echo __( 'Popup initial height', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_initialheight]"
                       id="light_box_initialheight"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_initialheight']; ?>"
                       class="text">
                <span>px</span>
            </div>
        </div>
        <div class="lightbox-options-block">
            <h3>Slideshow</h3>

            <div class="has-background">
                <label for="light_box_slideshow"><?php echo __( 'Slideshow', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_slideshow]"/>
                <input type="checkbox"
                       id="light_box_slideshow" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_slideshow'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_slideshow]" value="true"/>
            </div>
            <div>
                <label
                        for="light_box_slideshowspeed"><?php echo __( 'Slideshow interval', 'portfolio-gallery' ); ?></label>
                <input type="number" name="params[pfhub_portfolio_light_box_slideshowspeed]"
                       id="light_box_slideshowspeed"
                       value="<?php echo $pfhub_portfolio_get_option['pfhub_portfolio_light_box_slideshowspeed']; ?>"
                       class="text">
                <span>ms</span>
            </div>
            <div class="has-background">
                <label
                        for="light_box_slideshowauto"><?php echo __( 'Slideshow auto start', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_slideshowauto]"/>
                <input type="checkbox"
                       id="light_box_slideshowauto" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_slideshowauto'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_slideshowauto]" value="true"/>
            </div>
            <div>
                <label
                        for="light_box_slideshowstart"><?php echo __( 'Slideshow start button text', 'portfolio-gallery' ); ?></label>
                <input type="text" name="params[pfhub_portfolio_light_box_slideshowstart]"
                       id="light_box_slideshowstart"
                       value="<?php echo esc_attr( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_slideshowstart'] ); ?>"
                       class="text">
            </div>
            <div class="has-background">
                <label
                        for="light_box_slideshowstop"><?php echo __( 'Slideshow stop button text', 'portfolio-gallery' ); ?></label>
                <input type="text" name="params[pfhub_portfolio_light_box_slideshowstop]" id="light_box_slideshowstop"
                       value="<?php echo esc_attr( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_slideshowstop'] ); ?>"
                       class="text">
            </div>
        </div>
        <div class="lightbox-options-block">
            <h3>Positioning</h3>

            <div class="has-background">
                <label for="light_box_fixed"><?php echo __( 'Fixed position', 'portfolio-gallery' ); ?></label>
                <input type="hidden" value="false" name="params[pfhub_portfolio_light_box_fixed]"/>
                <input type="checkbox"
                       id="light_box_fixed" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_light_box_fixed'] == 'true' ) {
                    echo 'checked="checked"';
                } ?> name="params[pfhub_portfolio_light_box_fixed]" value="true"/>
            </div>
            <div class="has-height">
                <label for=""><?php echo __( 'Popup position', 'portfolio-gallery' ); ?></label>
                <div>
                    <table class="bws_position_table">
                        <tbody>
                        <tr>
                            <td><input type="radio" value="1" id="slideshow_title_top-left"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '1' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="2" id="slideshow_title_top-center"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '2' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="3" id="slideshow_title_top-right"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '3' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                        </tr>
                        <tr>
                            <td><input type="radio" value="4" id="slideshow_title_middle-left"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '4' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="5" id="slideshow_title_middle-center"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '5' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="6" id="slideshow_title_middle-right"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '6' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                        </tr>
                        <tr>
                            <td><input type="radio" value="7" id="slideshow_title_bottom-left"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '7' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="8" id="slideshow_title_bottom-center"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '8' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                            <td><input type="radio" value="9" id="slideshow_title_bottom-right"
                                       name="params[pfhub_portfolio_slider_title_position]" <?php if ( $pfhub_portfolio_get_option['pfhub_portfolio_slider_title_position'] == '9' ) {
                                    echo 'checked="checked"';
                                } ?> /></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>

<input type="hidden" name="option" value=""/>
<input type="hidden" name="task" value=""/>
<input type="hidden" name="controller" value="options"/>
<input type="hidden" name="op_type" value="styles"/>
<input type="hidden" name="boxchecked" value="0"/>
