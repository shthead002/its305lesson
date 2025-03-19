<x-app>
    <a class="btn btn-sm btn-primary" href="{{ route('student.create') }}">
        Create
    </a>
    @foreach ($studs as $stud)
        <div class="col-12">
            <span>{{ $stud->email }} - {{ $stud->first_name }} {{ $stud->middle_name }} {{ $stud->last_name }}
                {{ $stud->suffix->name ?? '' }} - {{ $stud->year_level->name }} ({{ $stud->status->name }})</span>
        </div>
    @endforeach
</x-app>