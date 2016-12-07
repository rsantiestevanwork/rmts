<?php
/**
 * Widget Class
 *
 * This will generate the meta field for ShortCode generator post type
 *
 * @package WP_SERVICES_SHOWCASE
 * @since 1.0
 * @author RadiusTheme
 */

if(!class_exists('rtWPSWidget')):


    /**
    *
    */
    class rtWPSWidget extends WP_Widget
    {

        /**
         * TLP TEAM widget setup
         */
        function rtWPSWidget() {

            $widget_ops = array( 'classname' => 'widget_rt_wps', 'description' => __('Display Wp Services Showcase.', 'wp-services-showcase') );
            parent::__construct( 'widget_rt_wps', __('Wp Services Showcase', 'wp-services-showcase'), $widget_ops);

        }

        /**
         * display the widgets on the screen.
         */
        function widget( $args, $instance ) {
            extract( $args );

            $id = (!empty($instance['id']) ? $instance['id'] : null);
            echo $before_widget;
            if ( ! empty( $instance['title'] ) ) {
                echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
            }
            if($id){
                echo do_shortcode( '[service id="'.$id.'"]' );
            }
            echo $after_widget;
        }

        function form( $instance ) {
            global $rtWLS;
            $defaults = array(
                'title' => "Wp Service Showcase",
                'id' => null
            );
            $instance = wp_parse_args( (array) $instance, $defaults );

            ?>
            <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'wp-services-showcase'); ?></label>
                <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" /></p>
            <p><label for="<?php echo $this->get_field_id( 'id' ); ?>"><?php _e('Select Shortcode:', 'wp-services-showcase'); ?></label>
                <select name="<?php echo $this->get_field_name('id'); ?>" id="<?php echo $this->get_field_id('id'); ?>">
                    <option value=''>Select One</option>
                    <?php
                    $scList = $rtWLS->getWlsShortCodeList();
                    if(!empty($scList)) {
                        foreach($scList as $scId => $sc){
                            $selected = ($instance['id'] == $scId ? "selected" : null);
                            echo "<option {$selected} value='{$scId}'>$sc</option>";
                        }
                    }
                    ?>
                </select></p>
            <?php
        }
        public function update( $new_instance, $old_instance ) {

            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            $instance['id'] = ( ! empty( $new_instance['id'] ) ) ? (int)( $new_instance['id'] ) : '';

            return $instance;
        }


    }


endif;
