<?php 
$fichier = $_GET["C:\Users\maril\OneDrive\Documents\PORTFOLIO\Portfolio\CV 2022 MICHEL.pdf"]; 
header('Content-Type: application/pdf'); 
header('Content-Disposition: attachment; filename="C:\Users\maril\OneDrive\Documents\PORTFOLIO\Portfolio\CV 2022 MICHEL.pdf"');
$pdf = file_put_contents($temp, file_get_contents($fichier));
echo $pdf; 

<a href="<a href="C:\Users\maril\OneDrive\Documents\PORTFOLIO\Portfolio\CV 2022 MICHEL.pdf"></a>">
<a href="C:\Users\maril\OneDrive\Documents\PORTFOLIO\Portfolio\CV 2022 MICHEL.pdf"></a></a>
?> 