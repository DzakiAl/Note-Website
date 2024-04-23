<x-app-layout>
    <div class="body">
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
            <div class="option">
                <a href="{{ route('note.index') }}" class="button-edit">Back</a>
                <a href="{{ route('note.edit', $note) }}" class="button-edit">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="button-delete">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
