<?php

echo '<a href="activiteit.php?id=' . $row->id . '" class="a-evenementpanel">';
echo '<div class="a-evenementpanel card my-3" style="border: 1px solid #82c5a0 !important; position: relative; overflow: hidden;">';
echo    '<div class="row ">';
echo        '<div class="col-md-3 img-hover" style="padding: 0;">';
echo            '<img class="d-block w-100 h-100 img-responsive" src="../images/winkel_evenementen/winkel_evenement-' . $row->id . '.png" alt="' . $row->evenement_naam . '">';
echo        '</div>';
echo        '<div class="col-md-9 px-3">';
echo            '<div class="p-3 text-left">';
echo                '<div class="row">';
echo                    '<div class="col col-12 col-sm-12 col-md-12 col-lg-6">';
echo                        '<h4 class="p-donkergroen">' . $row->evenement_naam . '</h4>';
echo                     '</div>';
echo                     '<div class="col col-12 col-sm-12 col-md-12 col-lg-6">';
echo                        '<p class="p-donkergroen" style="white-space: pre;"><i class="fas fa-clock" style="color: #e9cac8 ;"></i> ' . $row->tijd . '     <i class="fas fa-map-marker-alt" style="color: #e9cac8 ;"></i> '. $row->plaats . '</p>';
echo                     '</div>';
echo                 '</div>';
echo                 '<p class="card-text pt-2">' . $row->beschrijving_kort . ' <span class="a-leesmeer">read more</span></p>';
echo            '</div>';
echo        '</div>';
echo    '</div>';
echo '</div>';
echo '</a>';
?>