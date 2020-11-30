<?php
function om_write(){

    include $_SERVER['DOCUMENT_ROOT'].'/models/form1.php';
}
function om_sc_write(){
    add_shortcode('om_write','om_write');
}
add_action('init','om_sc_write');
/*
여기까지 숏코드 등록을 위한코드
*/




function om_front_list(){
    global $wpdb;
    if(isset($_GET['vn'])){
      include $_SERVER['DOCUMENT_ROOT'].'/models/adm_view_model.php';
    }
    else{
      include $_SERVER['DOCUMENT_ROOT'].'/models/adm_list_model.php';
    }

}
function om_sc_front_list(){
    add_shortcode('om_front_list','om_front_list');
}
add_action('init','om_sc_front_list');
/*
여기까지 두번째 숏코드 등록을 위한코드
*/





function om_contact(){

    include $_SERVER['DOCUMENT_ROOT'].'/models/contact.php';
}
function om_sc_contact(){
    add_shortcode('om_contact','om_contact');
}
add_action('init','om_sc_contact');
/*
여기까지 세번째 숏코드 등록을 위한코드
*/






/*
action 주소는 꼭 여기로해야됨
action="'.esc_url( admin_url( 'admin-post.php' ) ).'"

name은 꼭 action으로
value는 원하는걸로 하면됨
<input type="hidden" name="action" value="omnius_post">

인젝션공격방지를 위해서 넣어줌(value에 넣은 값을 기준으로 만들면 됨)
wp_nonce_field( 'omnius_post', 'omnius_post_field' )

admin-post를 위한 것은 보통 두가지 모두 넣어줌
add_action( 'admin_post_nopriv_omnius_post', 'func_omnius_post' );
add_action( 'admin_post_omnius_post', 'func_omnius_post' );
로그인 하지않은 사람과 로그인한사람에게 보여줄 함수임
add_action 함수 두번째 인자로 함수이름 넣음

최종적으로 admin-post.php페이지에 와서 받은 post값으로 어떤걸 할지 func_omnius_post이름의 함수로 만들면 됨
*/


add_action( 'admin_post_nopriv_omnius_post', 'func_omnius_post' );
add_action( 'admin_post_omnius_post', 'func_omnius_post' );

function func_omnius_post(){
    global $wpdb;
    //var_dump($_POST);

    /* file_upload */
    if(!function_exists('wp_handle_upload')){
      require_once(ABSPATH.'wp-admin/includes/file.php');
    }
    $uploadfile = $_FILES['file1'];
    $uploadfile2 = $_FILES['file2'];

    $upload_overrides = array('test_form'=>false);

    $movefile[] = wp_handle_upload($uploadfile,$upload_overrides);
    $movefile[] = wp_handle_upload($uploadfile2,$upload_overrides);

    if($movefile && !isset($movefile['error'])){
      echo "File Uplod Successfully";
      var_dump($movefile);
    }
    else {
      echo $movefile['error'];
    }
    /* file_upload_end */


    $om_post_rst = $_POST;
    unset($om_post_rst['action']);
    unset($om_post_rst['omnius_post_field']);
    unset($om_post_rst['_wp_http_referer']);
    if($movefile[0]['error'] == ''){
      $om_post_rst['wr30'] = $movefile[0]['url'];
      $om_post_rst['wr33'] = $movefile[0]['file'];
    }
    if($movefile[1]['error'] == ''){
      $om_post_rst['wr31'] = $movefile[1]['url'];
      $om_post_rst['wr34'] = $movefile[1]['file'];
    }
    // $om_post_rst['wr30'] = $movefile[0]['url'];
    // $om_post_rst['wr31'] = $movefile[1]['url'];
    $om_post_rst['indate'] = time();
    $wpdb->show_errors();
    /*
    $om_list_sql = "insert into om_list";
    for($i=1; $i<33; $i++){
      $om_fl_one = " wr{$i},";
      $om_fl_one_val = " %s,";
      if($i == 1){
        $om_fl_one = " (wr{$i},";
        $om_fl_one_val = " (%s,";
      }
      if($i == 32){
        $om_fl_one = " wr{$i})";
        $om_fl_one_val = " %s)";
      }

      $om_feild_list .= $om_fl_one;
      $om_feild_val .= $om_fl_one_val;
    }
    $om_list_sql .= $om_feild_list." values ".$om_feild_val;
    */

    // $wpdb->query(
    //     $wpdb->prepare(
    //         "insert into wp_test (wr1, wr2) values (%s,%d)",          $_POST['wr1'],(int)$_POST['wr2']
    //     )
    // );
    // echo "<script>alert('ok');location.href='/';</script>";

    $wpdb->insert('om_list',$om_post_rst);
    $wpdb->print_error();

    echo "<img src='".$om_post_rst['wr30']."'><img src='".$om_post_rst['wr31']."'>";
    //echo "<script>alert('ok');location.href='/';</script>";

}








