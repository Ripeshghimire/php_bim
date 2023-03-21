<?php
/* 
    KCMIT:
    Q.2 Write a function which accepts month from the user and displays no. of 
    days in that month. 
*/

function displayMonth($month)
{

    switch ($month) {
        case 1:
            echo "January has 31 days";
            break;
        case 2:
            echo "February has 28 days";
            break;
        case 3:
            echo "March has 31 days";
            break;
        case 4:
            echo "April has 30 days";
            break;
        case 5:
            echo "May has 31 days";
            break;
        case 6:
            echo "June has 30 days";
            break;
        case 7:
            echo "July has 31 days";
            break;
        case 8:
            echo "August has 31 days";
            break;
        case 9:
            echo "September has 30 days";
            break;
        case 10:
            echo "October has 31 days";
            break;
        case 11:
            echo "November has 30 days";
            break;
        case 12:
            echo "December has 31 days";
            break;
        default;
            echo "Enter a valid month";
    }
}

// displayMonth(2);