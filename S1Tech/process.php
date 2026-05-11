<?php
// student_registration/process.php
// Receive POST data, sanitize, format and display results

function s($v){ return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }

$full_name = trim($_POST['full_name'] ?? '');
$dob = trim($_POST['dob'] ?? '');
$gender = trim($_POST['gender'] ?? '');
$nationality = trim($_POST['nationality'] ?? '');
$contact_info = trim($_POST['contact_info'] ?? '');

$parent_name = trim($_POST['parent_name'] ?? '');
$relationship = trim($_POST['relationship'] ?? '');
$parent_contact = trim($_POST['parent_contact'] ?? '');
$emergency_contact = trim($_POST['emergency_contact'] ?? '');

$school_name = trim($_POST['school_name'] ?? '');
$graduation_date = trim($_POST['graduation_date'] ?? '');
$heard_about = trim($_POST['heard_about'] ?? '');
$why_interested = trim($_POST['why_interested'] ?? '');

$agree = isset($_POST['agree']) ? true : false;
$signature = trim($_POST['signature'] ?? '');

// Formatting examples:
// 1. Name case: convert to "Title Case" safely
$formatted_name = $full_name ? ucwords(strtolower($full_name)) : '';

// 2. Date -> age calculation
$age = 'N/A';
if ($dob) {
  $d = DateTime::createFromFormat('Y-m-d', $dob);
  if ($d) {
    $age = $d->diff(new DateTime())->y . ' years';
    $dob = $d->format('F j, Y');
  }
}

// 3. Normalize phone numbers: strip non-digits and format if 10 digits
function format_phone($raw){
  $digits = preg_replace('/\D+/', '', $raw);
  if (strlen($digits) === 10) {
    return sprintf('(%s) %s-%s', substr($digits,0,3), substr($digits,3,3), substr($digits,6));
  }
  if (strlen($digits) > 0) return $digits;
  return '';
}

$contact_formatted = format_phone($contact_info);
$parent_contact_formatted = format_phone($parent_contact);
$emergency_contact_formatted = format_phone($emergency_contact);

// 4. Graduation date formatting
if ($graduation_date) {
  $g = DateTime::createFromFormat('Y-m-d', $graduation_date);
  if ($g) $graduation_date = $g->format('F Y');
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Registration Submitted</title>
  <style>
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial;margin:24px;background:#fffaf0}
    .card{background:#fff;padding:20px;border-radius:6px;box-shadow:0 2px 8px rgba(0,0,0,.06)}
    .row{display:flex;gap:16px;flex-wrap:wrap}
    .col{flex:1 1 300px}
    dl dt{font-weight:600}
  </style>
</head>
<body>
  <main class="card">
    <h1>Registration Received</h1>
    <p>Below are the variables captured and formatted server-side.</p>

    <section class="row">
      <div class="col">
        <h2>Student</h2>
        <dl>
          <dt>Full Name</dt>
          <dd><?php echo s($formatted_name ?: $full_name); ?></dd>

          <dt>Date of Birth</dt>
          <dd><?php echo s($dob ?: 'N/A'); ?> (Age: <?php echo s($age); ?>)</dd>

          <dt>Gender</dt>
          <dd><?php echo s($gender ?: 'N/A'); ?></dd>

          <dt>Nationality</dt>
          <dd><?php echo s($nationality ?: 'N/A'); ?></dd>

          <dt>Contact</dt>
          <dd><?php echo s($contact_formatted ?: $contact_info ?: 'N/A'); ?></dd>
        </dl>
      </div>

      <div class="col">
        <h2>Parent / Emergency</h2>
        <dl>
          <dt>Parent/Guardian</dt>
          <dd><?php echo s($parent_name ?: 'N/A'); ?></dd>

          <dt>Relationship</dt>
          <dd><?php echo s($relationship ?: 'N/A'); ?></dd>

          <dt>Parent Contact</dt>
          <dd><?php echo s($parent_contact_formatted ?: $parent_contact ?: 'N/A'); ?></dd>

          <dt>Emergency Contact</dt>
          <dd><?php echo s($emergency_contact_formatted ?: $emergency_contact ?: 'N/A'); ?></dd>
        </dl>
      </div>
    </section>

    <section>
      <h2>Education & Other</h2>
      <dl>
        <dt>School / Institution</dt>
        <dd><?php echo s($school_name ?: 'N/A'); ?></dd>

        <dt>Graduation Date</dt>
        <dd><?php echo s($graduation_date ?: 'N/A'); ?></dd>

        <dt>How did you hear about us?</dt>
        <dd><?php echo s($heard_about ?: 'N/A'); ?></dd>

        <dt>Why are you interested?</dt>
        <dd><?php echo nl2br(s($why_interested ?: 'N/A')); ?></dd>

        <dt>Agreed to Terms</dt>
        <dd><?php echo $agree ? 'Yes' : 'No'; ?></dd>

        <dt>Signature</dt>
        <dd><?php echo s($signature ?: 'N/A'); ?></dd>
      </dl>
    </section>

    <p><a href="index.php">&larr; Back to form</a></p>
  </main>
</body>
</html>
