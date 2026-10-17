<?php 

$hero_caption = "Fill out the form below to contact me.";

include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); 

?>

    <main>
        <div class="container">
            <form action="https://splitforms.com/api/submit" method="post">
                <input type="hidden" name="access_key" value="451a4da2c5db4539971b5534572323f0">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your first name">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="email@example.com">

                <label for="comments">Subject</label>
                <textarea id="comments" name="comments" placeholder="Comments"></textarea>

                <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                <input type="submit" value="Submit">
            </form>
        </div>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>