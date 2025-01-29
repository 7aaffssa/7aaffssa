<div class="col-sm-4">
    <div class="card">
        <img class="card-img-top" src="https://picsum.photos/id/237/200/300"  alt="Title" />
        <div class="card-body">
            <h4 class="card-title">{{$profile->name}}</h4>
            <p class="card-text">{{ Str::limit($profile->bio, 50)}}</p>
                <a href="{{route('profile.show', $profile->id)}}" class="stretched-link"></a>
        </div>
    </div>
    
</div>