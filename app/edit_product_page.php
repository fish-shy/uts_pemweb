<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>
<body>
    <?php include '../component/navbar.php'; ?>

    <div class="container form">
        <h1 class="mt-5">Edit Product</h1>
        <?php
        require_once '../server/connect_database.php';
        
        if (isset($_GET['id'])) {
            $product_id = $_GET['id'];
            $sql = "SELECT * FROM product WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $product_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($i = $result->fetch_assoc()) {
        ?>
        <form id="editProductForm" class="mb-5" method="POST" action="/Uts/server/edit_product.php">
            <input type="hidden" name="product_id" value="<?php echo $i['id']; ?>">
             <div class="mb-3">
                <label for="image">image<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="image" name="image" value="<?php echo $i['image']; ?>" required>
                <?php if (!empty($i['profile_picture'])): ?>
                        <img src="<?php echo $i['profile_picture']; ?>" alt="Current profile picture" class="mt-2" style="max-width: 100px; max-height: 100px;">
                    <?php else : ?>
                        <img src="../assets/image.png" alt="Current profile picture" class="mt-2" style="max-width: 100px; max-height: 100px;">
                    <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="name">Product Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $i['product_name']; ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="price">Price<span class="text-danger">*</span></label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?php echo $i['price']; ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" is="3"><?php echo $i['description']; ?></textarea>
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Update Product</button>
            </div>
        </form>
        
        <script>
            document.getElementById('editProductForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                
                fetch('../server/edit_product.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Product updated successfully!');
                        window.location.href = 'product.php';
                    } else {
                        alert('Error updating product: ' + data.error);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        </script>
        <?php
            } else {
                echo "<div class='alert alert-danger'>Product not found</div>";
            }
            
            $stmt->close();
            $conn->close();
        } else {
            echo "<div class='alert alert-danger'>No product ID provided</div>";
        }
        ?>
    </div>

    <?php include '../component/footer.php'; ?>
</body>
</html>
