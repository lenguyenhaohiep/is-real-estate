<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class User_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * Author: Hiep
     * Summary: Get User by ID
     * Parameter 1: UserID
     * Return: Record of User by ID
     */

    function GetUser($username) {
        $query = 'SELECT * FROM "user" WHERE username = ?';
        $result = $this->db->query($query, array($username))->row();
        return $result;
    }

    /*
     * Author: Hiep
     * Summary: Get All of User
     * Parameter 1:
     * Parameter 2:
     * Return: list of user whose duty is normal user
     */

    function GetALlUsers() {
        $query = 'SELECT * FROM "user" WHERE DUTY = \'Người dùng\'';
        $result = $this->db->query($query)->result();
        return $result;
    }

    /*
     * Author: Hiep
     * Summary: Get all of Admins
     * Return: list of user whose duty is admin
     */

    function GetALlAdmins() {
        $query = 'SELECT * FROM "user" WHERE DUTY = \'Quản trị\'';
        $result = $this->db->query($query)->result();
        return $result;
    }

    /*
     * Author: Hiep
     * Summary: Add New User
     * Parameter 1: $newUser is an array contains attributes of new user
     * Return: the result of executing of query
     */

    function AddNewUser($newUser) {
        $query = $this->db->insert('"user"', $newUser);
        $rows = $this->db->count_all_results();
        return ($rows == 1);
    }

    /*
     * Author: Hiep
     * Summary:  Delete User
     * Parameter 1: user ID
     * Return: the result of Executing of query
     */

    function DeleteUser($userID) {
        $query = 'DELETE FROM "user" WHERE USERID = ?';
        $result = $this->db->query($query, array($userID));
        $rows = $this->db->count_all_results();
        return $rows;
    }

    /*
     * Author: Hiep
     * Summary: Update User
     * Parameter 1:array attributes of user
     * Return:
     */

    function UpdateUser($object) {
        $data = array($object["name"],$object["email"],$object["birthday"],$object["tel"],$object["address"],$object["username"]);
        $query="UPDATE \"user\" SET name=?,email=?,birthday=?,tel=?,address=? where username=?";
        $this->db->query($query,$data);
        $rows = $this->db->count_all_results();
        return $rows;
    }

    /*
     * Author: Hiep
     * Summary: Change Password
     * Parameter 1: $userID
     * Parameter 2: $password is the new password and is encoded with MD5
     * Return: the result of executing of query
     */

    function ChangePassword($userID, $password) {
        $query = "UPDATE \"user\" SET PASSWORD = ? WHERE USERID = ?";
        $result = $this->db->query($query, array($password, $userID));
        return $rows = $this->db->count_all_results();
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function CheckOldPassword($userID, $oldPassword) {
        $query = 'select count(*) as unique from "user" where userid=? and password=?';
        $result = $this->db->query($query, array($userID, $oldPassword))->row()->unique;
        return $result;
    }

    /*
     * Author: Hiep
     * Summary: Validate Data format
     * Parameter 1: Account Object
     * Return: boolean = true if birthday is suitable
     */

    function ValidateDataFormat($object) {
        $now = gmdate("d/m/Y", time());
        return ($now > $object['birthday']);
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function ValidateUser() {
        
    }

    /*
     * Author: Hiep
     * Summary: Check Unique User
     * Parameter 1: Object
     * Return: string if username is existed, else return NULL
     */

    function ValidateUnique($object) {
        $query = 'select count(*) as unique from "user" where username=? and email=?';
        $result = $this->db->query($query, array($object["username"], $object["email"]))->row()->unique;
        return ($result == 0);
    }

    /*
     * Author:
     * Summary: 
     * Parameter 1:
     * Parameter 2:
     * Return:
     */

    function FindByID() {
        
    }

}

?>