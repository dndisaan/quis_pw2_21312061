<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Looping</h1>

    <?php
    echo "<h3>Question No 2 Looping Array Modulo</h3>";
    /* 
        Question No 7
        Looping Array Module
        Find the remainder when each number in the following array is divided by 5.
        Store the results in a new array named $rest.
    */

    $numbers = [18, 45, 29, 61, 47, 34];
    echo "Array numbers: ";
    print_r($numbers);

    $rest = [];
    foreach ($numbers as $number) {
        $rest[] = $number % 5;
    }

    echo "<br>";
    echo "The remainder array is:  "; 
    print_r($rest);
    echo "<br>";

    echo "<h3>Question No 3 Looping Associative Array</h3>";
    /* 
        Question No 8
        Loop Associative Array
        There is data in the form of a multidimensional array. Convert this data into an Associative Array. 
        Each item has keys: id, name, price, description, source. 
        
        Output: 
        Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard that's great for the office [source] => logitek.jpeg ) 
        Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => MSI gaming mechanical keyboard [source] => msi.jpeg ) 
        Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius to be smarter [source] => genius.jpeg ) 
        Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse loved by cats [source] => jerry.jpeg ) 
    */

    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard that\'s great for the office', 'logitek.jpeg'], 
        ['002', 'Keyboard MSI', 300000, 'MSI gaming mechanical keyboard', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius to be smarter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse loved by cats', 'jerry.jpeg']
    ];

    // Output:
    foreach ($items as $item) {
        $itemAssoc = [
            'id' => $item[0],
            'name' => $item[1],
            'price' => $item[2],
            'description' => $item[3],
            'source' => $item[4]
        ];
        print_r($itemAssoc);
        echo "<br>";
    }
?>


</body>
</html>