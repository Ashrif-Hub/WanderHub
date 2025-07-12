<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "travel";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Add package
if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $discription = $_POST['discription'];
  $rating = $_POST['rating'];
  $price = $_POST['price'];
  $image = '';

  if ($_FILES['image']['name']) {
    $image = 'uploads/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image);
  }

  $sql = "INSERT INTO packages (name, description, rating, price, image) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssids", $name, $discription, $rating, $price, $image);
  $stmt->execute();
  echo "<script>alert('Package added successfully');</script>";
}

// Update package
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $discription = $_POST['description'];
  $rating = $_POST['rating'];
  $price = $_POST['price'];

  if ($_FILES['image']['name']) {
    $image = 'uploads/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image);
    $sql = "UPDATE packages SET name=?, description=?, rating=?, price=?, image=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssidsi", $name, $discription, $rating, $price, $image, $id);
  } else {
    $sql = "UPDATE packages SET name=?, description=?, rating=?, price=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssidi", $name, $discription, $rating, $price, $id);
  }

  $stmt->execute();
  echo "<script>alert('Package updated successfully');</script>";
}

// Delete package
if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM packages WHERE id=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  echo "<script>alert('Package deleted successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Packages</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f0f0f5;
      margin: 0;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
    }

    th, td {
      padding: 12px 16px;
      border: 1px solid #ccc;
      text-align: center;
    }

    th {
      background-color: #007BFF;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 6px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      padding: 8px 14px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .update-btn {
      background-color: #28a745;
      border: none;
      color: white;
    }

    .update-btn:hover {
      background-color: #218838;
    }

    .delete-btn {
      background-color: #dc3545;
      border: none;
      color: white;
    }

    .delete-btn:hover {
      background-color: #c82333;
    }

    .add-form {
      background: #ffffff;
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 30px;
    }

    .package-img {
      width: 80px;
      height: auto;
    }

    .submit-add {
      background-color: #007BFF;
      color: white;
      border: none;
      margin-top: 10px;
    }

    .submit-add:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>

<h2>Manage Travel Packages</h2>

<div class="add-form">
  <h3>Add New Package</h3>
  <form method="POST" enctype="multipart/form-data">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Description:</label><br>
    <textarea name="discription" required></textarea><br><br>

    <label>Rating (1-5):</label><br>
    <input type="number" name="rating" min="1" max="5" required><br><br>

    <label>Price:</label><br>
    <input type="number" name="price" required><br><br>

    <label>Image:</label><br>
    <input type="file" name="image" required><br><br>

    <input type="submit" name="add" value="Add Package" class="submit-add">
  </form>
</div>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Rating</th>
    <th>Price ($)</th>
    <th>Image</th>
    <th>Actions</th>
  </tr>

  <?php
  $result = $conn->query("SELECT * FROM packages");
  while ($row = $result->fetch_assoc()):
  ?>
    <tr>
      <form method="POST" enctype="multipart/form-data">
        <td><?php echo $row['id']; ?><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
        <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
        <td><textarea name="description"><?php echo $row['description']; ?></textarea></td>
        <td><input type="number" name="rating" min="1" max="5" value="<?php echo $row['rating']; ?>"></td>
        <td><input type="number" name="price" value="<?php echo $row['price']; ?>"></td>
        <td>
          <img src="<?php echo $row['image']; ?>" class="package-img"><br>
          <input type="file" name="image">
        </td>
        <td>
          <input type="submit" name="update" value="Update" class="update-btn"><br><br>
          <input type="submit" name="delete" value="Delete" class="delete-btn" onclick="return confirm('Are you sure to delete this package?');">
        </td>
      </form>
    </tr>
  <?php endwhile; ?>
</table>

</body>
</html>
