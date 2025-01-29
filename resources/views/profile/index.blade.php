{{-- ! Afficher dans des cartes --}}
<x-master title="Profiles"><h3>Profiles</h3>
    <div class="row my-5">

        @foreach($profiles as $profile )
                <x-profile-card :profile="$profile" />
        @endforeach
    </div>
    {{$profiles->links()}}
</x-master>


















{{-- ! Afficher dans un tableau --}}
{{-- <x-master title="Profiles"><h3>Profiles</h3> --}}
    {{-- <x-alert type="primary" ><strong>Bijouuuuuuuuuuuur</strong></x-alert> --}}
    {{-- <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Actions</th>
        </tr>
        @foreach($profiles as $profile )
        <tr>
            <td>{{$profile->id}}</td>
            <td>{{$profile->name}}</td>
            <td>{{$profile->email}}</td>
            <td>{{ Str::limit($profile->bio, 50)}}</td> 
            <td><a href="{{route('profile.show', $profile->id)}}"class="btn btn-primary" role="button">Afficher plus</a>   </td>
        </tr>
        @endforeach
    </table>
    {{$profiles->links()}}
</x-master> --}}
