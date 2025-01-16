<?php
$X= 67;
$Y=29;

if ($X < 25) {

   echo "the number dont sweet here";
}else{
    echo "ayee it is";
}
?>
ALTER TABLE register
ADD COLUMN Username VARCHAR(255),
ADD COLUMN Bio TEXT,
ADD COLUMN Gender VARCHAR(10),
ADD COLUMN Relationship VARCHAR(50);
