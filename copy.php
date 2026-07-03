<?php
$src_dir = 'C:\Users\Be quiet!\.gemini\antigravity\brain\0fe197d8-3ccd-438e-b69b-b11aaab205db\\';
$dest_dir = 'C:\xampp\htdocs\bikininwebsite.com\assets\images\\';

if(!is_dir($dest_dir)) mkdir($dest_dir, 0777, true);

$files = glob($src_dir . '*.png');
foreach($files as $file) {
    $filename = basename($file);
    if(strpos($filename, 'fb_mockup') !== false) copy($file, $dest_dir . 'portfolio_fb.png');
    if(strpos($filename, 'otomotif_mockup') !== false) copy($file, $dest_dir . 'portfolio_otomotif.png');
    
    // New UMKM
    if(strpos($filename, 'laundry_mockup') !== false) copy($file, $dest_dir . 'portfolio_laundry.png');
    if(strpos($filename, 'atk_mockup') !== false) copy($file, $dest_dir . 'portfolio_atk.png');
    if(strpos($filename, 'coffeeshop_mockup') !== false) copy($file, $dest_dir . 'portfolio_coffeeshop.png');
    if(strpos($filename, 'fashion_mockup') !== false) copy($file, $dest_dir . 'portfolio_fashion.png');
    if(strpos($filename, 'kuliner_mockup') !== false) copy($file, $dest_dir . 'portfolio_kuliner.png');
    if(strpos($filename, 'agribisnis_mockup') !== false) copy($file, $dest_dir . 'portfolio_agribisnis.png');
    
    // Logo
    if(strpos($filename, 'bikinin_logo') !== false) copy($file, $dest_dir . 'logo.png');
}
echo "Images copied successfully.";
?>
