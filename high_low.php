<?php 

if ($argc == 3 && is_numeric($argv[1]) == true && is_numeric($argv[2]) == true) {
    $randomNumber = mt_rand($argv[1], $argv[2]);
} else {
	$randomNumber = mt_rand(1, 100);
}

$tries = 0;

fwrite(STDOUT, "" . PHP_EOL);
fwrite(STDOUT, "Guess the random number!" . PHP_EOL);
fwrite(STDOUT, "Guess? ");

$guess = fgets(STDIN);


while ($guess != $randomNumber) {

	++$tries;

	if ($guess == 0) {
		$randomNumber = 0;
	} else if ($guess < $randomNumber) {
		fwrite(STDOUT, "--- HIGHER ---" . PHP_EOL);
		fwrite(STDOUT, "Guess? ");
		$guess = fgets(STDIN);
	} else {
		fwrite(STDOUT, "--- LOWER ---" . PHP_EOL);
		fwrite(STDOUT, "Guess? ");
		$guess = fgets(STDIN);
	}
}


if ($guess == $randomNumber && $guess == 0) {
	fwrite(STDOUT, "" . PHP_EOL);
	fwrite(STDOUT, "You used a cheat code to end the game." . PHP_EOL);
	fwrite(STDOUT, "" . PHP_EOL);
} else {
	fwrite(STDOUT, "" . PHP_EOL);
	fwrite(STDOUT, "Congratulations, you guessed the number!" . PHP_EOL);

	if ($tries === 0) {
		fwrite(STDOUT, "Wow! It only took you " . ($tries += 1) . " guess!" . PHP_EOL);
	} else {
		fwrite(STDOUT, "It took you " . ($tries += 1) . " guesses." . PHP_EOL);
	}
	
	fwrite(STDOUT, "" . PHP_EOL);
}



?>