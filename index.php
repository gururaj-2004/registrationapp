<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Application Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Online Application / Registration Form</h2>
    <form action="submit.php" method="POST">
      <label>Full Name:</label>
      <input type="text" name="name" placeholder="Enter your name" required>

      <label>Email:</label>
      <input type="email" name="email" placeholder="Enter your email" required>

      <label>Phone Number:</label>
      <input type="text" name="phone" placeholder="Enter your phone number" required>

      <label>Course Applied:</label>
      <select name="course" required>
        <option value="">-- Select Course --</option>
        <option value="BCA">BCA</option>
        <option value="B.Sc Computer Science">B.Sc Computer Science</option>
        <option value="B.Com">B.Com</option>
        <option value="BBA">BBA</option>
      </select>

      <label>Address:</label>
      <textarea name="address" placeholder="Enter your address" required></textarea>

      <button type="submit">Submit Application</button>
    </form>
  </div>
</body>
</html>
