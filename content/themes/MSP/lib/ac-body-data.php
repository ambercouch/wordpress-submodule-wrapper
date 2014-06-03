<?php

function ac_get_body_data(){
    global $post;
    $body_data = array();
    
    $post_type = get_post_type( get_the_ID() );
    $body_data['post-type'] = $post_type;
    $post_slug = $post->post_name;
    if(is_front_page()){$post_slug = 'home';}
    if(is_home()){$post_slug = 'blog';}
    $body_data['post-slug'] = $post_slug;
    
    return $body_data;
}
function ac_body_data(){
    $body_data = ac_get_body_data();
    
    $output = '';
    foreach($body_data as $key => $data){
         $output .= 'data-'.$key.'=';
         $output .= str_replace('-','_',$data);
         $output .= ' ';
          
    }
    echo $output;
}
