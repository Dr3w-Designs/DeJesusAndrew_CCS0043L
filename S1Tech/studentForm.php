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
// STUDENT INFO
$name = 'Andrew J. De Jesus';
$bday = '2005-04-19';
$age = '21';
$gender = 'Male';
$nationality = 'Filipino';
$contact_info = 'ajdejesus@fit.edu.ph';

// PARENT / GUARDIAN INFO
$parent_name = 'Khristine De Jesus';
$relationship = 'Mother';
$parent_contact = '+63-9171435432';
$emergency_contact = '+63-9700001433';

// EDUCATIONAL BACKGROUND
$school_name = 'Integrated School of Montessori, Inc.';
$graduation_date = '2024-05-15';
$heard_from = 'Through a friend who is also interested in the program.';
$why_interested = 'I am interested in this program to further enhance my technical skills and pursue a career in web development.';

// AGREEMENT & SIGN
$agree = true;
$signature = 'Andrew J. De Jesus';

// IMAGES
$FIT_Logo = file_exists(__DIR__ . '/FEU_TECH_LOGO.jpeg') ? 'FEU_TECH_LOGO.jpeg' : '';
$photo = file_exists(__DIR__ . '/photo.jpg') ? 'photo.jpg' : '';
?>

    <main class="container">
    <header class="form-header">
      <div class="brand">
        <div class="logo">
          <?php if ($FIT_Logo): ?>
            <img src="<?php echo $FIT_Logo; ?>" alt="FEU Tech Logo" style="max-width:60px; max-height:60px;">
          <?php else: ?>
            <span style="font-size:40px;">🎓</span>
          <?php endif; ?>
        </div>
        <div>
          <h1>Student Registration Form</h1>
          <p class="subtitle">Far Eastern University - Institute of Technology</p>
        </div>
      </div>
      <div class="avatar">
        <?php if ($photo): ?>
          <img src="<?php echo $photo; ?>" alt="Student Photo" style="width:100%; height:100%; object-fit:cover;">
        <?php else: ?>
          <span style="display:flex;align-items:center;justify-content:center;height:100%;font-size:40px;">👤</span>
        <?php endif; ?>
      </div>
    </header>

    <form class="form" onsubmit="return false;">
      
      <section class="section">
        <h2>Student Information</h2>
        <label>Full Name
          <div class="field-display"><?php echo $name; ?></div>
        </label>

        <label>Date of Birth
          <div class="field-display"><?php echo $bday; ?></div>
        </label>

        <label>Age
          <div class="field-display"><?php echo $age; ?></div>
        </label>

        <label>Gender
          <div class="field-display"><?php echo $gender; ?></div>
        </label>

        <label>Nationality
          <div class="field-display"><?php echo $nationality; ?></div>
        </label>

        <label>Contact Information
          <div class="field-display"><?php echo $contact_info; ?></div>
        </label>
      </section>

      <section class="section">
        <h2>Parent / Guardian Information</h2>
        <label>Parent/Guardian Name(s)
          <div class="field-display"><?php echo $parent_name; ?></div>
        </label>
        <label>Relationship to Student
          <div class="field-display"><?php echo $relationship; ?></div>
        </label>
        <label>Contact Information (Phone, Email)
          <div class="field-display"><?php echo $parent_contact; ?></div>
        </label>
        <label>Emergency Contact Information
          <div class="field-display"><?php echo $emergency_contact; ?></div>
        </label>
      </section>

      <section class="section">
        <h2>Education Information</h2>
        <label>School / Institution Name
          <div class="field-display"><?php echo $school_name; ?></div>
        </label>
        <label>Graduation Date
          <div class="field-display"><?php echo $graduation_date; ?></div>
        </label>
        <label>How did you hear about us?
          <div class="field-display"><?php echo $heard_from; ?></div>
        </label>
        <label>Why are you interested in our program?
          <div class="field-display"><?php echo $why_interested; ?></div>
        </label>
      </section>

      <section class="section small">
        <label class="agree">
          <?php echo $agree ? '✓' : ''; ?> I agree to the terms and conditions
        </label>
        <label>Signature (type full name)
          <div class="field-display"><?php echo $signature; ?></div>
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