add_action( 'admin_post_nopriv_omnius_adm_in', 'func_omnius_adm_in' );
add_action( 'admin_post_omnius_adm_in', 'func_omnius_adm_in' );

function func_omnius_adm_in(){
    global $wpdb;
    // var_dump($_FILES);

    /* file_upload */
    if(!function_exists('wp_handle_upload')){
      require_once(ABSPATH.'wp-admin/includes/file.php');
    }
    $uploadfile = $_FILES['file1'];
    $uploadfile2 = $_FILES['file2'];

    $upload_overrides = array('test_form'=>false);

    $movefile[] = wp_handle_upload($uploadfile,$upload_overrides);
    $movefile[] = wp_handle_upload($uploadfile2,$upload_overrides);

    if($movefile && !isset($movefile['error'])){
      echo "File Uplod Successfully";
      var_dump($movefile);
    }
    else {
      echo $movefile['error'];
    }
    /* file_upload_end */


    $om_post_rst = $_POST;
    unset($om_post_rst['action']);
    unset($om_post_rst['omnius_adm_in_field']);
    unset($om_post_rst['_wp_http_referer']);
    if($movefile[0]['error'] == ''){
      $om_post_rst['wr30'] = $movefile[0]['url'];
      $om_post_rst['wr33'] = $movefile[0]['file'];
    }
    if($movefile[1]['error'] == ''){
      $om_post_rst['wr31'] = $movefile[1]['url'];
      $om_post_rst['wr34'] = $movefile[1]['file'];
    }
    // $om_post_rst['wr30'] = $movefile[0]['url'];
    // $om_post_rst['wr31'] = $movefile[1]['url'];
    $om_post_rst['indate'] = time();
    $wpdb->show_errors();
    /*
    $om_list_sql = "insert into om_list";
    for($i=1; $i<33; $i++){
      $om_fl_one = " wr{$i},";
      $om_fl_one_val = " %s,";
      if($i == 1){
        $om_fl_one = " (wr{$i},";
        $om_fl_one_val = " (%s,";
      }
      if($i == 32){
        $om_fl_one = " wr{$i})";
        $om_fl_one_val = " %s)";
      }

      $om_feild_list .= $om_fl_one;
      $om_feild_val .= $om_fl_one_val;
    }
    $om_list_sql .= $om_feild_list." values ".$om_feild_val;
    */

    // $wpdb->query(
    //     $wpdb->prepare(
    //         "insert into wp_test (wr1, wr2) values (%s,%d)",          $_POST['wr1'],(int)$_POST['wr2']
    //     )
    // );
    // echo "<script>alert('ok');location.href='/';</script>";

    $wpdb->insert('om_list',$om_post_rst);
    $wpdb->print_error();

    echo "<img src='".$om_post_rst['wr30']."'><img src='".$om_post_rst['wr31']."'>";
    //echo "<script>alert('ok');location.href='/';</script>";

}









add_action( 'admin_post_nopriv_omnius_adm_up', 'func_omnius_adm_up' );
add_action( 'admin_post_omnius_adm_up', 'func_omnius_adm_up' );



