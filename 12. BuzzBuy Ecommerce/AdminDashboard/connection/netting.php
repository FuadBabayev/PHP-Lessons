<?php
ob_start();
session_start();
include 'environment.php';
include 'C:\xampp\htdocs\PHP Lessons\12. BuzzBuy Ecommerce\AdminDashboard\production\convertor.php';

// ----------------- READ -----------------
$request_title = $db->prepare("SELECT * FROM Parameters WHERE id=:id");
$request_title->execute([
    'id' => 0
]);
$read_title = $request_title->fetch(PDO::FETCH_ASSOC);


$request_about = $db->prepare("SELECT * FROM About WHERE id=:id");
$request_about->execute([
    'id' => 0
]);
$read_about = $request_about->fetch(PDO::FETCH_ASSOC);


if (isset($_GET['id'])) {
    $request_one_user = $db->prepare("SELECT * FROM User WHERE id=:id");
    $request_one_user->execute([
        'id' => $_GET['id']
    ]);
    $read_one_user = $request_one_user->fetch(PDO::FETCH_ASSOC);
}


if (isset($_GET['menu_id'])) {
    $request_one_menu = $db->prepare("SELECT * FROM Menu WHERE id=:id");
    $request_one_menu->execute([
        'id' => $_GET['menu_id']
    ]);
    $read_one_menu = $request_one_menu->fetch(PDO::FETCH_ASSOC);
}
// ----------------- READ -----------------



