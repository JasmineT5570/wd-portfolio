<?php

ini_set("date.timezone", "America/Chicago");

if(isset($js_head)) echo $js_head;

/*
Keeping notes here for future use/self-explanation :)

getcwd = Retrieves current working path directory path.
Ex: "/php/assignments"

basename = Retrieves last part of path.
Ex: "/php/assignments" --> Expected: "assignments"
*/
$folder_name = basename(getcwd());

/*
- Retrieve full path to current PHP file using $_SERVER["SCRIPT_FILENAME"]
- Use basename to get filename from path (index.php)
- Remove ".php" with second argument --> Ex: basename($str, ".php");
- Ex: "index.php" --> Expected: "index"
*/
$file_name = basename($_SERVER["SCRIPT_FILENAME"], ".php");

//Change file name on display "index" to "Home" instead.
if ($file_name === "index") {
    $file_name = "Home";
}

//Array of folder names and display names.
$folder_names = [
    "WD-Portfolio" => "Digital Arts Showcase Portfolio",
    "htdocs" => "Digital Arts Showcase Portfolio" //For InifintyFree, htdocs is the folder name.
];

//Array of file names and display names.
$file_names = [
    "ex" => "ex1"
];

//Check for folder name in array. If it exists, use display name in array.
if (isset($folder_names[$folder_name])) {
    $folder_name = $folder_names[$folder_name];
}
else {
    /*
    preg_replace --> Searches for pattern and replaces.
    Use "/^\d+-/" regex
    / \ --> Start and end of pattern
    ^ --> Start of the line
    d+ --> "d" Represents numbers 0-9, "+" finds all digits. 
        (Ex: 0256-folder --> Expected: 0256)
    - <-- Finds hyphen (Ex: 01-includes)
    Replace digits and hyphen with empty space (second parameter, "").
    */ 
    $folder_name = preg_replace("/^\d+-/", "", $folder_name);

    //If folder name does not exist in array,
    //Capitalize first letter in folder name and replace "-" with empty space.
    $folder_name = ucwords(str_replace("-", " ", $folder_name));
}


//Changing file names for display.
if (isset($file_names[$file_name])) {
    $file_name = $file_names[$file_name];
}
else {
    $file_name = preg_replace("/^\d+-/", "", $file_name);
    $file_name = ucwords(str_replace("-", " ", $file_name));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantarell:ital,wght@0,400;0,700;1,400;1,700&family=Playpen+Sans:wght@100..800&display=swap" rel="stylesheet">
    <script src="/js/script.js" defer></script>
    <title> Jasmine | <?= $folder_name ?> </title>
</head>

<body id="top">
    <div class="wrapper">
        <header>
            <nav>
                <ul>
                    <li><a href="/index.php">logo</a></li>
                    <li><a href="/index.php">home</a></li>
                    <li><a href="/portfolio/index.php">portfolio</a></li>
                    <li><a href="/about-me/index.php">about me</a></li>
                    <li><a href="/contact/index.php">contact</a></li>
                </ul>
            </nav>

            <section class="hero">
                <div class="hero-overlay">
                    <h1 class="fade-text"><?= $folder_name ?></h1>
                    <p class="fade-text"><?= $hero_caption ?></p>
                </div>
            </section>
        </header>