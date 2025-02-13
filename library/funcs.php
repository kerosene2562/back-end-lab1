<?php

    function convertor($uah)
    {
        $usd = 41.84;
        $convertedToUsd = round($uah/$usd, 1);
        echo "$uah uah можна обміняти на $convertedToUsd usd";
    }

    function season($numOfSeason)
    {
        if($numOfSeason == 12 || $numOfSeason == 1 || $numOfSeason == 2)
        {
            echo "зараз зима";
        }
        else if($numOfSeason == 3 || $numOfSeason == 4 || $numOfSeason == 5)
        {
            echo "зараз весна";
        }
        else if($numOfSeason == 6 || $numOfSeason == 7 || $numOfSeason == 8)
        {
            echo "зараз літо";
        }
        else
        {
            echo "зараз осінь";
        }
    }

    function isVowelLetter($letter)
    {
        switch($letter)
        {
            case 'а':
            case 'е':
            case 'є':
            case 'и':
            case 'і':
            case 'ї':
            case 'о':
            case 'у':
            case 'ю':
            case 'я':
            {
                echo "літера $letter голосна";
                break;
            }
            default:
            {
                echo "літера $letter приголосна";
                break;
            }
        }
    }

    function workWithNumber()
    {
        $number = mt_rand(100, 999);
        $digits = str_split((int)$number);
        $sum = 0;
        $reversed = [];
        foreach($digits as $digit)
        {
            $sum += $digit;
            array_push($reversed, $digit);
        }
        echo "<p>сума цифр числа $number = $sum</p>";
        echo "<p>зворотнє число: ".implode('',array_reverse($reversed))."</p>";
        rsort($reversed);
        echo "<p>найбільше число з цифр заданого числа: ".implode($reversed)."</p>";
    }

    function createTable($n)
    {
        echo "<table border='1'>";
        for($i = 0; $i < $n; $i++)
        {
            echo "<tr>";
            for($j = 0; $j < $n; $j++)
            {
                if(($i + $j) %2 ==0)
                    echo "<th style='background:brown;'>$i;$j</th>";
                else
                    echo "<th>$i;$j</th>";
            }
            echo "</th>";
        }
        echo "</table>";
    }

    function createBlocks($n)
    {
        echo "<div style='width:100%; height:85vh; position:relative; background-color:black;'>";
        for($i = 0; $i < $n; $i++)
        {
            createBlock(mt_rand(0,80), mt_rand(0,90), mt_rand(1,100));
        }
        echo "</div>";
    }

    function createBlock($top, $left, $size)
    {
        echo "<div style='width:{$size}px; height:{$size}px; background-color: red; position:absolute; top:{$top}vh; left:{$left}vw; border: 3px solid grey;'></div>";
    }