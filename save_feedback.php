
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Please submit the survey using the form.");
}

// Read form data
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
$storyRating = $_POST["story_rating"] ?? "";
$recommend = $_POST["recommend"] ?? "";
$improvements = $_POST["improvements"] ?? [];
$feedback = trim($_POST["feedback"] ?? "");

// Validate required fields
if (
    $name === "" ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $age === false ||
    $age === null ||
    $age < 17 ||
    $age > 120
) {
    http_response_code(400);
    exit("Please enter a valid name, email and age.");
}

// Validate story rating
$storyOptions = [
    "1" => "Captivating and terrifying",
    "2" => "Good and scary",
    "3" => "Okay, I don't scare easily",
    "4" => "Seen better"
];

if (!is_string($storyRating) ||
    !isset($storyOptions[$storyRating])) {
    http_response_code(400);
    exit("Please select a valid story rating.");
}

// Validate recommendation
$recommendOptions = [
    "1" => "I would",
    "2" => "I would not",
    "3" => "Maybe"
];

if (!is_string($recommend) ||
    !isset($recommendOptions[$recommend])) {
    http_response_code(400);
    exit("Please select a valid recommendation.");
}

// Validate improvements
$improvementOptions = [
    "1" => "Expand on the lore and mysteries introduced in Alan Wake.",
    "2" => "Enhance combat mechanics for a more satisfying experience.",
    "3" => "Expand the game world with diverse environments."
];

if (!is_array($improvements)) {
    http_response_code(400);
    exit("Invalid improvement selection.");
}

$selectedImprovements = [];

foreach ($improvements as $improvement) {
    if (!is_string($improvement) ||
        !isset($improvementOptions[$improvement])) {
        http_response_code(400);
        exit("Invalid improvement selection.");
    }

    $selectedImprovements[] = $improvementOptions[$improvement];
}

// Prevent line breaks from creating fake entries
$name = str_replace(["\r", "\n"], " ", $name);
$email = str_replace(["\r", "\n"], " ", $email);
$feedback = str_replace(["\r", "\n"], " ", $feedback);

// Prepare feedback entry
$date = date("Y-m-d H:i:s");

$entry = "========================================\n";
$entry .= "Date: " . $date . "\n";
$entry .= "Name: " . $name . "\n";
$entry .= "Email: " . $email . "\n";
$entry .= "Age: " . $age . "\n";
$entry .= "Story rating: " . $storyOptions[$storyRating] . "\n";
$entry .= "Recommend: " . $recommendOptions[$recommend] . "\n";
$entry .= "Improvements: ";

if (empty($selectedImprovements)) {
    $entry .= "No selections";
} else {
    $entry .= implode(" | ", $selectedImprovements);
}

$entry .= "\n";
$entry .= "Feedback: " . $feedback . "\n\n";

// Save to text file in the same directory
$file = __DIR__ . "/palautteet.txt";

$result = file_put_contents(
    $file,
    $entry,
    FILE_APPEND | LOCK_EX
);

if ($result === false) {
    http_response_code(500);
    exit("Error: The feedback could not be saved.");
}

// Show confirmation
echo "<!DOCTYPE html>";
echo '<html lang="en">';
echo "<head>";
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo "<title>Feedback Submitted</title>";
echo "</head>";
echo "<body>";
echo "<h1>Thank you!</h1>";
echo "<p>Your feedback has been saved successfully.</p>";
echo '<a href="index.html">Return to the survey</a>';
echo "</body>";
echo "</html>";

?>
