<?php
  displayPageHeader('Courses | ' . WEB_NAME);
  displayMainNavigation('courses');

  $courses = Course::getAllCourses();
?>

<div class="course-container">
  <div class="">
    <div class="course-banner">
      <h1>Our Courses</h1>
      <p>You can learn every where and every time!</p>
    </div>
    <div class="course-wrap">
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
      <a href="#">More Courses</a>
  </div>
  </div>
</div>

<?php
  displayPageFooter();
?>
