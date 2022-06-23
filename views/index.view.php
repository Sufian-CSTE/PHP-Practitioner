    <?php require('views/partial/header.php'); ?>
    <?php require('views/partial/nav.php'); ?>
    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">
                <span class="w3-hide-small">I'm</span> John Doe.
            </h1>
            <?php foreach ($tasks as $task) : ?>
                <p>
                    <?php if ($task->completed) : ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else : ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </p>
            <?php endforeach; ?>
            <img src="https://www.w3schools.com/w3images/man_smoke.jpg" alt="boy" class="w3-image" width="992" height="1108">
        </header>
    </div>
    <?php require('views/partial/footer.php'); ?>