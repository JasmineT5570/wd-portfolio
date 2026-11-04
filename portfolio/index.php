<?php 

$hero_caption = "Scroll down to view my past and current projects.";

$hero_class = "hero-portfolio";

include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); 

?>

    <main class="portfolio-main">
        <div>
            <h2>Past Projects</h2>
        </div>

        <?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/cards.php"); ?>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>