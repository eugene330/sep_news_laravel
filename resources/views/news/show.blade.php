@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="content">
            <button type="button" class="btn btn-info"><a href="news.list" label="news">Вернуться к списку новостей</a></button>

            <table class="table table-striped task-table">

                <!-- Заголовок таблицы -->
                <thead>
                <tr>
                    <th>News</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>

                <!-- Тело таблицы -->
                <tbody>
                @foreach ($news as $news)
                    <tr>
                        <td class="table-text">
                            <div>{{ $news->title }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $news->text }}</div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <button type="button" class="btn btn-info"><a href="" label="news">Добавить новость</a></button>
        </div>
    </div>
@endsection;
