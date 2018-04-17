<tr>
    <th scope="row">{{ $item->id }}</th>
    <td>{{ $item->name }}</td>
    <td>
        <form action="{{ route('category.destroy', $item) }}" method="post"
              onsubmit="return confirm('Do you really want to delete this element?');">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{ route('category.show', $item) }}" class="btn btn-info" title="View">
                <span class="fa fa-eye"></span>
            </a>
            <a href="{{ route('category.edit', $item) }}" class="btn btn-warning" title="Edit">
                <span class="fa fa-pencil"></span>
            </a>
            <button type="submit" class="btn btn-danger" title="Remove">
                <i class="fa fa-trash form-control-feedback"></i>
            </button>
        </form>
    </td>
</tr>