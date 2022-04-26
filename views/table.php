<?php 
    require('controllers/read.php');
    //session_start();
?>

<div class="container my-3">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab"
        aria-controls="add" aria-selected="true">Add</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="bulk-tab" data-bs-toggle="tab" data-bs-target="#bulk" type="button" role="tab"
        aria-controls="bulk" aria-selected="false">Bulk</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="filter-tab" data-bs-toggle="tab" data-bs-target="#filter" type="button" role="tab"
        aria-controls="filter" aria-selected="false">Filters</button>
    </li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane active p-3 border border-top-0" style="min-height: 200px" id="add" role="tabpanel"
      aria-labelledby="add-tab">
      <div class="container mt-4">
        <form class="row g-3" action="controllers/create.php" method="POST">
          <div class="col-md-4">
            <label for="inputName" class="form-label">Name</label>
            <input class="form-control" id="NameId" name="inputName">
            <span></span>
          </div>
          <div class="col-md-4">
            <label for="inputIp" class="form-label">IP Address</label>
            <input class="form-control" id="IpId" name="inputIp">
            <span></span>
          </div>
          <div class="col-md-4">
            <label for="inputMac" class="form-label">MAC Address</label>
            <input class="form-control" id="MacId" name="inputMac">
            <span></span>
          </div>
          <button type="submit" class="btn btn-outline-success m-auto mt-3">Add</button>
        </form>
      </div>
    </div>
    <div class="h-25 tab-pane p-3 border border-top-0" style="min-height: 200px" id="bulk" role="tabpanel"
      aria-labelledby="bulk-tab">
      <?php include('views/bulkAdd.html'); ?>
    </div>
    <div class="h-25 tab-pane p-3 border border-top-0" style="min-height: 200px" id="filter" role="tabpanel"
      aria-labelledby="filter-tab">
      <div class="container">
        <form class="row g-3" action="" method="POST">
          <div class="col-md-4">
            <label for="filterInput" class="form-label">Search:</label>
            <input class="form-control" id="filterInput" name="filterInput">
            <button type="submit" class="btn btn-outline-success m-auto mt-3">Go</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
  /*if(isset($_SESSION["status"])){
    echo $_SESSION["status"];
  }*/
?>

<div class="container my-4">
  <table class="table table-striped">
    <tr>
      <th>Name</th>
      <th>IP Address</th>
      <th>MAC Address</th>
      <th></th>
    </tr>
    <?php Read();?>
</div>