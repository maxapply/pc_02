<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>优贝</title>
  <link rel="stylesheet" href="./css/current.css"> <!-- 初始化 -->
  <link rel="stylesheet" href="./css/index/index.css">
  <link rel="stylesheet" href="./css/swiper.min.css">
  <link rel="stylesheet" href="./css/index/hexagons.css"> <!-- 合作商家 -->

  <script src="./js/swiper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
</head>

<body>


  <!-- 头部 -->
  <?php include './public/header.php'; ?>


  <!-- 版心 swiper -->
  <div class="banner">

    <!-- Swiper -->
    <div class="swiper-container banner_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./image/index/banner_01.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./image/index//banner_02.jpg" alt=""></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

  </div>


  <!-- 导航栏 -->
  <?php include './public/nav.php'; ?>


  <!-- 热门项目 -->
  <div class="project_tit w">
    <div class="project_line"></div>
    <div class="project_txt">
      <p>您想要的•都在这里<span>热门项目</span></p>
    </div>
  </div>

  <!-- 项目 -->
  <div class="project_box w">
    <ul class="project_box_01">
      <li class="project_box_list1">
        <a href="./zzjs.php">
          <img src="./image/icon/xms1.png" alt="">
          <p>All-on-4种植技术<br /><span>一次种植，一生享用</span></p>
        </a>
      </li>
      <li class="project_box_list1">
        <a href="./ysmyx.php">
          <img src="./image/icon/xms2.png" alt="">
          <p>隐适美隐形矫正<br /><span>改变的不只是牙齿，还有脸型</span></p>
        </a>
      </li>
      <li class="project_box_list1">
        <a href="./cbmx.php">
          <img src="./image/icon/xms3.png" alt="">
          <p>3D超薄明星瓷贴面<br /><span>7天拥有明星牙</span></p>
        </a>
      </li>
    </ul>
    <ul class="project_box_02">
      <li class="project_box_list2">
        <a href="./ycmr.php">
          <img src="./image/icon/xms4.png" alt="">
          <p>优贝皓齿美白<br /><span>30分钟拥有炫白美齿</span></p>
        </a>
      </li>
      <li class="project_box_list2">
        <a href="./mrc.php">
          <img src="./image/icon/xms5.png" alt="">
          <p>MRC肌功能矫治器<br /><span>已成功助25万儿童矫正牙齿</span></p>
        </a>
      </li>
      <li class="project_box_list2">
        <a href="./nmsz.php">
          <img src="./image/icon/xms6.png" alt="">
          <p>3M纳米树脂补牙<br /><span>无痛快速 修复性好</span></p>
        </a>
      </li>
      <li class="project_box_list2">
        <a href="./qfwjy.php">
          <img src="./image/icon/xms7.png" alt="">
          <p>360°全方位洁牙<br /><span>让牙齿呼吸新鲜空气</span></p>
        </a>
      </li>
    </ul>
  </div>

  <!-- 医生团队 标题 -->
  <div class="team w">
    <p>医生团队</p>
    <div class="team_line"></div>
    <div class="team_txt">
      <span>Doctor team</span>
    </div>
  </div>

  <!-- 医生团队 盒子 -->
  <div class="team_box w">
    <!-- 左医生列表 -->
    <div class="team_box_fl">
      <ul>
        <li class="grxx">
          <a href="#">
            <img src="./image/index/team_001.png" alt="">
            <p>郭宏伟</p>
            <span>种植牙医生</span>
          </a>
        </li>
        <li class="grxx">
          <a href="#">
            <img src="./image/index/team_002.png" alt="">
            <p>宋铁砾</p>
            <span>种植牙医生</span>
          </a>
        </li>
        <li class="grxx">
          <a href="#">
            <img src="./image/index/team_003.png" alt="">
            <p>王迪</p>
            <span>种植牙医生</span>
          </a>
        </li>

        <li class="grxx">
          <a href="#">
            <img src="./image/index/team_004.png" alt="">
            <p>陈桦</p>
            <span>矫正医生</span>
          </a>
        </li>
        <li class="grxx">
          <a href="#">
            <img style="height: 81px;" src="./image/index/team_005.png" alt="">
            <p>张洪波</p>
            <span>矫正医生</span>
          </a>
        </li>
        <li class="grxx">
          <a class="top_but" href="#">
            点击咨询
          </a>
          <a class="bot_but" href="#">
            在线预约
          </a>

        </li>

        <li class="grxx">
          <a href="#">
            <img src="./image/index/team_006.png" alt="">
            <p>徐涛</p>
            <span>全科医生</span>
          </a>
        </li>
        <li class="grxx">
          <a href="#">
            <img src="./image/index/team_007.png" alt="">
            <p>刘洋</p>
            <span>全科医生</span>
          </a>
        </li>
        <li class="grxx">
          <a href="#">
            <img src="./image/index/team_008.png" alt="">
            <p>刘洋</p>
            <span>儿童齿科</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- 右医生个人信息 -->
    <div class="team_box_fr">

      <div class="team_box01">
        <img src="./image/index/team_01.jpg" alt="">
        <div class="team_js">
          <strong>郭宏伟</strong>
          <br>
          <span>优贝口腔院长</span>
          <ul class="lis">
            <li>口腔种植、正畸学医生</li>
            <li>无痕修复美牙技术首席设计师</li>
            <li>优贝口腔德国卡瓦技术带头人</li>
            <li>中华口腔医学会预防委员会会员</li>
            <li>国际种植牙协会(ITI)会员</li>
          </ul>

        </div>
        <div class="team_sc">
          <strong>擅长:</strong>
          <br>
          <p>口腔美学修复设计，以及全瓷牙和烤瓷牙固定修复、活动义齿修复、牙齿美学修复、精密附着体义齿、复杂牙齿缺失再修复、口腔种植、口腔正畸等。</p>

        </div>
      </div>

      <div class="team_box01">
        <img src="./image/index/team_02.jpg" alt="">
        <div class="team_js">
          <strong>宋铁砾</strong>
          <br>
          <span>优贝口腔特邀口腔种植医师</span>
          <ul class="lis">
            <li>北京大学口腔医学院博士</li>
            <li>北京同仁医院口腔科医生</li>
            <li>口腔医生俞光岩、张建国教授高徒</li>
            <li>优贝口腔德国卡瓦技术委员会委员 </li>
            <li>北京口腔医学会颌面外科专委会委员</li>
          </ul>

        </div>
        <div class="team_sc">
          <strong>擅长:</strong>
          <br>
          <p>牙齿种植、美容修复；口腔颌面外科疾病的诊断治疗，如口腔颌面部各种良恶性肿瘤的综合治疗，颌面部复杂创伤的救治，口腔颌面部先天或后天软硬组织缺损畸形的整复治疗等。</p>

        </div>
      </div>

      <div class="team_box01">
        <img src="./image/index/team_03.jpg" alt="">
        <div class="team_js">
          <strong>王迪</strong>
          <br>
          <span>东城口腔医院院长</span>
          <ul class="lis">
            <li>优贝口腔特邀修复种植医师</li>
            <li>副主任医师</li>
            <li>北京东城区口腔医院院长 </li>
          </ul>

        </div>
        <div class="team_sc"> 
          <strong>擅长:</strong>
          <br>
          <p>牙齿美容修复、种植牙、义齿、牙槽外科、智齿拔除等。</p>

        </div>
      </div>

      <div class="team_box01">
        <img src="./image/index/team_04.jpg" alt="">
        <div class="team_js">
          <strong>陈桦</strong>
          <br>
          <span>正畸科主治医师</span>
          <ul class="lis">
            <li>知名口腔种植医师</li>
            <li>优贝口腔总监级种植医师</li>
            <li>优贝口腔集团副总经理 </li>
            <li>美国Loma Linda University种植硕士大师班毕业 </li>
            <li>AIC国际种植医师协会会员</li>
          </ul>

        </div>
        <div class="team_sc">
          <strong>擅长:</strong>
          <br>
          <p>
            熟练掌握瑞典Nobel，瑞士ITI、德国Ankylos等种植系统。擅长全口疑难疾病的诊疗，具有口腔多学科联合诊疗能力。尤其擅长前牙美学种植、现代微创种植、即刻种植、GBR技术及上颌窦提升术等复杂种植术。能够熟练应用All-On-4种植术重建无牙颌患者的口腔咬合功能。同时在复杂前牙美学修复病例的生物美学设计、前牙3D贴面及
            LAVA 全瓷美学修复方面积累了丰富的经验。</p>

        </div>
      </div>

      <div class="team_box01">
        <img src="./image/index/team_05.jpg" alt="">
        <div class="team_js">
          <strong>张洪波</strong>
          <br>
          <span>主治医师/集团正畸技术总监</span>
          <ul class="lis">
            <li>知名口腔正畸医师 </li>
            <li>优贝口腔总监级正畸医师 </li>
            <li>美国Invisalign隐形矫正认证医师 </li>
            <li>中华口腔医学会口腔正畸专委会委员</li>
          </ul>

        </div>
        <div class="team_sc">
          <strong>擅长:</strong>
          <br>
          <p>MBT矫正技术、自锁矫正技术、隐形矫正技术，MBT矫正技术、自锁矫正技术、invisalign隐形矫正技术</p>

        </div>
      </div>


      <div class="team_box01">
       <div class="img">
         <div class="img_btnbox">
             <a href="#">点击预约</a>
             <a href="#">在线咨询</a>
         </div>

       </div>

     
      </div>

      <div class="team_box01">
        <img src="./image/index/team_06.jpg" alt="">
        <div class="team_js">
          <strong>徐涛</strong>
          <br>&nbsp;

          <ul class="lis">
            <li>北京大学口腔医学院医学硕士</li>
            <li>金牌首席牙周病学医生</li>
            <li>中华口腔医学牙周病学会会员</li>
            <li>美国牙周病学会会员(AAP)</li>
          </ul>

        </div>
        <div class="team_sc">
          <strong>擅长:</strong>
          <br>
          <p>口腔种植，牙周病，牙外伤等口腔综合治疗。</p>

        </div>
      </div>

      <div class="team_box01">
        <img src="./image/index/team_07.jpg" alt="">
        <div class="team_js">
          <strong>刘洋</strong>
          <br>
          <span>主任医师、口腔学国际医生</span>
          <ul class="lis">
            <li>北京大学口腔医学院医学硕士</li>
            <li>优贝口腔特邀医生</li>
            <li>金牌首席口腔根管治疗、口腔修复医生</li>
            <li>北京大学口腔医学院第三门诊部主任</li>
            <li>美国宾夕法尼亚大学牙科学院访问学者</li>
            <li>中华口腔医学会修复专委会委员</li>
          </ul>

        </div>
        <div class="team_sc">
          <strong>擅长:</strong>
          <br>
          <p>显微疑难根管治疗，CEREC椅旁即刻修复，前牙美学设计与修复，在美学失败病例再修复、种植修复、固定修复、可摘局部义齿修复、附着体应用修复、口内牙体牙髓治疗、外科拔牙、综合治疗等领域造诣颇深。</p>

        </div>
      </div>

      <div class="team_box01">
        <img src="./image/index/team_08.jpg" alt="">
        <div class="team_js">
          <strong>张鹏</strong>
          <br>
          <span>金牌首席儿童口腔学医生</span>
          <ul class="lis">
            <li>优贝口腔特邀医生</li>
            <li>北京儿童医院口腔科医生</li>
            <li>国际口腔正畸学会会员</li>
          </ul>

        </div>
        <div class="team_sc">
          <strong>擅长:</strong>
          <br>
          <p>儿童口腔正畸序列治疗、儿童口腔早期肌功能训练治疗、儿童埋伏牙阻生牙的导萌牵引、儿童口腔疾病诊断及治疗方案设计、儿童口腔粘膜病的诊断与治疗等，儿童、成人各类牙颌畸形的矫治及各类复杂疑难病例的矫治。</p>

        </div>
      </div>




    </div>
  </div>

  <!-- 牙齿不齐几多愁 -->
  <div class="img_box w">
    <p>你是否也在为牙齿参差不齐烦恼？</p>
    <p>［牙齿不齐几多愁］</p>
    <ul class="yi">
      <li><img src="./image/index/complex_oral_con01_tooth_01.jpg" alt=""></li>
      <li><img src="./image/index/complex_oral_con01_tooth_03.jpg" alt=""></li>
      <li><img src="./image/index/complex_oral_con01_tooth_05.jpg" alt=""></li>
    </ul>
    <ul class="yi">
      <li><img src="./image/index/complex_oral_con01_tooth_07.jpg" alt=""></li>
      <li><img src="./image/index/complex_oral_con02.jpg" alt=""></li>
      <li><img src="./image/index/complex_oral_con01_tooth_13.jpg" alt=""></li>
    </ul>
    <ul class="yi">
      <li><img src="./image/index/complex_oral_con01_tooth_15.jpg" alt=""></li>
      <li><img src="./image/index/complex_oral_con01_tooth_16.jpg" alt=""></li>
      <li><img src="./image/index/complex_oral_con01_tooth_17.jpg" alt=""></li>
    </ul>
    <div class="but"><a href="#">如果你的牙齿有以上问题，那么是该进行矫正了！</a></div>

  </div>

  <!-- 活动图片 -->
  <div class="gj_box w">
    <p>国际化、高标准、为您的口腔健康保驾护航</p>
    <p>INTERNATIONAL HIGH STANDARD TO PROTECT YOUR HEALTH</p>

    <!-- gj_box swiper -->

    <div id="certify">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="./image/index/zx1.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx3.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx4.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx5.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx7.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx8.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx9.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx10.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx11.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx12.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx13.png" /></div>
          <div class="swiper-slide"><img src="./image/index/zx14.png" /></div>
          <div class="swiper-slide"><img src="./image/index/p6_07.jpg" /></div>
          <div class="swiper-slide"><img src="./image/index/ky.jpg" /></div>
          <div class="swiper-slide"><img src="./image/index/hhkq.jpg" /></div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>

  <!-- 合作商家 -->
  <div class="hz">
    <div class="w">
      <div class="hz_fl">
        <img src="./image/index/hsy_03.jpg" alt="">
      </div>
      <div class="hz_fr">
        <div class="htmleaf-container">
          <ul id="hexGrid">
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/mlzq.jpg" alt="">
                <h1>韩国</h1>
                <p>奥齿泰种植系统</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_03.jpg" alt="">
                <h1>瑞典</h1>
                <p>Nobel种植牙系统</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_06.jpg" alt="">
                <h1>德国</h1>
                <p>ICX种植系统</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_09.jpg" alt="">
                <h1>德国</h1>
                <p>Ankylos种植系统</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_11.jpg" alt="">
                <h1>瑞士</h1>
                <p>ITI种植系统</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_18.jpg" alt="">
                <h1>上海</h1>
                <p>时代天使隐形矫正</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_20.jpg" alt="">
                <h1>深圳</h1>
                <p>美加超薄瓷贴面</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_23.jpg" alt="">
                <h1>德国</h1>
                <p>诺亚丹种植系统</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_26.jpg" alt="">
                <h1>美国</h1>
                <p>3M纳米树脂补牙</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_32.jpg" alt="">
                <h1>美国</h1>
                <p>3I种植系统</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_35.jpg" alt="">
                <h1>美国</h1>
                <p>百康种植体</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_37.jpg" alt="">
                <h1>美国</h1>
                <p>隐适美隐形矫正</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_35.jpg" alt="">
                <h1>美国</h1>
                <p>百康种植体</p>
              </a>
            </li>
            <li class="hex">
              <a class="hexIn" href="#">
                <img src="./image/index/tp_37.jpg" alt="">
                <h1>美国</h1>
                <p>隐适美隐形矫正</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- 底部栏 -->
  <?php include './public/bottom.php'; ?>


  <!-- nav swiper 插件 -->
  <script>
    var swiper = new Swiper('.banner_swiper', {
      spaceBetween: 30,
      centeredSlides: true,
      speed: 2500,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

  <!--  国际化swiper  -->
  <script>
    var certifySwiper = new Swiper('#certify .swiper-container', {
      watchSlidesProgress: true,
      slidesPerView: 'auto',
      centeredSlides: true,
      loop: true,
      autoplay: true,
      loopedSlides: 5,
      autoplay: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        //clickable :true,
      },
      on: {
        progress: function (progress) {
          for (i = 0; i < this.slides.length; i++) {
            var slide = this.slides.eq(i);
            var slideProgress = this.slides[i].progress;
            modify = 1;
            if (Math.abs(slideProgress) > 1) {
              modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
            }
            translate = slideProgress * modify * 260 + 'px';
            scale = 1 - Math.abs(slideProgress) / 5;
            zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
            slide.transform('translateX(' + translate + ') scale(' + scale + ')');
            slide.css('zIndex', zIndex);
            slide.css('opacity', 1);
            if (Math.abs(slideProgress) > 3) {
              slide.css('opacity', 0);
            }
          }
        },
        setTransition: function (transition) {
          for (var i = 0; i < this.slides.length; i++) {
            var slide = this.slides.eq(i)
            slide.transition(transition);
          }

        }
      }

    })

    /** 鼠标移入 医生团队 
     *  控制右侧照片 显隐 医生详情
     *  控制当前 li 文字颜色
     *  控制当前元素  其他兄弟元素颜色为默认色
    */
    $('.grxx').hover(function () {
      var index = $(this).index()
      $('.team_box01').eq(index).stop().fadeIn(1000).siblings('.team_box01').stop().fadeOut()
      $(this).find('a>p').css('color','#1AAB8A').siblings('span').css('color','#1AAB8A')
      $(this).siblings().find('a>p').css('color','').siblings('span').css('color','')
    }, function () {
    })
  </script>

</body>

</html>