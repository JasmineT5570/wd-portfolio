<?php 

$hero_caption = "Scroll down to view my past and current projects.";

$hero_class = "hero-portfolio";

include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); 

?>

    <main class="portfolio-main">
        <div>
            <h2>Past Projects</h2>
        </div>

        <h2>Character Showcase Portfolio</h2>
        <p>Character showcase portfolio</p>

        <h2>Butterfly Species Card</h2>
        <p>Butterfly Species Card</p>

        <h2>Art Website</h2>
        <p>Art Website</p>

        <?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/cards.php"); ?>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>