function func_omnius_adm_up(){
  global $wpdb;



  /* file_upload */
  if(!function_exists('wp_handle_upload')){
    require_once(ABSPATH.'wp-admin/includes/file.php');
  }
  $uploadfile = $_FILES['file1'];
  $uploadfile2 = $_FILES['file2'];

  $upload_overrides = array('test_form'=>false);

  $movefile[] = wp_handle_upload($uploadfile,$upload_overrides);
  $movefile[] = wp_handle_upload($uploadfile2,$upload_overrides);

  if($movefile && !isset($movefile['error'])){
    echo "File Uplod Successfully";
    var_dump($movefile);
  }
  else {
    echo $movefile['error'];
  }
  /* file_upload_end */




  $om_post_rst = $_POST;
  $om_post_anum = $_POST['anum'];
  unset($om_post_rst['anum']);
  unset($om_post_rst['action']);
  unset($om_post_rst['omnius_adm_up_field']);
  unset($om_post_rst['_wp_http_referer']);
  if($movefile[0]['error'] == ''){
    $om_post_rst['wr30'] = $movefile[0]['url'];
    wp_delete_file( $om_post_rst['wr33'] );
    $om_post_rst['wr33'] = $movefile[0]['file'];
  }
  if($movefile[1]['error'] == ''){
    $om_post_rst['wr31'] = $movefile[1]['url'];
    wp_delete_file( $om_post_rst['wr34'] );
    $om_post_rst['wr34'] = $movefile[1]['file'];
  }
  $wpdb->show_errors();
  $wpdb->update('om_list',$om_post_rst,array('anum'=>$om_post_anum));
  $wpdb->print_error();
}















add_action( 'admin_post_nopriv_omnius_adm_del', 'func_omnius_adm_del' );
add_action( 'admin_post_omnius_adm_del', 'func_omnius_adm_del' );



function func_omnius_adm_del(){
  global $wpdb;

  $rst_where['anum'] = $_POST['anum'];
  $wpdb->show_errors();
  $wpdb->delete('om_list',$rst_where);
  $wpdb->print_error();

  /*
  $om_post_rst = $_POST;
  $om_post_anum = $_POST['anum'];
  unset($om_post_rst['anum']);
  unset($om_post_rst['action']);
  unset($om_post_rst['omnius_adm_up_field']);
  unset($om_post_rst['_wp_http_referer']);
  if($movefile[0]['error'] == ''){
    $om_post_rst['wr30'] = $movefile[0]['url'];
    wp_delete_file( $om_post_rst['wr33'] );
    $om_post_rst['wr33'] = $movefile[0]['file'];
  }
  if($movefile[1]['error'] == ''){
    $om_post_rst['wr31'] = $movefile[1]['url'];
    wp_delete_file( $om_post_rst['wr34'] );
    $om_post_rst['wr34'] = $movefile[1]['file'];
  }
  $wpdb->show_errors();
  $wpdb->update('om_list',$om_post_rst,array('anum'=>$om_post_anum));
  $wpdb->print_error();
  */
}

/*
이전페이지로 가서 새로고침
location.href = document.referrer;
*/




add_action( 'admin_post_nopriv_omnius_apply', 'func_omnius_apply' );
add_action( 'admin_post_omnius_apply', 'func_omnius_apply' );

function func_omnius_apply(){
    global $wpdb;
    //var_dump($_POST);
    for($i=1;$i<=10;$i++){
      if($_POST['wr'.$i] == ''){
        echo "<script>alert('* 필수입력내용을 모두 입력해주세요.');history.back();</script>";
        return;
      }
    }
    /* file_upload */
    if(!function_exists('wp_handle_upload')){
      require_once(ABSPATH.'wp-admin/includes/file.php');
    }
    $uploadfile = $_FILES['file1'];
    $uploadfile2 = $_FILES['file2'];

    $upload_overrides = array('test_form'=>false);

    $movefile[] = wp_handle_upload($uploadfile,$upload_overrides);
    $movefile[] = wp_handle_upload($uploadfile2,$upload_overrides);

    if($movefile && !isset($movefile['error'])){
      //echo "File Uplod Successfully";
      //var_dump($movefile);
    }
    else {
      echo $movefile['error'];
    }
    /* file_upload_end */


    $om_post_rst = $_POST;
    unset($om_post_rst['action']);
    unset($om_post_rst['omnius_apply_field']);
    unset($om_post_rst['_wp_http_referer']);
    if($movefile[0]['error'] == ''){
      $om_post_rst['wr30'] = $movefile[0]['url'];
      $om_post_rst['wr31'] = $movefile[0]['file'];
    }
    if($movefile[1]['error'] == ''){
      $om_post_rst['wr32'] = $movefile[1]['url'];
      $om_post_rst['wr33'] = $movefile[1]['file'];
    }
    // $om_post_rst['wr30'] = $movefile[0]['url'];
    // $om_post_rst['wr31'] = $movefile[1]['url'];
    $om_post_rst['indate'] = time();
    $wpdb->show_errors();
    /*
    $om_list_sql = "insert into om_list";
    for($i=1; $i<33; $i++){
      $om_fl_one = " wr{$i},";
      $om_fl_one_val = " %s,";
      if($i == 1){
        $om_fl_one = " (wr{$i},";
        $om_fl_one_val = " (%s,";
      }
      if($i == 32){
        $om_fl_one = " wr{$i})";
        $om_fl_one_val = " %s)";
      }

      $om_feild_list .= $om_fl_one;
      $om_feild_val .= $om_fl_one_val;
    }
    $om_list_sql .= $om_feild_list." values ".$om_feild_val;
    */

    // $wpdb->query(
    //     $wpdb->prepare(
    //         "insert into wp_test (wr1, wr2) values (%s,%d)",          $_POST['wr1'],(int)$_POST['wr2']
    //     )
    // );
    // echo "<script>alert('ok');location.href='/';</script>";

    $wpdb->insert('om_apply',$om_post_rst);

    if(!$wpdb->last_error){
      echo "<script>alert('입력되었습니다.');location.href = document.referrer;</script>";
    }
    //$wpdb->print_error();

    // echo "<img src='".$om_post_rst['wr30']."'><img src='".$om_post_rst['wr31']."'>";
    //echo "<script>alert('ok');location.href='/';</script>";

}








