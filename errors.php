<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger pb-0 m-5" role="alert">
        <ul>

            <?php foreach ($errors as $error) : ?>

                <li><?= $error; ?></li>

            <?php endforeach; ?>

        </ul>
    </div>

<?php endif; ?>