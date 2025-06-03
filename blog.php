<?php
include 'includes/db_connection.php';
include 'includes/header.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';
?>

<h1>Blog Teknologi</h1>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<!-- Filter Kategori -->
<div>
    <h3>Kategori:</h3>
    <a href="blog.php">Semua</a>
    <a href="blog.php?category=technology">Technology</a>
    <a href="blog.php?category=robotics">Robotics</a>
</div>

<!-- Daftar Artikel -->
<div>
    <?php
    $query = "SELECT * FROM blog_posts";
    if ($category) {
        $query .= " WHERE category = '" . mysqli_real_escape_string($conn, $category) . "'";
    }
    $query .= " ORDER BY created_at DESC";
    
    $result = mysqli_query($conn, $query);
    
    while ($post = mysqli_fetch_assoc($result)) {
        $excerpt = substr($post['content'], 0, 200);
        echo '
        <article>
            <h2>' . htmlspecialchars($post['title']) . '</h2>
            <p>Kategori: ' . htmlspecialchars($post['category']) . '</p>
            <p>Tanggal: ' . date('d F Y', strtotime($post['created_at'])) . '</p>
            <p>' . htmlspecialchars($excerpt) . '...</p>
            <a href="blog_post.php?id=' . $post['id'] . '">Baca Selengkapnya</a>
        </article>
        ';
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>
