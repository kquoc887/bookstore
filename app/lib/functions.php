<?php
	function stripUnicode($str) {
		if(!$str) return false;
		$unicode = array(
				'a'	=> 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
				'A'	=> 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
				'd'	=> 'đ',
				'D'	=> 'Đ',
				'e'	=> 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
				'E'	=> 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
				'i'	=> 'í|ì|ỉ|ĩ|ị',
				'I'	=>' Í|Ì|Ỉ|Ĩ|Ị',
				'o'	=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
				'O'	=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
				'u'	=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
				'U'	=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
				'y'	=>'ý|ỳ|ỷ|ỹ|ỵ',
				'Y'	=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
				'' 	=>'?|(|)|[|]|{|}|#|%|-|<|>|,|:|;|.|&|–|/'
		);
		foreach($unicode as $khongdau=>$codau) {
         	$arr=explode("|",$codau);
         	$str = str_replace($arr,$khongdau,$str);
      	}
      return $str;
	}

	function changeTitle($str) {
		$str = trim($str);
		if ($str=="") return "";
      	$str =str_replace('"','',$str);
      	$str =str_replace("'",'',$str);
		$str = stripUnicode($str);
		$str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
		$str = str_replace(' ', '-', $str);
		return $str;
	}

	function createOptions($menu , $selected = 0) {
		recursive($menu, 0, 1, $newArray);
		foreach ($newArray as $key => $value) {
			$strSelected = '';
			if ($value['id'] == $selected) {
				$strSelected = 'selected="selected"';
			}
			if ($value['level'] == 1) {
				echo '<option value="' . $value['id'] . '" ' . $strSelected .'>+' . $value['name'] .'</option>';
			} else {
				$name = str_repeat('&nbsp', ($value['level'] - 1) * 5 ) . '-' .$value['name'];
				echo '<option  value="' . $value['id'] . '" ' . $strSelected . '>' . $name .'</option>';
			}
		}
	}

	function recursive($data, $parent_id, $level, &$newArray) {
		if (count($data) > 0) {
			foreach ($data as $key => $value) {
				if($value['parent_id'] == $parent_id) {
					$value['level'] = $level;
					$newArray[]     = $value;
					unset($data[$key]);
					$newParent      = $value['id'];
					recursive($data, $newParent, $level +1, $newArray);

				}
			}
		}
	}

	function createMenu() {
		$menu_level1 = DB::table('categories')->where('parent_id', 0)->get();
		foreach ($menu_level1 as $key => $value) {
			echo '<li>' . $value->name . '</li>';
		}
		// if (count($data) > 0) {
		// 	$newString .= '<li>';
		// 	foreach ($data as $key => $value) {
		// 		if($value['parent_id'] == $parent_id) {
		// 			$newString     .= $value['name'] .'</li>';
		// 			unset($data[$key]);
		// 			$newParent      = $value['id'];
		// 			createMenu($data, $newParent, $newString);
		// 		}
		// 	}
		// }	
	}
?>