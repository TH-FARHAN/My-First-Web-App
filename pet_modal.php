<style>
  #myModal .modal-content {
    background-image: url('./images/adoption.jpg');
    background-size: cover;
    background-position: center;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
    color: #fff;
    overflow: hidden;
  }

  #myModal .modal-section {
    background: rgba(0, 0, 0, 0.5); /* dark transparent overlay */
    padding: 20px;
  }

  #myModal .modal-header,
  #myModal .modal-footer {
    border: none;
    color: #fff;
  }

  #myModal .modal-title {
    color: #fff;
    font-weight: bold;
  }

  #myModal .form-group label {
    color: #fff;
    font-weight: 500;
  }

  #myModal .form-control {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid #fff;
    color: #fff;
    border-radius: 8px;
  }

  #myModal .form-control::placeholder {
    color: #eee;
  }

  #myModal select.form-control {
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff !important;
    border: 1px solid #fff;
  }

  #myModal select.form-control option {
    background-color: rgba(0, 0, 0, 0.9);
    color: #fff !important; /* ✅ Make sure options are visible */
  }

  #myModal select.form-control:focus {
    outline: none;
    box-shadow: 0 0 5px #fff;
    background-color: rgba(255, 255, 255, 0.15);
  }

  #myModal select.form-control option:first-child {
    color: #ccc;
  }

  #myModal .btn-primary {
    background-color: #ff7f50;
    color: white;
    border: none;
    border-radius: 8px;
  }

  #myModal .btn-secondary {
    background-color: #6c757d;
    color: white;
    border: none;
    border-radius: 8px;
  }

  .modal-dialog.modal-nd {
    max-width: 600px;
  }
</style>

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-nd">
    <div class="modal-content">
      <div class="modal-header modal-section">
        <h4 class="modal-title">Update Pets</h4>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>
      <form action="./pet_action_page.php" class="was-validated" enctype="multipart/form-data" method="POST">
        <div class="modal-body modal-section">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter pet name" required>
            <input type="hidden" name="pet_id" id="pet_id" value="0">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="2" placeholder="Enter description" required></textarea>
          </div>
          <div class="form-group">
            <label for="petImage">Image</label>
            <input type="file" class="form-control" id="petImage" name="petImage" accept="image/*">
            <input type="hidden" name="existingImage" value="0">
          </div>
          <div class="form-group">
            <label for="petType">Category</label>
            <select name="petType" class="form-control" id="petType" required>
              <option value="">-- Select --</option>
              <?php
                $conn = new mysqli("localhost", "root", "", "adoptlove");
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM category";
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                  }
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="dob">DOB</label>
            <input type="text" class="form-control" id="dob" name="dob" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status" required>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
        </div>
        <div class="modal-footer modal-section">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
