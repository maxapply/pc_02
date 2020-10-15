<link rel="stylesheet" href="../css/fl_nav.css"> <!-- 左侧导航栏 -->

<div class='card-holder'>
  <div class='card-wrapper card_01'>
    <a href='#'>
      <div class='card bg-01'>
        <span class='card-content'>缺牙危害</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper card_02'>
    <a href='#'>
      <div class='card bg-02'>
        <span class='card-content'>技术对比</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper card_06'>
    <a href='#'>
      <div class='card bg-06'>
        <span class='card-content'>四大优势</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper card_04'>
    <a href='#'>
      <div class='card bg-04'>
        <span class='card-content'>四大保障</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper card_03'>
    <a href='#'>
      <div class='card bg-03'>
        <span class='card-content'>适用人群</span>
      </div>
    </a>
  </div>

  <div class='card-wrapper card_05'>
    <a href='#'>
      <div class='card bg-05'>
        <span class='card-content'>医生介绍</span>
      </div>
    </a>
  </div>

</div>

<script>
  
  $(function(){
    function showBox(){
      // 显示电梯导航
    if($(document).scrollTop()>=$('.project_nav').offset().top){
        $('.card-holder').fadeIn()
      }else {
        $('.card-holder').fadeOut()
      }
  }
  
    showBox()
  
    // 滚动的时候显示电梯导航
    $(window).scroll(function(){
      showBox()

      // // // 滚动时  给电梯 楼层1 添加类名 
      //  if($(document).scrollTop()>= $('.con_01>.heading').offset().top){
      //     $('.bg-01').addClass('article').parents('.card-wrapper').siblings('.card-wrapper').find('.card').removeClass('article')
      //   }
      // // // 滚动时  给电梯 楼层2 添加类名 
      //  if($(document).scrollTop()>= $('.jsdb').offset().top){
      //     $('.bg-02').addClass('article').parents('.card-wrapper').siblings('.card-wrapper').find('.card').removeClass('article')
      //   }
      // // // 滚动时  给电梯 楼层3 添加类名 
      //  if($(document).scrollTop()>= $('.shrq').offset().top){
      //     $('.bg-03').addClass('article').parents('.card-wrapper').siblings('.card-wrapper').find('.card').removeClass('article')
      //   }
      // // // 滚动时  给电梯 楼层4 添加类名 
      //  if($(document).scrollTop()>= $('.jsbz').offset().top){
      //    console.log(1);
      //     $('.bg-04').addClass('article').parents('.card-wrapper').siblings('.card-wrapper').find('.card').removeClass('article')
      //   }
      // // // 滚动时  给电梯 楼层5 添加类名 
      //  if($(document).scrollTop()>= $('.swiper_box').offset().top){
      //     $('.bg-05').addClass('article').parents('.card-wrapper').siblings('.card-wrapper').find('.card').removeClass('article')
      //   }
      // // // 滚动时  给电梯 楼层6 添加类名 
      //  if($(document).scrollTop()>= $('.sdys').offset().top){
      //     $('.bg-06').addClass('article').parents('.card-wrapper').siblings('.card-wrapper').find('.card').removeClass('article')
      //   }
        
    })
   // 点击第一个
    $('.card_01').click(function(){
      var zhi = $('.con_01>.heading').offset().top
      $('body,html').animate({
        scrollTop : zhi
      })
    })
  // 点击第二个
    $('.card_02').click(function(){
      var zhi = $('.jsdb').offset().top
      $('body,html').animate({
        scrollTop : zhi
      })
    })

    // 点击第三个
    $('.card_03').click(function(){
      var zhi = $('.shrq').offset().top
      $('body,html').animate({
        scrollTop : zhi
      })
    })
  // 点击第四个
    $('.card_04').click(function(){
      var zhi = $('.jsbz').offset().top
      $('body,html').animate({
        scrollTop : zhi
      })
    })
  // 点击第五个
    $('.card_05').click(function(){
      var zhi = $('.swiper_box').offset().top
      $('body,html').animate({
        scrollTop : zhi
      })
    })

      // 点击第六个
    $('.card_06').click(function(){
      var zhi = $('.sdys').offset().top
      $('body,html').animate({
        scrollTop : zhi
      })
    })

   

   

  })





</script>