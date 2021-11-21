<?php
function displayPageHeader($page_title, $dir_level=false)
{?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $page_title ?></title>
      <link rel="stylesheet" href="<?php echo FILE_URL ?>/styles/reset.css">
      <link rel="stylesheet" href="<?php echo FILE_URL ?>/styles/<?php echo $dir_level ? '' : 'config.css'?>">
      <script type="text/javascript" src="<?php echo FILE_URL ?>/scripts/jquery.js"></script>
      <script src="https://kit.fontawesome.com/261d0ecf68.js" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Montserrat:wght@300&family=Sacramento&display=swap" rel="stylesheet">
      <script>
        var PAGE_URL = '<?php echo URL ?>';
        var PAGE_FILE_URL = '<?php echo FILE_URL ?>';
      </script>
    </head>
    <body>
      <div class="loader"></div>
  <?php
}

function displayMainNavigation($active_page='')
{
?>
    <header class="">
      <div class="header-container">
        <div class="header-logo">
          <a href="<?php echo URL ?>/"><img src="https://myanmaronlineentrepreneur.com/wp-content/uploads/2021/07/moe-myanmar-online-entrepreneur.png"/></a>
        </div>
        <div class="header-menu">
          <ul>
            <li class="<?php echo ($active_page == 'home') ? "active" : "" ?>">
              <a <?php echo ($active_page == 'home') ? '' : 'href="' . URL . '/home/"' ?> class="menu-list">Home</a>
            </li>
            <li class="<?php echo ($active_page == 'about') ? "active" : "" ?>">
              <a <?php echo ($active_page == 'about') ? '' : 'href="' . URL . '/about/"' ?> class="menu-list">About</a>
            </li>
            <li class="<?php echo ($active_page == 'courses') ? "active" : "" ?>">
              <a <?php echo ($active_page == 'courses') ? '' : 'href="' . URL . '/courses/"' ?> class="menu-list">Courses</a>
            </li>
            <li class="<?php echo ($active_page == 'contact') ? "active" : "" ?>">
              <a <?php echo ($active_page == 'contact') ? '' : 'href="' . URL . '/contact/"' ?> class="menu-list">Contact</a>
            </li>
            <li class="<?php echo ($active_page == 'account') ? "active" : "" ?>">
              <a <?php echo ($active_page == 'account') ? '' : 'href="' . URL . '/account/"' ?> class="menu-list">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
  <?php
}

function displayPageFooter()
{?>
    <footer>
      <div class="footer-container">
        <div class="footer-support">
          <h1>Support Menu</h1>
          <ul>
            <li><a href="#">About Moe</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Terms & Condition</a></li>
          </ul>
        </div>
        <div class="footer-recent">
          <h1>Recent Blogs</h1>
          <ul>
            <li><a href="#">Channel Management – ဝယ်သူသို့ရောက်မည့် လမ်းကြောင်းကို စီမံခန့်ခွဲခြင်း</a></li>
            <li><a href="#">Market Segmentation – ဈေးကွက်၏ ပိုင်းခြားသတ်မှတ် ခြားနားချက်မျာ</a>Market Segmentation – ဈေးကွက်၏ ပိုင်းခြားသတ်မှတ် ခြားနားချက်များ</li>
            <li><a href="#">စိတ်ဓာတ်ကြံ့ခိုင်သော စွန့်ဦးတီထွင်သူတွေ ရှောင်ရှားတဲ့ အလေ့အကျင့် ၁၀ ခု</a></li>
            <li><a href="#">Facebook မှာ အရင်ကလောက် like တွေမရတော့ဘူး ဖြစ်နေပါသလား?</a></li>
            <li><a href="#">Online စီးပွားရေးတစ်ခု စတဲ့အချိန်မှာ သတိထားရှောင်ရှားသင့်တဲ့အမှား (၁၀) ခု</a></li>
          </ul>
        </div>
        <div class="footer-contact">
          <h1>Contact Information</h1>
          <ul>
            <li>
              <span></span>
              <h2>Address</h2>
              <p>No. 1186, Pin Lon Road, North-Dagon Township, Yangon</p>
            </li>
            <li>
              <span></span>
              <h2>Phone Number</h2>
              <p>(+95) 09 880 578482</p>
            </li>
            <li>
              <span></span>
              <h2>E-Mail Address</h2>
              <p>moeonlinetraining@gmail.com</p>
              <p>support@myanmaronlineentrepreneur.com</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
      <div class="copyright">
        <span>© Myanmar Online Entrepreneur. 2021 All Right Reserved. Powered by MISL.</span>
      </div>
    </footer>
    <script type="text/javascript" src="<?php echo FILE_URL ?>/scripts/swe.js"></script>
  </body>
</html>
  <?php
}

 ?>
