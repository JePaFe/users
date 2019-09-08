<div class="btn-group">
    <a href="{{ route('admin.users.show', $id) }}" class="btn btn-sm btn-primary">View</a>
    <a href="{{ route('admin.users.edit', $id) }}" class="btn btn-sm btn-warning">Edit</a>
    <a href="{{ route('admin.users.destroy', $id) }}" class="btn btn-sm btn-danger destroy">Delete</a>
</div>
