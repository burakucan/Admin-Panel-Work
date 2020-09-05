<?php
    include "header.php"
?>
<body>
<div >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Departments</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </nav>
  </div>
  <div>

<ul class="nav flex-column">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sales</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="managing.php">Managing</a>
      <a class="dropdown-item" href="logistics.php">Logistics</a>
      </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Marketing</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="researchm.php">Research & Analysis</a>
      <a class="dropdown-item" href="digitalm.php">Digital Marketing</a>
      <a class="dropdown-item" href="contentm.php">Content Marketing</a>
      </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">IT Department</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="operations.php">Operations</a>
      <a class="dropdown-item" href="project.php">Project</a>
      <a class="dropdown-item" href="process.php">Process</a>
      </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Human Resources</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="organization.php">Organization</a>
      <a class="dropdown-item" href="recruitment.php">Recruitment</a>
      <a class="dropdown-item" href="training.php">Training</a>
      </div>
  </li>
</ul>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
    
</body>