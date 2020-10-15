<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>自助预约-北京优贝口腔</title>
    <link rel="stylesheet" href="./css/current.css"> <!-- 初始化 -->
    <link rel="stylesheet" href="./css/zzyy/zzyy.css"> 

    <script src="./js/jquery-3.5.1.min.js"></script>
</head>
<body>

  <!-- 头部 -->
  <?php include './public/header.php'; ?>


  <!-- 导航栏 -->
  <?php include './public/nav.php'; ?>

  <div class="con">
    <img src="./image/zizhu.png" alt="">

    <div class="box">
      <form action='#' method='post'>
        <ul>
          <li>
            <span>您的姓氏</span><input  name="" id="name" placeholder="您的姓氏" type="text">
            <span class="ts success" id="nameNo" >姓名输入有误</span>
            <span class="ts current" id="nameYes"  >姓名输入正确</span>
          </li>
          <li><span>称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;谓</span>
              <div class="radio">
                <input type="radio" id="gender" name="gender"  value="先生" checked /><span>先生</span>
                <input type="radio" id="gender" name="gender"  value="女士" /><span>女士</span>
              </div>
          </li>
          <li>
            <span>您的年龄</span><input onkeyup = "value=value.replace(/[^\d]/g,'')"  name="" id="age" placeholder="您的年龄" type="text">
            <span class="ts success" id="ageNo" >请输入有效的年龄</span>
            <span class="ts current" id="ageYes" >您的年龄已输入</span>
          </li>
          <li>
            <span>手机号码</span><input  name="" id="photo" placeholder="您的手机号码" type="text">
            <span class="ts success"  id="no" >手机号码有误，请重填</span>
            <span class="ts current"  id="yes"  >手机号码输入正确</span>
          </li>
          <li><span>预约项目</span>
          <select id="jzxm">
              <option value="选择就诊项目">请选择就诊项目</option>
              <option value="种植牙">种植牙</option>
              <option value="牙齿矫正">牙齿矫正</option>
              <option value="牙齿不齐">牙齿不齐</option>
              <option value="烤齿牙">烤齿牙</option>
              <option value="牙齿缺失">牙齿缺失</option>
              <option value="牙痛">牙痛</option>
              <option value="补牙">补牙</option>
              <option value="拔牙">拔牙</option>
              <option value="治疗">治疗</option>
              <option value="洗牙">洗牙</option>
              <option value="智齿">智齿</option>
              <option value="复诊">复诊</option>
            </select>
            <span class="ts success"  id="jzno" >请选择就诊项目</span>
            <span class="ts current"  id="jzYes"  >就诊项目已选择</span>
          </li>
          <li><span>预约时间</span>
            <input  name="" id="date" placeholder="预约时间" type="date">
            <span class="ts success" id="dateNo" >请选择预约时间</span>
            <span class="ts current" id="dateYes" >预约时间已选择</span>
          </li>
        </ul>
      </form>

      <a href="javascript:;" id="btn">我要预约</input></a>
      <div class="code">
        <img src="./image/erweima.png" alt="">
        <p>添加医生微信号</p>
        <p>ybkq0000</p>
      </div>
    </div>

  </div>

  <!-- 填写错误提示 -->
  <div class="tsk" >
    <p><span id="span">姓名</span>填写有误</p>
    <p>请重新填写</p>
    <button id="right" class="blue">确认</button>
  </div>






  <!-- 底部栏 -->
  <?php include './public/bottom.php'?>

  <script>
    // 用户名验证
    $('#name').blur(function(){

      if(/^([\u4e00-\u9fa5]){2,5}$/.test(this.value)){  
            $(this).removeClass('noFocus')

            $('#nameYes').slideDown(1000)
            $('#nameNo').slideUp(1000)
          }else {
            $(this).addClass('noFocus')
            $('#nameYes').slideUp(1000)
            $('#nameNo').slideDown(1000)
          }
    })

    // 您的年龄
    $('#age').blur(function(){
      var val = this.value.trim()
      if(val==''){
        $(this).addClass('noFocus')
        
        $('#ageNo').slideDown(1000)
        $('#ageYes').slideUp(1000)
      }else if(val>100){
        $(this).addClass('noFocus')
        $('#ageNo').slideDown(1000)
        $('#ageYes').slideUp(1000)
      }else{
        $(this).removeClass('noFocus')
        $('#ageNo').slideUp(1000)
        $('#ageYes').slideDown(1000)
      }
    })

    // 手机号验证
    $('#photo').blur(function(){
      if(!(/^1[3456789]\d{9}$/.test(this.value))){ 
        $(this).addClass('noFocus')
        $('#yes').slideUp(1000)
        $('#no').slideDown(1000)
        }else {
          $(this).removeClass('noFocus')
          $('#yes').slideDown(1000)
          $('#no').slideUp(1000)
        }
    })

    // 就诊项目
    $('#jzxm').blur(function(){
      if(jzxm.value == '选择就诊项目') {
        $(this).addClass('noFocus')
        $('#jzYes').slideUp(1000)
        $('#jzno').slideDown(1000)
  
      }else {
        $(this).removeClass('noFocus')
        $('#jzYes').slideDown(1000)
        $('#jzno').slideUp(1000)
      }
    })

    // 预约时间
    $('#date').blur(function(){
      if(this.value=='') {
        $(this).addClass('noFocus')
        $('#dateYes').slideUp(1000)
        $('#dateNo').slideDown(1000)
      }else {
        $(this).removeClass('noFocus')
        $('#dateYes').slideDown(1000)
        $('#dateNo').slideUp(1000)
      }
    })

    // 点击预约进行验证
    var btn = document.getElementById('btn')
    btn.addEventListener('click',function(){
      var shyfsz = $('input[name="gender"]:checked').val() // 获取用户已选称谓

      console.log(shyfsz);

        if($('#nameYes').is(':hidden')){
          //如果隐藏时。。。
          $('.tsk').fadeIn()
        }else if($('#ageYes').is(':hidden')){
          $('#span').text('您的年龄')
          $('.tsk').fadeIn()
        }else if($('#yes').is(':hidden')){
          $('#span').text('手机号码')
          $('.tsk').fadeIn()
        }else if($('#jzYes').is(':hidden')){
          $('#span').text('就诊项目')
          $('.tsk').fadeIn()
        }else if($('#dateYes').is(':hidden')){
          $('#span').text('预约时间')
          $('.tsk').fadeIn()
        }else {
          alert('输入正确')
        }
    })
    /*
    * 点击错误提示按钮
    * 关闭当前弹框
    */
    $('.blue').click(function(){
      $('.tsk').fadeOut()
    })
</script>




</body>
</html>