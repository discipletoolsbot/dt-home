<?php
/**
 * @var string $magic_link
 * @var string $data
 * @var string $app_url
 * @var string $subpage_url
 * @var WP_User $user
 */
$this->layout( 'layouts/plugin' );
?>

<div>
    <div>
        <dt-copy-text value="<?php echo esc_url( $magic_link ); ?>"></dt-copy-text>
    </div>
    <overlay-trigger placement="right">
        <sp-button slot="trigger" class="learn-more-text">
            <sp-icon-help></sp-icon-help> &nbsp;
            <?php esc_attr_e( 'learn more', 'dt_home' ); ?>
        </sp-button>

        <sp-tooltip slot="hover-content" open placement="right" class="spl-text">
            <!-- Dynamic content goes here -->
            <?php
            $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book";
            $escaped_text = esc_attr( $text ); // If you need to ensure the text is safe for HTML attributes
            $newtext = wordwrap( $escaped_text, 35, "<br />\n" );
            echo $newtext;
            ?>
        </sp-tooltip>
    </overlay-trigger>


    <dt-home-app-grid id="appGrid" app-data='<?php echo esc_attr( htmlspecialchars( $data ) ); ?>'
                      app-url='<?php echo esc_url( $app_url ); ?>'>
        <!-- Add more app icons as needed -->
    </dt-home-app-grid>
    <div>
        <?php echo $this->section( 'content' ) ?>
    </div>


    <dt-home-footer id="hiddenApps" hidden-data='<?php echo esc_attr( htmlspecialchars( $data ) ); ?>'
                    app-url-unhide='<?php echo esc_url( $app_url ); ?>'>
    </dt-home-footer>

</div>

