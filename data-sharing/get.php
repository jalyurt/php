<table id="table" class="table table-hover table-mc-light-blue">
  <thead class="tbl-header">
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>

  <tbody class = "tbl-content">
    <?php
    if (isset($_GET['rows'])) {
        $rows = $_GET['rows'];
        for($i = 0; $i < $rows; $i++ ) {
            echo "<tr><td>" . ($i+1) . "</td>";
            echo "<td>" . $username . "</td></tr>";
        }
    }
    ?>
  </tbody>
</table>