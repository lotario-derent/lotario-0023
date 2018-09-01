@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estas en Lotario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    


<div class="card mb-3 ">

    <div class="card  card-center " style="width: 18rem; align-self: center; margin-top: 10px;">
  <img class="card-img-top  center-block" src="{{ asset('img//lotario.jpg') }}" alt="Card image cap">
  
</div>
  
  <div class="card-body">
    <h5 class="card-title">Octavio Corona Mascareño</h5>
    <p class="card-text">Octavio nació en Guamuchil Sinaloa......</p>
    
  </div>
</div>



                </div>

            </div>
        </div>
    </div>
</div>
@endsection
