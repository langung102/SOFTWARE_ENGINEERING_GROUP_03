<?php
    class userModel extends Database {
        function login($username, $password) {
            $query = "SELECT * FROM employee WHERE user_name = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                if ($row["password"] == $password) { //change to verify_password later
                    $_SESSION["id"] = $row["id"];
                    $_SESSION["name"] = $row["name"];
                    $_SESSION["address"] = $row["address"];
                    $_SESSION["mail"] = $row["mail"];
                    $_SESSION["phone_number"] = $row["phone_number"];
                    $_SESSION["position"] = $row["position"];
                    $_SESSION["user_name"] = $row["user_name"];
                    $_SESSION["gender"] = $row["gender"];
                    return true;
                }
            }
            return false;
        }
    }
?>