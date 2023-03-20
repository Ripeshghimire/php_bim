
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    function isInList($listOfCountries, $searchValue){
        $countries= $listOfCountries;
        $value= $searchValue;
        if(in_array($value, $countries)){
            echo $value ."is in the list";
        }
    }
    $countryList= array( "Nepal", "India", "China", "Bangladesh", "Bhutan", "Maldives", "Germany");
    isInList($countryList, "Nepal");
?>
</body>
</html>