
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Management</title>
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
</head>
<body>
  <div class="container">
    <h1>Student Account Management</h1>

    <!-- Account Section -->
    <form action="crud_handler.php" method="post" class="section">
      <h2>Account</h2>
      <div class="input-group">
        <label for="accountID">ID</label>
        <input type="text" id="accountID" name="accountID" placeholder="Enter your ID">
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
    </form>

    <!-- Address Information Section -->
    <form action="crud_handler.php" method="post" class="section">
      <h2>Address Information</h2>
      <div class="input-group">
        <label for="fullAddress">Full Address</label>
        <input type="text" id="fullAddress" name="fullAddress" placeholder="Enter your full address">
      </div>
      <div class="input-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="Enter your city">
      </div>
      <div class="input-group">
        <label for="district">District</label>
        <input type="text" id="district" name="district" placeholder="Enter your district">
      </div>
      <div class="input-group">
        <label for="ward">Ward</label>
        <input type="text" id="ward" name="ward" placeholder="Enter your ward">
      </div>
    </form>

    <!-- Contact Information Section -->
    <form action="crud_handler.php" method="post" class="section">
      <h2>Contact Information</h2>
      <div class="input-group">
        <label for="privateEmail">Private Email</label>
        <input type="email" id="privateEmail" name="privateEmail" placeholder="Enter your private email">
      </div>
      <div class="input-group">
        <label for="privatePhone">Private Phone</label>
        <input type="tel" id="privatePhone" name="privatePhone" placeholder="Enter your private phone">
      </div>
      <div class="input-group">
        <label for="familyPhone">Family Phone</label>
        <input type="tel" id="familyPhone" name="familyPhone" placeholder="Enter your family phone">
      </div>
      <div class="input-group">
        <label for="facebook">Facebook</label>
        <input type="url" id="facebook" name="facebook" placeholder="Enter your Facebook URL">
      </div>
    </form>

    <!-- Private Information Section -->
    <form action="crud_handler.php" method="post" class="section">
      <h2>Private Information</h2>
      <div class="input-group">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name">
      </div>
      <div class="input-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob">
      </div>
      <div class="input-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="input-group">
        <label for="cccd">CCCD</label>
        <input type="text" id="cccd" name="cccd" placeholder="Enter your CCCD">
      </div>
      <div class="input-group">
        <label for="region">Region</label>
        <input type="text" id="region" name="region" placeholder="Enter your region">
      </div>
    </form>

    <!-- School Information Section -->
    <form action="crud_handler.php" method="post" class="section">
      <h2>School Information</h2>
      <div class="input-group">
        <label for="schoolName">School Name</label>
        <input type="text" id="schoolName" name="schoolName" placeholder="Enter your school name">
      </div>
      <div class="input-group">
        <label for="class">Class</label>
        <input type="text" id="class" name="class" placeholder="Enter your class">
      </div>
      <div class="input-group">
        <label for="major">Major</label>
        <input type="text" id="major" name="major" placeholder="Enter your major">
      </div>
      <div class="input-group">
        <label for="schoolEmail">School Email</label>
        <input type="email" id="schoolEmail" name="schoolEmail" placeholder="Enter your school email">
      </div>
    </form>

    <!-- CRUD Buttons -->
    <div class="submit-container">
      <form action="crud_handler.php" method="post">
        <button type="submit" name="action" value="insert" class="submit-button">Insert</button>
        <button type="submit" name="action" value="update" class="submit-button">Update</button>
      </form>
      <form action="crud_handler.php" method="post" class="delete-form">
        <div class="input-group">
          <label for="deleteID">ID to Delete</label>
          <input type="text" id="deleteID" name="deleteID" placeholder="Enter ID to delete">
      </div>
        <button type="submit" name="action" value="delete" class="submit-button">Delete</button>
      </form>
    </div>
  </div>
</body>
</html>
