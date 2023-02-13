    	<div id="content_left"> 
        	<div class="left1">
            	<h3>CHỨC NĂNG</h3>
                <p><a href="?module=<?=$module?>&act=them">Thêm Sản phẩm</a></p>
                <p><a href="?module=<?=$module?>">Danh sách Sản phẩm</a></p>
                <p><a href="?module=<?=$module?>">Thống kê</a></p>
            </div>

        </div>
        <div id="content_right"> 
        	<h1> QUẢN LÝ SẢN PHẨM</h1>
            <h2> DANH SÁCH SẢN PHẨM</h2>
            <div id="right_detail">
            <table width="100%" border="1" class="Content_Table" cellpadding="0" cellspacing="0">
            	<tr>
                	<td> id </td>
                    <td> Tên sách </td>
                    <td> Tác giả </td>
                    <td> Giá sách </td>
                    <td> Thao tác </td>
                </tr>
                <?php
				$rows = $sanpham->data;
				foreach($rows as $row)
				{
				?>
                <tr>
                	<td> <?=$row["id"]?> </td>
                    <td> <?=$row["title"]?> </td>
                    <td> <?=$row["author"]?> </td>
                    <td> <?=$row["price"]?> VNĐ </td>
                    <td> <a href="?module=<?=$module?>&act=sua&id=<?=$row["id"]?>"> Sửa </a>
        				- <a href="?module=<?=$module?>&act=xoa&id=<?=$row["id"]?>" 
                        		onClick="return confirm('Chắc chắn xóa?');"> Xóa </a> </td>
                </tr>
                <?php
				}
				?>
            </table>
			</div>
        </div>