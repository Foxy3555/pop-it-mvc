<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Book;
use Model\Reader;


class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function add_book(Request $request): string
    {
        if ($request->method === 'POST' && Book::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.add_book');
    }

    public function add_reader(Request $request): string
    {
        if ($request->method === 'POST' && Reader::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.add_reader');
    }

    public function add_lib(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.add_lib');
    }

    public function show_book(): string
    {
        $selectedBooks = $_POST['books'] ?? [];
        if (!empty($selectedBooks)) {
            $books = Book::whereIn('name', $selectedBooks)->get();
        } else {
            $books = Book::all();
        }

        return new View('site.show_book', ['books' => $books]);
    }

}
