<?php
/**
 * Bare-bones template for previewing a sitewide block.
 * Outputs only the post content — no header, footer, or theme chrome.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

while ( have_posts() ) :
    the_post();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title><?php the_title(); ?> — Block Preview</title>
    <?php wp_head(); ?>
</head>
<body style="margin:0;padding:0;">
    <div class="sitewide-blocks sitewide-blocks--preview">
        <?php the_content(); ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
<?php
endwhile;
