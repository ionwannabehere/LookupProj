<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok</title>

</head>
<body>
<div class="header">  
  <div class="header__logo">
    <strong>LOGO</strong>
  </div>
  <nav class="navbar">
    <ul class="navbar__menu">
      <li class="navbar__item">
        <a href="#" class="navbar__link"><i data-feather="home"></i><span>Home</span> </a>
      </li>
      <li class="navbar__item">
        <a href="#" class="navbar__link"><i data-feather="message-square"></i><span>Messages</span></a>        
      </li>
      <li class="navbar__item">
        <a href="#" class="navbar__link"><i data-feather="users"></i><span>Customers</span></a>        
      </li>
      <li class="navbar__item">
        <a href="#" class="navbar__link"><i data-feather="folder"></i><span>Projects</span></a>        
      </li>
      <li class="navbar__item">
        <a href="#" class="navbar__link"><i data-feather="archive"></i><span>Resources</span></a>        
      </li>
      <li class="navbar__item">
        <a href="#" class="navbar__link"><i data-feather="help-circle"></i><span>Help</span></a>        
      </li>
      <li class="navbar__item">
        <a href="#" class="navbar__link"><i data-feather="settings"></i><span>Settings</span></a>        
      </li>
    </ul>
  </nav>
</div>

<div class="box">
    <form name="search">
        <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
    </form>
    <i class="fas fa-search"></i>

</div>
<!-- partial -->
  <script src='https://unpkg.com/feather-icons'></script><script  src="./script.js"></script>
</body>
</html>

<?php 

$command = escapeshellcmd('python3 sherlock/sherlock test');
$output = shell_exec($command);
echo $output;
echo "test end"

?>