<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PWD Generator</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>
<?php
function generatePassword($length, $lowercase, $uppercase, $numbers, $symbols) {
    $characters = '';
    if ($lowercase) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if ($uppercase) {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($numbers) {
        $characters .= '0123456789';
    }
    if ($symbols) {
        $characters .= '!@#$%^&*()_+-={}:<>?';
    }

    if (empty($characters)) {
        return 'Please select at least one character type.';
    }

    // $password = '';
    // for ($i = 0; $i < $length; $i++) {
    //     $password .= $characters[random_int(0, strlen($characters) - 1)];
    // }

    $password = substr(str_shuffle($characters),0, $length);

    return $password;
}

$password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];
    $symbols = isset($_POST['symbols']);
    $numbers = isset($_POST['numbers']);
    $lowercase = isset($_POST['lowercase']);
    $uppercase = isset($_POST['uppercase']);

    $password = generatePassword($length, $lowercase, $uppercase, $numbers, $symbols);
}
?>

<body>
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center min-h-screen bg-background">
            <form action="index.php" method="POST">
                <div class="max-w-md w-full px-6 py-8 rounded-lg shadow-lg bg-card">
                    <h1 class="text-3xl font-bold mb-2 text-card-foreground">Password Generator</h1>
                    <p class="text-muted-foreground mb-6">Create a secure and unique password with just a click.</p>
                    <div class="mb-6">
                        <label for="length" class="flex items-center">
                            <input name="length" id="length" class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mr-4 w-20 text-center" min="8" max="50" type="number" value="<?php echo isset($_POST['length']) ? $_POST['length'] : '12'; ?>" />
                            <span class="text-muted-foreground">Password Length</span>
                        </label>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" name="lowercase" id="lowercase" class="mr-2" <?php echo isset($_POST['lowercase']) ? 'checked' : ''; ?> />
                            <label for="lowercase" class="text-muted-foreground">Lowercase</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="uppercase" id="uppercase" class="mr-2" <?php echo isset($_POST['uppercase']) ? 'checked' : ''; ?> />
                            <label for="uppercase" class="text-muted-foreground">Uppercase</label>
                        </div>
                        <div class="flex items-center">
                            <input class="mr-2" name="numbers" type="checkbox" id="numbers" <?php echo isset($_POST['numbers']) ? 'checked' : ''; ?> />
                            <label for="numbers" class="text-muted-foreground">Numbers</label>
                        </div>
                        <div class="flex items-center">
                            <input class="mr-2" name="symbols" type="checkbox" id="symbols" <?php echo isset($_POST['symbols']) ? 'checked' : ''; ?> />
                            <label for="symbols" class="text-muted-foreground">Symbols</label>
                        </div>
                    </div>
                    <button class="bg-gray-700 hover:bg-gray-900 text-white font-bold py-4 px-4 rounded w-full">
                        Generate Password
                    </button>
                    <div class="rounded-md p-4 text-center bg-gray-100 mt-4 text-muted ">
                        <!-- generated password -->
                        <p class="text-gray-900">
                            <?php echo $password; ?>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>