<?php
    echo '<hr>';
	
    if (Request::get('tag')) $tag = '&tag='.Request::get('tag'); else $tag = '';

    $neighbours = 6;
    $left_neighbour = $page - $neighbours;
    if ($left_neighbour < 1) $left_neighbour = 1;

    $right_neighbour = $page + $neighbours;
    if ($right_neighbour > $pages) $right_neighbour = $pages;
	
    
    if ($page > 1) {
	    echo '<ul class = "pager pull-left">';	
        echo ' <li><a href="' .Page::url(). '?page=1'.$tag.'">'.__('begin', 'blog').'</a></li> <li><a href="' .Page::url(). '?page=' . ($page-1) . $tag.'"> '.__('prev', 'blog').'</a></li> ';
        echo '</ul>';
	}
    
	echo '<div class="div-pagination text-center hidden"><ul class = "pagination">';
    for ($i=$left_neighbour; $i<=$right_neighbour; $i++) {
        if ($i != $page) {
            
			echo ' <li><a href="' .Page::url(). '?page=' . $i . $tag.'">' . $i . '</a></li> ';
        } else {
            echo ' <li><a><b>' . $i . '</b></a></li> ';
        }
    }
    echo '</div></ul>';
    
	if ($page < $pages) {
		echo '<ul class = "pager pull-right">';
        echo  ' <li><a href="' .Page::url(). '?page=' . ($page+1) . $tag.'">'.__('next', 'blog').'</a></li> <li><a href="' .Page::url(). '?page=' . $pages . $tag.'">'.__('end', 'blog').'</a></li> ';
        echo '</ul>';
   }

?>
