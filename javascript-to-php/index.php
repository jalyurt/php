<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript to PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <?php
    // array for names:
    $strings = array(
      "Kirito",
      "Erza",
      "Akatsuki",
      "Shiro",
      "Leo",
      "Rundel-Haus-Code",
      "Ken Kaneki",
      "Glenn Radars",
      "Momonga-Sama"
    );

    // array for pictures:
    $pictures = array(
      "https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg",
      "https://wallpaperaccess.com/full/190815.jpg",
      "https://images7.alphacoders.com/528/528418.jpg",
      "https://wallpaperaccess.com/full/300068.jpg",
      "https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg"
    );

    // randomize pictures (*referenced in HTML):
    $randomImg = array_rand($pictures);
    ?>

</head>
<body class="bg-light">

<!-- *echo random image in HEADER: -->
<header id="header" style="background:url(<?php echo $pictures[$randomImg] ?>) center center/cover no-repeat;">
    
    <div class="overlay"></div>
    <div class="overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Welcome to the Javascript - PHP exercise</h1>
                    <p>Read the code of this page, understand it, then convert it to the same functionality in PHP!</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="exercises">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="loop-while" class="my-4 p-4 bg-white shadow-sm border"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="username-generator" class="my-4 p-4 bg-white shadow-sm border"></div>
            </div>
        </div>
    </div>
</section>

<?php
// --------------------------------
// ---------- LIST NAMES ----------
// --------------------------------

// create variable for strings:
$list = "";
// create variable for random strings:
$randomStrings;

// while $list isn't an array(?):
while ($list !== []){
    // create $randomStrings array to hold random value from $strings array:
    $randomStrings[] = $strings[rand(0,count($strings)-1)];
    // compare arrays $strings and $randomStrings and return differences:
    $list = array_diff($strings, $randomStrings);
    };

    // put value from $randomStrings into list:
    foreach ($randomStrings as $val){ 
        echo "<li>", $val. "</li>\n";
    };

// --------------------------------
// ---------- USER NAMES ----------
// --------------------------------

// names variable:
$name = "Rafael Lambelin Selene Nijst";

// referencing function to edit names:
createUsername($name);

// function to edit names:
function createUsername($name) {
    // ???
    if (strpos($name," " ) === FALSE) {
        // makes every single letter inside of string appear as an array value:
        $stringArray = str_split ($name);
    } else {
        // breaks apart every " " in $name to form a separate string:
        $stringArray = explode (" ", $name);
    }

    // create empty array:
    $stringArray1 = array();

    // create variable that counts elements within $stringArray:
    $stringArray_length = count($stringArray);

    // loop through length of $stringArray_length:
    for ($i=0; $i<$stringArray_length; $i++) {
        // ???
        $subarr = str_split($stringArray[$i]);
        for ($ii=0; $ii<count($subarr)/2; $ii++) {
            // get random letter from $subarr:
            $randomLetter = array_rand($subarr);
            // transform random letter from $subarr:
               // (transform colors and lower/upper cases)
            $subarr[$randomLetter] = 
            "<span style='color: rgb(".mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255)."); text-transform:uppercase;'>".$subarr[$randomLetter]."</span>";                     
        }
        // add $subarr to $stringArray1:
        array_push($stringArray1,implode($subarr));    
    }
    // add - to $stringArray1:
    echo (implode("-",$stringArray1));
}
?>

</body>
</html>
