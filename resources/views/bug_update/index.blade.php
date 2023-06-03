@extends('layout')
@section('title','Admin | Bugs')
@section('content')


    @include('includes.session_message')

    <!-- Previous Version -->
    @if (!$bugNotificationEnable)
        <section id="noBug" class="container mt-5 text-center">
            <div class="card">
                <div class="card-body">
                    @if (session('successMessage'))
                            <h2 class="text-center text-success"><strong>Congratulation !!!</strong> {{ session('successMessage') }}</span></h2>
                    @endif
                    <h4 class="text-center text-info">Your current version is <span>{{config('auto_update.version')}}</span></h4>
                    <p>Right now no bug found.</p>
                </div>
            </div>
        </section>
    @else
        <!-- For New Version -->
        <section id="bugSection" class="container mt-5 text-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center text-success">Minor bug found. Please update it.</h4>
                    <p>Before updating, we highly recomended you to keep a backup of your current script and database.</p>
                </div>
            </div>

            @isset($getBugUpdateDetails->short_note)
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="text-left text-danger"><b>Important Note : </b> {{ $getBugUpdateDetails->short_note }} </h5>
                    </div>
                </div>
            @endisset

            <div id="changeLog" class="card mt-3">
                <div class="card-body">
                    <h4 class="text-left p-4">Change Log</h4>
                    <ul class="list-group text-left ml-4" id="logUL">
                        @if(isset($getBugUpdateDetails->logs))
                            @foreach ($getBugUpdateDetails->logs as $item)
                                <p> {{ $item->text }} </p>
                            @endforeach
                        @else
                            <p class="text-danger"> No Data Found </p>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3 mb-3">
                <div id="spinner" class="d-none spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <form action="{{route('bug-update')}}" method="post">
                @csrf
                <button type="submit" class="mt-5 mb-5 btn btn-primary btn-lg">Update</button>
            </form>
        </section>
    @endif
@endsection


@push('scripts')
<script type='text/javascript'>
    // (function() {
    //     if( window.localStorage ) {
    //         if( !localStorage.getItem('firstLoad') ) {
    //             localStorage['firstLoad'] = true;
    //             window.location.reload();
    //         }
    //         else {
    //             localStorage.removeItem('firstLoad');
    //         }
    //     }
    // })();
</script>
@endpush
