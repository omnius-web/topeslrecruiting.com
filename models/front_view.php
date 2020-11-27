<style>
html {
  font-size: 9px!important;
}
</style>
<link rel="stylesheet" href="https://topeslrecruiting.com/models/om_write.css?v=<?php echo mt_rand(1,100000); ?>">
<!-- 달력 -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://topeslrecruiting.com/models/datepicker-ko.js"></script>

<!-- 달력 -->







<!-- Table1 -->
<div class="om_front_view">
  <table style="width: 100%;">
    <colgroup>
      <col width="15%">
      <col width="35%">
      <col width="15%">
      <col width="35%">
    </colgroup>
    <thead>
      <tr>
        <th>Job Title</th>
        <td><?php echo $om_adm_view[0]->wr0; ?></td>
        <th>Status</th>
        <td><?php echo $om_adm_view[0]->wr35; ?></td>
      </tr>
      <tr>
        <th>Location</th>
        <td><?php echo $om_adm_view[0]->wr8; ?></td>
        <th>Job Number</th>
        <td><?php echo $om_adm_view[0]->wr37; ?></td>
      </tr>
    </thead>

  </table>
</div>
<!-- Table1 -->




<!-- Table1 -->
<div class="om_front_view">
  <h4>Job Description</h4>
  <table style="width: 100%;">
    <colgroup>
      <col width="15%">
      <col width="35%">
      <col width="15%">
      <col width="35%">
    </colgroup>
    <thead>
      <tr>
        <th>Start Date</th>
        <td><?php echo $om_adm_view[0]->wr11; ?></td>
        <th>Type</th>
        <td><?php echo $om_adm_view[0]->wr12; ?></td>
      </tr>
      <tr>
        <th>Working hours</th>
        <td><?php echo $om_adm_view[0]->wr13; ?></td>
        <th>Working days</th>
        <td><?php echo $om_adm_view[0]->wr14; ?></td>
      </tr>
      <tr>
        <th>Salary</th>
        <td><?php echo $om_adm_view[0]->wr15; ?></td>
        <th>Overtime Rate</th>
        <td><?php echo $om_adm_view[0]->wr16; ?></td>
      </tr>
      <tr>
        <th>Student age group</th>
        <td><?php echo $om_adm_view[0]->wr17; ?></td>
        <th>Student per class</th>
        <td><?php echo $om_adm_view[0]->wr18; ?></td>
      </tr>
      <tr>
        <th>Teaching hours</th>
        <td><?php echo $om_adm_view[0]->wr19; ?></td>
        <th>Class Length</th>
        <td><?php echo $om_adm_view[0]->wr20; ?></td>
      </tr>
      <tr>
        <th>The number of job openings</th>
        <td><?php echo $om_adm_view[0]->wr21; ?></td>
        <th>The number of Foreign teachers</th>
        <td><?php echo $om_adm_view[0]->wr22; ?></td>
      </tr>
    </thead>

  </table>
</div>
<!-- Table1 -->





<!-- Table1 -->
<div class="om_front_view">
  <h4>Benefits</h4>
  <table style="width: 100%;">
    <colgroup>
      <col width="15%">
      <col width="35%">
      <col width="15%">
      <col width="35%">
    </colgroup>
    <thead>
      <tr>
        <th>Housing</th>
        <td><?php echo $om_adm_view[0]->wr23; ?></td>
        <th>Flight Ticket</th>
        <td><?php echo $om_adm_view[0]->wr24; ?></td>
      </tr>
      <tr>
        <th>Medical Insurance</th>
        <td><?php echo $om_adm_view[0]->wr25; ?></td>
        <th>Severance bonus</th>
        <td><?php echo $om_adm_view[0]->wr26; ?></td>
      </tr>
      <tr>
        <th>National Pension</th>
        <td><?php echo $om_adm_view[0]->wr27; ?></td>
        <th>Paid Vacation</th>
        <td><?php echo $om_adm_view[0]->wr28; ?></td>
      </tr>
    </thead>

  </table>
