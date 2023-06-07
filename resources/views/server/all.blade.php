<x-layout>
    <h1>Servers</h1>
    <div class="pb-10 text-sm breadcrumbs">
        <ul>
            <li>
                All Servers
            </li>
        </ul>
    </div>
    <div class="grid grid-cols-2 gap-2">
        @forelse ($servers as $server)
            <a class="text-center hover:no-underline box group"
                href="{{ route('server.show', ['server_uuid' => data_get($server, 'uuid')]) }}">
                <div class="group-hover:text-white">
                    <div>{{ $server->name }}</div>
                    @if (!$server->settings->is_validated)
                        <div class="text-xs text-error">not validated</div>
                    @endif
                </div>
            </a>
        @empty
            <div>
                <div>No servers found. Without a server, you won't be able to do much.</div>
                <x-use-magic-bar />
            </div>
        @endforelse
    </div>
</x-layout>
