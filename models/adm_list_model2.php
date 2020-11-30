<?php
// $to = 'gs5m@naver.com';
// $subject = 'The subject2';
// $body = "
// <div style='font-size: 30px;color:blue;padding: 30px;'>text</div>
// <table>
// <tr>
// <td>1</td>
// <td>1</td>
// <td>1</td>
// </tr>
// <tr>
// <td>1</td>
// <td>1</td>
// <td>1</td>
// </tr>
// <tr>
// <td>1</td>
// <td>1</td>
// <td>1</td>
// </tr>
// <tr>
// <td>1</td>
// <td>1</td>
// <td>1</td>
// </tr>
// </table>
// ";
// $headers = array('Content-Type: text/html; charset=UTF-8');
//
// wp_mail( $to, $subject, $body, $headers );

$om_adm_list_where = [];
if($_POST['check']=='1'){
  if($_POST['sel1'] !== ''){
    $om_adm_list_where[] = $_POST['sel1']." = '".$_POST['sel2']."'";
  }
  if($_POST['sel3'] == 'indate'){
    $om_start_mk = mktime(0,0,0,(int)$_POST['sel5'],(int)$_POST['sel6'],(int)$_POST['sel4']);
    $om_end_mk = mktime(23,59,59,(int)$_POST['sel5'],(int)$_POST['sel6'],(int)$_POST['sel4']);
    $om_adm_list_where[] = "({$_POST['sel3']} >= {$om_start_mk} AND {$_POST['sel3']} <= {$om_end_mk})";
  }
  if($_POST['sel3'] == 'wr11'){
    $om_adm_list_where[] = $_POST['sel3']." = '".$_POST['sel4'].". ".$_POST['sel5'].". ".$_POST['sel6'].".'";
  }
  if($_POST['sel7'] !== ''){
    $om_adm_list_where[] = "wr0 like '%".$_POST['sel7']."%'";
  }
}

$om_where = '';
foreach ($om_adm_list_where as $oalw_key => $oalw_value) {

  if($oalw_key == 0){
    $om_where .= " where {$oalw_value}";
  }
  else{
    $om_where .= " and {$oalw_value}";
  }
}


//echo $om_where;




$om_onepage_list_num = 15; //한페이지에 출력할 리스트 개수
$om_set_num = 0; // DB limit 시작번호
$om_page_block = 1; // PAGE BLOCK
$om_page_block_startnum = 1;
$om_adm_list_count = $wpdb->get_var(
  "SELECT COUNT(*) FROM om_apply {$om_where}"
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
    "select * from om_apply {$om_where} order by anum desc limit {$om_set_num}, {$om_onepage_list_num}"
  ),OBJECT
);
// foreach ($om_adm_list as $key) {
//   $rst .= "content is {$key->wr1}<br>";
// }
// echo $_SERVER['PHP_SELF'];
if($_SERVER['PHP_SELF'] == '/wp-admin/admin.php'){
  include $_SERVER['DOCUMENT_ROOT'].'/models/adm_list2.php';
}
else{
  include $_SERVER['DOCUMENT_ROOT'].'/models/front_list.php';
}

?>
