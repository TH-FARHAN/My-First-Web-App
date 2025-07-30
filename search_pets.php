<?php
$conn = new mysqli("localhost", "root", "", "adoptlove");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$search = isset($_GET['search']) ? trim($conn->real_escape_string($_GET['search'])) : '';
if ($search === '') {
    exit;
}
$sql = "SELECT p.p_id, p.p_tittle, p.p_description, p.p_imagename, c.cat_name
        FROM pets p
        JOIN category c ON p.cat_id = c.cat_id
        WHERE p.p_status = 1
        AND (p.p_tittle LIKE '%$search%' OR c.cat_name LIKE '%$search%')
        ORDER BY p.p_tittle";

$result = $conn->query($sql);
if ($result && $result->num_rows > 0): ?>
  <div class="container">
    <h4 class="mb-4">Search Results</h4>
    <div class="row row-cols-1 row-cols-md-2 col-md-12">
      <?php while ($pet = $result->fetch_assoc()): ?>
        <div class="col mb-4 col-md-4">
          <div class="card" onclick="loadAdoptionModal(<?= (int)$pet['p_id'] ?>,'<?= htmlspecialchars($pet['p_tittle'], ENT_QUOTES) ?>')" style="cursor: pointer;">
            <img src="<?= htmlspecialchars($pet['p_imagename']) ?>" class="card-img-top" alt="<?= htmlspecialchars($pet['p_tittle']) ?>">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($pet['p_tittle']) ?></h5>
              <p class="card-text"><?= htmlspecialchars($pet['p_description']) ?></p>
              <small class="text-muted">Category: <?= htmlspecialchars($pet['cat_name']) ?></small>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
<?php else: ?>
  <div class="container text-center mt-4">
    <p>No pets found matching your search.</p>
  </div>
<?php endif; ?>
