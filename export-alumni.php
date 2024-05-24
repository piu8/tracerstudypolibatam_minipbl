<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="pbl-css/export-alumni.css"/>
        <title>Export</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="p  reconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito&display=swap"
            rel="stylesheet">
    </head>
<body>
  <div class="delete-container">
    <div class="warning-logo">&#9888;</div>
    <div class="confirmation-text">Are you sure you want to export all Alumni data ?
    </div>
    
    <div class="button-container">
      <button class="cancel-button" onclick="goBack()">Cancel</button>
      <button class="delete-button" onclick="goBack()">Store</button>
    </div>
  </div>
  
</div>
<script>
  // Fungsi untuk kembali ke halaman sebelumnya
  function goBack() {
    window.history.back();
  }
</script>
</body>
</html>
