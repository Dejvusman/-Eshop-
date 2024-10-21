<?php
include 'includes/db.php';
include 'includes/header.php';

// Načtení produktů z databáze
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Produkty</title>
</head>
<body>
    <h1>Naše produkty</h1>
    <div class="products">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="product">
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['description']; ?></p>
                <p>Cena: <?php echo $row['price']; ?> Kč</p>
                <a href="cart.php?action=add&id=<?php echo $row['id']; ?>">Přidat do košíku</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>