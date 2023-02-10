@extends ('gc7layouts.main')

@section('title')
    QrCode3
@endsection

@section('main')
    <h1>QrCode3 Page</h1>
    <p>Code <strong>QR-Scanner</strong></p>

    @php
        echo $data;
    @endphp

    <hr>

    <a href="./../test_html">Test HTML</a>

    <script type="module">
        window.addEventListener('DOMContentLoaded', (event) => {
        console.log('Ready for QR-Scanner')
        })
    </script>
@endsection
