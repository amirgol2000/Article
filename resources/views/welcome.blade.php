<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/welcome.scss')
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>

    <form method="POST"  action="{{route('show')}}" >
        @csrf

        <div> <label for="">تاریخ :</label>
            <input id="created_at" aria-label="Search" type="search"
                   class="form-control"
                   placeholder="Find user here"
                   name="search"
                   value="{{ request('search') }}">

        </div>
        <div>

            <button type="submit">جستجو</button>
        </div>

    </form>

<div>

    <table>

        <tr>
        <th>
            شماره
        </th>
            <th>
             عنوان
            </th>
            <th>
               عنوان فرعی
            </th>
            <th>
               توضیحات
            </th>
            <th>
                تاریخ
            </th>
        </tr>

        @foreach($article_data as $article)
        <tr>
            <td>
                {{$article->id}}
            </td>
            <td>
                {{$article->title}}
            </td>
            <td>
                {{$article->subtitle}}
            </td>
            <td>
                {{$article->description}}
            </td>
            <td>
                {{$article->created_at}}
            </td>
        </tr>
        @endforeach
    </table>


</div>

</body>
</html>
