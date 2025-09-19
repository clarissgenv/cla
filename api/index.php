<?php
// Muat data dari "database"
$db = require 'database.php';
// Muat pustaka Parsedown
require 'lib/Parsedown.php';
$Parsedown = new Parsedown();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($db['profile']['name']) ?> | Portfolio</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <header class="hero fade-in">
            <h1><?= htmlspecialchars($db['profile']['name']) ?></h1>
            <p class="tagline"><?= htmlspecialchars($db['profile']['tagline']) ?></p>
            <div class="hero-contact">
                <a href="mailto:<?= htmlspecialchars($db['profile']['email']) ?>" class="btn">Contact Me</a>
                <a href="<?= htmlspecialchars($db['profile']['linkedin_url']) ?>" target="_blank" class="social-link">LinkedIn</a>
                <a href="<?= htmlspecialchars($db['profile']['github_url']) ?>" target="_blank" class="social-link">GitHub</a>
            </div>
        </header>

        <main>
            <section id="about" class="fade-in">
                <h2><?= htmlspecialchars($db['about']['title']) ?></h2>
                <div class="prose">
                    <?= $Parsedown->text($db['about']['content']) ?>
                </div>
            </section>

            <section id="skills" class="fade-in">
                <h2><?= htmlspecialchars($db['skills']['title']) ?></h2>
                <div class="skills-grid">
                    <?php foreach ($db['skills']['items'] as $skill): ?>
                        <div class="skill-item"><?= htmlspecialchars($skill) ?></div>
                    <?php endforeach; ?>
                </div>
            </section>
            
            <section id="projects" class="fade-in">
                <h2><?= htmlspecialchars($db['projects']['title']) ?></h2>
                <div class="projects-grid">
                    <?php foreach ($db['projects']['items'] as $project): ?>
                        <a href="<?= htmlspecialchars($project['link']) ?>" class="project-card" target="_blank">
                            <h3><?= htmlspecialchars($project['title']) ?></h3>
                            <p><?= htmlspecialchars($project['description']) ?></p>
                            <div class="project-tags">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="experience" class="fade-in">
                <h2><?= htmlspecialchars($db['experience']['title']) ?></h2>
                <div class="experience-item">
                    <?php foreach ($db['experience']['items'] as $exp): ?>
                        <h4><?= htmlspecialchars($exp['role']) ?> @ <?= htmlspecialchars($exp['company']) ?></h4>
                        <p class="period"><?= htmlspecialchars($exp['period']) ?></p>
                        <div class="prose">
                            <?= $Parsedown->text($exp['description']) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="certification" class="fade-in">
                 <h2><?= htmlspecialchars($db['certification']['title']) ?></h2>
                 <p><?= htmlspecialchars($db['certification']['name']) ?> - <?= htmlspecialchars($db['certification']['year']) ?></p>
            </section>
        </main>
        
        <footer class="fade-in">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($db['profile']['name']) ?>. Built with passion.</p>
        </footer>
    </div>

    <script src="/assets/script.js"></script>
</body>
</html>