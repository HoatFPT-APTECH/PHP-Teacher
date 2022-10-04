<?php
$array=['s12'=>"mai huy hoat","s13"=>"mai thi nhat  hang","s14"=>"pham thi diem quynh "];
$key=array_keys($array);
foreach ($key as $element){
    echo "key cua array: ".$element;
    printf("\n");
}
$i=0;
foreach ($array as $key=>$value){
    echo "<h2>phan tu thu".$i.": key: ".$key." | value: ".$value."</h2>";

    $i++;
}
