<style>
html {
  font-size: 9px!important;
}
input[type=checkbox], input[type=radio] {
  width: 2rem!important;
  height: 2rem!important;
}
input[type=radio]:checked::before {
  width: 1.8rem!important;
  height: 1.8rem!important;
  margin: 0rem!important;
}
</style>
<link rel="stylesheet" href="https://topeslrecruiting.com/models/om_write.css?v=<?php echo mt_rand(1,100000); ?>">
<!-- 달력 -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://topeslrecruiting.com/models/datepicker-ko.js"></script>
<script>
$(function(){

  $("#date1").datepicker();

});
</script>
<!-- 달력 -->

<!-- form 1 section -->
<div class="om_form1_div">
  <div class="om_form1_div_tit">
    <a>Personal Information</a>
  </div>



  <!-- form 2 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit2">
      <a class="om_form1_dir_tit_a">* First Name</a>
    </li>
    <li class="om_form1_dir_input2">
      <input type="text" name="wr1" value="<?php echo $om_adm_view[0]->wr1; ?>" class="om_form1_dir_input_input" readonly>
    </li>
    <li class="om_form1_dir_tit2 om_f1dt2_right">
      <a class="om_form1_dir_tit_a">* Last Name</a>
    </li>
    <li class="om_form1_dir_input2">
      <input type="text" name="wr2" value="<?php echo $om_adm_view[0]->wr2; ?>" class="om_form1_dir_input_input" readonly>
    </li>
  </div>
  <!-- form 2 row -->

  <!-- form 2 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit2">
      <a class="om_form1_dir_tit_a">* Nationality</a>
    </li>
    <li class="om_form1_dir_input2">
      <input type="text" name="wr3" value="<?php echo $om_adm_view[0]->wr3; ?>" class="om_form1_dir_input_input" readonly>
    </li>
    <li class="om_form1_dir_tit2 om_f1dt2_right">
      <a class="om_form1_dir_tit_a">* Current Location</a>
    </li>
    <li class="om_form1_dir_input2">
      <input type="text" name="wr4" value="<?php echo $om_adm_view[0]->wr4; ?>" class="om_form1_dir_input_input" readonly>
    </li>
  </div>
  <!-- form 2 row -->

  <!-- form 2 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit2">
      <a class="om_form1_dir_tit_a">* Date of Birth</a>
    </li>
    <li class="om_form1_dir_input2">
      <input type="text" name="wr5" value="<?php echo $om_adm_view[0]->wr5; ?>" class="om_form1_dir_input_input" readonly>
    </li>
    <li class="om_form1_dir_tit2 om_f1dt2_right">
      <a class="om_form1_dir_tit_a">* Gender</a>
    </li>
    <li class="om_form1_dir_input2 om_form1_radio_text">
      <input type="text" name="wr6" value="<?php echo $om_adm_view[0]->wr6; ?>" class="om_form1_dir_input_input" readonly>
    </li>
  </div>
  <!-- form 2 row -->

  <!-- form 2 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit2">
      <a class="om_form1_dir_tit_a">* Phone</a>
    </li>
    <li class="om_form1_dir_input2">
      <input type="text" name="wr7" value="<?php echo $om_adm_view[0]->wr7; ?>" class="om_form1_dir_input_input" readonly>
    </li>
    <li class="om_form1_dir_tit2 om_f1dt2_right">
      <a class="om_form1_dir_tit_a">* Email</a>
    </li>
    <li class="om_form1_dir_input2">
      <input type="text" name="wr8" value="<?php echo $om_adm_view[0]->wr8; ?>" class="om_form1_dir_input_input" readonly>
    </li>
  </div>
  <!-- form 2 row -->

  <!-- form 2 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit2">
      <a class="om_form1_dir_tit_a">* Skype ID</a>
    </li>
    <li class="om_form1_dir_input2">
      <input type="text" name="wr9" value="<?php echo $om_adm_view[0]->wr9; ?>" class="om_form1_dir_input_input" readonly>
    </li>
    <li class="om_form1_dir_tit2 om_f1dt2_right">
      <a class="om_form1_dir_tit_a">* Available Start Date</a>
    </li>
    <li class="om_form1_dir_input2 om_form1_radio_text">
      <input type="text" name="wr10" value="<?php echo $om_adm_view[0]->wr10; ?>" class="om_form1_dir_input_input" readonly>
    </li>
  </div>
  <!-- form 2 row -->

</div>
<!-- form 1 section -->



<!-- form 1 table -->
<div class="om_form1_div">
  <div class="om_form1_div_tit">
    <a>Education Background</a>
  </div>

  <div class="om_form1_div_table">
    <table>
      <tr>
        <th></th>
        <th>School Name</th>
        <th>Major</th>
        <th>Status</th>
      </tr>
      <tr>
        <th>Bachelor's Degree</th>
        <td><input type="text" name="wr11" value="<?php echo $om_adm_view[0]->wr11; ?>" class="om_form1_dir_input_input" readonly></td>
        <td><input type="text" name="wr12" value="<?php echo $om_adm_view[0]->wr12; ?>" class="om_form1_dir_input_input" readonly></td>
        <td><input type="text" name="wr13" value="<?php echo $om_adm_view[0]->wr13; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
      <tr>
        <th>Master's Degree</th>
        <td><input type="text" name="wr14" value="<?php echo $om_adm_view[0]->wr14; ?>" class="om_form1_dir_input_input" readonly></td>
        <td><input type="text" name="wr15" value="<?php echo $om_adm_view[0]->wr15; ?>" class="om_form1_dir_input_input" readonly></td>
        <td><input type="text" name="wr16" value="<?php echo $om_adm_view[0]->wr16; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
      <tr>
        <th colspan="3">Do you have any teaching certificates (e.g. TEFL, TESOL, CELTA)?</th>
        <td><input type="text" name="wr17" value="<?php echo $om_adm_view[0]->wr17; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
      <tr>
        <th colspan="3">If yes, what is the certificate?</th>
        <td><input type="text" name="wr18" value="<?php echo $om_adm_view[0]->wr18; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
    </table>
  </div>

