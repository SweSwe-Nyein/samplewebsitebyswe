<?php
  displayPageHeader('Home | ' . WEB_NAME);
  displayMainNavigation('home');

  $courses = Course::getAllCourses();
  $books = Book::getAllBooks();
  $blogs = Blog::getAllBlogs();
  $reviews = Review::getAllReviews();
?>

<div class="home-container">
  <div class="home-banner">
    <!-- <img src="" alt=""> -->
    <h1>Myanmar Online Entrepreneur</h1>
  </div>
  <div class="welcome-section">
    <h1>WELCOME TO MOE</h1>
    <p>
      ၆လအတွင်း ရောင်းအား (၂)ဆ တိုးတက်ချင်တဲ့ လုပ်ငန်းရှင်များကို ကူညီပေးနေတဲ့ နေရာလေးပါ။
      သင်တန်းသားပေါင်း ၁၀,၀၀၀ ကျော်သင်ကြားပေးခဲ့ပြီး၊ သင်တန်းသက်တမ်း (၄)နှစ်ကျော်ခဲ့ပါပြီ။
    </p>
    <a href="#">MOE အကြောင်း</a>
  </div>
  <div class="latest-courses">
    <h1>Our Latest Courses</h1>
    <div class="course-flex">
      <?php foreach ($courses as $course): ?>
        <div class="course">
          <img src="https://myanmaronlineentrepreneur.com/wp-content/uploads/2021/07/moe-myanmar-online-entrepreneur.png"/>
          <h2><?php echo $course->getValueEncoded('title') ?></h2>
          <p><?php echo $course->getValueEncoded('content') ?></p>
          <a href="#">Learn More</a>
        </div>
      <?php endforeach; ?>
    </div>
    <a class="more-courses" href="#">More Courses</a>
  </div>

  <div class="latest-books">
    <h1>Our Latest Book</h1>
    <?php foreach ($books as $book): ?>
      <div class="book">
        <img src="<?php echo $book->getValueEncoded('img_link') ?>" alt="">
        <div class="">
          <h2><?php echo $book->getValueEncoded('title') ?></h2>
          <p><?php echo $book->getValueEncoded('content') ?></p>
          <a href="#">Learn More</a>
        </div>
      </div>
    <?php endforeach; ?>
    <a class="more-book" href="#">More Books</a>
  </div>

  <div class="cus-review">
    <h1>Customer's Review</h1>
    <?php foreach ($reviews as $review): ?>
      <div class="review">
        <img src="<?php echo $review->getValueEncoded('img_link') ?>" alt="">
        <div class="">
          <h2><?php echo $review->getValueEncoded('name') ?></h2>
          <p><?php echo $review->getValueEncoded('message') ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="latest-blogs">
    <h1>Our Latest Blogs</h1>
    <div class="blog-flex">
      <?php foreach ($blogs as $blog): ?>
        <div class="blog">
          <img src="<?php echo $blog->getValueEncoded('img_link') ?>" alt="">
          <h2><?php echo $blog->getValueEncoded('title') ?></h2>
          <p><?php echo $blog->getValueEncoded('tag') ?></p>
          <p><?php echo $blog->getValueEncoded('content') ?></p>
          <a href="#">Learn More</a>
        </div>
      <?php endforeach; ?>
    </div>
    <a class="more-blogs" href="#">More Blogs</a>
  </div>
  <div class="register">
    <p>To Enroll Our Free & Paid Courses</p>
    <a class="register-now" href="#">Register Now</a>
  </div>
</div>

<?php
  displayPageFooter();
?>
