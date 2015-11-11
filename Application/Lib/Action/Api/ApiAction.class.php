<?php
class ApiAction extends Action {
	public function login($username, $password) {
		$where["username"] = $username;
		$where["password"] = md5($password);
		$result = M("Admin")->where($where)->find();
		if ($result) {
			return $result["username"];
		}
	}
	public function getsetting() {
		$result = M("Info")->find();
		if ($result) {
			return $result;
		}
	}
	public function setting($name, $notification) {
		$data["id"] = 1;
		$data["name"] = $name;
		$data["notification"] = $notification;
		$result = M("Info")->save($data);
		if ($result) {
			return $result;
		}
	}

	public function getarraymenu() {
		$result = M("Menu")->select();
		if ($result) {
			return $result;
		}
	}
	public function addmenu($parent, $name, $addmenu) {
		if ($addmenu == 0) {
			$data["name"] = $name;
			$data["pid"] = 0;
			$result = M("Menu")->add($data);
			if ($result) {
				return $result;
			}
		} else {
			$data["id"] = $addmenu;
			$data["name"] = str_replace("│ ", "", $name);
			$data["pid"] = $parent;
			$result = M("Menu")->save($data);
			if ($result) {
				return $result;
			}
		}
	}
	public function delmenu($id) {
		$result = M("Menu")->where(array(
			'id' => $id,
		))->delete();
		if ($result) {
			return $result;
		}
	}
	public function getmenuvalue($menu_id) {
		$result = M("Menu")->where(array(
			"id" => $menu_id,
		))->find();
		if ($result) {
			return $result["name"];
		}
	}
	public function addgood($data) {
		if ($data["id"]) {
			$result = M("Good")->save($data);
		} else {
			$result = M("Good")->add($data);
		}

		if ($result) {
			return $result;
		}
	}
	public function delgood($id) {
		$result = M("Good")->where(array(
			"id" => $id,
		))->delete();
		if ($result) {
			return $result;
		}
	}
	public function getgood() {
		$result = M("Good")->select();
		if ($result) {
			return $result;
		}
	}
	public function getgooddetail($id) {
		$result = M("Good")->where(array("id" => $id))->find();
		if ($result) {
			return $result;
		}
	}
	public function getTop() {
		$result = M("Good")->where(array("is_top" => 1))->select();
		if ($result) {
			return $result;
		}
	}
	public function dealTop($d, $id) {
		$data["is_top"] = $d;
		$result = M("Good")->where(array("id" => $id))->save($data);
		if ($result) {
			return $result;
		}
	}
}