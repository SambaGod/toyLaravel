<ul>
    @forelse ($todos as $todo)
    <li class="divide-y divide-indigo-700">
        <div class="flex mb-4 items-center">
            <a href="/todo/{{ $todo->id }}" class="w-full text-grey-darkest">{{ $todo->heading }}</a>
            <form action="/delete-todo/{{$todo->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:bg-red">Done</button>
            </form>
        </div>
        <p class="text-gray-400">
            <strong>Created</strong>
            {{ $todo->created_at->diffForHumans() }}
        </p>
    </li>
    @empty
    <p>No items found</p>
    @endforelse
</ul>
{{ $todos->links() }}