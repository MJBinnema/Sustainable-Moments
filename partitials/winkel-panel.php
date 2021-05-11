<?php

$row->id = $row->id;

echo '<div class="col col-12 col-sm-6 col-md-6 col-lg-4 py-2">';
echo    '<div class="card h-100" style="border-color: #82c5a0;">';
echo        '<a href="' . $row->website .'" target="_blank"><img class="card-img-top" src="images/winkels/winkel-' . $row->id . '.png"" alt="' . $row->winkel_naam . '"></a>';
echo        '<div class="card-body">';
echo            '<h5 class="card-title p-donkergroen text-left">'  . $row->winkel_naam . '</h5>';
echo            '<p class="card-text text-left p-lichtgroen"><i class="fas fa-map-marker-alt" style="color: #e9cac8 ;"></i> ' . $row->straat_naam . ' ' . $row->straat_nummer . '</p>';
echo            '<p class="card-text text-left" data-toggle="modal" data-target="#exampleModal' . $row->id . '" id="' . $row->id . '">
                    '    . $row->beschrijving_kort . ' <a class="a-leesmeer">lees meer</a>
                    </p>';
echo        '</div>';
echo    '</div>';
echo '</div>';

echo '<div class="modal fade text-left" style="border-color: #82c5a0;" id="exampleModal' . $row->id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
echo    '<div class="modal-dialog" role="document">';
echo      '<div class="modal-content">';
echo        '<div class="modal-header" style="border: none;">';
echo          '<h5 class="modal-title p-donkergroen" id="exampleModalLabel">' . $row->winkel_naam . '</h5>';
echo          '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
echo            '<span aria-hidden="true">&times;</span>';
echo          '</button>';
echo        '</div>';
echo       '<div class="modal-body"> '. $row->beschrijving . '</div>';
echo       '<div class="modal-body p-lichtgroen">
                <p><i class="fas fa-map-marker-alt pr-2" style="color: #e9cac8;"></i>' . $row->straat_naam . ' ' . $row->straat_nummer . ', ' . $row->postcode . ' ' . $row->stad . '</p>
                <p><i class="fas fa-phone-alt pr-2" style="color: #e9cac8;"></i>' . $row->telefoon . '</p>
                <p><i class="fas fa-globe pr-2" style="color: #e9cac8;"></i><a href="' . $row->website . '" style="color: #82c5a0;" target="_blank">' . $row->website . '</a></p>
                </div>';
echo     '</div>';
echo   '</div>';
echo '</div>';

?>