</div>
<!-- form 1 table -->



<!-- form 1 section -->
<div class="om_form1_div">
  <div class="om_form1_div_tit">
    <a>Additional Information</a>
  </div>




  <div class="om_form1_div_table">
    <table>
      <tr>
        <th>Do you have a valid passport?</th>
        <td><input type="text" name="wr19" value="<?php echo $om_adm_view[0]->wr19; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
      <tr>
        <th>Have you taught in Korea or abroad before?</th>
        <td><input type="text" name="wr20" value="<?php echo $om_adm_view[0]->wr20; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
      <tr>
        <th>Do you have any medical problems that an employer should know?</th>
        <td><input type="text" name="wr21" value="<?php echo $om_adm_view[0]->wr21; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
      <tr>
        <th>Have you ever been convicted of a criminal offence?</th>
        <td><input type="text" name="wr22" value="<?php echo $om_adm_view[0]->wr22; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
      <tr>
        <th>Do you have a current Korean visa? If yes, what type?</th>
        <td><input type="text" name="wr23" value="<?php echo $om_adm_view[0]->wr23; ?>" class="om_form1_dir_input_input" readonly></td>
      </tr>
    </table>
  </div>


<?php /*
  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Do you have your passport?</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="checkbox" name="wr19" value="Yes" class="om_form1_dir_input_input2">Yes
      <input type="checkbox" name="wr19" value="No" class="om_form1_dir_input_input2">No
    </li>
  </div>
  <!-- form 1 row -->

  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Teaching experience in Korea or abroad before?</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="checkbox" name="wr20" value="Yes" class="om_form1_dir_input_input2">Yes
      <input type="checkbox" name="wr20" value="No" class="om_form1_dir_input_input2">No
    </li>
  </div>
  <!-- form 1 row -->

  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Do you have any medical problems that employer should know?</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="checkbox" name="wr21" value="Yes" class="om_form1_dir_input_input2">Yes
      <input type="checkbox" name="wr21" value="No" class="om_form1_dir_input_input2">No
    </li>
  </div>
  <!-- form 1 row -->

  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Have you ever been convicted of a criminal offence? </a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="checkbox" name="wr22" value="Yes" class="om_form1_dir_input_input2">Yes
      <input type="checkbox" name="wr22" value="No" class="om_form1_dir_input_input2">No
    </li>
  </div>
  <!-- form 1 row -->

  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Current visa type</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="checkbox" name="wr23" value="E2" class="om_form1_dir_input_input2">E2
      <input type="checkbox" name="wr23" value="F4" class="om_form1_dir_input_input2">F4
      <input type="checkbox" name="wr23" value="F6" class="om_form1_dir_input_input2">F6
      <input type="checkbox" name="wr23" value="None" class="om_form1_dir_input_input2">None
      <input type="checkbox" name="wr23" value="Others" class="om_form1_dir_input_input2">Others
    </li>
  </div>
  <!-- form 1 row -->
  */ ?>







</div>
<!-- form 1 section -->




<!-- form 1 section -->
<div class="om_form1_div">
  <div class="om_form1_div_tit">
    <a>Job Preference </a>
  </div>



  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Preferred location(city)</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      1st desire <input type="text" name="wr24" value="<?php echo $om_adm_view[0]->wr24; ?>" class="om_form1_dir_input_input2" readonly>
      2nd desire <input type="text" name="wr25" value="<?php echo $om_adm_view[0]->wr25; ?>" class="om_form1_dir_input_input2" readonly>
    </li>
  </div>
  <!-- form 1 row -->


  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Preferred student age</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="text" name="wr26" value="<?php echo $om_adm_view[0]->wr26; ?>" class="om_form1_dir_input_input2" readonly>

    </li>
  </div>
  <!-- form 1 row -->

  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Preferred working hours</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="text" name="wr27" value="<?php echo $om_adm_view[0]->wr27; ?>" class="om_form1_dir_input_input2" readonly>

    </li>
  </div>
  <!-- form 1 row -->

  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Housing Type</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="text" name="wr28" value="<?php echo $om_adm_view[0]->wr28; ?>" class="om_form1_dir_input_input2" readonly>

    </li>
  </div>
  <!-- form 1 row -->

  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Expected Salary</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <input type="text" name="wr29" value="<?php echo $om_adm_view[0]->wr29; ?>" class="om_form1_dir_input_input" readonly>
    </li>
  </div>
  <!-- form 1 row -->



  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Resume Upload</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <img src="<?php echo $om_adm_view[0]->wr30; ?>">
    </li>
  </div>
  <!-- form 1 row -->

  <!-- form 1 row -->
  <div class="om_form1_div_input_row1">
    <li class="om_form1_dir_tit">
      <a class="om_form1_dir_tit_a">Recent Photo Upload</a>
    </li>
    <li class="om_form1_dir_input om_form1_radio_text">
      <img src="<?php echo $om_adm_view[0]->wr32; ?>">
    </li>
  </div>
  <!-- form 1 row -->









</div>
<!-- form 1 section -->
