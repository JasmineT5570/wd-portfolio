<?php 

$hero_caption = "Hi, I'm Jasmine Thao. Scroll down to read more about me.";

$hero_class = "hero-about";

include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); 

?>

    <main>
        <div>
            <section>
                <h2>About me</h2>
                    <p>I'm a student in Northeast Wisconsin Technical College's (NWTC)
                    Web Development program.</p>
            </section>

        <section>
        <?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/cards.php"); ?>
        </section>

        </div>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>