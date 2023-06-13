@extends('Data-Admin.sekertaris.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="card">
                <div class="card-header"> <a href="{{ url('sekertaris') }}">Home</a> {{ __('/ Berita Duka') }}</div>
                    <hr>
                </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h4 class="text-center" style="font-family:Arial Black" >Ubah Berita Duka</h4>
    <form action="{{ route('berita-duka.update',$berita_duka->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong style="font-family: Arial black" >Judul:</strong>
                    <input type="text" name="judul" value="{{ $berita_duka->judul }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong style="font-family: Arial black" >Isi:</strong>
                    <textarea class="form-control" style="height:150px" id="editor" name="isi" placeholder="Isi">{{ $berita_duka->isi }}</textarea>
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong style="font-family: Arial black" >Upload Gambar:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $berita_duka->image }}" width="200px">
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11 ">
              <button type="submit" class="btn btn-success"><h4>Simpan</h4></button>
            </div>
        </div>

    </form>
@endsection
@section('ckeditor')
<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
<!-- ================ -->