// ----------------- UPDATE -----------------
if (isset($_POST['update_title'])) {
    $request = $db->prepare("UPDATE Parameters SET
        title=:title,
        description=:description,
        keywords=:keywords,
        author=:author
        WHERE id=0
    ");
    $update = $request->execute([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'keywords' => $_POST['keywords'],
        'author' => $_POST['author']
    ]);
    if ($update) {
        $_SESSION['titleUpdated'] = 'ok';
        Header("Location: ../production/form.php");
        exit;
    } else {
        $_SESSION['titleUpdated'] = 'no';
        Header("Location: ../production/form.php");
        exit;
    }
}



if (isset($_POST['update_communication'])) {
    $request = $db->prepare("UPDATE Parameters SET
        phone=:phone,
        gsm=:gsm,
        fax=:fax,
        email=:email,
        country=:country,
        city=:city,
        address=:address,
        shift=:shift
        WHERE id=0
    ");
    $update = $request->execute([
        'phone' => $_POST['phone'],
        'gsm' => $_POST['gsm'],
        'fax' => $_POST['fax'],
        'email' => $_POST['email'],
        'country' => $_POST['country'],
        'city' => $_POST['city'],
        'address' => $_POST['address'],
        'shift' => $_POST['shift']
    ]);
    if ($update) {
        $_SESSION['communicationUpdated'] = 'ok';
        Header("Location: ../production/communication.php");
        exit;
    } else {
        $_SESSION['communicationUpdated'] = 'no';
        Header("Location: ../production/communication.php");
        exit;
    }
}



if (isset($_POST['update_api'])) {
    $request = $db->prepare("UPDATE Parameters SET
        analystic=:analystic,
        maps=:maps,
        zopim=:zopim
        WHERE id=0
    ");
    $update = $request->execute([
        'analystic' => $_POST['analystic'],
        'maps' => $_POST['maps'],
        'zopim' => $_POST['zopim']
    ]);
    if ($update) {
        $_SESSION['apiUpdated'] = 'ok';
        Header("Location: ../production/api.php");
        exit;
    } else {
        $_SESSION['apiUpdated'] = 'no';
        Header("Location: ../production/api.php");
        exit;
    }
}



if (isset($_POST['update_social'])) {
    $request = $db->prepare("UPDATE Parameters SET
        facebook=:facebook,
        twitter=:twitter,
        google=:google,
        youtube=:youtube
        WHERE id=0
    ");
    $update = $request->execute([
        'facebook' => $_POST['facebook'],
        'twitter' => $_POST['twitter'],
        'google' => $_POST['google'],
        'youtube' => $_POST['youtube']
    ]);
    if ($update) {
        $_SESSION['socialUpdated'] = 'ok';
        Header("Location: ../production/api.php");
        exit;
    } else {
        $_SESSION['socialUpdated'] = 'no';
        Header("Location: ../production/api.php");
        exit;
    }
}


if (isset($_POST['update_smtp'])) {
    $request = $db->prepare("UPDATE Parameters SET
        smtp_host=:smtp_host,
        smtp_user=:smtp_user,
        smtp_password=:smtp_password,
        smtp_port=:smtp_port
        WHERE id=0
    ");
    $update = $request->execute([
        'smtp_host' => $_POST['smtp_host'],
        'smtp_user' => $_POST['smtp_user'],
        'smtp_password' => $_POST['smtp_password'],
        'smtp_port' => $_POST['smtp_port']
    ]);
    if ($update) {
        $_SESSION['smtpUpdated'] = 'ok';
        Header("Location: ../production/smtp.php");
        exit;
    } else {
        $_SESSION['smtpUpdated'] = 'no';
        Header("Location: ../production/smtp.php");
        exit;
    }
}



if (isset($_POST['update_about'])) {
    $request = $db->prepare("UPDATE About SET
        title=:title,
        content=:content,
        video=:video,
        vision=:vision,
        mission=:mission
        WHERE id=0
    ");
    $update = $request->execute([
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'video' => $_POST['video'],
        'vision' => $_POST['vision'],
        'mission' => $_POST['mission']
    ]);
    if ($update) {
        $_SESSION['aboutUpdated'] = 'ok';
        Header("Location: ../production/about.php");
        exit;
    } else {
        $_SESSION['aboutUpdated'] = 'no';
        Header("Location: ../production/about.php");
        exit;
    }
}



if (isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $request = $db->prepare("UPDATE User SET
        sx=:sx,
        fullname=:fullname,
        gsm=:gsm,
        status=:status
        WHERE id={$_POST['id']}
    ");
    $update = $request->execute([
        'sx' => $_POST['sx'],
        'fullname' => $_POST['fullname'],
        'gsm' => $_POST['gsm'],
        'status' => $_POST['status']
    ]);
    if ($update) {
        $_SESSION['userUpdated'] = 'ok';
        Header("Location: ../production/user-update.php?id=$id");
        exit;
    } else {
        $_SESSION['userUpdated'] = 'no';
        Header("Location: ../production/user-update.php?id=$id");
        exit;
    }
}


if (isset($_POST['update_menu'])) {
    $id = $_POST['id'];
    $seo_url = seo($_POST['name']);
    $request = $db->prepare("UPDATE Menu SET
        name=:name,
        detail=:detail,
        url=:url,
        line=:line,
        seo_url=:seo_url,
        status=:status
        WHERE id={$_POST['id']}
    ");
    $update = $request->execute([
        'name' => $_POST['name'],
        'detail' => $_POST['detail'],
        'url' => $_POST['url'],
        'line' => $_POST['line'],
        'seo_url' => $seo_url,
        'status' => $_POST['status']
    ]);
    if ($update) {
        $_SESSION['menuUpdated'] = 'ok';
        Header("Location: ../production/menu-update.php?menu_id=$id");
        exit;
    } else {
        $_SESSION['menuUpdated'] = 'no';
        Header("Location: ../production/menu-update.php?menu_id=$id");
        exit;
    }
}
// ----------------- UPDATE -----------------






// ----------------- LOGIN -----------------
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // ! MD5 function hash password (It works like JWT there is no need 3rd part library)

    $request_user = $db->prepare("SELECT * FROM User WHERE email=:email AND password=:password AND permission=:permission");
    $request_user->execute([    
        'email' => $email,
        'password' => $password,
        'permission' => 'admin'
    ]);
    $count = $request_user->rowCount();

    if ($count == 1) {
        $_SESSION['email'] = $email;                                //* Active olduqunu bildirmek ve her sehfiede istifade olmaqi ucun yaziriq (Sanki artiq qeydiyyatdan kecdi her yere gire biler)
        Header("Location: ../production/index.php");
        exit;
    } else {
        $_SESSION['isLogged'] = 'no';
        Header("Location: ../production/login.php");
        exit;
    }
}


if (isset($_POST['user_login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = md5($_POST['password']);
    $permission = 'admin';
    $status = 1;

    $request = $db->prepare("SELECT * FROM User WHERE email=:email AND password=:password AND permission=:permission AND status=:status");
    $request->execute([
        'email' => $email,
        'password' => $password,
        'permission' => $permission,
        'status' => $status,
    ]);
    $count = $request->rowCount();

    if ($count == 1) {
        $_SESSION['user_email'] = $email;
        $_SESSION['user_login'] = 'success';
        Header("Location: ../../Template/index.php");
        exit;
    } else {
        $_SESSION['user_login'] = 'fail';
        Header("Location:../../Template/register.php");
        exit;
    }
}
// ----------------- LOGIN -----------------




// ----------------- REGISTER -----------------
if (isset($_POST['register'])) {
    // ! htmlspecialchars() funksiyasi yazilarin icindeki zererli hisseleri silir
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if ($password1 == $password2) {
        if (strlen($password1) >= 6) {
            $request = $db->prepare("SELECT * FROM User WHERE email=:email");
            $request->execute([
                'email' => $email
            ]);
            $read = $request->rowCount();

            if ($read == 0) {
                $password = md5($password1);                            // * JWT kimi kodu hashlayib DATABASE-ye daxil edir
                $permission = 'admin';

                $request_user = $db->prepare("INSERT INTO User SET
                fullname=:fullname,
                email=:email,
                password=:password,
                permission=:permission
            ");
                $create_user = $request_user->execute([
                    'fullname' => $fullname,
                    'email' => $email,
                    'password' => $password,
                    'permission' => $permission
                ]);
                if ($create_user) {
                    $_SESSION['status'] = 'registered';
                    Header("Location: ../../Template/register.php");
                    exit;
                } else {
                    $_SESSION['status'] = 'not_registered';
                    Header("Location: ../../Template/register.php");
                    exit;
                }

            } else {
                $_SESSION['status'] = 'used_email';
                Header("Location: ../../Template/register.php");
                exit;
            }

        } else {
            $_SESSION['status'] = 'short_password';
            Header("Location: ../../Template/register.php");
            exit;
        }
    } else {
        $_SESSION['status'] = 'different_password';
        Header("Location: ../../Template/register.php");
        exit;
    }
}
// ----------------- REGISTER -----------------




// ----------------- UPDATE REGISTER -----------------

if (isset($_POST['update_user_data'])) {
    // ! var_dump($_POST);             Bütün deyerleri oxumaq üçün istifadə olunur
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if ($password1 == $password2) {
        if (strlen($password1) >= 6) {
            $password = md5($password1);

            $request = $db->prepare("UPDATE User SET
            fullname=:fullname,
            password=:password
            WHERE email='{$email}'                          // ! Give Attention !
        ");
            $update = $request->execute([
                'fullname' => $fullname,
                'password' => $password
            ]);
            if ($update) {
                $_SESSION['status'] = 'user_updated';
                Header("Location: ../../Template/mydash.php");
                exit;
            } else {
                $_SESSION['status'] = 'user_not_updated';
                Header("Location: ../../Template/mydash.php");
                exit;
            }

        } else {
            $_SESSION['status'] = 'short_password';
            Header("Location: ../../Template/mydash.php");
            exit;
        }
    } else {
        $_SESSION['status'] = 'different_password';
        Header("Location: ../../Template/mydash.php");
        exit;
    }
}
// ----------------- UPDATE REGISTER -----------------



// ----------------- DELETE -----------------
if (isset($_GET['delete_user'])) {
    $find = $db->prepare("DELETE FROM User WHERE id=:id");
    $delete = $find->execute([
        'id' => $_GET['delete_user']
    ]);
    if ($delete) {
        $_SESSION['isDeleted'] = 'ok';
        Header("Location: ../production/users.php");
        exit;
    } else {
        $_SESSION['isDeleted'] = 'no';
        Header("Location: ../production/users.php");
        exit;
    }
}


if (isset($_GET['delete_menu'])) {
    $find = $db->prepare("DELETE FROM Menu WHERE id=:id");
    $delete = $find->execute([
        'id' => $_GET['delete_menu']
    ]);
    if ($delete) {
        $_SESSION['menuDeleted'] = 'ok';
        Header("Location: ../production/menu.php");
        exit;
    } else {
        $_SESSION['menuDeleted'] = 'no';
        Header("Location: ../production/menu.php");
        exit;
    }
}
// ----------------- DELETE -----------------




// ----------------- CREATE -----------------
if (isset($_POST['add_menu'])) {
    $seo_url = seo($_POST['name']);
    $request = $db->prepare("INSERT INTO Menu SET
        name=:name,
        detail=:detail,
        url=:url,
        line=:line,
        seo_url=:seo_url,
        status=:status
    ");
    $create = $request->execute([
        'name' => $_POST['name'],
        'detail' => $_POST['detail'],
        'url' => $_POST['url'],
        'line' => $_POST['line'],
        'seo_url' => $seo_url,
        'status' => $_POST['status']
    ]);
    if ($create) {
        Header("Location: ../production/menu.php");
        exit;
    } else {
        Header("Location: ../production/menu.php");
        exit;
    }
}
// ----------------- CREATE -----------------







// ----------------- INSERT AND UPDATE FILE, PHOTO INTO DATABESE -----------------
// ! $_FILES glogal variabledir
// Todo: $uploads."/".$unique_count.$name === "$uploads/$unique_count$name" !== '$uploads/$unique_count$name'
if (isset($_POST['update_logo'])) {
    $uploads = '../production/images';
    @$tmp_name = $_FILES['website_logo']['tmp_name'];
    @$name = $_FILES['website_logo']['name'];
    $unique_count = rand(20000, 32000);
    // $photo_url = substr($uploads, 6). "/".$unique_count.$name;
    $photo_url = $unique_count . $name;

    // ! @move_uploaded_file bu funksiya NODE JS deki kimi manual olaraq fileni hemin papqanin icine atir
    @move_uploaded_file($tmp_name, "$uploads/$unique_count$name");
    $request = $db->prepare("UPDATE Parameters SET
        logo=:website_logo
        WHERE id=0
    ");
    $update = $request->execute([
        'website_logo' => $photo_url
    ]);
    if ($update) {
        $photo_url_previous = $_POST['website_logo_previous'];
        unlink("../production/images/$photo_url_previous");                                                 // ! Bu Locationa get ve hemen (evvelki) sekli sil

        $_SESSION['logoUpdated'] = 'ok';
        Header("Location: ../production/form.php");
        exit;
    } else {
        $_SESSION['logoUpdated'] = 'no';
        Header("Location: ../production/form.php");
        exit;
    }
}



if (isset($_POST['add_slider'])) {
    $uploads = '../production/images/slider';
    @$tmp_name = $_FILES['url']['tmp_name'];
    @$name = $_FILES['url']['name'];
    $unique_count1 = rand(20000, 32000);
    $unique_count2 = rand(20000, 32000);
    $unique_count3 = rand(20000, 32000);
    $unique_count4 = rand(20000, 32000);
    $unique_name = $unique_count1 . $unique_count2 . $unique_count3 . $unique_count4;
    $photo_url = substr($uploads, 14) . "/" . $unique_name . $name;

    @move_uploaded_file($tmp_name, "$uploads/$unique_name$name");

    $request = $db->prepare("INSERT INTO Slider SET
        name=:slider_name,
        line=:slider_line,
        url=:slider_url
    ");
    $update = $request->execute([
        'slider_name' => $_POST['name'],
        'slider_line' => $_POST['line'],
        'slider_url' => $photo_url,
    ]);

    if ($update) {
        // $photo_url_previous = $_POST['website_logo_previous'];
        // unlink("../production/images/$photo_url_previous");

        $_SESSION['sliderAdded'] = 'ok';
        Header("Location: ../production/slider.php");
        exit;
    } else {
        $_SESSION['sliderAdded'] = 'no';
        Header("Location: ../production/slider.php");
        exit;
    }
}
// ----------------- INSERT AND UPDATE FILE, PHOTO INTO DATABESE -----------------
?>