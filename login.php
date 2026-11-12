<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php'; ?>
<style>
    .clogin {
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 2rem;
    }
</style>

<body>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navbar.php'; ?>
    <div class="container clogin">
        <h2>Log in</h2>
        <button class="buttonPrimary" onclick="window.location.href='index.php'">Log in</button>
    </div>
</body>

</html>