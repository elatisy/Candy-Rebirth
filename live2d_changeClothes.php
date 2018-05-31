<?php  
    $clothes    = array("school-costume",
                        "pajamas-costume",
                        "default-costume",
                        "Animal-Costume",
                        "Dress-Costume-Brown",
                        "Dress-Costume",
                        "Healer-Costume",
                        "Kids-Costume",
                        "Maid-Costume",
                        "Night-Witch-Costume-Black",
                        "Santa-Costume",
                        "Sukumizu-Costume",
                        "Winter-Costume",
                        "Witch-Costume-White",
                        "Witch-Costume"
);
    $randomNum  = rand(0,count($clothes) - 1);
    $modelUrl   = "\"http://documents.elatis.cn/live2d_models/Pio/Pio_".$clothes[$randomNum].".json\"";
    echo $modelUrl;
?>