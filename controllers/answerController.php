<?php

class answerController
{
    public function action($params)
    {

        if (isset($_POST['dateOfBirth'])) {
            $dateOfBirth = $_POST['dateOfBirth'];

//            vd($dateOfBirth);

        $zodiac = '';
        list ($month, $day) = explode('-', $dateOfBirth);

        if (($month == 3 && $day > 20) || ($month == 4 && $day < 20)) {
            $zodiac = "Aries";
        } elseif (($month == 4 && $day > 19) || ($month == 5 && $day < 21)) {
            $zodiac = "Taurus";
        } elseif (($month == 5 && $day > 20) || ($month == 6 && $day < 21)) {
            $zodiac = "Gemini";
        } elseif (($month == 6 && $day > 20) || ($month == 7 && $day < 23)) {
            $zodiac = "Cancer";
        } elseif (($month == 7 && $day > 22) || ($month == 8 && $day < 23)) {
            $zodiac = "Leo";
        } elseif (($month == 8 && $day > 22) || ($month == 9 && $day < 23)) {
            $zodiac = "Virgo";
        } elseif (($month == 9 && $day > 22) || ($month == 10 && $day < 23)) {
            $zodiac = "Libra";
        } elseif (($month == 10 && $day > 22) || ($month == 11 && $day < 22)) {
            $zodiac = "Scorpio";
        } elseif (($month == 11 && $day > 21) || ($month == 12 && $day < 22)) {
            $zodiac = "Sagittarius";
        } elseif (($month == 12 && $day > 21) || ($month == 1 && $day < 20)) {
            $zodiac = "Capricorn";
        } elseif (($month == 1 && $day > 19) || ($month == 2 && $day < 19)) {
            $zodiac = "Aquarius";
        } elseif (($month == 2 && $day > 18) || ($month == 3 && $day < 21)) {
            $zodiac = "Pisces";
        }
          //  include 'templates/answer.php';
        //var_dump($zodiac);
        return $zodiac;

        }
        
    }
}
?>