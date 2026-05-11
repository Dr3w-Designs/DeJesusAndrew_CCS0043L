<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form - De Jesus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$name = 'Andrew J. De Jesus';
$bday = '2005-04-19';
$nationality = 'Filipino';
$email = 'ajdejesus@fit.edu.ph';
$phone = '+63-9420600001';
$location = 'Sta. Maria, Bulacan, Philippines';
$summary = 'A motivated Information Technology student with hands-on experience in web development, programming, databases, and basic network troubleshooting. Skilled in HTML, CSS, JavaScript, Python, and SQL. Seeking an entry-level IT or web development role.';
$photo = file_exists(__DIR__ . '/photo.jpg') ? 'photo.jpg' : '';
?>

    <main class="container">
    <header class="form-header">
      <div class="brand">
        <div class="logo">📘</div>
        <div>
          <h1>Student Registration Form</h1>
          <p class="subtitle">Fill in the following with your information.</p>
        </div>
      </div>
      <div class="avatar">Image Placeholder</div>
    </header>

    <form class="form" onsubmit="return false;">
      
      <section class="section">
        <h2>Student Information</h2>
        <label>Full Name
          <?php echo $name; ?>
        </label>

        <label>Date of Birth
          <?php echo $bday; ?>
        </label>

        <label>Gender
          <div class="inline">
            <label><input type="radio"> Male</label>
            <label><input type="radio"> Female</label>
          </div>
        </label>

        <label>Nationality
          <?php echo $nationality; ?>
        </label>

        <label>Contact Information
          <?php echo $email; ?>
        </label>
      </section>

      <section class="section">
        <h2>Parent / Guardian Information</h2>
        <label>Parent/Guardian Name(s)
          <input placeholder="Parent name(s)">
        </label>
        <label>Relationship to Student
          <input placeholder="e.g. Mother, Father">
        </label>
        <label>Contact Information (Phone, Email)
          <input placeholder="Parent contact">
        </label>
        <label>Emergency Contact Information
          <input placeholder="Emergency contact">
        </label>
      </section>

      <section class="section">
        <h2>Education Information</h2>
        <label>School / Institution Name
          <input placeholder="School name">
        </label>
        <label>Graduation Date
          <input type="date">
        </label>
        <label>How did you hear about us?
          <input placeholder="e.g. Facebook">
        </label>
        <label>Why are you interested in our program?
          <textarea rows="3" placeholder="Short reason"></textarea>
        </label>
      </section>

      <section class="section small">
        <label class="agree">
          <input type="checkbox"> I agree to the terms and conditions
        </label>
        <label>Signature (type full name)
          <input placeholder="Signature placeholder">
        </label>
      </section>

      <div class="actions">
        <!-- No submission now -->
        <button type="button">Submit Registration</button>
        <button type="reset" class="secondary">Reset</button>
      </div>
    </form>
  </main>
</body>
</html>

