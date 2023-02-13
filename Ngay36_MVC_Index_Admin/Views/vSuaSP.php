    	<div id="content_left"> 
        	<div class="left1">
            	<h3>CHỨC NĂNG</h3>
                <p><a href="?module=sanpham&act=them">Thêm Sản phẩm</a></p>
                <p><a href="#">Danh sách Sản phẩm</a></p>
                <p><a href="#">Thống kê</a></p>
            </div>

        </div>
        <div id="content_right"> 
        	<h1> QUẢN LÝ SẢN PHẨM</h1>
            <h2> SỬA SẢN PHẨM</h2>
            <div id="right_detail">
            <?php
				$row = $sanpham->data;
			?>
			<form name="form1" method="post" action="?module=sanpham&act=xulysua">
				<input type="hidden" name="id" id="id" value="<?=$id?>">
			  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
				  <td width="142" height="30">Tên sách:</td>
				  <td width="258"><input type="text" name="t1" id="t1"  value="<?=$row["title"];?>"></td>
				</tr>
				<tr>
				  <td height="30">Tác giả:</td>
				  <td><input type="text" name="t2" id="t2"  value="<?=$row["author"]?>"></td>
				</tr>
				<tr>
				  <td height="30">Giá:</td>
				  <td><input type="text" name="t3" id="t3"  value="<?=$row["price"]?>"></td>
				</tr>
				<tr>
                  <td></td>
				  <td><input type="submit" name="button" id="button" value="Đồng ý"></td>
				</tr>
			  </table>
			</form>

			</div>
        </div>
