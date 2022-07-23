<?
function get_paging($start, $page, $num_page)
{
    $str_paging = "<ul id=\"paging\">";
    if ($page > 1) {
        $page_prev = $page - 1;
        $str_paging .= "<li><a href=\"?mod=user&act=main&page={$page_prev}\">Trước</a></li>";
    }
    for ($i = 1; $i <= $num_page; $i++) {
        $active = "";
        if($page == $i)
            $active = "class = \"active\"";
        $str_paging .= "<li $active ><a href=\"?mod=user&act=main&page={$i}\">$i</a></li>";
    }
    if ($page < $num_page) {
        $page_next = $page + 1;
        $str_paging .= "<li><a href=\"?mod=user&act=main&page={$page_next}\">Sau</a></li>";
    }
    $str_paging .="</ul>";
    return $str_paging;
}

// <ul id="paging">
//         <li class="active"><a href="?mod=user&act=main">1</a></li>
//         <li><a href="?mod=user&act=main&page=2">2</a></li>
//         <li><a href="?mod=user&act=main&page=3">3</a></li>
//         <li><a href="?mod=user&act=main&page=4">4</a></li>
//         <li><a href="?mod=user&act=main&page=5">5</a></li>
//     </ul>