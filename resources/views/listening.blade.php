@extends('layout')

@section('title', 'Listening')

@section('content')
    Listening Class
@endsection

@section('body')
<br>
<br>
    <h3>How to submit your speaking recording:</h3>

    {{-- <h5> Online Submit </h5>
    1.  Write your Korean name & English name on the form.<br>
    2.  Record your voice.<br>
    3.  Submit. <br>
    <!-- https://developers.google.com/web/fundamentals/media/recording-audio/ --> 
    <input type='text'><br>
    <input type="file" accept="audio/*" capture id="recorder"><br>
    <audio id="player" controls></audio>
    <script>
        var recorder = document.getElementById('recorder');
        var player = document.getElementById('player');

        recorder.addEventListener('change', function(e) {
            var file = e.target.files[0];
            // Do something with the audio file.
            player.srcObject = file;
        });
    </script> --}}
    
    <div class="links">
        <a target="_blank" href="https://drive.google.com/drive/folders/1FHOVLtJ59ve4Vah4TMw7UfY_a4llrlcQ?usp=sharing">Google Link</a>
    </div>

    <h5> Kakao </h5>
    1.  Find your Class Kakao Group.<br>
    2.  Please write your Korean name & English name.<br>
    3.  Create a voice note.<br>

    
@endsection