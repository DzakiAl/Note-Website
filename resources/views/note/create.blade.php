<x-app-layout>
    <div class="content">
        <h1 class="title">Create new note</h1>
        <center>
            <form action="{{ route('note.store') }}" method="POST" class="note-form">
                @csrf
                <textarea name="note" class="note-body" rows="15"></textarea>
                <div class="option">
                    <a href="{{ route('note.index') }}" class="cancel-button">Cancel</a>
                    <button class="submit-button">Submit</button>
                </div>
            </form>
        </center>
    </div>
</x-app-layout>
