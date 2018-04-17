<?php
namespace App\Controllers;
use App\Controller;
use Model\Models\User as User;
class UserAuthController extends Controller
{

    /**
     *
     *
     *in controller faqat baraye ehraz hoviyat user estefade mishavad
     * va karbord digari nadarrrrrrad
     * 2 Action register va login darad
     * mitavandad method haye digar dashte bashad
     * ama nabayad besorat methodAction bashad va 'Action'
     * bardashte shavad ...
     *route haye in controller be sort zir mibashad:
     *      register
     *      login
     *
     */
    public function registerAction(){
        $user = new User;
        $data = [];
        if(isset($_POST['register']))
        {
            $post = deActiveSqlEnjection(deActiveXss($_POST));
            if(validStringAndNumber($post['username']))
            {
                $data['username'] = $user->findby($post['username'],'username');
                if(!empty($data['username']))
                {
                    $data['username_error'] = 'نام کاربری قبلا در سیستم ثبت شده';
                }
                else
                {
                    $data['username'] = $post['username'];
                }
            }
            else
            {
                $data['username_error']= 'نام کاربری میتواند حاوی حروف و عدد باشد';
            }
            if(check_email($post['email']))
            {
                $data['email'] = $user->findby($post['email'],'email');
                if(!empty($data['email']))
                {
                    $data['email_error'] = 'این ایمیل قبلا در سیستم ثبت شده است';
                }
                else
                {
                    $data['email'] = $post['email'];
                }
            }
            else
            {
                $data['email_error'] = 'لطفا ایمیل صحیح وارد کنید';
            }
            if(validPhoneNumber($post['phoneNumber']))
            {
                $data['phoneNumber'] = $user->findby($post['phoneNumber'],'phoneNumber');
                if(!empty($data['phoneNumber']))
                {
                    $data['phoneNumber_error'] = 'شماره تلفن شما در سیستم ثبت شده است';
                }
                else
                {
                    $data['phoneNumber'] = $post['phoneNumber'];
                }
            }
            else
            {
                $data['phoneNumber_error'] = 'شماره تلفن صحیح را وارد کنید';
            }
            if(!empty($post['password']))
            {
                if(strlen($post['password'])<8)
                {
                    $data['password_error'] = 'رمز عبور باید بیشتر از 8 کارکتر باشد';
                }
                else
                {
                    $data['password'] = $post['password'];
                }
            }
            else
            {
                $data['password_error'] = 'رمز عبور نمیتواند خالی باشد';
            }
            $data['address'] = isset($post['address'])?$post['address']:'';
            if(empty($data['username_error']) and empty($data['email_error']))
            {
                if(empty($data['password_error'])and empty($data['phoneNumber_error']))
                {
                    $user->username = $data['username'];
                    $user->password = md5($data['password']);
                    $user->email    = $data['email'];
                    $user->phoneNumber=$data['phoneNumber'];
                    $user->addres   = $data['addres'];
                    $res = $user->save();
                    if($res['res'])
                    {
                        $info_current_user = $user->findby($res['lastId'],'id');
                        if(!empty($info_current_user))
                        {
                            $_SESSION['user'] = $info_current_user;
                            header('location:'.URL_SITE.'dashboard');
                            exit;
                        }
                    }
                }
            }
        }

    }
    public function loginAction(){
//        $user = new User;
//        $data = [];
//        if(isset($_POST['login']))
//        {
//            $post = deActiveXss(deActiveSqlEnjection($_POST));
//            if(validStringAndNumber($post['username']))
//            {
//                $data['username'] = $post['username'];
//            }
//            else
//            {
//                $data['username_error'] = 'نام کاربری حاوی حروف و اعداد میباشد ';
//            }
//            if(isset($post['password']) and !empty($post['password']))
//            {
//                if($post['password']<8)
//                {
//                    $data['password_error'] = 'رمز عبور باید بیش از 8 کرکتر باشد';
//                }
//                else
//                {
//                    $data['password'] = $post['password'];
//                }
//            }
//            else
//            {
//                $data['password_error'] = 'رمز عبور نمیتواند خالی باشد';
//            }
//            //check username and password is currect ---
//            if(empty($data['password_error']) and empty($data['username']))
//            {
//                $exists_user = $user->findby($data['username'],'username');
//                if(!empty($exists_user))
//                {
//                    if($exists_user['password'] === md5($data['password'])) // if true user loged in ------
//                    {
//                        $_SESSION['user'] = $exists_user;
//                        header('location'.URL_SITE.'dashboard');
//                        exit;
//                    }
//                    else
//                    {
//                        $data['password_error'] = 'رمز عبور با نام کاربری مطابقت ندارد';
//                    }
//                }
//                else
//                {
//                    $data['username_error'] = 'نام کاربری در سیستم ثبت نشده است';
//                }
//            }
//        }
//        $this->render('user.register',$data);
        var_dump($_POST);
    }
}