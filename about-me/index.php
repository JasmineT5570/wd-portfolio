<?php 

$hero_caption = "Hi, I'm Jasmine Thao. Scroll down to read more about me.";

$hero_class = "hero-about";

include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); 

?>

    <main class="about-main">
    <div class="about-content">
        <h2>About me</h2>
            <p>I'm a student in Northeast Wisconsin Technical College's (NWTC)
            Web Development program.</p>

        <h2>Character Showcase Portfolio</h2>
        <p>Character showcase portfolio</p>

        <h2>Butterfly Species Card</h2>
        <p>Butterfly Species Card</p>

        <h2>Art Website</h2>
        <p>Art Website</p>
    </div>

        <?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/cards.php"); ?>

        </div>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>