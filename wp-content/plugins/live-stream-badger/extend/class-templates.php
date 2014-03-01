<?php

namespace livestreambadger;

class Templates {
    
    function printt( $template_string, $args ) {
        return str_replace(array_keys($args), array_values($args), $template_string);
    }

    function status_widget() {
        $template = '<div class="lsb-status-widget-holder"><ul>%%items%%</ul></div>';
        return apply_filters( 'lsb_status_widget_format', $template );
    }
    
    function status_widget_item() {
        $template = 
            '<li class="lsb-status-widget-list-item %%status_class%% %%item_classes%%">'.
            '<a href="%%url%%" target="_blank">'.
            '  <span class="lsb-status-widget-icon"></span>'.
			'  <span class="lsb-status-widget-title">%%title%%</span>'.
			'  <span class="lsb-status-widget-indicator %%status_class%%">%%status_indicator%%</span>'.
            '</a>'.
			'</li>';
	    return apply_filters( 'lsb_status_widget_item_format', $template );
    }
    
    function status_widget_item_with_image() {
        $template = 
            '<li class="lsb-status-widget-list-item %%status_class%% %%item_classes%%">'.
            '<a href="%%url%%" target="_blank">'.
            '  <span class="lsb-status-widget-icon"></span>'.
			'  <span class="lsb-status-widget-title">%%title%%</span>'.
			'  <span class="lsb-status-widget-indicator %%status_class%%">%%status_indicator%%</span>'.
			'  <span class="lsb-status-widget-image">'.
			'      <img src="%%image_src%%">'.
			'  </span>'.
            '</a>'.
			'</li>';
		return apply_filters( 'lsb_status_widget_item_with_image_format', $template );
    }
    
    function status_widget_no_content() {
        $template = '<div class="lsb-status-widget-holder"><span class="lsb-status-widget-info">%%message%%</span></div>';
        return apply_filters( 'lsb_status_widget_no_content_format', $template );
        
    }

}