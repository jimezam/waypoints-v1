<tr>
    <th scope="row">{{ $item->id }}</th>
    <td>{{ $item->name }}</td>
    <td>{{ $item->address }}</td>
    <td>{{ $item->category->name }}</td>
    <td>
        <form action="{{ route('waypoint.destroy', $item) }}" method="post"
              onsubmit="return confirm('Do you really want to delete this element?');">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{ route('waypoint.show', $item) }}" class="btn btn-info" title="View">
                <span class="fa fa-eye"></span>
            </a>
            <a href="{{ route('waypoint.edit', $item) }}" class="btn btn-warning" title="Edit">
                <span class="fa fa-pencil"></span>
            </a>
            <button type="submit" class="btn btn-danger" title="Remove">
                <i class="fa fa-trash form-control-feedback"></i>
            </button>
        </form>
    </td>
</tr>