<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<div class="free_version_banner" <?php if (isset($_COOKIE['portfolioGalleryBannerShow']) && $_COOKIE['portfolioGalleryBannerShow'] == "no") echo 'style="display:none"'; ?> >
    <a class="close_free_banner">+</a>

    <div class="pfhub_portfolio_view_plugins_block">
        <a target="_blank" href="https://wordpress.org/support/plugin/uber-grid/reviews/">Rate Us</a>
        <a target="_blank" href="https://portfoliohub.io/portfolio-gallery/demo-elastic-grid">Full Demo</a>
        <a target="_blank" href="https://wordpress.org/support/plugin/uber-grid">Contact Us</a>
    </div>

    <div class="description_text"><p>You are using the free version of Portfolio Gallery. To upgrade the plugin with more functions and advanced features click on “Enable Pro Version” button.</p></div>

    <a class="get_full_version" href="https://portfoliohub.io/portfolio-gallery/" target="_blank">Enable Pro Version</a>

    <div style="clear: both;"></div>
</div>
