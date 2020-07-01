@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="content">
            <button type="button" class="btn btn-info"><a href="{{route('news.create')}}" label="news">Добавить новость</a></button>

            <table class="table table-striped task-table">

                <!-- Заголовок таблицы -->
                <thead>
                <tr>
                    <th>News</th>
                </tr>
                </thead>

                <!-- Тело таблицы -->
                <tbody>
                @foreach ($news as $newsItem)
                    <tr>
                        <!-- Название новости -->
                        <td class="table-text">
                            <div><a href="{{route('news.show', $newsItem->id)}}">{{ $newsItem->title }}</a></div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <button type="button" class="btn btn-info"><a href="{{route('news.create')}}" label="news">Добавить новость</a></button>
        </div>
    </div>
@endsection;
