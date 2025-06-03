<?php
include 'includes/db_connection.php';
include 'includes/header.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $post = mysqli_query($conn, "SELECT * FROM blog_posts WHERE id = $id");
    $post = mysqli_fetch_assoc($post);
}
?>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php if ($post) : ?>
    <div>
        <a href="blog.php">← Kembali ke Daftar Artikel</a>
        <h1><?= htmlspecialchars($post['title']) ?></h1>
        <p>Kategori: <?= htmlspecialchars($post['category']) ?></p>
        <p>Tanggal Publikasi: <?= date('l, d F Y', strtotime($post['created_at'])) ?></p>
        
        <div>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </div>
    </div>
<?php else : ?>
    <p>Artikel tidak ditemukan!</p>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
