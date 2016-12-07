<?php
/*
* Layout 1: On mouse hover social and detail icon
*
   Variable
   $tlp_active_link,$mID(post ID),$title,$pLink,$imgSrc
   field
   $fname,$fdesignation
*
*/

$html = null;
$html .="<div class='rt-col-lg-12 {$boxShadowClass}'>";
    $html .="<div class='single-service {$eqlHClass}'>";
        $html .="<div class='media service-item'>";
                if(in_array('icon',$items)) {
                    $html .= "<div class='media-left service-image'>
                             <a href='{$pLink}'><i class='media-object fa {$icon}'></i></a>
                         </div>";
                }
                $html .="<div class='media-body service-content'>";
                    if(in_array('title',$items)) {
                        $html .= "<h3 class='media-heading'><a href='{$pLink}'>{$title}</a></h3>";
                    }
                    if(in_array('description',$items)) {
                        $html .= "<div class='service-short-description'>";
                        $html .= apply_filters('the_content', $short_description);
                        $html .= "</div>";
                    }
                    if(in_array('read_more',$items)){
                        $html .="<div class='services-read-more'><a href='{$pLink}'>Read More</a></div>";
                    }
                $html .="</div>";
        $html .="</div>"; // end media service-item
    $html .="</div>";
$html .="</div>";
echo $html;