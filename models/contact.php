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

<!-- 주소 -->
<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ) ?>" enctype="multipart/form-data">




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
        <input type="text" name="wr1" value="" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">* Last Name</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr2" value="" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">* Nationality</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr3" value="" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">* Current Location</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr4" value="" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">* Date of Birth</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr5" value="" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">* Gender</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <input type="radio" name="wr6" value="Male" class="om_form1_dir_input_input2">Male
        <input type="radio" name="wr6" value="Female" class="om_form1_dir_input_input2">Female
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">* Phone</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr7" value="" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">* Email</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr8" value="" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">* Skype ID</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr9" value="" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">* Available Start Date</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <input type="radio" name="wr10" value="Flexible" class="om_form1_dir_input_input2">Flexible
        <input type="radio" name="wr10" value="Fixed" class="om_form1_dir_input_input2">Fixed
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
          <td><input type="text" name="wr11" value="" class="om_form1_dir_input_input"></td>
          <td><input type="text" name="wr12" value="" class="om_form1_dir_input_input"></td>
          <td><input type="checkbox" name="wr13" value="Completed" class="om_form1_dir_input_input2">Completed
          <input type="checkbox" name="wr13" value="In Progress" class="om_form1_dir_input_input2">In Progress</td>
        </tr>
        <tr>
          <th>Master's Degree</th>
          <td><input type="text" name="wr14" value="" class="om_form1_dir_input_input"></td>
          <td><input type="text" name="wr15" value="" class="om_form1_dir_input_input"></td>
          <td><input type="checkbox" name="wr16" value="Completed" class="om_form1_dir_input_input2">Completed
          <input type="checkbox" name="wr16" value="In Progress" class="om_form1_dir_input_input2">In Progress</td>
        </tr>
        <tr>
          <th colspan="3">Do you have any teaching certificates (e.g. TEFL, TESOL, CELTA)?</th>
          <td><input type="checkbox" name="wr17" value="Yes" class="om_form1_dir_input_input2">Yes
          <input type="checkbox" name="wr17" value="No" class="om_form1_dir_input_input2">No</td>
        </tr>
        <tr>
          <th colspan="3">If yes, what is the certificate?</th>
          <td><input type="text" name="wr18" value="" class="om_form1_dir_input_input"></td>
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
          <td><input type="checkbox" name="wr19" value="Yes" class="om_form1_dir_input_input2">Yes
          <input type="checkbox" name="wr19" value="No" class="om_form1_dir_input_input2">No</td>
        </tr>
        <tr>
          <th>Have you taught in Korea or abroad before?</th>
          <td><input type="checkbox" name="wr20" value="Yes" class="om_form1_dir_input_input2">Yes
          <input type="checkbox" name="wr20" value="No" class="om_form1_dir_input_input2">No</td>
        </tr>
        <tr>
          <th>Do you have any medical problems that an employer should know?</th>
          <td><input type="checkbox" name="wr21" value="Yes" class="om_form1_dir_input_input2">Yes
          <input type="checkbox" name="wr21" value="No" class="om_form1_dir_input_input2">No</td>
        </tr>
        <tr>
          <th>Have you ever been convicted of a criminal offence?</th>
          <td><input type="checkbox" name="wr22" value="Yes" class="om_form1_dir_input_input2">Yes
          <input type="checkbox" name="wr22" value="No" class="om_form1_dir_input_input2">No</td>
        </tr>
        <tr>
          <th>Do you have a current Korean visa? If yes, what type?</th>
          <td><input type="checkbox" name="wr23" value="E2" class="om_form1_dir_input_input2">E2
          <input type="checkbox" name="wr23" value="F4" class="om_form1_dir_input_input2">F4
          <input type="checkbox" name="wr23" value="F6" class="om_form1_dir_input_input2">F6
          <input type="checkbox" name="wr23" value="None" class="om_form1_dir_input_input2">None
          <input type="checkbox" name="wr23" value="Others" class="om_form1_dir_input_input2">Others</td>
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
        1st desire <input type="text" name="wr24" value="" class="om_form1_dir_input_input2">
        2nd desire <input type="text" name="wr25" value="" class="om_form1_dir_input_input2">
      </li>
    </div>
    <!-- form 1 row -->


    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">Preferred student age</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <input type="checkbox" name="wr26" value="Kindergarten" class="om_form1_dir_input_input2">Kindergarten
        <input type="checkbox" name="wr26" value="Elementary school" class="om_form1_dir_input_input2">Elementary school
        <input type="checkbox" name="wr26" value="Middle school" class="om_form1_dir_input_input2">Middle school
        <input type="checkbox" name="wr26" value="High school ~ Adult" class="om_form1_dir_input_input2">High school ~ Adult

      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">Preferred working hours</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <input type="checkbox" name="wr27" value="Daytime" class="om_form1_dir_input_input2">Daytime shift
        <input type="checkbox" name="wr27" value="Afternoon shift" class="om_form1_dir_input_input2">Afternoon shift

      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">Housing Type</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <input type="checkbox" name="wr28" value="No preference" class="om_form1_dir_input_input2">No preference
        <input type="checkbox" name="wr28" value="Single Studio" class="om_form1_dir_input_input2">Single studio
        <input type="checkbox" name="wr28" value="Shared apartment" class="om_form1_dir_input_input2">Shared apartment
        <input type="checkbox" name="wr28" value="Housing allowance" class="om_form1_dir_input_input2">Housing allowance

      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">Expected Salary</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <input type="text" name="wr29" value="" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 1 row -->



    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">Resume Upload</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <input type="file" name="file1" value="" class="">
      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">Recent Photo Upload</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <input type="file" name="file2" value="" class="">
      </li>
    </div>
    <!-- form 1 row -->









  </div>
  <!-- form 1 section -->































