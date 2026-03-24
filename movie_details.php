<?php if ($_SESSION['user_role'] === 'admin'): ?>
    <a href="admin_edit.php?id=<?php echo $movie_id; ?>">Edit Movie</a>
<?php endif; ?>