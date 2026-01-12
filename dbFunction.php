
    <?php  
    require_once 'dbConnect.php';  
   session_start();

class dbFunction {
    private $conn;

    public function __construct() {
        $db = new dbConnect();
        $this->conn = $db->conn;
    }

    public function UserRegister($username, $email, $password) {
        // Hash password with md5
        $password = md5($password);

        $stmt = $this->conn->prepare(
            "INSERT INTO user (username, email, password) VALUES (?, ?, ?)"
        );

        $stmt->bind_param("sss", $username, $email, $password);

        return $stmt->execute(); // returns TRUE or FALSE
    }

    public function Login($email, $password) {
        $password = md5($password);

        $stmt = $this->conn->prepare(
            "SELECT id, username, email FROM user WHERE email = ? AND password = ?"
        );

        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user_data = $result->fetch_assoc();

            $_SESSION['login'] = true;
            $_SESSION['uid'] = $user_data['id'];
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['email'] = $user_data['email'];

            return true;
        }

        return false;
    }

    public function isUserExist($email) {
        $stmt = $this->conn->prepare(
            "SELECT id FROM user WHERE email = ?"
        );

        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }
}
    ?>  
