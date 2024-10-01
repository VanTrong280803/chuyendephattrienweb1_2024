<?php  
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;
$errors = []; 

function encodeUserId($id) {
    $mapping = [
        2 => '*&BUYG',
        3 => ')(*YH',
    ];
    return isset($mapping[$id]) ? $mapping[$id] : null; 
}


function decodeUserId($encodedId) {
    $mapping = [
        '*&BUYG' => 2,
        ')(*YH' => 3,
    ];
    return isset($mapping[$encodedId]) ? $mapping[$encodedId] : null; 
}


if (!empty($_GET['id'])) {
    $_id = decodeUserId($_GET['id']); 
}

if ($_id !== null) {
    $user = $userModel->findUserById($_id); // Update existing user
}

// Xử lý form submit
if (!empty($_POST['submit'])) {
    // Validate name
    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    } else {
        $name = $_POST['name']; 
        if (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $name)) {
            $errors[] = "Name không hợp lệ";
        }
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors[] = "Password is required.";
    } else {
        $password = $_POST['password'];
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/", $password)) {
            $errors[] = "Password không hợp lệ";
        }
    }

    if (empty($errors)) {
        $_POST['id'] = $_id; 
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $error) { ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form   
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_id); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user['name'])) echo htmlspecialchars($user['name']); ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
