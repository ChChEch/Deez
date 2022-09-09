
<?php include('partials/header.php'); ?>
            <a class="button is-primary" href="/new">New whatever</a>
                    <?php foreach($posts as $post): ?>
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                <?=$post['title']?>
                        </p>
                        </header>
                        <div class="card-content">
                            <div class="content"> 
                                <?=$post['body']?>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item">Delete</a>
                        </footer>
                        </div>
                    <?php endforeach; ?>
                </ul>
<?php include('partials/footer.php'); ?>