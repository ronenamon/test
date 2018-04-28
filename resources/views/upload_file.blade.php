
@extends('layouts.master')

@section('title', 'Upload new File ')

@section('sidebar')
    @parent

    {{--<p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <h3>File Input Example</h3>
        <form method="POST" action="/upload" enctype="multipart/form-data">
        {{ csrf_field() }}

        <!-- COMPONENT START -->
            <div class="form-group">
                <div class="input-group input-file" name="file_upload">
			<span class="input-group-btn">
        		<button class="btn btn-default btn-choose" type="button">Choose</button>
    		</span>
                    <input type="text" class="form-control" placeholder='Choose a file...' />
                    <span class="input-group-btn">
       			 <button class="btn btn-warning btn-reset" type="button">Reset</button>
    		</span>
                </div>
            </div>
            <!-- COMPONENT END -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
            <p>Submit is disabled because it's not handle on this site
            <p>Input Reset or Input Choose can be omitted
            <p>Input Reset or Input Choose can be placed on left or right
        </form>


        <h3>Another example</h3>
        <form method="POST" action="#" enctype="multipart/form-data">
            <!-- COMPONENT START -->
            <div class="form-group">
                <div class="input-group input-file" name="Fichier1">
                    <input type="text" class="form-control" placeholder='Choose a file...' />
                    <span class="input-group-btn">
        		<button class="btn btn-default btn-choose" type="button">Choose</button>
    		</span>


                </div>
            </div>
            <!-- COMPONENT END -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>

@endsection


@section('footer')
    @parent



@endsection




