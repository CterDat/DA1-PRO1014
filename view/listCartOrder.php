<?php
if (empty($dataDb)) {
    echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
} else {
?>
<style>
table {
  width: 100%;
  margin: 0 auto;
  font-size: 18px;
}

td, th {
  padding: 12px;
}

input[type="number"] {
  width: 60px;
  height: 40px;
  font-size: 16px;
}

button[name="order"] {
  padding: 12px 24px;
  font-size: 18px;
}
.button-delete {
  padding: 8px 16px;
  font-size: 14px;
  background-color: #f44336;
  color: #fff;
  border: 2px solid #d32f2f;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.button-delete:hover {
  background-color: #d32f2f;
}

.button-delete:focus {
  outline: none;
  box-shadow: 0 0 0 2px rgba(211, 47, 47, 0.5);
}

.button-delete:active {
  background-color: #b71c1c;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}
.button-order {

 margin-left: 165px;
  padding: 10px;
  background-color: #f44336;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 3px;
}

.button-order:hover {
  background-color: #d32f2f;
}

.button-order:focus {
  outline: none;
  box-shadow: 0 0 0 2px rgba(211, 47, 47, 0.5);
}

.button-order:active {
  background-color: #b71c1c;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}
.cart-title {
  font-size: 30px;
  margin-top: 30px;
  margin-bottom: 30px;
  text-align: center;
}


.container {
  position: relative;
}

.back-link {
  position: relative;
}

.back-link a {
  display: inline-block;
  padding: 8px;
  background-color: #f44336;
  color: white;
  text-decoration: none;
  border-radius: 3px;
  cursor: pointer;
}

.back-link a:hover {
  background-color: #d32f2f;
}

.back-link a:focus {
  outline: none;
  box-shadow: 0 0 0 2px rgba(211, 47, 47, 0.5);
}

.back-link a:active {
  background-color: #b71c1c;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.form-submit {
  display: inline-block;
  vertical-align: top;
  margin-left: 10px;
}
</style>
<div class="container">
<h1 class="cart-title">Giỏ hàng</h1>
    <table border="1" width="100%" style="margin: 0 auto;">
        <thead>
            <tr align="center">
                <td><b>STT</b></td>
                <td><b>Image</b></td>
                <td><b>Tên</b></td>
                <td><b>Giá</b></td>
                <td><b>Số lượng</b></td>
                <td><b>Tổng giá</b></td>
                <td><b>Chức năng    </b></td>
            </tr>
        </thead>
        <tbody id="order">
            <?php
            $sum_total = 0;
            foreach ($dataDb as $key => $product) :
                // kiểm tra số lượng sản phẩm trong giỏ hàng
                $quantityInCart = 0;
                foreach ($_SESSION['cart'] as $item) {
                    if ($item['id'] == $product['id']) {
                        $quantityInCart = $item['quantity'];
                        break;
                    }
                }
            ?>
                <tr align="center">
                    <td><?= $key + 1 ?></td>
                    <td>
                        <img src="<?= $img_path, $product['img'] ?>" alt="<?= $product['name'] ?>" style="width: 100px; height: auto">
                    </td>
                    <td><?= $product['name'] ?></td>
                    <td><?= number_format((int)$product['price'], 0, ",", ".")  ?> <u>đ</u></td>
                    <td>
                        <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
                    </td>
                    <td>
                        <?= number_format((int)$product['price'] * (int)$quantityInCart, 0, ",", ".") ?> <u>đ</u>
                    </td>
                    <td>
                    <button class="button-delete" onclick="removeFormCart(<?= $product['id'] ?>)">Xóa</button>
                    </td>
                </tr>
            <?php
                // Tính tổng giá đơn hàng
                $sum_total += ((int)$product['price'] * (int)$quantityInCart);

                // Lưu tổng giá trị vào sesion
                $_SESSION['resultTotal'] = $sum_total;
            endforeach;
            ?>

            <tr>
                <td colspan="5" align="center">
                    <h2>Tổng tiền hàng:</h2>
                </td>
                <td colspan="2" align="center">
                    <h2>
                        <span>
                            <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                        </span>
                    </h2>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
    <br>
    <form id="order-form" action="index.php?act=order" method="post">
  <input type="submit" class="button-order" name="order" value="Đặt Hàng">
  <div class="back-link">
    <a href="index.php">Quay về trang chính</a>
  </div>
</form>
<?php
}
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('view/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
// Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
$.ajax({
                type: 'POST',
                url: './view/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('view/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
    
</script>