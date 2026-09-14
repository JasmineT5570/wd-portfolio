<?php 

$hero_caption = "Fill out the form below to contact me.";

include("{$_SERVER["DOCUMENT_ROOT"]}/includes/header.php"); 

?>

    <main>
        <div class="container">
            <form action="action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" required placeholder="Your first name">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" required placeholder="Your last name">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="email@example.com">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" required placeholder="Comments"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </main>

<?php include("{$_SERVER["DOCUMENT_ROOT"]}/includes/footer.php"); ?>
</div>
</body>

</html>