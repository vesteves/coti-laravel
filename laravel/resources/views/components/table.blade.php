<table class="table table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sexo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>
                <select>
                    @foreach($options as $option)
                    <option value="{{ $option->name }}">{{ $option->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
