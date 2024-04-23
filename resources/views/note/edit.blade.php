<x-app-layout>
    <div class="content">
        <h1 class="title">Edit note</h1>
        <center>
            <form action="{{ route('note.update', $note)}}" method="POST" class="note-form">
                @csrf
                @method('PUT')
                <textarea name="note" class="note-body" rows="15">{{ $note->note }}</textarea>
                <div class="option">
                    <a href="{{ route('note.index') }}" class="cancel-button">Cancel</a>
                    <button class="submit-button">Submit</button>
                </div>
            </form>
        </center>
    </div>
</x-app-layout>