</div>
<!-- Table1 -->




<!-- Table1 -->
<div class="om_front_view">
  <h4>More Information </h4>
  <table style="width: 100%;">
    <colgroup>
      <col width="15%">
      <col width="85%">

    </colgroup>
    <thead>
      <tr>
        <th>School Pictures</th>
        <td><img src="<?php echo $om_adm_view[0]->wr30; ?>" style="width: 100%;"></td>

      </tr>
      <tr>
        
        <th>Housing pictures </th>
        <td><img src="<?php echo $om_adm_view[0]->wr31; ?>" style="width: 100%;"></td>
      </tr>

    </thead>

  </table>
</div>
<!-- Table1 -->











<?php /*




<!-- 주소 -->





  <!-- form 1 section -->
  <div class="om_form1_div">
    <div class="om_form1_div_tit">
      <a>고용기관정보</a>
    </div>

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">Job Title*</a>
      </li>
      <li class="om_form1_dir_input">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr0; ?></a>
      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">교육기관명*</a>
      </li>
      <li class="om_form1_dir_input">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr1; ?></a>
      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">전화번호*</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr2; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">팩스번호</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr3; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

  </div>
  <!-- form 1 section -->



  <!-- form 1 section -->
  <div class="om_form1_div">
    <div class="om_form1_div_tit">
      <a>구인 담당자 정보</a>
    </div>

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">담당자 성함 및 직함*</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr4; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">휴대폰번호</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr5; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">E-mail*</a>
      </li>
      <li class="om_form1_dir_input">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr6; ?></a>
      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">기관 주소*</a>
      </li>
      <li class="om_form1_dir_input om_form_juso">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr8; ?> <?php echo $om_adm_view[0]->wr9; ?> <?php echo $om_adm_view[0]->wr10; ?></a>
      </li>
    </div>
    <!-- form 1 row -->



  </div>
  <!-- form 1 section -->




  <!-- form 1 section -->
  <div class="om_form1_div">
    <div class="om_form1_div_tit">
      <a>구인 정보</a>
    </div>

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">근무 시작일</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input" id="date1"><?php echo $om_adm_view[0]->wr11; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">Type</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr12; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">근무 시간</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr13; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">근무 요일</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr14; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">월급</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr15; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">초과근무 수당</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr16; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">학생 연령층</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr17; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">수업 인원 수</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr18; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">수업 시수</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr19; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">수업 시간</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr20; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">채용 강사 수</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr21; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">원어민 강사 수</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr22; ?></a>
      </li>
    </div>
    <!-- form 2 row -->





  </div>
  <!-- form 1 section -->















  <!-- form 1 section -->
  <div class="om_form1_div">
    <div class="om_form1_div_tit">
      <a>강사 복지</a>
    </div>

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">숙소 제공</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr23; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">항공권 제공</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr24; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">의료보험 제공</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr25; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">퇴직금 제공</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr26; ?></a>
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">National Pension</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr27; ?></a>
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">유급 휴가</a>
      </li>
      <li class="om_form1_dir_input2">
        <a class="om_form1_dir_input_input"><?php echo $om_adm_view[0]->wr28; ?></a>
      </li>
    </div>
    <!-- form 2 row -->







  </div>
  <!-- form 1 section -->









  <!-- form 1 section -->
  <div class="om_form1_div">
    <div class="om_form1_div_tit">
      <a>추가 정보</a>
    </div>

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">추가요청사항</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <textarea style="width: 100%; height: 100px;"><?php echo $om_adm_view[0]->wr29; ?></textarea>
      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">학원 사진</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <img src="<?php echo $om_adm_view[0]->wr30; ?>" style="width: 100%;">

      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">하우징 사진</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <img src="<?php echo $om_adm_view[0]->wr31; ?>" style="width: 100%;">

      </li>
    </div>
    <!-- form 1 row -->









  </div>
  <!-- form 1 section -->


  */ ?>
