<?php

$om_get_num = $_GET['vn'];

$om_adm_view = $wpdb->get_results(
  $wpdb->prepare(
    "select * from om_list where anum=%s",$om_get_num
  ),OBJECT
);


/*
$om_onepage_list_num = 15; //한페이지에 출력할 리스트 개수
$om_set_num = 0; // DB limit 시작번호
$om_page_block = 1; // PAGE BLOCK
$om_page_block_startnum = 1;
$om_adm_list_count = $wpdb->get_var(
  "SELECT COUNT(*) FROM om_list"
);
$om_all_page = ceil((int)$om_adm_list_count/$om_onepage_list_num);//All page
if(!isset($_GET['pn'])){
  $om_list_num = (int)$om_adm_list_count; // 출력 No 시작번호
  $om_page_block_endnum = $om_page_block*10;
  if($om_page_block_endnum>$om_all_page){
    $om_page_block_endnum = $om_all_page;
  }
  $om_get_pn = 1;
}
if(isset($_GET['pn'])){
  $om_set_num = ((int)$_GET['pn']-1)*$om_onepage_list_num;
  $om_list_num = (int)$om_adm_list_count-$om_set_num; // 출력 No 시작번호
  $om_page_block = (int)ceil((int)$_GET['pn']/10);
  $om_page_block_endnum = $om_page_block*10;
  if($om_page_block_endnum>$om_all_page){
    $om_page_block_endnum = $om_all_page;
  }
  $om_page_block_startnum = $om_page_block*10-9;
  $om_get_pn = $_GET['pn'];
}

$om_adm_list = $wpdb->get_results(
  $wpdb->prepare(
    "select * from om_list limit {$om_set_num}, {$om_onepage_list_num}"
  ),OBJECT
);
// foreach ($om_adm_list as $key) {
//   $rst .= "content is {$key->wr1}<br>";
// }
*/
include $_SERVER['DOCUMENT_ROOT'].'/models/adm_view.php';

?>
