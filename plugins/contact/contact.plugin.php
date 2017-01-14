<?php

    /**
     *  Contact plugin
     *
     *  @package Monstra
     *  @subpackage Plugins
     *  @author Romanenko Sergey / Awilum
     *  @copyright 2012 - 2014 Romanenko Sergey / Awilum
     *  @version 1.1.1
     *
     */

    // Register plugin
    Plugin::register( __FILE__,
                    __('Contact', 'contact'),
                    __('Contact plugin for Monstra', 'contact'),
                    '1.1.1',
                    'Awilum',
                    'http://monstra.org/');

    /**
     * Shorcode: {contact recipient="admin@site.org"}
     */
    Shortcode::add('contact', 'Contact::_shorcode');

    /**
     * Usage: <?php Contact::display('admin@site.org'); ?>
     */
    class Contact
    {
        public static function _shorcode($attributes)
        {
            return Contact::form($attributes['recipient']);
        }

        public static function form($recipient)
        {
            $name  = Request::post('contact_name');
            $email = Request::post('contact_email');
            $body  = Request::post('contact_body');
			$ok = '';

            $errors = array();

            if (Request::post('contact_submit')) {

                if (Security::check(Request::post('csrf'))) {

                    if (Request::post('contact_name') == '' || Request::post('contact_email') == '' || Request::post('contact_body') == '') {
                        $errors['contact_empty_fields'] = __('Empty required fields!', 'contact');
                    }

                    if ( ! Valid::email(Request::post('contact_email'))) {
                        $errors['contact_email_not_valid'] = __('Email address is not valid!', 'contact');
                    }

                    if (Option::get('captcha_installed') == 'true' && ! CryptCaptcha::check(Request::post('answer'))) {
                        $errors['users_captcha_wrong'] = __('Captcha code is wrong', 'users');
                    }

                    if (count($errors) == 0) {

                        $mail = new PHPMailer();
                        $mail->SetFrom($email);
                        $mail->AddReplyTo($email);
                        $mail->AddAddress($recipient);
                        $mail->Subject = $name;
                        $mail->Body = $body;

                        if ($mail->Send()) {
							$ok = __('A letter has been sent!', 'contact');
                        } else {
							$errors['not_sent'] = __('A Letter was not sent!', 'contact');
                        }

                    }

                } else { die('Request was denied because it contained an invalid security token. Please refresh the page and try again.'); }

            }

            return View::factory('contact/views/frontend/form')
                    ->assign('name', $name)
                    ->assign('email', $email)
                    ->assign('body', $body)
                    ->assign('errors', $errors)
					->assign('ok', $ok)				
                    ->render();
        }

        public static function display($recipient)
        {
            echo Contact::form($recipient);
        }

    }
