<?php
  header('Content-Type: application/json');
  $db = new SQLite3('/home/pi/speedtest.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
  $results = $db->query('SELECT * FROM "speeds" ORDER BY "id" DESC LIMIT 10');

  $data = [];
  while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
      $data[] = $row;
  }

  echo json_encode($data);
?>
