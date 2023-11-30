<?php
include "../../model/pdo.php";
include "../../model/binhluan.php";
session_start();
$idpro = $_REQUEST['idpro'];

$dsbl = loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/css.css">
  <title>Document</title>
  <style>
   body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .mb {
      width: 80%;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    .box_title {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }

    .box_content2 {
      margin-top: 20px;
    }

    .product_portfolio {
      background-color: #f9f9f9;
      padding: 10px;
      border-radius: 5px;
    }

    .binhluan table {
      width: 100%;
      border-collapse: collapse;
    }

    .binhluan table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .binhluan table td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
      color: #333;
    }

    .box_search {
      margin-top: 20px;
    }

    .box_search input[type="text"] {
      width: 70%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      outline: none;
    }

    .box_search input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .box_search input[type="submit"]:hover {
      background-color: #45a049;
    }

    .box_search h3 {
      color: red;
    }
  </style>
</head>

<body>

  <div class="mb">
    <div class="box_title">BÌNH LUẬN SẢN PHẨM</div>
    <div class="box_content2 product_portfolio binhluan">
      <ul>
        <table>
          <?php
          foreach ($dsbl as $bl) {
            extract($bl);
            echo '<tr><td>' . $noidung . '</td>';
            echo '<td>' . $iduser . '</td>';
            echo '<td>' . $ngaybinhluan . '</td></tr>';
          }
          ?>
        </table>
      </ul>
    </div>

    <?php
    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (isset($_SESSION['user'])) {
      echo '
      <div class="box_search">
        <form action="' . $_SERVER['PHP_SELF'] . '" method="POST">
          <input type="hidden" name="idpro" value="' . $idpro . '">
          <input type="text" name="noidung" required>
          <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
      </div>
      ';

      if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("Location: " . $_SERVER['HTTP_REFERER']);
      }
    } else {
      echo '<div class="box_search"><h3>Bạn cần đăng nhập để bình luận.</h3></div>';
    }
    ?>
  </div>

</body>

</html>