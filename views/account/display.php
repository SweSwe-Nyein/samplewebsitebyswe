<?php
  displayPageHeader('Account | ' . WEB_NAME);
  displayMainNavigation('account');

  $student = Account::getStudentAccountById(1);
?>

<div class="account-container">
  <h1>My Profile</h1>
  <div class="profile">
    <img src="https://mmfreelancehub.com/uploads/photos/14004/27908387_410639089377096_2604105676501383520_o.jpg" alt="">
    <a href="#">Edit Profile</a>
    <div class="courses-list">
      <div class="list-container">
        <div class="">
          <span><?php echo $student->getValue('courses') ?></span>
          <span>Enrolled Courses</span>
        </div>
      </div>
      <div class="list-container">
        <div class="">
          <span><?php echo $student->getValue('completed') ?></span>
          <span>Completed Courses</span>
        </div>
      </div>
      <div class="list-container">
        <div class="">
          <span><?php echo $student->getValue('certificates') ?></span>
          <span>Certificates</span>
        </div>
      </div>
      <div class="list-container">
        <div class="">
          <span><?php echo $student->getValue('points') ?></span>
          <span>Points you get</span>
        </div>
      </div>
    </div>
  </div>

  <div class="your-courses">
    <h1>Account Information</h1>
    <p>Hello Swe Swe Nyein ( not Swe Swe Nyein? <a href="#">Log out</a> )</p>
    <p>
      From your account <a href="#">dashboard</a> you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.
    </p>
  </div>
</div>

<?php
  displayPageFooter();
?>
