<?php

class FirstCest
{
    public function test(AcceptanceTester $I){
        $I->amOnPage('/');
        $I->Click('Войти');
        $I->fileField(['id' => 'login_main_login', 'test@mail.ru']);
        $I->fileField(['id' => 'psw_main_login', '123456']);
        $I->Click('form[name=login_main_login] button[type=submit]');
        $I->Click('Мой профиль');
        $I->Click('Отделы');
        $I->Click('test');
        $I->see('Анна Петрова');
        $I->see('Екатерина Смирнова');
        $I->see('Денис Петров');
        $I->makeHtmlSnapShot();
    }

}