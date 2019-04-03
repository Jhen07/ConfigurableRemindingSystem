<?php
require_once('Conn.php');

class User extends Connection{

	private $db;

	public function __construct() {
		$this->db = parent::__construct();
	}
	public function login($username, $password) {

		$sql = "SELECT * FROM staffinfo WHERE username='$username' AND password='$password' LIMIT 1";
		$result = $this->db->query($sql);

		if ($result->num_rows > 0) {
		    $row = $result->fetch_assoc();
				$_SESSION['user_session'] = $row['studentid'];
				$_SESSION['message'] = ''	;
				return true;
		} else {
			$_SESSION['message'] = "<p>TRY AGAIN!</p>";
			return false;
		}
	}

	public function admin($useradmin, $passadmin) {

		$sql = "SELECT * FROM admin WHERE useradmin='$useradmin' AND passadmin='$passadmin' LIMIT 1";
		$result = $this->db->query($sql);

		if ($result->num_rows > 0) {
		    $row = $result->fetch_assoc();
				$_SESSION['user_session'] = $row['adminid'];
				$_SESSION['message'] = ''	;
				return true;
		} else {
			$_SESSION['message'] = "TRY AGAIN!";
			return false;
		}
	}

	public function register($firstname, $middlename, $lastname, $dateofbirth, $dateofbaptism, $locale, $churchid, $address, $contact, $emailaddress, $username, $password) {
		if (isset($firstname) && isset($middlename) && isset($lastname) && isset($dateofbirth) && isset($dateofbaptism) && isset($locale) && isset($churchid) && isset($address) && isset($contact) && isset($emailaddress) && isset($username) && isset($password)) {

			$sql = "INSERT INTO studentinfo (firstname, middlename, lastname, dateofbirth, dateofbaptism, locale, churchid, address, contact, emailaddress, username, password)
			VALUES ('$firstname', '$middlename', '$lastname', '$dateofbirth', '$dateofbaptism', '$locale', 'churchid', '$address', '$contact', '$emailaddress', '$username', '$password')";

			if ($this->db->query($sql)) {
				$_SESSION['message'] = "Successful registration";
			    return true;
			} else {	
				$_SESSION['message'] = $this->db->error;
				return false;
			}			
		} 

		$_SESSION['message'] = "I need all the data!";
		return false;
	}

	public function newstaff($firstname, $middlename, $lastname, $dateofbirth, $dateofbaptism, $locale, $churchid, $address, $contact, $emailaddress, $username, $password) {
		if (isset($firstname) && isset($middlename) && isset($lastname) && isset($dateofbirth) && isset($dateofbaptism) && isset($locale) && isset($churchid) && isset($address) && isset($contact) && isset($emailaddress) && isset($username) && isset($password)) {

			$sql = "INSERT INTO staffinfo (firstname, middlename, lastname, dateofbirth, dateofbaptism, locale, churchid, address, contact, emailaddress, username, password)
			VALUES ('$firstname', '$middlename', '$lastname', '$dateofbirth', '$dateofbaptism', '$locale', 'churchid', '$address', '$contact', '$emailaddress', '$username', '$password')";

			if ($this->db->query($sql)) {
				$_SESSION['message'] = "Successful registration";
			    return true;
			} else {	
				$_SESSION['message'] = $this->db->error;
				return false;
			}			
		} 

		$_SESSION['message'] = "I need all the data!";
		return false;
	}

	public function attend($name, $churchid, $dateattend, $typeofservice, $batch, $localattended, $proof) {
		if (isset($name) && isset($churchid) && isset($dateattend) && isset($typeofservice) && isset($batch) && isset($localattended) && isset($proof)) {

			$sql = "INSERT INTO attendanceform (name, churchid, dateattend, typeofservice, batch, localattended, proof)
			VALUES ('$name', '$churchid', '$dateattend', '$typeofservice', '$batch', '$localattended', '$proof')";

			if ($this->db->query($sql)) {
				$_SESSION['message'] = "Successfully submitted";
			    return true;
			} else {	
				$_SESSION['message'] = $this->db->error;
				return false;
			}			
		} 

		$_SESSION['message'] = "I need all the data!";
		return false;
	}


	public function update($studentid, $firstname, $middlename, $lastname, $dateofbirth, $dateofbaptism, $locale, $churchid, $address, $contact, $emailaddress, $username, $password) {
		if (isset($firstname) && isset($middlename) && isset($lastname) && isset($dateofbirth) && isset($dateofbaptism) && isset($locale) && isset($churchid) && isset($address) && isset($contact) && isset($emailaddress) && isset($username) && isset($password)) {

			$sql = "UPDATE studentinfo SET firstname='$firstname', middlename='$middlename', lastname='$lastname', dateofbirth='$dateofbirth', dateofbaptism='$dateofbaptism', locale='$locale', churchid='$churchid', address='$address', contact='$contact', emailaddress='$emailaddress', username='$username', password='$password' WHERE studentid='$studentid'";

			if ($this->db->query($sql)) {
				$_SESSION['message'] = "Successfully update";
			    return true;
			} else {	
				$_SESSION['message'] = $this->db->error;
				return false;
			}			
		} 

		$_SESSION['message'] = "I need all the data!";
		return false;
	}

	public function getUserData($studentid) {
		$sql = "SELECT * FROM studentinfo WHERE studentid='$studentid' limit 1";
		$result = $this->db->query($sql);

		if ($result->num_rows > 0) {
			$row = mysqli_fetch_object($result);
			return $row;
		} else {
			return false;
		}
	}

	public function getUserData1($adminid) {
		$sql = "SELECT * FROM admin WHERE adminid='$adminid' limit 1";
		$result = $this->db->query($sql);

		if ($result->num_rows > 0) {
			$row = mysqli_fetch_object($result);
			return $row;
		} else {
			return false;
		}
	}


	public function getUserData2($bid) {
		$sql = "SELECT * FROM attendanceform WHERE bid='$bid'";
		$result = $this->db->query($sql);

		if ($result->num_rows > 0) {
			$row = mysqli_fetch_object($result);
			return $row;
		} else {
			return false;
		}
	}

	public function isLoggedIn() {
		if(isset($_SESSION['user_session'])) {
			return true;
		}	
		return false;
	}

	public function logout() {
		session_destroy();
        unset($_SESSION['user_session']);
        return true;
	}
}
