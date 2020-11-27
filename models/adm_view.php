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

<!-- 주소 -->
<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ) ?>" enctype="multipart/form-data">




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
        <input type="text" name="wr0" value="<?php echo $om_adm_view[0]->wr0; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 1 row -->



    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">Status</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <input type="radio" name="wr35" value="Available" class="om_form1_dir_input_input2" <?php if($om_adm_view[0]->wr35 == 'Available'){ echo 'checked="checked"'; } ?>>Available
        <input type="radio" name="wr35" value="Not Available" class="om_form1_dir_input_input2" <?php if($om_adm_view[0]->wr35 == 'Not Available'){ echo 'checked="checked"'; } ?>>Not Available
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">Job Number</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr37" value="<?php echo $om_adm_view[0]->wr37; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">교육기관명*</a>
      </li>
      <li class="om_form1_dir_input">
        <input type="text" name="wr1" value="<?php echo $om_adm_view[0]->wr1; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">전화번호*</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr2" value="<?php echo $om_adm_view[0]->wr2; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">팩스번호</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr3" value="<?php echo $om_adm_view[0]->wr3; ?>" class="om_form1_dir_input_input">
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
        <input type="text" name="wr4" value="<?php echo $om_adm_view[0]->wr4; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">휴대폰번호</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr5" value="<?php echo $om_adm_view[0]->wr5; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">E-mail*</a>
      </li>
      <li class="om_form1_dir_input">
        <input type="text" name="wr6" value="<?php echo $om_adm_view[0]->wr6; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">기관 주소*</a>
      </li>
      <li class="om_form1_dir_input om_form_juso">
        <input type="text" name="wr7" id="sample3_postcode" placeholder="우편번호" value="<?php echo $om_adm_view[0]->wr7; ?>">
        <input type="button" onclick="sample3_execDaumPostcode()" value="우편번호 찾기"><br>
        <input type="text" name="wr8" id="sample3_address" placeholder="주소" value="<?php echo $om_adm_view[0]->wr8; ?>"><br>
        <input type="text" name="wr9" id="sample3_detailAddress" placeholder="상세주소" value="<?php echo $om_adm_view[0]->wr9; ?>">
        <input type="text" name="wr10" id="sample3_extraAddress" placeholder="참고항목" value="<?php echo $om_adm_view[0]->wr10; ?>">

        <div id="wrap" style="display:none;border:1px solid;width:500px;height:300px;margin:5px 0;position:relative">
        <img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnFoldWrap" style="cursor:pointer;position:absolute;right:0px;top:-1px;z-index:1" onclick="foldDaumPostcode()" alt="접기 버튼">
        </div>
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
        <input type="text" name="wr11" value="<?php echo $om_adm_view[0]->wr11; ?>" class="om_form1_dir_input_input" id="date1">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">Type</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr12" value="<?php echo $om_adm_view[0]->wr12; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">근무 시간</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr13" value="<?php echo $om_adm_view[0]->wr13; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">근무 요일</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr14" value="<?php echo $om_adm_view[0]->wr14; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">월급</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr15" value="<?php echo $om_adm_view[0]->wr15; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">초과근무 수당</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr16" value="<?php echo $om_adm_view[0]->wr16; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">학생 연령층</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr17" value="<?php echo $om_adm_view[0]->wr17; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">수업 인원 수</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr18" value="<?php echo $om_adm_view[0]->wr18; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">수업 시수</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr19" value="<?php echo $om_adm_view[0]->wr19; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">수업 시간</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr20" value="<?php echo $om_adm_view[0]->wr20; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">채용 강사 수</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr21" value="<?php echo $om_adm_view[0]->wr21; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">원어민 강사 수</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr22" value="<?php echo $om_adm_view[0]->wr22; ?>" class="om_form1_dir_input_input">
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
        <input type="text" name="wr23" value="<?php echo $om_adm_view[0]->wr23; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">항공권 제공</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr24" value="<?php echo $om_adm_view[0]->wr24; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">의료보험 제공</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <input type="text" name="wr25" value="<?php echo $om_adm_view[0]->wr25; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">퇴직금 제공</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <input type="text" name="wr26" value="<?php echo $om_adm_view[0]->wr26; ?>" class="om_form1_dir_input_input">
      </li>
    </div>
    <!-- form 2 row -->

    <!-- form 2 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit2">
        <a class="om_form1_dir_tit_a">National Pension</a>
      </li>
      <li class="om_form1_dir_input2 om_form1_radio_text">
        <input type="text" name="wr27" value="<?php echo $om_adm_view[0]->wr27; ?>" class="om_form1_dir_input_input">
      </li>
      <li class="om_form1_dir_tit2 om_f1dt2_right">
        <a class="om_form1_dir_tit_a">유급 휴가</a>
      </li>
      <li class="om_form1_dir_input2">
        <input type="text" name="wr28" value="<?php echo $om_adm_view[0]->wr28; ?>" class="om_form1_dir_input_input">
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
        <textarea name="wr29" style="width: 100%; height: 100px;"><?php echo $om_adm_view[0]->wr29; ?></textarea>
      </li>
    </div>
    <!-- form 1 row -->

    <!-- form 1 row -->
    <div class="om_form1_div_input_row1">
      <li class="om_form1_dir_tit">
        <a class="om_form1_dir_tit_a">Note</a>
      </li>
      <li class="om_form1_dir_input om_form1_radio_text">
        <textarea name="wr36" style="width: 100%; height: 100px;"><?php echo $om_adm_view[0]->wr36; ?></textarea>
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
        (이미지수정)<input type="file" name="file1" value="" class="">
        <input type="hidden" name="wr33" value="<?php echo $om_adm_view[0]->wr33; ?>" class="">
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
        (이미지수정)<input type="file" name="file2" value="" class="">
        <input type="hidden" name="wr34" value="<?php echo $om_adm_view[0]->wr34; ?>" class="">
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


    <input type="hidden" name="anum" value="<?php echo $om_adm_view[0]->anum; ?>">
    <input type="hidden" name="action" value="omnius_adm_up"><?php
    wp_nonce_field( 'omnius_adm_up', 'omnius_adm_up_field' )
    ?>
    <div class="om_form_submit_div">
      <button type="submit" class="om_form_submit" >원어민 강사 구인 수정하기</button>
    </div>

</form>
