<?php
function ThuVien($file,$folder){
    $file_name=$file["name"];

    $temp_file=$file['tmp_name'];
    $error=[];
    $file_size=$file['size'];
    $arr=explode('.',$file_name);
    $file_type=strtolower(end($arr));
 
    /// su ly dung luong file
    $allow_size=1024*100;// cho tối đa dung lượng là 10mb;
    if ($allow_size<$file_size) {

        $error[]=("<h3>Lỗi: Dung lượng file vượt quá 10 MB . Mời up lại</h3>");
        
        # code...
    }
  
    $hople=["jpg",'png','gif','jpeg'];
    if(in_array($file_type,$hople)==false){
        $error[]=("<h3>Lỗi định dạng File: Jpg,png,gif,jpeg</h3>");
    }
    if(count($error)>0){
        echo "<span style='color'>Lỗi upload: </span>";
        foreach($error as $element){
            echo $element;
        }
        // die;
    }
    else{
        move_uploaded_file($temp_file,"$folder/$file_name");// di chuyển file lên thư mục đã chọn
        echo " <h3 style='color:blue'>Upload file thành công</h3>";
        # code...
    }
  return $file_name;
}
?>