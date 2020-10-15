
<link rel="stylesheet" href="../css/bottom.css">

<!-- 底部栏 -->
<div class="but">
    <div class="w">
      <!-- 左盒子 -->
      <div class="but_boxfl">

        <div class="but_tit">
          <p>优贝☐腔服务项目</p>
        </div>

        <div class="but_fl">

          <!-- 项目列表 -->
          <ul class="but_ul">
            <li class="but_li">
              <a href="#" class="but_a">+ 种植牙</a>
              <ul class="but_list">
                <li><a href="#">All On 4</a></li>
                <li><a href="#">即刻种牙</a></li>
                <li><a href="#">微创种植牙</a></li>
                <li><a href="#">ICX种植牙</a></li>
                <li><a href="#">Hiossen种植牙</a></li>
              </ul>
            </li>
            <li class="but_li">
              <a href="#" class="but_a">+ 时代天使</a>
              <ul class="but_list">
                <li><a href="#">隐适美矫正</a></li>
                <li><a href="#">四大矫正技术</a></li>
                <li><a href="#">MRC儿童矫正</a></li>
                <li><a href="#">隐形矫正</a></li>
              </ul>
            </li>
            <li class="but_li">
              <a href="#" class="but_a">+ 美牙冠</a>
              <ul class="but_list">
                <li style=" line-height: 50px;"><a href="#">烤瓷牙</a></li>
                <li style=" line-height: 50px;"><a href="#">皓齿美白</a></li>
                <li style=" line-height: 50px;"><a href="#">3D瓷贴面</a></li>
              </ul>
            </li>
            <li class="but_li">
              <a href="#" class="but_a">+ 烤瓷牙</a>
              <ul class="but_list">
                <li><a href="#">牙齿松动</a></li>
                <li><a href="#">根管治疗</a></li>
                <li><a href="#">补牙</a></li>
                <li><a href="#">微创无痛拔牙</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="but_fr">

        </div>


      </div>


      <!-- 中盒子 -->
      <div class="but_con">
        <p>网站内容申明：本网站信息仅供参考，不能作为诊疗及医疗依据，就诊请遵医嘱！</p>
        <p>部分图片来源网络，不做商业用途，如有侵权请联系删除</p>
        <p>版权所有：北京优贝口腔门诊部 客服电话010-80111909</p>
        <p>备案号：京ICP备17039954号-1</p>
        <p>【昌平旗舰店】北京市昌平区南环中路24号</p>



      </div>
      <!-- 右盒子 -->
      <div class="but_boxfr">
        <img src="./image/index/liansuo.png" alt="">
      </div>

    </div>

</div>




<!-- 弹出层 -->
<div class="pop_up">
  <div class="pop_top">
    <img src="../image/tc1.jpg" alt=""><i class="x"></i>
  </div>
  <div class="pop_bot">
    <form action='#' method='post'>
      <div class="pop_botfl">
        <span>姓名</span><input id="name" type="text"/>
        <p id="nameNo">姓名输入有误</p>
      </div>
    
     
      <div class="pop_botfl">
        <span>手机号</span><input id="ptoto" type="text"/>
        <p id="photoNo">手机号输入有误</p>

      </div>
      <a href="#" class="pop_botfr btn">点击预约</a>
    </form>
  </div>
</div>



<script>
  // 底部服务项目栏切换
  $('.but_li').hover(function () {
    var index = $(this).index()
    $(this).children('.but_list').stop().slideDown()
    $(this).siblings()
  }, function () {
    $(this).children('.but_list').stop().slideUp()
  })

  // 关闭弹窗
  $('.x').click(function(){
    $('.pop_up').slideUp(700)
  })


  $(window).on('load',function(){
    $('.pop_up').slideDown(700)
  })


  // 用户名验证
  $('#name').blur(function(){
    if(/^([\u4e00-\u9fa5]){2,5}$/.test(this.value)){  
          $('#nameNo').slideUp(1000)
        }else {
          $('#nameNo').slideDown(1000)
        }
  })

  // 手机号验证
  $('#ptoto').blur(function(){
    if(!(/^1[3456789]\d{9}$/.test(this.value))){ 
      $('#photoNo').slideDown(1000)
      }else {
        $('#photoNo').slideUp(1000)
      }
  })

  $('.btn').click(function(){
    $('.pop_up').slideUp(700)
  })


  








</script>