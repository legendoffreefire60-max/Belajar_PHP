<?php
<?php
session_start();

// Pastikan sudah login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// Daftar film favorit (data contoh)
$filmFavorit = [
    "Avengers: Endgame",
    "The Dark Knight",
    "Parasite",
    "Interstellar",
    "Inception",
    "Spirited Away",
    "Your Name",
    "The Godfather",
    "Frozen",
    "Joker"
];

$hasilPencarian = [];
$pencarian = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pencarian = trim($_POST['keyword']);
    if ($pencarian !== "") {
        // Cari film yang mengandung keyword (case-insensitive)
        foreach ($filmFavorit as $film) {
            if (stripos($film, $pencarian) !== false) {
                $hasilPencarian[] = $film;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Pencarian Film Favorit</title>
</head>
<body>
<h2>Pencarian Film Favorit</h2>
<p>Halo, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>! Cari film favoritmu di sini.</p>

<form method="post">
    Nama film favorit: <input type="text" name="keyword" value="<?php echo htmlspecialchars($pencarian); ?>" required>
    <input type="submit" value="Cari">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <h3>Hasil Pencarian:</h3>
    <?php if (count($hasilPencarian) > 0): ?>
        <ul>
        <?php foreach ($hasilPencarian as $film): ?>
            <li><?php echo htmlspecialchars($film); ?></li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p style="color:red;">Tidak ada film yang cocok dengan kata kunci "<strong><?php echo htmlspecialchars($pencarian); ?></strong>".</p>
    <?php endif; ?>
<?php endif; ?>

<p>
    <a href="logout.php">Logout</a>
</p>
</body>
</html>