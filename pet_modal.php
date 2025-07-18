	  <style>
  /* Modal Content with Full Background Image */
  #myModal .modal-content {
    background-image: url('./images/adoption.jpg'); /* Update path if needed */
    background-size: cover;
    background-position: center;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  }

  /* Semi-transparent overlay for all sections */
  #myModal .modal-section {
    background-color: rgba(255, 255, 255, 0.85);
    padding: 20px;
    z-index: 2;
  }

  #myModal .modal-header,
  #myModal .modal-footer {
    border: none;
  }

  #myModal .modal-header {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
  }

  #myModal .modal-footer {
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
  }

  /* Form field spacing */
  #myModal .form-group {
    margin-bottom: 15px;
  }

  /* Button styling */
  #myModal .btn-primary {
    background-color: #007bff;
    border: none;
  }

  #myModal .btn-secondary {
    background-color: #6c757d;
    border: none;
  }

  /* Responsive modal width */
  .modal-dialog.modal-nd {
    max-width: 600px;
  }
</style>

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-nd">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header modal-section">
        <h4 class="modal-title">Update Pets</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form action="./pet_action_page.php" class="was-validated" enctype="multipart/form-data" method="POST">
        
        <!-- Modal Body -->
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

        <!-- Modal Footer -->
        <div class="modal-footer modal-section">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </form>
    </div>
  </div>
</div>