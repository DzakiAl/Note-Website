<x-app-layout>
    <div class="body">
        <center><a href="{{ route('note.create') }}" class="button-addNote">Add Note</a></center>
        @foreach ($notes as $note)
            <div class="note">
                <div class="note-body">
                    {!! nl2br(e(Str::words($note->note, 30))) !!}
                </div>
                <div class="option">
                    <a href="{{ route('note.show', $note) }}" class="button-view">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="button-edit">Edit</a>
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button-delete">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="p-6">
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>