<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
// 우편번호 찾기 찾기 화면을 넣을 element
var element_wrap = document.getElementById("wrap");

function foldDaumPostcode() {
// iframe을 넣은 element를 안보이게 한다.
element_wrap.style.display = "none";
}

function sample3_execDaumPostcode() {
// 현재 scroll 위치를 저장해놓는다.
var currentScroll = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
new daum.Postcode({
    oncomplete: function(data) {
        // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

        // 각 주소의 노출 규칙에 따라 주소를 조합한다.
        // 내려오는 변수가 값이 없는 경우엔 공백("")값을 가지므로, 이를 참고하여 분기 한다.
        var addr = ""; // 주소 변수
        var extraAddr = ""; // 참고항목 변수

        //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
        if (data.userSelectedType === "R") { // 사용자가 도로명 주소를 선택했을 경우
            addr = data.roadAddress;
        } else { // 사용자가 지번 주소를 선택했을 경우(J)
            addr = data.jibunAddress;
        }

        // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
        if(data.userSelectedType === "R"){
            // 법정동명이 있을 경우 추가한다. (법정리는 제외)
            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
            if(data.bname !== "" && /[동|로|가]$/g.test(data.bname)){
                extraAddr += data.bname;
            }
            // 건물명이 있고, 공동주택일 경우 추가한다.
            if(data.buildingName !== "" && data.apartment === "Y"){
                extraAddr += (extraAddr !== "" ? ", " + data.buildingName : data.buildingName);
            }
            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
            if(extraAddr !== ""){
                extraAddr = " (" + extraAddr + ")";
            }
            // 조합된 참고항목을 해당 필드에 넣는다.
            document.getElementById("sample3_extraAddress").value = extraAddr;

        } else {
            document.getElementById("sample3_extraAddress").value = "";
        }

        // 우편번호와 주소 정보를 해당 필드에 넣는다.
        document.getElementById("sample3_postcode").value = data.zonecode;
        document.getElementById("sample3_address").value = addr;
        // 커서를 상세주소 필드로 이동한다.
        document.getElementById("sample3_detailAddress").focus();

        // iframe을 넣은 element를 안보이게 한다.
        // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
        element_wrap.style.display = "none";

        // 우편번호 찾기 화면이 보이기 이전으로 scroll 위치를 되돌린다.
        document.body.scrollTop = currentScroll;
    },
    // 우편번호 찾기 화면 크기가 조정되었을때 실행할 코드를 작성하는 부분. iframe을 넣은 element의 높이값을 조정한다.
    onresize : function(size) {
        element_wrap.style.height = size.height+"px";
    },
    width : "100%",
    height : "100%"
}).embed(element_wrap);

// iframe을 넣은 element를 보이게 한다.
element_wrap.style.display = "block";
}
</script>
<!-- 주소 -->



    <input type="hidden" name="action" value="omnius_apply"><?php
    wp_nonce_field( 'omnius_apply', 'omnius_apply_field' )
    ?>
    <div class="om_form_submit_div">
      <input type="submit" value="SUBMIT YOUR APPLICATION" class="om_form_submit">
    </div>

</form>
