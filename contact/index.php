<?php 

$hero_caption = "Fill out the form below to contact me.";

include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); 

?>

    <main>
        <div class="container">
            <form action="https://splitforms.com/api/submit" method="post">
                <input type="hidden" name="access_key" value="451a4da2c5db4539971b5534572323f0">
                <input type="hidden" name="redirect" value="https://jthao.infinityfree.me/contact/thank-you.php">

                <label for="fname">First Name</label>
                <input type="text" required id="fname" name="firstname" placeholder="Your first name">

                <label for="lname">Last Name</label>
                <input type="text" required id="lname" name="lastname" placeholder="Your last name">

                <label for="email">Email Address</label>
                <input type="email" required id="email" name="email" placeholder="email@example.com">

                <label for="comments">Subject</label>
                <textarea id="comments" required name="comments" placeholder="Comments"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>