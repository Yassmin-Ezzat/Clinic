<!-- 
// class Routere
// {
//     public static function handle($path = '/')
//     {
//         $path = '/' . ltrim($path, '/');
//         $root = '/clinic/views/index';
//         $id = null; 

//         $pattern = '/\/clinic\/views\/(product|editproduct|deleteproduct|edituser|deleteuser|makeuser|makeadmin)\?id=(\d+)/';
//         if (preg_match($pattern, $path, $matches)) {
//             // Extract the 'id' value from the matched URL
//             $action = $matches[1];
//             $id = $matches[2];

//             //  echo "id = " . $id;
//         }
        //  echo $path;
        //  echo "id = " .$id;
        // require "config.php";
        // session_start();


        // if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
        //     $result = mysqli_query($conn, "SELECT * FROM users where guest = '1' ");
        //     $row = mysqli_fetch_assoc($result);
        //     $_SESSION["login"] = true;
        //     $_SESSION["id"] = $row["id"];
        // }
     
      
//         if ($path === $root) {
//             require '../views/index.php';
//             exit();
//         } elseif ($path === '/clinic/views/product') {
//             require '../views/product.php';
//             exit();

//         } elseif ($path === '/clinic/views/collections') {
//             require '../views/collections.php';
//             exit();

//         } elseif ($path === '/clinic/views/profilesettings') {
//             require '../views/profilesettings.php';
//             exit();
//         } elseif ($path === '/clinic/views/logout') {
//             require '../views/logout.php';
//             exit();
//         } elseif ($path === '/clinic/views/registeration') {
//             require '../views/registeration.php';
//             exit();
//         } elseif ($path === '/clinic/views/adminDashboard') {
//             require '../views/adminDashboard.php';
//             exit();
//         } elseif ($path === '/clinic/views/wishlist') {
//             require '../views/wishlist.php';
//             exit();
//         } elseif ($path === '/clinic/views/checkOut') {
//             require '../views/checkOut.php';
//             exit();
//         } elseif ($path === '/clinic/views/about') {
//             require '../views/about.php';
//             exit();
//         } elseif ($path === '/clinic/views/users') {
//             require '../views/users.php';
//             exit();
//         } elseif ($path === '/clinic/views/adduser') {
//             require '../views/adduser.php';
//             exit();
//         } elseif ($path === '/clinic/views/products') {
//             require '../views/products.php';
//             exit();
//         } elseif ($path === '/clinic/views/addproduct') {
//             require '../views/addproduct.php';
//             exit();
//         } elseif ($path === '/clinic/views/forgetpass') {
//             require '../views/forgetpass.php';
//             exit();

//         } elseif ($path === '/clinic/views/otp') {
//             require '../views/otp.php';
//             exit();

//         } elseif ($path === '/clinic/views/newpassword') {
//             require '../views/resetpassword.php';
//             exit();

//         } elseif ($path === '/clinic/views/deactivated') {
//             require '../views/deactivated.php';
//             exit();
//         } elseif ($path === '/clinic/views/editproduct?id=' . $id) {
//             require '../views/editproduct.php';
//             exit();

//         } elseif ($path === '/clinic/views/product?id=' . $id) {
//             require '../views/product.php';
//             exit();

//         } elseif ($path === '/clinic/views/deleteproduct?id=' . $id) {
//             require '../views/deleteproduct.php';
//             exit();

//         } elseif ($path === '/clinic/views/edituser?id=' . $id) {
//             require '../views/edituser.php';
//             exit();

//         } elseif ($path === '/clinic/views/deleteuser?id=' . $id) {
//             require '../views/deleteuser.php';
//             exit();

//         } elseif ($path === '/clinic/views/makeuser?id=' . $id) {
//             require '../views/makeuser.php';
//             exit();

//         } elseif ($path === '/clinic/views/makeadmin?id=' . $id) {
//             require '../views/makeadmin.php';
//             exit();

//         } else {

//             require '../views/404.php';
//             exit();
//         }
//     }
// } 