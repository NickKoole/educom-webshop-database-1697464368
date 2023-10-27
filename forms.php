<?php

    function showFormField($fieldName, $label, $inputType, $commPref) {        
		
        switch ($inputType){
            case ("text"):
                echo '<label for="' . $fieldName . '">' . $label . '</label>
                <input type="text" id="' . $fieldName .  '" name="' . $fieldName . '" ';
                break;
            case ("radio"):
                echo '<input type="radio" id="' . $fieldName . '" name="' . $fieldName . '" value="' . $commPref . '">
                <label for="' . $fieldName . '">' . $label . '</label><br>';
                break;
            }
    }

    function showFormStart() {
        echo '<br><form method="post" action="index.php">'; 
    }
        
    function showFormEnd() {
        echo '<input type="submit" value="Verzenden">';
        echo '</form>';
    }

    function showAddToCartAction($productId, $page, $buttonText) {
        if (isUserLoggedIn()) {
            showFormStart();
            echo '<input type="hidden" name="page" value="' . $page . '">' .
            '<input type="hidden" name="product_id" value="' . $productId . '">' .
            '<input type="hidden" name="userAction" value="addToCart">';
            showFormField('quantity', 'Aantal', 'text');
            echo '" placeholder="0">';
            echo '<input type="submit" value="' . $buttonText . '">';
            echo '</form>';     
        }
    }

    function showBuyAction($buttonText) {
        showFormStart();
            echo '<input type="hidden" name="page" value="cart">'; 
            echo '<input type="hidden" name="userAction" value="completeOrder">';
            echo '<input class="buyActionButton" type="submit" value="' . $buttonText . '">';
    }
?>