@foreach ($services as $service)
    <x-card :title="$service['title']" :description="$service['description']" />
@endforeach

