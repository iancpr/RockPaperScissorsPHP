<?php

//USER CHOOSES R, P, S
//SGL WITH FUNCTION AND IF STATEMENT CONFIRMING USER INPUT
echo "Do you feel lucky??! Enter your choice: R, P, or S \n";
$RPS = stream_get_line(STDIN, 2, "\n");


//INFO
//Check input.  Has user entered Rock, Paper or Scissors - is it empty or NULL? If NULL - re-serve the question only. If NULL again DIE and request user to restart - WORKING
if ($RPS == null) {echo "You have not entered anything. Enter your choice again! R, P,  or S? \n";
$RPS = stream_get_line(STDIN, 50, "\n");}
if ($RPS == null) {die ( 'You did not enter a choice again. Please restart') ;}

function RockPaperScissors ($RPS)
{
if ($RPS == "r") {return 'Thank you, you chose ROCK' . "\n";}
if ($RPS == 'R') {return 'Thank you, you chose ROCK' . "\n";}
if ($RPS == 'p') {return 'Thank you, you chose PAPER' . "\n";}
if ($RPS == 'P') {return 'Thank you, you chose PAPER' . "\n";}
if ($RPS == 's') {return 'Thank you, you chose SCISSORS' . "\n";}
if ($RPS == 'S') {return 'Thank you, you chose SCISSORS' . "\n";}

//If any other letter or word is entered, program stops
else {die ('Invalid choice! Try again') . "\n";}

}
$message = RockPaperScissors($RPS);
echo $message;



//COMPUTER'S CHOICE

//Random integer
$crps = rand (0,2);
function ComputerRockPaperScissors ($crps)
{
if ($crps == 0) {return 'Computer chose ROCK' . "\n";}
if ($crps == 1) {return 'Computer chose PAPER' . "\n";}
if ($crps == 2) {return 'Computer chose SCISSORS' . "\n";}
}
$message = ComputerRockPaperScissors($crps);
echo $message;


//Compare results
function CompareResults ($RPS, $crps)
{
    //USER CHOOSES ROCK RESULTS (0='r', 1='p', 2='s')
    if ($RPS == 'r' && $crps == 0) {return 'Game drawn. Please try again!';}
    if ($RPS == 'R' && $crps == 0) {return 'Game drawn. Please try again!';}
    if ($RPS == 'r' && $crps == 1) {return 'Tut tut! Computer wins! Paper covers Rock. Please try again!';}
    if ($RPS == 'R' && $crps == 1) {return 'Tut tut! Computer wins! Paper covers Rock. Please try again!';}
    if ($RPS == 'r' && $crps == 2) {return 'You win! Rock blunts Scissors. Please try again!';}
    if ($RPS == 'R' && $crps == 2) {return 'You win! Rock blunts Scissors. Please try again!';}
    
    //USER CHOOSES PAPER RESULTS (0='r', 1='p', 2='s')
    if ($RPS == 'p' && $crps == 0) {return 'You win! Paper covers Rock. Please try again!';}
    if ($RPS == 'P' && $crps == 0) {return 'You win! Paper covers Rock. Please try again!';}
    if ($RPS == 'p' && $crps == 1) {return 'Game drawn. Please try again!';}
    if ($RPS == 'P' && $crps == 1) {return 'Game drawn. Please try again!';}
    if ($RPS == 'p' && $crps == 2) {return 'Tut tut! Computer wins! Scissors cut Paper. Please try again!';}
    if ($RPS == 'P' && $crps == 2) {return 'Tut tut! Computer wins! Scissors cut Paper. Please try again!';}
    
    //USER CHOOSES SCISSORS RESULTS (0='r', 1='p', 2='s')
    if ($RPS == 's' && $crps == 0) {return 'Tut tut! Computer wins! Rock blunts Scissors. Please try again!';}
    if ($RPS == 'S' && $crps == 0) {return 'Tut tut! Computer wins! Rock blunts Scissors. Please try again!';}
    if ($RPS == 's' && $crps == 1) {return 'You win! Scissors cut Paper. Please try again!';}
    if ($RPS == 'S' && $crps == 1) {return 'You win! Scissors cut Paper. Please try again!';}
    if ($RPS == 's' && $crps == 2) {return 'Game drawn. Please try again!';}
    if ($RPS == 'S' && $crps == 2) {return 'Game drawn. Please try again!';}
}
$message = CompareResults($RPS, $crps);
echo $message;

