<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>   
    
    <div class="space-y-3">
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block border border-gray-300 bg-gray-100 rounded-lg px-4 py-5 b">
                <div class="font-bold text-blue-600">
                    {{ $job->employer->name}}
                </div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }}
                </div>
            </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>