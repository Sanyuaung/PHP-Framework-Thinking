<?php require "view/partials/heading.php"?>
    <h1>Usernames</h1>
    <?php foreach($users as $user):?>
    <li><?= $user->NAME;?></li>
    <?php endforeach; ?>
    
    <h1>Submit your name</h1>
    <form action="/names" method="POST">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>



<?php require "View/partials/footer.php" ?>