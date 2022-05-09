<?php
	if(!defined('SOURCES')) die("Error");

	/* Kiểm tra active attribute */
	if(isset($config['attribute']))
	{
		$arrCheck = array();
		foreach($config['attribute'] as $k => $v) $arrCheck[] = $k;
		if(!count($arrCheck) || !in_array($type,$arrCheck)) $func->transfer("Trang không tồn tại", "index.php", false);
	}
	else
	{
		$func->transfer("Trang không tồn tại", "index.php", false);
	}

	switch($act)
	{
		case "man":
			get_items();
			$template = "attribute/man/items";
			break;

		case "add":		
			$template = "attribute/man/item_add";
			break;

		case "edit":		
			get_item();
			$template = "attribute/man/item_add";
			break;

		case "save":
			save_item();
			break;

		case "delete":
			delete_item();
			break;

		default:
			$template = "404";
	}

	/* Get attribute */
	function get_items()
	{
		global $d, $func, $curPage, $items, $paging, $type;

		$where = "";
		
		if(isset($_REQUEST['keyword']))
		{
			$keyword = htmlspecialchars($_REQUEST['keyword']);
			$where .= " and (tenvi LIKE '%$keyword%' or tenen LIKE '%$keyword%')";
		}

		$per_page = 10;
		$startpoint = ($curPage * $per_page) - $per_page;
		$limit = " limit ".$startpoint.",".$per_page;
		$sql = "select * from #_attribute where type = ? $where order by stt,id desc $limit";
		$items = $d->rawQuery($sql,array($type));
		$sqlNum = "select count(*) as 'num' from #_attribute where type = ? $where order by stt,id desc";
		$count = $d->rawQueryOne($sqlNum,array($type));
		$total = $count['num'];
		$url = "index.php?com=attribute&act=man&type=".$type;
		$paging = $func->pagination($total,$per_page,$curPage,$url);
	}

	/* Edit attribute */
	function get_item()
	{
		global $d, $func, $curPage, $item, $type;

		$id = (isset($_GET['id'])) ? htmlspecialchars($_GET['id']) : 0;

		if(!$id) $func->transfer("Không nhận được dữ liệu", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage, false);

		$item = $d->rawQueryOne("select * from #_attribute where id = ? and type = ? limit 0,1",array($id,$type));

		if(!$item['id']) $func->transfer("Dữ liệu không có thực", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage, false);
	}

	/* Save attribute */
	function save_item()
	{
		global $d, $curPage, $func, $config, $com, $type;

		if(empty($_POST)) $func->transfer("Không nhận được dữ liệu", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage, false);
		
		/* Post dữ liệu */
		$data = (isset($_POST['data'])) ? $_POST['data'] : null;
		if($data)
		{
			foreach($data as $column => $value)
			{
				$data[$column] = htmlspecialchars($value);
			}

			if(isset($_POST['slugvi'])) $data['tenkhongdauvi'] = $func->changeTitle(htmlspecialchars($_POST['slugvi']));
			else $data['tenkhongdauvi'] = (isset($data['tenvi'])) ? $func->changeTitle($data['tenvi']) : '';
			if(isset($_POST['slugen'])) $data['tenkhongdauen'] = $func->changeTitle(htmlspecialchars($_POST['slugen']));
			else $data['tenkhongdauen'] = (isset($data['tenen'])) ? $func->changeTitle($data['tenen']) : '';
			$data['hienthi'] = (isset($data['hienthi'])) ? 1 : 0;
			$data['type'] = $type;
		}

		/* Post seo */
		if(isset($config['attribute'][$type]['seo']) && $config['attribute'][$type]['seo'] == true)
		{
			$dataSeo = (isset($_POST['dataSeo'])) ? $_POST['dataSeo'] : null;
			if($dataSeo)
			{
				foreach($dataSeo as $column => $value)
				{
					$dataSeo[$column] = htmlspecialchars($value);
				}
			}
		}

		$id = (isset($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;

		if($id)
		{
			if(isset($_FILES['file']))
			{
				$file_name = $func->uploadName($_FILES['file']["name"]);
				if($photo = $func->uploadImage("file", $config['attribute'][$type]['img_type'], UPLOAD_attribute,$file_name))
				{
					$data['photo'] = $photo;
					$row = $d->rawQueryOne("select id, photo from #_attribute where id = ? and type = ? limit 0,1",array($id,$type));
					if($row['id']) $func->delete_file(UPLOAD_attribute.$row['photo']);
				}
			}

			$data['ngaysua'] = time();

			$d->where('id', $id);
			$d->where('type', $type);
			if($d->update('attribute',$data))
			{
				/* SEO */
				if(isset($config['attribute'][$type]['seo']) && $config['attribute'][$type]['seo'] == true)
				{
					$d->rawQuery("delete from #_seo where idmuc = ? and com = ? and act = ? and type = ?",array($id,$com,'man',$type));

					$dataSeo['idmuc'] = $id;
					$dataSeo['com'] = $com;
					$dataSeo['act'] = 'man';
					$dataSeo['type'] = $type;
					$d->insert('seo',$dataSeo);
				}

				$func->transfer("Cập nhật dữ liệu thành công", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage);
			}
			else $func->transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage, false);
		}
		else
		{
			if(isset($_FILES['file']))
			{
				$file_name = $func->uploadName($_FILES['file']["name"]);
				if($photo = $func->uploadImage("file", $config['attribute'][$type]['img_type'], UPLOAD_attribute,$file_name))
				{
					$data['photo'] = $photo;
				}
			}
			
			$data['ngaytao'] = time();

			if($d->insert('attribute',$data))
			{
				$id_insert = $d->getLastInsertId();

				/* SEO */
				if(isset($config['attribute'][$type]['seo']) && $config['attribute'][$type]['seo'] == true)
				{
					$dataSeo['idmuc'] = $id_insert;
					$dataSeo['com'] = $com;
					$dataSeo['act'] = 'man';
					$dataSeo['type'] = $type;
					$d->insert('seo',$dataSeo);
				}

				$func->transfer("Lưu dữ liệu thành công", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage);
			}
			else $func->transfer("Lưu dữ liệu bị lỗi", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage, false);
		}
	}

	/* Delete attribute */
	function delete_item()
	{
		global $d, $curPage, $func, $com, $type;

		$id = (isset($_GET['id'])) ? htmlspecialchars($_GET['id']) : 0;
		
		if($id)
		{
			/* Xóa SEO */
			$d->rawQuery("delete from #_seo where idmuc = ? and com = ? and act = ? and type = ?",array($id,$com,'man',$type));

			/* Lấy dữ liệu */
			$row = $d->rawQueryOne("select id, photo from #_attribute where id = ? and type = ? limit 0,1",array($id,$type));

			if($row['id'])
			{
				$func->delete_file(UPLOAD_attribute.$row['photo']);
				$d->rawQuery("delete from #_attribute where id = ?",array($id));

				$func->transfer("Xóa dữ liệu thành công", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage);
			}
			else $func->transfer("Xóa dữ liệu bị lỗi", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage, false);
		}
		elseif(isset($_GET['listid']))
		{
			$listid = explode(",",$_GET['listid']);

			for($i=0;$i<count($listid);$i++)
			{
				$id = htmlspecialchars($listid[$i]);

				/* Xóa SEO */
				$d->rawQuery("delete from #_seo where idmuc = ? and com = ? and act = ? and type = ?",array($id,$com,'man',$type));

				/* Lấy dữ liệu */
				$row = $d->rawQueryOne("select id, photo from #_attribute where id = ? and type = ? limit 0,1",array($id,$type));

				if($row['id'])
				{
					$func->delete_file(UPLOAD_attribute.$row['photo']);
					$d->rawQuery("delete from #_attribute where id = ?",array($id));
				}
			}
			
			$func->transfer("Xóa dữ liệu thành công", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage);
		} 
		else $func->transfer("Không nhận được dữ liệu", "index.php?com=attribute&act=man&type=".$type."&p=".$curPage, false);
	}
?>