/*
여기부터 관리자 메뉴 커스텀

*/


 // omnius admin_menu add
 add_action('admin_menu', 'register_custom_menu_page');

  function register_custom_menu_page() {
    add_menu_page('OMNIUS','구인신청','manage_options','custom_menu','custom_menu_page','',6);
  }

  function custom_menu_page() {
    global $wpdb;
    if(isset($_GET['vn'])){
      include $_SERVER['DOCUMENT_ROOT'].'/models/adm_view_model.php';
    }
    elseif($_GET['bo'] == 'wr') {
      include $_SERVER['DOCUMENT_ROOT'].'/models/adm_inform.php';
    }
    else{
      include $_SERVER['DOCUMENT_ROOT'].'/models/adm_list_model.php';
    }

  }


  add_action('admin_menu', 'register_custom_menu_page2');

   function register_custom_menu_page2() {
     add_menu_page('OMNIUS2','Apply','manage_options','custom_menu2','custom_menu_page2','',7);
   }

   function custom_menu_page2() {
     global $wpdb;
     if(isset($_GET['vn'])){
       include $_SERVER['DOCUMENT_ROOT'].'/models/adm_view_model2.php';
     }
     elseif($_GET['bo'] == 'wr') {
       //include $_SERVER['DOCUMENT_ROOT'].'/models/adm_inform.php';
     }
     else{
       include $_SERVER['DOCUMENT_ROOT'].'/models/adm_list_model2.php';
     }

   }


/*
OBJECT – 결과는 객체로 출력됩니다.
ARRAY_A – 결과는 연관 배열로 출력됩니다.
ARRAY_N – 결과는 숫자 인덱스 배열로 출력됩니다.
*/


  // omnius admin_menu add
  /*

  -->
  <?php
add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
?>

아이콘을 지정하지 않으면, 기본적으로 기어(gear) 아이콘이 표시됩니다.

3. 마지막으로, 위에서 언급한 함수에서 호출하는 함수 custom_menu_page 에서 실제 화면을 출력(echo)하게 됩니다.

가장 먼저 hr 과 같은 태그를 넣은 것은, 어드민 바에 의해 가려지는 부분을 차지하기 위한 작은 팁입니다. ^^

메뉴가 표시될 위치를 정하고 싶다면, 아래의 표를 참고하셔서 적절한 위치에 넣으시면 됩니다.
예제에서는 6번을 명시하여(함수 가장 마지막 파라미터), 글(Posts) 다음에 메뉴를 배치한 경우입니다.

 2 Dashboard
 4 Separator
 5 Posts
 10 Media
 15 Links
 20 Pages
 25 Comments
 59 Separator
 60 Appearance
 65 Plugins
 70 Users
 75 Tools
 80 Settings
 99 Separator

*/


?>
