<?php
// Step 1: Establish database connection
$host = 'localhost';
$db = 'labphp';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve form data
$menuData = $_POST['menu'];
$submenuData = $_POST['submenu'];

// Step 3: Insert menu data into 'menu' table
$menuInsertSql = "INSERT INTO menu (title, url, icon) VALUES (?, ?, ?)";
$menuStmt = $conn->prepare($menuInsertSql);
$menuStmt->bind_param("sss", $menuTitle, $menuUrl, $menuIcon);

// Step 4: Insert submenu data into 'submenu' table
$submenuInsertSql = "INSERT INTO submenu (menu_id, title, url, icon) VALUES (?, ?, ?, ?)";
$submenuStmt = $conn->prepare($submenuInsertSql);
$submenuStmt->bind_param("isss", $menuId, $submenuTitle, $submenuUrl, $submenuIcon);

// Step 5: Save menu and submenu data
foreach ($menuData as $index => $menu) {
    $menuTitle = $menu['title'];
    $menuUrl = $menu['url'];
    $menuIcon = $menu['icon'];
    
    // Insert menu data
    $menuStmt->execute();
    $menuId = $conn->insert_id;

    // Iterate through corresponding submenu data
    foreach ($submenuData[$index] as $subIndex => $submenu) {
        $submenuTitle = $submenu['title'];
        $submenuUrl = $submenu['url'];
        $submenuIcon = $submenu['icon'];

        // Insert submenu data with the corresponding menu_id
        $submenuStmt->execute();
    }
}

// Step 6: Close database connection
$menuStmt->close();
$submenuStmt->close();
$conn->close();

// // Redirect or display a success message
// header("Location: success.php");
exit();
?>
