<?php
    
	function getWebshopHeader() {
        return "Webshop";
    }
    
    function showWebshopBody($data) {
     
        echo '<h2>Ons assortiment</h2>';
        showWebshopProducts($data);
    }

    function showWebshopProducts($data) {

        $amountOfProducts = count($data['products']);

        echo '<span>' . $data['errProduct_id'] . '</span>';
        echo '<span>' . $data['errQuantity'] . '</span>';

        //Geeft per product het product_id, name, description, price en product_picture_location weer 
        for ($i = 1; $i <= $amountOfProducts; $i++){
            echo '<a class="productlink" href="index.php?page=details&product_id=' . $data['products'][$i]['product_id'] . '"><div>' .
            'Product id: ' . $data['products'][$i]['product_id'] . '<br>' .
            'Artikel: ' . $data['products'][$i]['name'] . '<br>' .
            'Beschrijving: ' . $data['products'][$i]['description'] . '<br>' .
            'Prijs: €' . $data['products'][$i]['price'] . '<br>' .
            '<img src="' . $data['products'][$i]['product_picture_location'] . '" alt="Een foto">' .
            '</div></a>';
            
            showAddToCartAction($data['products'][$i]['product_id'], 'webshop', 'Voeg toe aan winkelwagen');
        }
            
    }
?>