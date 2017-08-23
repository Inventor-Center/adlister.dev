<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once 'db_connect.php';

function addNewUser()
{
    if(Input::get('name')!="" && Input::get('password')!="" && Input::get('email')!="" && Input::get('username')!=""){

        if((User::findByUsernameOrEmail(Input::get('username'))== null ) && (User::findByUsernameOrEmail(Input::get('email'))==null)){
            $user = new User();
            $user->name = Input::get('name');
            $user->password = Input::get('password');
            $user->email = Input::get('email');
            $user->username = Input::get('username');
            $user->save();
            
            header("Location:/Users/Login");
            
        } else {
            $_SESSION['ERROR_MESSAGE'] = "Username or email exists!!";
        }
    }
}

function addNewAd()
{
    if(Input::get('title')!="" && Input::get('description')!="" && Input::get('img')!="" && Input::get('categories')!=""){

        if(Ad::findByTitle(Input::get('title'))== null){
            $ad = new Ad();
            if(is_string(Input::get('title'))){
            $ad->title = Input::get('title');
            }
            $ad->description = Input::get('description');
            $ad->img = Input::get('img');
            $ad->categories = Input::get('categories');
            $ad->username = $_SESSION['IS_LOGGED_IN'];
            $ad->date_create = date("Y-m-d H-i-s");
            $ad->click_count = 0;
            $ad->price = Input::get('price');
            var_dump($ad);
            $ad->save();
            
            header("Location:/Ads/Show?id=$ad->id");
        } else {
            echo "Title for ad already exists!!";
        }
    }
}

function updateUser(){
   
    $dbc = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

    // Tell PDO to throw exceptions on error
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $loggedInUserId = $_SESSION['LOGGED_IN_ID'];
    $newUsername = Input::get('editUsername');
    $query = "UPDATE users SET username = '{$newUsername}' WHERE id = '{$loggedInUserId}'";
    $firstValue = true;

    $stmt = $dbc->prepare($query);

    $stmt->execute();
}

function pageController()
{
    $data = [];
    $allUsers = User::all();
    $allUsersAds = User::usersAds();

    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (isset($_GET['category'])){
        $category = Input::get('category');
        $allAds = Ad::filterByCategory($category);
    } else {
        $allAds = Ad::all();
    }

   
    if(Input::has('editUsername')){
        updateUser();
    }

    if(isset($_SESSION['IS_LOGGED_IN'])){
        $activeUser = $_SESSION['IS_LOGGED_IN'];
        $activeInfo = User::findByUsernameOrEmail($activeUser);
        $data['activeUser'] = $activeUser;
        $data['activeInfo'] = $activeInfo;   
    }

    if(isset($_GET['delete'])) {
        $ad = new Ad;
        $ad->id = Input::get('id');
        $ad->delete();
    }

    if(Input::has('logout')){
        Auth::logout();
        var_dump($_SESSION);
        header("Location:/Users/Login");
    };

    if (isset($_SESSION['IS_LOGGED_IN']) && !empty($_POST['title'])){
        addNewAd();
    }

    if (!empty($_POST['name'])){
        addNewUser();
    }

    if(isset($_POST['email_user'])){
        if(Auth::attempt(Input::get('email_user'), Input::get('password'))){
            $sessionId = session_id();
            header('Location:/Ads');
        };
    }

    if(($request == "/Users/Login" || $request == "/Users/Signup") && isset($_SESSION['IS_LOGGED_IN'])){
        $request = "/Ads";
    }

    if(($request == "/Users" || $request == "/Ads" || $request == "/Ads/Create") && !isset($_SESSION['IS_LOGGED_IN'])){
        $request = "/Users/Login";
    }
    // switch that will run functions and setup variables dependent on what route was accessed

    function pageContentController(){}
    switch ($request) {
        case '/':
            $mainView = '../views/home.php';
        break;
        case '/Users':
            $mainView = '../views/users/account.php';
        break;
        case '/Users/Login':
            $mainView = '../views/users/login.php';
        break;
        case '/Users/Signup':
            $mainView = '../views/users/signup.php';
        break;
        case '/Users/Edit':
            $mainView = '../views/users/edit.php';
        break;
        case '/Ads':
            $mainView = '../views/ads/index.php';
        break;
        case '/AllAds':
            $mainView = '../views/ads/allads.php';
        break;
        case '/Ads/Create':
            $mainView = '../views/ads/create.php';
        break;
        case '/Ads/Edit':
            $mainView = '../views/ads/edit.php';
        break;
        case '/Ads/Show':
            $mainView = '../views/ads/show.php';
            $adId = Input::get('id');
            $ad = Ad::find($adId);
            $ad->clickCounter();
        break;
        // TODO: put routes here
        default:    // displays 404 if route not specified above
            $mainView = '../views/404.php';
            break;
    }

    $data['mainView'] = $mainView;
    $data['allAds'] = $allAds;
    $data['allUsersAds'] = $allUsersAds;
    return $data;
    var_dump($_SESSION);
}

extract(pageController());