@extends('layout')

@section('title')Обо мне@endsection

@section('main_content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Немного обо мне</h1>
                <p class="lead text-muted">Еще с детства я понимал, что зарабоатывать деньги - это мое Крэдо. Так сначала я продавал паленую изи бусты, а теперь продаю курсы по Ларавель.</p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://img5.goodfon.ru/wallpaper/big/9/b5/doki-doki-literature-club-ddlc-sayori-saiori-doki-doki-liter.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>

                        <div class="card-body">
                            <p class="card-text">Здесь я ебался с карточками где час, сука час ночи, а мог бы кратоса смотреть</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 мин</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://memepedia.ru/wp-content/uploads/2017/08/%D0%BD%D0%B5%D0%B3%D1%80-%D0%BB%D0%B5%D0%B6%D0%B8%D1%82-%D0%BD%D0%B0-%D0%B4%D0%B5%D0%BD%D1%8C%D0%B3%D0%B0%D1%85-1-1.jpeg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>

                        <div class="card-body">
                            <p class="card-text">Примерно так я себя чувствую, если хоть кто-то купит данный курс.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">15 мин</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://avatars.mds.yandex.net/get-kinopoisk-post-img/1101693/02c0a6b52cb8d571de2ac90607700c7e/960x540" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect></img>

                        <div class="card-body">
                            <p class="card-text">Пойми же наконец огры многослойны, как лукы</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
