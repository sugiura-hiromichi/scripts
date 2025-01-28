<?php
echo strlen('0123456789') . "\n";
$file_name = 'yoyoyo.rs';
$sub_str = substr($file_name, strlen($file_name) - 3);
echo $sub_str . "\n";

$file_name_components = explode('.', $file_name);
$extension = end($file_name_components);
echo $extension . "\n";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$sum = 0;
for ($i = 0; $i < count($numbers); $i = $i + 1) {
    $sum = $sum + $numbers[$i];
    echo 'sum is: ' . $sum . "\n";
}

foreach ($numbers as $num) {
    echo "\n" . $num;
}

// functions
function sum($numbers)
{
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }

    return $sum;
}

echo "\n" . sum($numbers);

// objects
class Language
{
    private $ll;

    /**
     * @param mixed $language_list
     */
    public function __construct($language_list)
    {
        $this->ll = $language_list;
    }

    public function print_all(): void
    {
        echo "\n";
        foreach ($this->ll as $lang) {
            echo $lang . ' ';
        }
        echo "\n";
    }
}

class ProgrammingLanguage extends Language
{
    public function print_all_programming_languages(): void
    {
        $this->print_all();
    }
}

$langs = new ProgrammingLanguage(['Rust', 'C++', 'Lua', 'Scheme']);
$langs->print_all();
$langs->print_all_programming_languages();

try {
    echo 2 / 0;
} catch (DivisionByZeroError $e) {
    echo '🫠 caught exception: ' . $e;
}
