<?php require('app/views/partial/header.php'); ?>
    <?php require('app/views/partial/nav.php'); ?>
    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo">
                <span class="w3-hide-small">I'm</span> John Doe.
            </h1>

            <?php foreach ($users as $user) : ?>
                <p>
                    <li><?= $user->name; ?></li>
                </p>
            <?php endforeach; ?>

            <form style="margin-top: 5px;" action="store" method="POST">
                <label style="margin-top: 5px;" for="name">First name:</label><br>
                <input style="margin-top: 5px;" type="text" id="name" name="name" value=""><br>
                <button style="margin-top: 10px;" type="submit">submit</button>
            </form>
            <img src="https://www.w3schools.com/w3images/man_smoke.jpg" alt="boy" class="w3-image" width="992" height="1108">
        </header>
    </div>
    <?php require('app/views/partial/footer.php'); ?>