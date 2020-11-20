<link rel="stylesheet" href="https://topeslrecruiting.com/models/om_write.css?v=<?php echo mt_rand(1,100000); ?>">



<div class="om_adm_list_search">
  <select class="" name="">
    <option value="">선택</option>
    <option value="">제목</option>
    <option value="">학원명</option>
  </select>
  <input type="text" name="" value="" placeholder="검색어">
  <select class="" name="">
    <option value="">선택</option>
    <option value="">등록일</option>
    <option value="">근무 시작일</option>
  </select>
  <select class="" name="">
    <?php for ($i_y=2020; $i_y < 2100; $i_y++) { ?>
      <option value=""><?php echo $i_y; ?></option>
    <?php } ?>
  </select>
  <select class="" name="">
    <?php for ($i_m=1; $i_m < 13; $i_m++) { ?>
      <option value=""><?php echo $i_m; ?></option>
    <?php } ?>
  </select>
  <select class="" name="">
    <?php for ($i_d=1; $i_d < 32; $i_d++) { ?>
      <option value=""><?php echo $i_d; ?></option>
    <?php } ?>

  </select>
  <button type="submit" class="om_bt_dsn2">검색</button>
</div>


<div class="om_adm_list">
  <table>
    <tr>
      <td class="om_adm_list_td1">No</td>
      <td class="om_adm_list_td1">Job Title</td>
      <td class="om_adm_list_td1">Name</td>
      <td class="om_adm_list_td1">Location</td>
      <td class="om_adm_list_td1">Start Date</td>
      <td class="om_adm_list_td1">Type</td>
      <td class="om_adm_list_td1">Status</td>
    </tr>
    <?php foreach ($om_adm_list as $oal_key) { ?>
      <tr>
        <td><?php echo $om_list_num; ?></td>
        <td><a href="/wp-admin/admin.php?page=custom_menu&vn=<?php echo $oal_key->anum; ?>"><?php echo $oal_key->wr0; ?></a></td>
        <td><a href="/wp-admin/admin.php?page=custom_menu&vn=<?php echo $oal_key->anum; ?>"><?php echo $oal_key->wr1; ?></a></td>
        <td><?php echo $oal_key->wr8; ?></td>
        <td><?php echo $oal_key->wr11; ?></td>
        <td><?php echo $oal_key->wr12; ?></td>
        <td></td>
      </tr>
      <?php $om_list_num = $om_list_num-1; ?>
    <?php } ?>
  </table>
  <div class="om_adm_list_paging">
    <?php if($om_page_block!==1){ ?>
    <a href="/wp-admin/admin.php?page=custom_menu&pn=<?php echo $om_page_block*10-19; ?>">prev</a>
    <?php } ?>
    <?php
    for($oalp = $om_page_block_startnum; $oalp <= $om_page_block_endnum; $oalp++){
    ?>
    <?php
    $om_now_pn_class = '';
    if($oalp == (int)$om_get_pn){
      $om_now_pn_class = 'om_now_pn';
    }
    ?>
    <a href="/wp-admin/admin.php?page=custom_menu&pn=<?php echo $oalp; ?>" class="<?php echo $om_now_pn_class; ?>"><?php echo $oalp; ?></a>
    <?php } ?>
    <?php if($om_page_block_endnum == $om_page_block_startnum+9){ ?>
      <a href="/wp-admin/admin.php?page=custom_menu&pn=<?php echo $om_page_block_endnum+1; ?>">next</a>
    <?php } ?>

  </div>

  <div class="adm_list_bot_bt">
    <a href="/wp-admin/admin.php?page=custom_menu&bo=wr" class="om_bt_dsn">write</a>
  </div>
</div>
