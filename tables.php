<?php

function showTable($data) {

    print_r($data);
    echo '<br><br><br>';

    tableStart();
    echo '<tr>';  
    headerCell('Foto:'); 
    headerCell('Naam:');
    headerCell('Beschrijving:');
    headerCell('Prijs per stuk:');
    headerCell('Hoeveelheid:');
    headerCell('Subtotaal:');
    echo '</tr>';
    
    foreach ($data['cartLines'] as $product_id => $value){
        echo '<a class="productLink" href="index.php?page=details&product_id=' . $product_id . '"><div>';
        echo '<tr>';
        dataCell('<img src="' . $data['cartLines'][$product_id]['product_picture_location'] . '" alt="Een foto">', $product_id);
        dataCell($data['cartLines'][$product_id]['name'], $product_id);
        dataCell($data['cartLines'][$product_id]['description'], $product_id);
        dataCell('€' . $data['cartLines'][$product_id]['price']);
        dataCell($data['cartLines'][$product_id]['amount']);
        dataCell('€'. $data['cartLines'][$product_id]['subTotal']);
        echo '</tr>';
        echo '</div></a>';
    }

    tableEnd();
}

function dataCell($value = "", $product_id = "") {
    if ($product_id != ""){
        echo '<td><a class="productLink" href="index.php?page=details&product_id=' . $product_id . '"><div class="pagetext">' . $value . '</div></a></td>';
    } else {
        echo '<td>' . $value . '</td>';
    }
    
}

function headerCell($value) {
    echo '<th>' . $value . '</th>';
}

function tableStart() {
    echo '<table class="center">';
}

function tableEnd() {
    echo '</table>';
}
?>