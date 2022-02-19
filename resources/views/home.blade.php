@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Выберете подписку</h1>
        <p class="fs-5 text-muted">Выберете подписку подходящую под ваши нужды и ваш карман.</p>
    </div>
    <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">0 р.<small class="text-muted fw-light">/мес</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Можете поесть говна</li>
                            <li>Можете поесть говна</li>
                            <li>Можете поесть говна</li>
                            <li>Можете поесть мочи</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Уже хоть что то</li>
                            <li>Скажем где скачать книгу</li>
                            <li>Дальше разбирайся сам</li>
                            <li>Мб что то да выучишь</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-white bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Будем все делать за тебя</li>
                            <li>Можешь даже на занятия не ходить</li>
                            <li>Онлайн консультация днем и ночью</li>
                            <li>Даже жопу тебе вытерем</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
