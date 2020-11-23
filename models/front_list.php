<link rel="stylesheet" href="https://topeslrecruiting.com/models/om_write.css?v=<?php echo mt_rand(1,100000); ?>">



<div class="om_adm_list_search">
  <form class="om_adm_search_form" action="/job-board/korea-job-board/" method="post">

    <input type="hidden" name="check" value="1">
    <select class="" name="sel1">
      <option value="">선택</option>
      <option value="wr0" <?php if($_POST['sel1']=='wr0'){echo 'selected="selected"';} ?>>제목</option>
      <option value="wr1" <?php if($_POST['sel1']=='wr1'){echo 'selected="selected"';} ?>>학원명</option>
    </select>
    <input type="text" name="sel2" value="<?php echo $_POST['sel2']; ?>" placeholder="검색어" id="om_adm_sel2">
    <select class="" name="sel3">
      <option value="">선택</option>
      <option value="indate" <?php if($_POST['sel3']=='indate'){echo 'selected="selected"';} ?>>등록일</option>
      <option value="wr11" <?php if($_POST['sel3']=='wr11'){echo 'selected="selected"';} ?>>근무 시작일</option>
    </select>
    <select class="" name="sel4">
      <?php for ($i_y=2020; $i_y < 2100; $i_y++) { ?>
        <option value="<?php echo $i_y; ?>" <?php if($_POST['sel4']==$i_y){echo 'selected="selected"';} ?>><?php echo $i_y; ?></option>
      <?php } ?>
    </select>
    <select class="" name="sel5">
      <?php for ($i_m=1; $i_m < 13; $i_m++) { ?>
        <option value="<?php echo $i_m; ?>" <?php if($_POST['sel5']==$i_m){echo 'selected="selected"';} ?>><?php echo $i_m; ?></option>
      <?php } ?>
    </select>
    <select class="" name="sel6" id="om_adm_select">
      <?php for ($i_d=1; $i_d < 32; $i_d++) { ?>
        <option value="<?php echo $i_d; ?>" <?php if($_POST['sel6']==$i_d){echo 'selected="selected"';} ?>><?php echo $i_d; ?></option>
      <?php } ?>

    </select>
    <button type="submit" class="om_bt_dsn2">검색</button>
    <button type="button" class="om_bt_dsn2" onclick="omListFormReset();">초기화</button>
  </form>
</div>

<script type="text/javascript">
function omListFormReset(){
  document.getElementById('om_adm_sel2').value = '';
  // document.getElementById('om_adm_select').options[0].setAttribute('selected','selected');
  // document.getElementById('om_adm_select').options[0].setAttribute('value','1000000');
  document.getElementById('om_adm_select').options[0].selected=true;
}
</script>


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
        <td><a href="/job-board/korea-job-board?vn=<?php echo $oal_key->anum; ?>"><?php echo $oal_key->wr0; ?></a></td>
        <td><a href="/job-board/korea-job-board?vn=<?php echo $oal_key->anum; ?>"><?php echo $oal_key->wr1; ?></a></td>
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
    <a href="/job-board/korea-job-board?pn=<?php echo $om_page_block*10-19; ?>">prev</a>
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
    <a href="/job-board/korea-job-board?pn=<?php echo $oalp; ?>" class="<?php echo $om_now_pn_class; ?>"><?php echo $oalp; ?></a>
    <?php } ?>
    <?php if($om_page_block_endnum == $om_page_block_startnum+9){ ?>
      <a href="/job-board/korea-job-board?pn=<?php echo $om_page_block_endnum+1; ?>">next</a>
    <?php } ?>

  </div>

  
</div>
