<div>

    <table>

        <tr>
            <th>
                تاریخ
            </th>
        </tr>

        @foreach($article2 as $article)
            <tr>
                <td>
                    {{$article->created_at}}
                </td>
            </tr>
        @endforeach
    </table>


</div>
