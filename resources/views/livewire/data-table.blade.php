<div>
    <input type="text" name="search" wire:model.lazy="search">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><a href="#" class=" " wire:click="sorting('id','{{$sortDirection == 'asc' ? "desc" : "asc"}}')">#</a></th>
                <th scope="col"><a href="#" class="" wire:click="sorting('name','{{$sortDirection == 'asc' ? "desc" : "asc"}}')">Full Name</a></th>
                <th scope="col"><a href="#" class="" wire:click="sorting('email','{{$sortDirection == 'asc' ? "desc" : "asc"}}')">Email</a></th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @empty
                <p class="text-danger">There are no users yet</p>
            @endforelse
            </tbody>
            <div class="col-lg-3">
                <div class="row">
{{--                    {{$users->links()}}--}}

                </div>

            </div>
        </table>
</div>
