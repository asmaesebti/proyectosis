<?php
$db = mysqli_connect('localhost', 'root', '', 'proyectosis');
$sql = 'select id, item_name as name, item_name as text, parent_id from tbl_categories';
$result = mysqli_query($db, $sql);

$tree_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($tree_data as $k => &$v){
    $tmp_data[$v['id']] = &$v;
}

foreach($tree_data as $k => &$v){
    if($v['parent_id'] && isset($tmp_data[$v['parent_id']])){
        $tmp_data[$v['parent_id']]['nodes'][] = &$v;
    }
}

foreach($tree_data as $k => &$v){
    if($v['parent_id'] && isset($tmp_data[$v['parent_id']])){
        unset($tree_data[$k]);
    }
}

echo json_encode($tree_data);
?>