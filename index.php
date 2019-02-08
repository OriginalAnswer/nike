<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nike Info</title>
    <link rel="stylesheet" href="http://localhost/Coding_school/nike/css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <ul>
            <li class="current"><a href="index.php">HOME</a></li>
          </ul>
          <!-- change to logo img -->
        </nav>
        <div id="sitetitle">
          <h1><span class="highlight">Nike</span> Information</h1>
        </div>
      </div>
    </header>

    <section id="contents">
      <div class="container">
        <ul>
          <?php
            echo file_get_contents("list.txt");
           ?>
        </ul>
      </div>
    </section>

    <section id="textzone">
      <div class="container">
        <?php
          if(empty($_GET['id']) == false){
            echo file_get_contents($_GET['id']. ".txt");
          } else {
            echo "<h1>Welcome</h1>";
          }
         ?>
      </div>
    </section>

    <footer>
      <p>OA Web Design. Copyright &copy; 2019</p>
    </footer>
  </body>
</html>
