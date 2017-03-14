<?php 

$randomNumber = mt_rand(1, 100);
$tries = 0;

fwrite(STDOUT, "" . PHP_EOL);
fwrite(STDOUT, "Guess the random number!" . PHP_EOL);
fwrite(STDOUT, "Guess? ");

$guess = fgets(STDIN);


while ($guess != $randomNumber) {

	if ($guess < $randomNumber) {
		fwrite(STDOUT, "--- HIGHER ---" . PHP_EOL);
		fwrite(STDOUT, "Guess? ");
		$guess = fgets(STDIN);
	} else {
		fwrite(STDOUT, "--- LOWER ---" . PHP_EOL);
		fwrite(STDOUT, "Guess? ");
		$guess = fgets(STDIN);
	}

	if ($guess != $randomNumber) {
		++$tries;
	}

}



if ($guess == $randomNumber) {
	fwrite(STDOUT, "Congratulations, you guessed the number!" . PHP_EOL);
	fwrite(STDOUT, "It only took you " . ($tries += 2) . " guesses!" . PHP_EOL);
	fwrite(STDOUT, "" . PHP_EOL);
}



?>